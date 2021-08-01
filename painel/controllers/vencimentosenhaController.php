<?php
class vencimentosenhaController extends Controller {

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
        $clientes = $c->getClientesVencimento();        
        $dados['vencimentos'] = $clientes;
        
        
        $this->loadTemplate('vencimentosenha', $dados);
    }

}