<?php
class quemsomosController extends Controller {

    public function index() {
        $data = array();
        
        $this->loadTemplate('quemsomos', $data);
    }

}