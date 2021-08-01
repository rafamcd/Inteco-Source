<?php
class permissoesController extends Controller {

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

        $this->loadTemplate('permissoes', $dados);
    }
    public function edit($id_grupo) {
        $dados = array();
        
        $p = new Permissao();
        $m = new Menu();
       
        if (isset($_POST) && !empty($_POST)) {

            
            if (isset($_POST['check1'])) {
                $p->inserePermissao(1, $id_grupo);
            } else {
                $p->deletePermissao(1, $id_grupo);  
            }
            if (isset($_POST['check2'])) {
                $p->inserePermissao(2, $id_grupo);
            } else {
                $p->deletePermissao(2, $id_grupo);  
            }
            if (isset($_POST['check3'])) {
                $p->inserePermissao(3, $id_grupo);
            } else {
                $p->deletePermissao(3, $id_grupo);  
            }
            if (isset($_POST['check4'])) {
                $p->inserePermissao(4, $id_grupo);
            } else {
                $p->deletePermissao(4, $id_grupo);  
            }
            if (isset($_POST['check5'])) {
                $p->inserePermissao(5, $id_grupo);
            } else {
                $p->deletePermissao(5, $id_grupo);  
            }
            if (isset($_POST['check6'])) {
                $p->inserePermissao(6, $id_grupo);
            } else {
                $p->deletePermissao(6, $id_grupo);  
            }
            if (isset($_POST['check7'])) {
                $p->inserePermissao(7, $id_grupo);
            } else {
                $p->deletePermissao(7, $id_grupo);  
            }
            if (isset($_POST['check8'])) {
                $p->inserePermissao(8, $id_grupo);
            } else {
                $p->deletePermissao(8, $id_grupo);  
            }
            if (isset($_POST['check9'])) {
                $p->inserePermissao(9, $id_grupo);
            } else {
                $p->deletePermissao(9, $id_grupo);  
            }
            if (isset($_POST['check10'])) {
                $p->inserePermissao(10, $id_grupo);
            } else {
                $p->deletePermissao(10, $id_grupo);  
            }
            if (isset($_POST['check11'])) {
                $p->inserePermissao(11, $id_grupo);
            } else {
                $p->deletePermissao(11, $id_grupo);  
            }
            if (isset($_POST['check12'])) {
                $p->inserePermissao(12, $id_grupo);
            } else {
                $p->deletePermissao(12, $id_grupo);  
            }
            if (isset($_POST['check13'])) {
                $p->inserePermissao(13, $id_grupo);
            } else {
                $p->deletePermissao(13, $id_grupo);  
            }
            if (isset($_POST['check14'])) {
                $p->inserePermissao(14, $id_grupo);
            } else {
                $p->deletePermissao(14, $id_grupo);  
            }
            if (isset($_POST['check15'])) {
                $p->inserePermissao(15, $id_grupo);
            } else {
                $p->deletePermissao(15, $id_grupo);  
            }
            if (isset($_POST['check16'])) {
                $p->inserePermissao(16, $id_grupo);
            } else {
                $p->deletePermissao(16, $id_grupo);  
            }
            if (isset($_POST['check17'])) {
                $p->inserePermissao(17, $id_grupo);
            } else {
                $p->deletePermissao(17, $id_grupo);  
            }
            if (isset($_POST['check18'])) {
                $p->inserePermissao(18, $id_grupo);
            } else {
                $p->deletePermissao(18, $id_grupo);  
            }
            if (isset($_POST['check19'])) {
                $p->inserePermissao(19, $id_grupo);
            } else {
                $p->deletePermissao(19, $id_grupo);  
            }
            if (isset($_POST['check10'])) {
                $p->inserePermissao(20, $id_grupo);
            } else {
                $p->deletePermissao(20, $id_grupo);  
            }
            header("Location: ".BASE_URL."painel/permissoes");
            
             
        }        
        $dados['grupoid'] = $id_grupo;
        $dados['gruponome'] = $p->getNomeGrupo($id_grupo);
        $dados['permissoes'] = $p->getPermissaoDoGrupo($id_grupo);
        
        $this->loadTemplate('permissoes_edit', $dados);
    }

}