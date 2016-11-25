<?php

class exameController extends Controller {
    
    protected $examesModel;

    public function __construct() {
        parent::__construct(); //executa do contrutor da classe extendida, sou seja, executa o construtor da Classe Controller
        $this->examesModel = new ExamesModel();
    }

    public function index() {
        $dados = array();
        $dados['exames'] = $this->examesModel->listaGeralExames();
        $this->loadTemplate('exameGeralView', $dados);
    }
    
    public function ver($idExame = null) {
        $dados = array();
        if ($idExame != null && is_numeric($idExame)) {
            $dados['exameDetalhe'] = $this->examesModel->verDetalheExame($idExame);
            $this->loadTemplate('exameDetalheView', $dados);
        } else {
            header("Location: ".BASE_URL."/naoexiste");
            die();
        }
    }

}