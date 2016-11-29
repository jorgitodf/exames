
<section class="container col-sm-12 col-md-12">
    <div class="panel_exame_geral_detalhe col-sm-10 col-md-10">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#lipidico" data-toggle="tab">Perfil Lipídico</a></li>
            <li role="presentation"><a href="#hemograma" data-toggle="tab">Hemograma com Contagem de Plaquetas</a></li>
            <li role="presentation"><a href="#hormonio" data-toggle="tab">Hormônio</a></li>
            <li role="presentation"><a href="#testo" data-toggle="tab">Testosterona</a></li>
            <li role="presentation"><a href="#geral" data-toggle="tab">Geral</a></li>
            <li role="presentation"><a href="#urina" data-toggle="tab">Urina Tipo 1</a></li>
        </ul>
        
        <div class="tab-content">
            <div id="lipidico" class="tab-pane active in fade">
                <?php isset($exameDetalhe['grupo1']) ? $exameDetalhe['grupo1'] : "<h3>Não foi realizado exames</h3>"; ?>
                <?php if (!empty($exameDetalhe['grupo1'])): ?>
                <table class="table table-bordered table-responsive table-hover table-condensed" id="table_exame_detalhado">
                    <thead>
                        <tr>
                            <td><b>Número do Exame:</b> <?php echo $exameDetalhe['grupo1'][0]['num_exame']; ?></td>
                            <td colspan="2"><b>Data:</b> <?php echo $exameDetalhe['grupo1'][0]['dt_exame']; ?></td>
                        </tr>
                        <tr>
                            <th>Exame</th>
                            <th>Resultado</th>
                            <th>Ver Referência</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($exameDetalhe['grupo1'] as $linha): ?>
                        <tr>
                            <td><?php echo ucwords(strtolower(mb_convert_case($linha['exame'], MB_CASE_TITLE))); ?></td>
                            <td width="200"><?php echo $linha['resultado']; ?></td>
                            <td width="120"><a class="glyphicon glyphicon-zoom-in" aria-hidden="true" href="<?php echo BASE_URL; ?>/exame/referencia/<?php echo $linha['id_nome_exame']; ?>"></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                    <div class="div_sem_exames alert alert-danger" role="alert">
                        <p>Nenhum exame realizado</p>
                    </div>
                <?php endif;?>
            </div>
            <div id="hemograma" class="tab-pane">
                <?php isset($exameDetalhe['grupo2']) ? $exameDetalhe['grupo2'] : ""; ?>
                <?php if (!empty($exameDetalhe['grupo2'])): ?>
                <table class="table table-bordered table-responsive table-hover table-condensed" id="table_exame_detalhado">
                    <thead>
                        <tr>
                            <td><b>Número do Exame:</b> <?php echo $exameDetalhe['grupo2'][0]['num_exame']; ?></td>
                            <td colspan="2"><b>Data:</b> <?php echo $exameDetalhe['grupo2'][0]['dt_exame']; ?></td>
                        </tr>
                        <tr>
                            <th>Exame</th>
                            <th>Resultado</th>
                            <th>Ver Referência</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($exameDetalhe['grupo2'] as $linha): ?>
                        <tr>
                            <td><?php echo ucwords(strtolower(mb_convert_case($linha['exame'], MB_CASE_TITLE))); ?></td>
                            <td width="200"><?php echo $linha['resultado']; ?></td>
                            <td width="120"><a class="glyphicon glyphicon-zoom-in" aria-hidden="true" href="<?php echo BASE_URL; ?>/exame/referencia/<?php echo $linha['id_nome_exame']; ?>"></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table> 
                <?php else: ?>
                    <div class="div_sem_exames alert alert-danger" role="alert">
                        <p>Nenhum exame realizado</p>
                    </div>
                <?php endif;?>
            </div>
            <div id="hormonio" class="tab-pane">
                <?php isset($exameDetalhe['grupo3']) ? $exameDetalhe['grupo3'] : "<h3>Não foi realizado exames</h3>"; ?>
                <?php if (!empty($exameDetalhe['grupo3'])): ?>
                <table class="table table-bordered table-responsive table-hover table-condensed" id="table_exame_detalhado">
                    <thead>
                        <tr>
                            <td><b>Número do Exame:</b> <?php echo $exameDetalhe['grupo3'][0]['num_exame']; ?></td>
                            <td colspan="2"><b>Data:</b> <?php echo $exameDetalhe['grupo3'][0]['dt_exame']; ?></td>
                        </tr>
                        <tr>
                            <th>Exame</th>
                            <th>Resultado</th>
                            <th>Ver Referência</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($exameDetalhe['grupo3'] as $linha): ?>
                        <tr>
                            <td><?php echo ucwords(strtolower(mb_convert_case($linha['exame'], MB_CASE_TITLE))); ?></td>
                            <td width="200"><?php echo $linha['resultado']; ?></td>
                            <td width="120"><a class="glyphicon glyphicon-zoom-in" aria-hidden="true" href="<?php echo BASE_URL; ?>/exame/referencia/<?php echo $linha['id_nome_exame']; ?>"></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                    <div class="div_sem_exames alert alert-danger" role="alert">
                        <p>Nenhum exame realizado</p>
                    </div>
                <?php endif;?>
            </div>
            <div id="testo" class="tab-pane">
                <?php isset($exameDetalhe['grupo4']) ? $exameDetalhe['grupo4'] : "<h3>Não foi realizado exames</h3>"; ?>
                <?php if (!empty($exameDetalhe['grupo4'])): ?>
                <table class="table table-bordered table-responsive table-hover table-condensed" id="table_exame_detalhado">
                    <thead>
                        <tr>
                            <td><b>Número do Exame:</b> <?php echo $exameDetalhe['grupo4'][0]['num_exame']; ?></td>
                            <td colspan="2"><b>Data:</b> <?php echo $exameDetalhe['grupo4'][0]['dt_exame']; ?></td>
                        </tr>
                        <tr>
                            <th>Exame</th>
                            <th>Resultado</th>
                            <th>Ver Referência</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($exameDetalhe['grupo4'] as $linha): ?>
                        <tr>
                            <td><?php echo ucwords(strtolower(mb_convert_case($linha['exame'], MB_CASE_TITLE))); ?></td>
                            <td width="200"><?php echo $linha['resultado']; ?></td>
                            <td width="120"><a class="glyphicon glyphicon-zoom-in" aria-hidden="true" href="<?php echo BASE_URL; ?>/exame/referencia/<?php echo $linha['id_nome_exame']; ?>"></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                    <div class="div_sem_exames alert alert-danger" role="alert">
                        <p>Nenhum exame realizado</p>
                    </div>
                <?php endif;?>
            </div>
            <div id="geral" class="tab-pane">
                <?php isset($exameDetalhe['grupo5']) ? $exameDetalhe['grupo5'] : "<h3>Não foi realizado exames</h3>"; ?>
                <?php if (!empty($exameDetalhe['grupo5'])): ?>
                <table class="table table-bordered table-responsive table-hover table-condensed" id="table_exame_detalhado">
                    <thead>
                        <tr>
                            <td><b>Número do Exame:</b> <?php echo $exameDetalhe['grupo5'][0]['num_exame']; ?></td>
                            <td colspan="2"><b>Data:</b> <?php echo $exameDetalhe['grupo5'][0]['dt_exame']; ?></td>
                        </tr>
                        <tr>
                            <th>Exame</th>
                            <th>Resultado</th>
                            <th>Ver Referência</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($exameDetalhe['grupo5'] as $linha): ?>
                        <tr>
                            <td><?php echo ucwords(strtolower(mb_convert_case($linha['exame'], MB_CASE_TITLE))); ?></td>
                            <td width="200"><?php echo $linha['resultado']; ?></td>
                            <td width="120"><a class="glyphicon glyphicon-zoom-in" aria-hidden="true" href="<?php echo BASE_URL; ?>/exame/referencia/<?php echo $linha['id_nome_exame']; ?>"></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                    <div class="div_sem_exames alert alert-danger" role="alert">
                        <p>Nenhum exame realizado</p>
                    </div>
                <?php endif;?>
            </div>
            <div id="urina" class="tab-pane">
                <?php isset($exameDetalhe['grupo6']) ? $exameDetalhe['grupo6'] : "<h3>Não foi realizado exames</h3>"; ?>
                <?php if (!empty($exameDetalhe['grupo6'])): ?>
                <table class="table table-bordered table-responsive table-hover table-condensed" id="table_exame_detalhado">
                    <thead>
                        <tr>
                            <td><b>Número do Exame:</b> <?php echo $exameDetalhe['grupo6'][0]['num_exame']; ?></td>
                            <td colspan="2"><b>Data:</b> <?php echo $exameDetalhe['grupo6'][0]['dt_exame']; ?></td>
                        </tr>
                        <tr>
                            <th>Exame</th>
                            <th>Resultado</th>
                            <th>Ver Referência</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($exameDetalhe['grupo6'] as $linha): ?>
                        <tr>
                            <td><?php echo ucwords(strtolower(mb_convert_case($linha['exame'], MB_CASE_TITLE))); ?></td>
                            <td width="200"><?php echo $linha['resultado']; ?></td>
                            <td width="120"><a class="glyphicon glyphicon-zoom-in" aria-hidden="true" href="<?php echo BASE_URL; ?>/exame/referencia/<?php echo $linha['id_nome_exame']; ?>"></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                    <div class="div_sem_exames alert alert-danger" role="alert">
                        <p>Nenhum exame realizado</p>
                    </div>
                <?php endif;?>
            </div>            
        </div>
        <div class="form-group">
            <div class="div_btn_sair">
                <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame" title="Voltar à página de Exames Geral">Sair</a>
            </div>
        </div>
    </div>

</section>