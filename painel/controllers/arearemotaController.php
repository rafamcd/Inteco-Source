<?php
class arearemotaController extends Controller {

    public function __construct() {
        parent::__construct();
        
        $u = new Usuario();
        if ($u->isLogged() == false) {
            header("Location: /novo/painel/login");
        } 
    }
    
    public function index() {
        $dados = array();
        
        $a = new AreaRemota();
        $clientes = $a->getClientesUsuarios();        
        $dados['clientes'] = $clientes;
        
        
        $this->loadTemplate('arearemota', $dados);
    }
    public function edit($id_ts) {
        $dados = array();
        
        $a = new AreaRemota();
        
        $a->removeTsVazio();
        
        $logado = $a->verificaLogado($id_ts);
        if (!empty($logado) && $logado ==$_SESSION['user']) {
            $a->removeTs($id_ts);
        } 
        if (empty($logado)) {
            $a->insereTs($id_ts);
        }        
        
        header("Location: /novo/painel/arearemota");
        exit;
        
    }

}