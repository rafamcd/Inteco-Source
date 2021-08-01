<?php
class homeController extends Controller {

    public function __construct() {
        parent::__construct();
        
        $u = new Usuario();
        if ($u->isLogged() == false) {
            header("Location: /novo/painel/login");
        } 
    }
    
    public function index() {
        $dados = array(
            'permissao' => array()
        );
        
        $p = new Permissao();
        $dados['permissao'] = $p->getPermissao($_SESSION['lginteco']);
        
        $s = new Senha();
        $dados['ultima_sinc'] = $s->getUltimaSinc();
        
  
        $this->loadTemplate('home', $dados);
    }

}