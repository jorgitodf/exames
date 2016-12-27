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
    
    public function alterar($idExame = null) {
        $dados = array();
        if (!isset($idExame)) {
            $dados['exames'] = $this->examesModel->listaGeralExames();
            $this->loadTemplate('examesAlterarView', $dados);
        } else {
            if ($idExame != null && is_numeric($idExame) && $idExame > 0) {
                $dados['exameDetalhe'] = $this->examesModel->verDetalheExame($idExame);
                $this->loadTemplate('exameAlterarDetalheView', $dados);
            } else {
                header("Location: ".BASE_URL."/naoexiste");
                die();
            }
        }
    }
    
    public function editar() {
        $dados = array();
        if ($_POST['id_resultado_exame']) {
            $idResultadoExames = $_POST['id_resultado_exame'];
            $dados['listresulexame'] = $this->examesModel->editarResultadoExame($idResultadoExames);
            $this->loadTemplate('exameEditarDetalheView', $dados);
        }
        
    }
    
    public function salvar() {
        $dados = array();
        if ($_POST['resultado_exame']) {
            $status = TRUE;
            $resultadoExames = $_POST['resultado_exame'];
            ValidacoesHelper::validarResultadoExame($resultadoExames);
            if (ValidacoesHelper::validarResultadoExame($resultadoExames) == TRUE) {
                $status = FALSE;
                echo ValidacoesHelper::validarResultadoExame($resultadoExames);
            }
            if ($status == TRUE) {
                if ($this->examesModel->salvarResultadoEditadoExame($resultadoExames) == TRUE) {
                    echo '
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#msgAlteracaoExameSucesso").html("Resultado do Exame Salvo com Sucesso!");
                            $("#msgAlteracaoExameSucesso").css("display","block");
                        });
                    </script> '; 
                }
            }

            

        }
        
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