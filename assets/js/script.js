
$(function () {

    $('#ver_valor_ref').on('mouseover', function () {
        var id = $('#id_resultado_exame').val();
        var datatype = $('#id_resultado_exame').attr('data-type');

        if (datatype != '') {
            $.ajax({
                url: BASE_URL + '/ajax/' + datatype,
                type: 'GET',
                data: {id: id},
                dataType: 'json',
                success: function (json) {
                    if ($('.referencia_resultado').length == 0) {
                        $('#ver_valor_ref').after('<div class="referencia_resultado"></div>');
                    }
                    $('.referencia_resultado').css('left', $('#ver_valor_ref').offset().left - 59 + 'px');
                    $('.referencia_resultado').css('top', $('#ver_valor_ref').offset().top + $('#ver_valor_ref').height() - 132 + 'px');

                    var html = '';

                    for (var i in json) {
                        html += '<div class="si">' + json[i].referencia + ' - ' + json[i].valor + '</div>';
                    }

                    $('.referencia_resultado').html(html);
                    $('.referencia_resultado').show();
                }
            });
        }
    });

    $('#ver_valor_ref').on('mouseout', function () {
        $('.referencia_resultado').hide();

    });

    $("#form_exa_cad").on('submit', function (e) {
        var num_exame = $('#num_exame').val();
        var data_exame = $('#data_exame').val();
        var medico = $('#medico').val();
        var lab = $('#lab').val();
        var tipo_exame = $('#tipo_exame').val();
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: $(this).attr("action"),
            data: {num_exame: num_exame, data_exame: data_exame, medico: medico, lab: lab, tipo_exame: tipo_exame},
            dataType: 'json',
            success: function(data) {
                
                if ($('.div_erro_num_exame').length == 0 && data.erro1 != "") {
                    $('#num_exame').after('<div class="div_erro_num_exame">'+data.erro1+'</div>');
                } else if ($('.div_erro_num_exame').length > 0 && data.erro1 != "") {
                    $('#num_exame').text(''+data.erro1+'');
                } else {
                    $('.div_erro_num_exame').hide();
                }

                if ($('.div_erro_data_exame').length == 0 && data.erro2 != "") {
                    $('#data_exame').after('<div class="div_erro_data_exame">'+data.erro2+'</div>');
                } else if ($('.div_erro_data_exame').length > 0 && data.erro2 != "") {
                    $('#num_exame').text(''+data.erro2+'');
                } else {
                    $('.div_erro_data_exame').hide();
                }
                
                if ($('.div_erro_medico').length == 0 && data.erro3 != "") {
                    $('#medico').after('<div class="div_erro_medico">'+data.erro3+'</div>');
                } else if ($('.div_erro_medico').length > 0 && data.erro3 != "") {
                    $('#medico').text(''+data.erro3+'');
                } else {
                    $('.div_erro_medico').hide();
                } 
                
                if ($('.div_erro_lab').length == 0 && data.erro4 != "") {
                    $('#lab').after('<div class="div_erro_lab">'+data.erro4+'</div>');
                } else if ($('.div_erro_lab').length > 0 && data.erro4 != "") {
                    $('#lab').text(''+data.erro4+'');
                } else {
                    $('.div_erro_lab').hide();
                }
                
                if ($('.div_erro_tipo_exame').length == 0 && data.erro5 != "") {
                    $('#tipo_exame').after('<div class="div_erro_tipo_exame">'+data.erro5+'</div>');
                } else if ($('.div_erro_tipo_exame').length > 0 && data.erro5 != "") {
                    $('#tipo_exame').text(''+data.erro5+'');
                } else {
                    $('.div_erro_tipo_exame').hide();
                }
                
                if (data.sucesso != "") {
                    alert(data.sucesso);
                }
                
                
            }
        });
    });

    $(document).on('ready', function () {
        var num_exame = $('#num_exame').val();
        alert(num_exame);
    });


    $('#busca').on('focus', function () {
        $(this).animate({
            width: '250px'
        }, 'fast');
    });

    $('#busca').on('blur', function () {
        if ($(this).val() == '') {
            $(this).animate({
                width: '100px'
            }, 'fast');
        }

        setTimeout(function () {
            $('.searchresults').hide();
        }, 500);
    });

    $('#busca').on('keyup', function () {
        var datatype = $(this).attr('data-type');
        var q = $(this).val();

        if (datatype != '') {
            $.ajax({
                url: BASE_URL + '/ajax/' + datatype,
                type: 'GET',
                data: {q: q},
                dataType: 'json',
                success: function (json) {
                    if ($('.searchresults').length == 0) {
                        $('#busca').after('<div class="searchresults"></div>');
                    }
                    $('.searchresults').css('left', $('#busca').offset().left + 'px');
                    $('.searchresults').css('top', $('#busca').offset().top + $('#busca').height() + 3 + 'px');

                    var html = '';

                    for (var i in json) {
                        html += '<div class="si"><a href="' + json[i].link + '">' + json[i].name + '</a></div>';
                    }

                    $('.searchresults').html(html);
                    $('.searchresults').show();
                }
            });
        }

    });

});







