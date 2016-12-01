<?php

class referenciaController extends Controller {

    protected $referenciasModel;
    
    public function __construct() {
        parent::__construct(); //executa do contrutor da classe extendida, sou seja, executa o construtor da Classe Controller
        $this->referenciasModel = new ReferenciasModel();
    }

    public function index($id = null) {}
    
    public function ver($id = null) {
        $dados = array();
        if ($id != null && is_numeric($id) && $id > 0) {
            $dados['referencia'] = $this->referenciasModel->verReferencia($id);
            $this->loadTemplate('referenciaExameView', $dados);
        } else {
            header("Location: ".BASE_URL."/naoexiste");
            die();
        }
    }

}
