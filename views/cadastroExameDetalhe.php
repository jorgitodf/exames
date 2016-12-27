
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
                <aside id="form_cad_grupo_1">
                    <?php isset($examesPorGrupo['grupo1']) ? $examesPorGrupo['grupo1'] : ""; ?>
                    <?php isset($idExame) ? $idExame : ""; ?>
                    <form method="POST" action="<?php echo BASE_URL; ?>/cadastro/selecionar_exames" class="" id="form_grupo_1">
                        <input type="hidden" value="<?php echo $idExame; ?>" name="idExame" />
                        <input type="hidden" value="<?php echo $examesPorGrupo['grupo1'][0]['id_grupo_exame']; ?>" name="idGrupo" />
                        <?php foreach ($examesPorGrupo['grupo1'] as $linha): ?>
                        <div class="form-group checkbox">
                            <input type="checkbox" name="examesG1[]" value="<?php echo $linha['id_nome_exame']; ?>" id="linha_<?php echo $linha['id_nome_exame']; ?>" />
                            <label for="linha_<?php echo $linha['id_nome_exame']; ?>"><?php echo $linha['nome_exame']; ?></label>
                        </div>
                        <?php endforeach; ?>  
                        <div class="form-group">
                            <div class="div_btn_sair">
                                <button type="submit" id="btn_exame_detalhe_grupo1" class="btn btn-success">Salvar</button>
                            </div>
                            <div class="msgError exameDetalheError" id="">exameDetalheError</div>
                        </div>
                        <div class="form-group" id="">
                            <div class="alert alert-success" id="msgSucessoExameDetalheG1">msgSucessoCadastro</div>
                            <div class="alert alert-danger" id="msgErroExameDetalheG1">msgErroCadastro</div>
                        </div>
                    </form>
                    
                </aside>     
            </div>
            
            <div id="hemograma" class="tab-pane">
                <aside id="form_cad_grupo_2">
                    <?php isset($examesPorGrupo['grupo2']) ? $examesPorGrupo['grupo2'] : ""; ?>
                    <?php isset($idExame) ? $idExame : ""; ?>
                    <form method="POST" action="<?php echo BASE_URL; ?>/cadastro/selecionar_exames" class="" id="form_grupo_2">
                        <input type="hidden" value="<?php echo $idExame; ?>" name="idExame" />
                        <input type="hidden" value="<?php echo $examesPorGrupo['grupo2'][0]['id_grupo_exame']; ?>" name="idGrupo" />
                        <?php foreach ($examesPorGrupo['grupo2'] as $linha): ?>
                        <div class="form-group checkbox">
                            <input type="checkbox" name="examesG2[]" value="<?php echo $linha['id_nome_exame']; ?>" id="linha_<?php echo $linha['id_nome_exame']; ?>" />
                            <label for="linha_<?php echo $linha['id_nome_exame']; ?>"><?php echo $linha['nome_exame']; ?></label>
                        </div>
                        <?php endforeach; ?>  
                        <div class="form-group">
                            <div class="div_btn_sair">
                                <button type="submit" id="btn_exame_detalhe_grupo2" class="btn btn-success">Salvar</button>
                            </div>
                            <span class="msgError exameDetalheError" id="">exameDetalheError</span>
                        </div>
                        <div class="form-group" id="">
                            <div class="alert alert-success" id="msgSucessoExameDetalheG2">msgSucessoCadastro</div>
                            <div class="alert alert-danger" id="msgErroExameDetalheG2">msgErroCadastro</div>
                        </div>
                    </form>
                </aside>       
            </div>
            
            <div id="hormonio" class="tab-pane">
                <aside id="form_cad_grupo_3">
                    <?php isset($examesPorGrupo['grupo3']) ? $examesPorGrupo['grupo3'] : ""; ?>
                    <?php isset($idExame) ? $idExame : ""; ?>
                    <form method="POST" action="<?php echo BASE_URL; ?>/cadastro/selecionar_exames" class="" id="form_grupo_3">
                        <input type="hidden" value="<?php echo $idExame; ?>" name="idExame" />
                        <input type="hidden" value="<?php echo $examesPorGrupo['grupo3'][0]['id_grupo_exame']; ?>" name="idGrupo" />
                        <?php foreach ($examesPorGrupo['grupo3'] as $linha): ?>
                        <div class="form-group checkbox">
                            <input type="checkbox" name="examesG3[]" value="<?php echo $linha['id_nome_exame']; ?>" id="linha_<?php echo $linha['id_nome_exame']; ?>" />
                            <label for="linha_<?php echo $linha['id_nome_exame']; ?>"><?php echo $linha['nome_exame']; ?></label>
                        </div>
                        <?php endforeach; ?>  
                        <div class="form-group">
                            <div class="div_btn_sair">
                                <button type="submit" id="btn_exame_detalhe_grupo3" class="btn btn-success">Salvar</button>
                            </div>
                            <span class="msgError exameDetalheError" id="">exameDetalheError</span>
                        </div>
                        <div class="form-group" id="">
                            <div class="alert alert-success" id="msgSucessoExameDetalheG3">msgSucessoCadastro</div>
                            <div class="alert alert-danger" id="msgErroExameDetalheG3">msgErroCadastro</div>
                        </div>
                    </form>
                </aside> 
            </div>
            
            <div id="testo" class="tab-pane">
                <aside id="form_cad_grupo_4">
                    <?php isset($examesPorGrupo['grupo4']) ? $examesPorGrupo['grupo4'] : ""; ?>
                    <?php isset($idExame) ? $idExame : ""; ?>
                    <form method="POST" action="<?php echo BASE_URL; ?>/cadastro/selecionar_exames" class="" id="form_grupo_4">
                        <input type="hidden" value="<?php echo $idExame; ?>" name="idExame" />
                        <input type="hidden" value="<?php echo $examesPorGrupo['grupo4'][0]['id_grupo_exame']; ?>" name="idGrupo" />
                        <?php foreach ($examesPorGrupo['grupo4'] as $linha): ?>
                        <div class="form-group checkbox">
                            <input type="checkbox" name="examesG4[]" value="<?php echo $linha['id_nome_exame']; ?>" id="linha_<?php echo $linha['id_nome_exame']; ?>" />
                            <label for="linha_<?php echo $linha['id_nome_exame']; ?>"><?php echo $linha['nome_exame']; ?></label>
                        </div>
                        <?php endforeach; ?>  
                        <div class="form-group">
                            <div class="div_btn_sair">
                                <button type="submit" id="btn_exame_detalhe_grupo4" class="btn btn-success">Salvar</button>
                            </div>
                            <span class="msgError exameDetalheError" id="">exameDetalheError</span>
                        </div>
                        <div class="form-group" id="">
                            <div class="alert alert-success" id="msgSucessoExameDetalheG4">msgSucessoCadastro</div>
                            <div class="alert alert-danger" id="msgErroExameDetalheG4">msgErroCadastro</div>
                        </div>
                    </form>
                </aside>
            </div>
            
            <div id="geral" class="tab-pane">
                <aside id="form_cad_grupo_5">
                    <?php isset($examesPorGrupo['grupo5']) ? $examesPorGrupo['grupo5'] : ""; ?>
                    <?php isset($idExame) ? $idExame : ""; ?>
                    <form method="POST" action="<?php echo BASE_URL; ?>/cadastro/selecionar_exames" class="" id="form_grupo_5">
                        <input type="hidden" value="<?php echo $idExame; ?>" name="idExame" />
                        <input type="hidden" value="<?php echo $examesPorGrupo['grupo5'][0]['id_grupo_exame']; ?>" name="idGrupo" />
                        <?php foreach ($examesPorGrupo['grupo5'] as $linha): ?>
                        <div class="form-group checkbox">
                            <input type="checkbox" name="examesG5[]" value="<?php echo $linha['id_nome_exame']; ?>" id="linha_<?php echo $linha['id_nome_exame']; ?>" />
                            <label for="linha_<?php echo $linha['id_nome_exame']; ?>"><?php echo $linha['nome_exame']; ?></label>
                        </div>
                        <?php endforeach; ?>  
                        <div class="form-group">
                            <div class="div_btn_sair">
                                <button type="submit" id="btn_exame_detalhe_grupo5" class="btn btn-success">Salvar</button>
                            </div>
                            <span class="msgError exameDetalheError" id="">exameDetalheError</span>
                        </div>
                        <div class="form-group" id="">
                            <div class="alert alert-success" id="msgSucessoExameDetalheG5">msgSucessoCadastro</div>
                            <div class="alert alert-danger" id="msgErroExameDetalheG5">msgErroCadastro</div>
                        </div>
                    </form>
                </aside>
            </div>
            
            <div id="urina" class="tab-pane">
                <aside id="form_cad_grupo_6">
                    <?php isset($examesPorGrupo['grupo6']) ? $examesPorGrupo['grupo6'] : ""; ?>
                    <?php isset($idExame) ? $idExame : ""; ?>
                    <form method="POST" action="<?php echo BASE_URL; ?>/cadastro/selecionar_exames" class="" id="form_grupo_6">
                        <input type="hidden" value="<?php echo $idExame; ?>" name="idExame" />
                        <input type="hidden" value="<?php echo $examesPorGrupo['grupo6'][0]['id_grupo_exame']; ?>" name="idGrupo" />
                        <?php foreach ($examesPorGrupo['grupo6'] as $linha): ?>
                        <div class="form-group checkbox">
                            <input type="checkbox" name="examesG6[]" value="<?php echo $linha['id_nome_exame']; ?>" id="linha_<?php echo $linha['id_nome_exame']; ?>" />
                            <label for="linha_<?php echo $linha['id_nome_exame']; ?>"><?php echo $linha['nome_exame']; ?></label>
                        </div>
                        <?php endforeach; ?>  
                        <div class="form-group">
                            <div class="div_btn_sair">
                                <button type="submit" id="btn_exame_detalhe_grupo6" class="btn btn-success">Salvar</button>
                            </div>
                            <span class="msgError exameDetalheError" id="">exameDetalheError</span>
                        </div>
                        <div class="form-group" id="">
                            <div class="alert alert-success" id="msgSucessoExameDetalheG6">msgSucessoCadastro</div>
                            <div class="alert alert-danger" id="msgErroExameDetalheG6">msgErroCadastro</div>
                        </div>
                    </form>
                </aside>
            </div>            
        </div>
    </div>

</section>