<?php
class clientesController extends Controller {

    public function index() {
        $data = array();
        
        $c = new ClienteSite();
        
        $data['clientes'] =  $c->getClientesTodosSite();
        
        $this->loadTemplate('clientes', $data);
    }

}