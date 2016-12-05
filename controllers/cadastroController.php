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
    }
    
    public function cadastrar_exame() {
        
        if (isset($_POST)) {
            
            $status = TRUE;
            
            $num_exame = addslashes($_POST['num_exame']);
            $data_exame = addslashes($_POST['data_exame']);
            $medico = addslashes($_POST['medico']);
            $lab = addslashes($_POST['lab']);
            $tipo_exame = addslashes($_POST['tipo_exame']);
            
            ValidacoesHelper::validarNumeroExame($num_exame);
            if (ValidacoesHelper::validarNumeroExame($num_exame) == TRUE) {
                $status = FALSE;
                echo ValidacoesHelper::validarNumeroExame($num_exame);
            }
            ValidacoesHelper::validarData($data_exame);
            if (ValidacoesHelper::validarData($data_exame) == TRUE) {
                $status = FALSE;
                echo ValidacoesHelper::validarData($data_exame);
            }
            ValidacoesHelper::validarMedico($medico);
            if (ValidacoesHelper::validarMedico($medico) == TRUE) {
                $status = FALSE;
                echo ValidacoesHelper::validarMedico($medico);
            }
            ValidacoesHelper::validarLab($lab);
            if (ValidacoesHelper::validarLab($lab) == TRUE) {
                $status = FALSE;
                echo ValidacoesHelper::validarLab($lab);
            }
            ValidacoesHelper::validarTipoExame($tipo_exame);
            if (ValidacoesHelper::validarTipoExame($tipo_exame) == TRUE) {
                $status = FALSE;
                echo ValidacoesHelper::validarTipoExame($tipo_exame);
            }
            
            if ($status == TRUE) {
                $exame = array('num_exame'=>$num_exame,'data_exame'=>$data_exame,'fk_paciente'=>1,'fk_medico'=>$medico,
                    'fk_laboratorio'=>$lab,'fk_tipo_exame'=>$tipo_exame);
                if ($this->examesModel->cadastrarNovoExame($exame) == TRUE) {
                    echo '
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#sucessoError").html("Exame Cadastrado com Sucesso!");
                            $("#sucessoError").css("display","block");
                        });
                    </script> ';  
                } else {
                    echo '
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#semsucessoError").html("Cadastro do Exame não realizado!");
                            $("#semsucessoError").css("display","block");
                        });
                    </script> '; 				
                }
            }
            
        } /* else {
            $this->index();
        } */
       
    }
    
    public function cadastrar_exame_detalhe() {
        $dados = array();
        $id = $this->examesModel->getLastIdExame();
        $idExame = $id[0]['id_exame'];
        $dados['examesPorGrupo'] = $this->examesModel->listarExamesPorGrupo($idExame);
        $this->loadTemplate('cadastroExameDetalhe', $dados);
        
    }
    

    
}