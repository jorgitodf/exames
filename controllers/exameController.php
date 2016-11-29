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
        if ($idExame != null && is_numeric($idExame) && $idExame > 0) {
            $dados['exameDetalhe'] = $this->examesModel->verDetalheExame($idExame);
            $this->loadTemplate('exameDetalheView', $dados);
        } else {
            header("Location: ".BASE_URL."/naoexiste");
            die();
        }
    }
    
    public function listar_ano($ano = null) {
        $dados = array();
        $cont = strlen($ano);
        if ($ano != null && is_numeric($ano) && $cont == 4) {
            $dados['examePorAno'] = $this->examesModel->listarExamePorAno($ano);
            $this->loadTemplate('examePorAnoView', $dados);
        } else {
            header("Location: ".BASE_URL."/naoexiste");
            die();
        }
    }

}