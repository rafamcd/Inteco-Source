<?php
class igrejaforController extends Controller {

    public function index() {
        $dados = array();

        $this->loadTemplate('igrejafor', $dados);
    }

}