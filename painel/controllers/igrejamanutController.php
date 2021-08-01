<?php
class igrejamanutController extends Controller {

    public function index() {
        $dados = array();

        $this->loadTemplate('igrejamanut', $dados);
    }

}