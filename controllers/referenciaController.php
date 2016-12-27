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
    
    public function cadastrar() {
        $dados = array();
        if (isset($_POST['exame_sem_ref']) && isset($_POST['ref_exame']) && isset($_POST['valor_ref'])) {
            $status = TRUE;
            
            $exameSemRef = intval(addslashes($_POST['exame_sem_ref']));
            $refExame = addslashes($_POST['ref_exame']);
            $valorRef = addslashes($_POST['valor_ref']);
            
            ValidacoesHelper::validarExameSemReferencia($exameSemRef);
            if (ValidacoesHelper::validarExameSemReferencia($exameSemRef) == true) {
                $status = FALSE;
                echo ValidacoesHelper::validarExameSemReferencia($exameSemRef);
            }
            ValidacoesHelper::validarReferenciaExame($refExame);
            if (ValidacoesHelper::validarReferenciaExame($refExame) == true) {
                $status = FALSE;
                echo ValidacoesHelper::validarReferenciaExame($refExame);
            }
            ValidacoesHelper::validarValorReferenciaExame($valorRef);
            if (ValidacoesHelper::validarValorReferenciaExame($valorRef) == true) {
                $status = FALSE;
                echo ValidacoesHelper::validarValorReferenciaExame($valorRef);
            }
            if ($status == TRUE) {
                if ($this->referenciasModel->cadastrarReferenciaExame($exameSemRef, $refExame, $valorRef) == true) {
                    echo '
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#msgCadRefExameSucesso").html("Referência de Exame Cadastrada com Sucesso");
                            $("#msgCadRefExameSucesso").css("display","block");
                        });
                    </script> '; 
                }
            }
        } else {
            $dados['exasemref'] = $this->referenciasModel->listarTipoDeExamesSemReferencia();
            $this->loadTemplate('cadastroReferenciaView', $dados); 
        }

    }

}
