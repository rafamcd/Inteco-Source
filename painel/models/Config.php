<?php

class Config extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getConfig() {
            $array = array();
            
            $sql = "SELECT * FROM config";
            $sql = $this->db->query($sql);
            
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }
            
            return $array;
        }
        
        public function setPropriedade($campo, $valor) {
            
            $sql = "UPDATE config set '$campo' = '$valor'";
            $this->db->query($sql);
        }
        public function updateImagemBanner($md5imagem) {
            $this->db->query("UPDATE config SET banner = '$md5imagem'");
        }
        public function updateImagemS1($md5imagem) {
            $this->db->query("UPDATE config SET slide_img1 = '$md5imagem'");
        }
        public function updateImagemS2($md5imagem) {
            $this->db->query("UPDATE config SET slide_img2 = '$md5imagem'");
        }
        public function updateImagemS3($md5imagem) {
            $this->db->query("UPDATE config SET slide_img3 = '$md5imagem'");
        }
        public function updateImagemS4($md5imagem) {
            $this->db->query("UPDATE config SET slide_img4 = '$md5imagem'");
        }
        public function updateImagemS5($md5imagem) {
            $this->db->query("UPDATE config SET slide_img5 = '$md5imagem'");
        }
        public function updateTitulo($titulo) {
            $this->db->query("UPDATE config SET site_title = '$titulo'");
        }
    
}

