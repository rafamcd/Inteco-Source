<?php
class configController extends Controller {

    public function __construct() {
        parent::__construct();
        
        $u = new Usuario();
        if ($u->isLogged() == false) {
            header("Location: /novo/painel/login");
        } 
    }
    
    public function index() {
        $dados = array();
        
        $c = new Config();
        $dados['config'] = $c->getConfig();
        $entrou = 0;
        
        if (isset($_POST['site_title']) && !empty($_POST['site_title'])) {
            $entrou = 1;
            $titulo = addslashes(utf8_decode($_POST['site_title']));
            $c->updateTitulo($titulo);
        }
        
        if (!empty($_FILES['banner']['tmp_name'])) {
            $banner = $_FILES['banner']; 
            $entrou = 1;
            
            if (in_array($banner['type'], array('image/jpeg','image/jpg','image/png'))) {
                    $ext = '.jpg';
                    if ($banner['type'] == 'image/png') {
                        $ext = '.png';
                    }
                    $md5imagem = md5(time().rand(0,9999)).$ext;                
                    $endereco = '../assets/configs/'.$md5imagem;
                    move_uploaded_file($banner['tmp_name'], $endereco);                                        
                    $c->updateImagemBanner($md5imagem);                    
                }
        }
        if (!empty($_FILES['slide_img1']['tmp_name'])) {
            $slide_img1 = $_FILES['slide_img1']; 
            $entrou = 1;
            
            if (in_array($slide_img1['type'], array('image/jpeg','image/jpg','image/png'))) {
                    $ext = '.jpg';
                    if ($slide_img1['type'] == 'image/png') {
                        $ext = '.png';
                    }
                    $md5imagem = md5(time().rand(0,9999)).$ext;                
                    $endereco = '../assets/configs/'.$md5imagem;
                    move_uploaded_file($slide_img1['tmp_name'], $endereco);                                        
                    $c->updateImagemS1($md5imagem);                    
                }
        }
        if (!empty($_FILES['slide_img2']['tmp_name'])) {
            $slide_img2 = $_FILES['slide_img2']; 
            $entrou = 1;
            if (in_array($slide_img2['type'], array('image/jpeg','image/jpg','image/png'))) {
                    $ext = '.jpg';
                    if ($slide_img2['type'] == 'image/png') {
                        $ext = '.png';
                    }
                    $md5imagem = md5(time().rand(0,9999)).$ext;                
                    $endereco = '../assets/configs/'.$md5imagem;
                    move_uploaded_file($slide_img2['tmp_name'], $endereco);                                        
                    $c->updateImagemS2($md5imagem);                    
                }
        }
        if (!empty($_FILES['slide_img3']['tmp_name'])) {
            $slide_img3 = $_FILES['slide_img3'];
            $entrou = 1;
            if (in_array($slide_img3['type'], array('image/jpeg','image/jpg','image/png'))) {
                    $ext = '.jpg';
                    if ($slide_img3['type'] == 'image/png') {
                        $ext = '.png';
                    }
                    $md5imagem = md5(time().rand(0,9999)).$ext;                
                    $endereco = '../assets/configs/'.$md5imagem;
                    move_uploaded_file($slide_img3['tmp_name'], $endereco);                                        
                    $c->updateImagemS3($md5imagem);                    
                }
        }
        if (!empty($_FILES['slide_img4']['tmp_name'])) {
            $slide_img4 = $_FILES['slide_img4']; 
            $entrou = 1;
            if (in_array($slide_img4['type'], array('image/jpeg','image/jpg','image/png'))) {
                    $ext = '.jpg';
                    if ($slide_img4['type'] == 'image/png') {
                        $ext = '.png';
                    }
                    $md5imagem = md5(time().rand(0,9999)).$ext;                
                    $endereco = '../assets/configs/'.$md5imagem;
                    move_uploaded_file($slide_img4['tmp_name'], $endereco);                                        
                    $c->updateImagemS4($md5imagem);                    
                }
        }
        if (!empty($_FILES['slide_img5']['tmp_name'])) {
            $slide_img5 = $_FILES['slide_img5']; 
            $entrou = 1;
            if (in_array($slide_img5['type'], array('image/jpeg','image/jpg','image/png'))) {
                    $ext = '.jpg';
                    if ($slide_img5['type'] == 'image/png') {
                        $ext = '.png';
                    }
                    $md5imagem = md5(time().rand(0,9999)).$ext;                
                    $endereco = '../assets/configs/'.$md5imagem;
                    move_uploaded_file($slide_img5['tmp_name'], $endereco);                                        
                    $c->updateImagemS5($md5imagem);                    
                }
        }
        
           if ($entrou == 1) {
               header("Location: /novo/painel/config");
               exit;
           }     
            
        
        $this->loadTemplateInPainel('config', $dados);
    }

}