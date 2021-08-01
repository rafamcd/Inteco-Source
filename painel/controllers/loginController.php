<?php
class loginController extends Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $dados = array(
            'aviso' => ''
        );
        
        if (isset($_POST['usuario']) && !empty($_POST['usuario'])) {
            $usuario = addslashes($_POST['usuario']);
            $senha = addslashes($_POST['senha']);
            
            $u = new Usuario();
            if ($u->isExiste($usuario, $senha)) {
                $uid = $u->getId($usuario);
                
                $_SESSION['lginteco'] = $uid;
                $_SESSION['nomeuser'] = $u->getNomeUsuario($uid);
                $_SESSION['tipouser'] = $u->getTipoUsuario($uid);
                $_SESSION['imagemuser'] = $u->getImagemUsuario($uid);
                $_SESSION['user'] = $usuario;
                
                header("Location: /novo/painel");
            } else {
                $dados['aviso'] = "Usuário e/ou senha inválidos.";
            }
        }
        
        $this->loadView('login', $dados);
    }
    public function logout() {
        unset($_SESSION['lginteco']);
        header("Location: /novo/painel/login");
    }
}