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
        $dados['medicos'] = $this->medicosModel->getMedicos();
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
        
        if (isset($_POST)) {
            
            $status = TRUE;
            
            $num_exame = addslashes($_POST['num_exame']);
            $data_exame = addslashes($_POST['data_exame']);
            $medico = intval(addslashes($_POST['medico']));
            $lab = intval(addslashes($_POST['lab']));
            $tipo_exame = intval(addslashes($_POST['tipo_exame']));
            
            ValidacoesHelper::validarNumeroExame($numeroExame);
            
            if (empty($num_exame)) {
                $erroNumExame = '
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#numExameError").html("Número do Exame é obrigatório!");
                        $("#numExameError").css("display","block");
                    });
                </script>';
                $status = false;
                echo $erroNumExame;
            } else if (!is_numeric($num_exame)) {
                $erroNumExame = '
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#numExameError").html("Número do Exame só aceita números");
                            $("#numExameError").css("display","block");
                        });
                    </script>';
                echo $erroNumExame;			
            }
            
            if (empty($data_exame)) {
                $erroDataExame = '
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#dataExameError").html("Data do Exame é obrigatória!");
                        $("#dataExameError").css("display","block");
                    });
                </script>';
                $status = false;
                echo $erroDataExame;
            } 
            if (empty($medico)) {
                $erroMed = '
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#medicoError").html("Informe um Médico!");
                        $("#medicoError").css("display","block");
                    });
                </script>';
                $status = false;
                echo $erroMed;
            }
            if (empty($lab)) {
                $erroLab = '
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#laboratotioError").html("Informe um Laboratório!");
                        $("#laboratotioError").css("display","block");
                    });
                </script>';
                $status = false;
                echo $erroLab;
            } 
            if (empty($tipo_exame)) {
                $erroTipoExame = '
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#tipoExameError").html("Informe um Tipo de Exame!");
                        $("#tipoExameError").css("display","block");
                    });
                </script>';
                $status = false;
                echo $erroTipoExame;
            } 
            
            if ($status == TRUE) {
                echo '
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#sucessoError").html("Exame Cadastrado com Sucesso !");
                        $("#sucessoError").css("display","block");
                    });
                </script> ';  
                
            }
            
        } else {
            $this->index();
        }
       
    }
    

    
}