<?php
class cadfuncController extends Controller {

    public function __construct() {
        parent::__construct();
        
        $u = new Usuario();
        if ($u->isLogged() == false) {
            header("Location: /novo/painel/login");
        } 
    }
    
    public function index() {
        $dados = array();
        $f = new Funcionario(); 
        $setor = new Setor();
        
        $filtros = array (
            'setor' => ''
        );        
        if (isset($_GET['filtros'])) {
		$filtros = $_GET['filtros'];
	}
        
        $total_funcionarios = $f->getTotalFuncionariosFiltro($filtros);
        
        $p = 1;	

	if (isset($_GET['p']) && !empty($_GET['p'])) {
		$p = addslashes($_GET['p']);
	}

	$qtd_por_pagina = 5;
	$total_paginas = ceil($total_funcionarios / $qtd_por_pagina);

	$funcionarios = $f->getFuncionariosFiltro($p, $qtd_por_pagina, $filtros);
        
        $dados['total_funcionarios'] = $total_funcionarios;  
        $dados['limit_funcionarios'] = $qtd_por_pagina;
        $dados['total_paginas'] = $total_paginas;
        $dados['funcionarios'] = $funcionarios;
        $dados['filtros'] = $filtros;
        $dados['setores'] = $setor->getSetores();
        $dados['p'] = $p;

        $this->loadTemplate('cadfunc', $dados);
    }
    
     public function add() {
        $dados = array(
            'funcionarios' => array(),
            'setores' => array()
        );
        
        $setor = new Setor();
        $dados['setores'] = $setor->getSetores();
        
        if  (isset($_POST['nome']) && !empty($_POST['nome'])) {
             
            $nome = utf8_decode(addslashes($_POST['nome']));
            $skype = utf8_decode(addslashes($_POST['skype']));
            
            $data_nascimento = $_POST['data_nascimento'];
            if (!empty($_POST['data_nascimento'])) {                
                $data_nascimento = $_POST['data_nascimento'];     
            }          
            
            $fone = addslashes($_POST['fone']);
            $cpf = addslashes($_POST['cpf']);
            $email = addslashes($_POST['email']);
            $endereco_rua = utf8_decode(addslashes($_POST['endereco_rua']));
            $endereco_bairro = utf8_decode(addslashes($_POST['endereco_bairro']));
            $endereco_cep = addslashes($_POST['cep']);            
            $setor = addslashes($_POST['tipo']);
            $imagem = $_FILES['imagem'];   
            
            if (!empty($_FILES['imagem']['tmp_name'])) { 
                if (in_array($imagem['type'], array('image/jpeg','image/jpg','image/png'))) {
                        $ext = '.jpg';
                    if ($imagem['type'] == 'image/png') {
                        $ext = '.png';
                    }
                }
                $md5imagem = md5(time().rand(0,9999)).$ext;                
                $endereco = 'assets/images/funcionarios/'.$md5imagem;
                move_uploaded_file($imagem['tmp_name'], $endereco);
            } else {                
                $md5imagem='noimage.jpg';                
            }   
                $fun = new Funcionario();
                $fun->inserir($nome, $skype, $data_nascimento, $fone, $cpf, $email, $md5imagem, $endereco_rua, $endereco_bairro, $endereco_cep, $setor);
                header("Location: /novo/painel/cadfunc");            
        }
        
        $this->loadTemplate('cadfunc_add', $dados);
    }
    
    public function edit($id) {
        $dados = array();
        
        $func = new Funcionario();
        $dados['funcionario'] = $func->getFuncionario($id);
        $setor = new Setor();
        $dados['setores'] = $setor->getSetores();
        
        if  (isset($_POST['nome']) && !empty($_POST['nome'])) {
            
            $nome = utf8_decode(addslashes($_POST['nome']));
            $skype = utf8_decode(addslashes($_POST['skype']));            
            
            $data_nascimento = $_POST['data_nascimento'];
            if (!empty($_POST['data_nascimento'])) {
                
                $data_nascimento = $_POST['data_nascimento'];                
            }            
            
            
            $fone = addslashes($_POST['fone']);
            $cpf = addslashes($_POST['cpf']);
            $email = addslashes($_POST['email']);
            $endereco_rua = utf8_decode(addslashes($_POST['endereco_rua']));
            $endereco_bairro = utf8_decode(addslashes($_POST['endereco_bairro']));
            $endereco_cep = addslashes($_POST['cep']);            
            $setor = addslashes($_POST['tipo']);
            
            
            $func->updateFuncionario($id, $nome, $skype, $data_nascimento, $fone, $cpf, $email, $endereco_rua, $endereco_bairro, $endereco_cep, $setor);
            
            if (!empty($_FILES['imagem']['tmp_name'])) {
                $imagem = $_FILES['imagem'];
            
                if (in_array($imagem['type'], array('image/jpeg','image/jpg','image/png'))) {
                    $ext = '.jpg';
                    if ($imagem['type'] == 'image/png') {
                        $ext = '.png';
                    }
                    $md5imagem = md5(time().rand(0,9999)).$ext;                
                    $endereco = 'assets/images/funcionarios/'.$md5imagem;
                    move_uploaded_file($imagem['tmp_name'], $endereco);                    

                    $func->apagaImagemAnterior($id);
                    $func->updateImagemFuncionario($id, $md5imagem);                    
                }
            }            
            header("Location: /novo/painel/cadfunc");
        }
        
        $this->loadTemplate('cadfunc_edit', $dados);
    }
    
    public function remove($id) {
        if (!empty($id)) {
            
           $f = new Funcionario();
           $f->apagaImagemAnterior($id);
           $f->remover($id);
           
           header("Location: /novo/painel/cadfunc");
            
        }
    }

}