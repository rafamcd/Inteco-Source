<?php
class clientsemsenhaController extends Controller {

    public function __construct() {
        parent::__construct();
        
        $u = new Usuario();
        if ($u->isLogged() == false) {
            header("Location: /novo/painel/login");
        } 
    }
    
    public function index() {
        $dados = array();
        
        $c = new Cliente();
        $clientes = $c->getClientesSemSenha();        
        $dados['clientes'] = $clientes;
        
        
        $this->loadTemplate('clientsemsenha', $dados);
    }

}