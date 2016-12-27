<?php

class homeController extends Controller {

    protected $examesModel;
    
    public function __construct() {
        parent::__construct(); //executa do contrutor da classe extendida, sou seja, executa o construtor da Classe Controller
        $this->examesModel = new ExamesModel();
    }

    public function index() {
        $dados = array();
        $dados['contagem'] = $this->examesModel->contaExames();
        $dados['contexaaberto'] = $this->examesModel->contaExamesResultadoAberto();
        $this->loadTemplate('homeView', $dados);
    }

}
