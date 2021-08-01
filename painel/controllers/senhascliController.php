<?php
class senhascliController extends Controller {

    public function __construct() {
        parent::__construct();
        
        $u = new Usuario();
        if ($u->isLogged() == false) {
            header("Location: /novo/painel/login");
        } 
    }
    
    public function index() {
        $dados = array(
            'senhas' => array()
        );
        
        $c = new Cliente();
        $u = new Usuario();
        $id_cliente = $u->getClienteId($_SESSION['lginteco']);
        
        $arraySenha = array();        
        $arraySenha = $c->getSenhasCli($id_cliente);            
        
        $dados['senhas'] = $arraySenha;
        
        $this->loadTemplate('senhascli', $dados);
    }

}