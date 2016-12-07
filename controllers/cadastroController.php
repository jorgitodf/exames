<?php

class cadastroController extends Controller {

    protected $examesModel;
    protected $medicosModel;
    protected $laboratoriosModel;
    protected $gruposExamesModel;

    public function __construct() {
        parent::__construct(); //executa do contrutor da classe extendida, sou seja, executa o construtor da Classe Controller
        $this->examesModel = new ExamesModel();
        $this->medicosModel = new MedicosModel();
        $this->laboratoriosModel = new LaboratoriosModel();
        $this->gruposExamesModel = new GruposExamesModel();
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
                $exame = array('num_exame' => $num_exame, 'data_exame' => $data_exame, 'fk_paciente' => 1, 'fk_medico' => $medico,
                    'fk_laboratorio' => $lab, 'fk_tipo_exame' => $tipo_exame);
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
        $dados['idExame'] = $idExame;
        $this->loadTemplate('cadastroExameDetalhe', $dados);
    }

    public function selecionar_exames() {
        if (isset($_POST['idExame']) && isset($_POST['idGrupo'])) {
            $status = TRUE;
            $idExamesDetalhe = "";
            $idExame = intval($_POST['idExame']);
            $idGrupo = intval($_POST['idGrupo']);

            switch ($idGrupo) {
                case 1:
                if (!isset($_POST['examesG1'])) {
                    ValidacoesHelper::validarExameDetalhe($idExamesDetalhe);
                    $status = FALSE;
                    echo ValidacoesHelper::validarExameDetalhe($idExamesDetalhe);
                }
                if ($status == TRUE) {
                    $idExamesDetalhe = $_POST['examesG1'];
                    if ($this->examesModel->selecionarExames($idExame, $idExamesDetalhe) == true ) {
                        echo '
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#msgSucessoExameDetalheG1").html("Exames Selecionados Cadastrados com Sucesso");
                                $("#msgSucessoExameDetalheG1").css("display","block");
                            });
                        </script> ';
                    } /* else {
                        echo '
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#msgErroExameDetalheG1").html("Exames Selecionados não cadastrados!");
                                $("#msgErroExameDetalheG1").css("display","block");
                            });
                        </script> ';
                    } */
                }
                    break;
                case 2:
                if (!isset($_POST['examesG2'])) {
                    ValidacoesHelper::validarExameDetalhe($idExamesDetalhe);
                    $status = FALSE;
                    echo ValidacoesHelper::validarExameDetalhe($idExamesDetalhe);
                }
                if ($status == TRUE) {
                    $idExamesDetalhe = $_POST['examesG2'];
                    if ($this->examesModel->selecionarExames($idExame, $idExamesDetalhe) == true ) {
                        echo '
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#msgSucessoExameDetalheG2").html("Exames Selecionados Cadastrados com Sucesso");
                                $("#msgSucessoExameDetalheG2").css("display","block");
                            });
                        </script> ';
                    } /* else {
                        echo '
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#msgErroExameDetalheG2").html("Exames Selecionados não cadastrados!");
                                $("#msgErroExameDetalheG2").css("display","block");
                            });
                        </script> ';
                    } */
                }  
                    break;
                case 3:
                if (!isset($_POST['examesG3'])) {
                    ValidacoesHelper::validarExameDetalhe($idExamesDetalhe);
                    $status = FALSE;
                    echo ValidacoesHelper::validarExameDetalhe($idExamesDetalhe);
                }
                if ($status == TRUE) {
                    $idExamesDetalhe = $_POST['examesG3'];
                    if ($this->examesModel->selecionarExames($idExame, $idExamesDetalhe) == true ) {
                        echo '
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#msgSucessoExameDetalheG3").html("Exames Selecionados Cadastrados com Sucesso");
                                $("#msgSucessoExameDetalheG3").css("display","block");
                            });
                        </script> ';
                    } /*else {
                        echo '
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#msgErroExameDetalheG3").html("Exames Selecionados não cadastrados!");
                                $("#msgErroExameDetalheG3").css("display","block");
                            });
                        </script> ';
                    } */
                }  
                    break; 
                case 4:
                if (!isset($_POST['examesG4'])) {
                    ValidacoesHelper::validarExameDetalhe($idExamesDetalhe);
                    $status = FALSE;
                    echo ValidacoesHelper::validarExameDetalhe($idExamesDetalhe);
                }
                if ($status == TRUE) {
                    $idExamesDetalhe = $_POST['examesG4'];
                    if ($this->examesModel->selecionarExames($idExame, $idExamesDetalhe) == true ) {
                        echo '
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#msgSucessoExameDetalheG4").html("Exames Selecionados Cadastrados com Sucesso");
                                $("#msgSucessoExameDetalheG4").css("display","block");
                            });
                        </script> ';
                    } /*else {
                        echo '
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#msgErroExameDetalheG4").html("Exames Selecionados não cadastrados!");
                                $("#msgErroExameDetalheG4").css("display","block");
                            });
                        </script> ';
                    } */
                }  
                    break;
                case 5:
                if (!isset($_POST['examesG5'])) {
                    ValidacoesHelper::validarExameDetalhe($idExamesDetalhe);
                    $status = FALSE;
                    echo ValidacoesHelper::validarExameDetalhe($idExamesDetalhe);
                }
                if ($status == TRUE) {
                    $idExamesDetalhe = $_POST['examesG5'];
                    if ($this->examesModel->selecionarExames($idExame, $idExamesDetalhe) == true ) {
                        echo '
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#msgSucessoExameDetalheG5").html("Exames Selecionados Cadastrados com Sucesso");
                                $("#msgSucessoExameDetalheG5").css("display","block");
                            });
                        </script> ';
                    } /*else {
                        echo '
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#msgErroExameDetalheG5").html("Exames Selecionados não cadastrados!");
                                $("#msgErroExameDetalheG5").css("display","block");
                            });
                        </script> ';
                    } */
                }  
                    break;
                case 6:
                if (!isset($_POST['examesG6'])) {
                    ValidacoesHelper::validarExameDetalhe($idExamesDetalhe);
                    $status = FALSE;
                    echo ValidacoesHelper::validarExameDetalhe($idExamesDetalhe);
                }
                if ($status == TRUE) {
                    $idExamesDetalhe = $_POST['examesG6'];
                    if ($this->examesModel->selecionarExames($idExame, $idExamesDetalhe) == true ) {
                        echo '
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#msgSucessoExameDetalheG6").html("Exames Selecionados Cadastrados com Sucesso");
                                $("#msgSucessoExameDetalheG6").css("display","block");
                            });
                        </script> ';
                    } /*else {
                        echo '
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#msgErroExameDetalheG6").html("Exames Selecionados não cadastrados!");
                                $("#msgErroExameDetalheG6").css("display","block");
                            });
                        </script> ';
                    } */
                }  
                    break;
                    
                default:
                    break;
            }
            

            
        }
    }
    
    public function cadastrartipoexame() {
        $dados = array();
        if (isset($_POST['tipo_exame']) && isset($_POST['medida_exame']) && isset($_POST['grupo_exame'])) {
            $status = TRUE;
            
            $tipoExame = addslashes($_POST['tipo_exame']);
            $medidaExame = addslashes($_POST['medida_exame']);
            $grupoExame = addslashes($_POST['grupo_exame']);
            
            ValidacoesHelper::validarTipoDeExame($tipoExame);
            if (ValidacoesHelper::validarTipoDeExame($tipoExame) == TRUE) {
                $status = FALSE;
                echo ValidacoesHelper::validarTipoDeExame($tipoExame);
            }
            ValidacoesHelper::validarMedida($medidaExame);
            if (ValidacoesHelper::validarMedida($medidaExame) == TRUE) {
                $status = FALSE;
                echo ValidacoesHelper::validarMedida($medidaExame);
            }
            ValidacoesHelper::validarGrupo($grupoExame);
            if (ValidacoesHelper::validarGrupo($grupoExame) == TRUE) {
                $status = FALSE;
                echo ValidacoesHelper::validarGrupo($grupoExame);
            }
        } else {
            $dados['grupos'] = $this->gruposExamesModel->getGruposExames();
            $this->loadTemplate('cadastroTipoDeExameView', $dados); 
        }

    }

}
