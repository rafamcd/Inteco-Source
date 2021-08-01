<?php
class caduserController extends Controller {

    public function __construct() {
        parent::__construct();
        
        $u = new Usuario();
        if ($u->isLogged() == false) {
            header("Location: /novo/painel/login");
        } 
    }
    
    public function index() {
        $dados = array();
        $u = new Usuario();         
        
        $filtros = array (
            'grupos' => ''
        );        
        if (isset($_GET['filtros'])) {
		$filtros = $_GET['filtros'];
	}
        
        $total_usuarios = $u->getTotalUsuariosFiltro($filtros);
        
        $p = 1;	

	if (isset($_GET['p']) && !empty($_GET['p'])) {
		$p = addslashes($_GET['p']);
	}

	$qtd_por_pagina = 5;
	$total_paginas = ceil($total_usuarios / $qtd_por_pagina);

	$usuarios = $u->getUsuariosFiltro($p, $qtd_por_pagina, $filtros);
        
        $dados['total_usuarios'] = $total_usuarios;  
        $dados['limit_usuarios'] = $qtd_por_pagina;
        $dados['total_paginas'] = $total_paginas;
        $dados['usuarios'] = $usuarios;
        $dados['filtros'] = $filtros;
        $dados['grupos'] = $u->getGrupos();
        $dados['p'] = $p;

        $this->loadTemplate('caduser', $dados);
    }
    
     public function add() {
        $dados = array(
            'usuarios' => array(),
            'grupos' => array()
        );
        
        $u = new Usuario();
        $f = new Funcionario();
        $c = new Cliente();
        $dados['grupos'] = $u->getGrupos();
        $dados['funcionarios'] = $f->getFuncionariosTodos();
        $dados['clientes'] = $c->getClientesTodos();
        
        if  (isset($_POST['user']) && !empty($_POST['user'])) {
             
            $user = utf8_decode(addslashes($_POST['user']));
            $id_funcionario = addslashes($_POST['id_funcionario']);
            $id_cliente = addslashes($_POST['id_cliente']);
            $senha = md5($_POST['senha']);
            $grupo_usuario_id = addslashes($_POST['grupo_usuario_id']);
            
            $imagem = $_FILES['imagem'];   
            
            if (!empty($_FILES['imagem']['tmp_name'])) { 
                
                if (in_array($imagem['type'], array('image/jpeg','image/jpg','image/png'))) {
                        $ext = '.jpg';
                    if ($imagem['type'] == 'image/png') {
                        $ext = '.png';
                    }
                }
                $md5imagem = md5(time().rand(0,9999)).$ext;                
                $endereco = 'assets/images/usuarios/'.$md5imagem;
                move_uploaded_file($imagem['tmp_name'], $endereco);
                
            } else {                
                $md5imagem='noimage.jpg';                
            }   
                
                $u->inserir($user, $id_funcionario, $id_cliente, $senha, $grupo_usuario_id, $md5imagem);
                header("Location: /novo/painel/caduser");            
        }
        
        $this->loadTemplate('caduser_add', $dados);
    }
    
    public function edit($id) {
        $dados = array();
        
        $u = new Usuario();
        $f = new Funcionario();
        $c = new Cliente();
        $dados['grupos'] = $u->getGrupos();
        $dados['funcionarios'] = $f->getFuncionariosTodos();
        $dados['clientes'] = $c->getClientesTodos();        
        $dados['usuario'] = $u->getUsuario($id);
        
        if  (isset($_POST['user']) && !empty($_POST['user'])) {
            
            $user = utf8_decode(addslashes($_POST['user']));
            $id_funcionario = addslashes($_POST['id_funcionario']);
            $id_cliente = addslashes($_POST['id_cliente']);
            $grupo_usuario_id = addslashes($_POST['grupo_usuario_id']);  
            
            if (isset($_POST['senha']) && !empty($_POST['senha'])) {
                $senha = md5($_POST['senha']);                
                $u->updateSenha($id, $senha);               
            }
            
            $u->updateUsuario($id, $user, $id_funcionario, $id_cliente, $grupo_usuario_id);
            
            if (!empty($_FILES['imagem']['tmp_name'])) {
                $imagem = $_FILES['imagem'];
            
                if (in_array($imagem['type'], array('image/jpeg','image/jpg','image/png'))) {
                    $ext = '.jpg';
                    if ($imagem['type'] == 'image/png') {
                        $ext = '.png';
                    }
                    $md5imagem = md5(time().rand(0,9999)).$ext;                
                    $endereco = 'assets/images/usuarios/'.$md5imagem;
                    move_uploaded_file($imagem['tmp_name'], $endereco);                    

                    $u->apagaImagemAnterior($id);
                    $u->updateImagemUsuario($id, $md5imagem);                    
                }
            }            
            header("Location: /novo/painel/caduser");
        }
        
        $this->loadTemplate('caduser_edit', $dados);
    }
    
    public function remove($id) {
      if ($_SESSION['user'] == 'roseli' or $_SESSION['user'] == 'rubens' or $_SESSION['user'] == 'rafamcd') {  
        if (!empty($id)) {
            
           $u = new Usuario();
           $u->apagaImagemAnterior($id);
           $u->remover($id);
           
           header("Location: /novo/painel/caduser");
            
        }
      } else {
          header("Location: /novo/painel/caduser");
      }
    }

}