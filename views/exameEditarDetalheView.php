
<section class="container col-sm-12 col-md-12">
    <div class="panel_exame_geral_detalhe col-sm-10 col-md-10">
        <div class="tab-content" id="div_table">
            <div id="" class="">
                <form method="POST" action="<?php echo BASE_URL; ?>/exame/salvar" class="" id="form_editar_resultado_exame">
                    <?php isset($listresulexame) ? $listresulexame : ""; ?>
                    <?php if (!empty($listresulexame)): ?>
                    <table class="table table-bordered table-responsive table-hover table-condensed" id="table_editar_exame">
                        <thead>
                            <tr>
                                <th>Exame</th>
                                <th>Resultado</th>
                                <th>Medida</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listresulexame as $linha): ?>
                            <tr>
                                <td><?php echo $linha['nome']; ?></td>
                                <td width="100"><input type="text" name="resultado_exame[<?php echo $linha['id']; ?>]" id="resultado_exame" placeholder="Insira o Resultado aqui"/></td>
                                <td width="180"><?php echo $linha['medida']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table> 
                    <div class="form-group">
                        <div class="div_btn_sair">
                            <button type="submit" id="btn_salva_edit_exame" class="btn btn-primary" title="Clique aqui para Salvar o Resultado do Tipo de Exame">Salvar</button>
                            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame/alterar" title="Voltar à página Anterior">Voltar</a>
                            <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame" title="Voltar à página de Exames Geral">Sair</a>
                        </div>
                    </div>
                    <div class="" id="">
                        <div class="msgErroEditarExame" id="resultadoError">Preencha todos os campos!</div>
                        <div class="alert alert-success" id="msgAlteracaoExameSucesso">msgSucesso</div>
                    </div> 
                    <?php endif;?>
                </form>
            </div>
        </div>
    </div>

</section>