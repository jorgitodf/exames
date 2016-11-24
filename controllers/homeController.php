<?php

class homeController extends Controller {

    public function __construct() {
        parent::__construct(); //executa do contrutor da classe extendida, sou seja, executa o construtor da Classe Controller
    }

    public function index() {
        $dados = array();
       
        $this->loadTemplate('homeView', $dados);
    }

}
