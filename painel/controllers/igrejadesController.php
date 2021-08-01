<?php
class igrejadesController extends Controller {

    public function index() {
        $dados = array();

        $this->loadTemplate('igrejades', $dados);
    }

}