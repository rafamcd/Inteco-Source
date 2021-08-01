<?php
class cadcliController extends Controller {

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
        
        $total_clientes = $c->getTotalClientesFiltro($filtros);
        
        $p = 1;	

	if (isset($_GET['p']) && !empty($_GET['p'])) {
		$p = addslashes($_GET['p']);
	}

	$qtd_por_pagina = 5;
	$total_paginas = ceil($total_clientes / $qtd_por_pagina);

	$clientes = $c->getClientesFiltro($p, $qtd_por_pagina, $filtros);
        
        $dados['total_clientes'] = $total_clientes;  
        $dados['limit_clientes'] = $qtd_por_pagina;
        $dados['total_paginas'] = $total_paginas;
        $dados['clientes'] = $clientes;
        $dados['filtros'] = $filtros;
        $dados['p'] = $p;

        $this->loadTemplate('cadcli', $dados);
    }
    
     public function add() {
        $dados = array(
            'clientes' => array()
        );
        
        if  (isset($_POST['nome']) && !empty($_POST['nome']) && !empty($_POST['id'])) {
             
            $id = addslashes($_POST['id']);
            $nome = utf8_decode(addslashes($_POST['nome']));
            $telefone = addslashes($_POST['telefone']);
            $cnpj = addslashes($_POST['cnpj']);
            $endereco_rua = utf8_decode(addslashes($_POST['endereco_rua']));
            $endereco_bairro = utf8_decode(addslashes($_POST['endereco_bairro']));
            $endereco_cep = addslashes($_POST['cep']);
            $email = addslashes($_POST['email']);
            $site = addslashes($_POST['site']);
            $site_portal = addslashes($_POST['site_portal']);
            $site_einf = addslashes($_POST['site_einf']);
            $tipo = addslashes($_POST['tipo']);
            $imagem = $_FILES['imagem'];   
            
            if (!empty($_FILES['imagem']['tmp_name'])) { 
                if (in_array($imagem['type'], array('image/jpeg','image/jpg','image/png'))) {
                        $ext = '.jpg';
                    if ($imagem['type'] == 'image/png') {
                        $ext = '.png';
                    }
                }
                $md5imagem = md5(time().rand(0,9999)).$ext;                
                $endereco = 'assets/images/clientes/'.$md5imagem;
                move_uploaded_file($imagem['tmp_name'], $endereco);
            } else {                
                $md5imagem='noimage.jpg';                
            }   
                $cli = new Cliente();
                $cli->inserir($id, $nome, $telefone, $cnpj, $endereco_rua, $endereco_bairro, $endereco_cep, $email, $site, $site_portal, $site_einf, $tipo, $md5imagem);
                header("Location: /novo/painel/cadcli");            
        }
        
        $this->loadTemplate('cadcli_add', $dados);
    }
    
    public function edit($id) {
        $dados = array();
        
        $cli = new Cliente();
        $dados['cliente'] = $cli->getCliente($id);
        
        if  (isset($_POST['nome']) && !empty($_POST['nome'])) {
            
            $nome = utf8_decode(addslashes($_POST['nome']));
            $telefone = addslashes($_POST['telefone']);
            $cnpj = addslashes($_POST['cnpj']);
            $endereco_rua = utf8_decode(addslashes($_POST['endereco_rua']));
            $endereco_bairro = utf8_decode(addslashes($_POST['endereco_bairro']));
            $endereco_cep = addslashes($_POST['cep']);
            $email = addslashes($_POST['email']);
            $site = addslashes($_POST['site']);
            $site_portal = addslashes($_POST['site_portal']);
            $site_einf = addslashes($_POST['site_einf']);
            $tipo = addslashes($_POST['tipo']);
            
            
            $cli->updateCliente($id, $nome, $telefone, $cnpj, $endereco_rua, $endereco_bairro, $endereco_cep, $email, $site, $site_portal, $site_einf, $tipo);
            
            if (!empty($_FILES['imagem']['tmp_name'])) {
                $imagem = $_FILES['imagem'];
            
                if (in_array($imagem['type'], array('image/jpeg','image/jpg','image/png'))) {
                    $ext = '.jpg';
                    if ($imagem['type'] == 'image/png') {
                        $ext = '.png';
                    }
                    $md5imagem = md5(time().rand(0,9999)).$ext;                
                    $endereco = 'assets/images/clientes/'.$md5imagem;
                    move_uploaded_file($imagem['tmp_name'], $endereco);                    

                    $cli->apagaImagemAnterior($id);
                    $cli->updateImagemCliente($id, $md5imagem);                    
                }
            }            
            header("Location: /novo/painel/cadcli");
        }
        
        $this->loadTemplate('cadcli_edit', $dados);
    }
    
    public function remove($id) {
        if (!empty($id)) {
            
           $c = new Cliente();
           $c->apagaImagemAnterior($id);
           $c->remover($id);
           
           header("Location: /novo/painel/cadcli");
            
        }
    }

}