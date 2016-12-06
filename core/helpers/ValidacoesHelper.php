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
                    $("#exameDetalheError").html("Selecione ao menos um Exame!");
                    $("#exameDetalheError").css("display","block");
                });
            </script>';
            return $erro;
        } 
    }


}