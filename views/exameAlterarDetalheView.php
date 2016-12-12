
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
        
        <div class="tab-content" id="div_table">
            <div id="lipidico" class="tab-pane active in fade">
                <form method="POST" action="<?php echo BASE_URL; ?>/exame/editar" class="" id="">
                    <?php isset($exameDetalhe['grupo1']) ? $exameDetalhe['grupo1'] : ""; ?>
                    <?php if (!empty($exameDetalhe['grupo1'])): ?>
                    <table class="table table-bordered table-responsive table-hover table-condensed" id="table_exame_detalhado">
                        <thead>
                            <tr>
                                <td><b>Número do Exame:</b> <?php echo $exameDetalhe['grupo1'][0]['num_exame']; ?></td>
                                <td colspan="1"><b>Data:</b> <?php echo $exameDetalhe['grupo1'][0]['dt_exame']; ?></td>
                            </tr>
                            <tr>
                                <th>Exame</th>
                                <th>Resultado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($exameDetalhe['grupo1'] as $linha): ?>
                            <tr>
                                <td><?php echo ucwords(strtolower(mb_convert_case($linha['exame'], MB_CASE_TITLE))); ?></td>
                                <td width="300"><?php if (!empty($linha['resultado'])) {echo $linha['resultado'];} else {echo "<span class='color_red'>Aguardando Resultado</span>";} ?><input type="hidden" name="id_resultado_exame[]" value="<?php echo $linha['id_resultado_exame']; ?>"/></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table> 
                    <input type="hidden" name="idExame" value="<?php echo $exameDetalhe['grupo1'][0]['id_exame']; ?>" />
                    <input type="hidden" name="idGrupoExame" value="<?php echo $exameDetalhe['grupo1'][0]['id_grupo_exame']; ?>" />
                    <div class="form-group">
                        <div class="div_btn_sair">
                            <button type="submit" id="btn_adc_exame" class="btn btn-primary" title="Clique aqui para Inserir o Resultado do Tipo de Exame">Alterar</button>
                            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame/ver/<?php echo $exameDetalhe['grupo1'][0]['id_exame']; ?>" title="Voltar à página Anterior">Voltar</a>
                            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame" title="Voltar à página de Exames Geral">Sair</a>
                        </div>
                    </div>
                    <?php else: ?>
                        <div class="div_sem_exames alert alert-danger" role="alert">
                            <p>Nenhum exame realizado</p>
                        </div>
                        <div class="form-group">
                            <div class="div_btn_sair">
                                <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame" title="Voltar à página de Exames Geral">Sair</a>
                            </div>
                        </div>
                    <?php endif;?>
                </form>
            </div>
            <div id="hemograma" class="tab-pane fade">
                <form method="POST" action="<?php echo BASE_URL; ?>/exame/editar" class="" id="">
                    <?php isset($exameDetalhe['grupo2']) ? $exameDetalhe['grupo2'] : ""; ?>
                    <?php if (!empty($exameDetalhe['grupo2'])): ?>
                    <table class="table table-bordered table-responsive table-hover table-condensed" id="table_exame_detalhado">
                        <thead>
                            <tr>
                                <td><b>Número do Exame:</b> <?php echo $exameDetalhe['grupo2'][0]['num_exame']; ?></td>
                                <td colspan="1"><b>Data:</b> <?php echo $exameDetalhe['grupo2'][0]['dt_exame']; ?></td>
                            </tr>
                            <tr>
                                <th>Exame</th>
                                <th>Resultado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($exameDetalhe['grupo2'] as $linha): ?>
                            <tr>
                                <td><?php echo ucwords(strtolower(mb_convert_case($linha['exame'], MB_CASE_TITLE))); ?></td>
                                <td width="300"><?php if (!empty($linha['resultado'])) {echo $linha['resultado'];} else {echo "<span class='color_red'>Aguardando Resultado</span>";} ?><input type="hidden" name="id_resultado_exame[]" value="<?php echo $linha['id_resultado_exame']; ?>"/></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table> 
                    <input type="hidden" name="idExame" value="<?php echo $exameDetalhe['grupo2'][0]['id_exame']; ?>" />
                    <input type="hidden" name="idGrupoExame" value="<?php echo $exameDetalhe['grupo2'][0]['id_grupo_exame']; ?>" />
                    <div class="form-group">
                        <div class="div_btn_sair">
                            <button type="submit" id="btn_adc_exame" class="btn btn-primary" title="Clique aqui para Inserir o Resultado do Tipo de Exame">Alterar</button>
                            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame/ver/<?php echo $exameDetalhe['grupo2'][0]['id_exame']; ?>" title="Voltar à página Anterior">Voltar</a>
                            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame" title="Voltar à página de Exames Geral">Sair</a>
                        </div>
                    </div>
                    <?php else: ?>
                        <div class="div_sem_exames alert alert-danger" role="alert">
                            <p>Nenhum exame realizado</p>
                        </div>
                        <div class="form-group">
                            <div class="div_btn_sair">
                                <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame" title="Voltar à página de Exames Geral">Sair</a>
                            </div>
                        </div>
                    <?php endif;?>
                </form>   
            </div>
            <div id="hormonio" class="tab-pane fade">
                <form method="POST" action="<?php echo BASE_URL; ?>/exame/editar" class="" id="">
                    <?php isset($exameDetalhe['grupo3']) ? $exameDetalhe['grupo3'] : ""; ?>
                    <?php if (!empty($exameDetalhe['grupo3'])): ?>
                    <table class="table table-bordered table-responsive table-hover table-condensed" id="table_exame_detalhado">
                        <thead>
                            <tr>
                                <td><b>Número do Exame:</b> <?php echo $exameDetalhe['grupo3'][0]['num_exame']; ?></td>
                                <td colspan="3"><b>Data:</b> <?php echo $exameDetalhe['grupo3'][0]['dt_exame']; ?></td>
                            </tr>
                            <tr>
                                <th>Exame</th>
                                <th>Resultado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($exameDetalhe['grupo3'] as $linha): ?>
                            <tr>
                                <td><?php echo ucwords(strtolower(mb_convert_case($linha['exame'], MB_CASE_TITLE))); ?></td>
                                <td width="300"><?php if (!empty($linha['resultado'])) {echo $linha['resultado'];} else {echo "<span class='color_red'>Aguardando Resultado</span>";} ?><input type="hidden" name="id_resultado_exame[]" value="<?php echo $linha['id_resultado_exame']; ?>"/></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table> 
                    <input type="hidden" name="idExame" value="<?php echo $exameDetalhe['grupo3'][0]['id_exame']; ?>" />
                    <input type="hidden" name="idGrupoExame" value="<?php echo $exameDetalhe['grupo3'][0]['id_grupo_exame']; ?>" />
                    <div class="form-group">
                        <div class="div_btn_sair">
                            <button type="submit" id="btn_adc_exame" class="btn btn-primary" title="Clique aqui para Inserir o Resultado do Tipo de Exame">Alterar</button>
                            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame/ver/<?php echo $exameDetalhe['grupo3'][0]['id_exame']; ?>" title="Voltar à página Anterior">Voltar</a>
                            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame" title="Voltar à página de Exames Geral">Sair</a>
                        </div>
                    </div>
                    <?php else: ?>
                        <div class="div_sem_exames alert alert-danger" role="alert">
                            <p>Nenhum exame realizado</p>
                        </div>
                        <div class="form-group">
                            <div class="div_btn_sair">
                               <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame" title="Voltar à página de Exames Geral">Sair</a>
                            </div>
                        </div>
                    <?php endif;?>
                </form>
            </div>
            <div id="testo" class="tab-pane fade">
                <form method="POST" action="<?php echo BASE_URL; ?>/exame/editar" class="" id="">
                    <?php isset($exameDetalhe['grupo4']) ? $exameDetalhe['grupo4'] : ""; ?>
                    <?php if (!empty($exameDetalhe['grupo4'])): ?>
                    <table class="table table-bordered table-responsive table-hover table-condensed" id="table_exame_detalhado">
                        <thead>
                            <tr>
                                <td><b>Número do Exame:</b> <?php echo $exameDetalhe['grupo4'][0]['num_exame']; ?></td>
                                <td colspan="4"><b>Data:</b> <?php echo $exameDetalhe['grupo4'][0]['dt_exame']; ?></td>
                            </tr>
                            <tr>
                                <th>Exame</th>
                                <th>Resultado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($exameDetalhe['grupo4'] as $linha): ?>
                            <tr>
                                <td><?php echo ucwords(strtolower(mb_convert_case($linha['exame'], MB_CASE_TITLE))); ?></td>
                                <td width="300"<?php echo $linha['resultado']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table> 
                    <input type="hidden" name="idExame" value="<?php echo $exameDetalhe['grupo4'][0]['id_exame']; ?>" />
                    <input type="hidden" name="idGrupoExame" value="<?php echo $exameDetalhe['grupo4'][0]['id_grupo_exame']; ?>" />
                    <div class="form-group">
                        <div class="div_btn_sair">
                            <button type="submit" id="btn_adc_exame" class="btn btn-primary" title="Clique aqui para Inserir o Resultado do Tipo de Exame">Alterar</button>
                            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame/ver/<?php echo $exameDetalhe['grupo4'][0]['id_exame']; ?>" title="Voltar à página Anterior">Voltar</a>
                            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame" title="Voltar à página de Exames Geral">Sair</a>
                        </div>
                    </div>
                    <?php else: ?>
                        <div class="div_sem_exames alert alert-danger" role="alert">
                            <p>Nenhum exame realizado</p>
                        </div>
                        <div class="form-group">
                            <div class="div_btn_sair">
                                <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame" title="Voltar à página de Exames Geral">Sair</a>
                            </div>
                        </div>
                    <?php endif;?>
                </form>
            </div>
            <div id="geral" class="tab-pane fade">
                <form method="POST" action="<?php echo BASE_URL; ?>/exame/editar" class="" id="">
                    <?php isset($exameDetalhe['grupo5']) ? $exameDetalhe['grupo5'] : ""; ?>
                    <?php if (!empty($exameDetalhe['grupo5'])): ?>
                    <table class="table table-bordered table-responsive table-hover table-condensed" id="table_exame_detalhado">
                        <thead>
                            <tr>
                                <td><b>Número do Exame:</b> <?php echo $exameDetalhe['grupo5'][0]['num_exame']; ?></td>
                                <td colspan="5"><b>Data:</b> <?php echo $exameDetalhe['grupo5'][0]['dt_exame']; ?></td>
                            </tr>
                            <tr>
                                <th>Exame</th>
                                <th>Resultado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($exameDetalhe['grupo5'] as $linha): ?>
                            <tr>
                                <td><?php echo ucwords(strtolower(mb_convert_case($linha['exame'], MB_CASE_TITLE))); ?></td>
                                <td width="300"><?php if (!empty($linha['resultado'])) {echo $linha['resultado'];} else {echo "<span class='color_red'>Aguardando Resultado</span>";} ?><input type="hidden" name="id_resultado_exame[]" value="<?php echo $linha['id_resultado_exame']; ?>"/></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table> 
                    <input type="hidden" name="idExame" value="<?php echo $exameDetalhe['grupo5'][0]['id_exame']; ?>" />
                    <input type="hidden" name="idGrupoExame" value="<?php echo $exameDetalhe['grupo5'][0]['id_grupo_exame']; ?>" />
                    <div class="form-group">
                        <div class="div_btn_sair">
                            <button type="submit" id="btn_adc_exame" class="btn btn-primary" title="Clique aqui para Inserir o Resultado do Tipo de Exame">Alterar</button>
                            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame/ver/<?php echo $exameDetalhe['grupo5'][0]['id_exame']; ?>" title="Voltar à página Anterior">Voltar</a>
                            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame" title="Voltar à página de Exames Geral">Sair</a>
                        </div>
                    </div>
                    <?php else: ?>
                        <div class="div_sem_exames alert alert-danger" role="alert">
                            <p>Nenhum exame realizado</p>
                        </div>
                        <div class="form-group">
                            <div class="div_btn_sair">
                                <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame" title="Voltar à página de Exames Geral">Sair</a>
                            </div>
                        </div>
                    <?php endif;?>
                </form>
            </div>
            <div id="urina" class="tab-pane fade">
                <form method="POST" action="<?php echo BASE_URL; ?>/exame/editar" class="" id="">
                    <?php isset($exameDetalhe['grupo6']) ? $exameDetalhe['grupo6'] : ""; ?>
                    <?php if (!empty($exameDetalhe['grupo6'])): ?>
                    <table class="table table-bordered table-responsive table-hover table-condensed" id="table_exame_detalhado">
                        <thead>
                            <tr>
                                <td><b>Número do Exame:</b> <?php echo $exameDetalhe['grupo6'][0]['num_exame']; ?></td>
                                <td colspan="6"><b>Data:</b> <?php echo $exameDetalhe['grupo6'][0]['dt_exame']; ?></td>
                            </tr>
                            <tr>
                                <th>Exame</th>
                                <th>Resultado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($exameDetalhe['grupo6'] as $linha): ?>
                            <tr>
                                <td><?php echo ucwords(strtolower(mb_convert_case($linha['exame'], MB_CASE_TITLE))); ?></td>
                                <td width="300"><?php if (!empty($linha['resultado'])) {echo $linha['resultado'];} else {echo "<span class='color_red'>Aguardando Resultado</span>";} ?><input type="hidden" name="id_resultado_exame[]" value="<?php echo $linha['id_resultado_exame']; ?>"/></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table> 
                    <input type="hidden" name="idExame" value="<?php echo $exameDetalhe['grupo6'][0]['id_exame']; ?>" />
                    <input type="hidden" name="idGrupoExame" value="<?php echo $exameDetalhe['grupo6'][0]['id_grupo_exame']; ?>" />
                    <div class="form-group">
                        <div class="div_btn_sair">
                            <button type="submit" id="btn_adc_exame" class="btn btn-primary" title="Clique aqui para Inserir o Resultado do Tipo de Exame">Alterar</button>
                            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame/ver/<?php echo $exameDetalhe['grupo6'][0]['id_exame']; ?>" title="Voltar à página Anterior">Voltar</a>
                            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame" title="Voltar à página de Exames Geral">Sair</a>
                        </div>
                    </div>
                    <?php else: ?>
                        <div class="div_sem_exames alert alert-danger" role="alert">
                            <p>Nenhum exame realizado</p>
                        </div>
                        <div class="form-group">
                            <div class="div_btn_sair">
                                <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame" title="Voltar à página de Exames Geral">Sair</a>
                            </div>
                        </div>
                    <?php endif;?>
                </form>
            </div>            
        </div>
    </div>

</section>