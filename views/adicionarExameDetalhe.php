
<section class="container col-sm-12 col-md-12">
    <div class="div_container_adc_exame col-sm-10 col-md-10">
        <div class="tab-content" id="div_table">
            <div id="geral" class="tab-pane active in fade">
                <aside id="form_cad_grupo_5">
                    <?php isset($adcexames) ? $adcexames : "" ; ?>
                    <form method="POST" action="<?php echo BASE_URL; ?>/cadastro/adicionar_exame_detalhe" class="" id="form_adc_exames">
                        <div class="div_recebe_id_grupo">
                            <div id="div_exibe_id_grupo"><?php 
                            if (!empty($adcexames['tipoexames'][0]['id_grupo']) && $adcexames['tipoexames'][0]['id_grupo'] == 1) {
                                echo "Perfil Lipídico";
                            } elseif (!empty($adcexames['tipoexames'][0]['id_grupo']) && $adcexames['tipoexames'][0]['id_grupo'] == 2) {
                                echo "Hemograma com Contagem de Plaquetas";
                            } elseif (!empty($adcexames['tipoexames'][0]['id_grupo']) && $adcexames['tipoexames'][0]['id_grupo'] == 3) {
                                echo "Hormônio";
                            } elseif (!empty($adcexames['tipoexames'][0]['id_grupo']) && $adcexames['tipoexames'][0]['id_grupo'] == 4) {
                                echo "Testosterona";
                            } elseif (!empty($adcexames['tipoexames'][0]['id_grupo']) && $adcexames['tipoexames'][0]['id_grupo'] == 5) {
                                echo "Geral";    
                            } elseif (!empty($adcexames['tipoexames'][0]['id_grupo']) && $adcexames['tipoexames'][0]['id_grupo'] == 6) {
                                echo "Urina Tipo 1";    
                            } else {
                                echo "Sem alteração";
                            }?></div>  
                        </div>
                        <div class="div_recebe_num_exame_data_exame">
                            <div id="div_exibe_num_exame"><span class="color_blue">Número do Exame:</span> <?php echo $adcexames['exame'][0]['num_exame']; ?></div>
                            <div id="div_exibe_data_exame"><span class="color_blue">Data:</span> <?php echo $adcexames['exame'][0]['dt_exame']; ?></div>
                        </div>
                        <?php foreach ($adcexames['tipoexames'] as $linha): ?>
                        <div class="form-group checkbox">
                            <input type="checkbox" name="exames[]" value="<?php echo $linha['id']; ?>" id="linha_<?php echo $linha['id']; ?>" />
                            <label for="linha_<?php echo $linha['id']; ?>"><?php echo $linha['nome']; ?></label>
                        </div>
                        <?php endforeach; ?>  
                        <input type="hidden" name="idExame" value="<?php echo $adcexames['exame'][0]['id_exa']; ?>" />
                        <input type="hidden" name="idGrupo" value="<?php echo $adcexames['tipoexames'][0]['id_grupo']; ?>" />
                        <div class="form-group">
                            <div class="div_btn_sair">
                                <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/exame/ver/<?php echo $adcexames['exame'][0]['id_exa']; ?>" title="Voltar à página Anterior">Voltar</a>
                                <button type="submit" id="btn_add_exames" class="btn btn-success">Salvar</button>
                            </div>
                            <span class="msgError exameDetalheError" id="">exameDetalheError</span>
                        </div>
                        <div class="form-group" id="">
                            <div class="alert alert-success ocultaMsgs" id="msgSucessoAddExames">msgSucessoCadastro</div>
                            <div class="alert alert-danger ocultaMsgs" id="msgErrorAddExames">msgErroCadastro</div>
                        </div>
                    </form>
                </aside>
            </div>
        
        </div>
    </div>

</section>