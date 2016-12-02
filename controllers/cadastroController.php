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
        $dados['labs'] = $this->laboratoriosModel->getLaboratorios();
        $dados['tipoExame'] = $this->laboratoriosModel->getTipoExame();
        $this->loadTemplate('cadastroExameView', $dados);



        /*
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
        
        $this->loadTemplate('cadastroExameView', $dados); */
    }
    
    public function cadastrar_exame() {
        
        $num_exame = $_POST['num_exame'];
        $data_exame = $_POST['data_exame'];
        $medico = $_POST['medico'];
        $lab = $_POST['lab'];
        $tipo_exame = $_POST['tipo_exame'];
       
        $erros = array('erro1'=>'','erro2'=>'','erro3'=>'','erro4'=>'','erro5'=>'','sucesso'=>'');
        
        if (isset($num_exame) && empty($num_exame)) {
            $erros['erro1'] = "Número do Exame obrigatório!";
        } 
        if (isset($data_exame) && empty($data_exame)) {
            $erros['erro2'] = "Data do Exame obrigatória!";
        } 
        if (isset($medico) && empty($medico)) {
            $erros['erro3'] = "Selecione um(a) Médico(a)!";
        } 
        if (isset($lab) && empty($lab)) {
            $erros['erro4'] = "Selecione um Laboratório!";
        } 
        if (isset($tipo_exame) && empty($tipo_exame)) {
            $erros['erro5'] = "Selecione um Tipo de Exame!";
        } 
        if (!empty($num_exame) && !empty($data_exame)) {
            $erros['sucesso'] = "Dados Cadastrados";
        }
            
        echo json_encode($erros);
       
    }
    

    
}