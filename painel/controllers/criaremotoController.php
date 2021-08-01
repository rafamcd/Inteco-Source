<?php
class criaremotoController extends Controller {

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
        $clientes = $c->getClientesTodos();        
        $dados['clientes'] = $clientes;
        
        
        $this->loadTemplate('criaremoto', $dados);
    }
    public function edit($id_cliente) {
        $dados = array();
        
        $ar = new AreaRemota();        
        $entrou = 0;
        if (isset($_POST) && !empty($_POST)) {
            $ar->delete($id_cliente);
        }
        
        if (isset($_POST['usuario1']) && !empty($_POST['usuario1'])) {
            $usuario = addslashes($_POST['usuario1']);
            $ar->insere($id_cliente,$usuario);
            $entrou = 1;
        }
        if (isset($_POST['usuario2']) && !empty($_POST['usuario2'])) {
            $usuario = addslashes($_POST['usuario2']);
            $ar->insere($id_cliente,$usuario);
            $entrou = 1;
        }
        if (isset($_POST['usuario3']) && !empty($_POST['usuario3'])) {
            $usuario = addslashes($_POST['usuario3']);
            $ar->insere($id_cliente,$usuario);
            $entrou = 1;
        }
        if (isset($_POST['usuario4']) && !empty($_POST['usuario4'])) {
            $usuario = addslashes($_POST['usuario4']);
            $ar->insere($id_cliente,$usuario);
            $entrou = 1;
        }
        if (isset($_POST['usuario5']) && !empty($_POST['usuario5'])) {
            $usuario = addslashes($_POST['usuario5']);
            $ar->insere($id_cliente,$usuario);
            $entrou = 1;
        }
        
        if ($entrou == 1) {
            
            header("Location: /novo/painel");
            exit;
        }
        
        $dados['arearemota'] = $ar->getAreaRemota($id_cliente);
        
        
        $this->loadTemplate('criaremoto_edit', $dados);
    }

}