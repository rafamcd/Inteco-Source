<?php
class cadmenusiteController extends Controller {

    public function __construct() {
        parent::__construct();
        
        $u = new Usuario();
        if ($u->isLogged() == false) {
            header("Location: /novo/painel/login");
        } 
    }
    
    public function index() {
        $dados = array();
        $m = new Menu();         
        
        $menus = $m->getMenusSite();	
        
        $dados['menus'] = $menus;          

        $this->loadTemplate('cadmenusite', $dados);
    }
    
     public function add() {
        $dados = array();
        
        $m = new Menu();
        
        
        if  (isset($_POST['descricao']) && !empty($_POST['descricao'])) {
             
            $descricao = utf8_decode(addslashes($_POST['descricao']));
            $tipo = 1;
            $url = addslashes($_POST['url']);                        
            
                $id = $m->inserir($descricao, $tipo, $url, null, 0);
                if (!empty($_POST['sub1'])) {
                    $sub1 = utf8_decode(addslashes($_POST['sub1']));
                    $sub1c = utf8_decode(addslashes($_POST['sub1c']));
                    $m->inserirSub($id, $sub1, $sub1c);
                }
                if (!empty($_POST['sub2'])) {
                    $sub2 = utf8_decode(addslashes($_POST['sub2']));
                    $sub2c = utf8_decode(addslashes($_POST['sub2c']));
                    $m->inserirSub($id, $sub2, $sub2c);
                }
                if (!empty($_POST['sub3'])) {
                    $sub3 = utf8_decode(addslashes($_POST['sub3']));
                    $sub3c = utf8_decode(addslashes($_POST['sub3c']));
                    $m->inserirSub($id, $sub3, $sub3c);
                }
                header("Location: /novo/painel/cadmenusite");            
        }
        
        $this->loadTemplate('cadmenusite_add', $dados);
    }
    
    
    public function remove($id) {
        if (!empty($id)) {
            
           $m = new Menu();           
           $m->removerMenuSite($id);
           
           header("Location: /novo/painel/cadmenusite");
            
        }
    }

}