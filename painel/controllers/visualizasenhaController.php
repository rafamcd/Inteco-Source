<?php
class visualizasenhaController extends Controller {

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
        $arraySenha = array();        
        if (isset($_GET['cli']) && !empty($_GET['cli'])) {
            $arraySenha = $c->getSenhasCli($_GET['cli']);            
        }       
        
        $clientes = $c->getClientesTodos();        
        $dados['clientes'] = $clientes;
        $dados['senhas'] = $arraySenha;
        
        $this->loadTemplate('visualizasenha', $dados);
    }

}