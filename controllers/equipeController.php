<?php
class equipeController extends Controller {

    public function index() {
        $data = array();
        
        $f = new FuncionarioSite();
        
        $data['funcionarios'] =  $f->getFuncionariosTodos();
        
        $this->loadTemplate('equipe', $data);
    }

}