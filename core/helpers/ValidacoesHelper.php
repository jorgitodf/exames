<?php

class ValidacoesHelper {

    public static function validarNumeroExame($numeroExame) {
        $dados = array('erro'=>'', 'status'=>'');
        if (empty($num_exame)) {
            $dados['erro'] = '
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#numExameError").html("Número do Exame é obrigatório!");
                    $("#numExameError").css("display","block");
                });
            </script>';
            $dados['status'] = false;
            return $dados;
        } else if (!is_numeric($num_exame)) {
            $dados['erro'] = '
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#numExameError").html("Número do Exame só aceita números");
                        $("#numExameError").css("display","block");
                    });
                </script>';
            $dados['status'] = false;
            return $dados;
        }
    }

}