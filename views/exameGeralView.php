
<section class="container col-sm-12 col-md-12">
    <div class="panel_exame_geral">
        <header class="panel-heading">
            <div class="panel panel-success" >
                <div class="panel-heading" id="panel_head">Resultados de Exames</div>
                <div class="panel-body">
                    <?php isset($exames) ? $exames : ""; ?>
                    <table class="table table-bordered table-responsive table-hover table-condensed table_exame_geral">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Exame</th>
                                <th>Médico</th>
                                <th>Unidade</th>
                                <th>Ver Exame</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($exames as $linha): ?>
                            <tr>
                                <td><?php echo $linha['dt_exame']; ?></td>
                                <td><?php echo ucwords(strtolower(mb_convert_case($linha['tipo_exame'], MB_CASE_TITLE))); ?></td>
                                <td><?php echo ucwords(strtolower(mb_convert_case($linha['medico'], MB_CASE_TITLE))); ?></td>
                                <td><?php echo ucwords(strtolower(mb_convert_case($linha['lab'], MB_CASE_TITLE))); ?></td>
                                <td><a class="glyphicon glyphicon-zoom-in" aria-hidden="true" href="<?php echo BASE_URL; ?>/exame/ver/<?php echo $linha['id_exame']; ?>"></a></td>
                            </tr>
                            <?php endforeach; ?>    
                        </tbody>
                    </table>
                </div>
            </div>
        </header>
    </div>    
</section>