<?php
class sistemasController extends Controller {

    public function index() {
        $data = array();
        
        $this->loadTemplate('sistemas', $data);
    }

}