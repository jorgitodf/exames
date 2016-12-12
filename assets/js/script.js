$(document).ready(function() {
    $('#btn_criar_exame').click(function() {
        $("#btn_salvar_exame").removeAttr('disabled');
        $("#btn_criar_exame").attr('disabled', 'disabled');
        $("#btn_novo_exame").attr('disabled', 'disabled');
        $("#num_exame").removeAttr('disabled');
        $("#data_exame").removeAttr('disabled');
        $("#medico").removeAttr('disabled');
        $("#lab").removeAttr('disabled');
        $("#tipo_exame").removeAttr('disabled');
    });
    $(function() {
        $("#form_exa_cad").submit(function(e) {
            $("#numExameError").html("");
            $("#numExameError").css("display","none");
            $("#dataExameError").html("");
            $("#dataExameError").css("display","none");
            $("#medicoError").html("");
            $("#medicoError").css("display","none");
            $("#laboratotioError").html("");
            $("#laboratotioError").css("display","none");
            $("#tipoExameError").html("");
            $("#tipoExameError").css("display","none");
            $("#msgErroExameJaCadastrado").html("");
            $("#msgErroExameJaCadastrado").css("display","none");
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(retorno) {
                    beforeSend:$("#retorno").html(retorno);
                    var sucesso = $("#msgCadExameSucesso").text();
                    if (sucesso === 'Exame Cadastrado com Sucesso!') {
                        $("#btn_salvar_exame").attr('disabled', 'disabled');
                        $("#btn_novo_exame").removeAttr('disabled');
                        $("#btn_selecionar_exame").removeAttr('disabled');
                        $("#num_exame").attr('disabled', 'disabled');
                        $("#data_exame").attr('disabled', 'disabled');
                        $("#medico").attr('disabled', 'disabled');
                        $("#lab").attr('disabled', 'disabled');
                        $("#tipo_exame").attr('disabled', 'disabled');
                        $("#div_msg_sucesso_e_sem_sucesso_form_cad_exame").hide();
                    }
                    return false;
                }
            });
        });	
    });	
    
    $(function() {
        $("#form_editar_resultado_exame").submit(function(e) {
            $(".msgErroEditarExame").html("");
            $(".msgErroEditarExame").css("display","none");
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(retorno) {
                    beforeSend: $("#retorno").html(retorno);
                    var sucesso = $("#msgAlteracaoExameSucesso").text();
                    if (sucesso === 'Resultado do Exame Salvo com Sucesso!') {
                        $("#btn_salva_edit_exame").attr('disabled', 'disabled');
                    }
                    return false;
                }
            });

        });	
    });
    
    $(function() {
        $("#form_adc_exames").submit(function(e) {
            $(".msgError").html("");
            $(".msgError").css("display","none");
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(retorno) {
                    beforeSend: $("#retorno").html(retorno);
                    var sucesso = $("#msgSucessoAddExames").text();
                    if (sucesso === 'Exames Selecionados Cadastrados com Sucesso') {
                        $("#btn_add_exames").attr('disabled', 'disabled');
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
        $("#tipo_exame").removeAttr('disabled');
        $("#medida_exame").removeAttr('disabled');
        $("#grupo_exame").removeAttr('disabled');
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
                    var sucesso = $("#cadTipoExameSucesso").text();
                    var erro = $("#cadTipoExameError").text();
                    if (sucesso === 'Tipo de Exame Cadastrado com Sucesso') {
                        $("#salvar_exame").attr('disabled', 'disabled');
                        $("#novo_exame").attr('disabled', 'disabled');
                        $("#btn_sel_exame").removeAttr('disabled');
                        $("#tipo_exame").attr('readonly', true);
                        $("#medida_exame").attr('readonly', true);
                        $("#grupo_exame").attr('disabled', 'disabled');
                        $("#btn_cad_ref").removeAttr('disabled');
                        $("#div_msg_sucesso_e_sem_sucesso").hide();
                    }
                    if (erro === 'Tipo de Exame já Cadastrado') {
                        $("#salvar_exame").attr('disabled', 'disabled');
                        $("#btn_sel_exame").removeAttr('disabled');
                        $("#div_msg_sucesso_e_sem_sucesso").hide();
                    }
                    return false;
                }
            });
        });	
    });	
    
    $('#btn_criar_ref_exame').click(function() {
        $("#btn_salvar_ref_exame").removeAttr('disabled');
        $("#btn_criar_ref_exame").attr('disabled', 'disabled');
        $("#exame_sem_ref").removeAttr('disabled');
        $("#ref_exame").removeAttr('disabled');
        $("#valor_ref").removeAttr('disabled');
    });
    $(function() {
        $("#form_cad_ref_exame").submit(function(e) {
            $(".msgError").html("");
            $(".msgError").css("display","none");
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(retorno) {
                    beforeSend:$("#retorno").html(retorno);
                    var sucesso = $("#msgCadRefExameSucesso").text();
                    var erro = $("#msgCadRefExameError").text();
                    if (sucesso === 'Referência de Exame Cadastrada com Sucesso') {
                        $("#btn_salvar_ref_exame").attr('disabled', 'disabled');
                        $("#btn_criar_ref_exame").attr('disabled', 'disabled');
                        $("#btn_novo_ref_exame").removeAttr('disabled');
                        $("#ref_exame").attr('readonly', true);
                        $("#valor_ref").attr('readonly', true);
                        $("#exame_sem_ref").attr('disabled', 'disabled');
                        $("#btn_cad_ref").removeAttr('disabled');
                        $("#div_msg_sucesso_e_sem_sucesso").hide();
                    }
                    if (erro === 'Referência do Exame já Cadastrada') {
                        $("#btn_salvar_ref_exame").attr('disabled', 'disabled');
                        $("#btn_novo_ref_exame").removeAttr('disabled');
                        $("#div_msg_sucesso_e_sem_sucesso").hide();
                    }
                    return false;
                }
            });
        });	
    });	
});
