
<section class="container col-sm-12 col-md-12">
    <div class="div_view_referencia_exame col-sm-12 col-md-12">
        <aside class="panel panel-info" id="panel_view_referencia_exame">
            <?php isset($referencia) ? $referencia : ""; ?>
            <table class="table table-condensed table-hover table-responsive" id="tab_ref_exame">
                <thead>
                    <tr>
                        <th>Resultado</th>
                        <th>Referência</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="primeira_linha_table" rowspan="<?php echo $referencia['qtd_ref'][0]['qtd_referencia']; ?>"><?php echo $referencia['referencias'][0]['resultado']; ?></td>
                    <?php foreach ($referencia['referencias'] as $value): ?>    
                        <td><?php echo $value['ref']."<br/>"; ?></td>
                        <td><?php echo $value['valor']."<br/>"; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </aside>
        <div class="form-group">
            <a id="botao_voltar" href="<?php echo BASE_URL; ?>/exame/ver/<?php echo $referencia['referencias'][0]['numexame']; ?>"><i class="glyphicon glyphicon-chevron-left" style="font-size: 35px; color: blue" title="Voltar a Página Anterior"></i></a>
        </div>
    </div>
</section>