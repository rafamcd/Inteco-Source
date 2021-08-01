<?php
class grupouserController extends Controller {

    public function __construct() {
        parent::__construct();
        
        $u = new Usuario();
        if ($u->isLogged() == false) {
            header("Location: /novo/painel/login");
        } 
    }
    
    public function index() {
        $dados = array();
        
        $g = new Grupo();
        $dados['grupos'] = $g->getGrupos();
        
        $this->loadTemplate('grupos', $dados);
    }
    
    public function add() {
        $dados = array();
        
        if (isset($_POST['descricao']) && !empty($_POST['descricao'])) {
            $g = new Grupo();
            $g->addGrupo($_POST['descricao']);
            header("Location: /novo/painel/grupouser");
        }
        $this->loadTemplate('grupos_add', $dados);
    }
    
    public function edit($id) {
        $dados = array();
        $g = new Grupo();
        
        if (isset($_POST['descricao']) && !empty($_POST['descricao'])) {
            $g->editGrupo($_POST['descricao'], $id);
            header("Location: /novo/painel/grupouser");
        }
        
        $dados['grupo'] = $g->getGrupo($id);
        
        $this->loadTemplate('grupos_edit', $dados);
    }
    
    public function remove($id) {
        if (!empty($id)) {
            
           $g = new Grupo();
           $g->removeGrupo($id);
           
           header("Location: /novo/painel/grupouser");
            
        }
    }

}