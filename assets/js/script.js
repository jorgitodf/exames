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
    
    
    
    $(function() {
        $("#form_grupo_1").submit(function(e) {
            $(".msgError").html("");
            $(".msgError").css("display","none");
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(retorno) {
                    beforeSend: $("#retorno").html(retorno);
                    var sucesso = $("#msgSucessoExameDetalheG1").text();
                    if (sucesso == 'Exames Selecionados Cadastrados com Sucesso') {
                        $("#btn_exame_detalhe_grupo1").attr('disabled', 'disabled');
                    }
                    return false;
                }
            });

        });	
    });
    
    $(function() {
        $("#form_grupo_2").submit(function(e) {
            $(".msgError").html("");
            $(".msgError").css("display","none");
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(retorno) {
                    beforeSend:$("#retorno").html(retorno);
                    var sucesso = $("#msgSucessoExameDetalheG2").text();
                    if (sucesso == 'Exames Selecionados Cadastrados com Sucesso') {
                        $("#btn_exame_detalhe_grupo2").attr('disabled', 'disabled');
                    }
                    return false;
                }
            });
        });	
    });
    
    $(function() {
        $("#form_grupo_3").submit(function(e) {
            $(".msgError").html("");
            $(".msgError").css("display","none");
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(retorno) {
                    beforeSend:$("#retorno").html(retorno);
                    var sucesso = $("#msgSucessoExameDetalheG3").text();
                    if (sucesso == 'Exames Selecionados Cadastrados com Sucesso') {
                        $("#btn_exame_detalhe_grupo3").attr('disabled', 'disabled');
                    }
                    return false;
                }
            });
        });	
    });
    
    $(function() {
        $("#form_grupo_4").submit(function(e) {
            $(".msgError").html("");
            $(".msgError").css("display","none");
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(retorno) {
                    beforeSend:$("#retorno").html(retorno);
                    var sucesso = $("#msgSucessoExameDetalheG4").text();
                    if (sucesso == 'Exames Selecionados Cadastrados com Sucesso') {
                        $("#btn_exame_detalhe_grupo4").attr('disabled', 'disabled');
                    }
                    return false;
                }
            });
        });	
    });
    
    $(function() {
        $("#form_grupo_5").submit(function(e) {
            $(".msgError").html("");
            $(".msgError").css("display","none");
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(retorno) {
                    beforeSend:$("#retorno").html(retorno);
                    var sucesso = $("#msgSucessoExameDetalheG5").text();
                    if (sucesso == 'Exames Selecionados Cadastrados com Sucesso') {
                        $("#btn_exame_detalhe_grupo5").attr('disabled', 'disabled');
                    }
                    return false;
                }
            });
        });	
    });
    
    $(function() {
        $("#form_grupo_6").submit(function(e) {
            $(".msgError").html("");
            $(".msgError").css("display","none");
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(retorno) {
                    beforeSend:$("#retorno").html(retorno);
                    var sucesso = $("#msgSucessoExameDetalheG6").text();
                    if (sucesso == 'Exames Selecionados Cadastrados com Sucesso') {
                        $("#btn_exame_detalhe_grupo6").attr('disabled', 'disabled');
                    }
                    return false;
                }
            });
        });	
    });
    
    
    $('#novo_exame').click(function() {
        $("#salvar_exame").removeAttr('disabled');
        $("#novo_exame").attr('disabled', 'disabled');
    });
    $(function() {
        $("#form_exa_cad_tipo_exame").submit(function(e) {
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
