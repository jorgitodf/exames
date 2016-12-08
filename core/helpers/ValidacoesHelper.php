<?php

class ValidacoesHelper {

    public static function validarNumeroExame($num_exame) {
        if (empty($num_exame)) {
            $erro = '
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#numExameError").html("Número do Exame é obrigatório!");
                    $("#numExameError").css("display","block");
                });
            </script>';
            return $erro;
        } else if (!is_numeric($num_exame)) {
            $erro = '
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#numExameError").html("Número do Exame só aceita números");
                        $("#numExameError").css("display","block");
                    });
                </script>';
            return $erro;
        }
    }
    
    public static function validarData($data_exame) {
        if (empty($data_exame)) {
            $erro = '
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#dataExameError").html("Data do Exame é obrigatória!");
                    $("#dataExameError").css("display","block");
                });
            </script>';
            return $erro;
        } 
    }
    
    public static function validarMedico($medico) {
        if (empty($medico) || $medico == "") {
            $erro = '
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#medicoError").html("Informe um Médico!");
                    $("#medicoError").css("display","block");
                });
            </script>';
            return $erro;
        }
    }
    
    public static function validarLab($lab) {
        if (empty($lab) || $lab == "") {
            $erro = '
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#laboratotioError").html("Informe um Laboratório!");
                    $("#laboratotioError").css("display","block");
                });
            </script>';
            return $erro;
        } 
    }
    
    public static function validarTipoExame($tipo_exame) {
        if (empty($tipo_exame) || $tipo_exame == "") {
            $erro = '
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#tipoExameError").html("Informe um Tipo de Exame!");
                    $("#tipoExameError").css("display","block");
                });
            </script>';
            return $erro;
        }  
    }
    
    public static function validarExameDetalhe($idExamesDetalhe) {
        if (empty($idExamesDetalhe) || $idExamesDetalhe == "") {
            $erro = '
            <script type="text/javascript">
                $(document).ready(function() {
                    $(".exameDetalheError").html("Selecione ao menos um Exame!");
                    $(".exameDetalheError").css("display","block");
                });
            </script>';
            return $erro;
        } 
    }
    
    public static function validarTipoDeExame($tipoExame) {
        if (empty($tipoExame) || $tipoExame == "") {
            $erro = '
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#tipoExameError").html("Campo Tipo de Exame Obrigatório!");
                    $("#tipoExameError").css("display","block");
                });
            </script>';
            return $erro;
        } 
    }
    
    public static function validarMedida($medidaExame) {
        if (empty($medidaExame) || $medidaExame == "") {
            $erro = '
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#medidaExameError").html("Campo Medida Obrigatório!");
                    $("#medidaExameError").css("display","block");
                });
            </script>';
            return $erro;
        } 
    }

    public static function validarGrupo($grupoExame) {
        if (empty($grupoExame) || $grupoExame == "") {
            $erro = '
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#grupoError").html("Selecione um Grupo de Exame!");
                    $("#grupoError").css("display","block");
                });
            </script>';
            return $erro;
        } 
    }
    
    public function validarExameSemReferencia($exameSemRef) {
        if (empty($exameSemRef) || $exameSemRef == "") {
            $erro = '
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#exameSemRefError").html("Selecione um Exame!");
                    $("#exameSemRefError").css("display","block");
                });
            </script>';
            return $erro;
        } 
    }
    
    public function validarReferenciaExame($refExame) {
        if (empty($refExame) || $refExame == "") {
            $erro = '
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#refExameError").html("Campo Referência Obrigatório!");
                    $("#refExameError").css("display","block");
                });
            </script>';
            return $erro;
        } 
    }
    
    public function validarValorReferenciaExame($valorRef) {
        if (empty($valorRef) || $valorRef == "") {
            $erro = '
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#valorRefError").html("Campo Valor de Referência Obrigatório!");
                    $("#valorRefError").css("display","block");
                });
            </script>';
            return $erro;
        }  
    }
}