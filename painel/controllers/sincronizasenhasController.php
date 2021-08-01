<?php
class sincronizasenhasController extends Controller {

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
        $s = new Senha();
        $clientes = $c->getClientesVencimento();        
        $dados['vencimentos'] = $clientes;
        
        if (isset($_POST['senha']) && ($_POST['senha'] == 1)) {
            $s->sincronizarSenhas();
            header("Location: /novo/painel/sincronizasenhas");
        } else {
            $this->loadTemplate('sincronizasenhas', $dados);
        }        
        
    }

}