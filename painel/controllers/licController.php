<?php
class licController extends Controller {

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
        
        $filtros = array (
            'tipo' => ''
        );        
        if (isset($_GET['filtros'])) {
		$filtros = $_GET['filtros'];
	}
        
        $total_clientes = $c->getTotalClientesLicFiltro($filtros);
        
        $p = 1;	

	if (isset($_GET['p']) && !empty($_GET['p'])) {
		$p = addslashes($_GET['p']);
	}

	$qtd_por_pagina = 5;
	$total_paginas = ceil($total_clientes / $qtd_por_pagina);

	$clientes = $c->getClientesLicFiltro($p, $qtd_por_pagina, $filtros);
        
        $dados['total_clientes'] = $total_clientes;  
        $dados['limit_clientes'] = $qtd_por_pagina;
        $dados['total_paginas'] = $total_paginas;
        $dados['clientes'] = $clientes;
        $dados['filtros'] = $filtros;
        $dados['p'] = $p;

        $this->loadTemplate('lic', $dados);
    }
    
     public function add() {
        $dados = array(
            'clientes' => array()
        );
        
        $c = new Cliente();
        $dados['clientes'] = $c->getClientesTodos();
        
        if  (!empty($_FILES['lic']['tmp_name'])) {
            
            $ext = new SplFileInfo($_FILES['lic']['name']);
            $ext = $ext->getExtension();
            
            $id = addslashes($_POST['id']);           
            $lic = $_FILES['lic'];                           
            
            if ($ext == 'LIC') {
                
                $endereco = 'assets/lics/'.$_FILES['lic']['name'];
                move_uploaded_file($lic['tmp_name'], $endereco);            

                $c->inserirLic($id, $_FILES['lic']['name']);
            }               
                
                header("Location: /novo/painel/lic");            
        }
        
        $this->loadTemplate('lic_add', $dados);
    }
    
    public function remove($id) {
        if ($_SESSION['user'] == 'roseli' or $_SESSION['user'] == 'rubens' or $_SESSION['user'] == 'rafamcd') {
        if (!empty($id)) {
            
           $c = new Cliente();  
           $c->apagaLicAnterior($id);
           $c->removerLic($id);
           
           header("Location: /novo/painel/lic");
            
        }
        } else {
            header("Location: /novo/painel/lic"); 
        }
    }

}