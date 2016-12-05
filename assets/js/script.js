$(document).ready(function() {
    $('#novo_exame').click(function() {
        $("#salvar_exame").removeAttr('disabled');
        $("#novo_exame").attr('disabled', 'disabled');
    });

    $(function() {
        $("#form_exa_cad").submit(function(e) {
            $(".msgError").html("");
            $(".msgError").css("display","none");
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(retorno) {
                    beforeSend:$("#retorno").html(retorno);
                    var sucesso = $("#sucessoError").text();
                    if (sucesso == 'Exame Cadastrado com Sucesso!') {
                        $("#salvar_exame").attr('disabled', 'disabled');
                        $("#btn_sel_exame").removeAttr('disabled');
                    }
                    return false;
                }
            });
        });	
    });	
});
