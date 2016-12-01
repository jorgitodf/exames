$(function () {

    $('#ver_valor_ref').on('mouseover', function(){
        var id = $('#id_resultado_exame').val();
        var datatype = $('#id_resultado_exame').attr('data-type');
        
        if (datatype != '') {
            $.ajax({
                url: BASE_URL + '/ajax/' + datatype,
                type: 'GET',
                data: {id: id},
                dataType: 'json',
                success: function(json) {
                    if ($('.referencia_resultado').length == 0) {
                        $('#ver_valor_ref').after('<div class="referencia_resultado"></div>');
                    }
                    $('.referencia_resultado').css('left', $('#ver_valor_ref').offset().left-59+'px');
                    $('.referencia_resultado').css('top', $('#ver_valor_ref').offset().top+$('#ver_valor_ref').height()-132+'px');
                   
                    var html = '';
                    
                    for(var i in json) {
                            html += '<div class="si">'+json[i].referencia+' - '+json[i].valor+'</div>';
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
    
    $("#form_exa_cad").on('submit', function(e) {
        var num_exame = $('#num_exame').val();
        var data_exame = $('#data_exame').val();
        e.preventDefault();
        $.ajax({
            url: $(this).attr("action"),
            type: 'POST',
            data: {num_exame: num_exame, data_exame: data_exame},
            dataType: 'json',
            success: function(data) {
                alert(data["erro1"]);
                alert(data["erro2"]);
            }
        });
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







