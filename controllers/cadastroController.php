<?php

class cadastroController extends Controller {
    
    protected $examesModel;
    protected $medicosModel;
    protected $laboratoriosModel;

    public function __construct() {
        parent::__construct(); //executa do contrutor da classe extendida, sou seja, executa o construtor da Classe Controller
        $this->examesModel = new ExamesModel();
        $this->medicosModel = new MedicosModel();
        $this->laboratoriosModel = new LaboratoriosModel();
    }

    public function index() {
        $dados = array();
        $dados['medicos'] = $this->medicosModel->getMedicos();
        $dados['labs'] = $this->laboratoriosModel->getLaboratorios();
        $dados['tipoExame'] = $this->laboratoriosModel->getTipoExame();
        
        $status = "";
        if (isset($_POST['num_exame']) && empty($_POST['num_exame'])) {
            echo "Campo num_exame vazio";
            $status = false;
        }
        if (isset($_POST['data_exame']) && empty($_POST['data_exame'])) {
            echo "Campo data_exame vazio";
            $status = false;
        }
        if (isset($_POST['medico']) && empty($_POST['medico'])) {
            echo "Campo medico vazio";
            $status = false;
        }
        if (isset($_POST['lab']) && empty($_POST['lab'])) {
            echo "Campo lab vazio";
            $status = false;
        }
        if (isset($_POST['tipo_exame']) && empty($_POST['tipo_exame'])) {
            echo "Campo tipo_exame vazio";
            $status = false;
        }
        
        if ($status == true) {
            $nomeExame = trim(addslashes($_POST['num_exame']));
            $dataExame = trim(addslashes($_POST['data_exame']));
            $medico = trim(addslashes($_POST['medico']));
            $lab = trim(addslashes($_POST['lab']));
            $tipoExame = trim(addslashes($_POST['tipo_exame']));
        }    
        
        $this->loadTemplate('cadastroExameView', $dados);
    }
    
}