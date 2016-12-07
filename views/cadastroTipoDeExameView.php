
<section class="container col-sm-12 col-md-12">
    <div class="row form_cadastro_exame" >
        <form method="POST" action="<?php echo BASE_URL; ?>/cadastro/cadastrartipoexame" class="form_exame_cadastro" id="form_exa_cad_tipo_exame">
            <aside class="panel panel-info" id="panel_form_cadastro_tipo_de_exame">
                <div class="panel-heading" id="panel_form_cadastro_tipo_de_exame_heading">
                    <h3 class="panel-title">Cadastro de Tipo de Exame</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group" id="">
                        <div class="" id="div_tipo_de_exame">
                            <label for="tipo_exame" class="control-label">Tipo do Exame:</label>
                            <input type="text" name="tipo_exame" id="tipo_exame" class="form-control input-sm" placeholder="Tipo do Exame">
                        </div>
                        <div class="" id="div_tipo_de_exame_error">
                            <div class="msgError" id="tipoExameError">erro</div>
                        </div>    
                        
                        <div class="" id="div_medida_de_exame">
                            <label for="medida_exame" class="control-label">Medida:</label>
                            <input type="text" name="medida_exame" id="medida_exame" class="form-control input-sm" placeholder="Medida">
                            <div class="msgError" id="medidaExameError">erro</div>
                        </div>
                        <div class="">
                            <div class="msgError" id="medidaExameError">erro</div>
                        </div> 
                        
                        <div class="">
                            <label for="grupo_exame" class="control-label">Grupo do Exame:</label>
                            <select class="form-control input-sm" name="grupo_exame" id="grupo_exame" >
                                <option></option>
                                    <?php foreach ($grupos as $linha): ?> 
                                        <option value="<?php echo $linha['id_grupo_exame']; ?>"><?php echo $linha['nome_grupo']; ?> </option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="">
                            <div class="msgError" id="grupoError">erro</div>
                        </div> 
                    </div>
   
                    <div class="form-group">
                        <div class="form-group" id="div_btn_salvar">
                            <button type="button" id="novo_exame" class="btn btn-success">Novo Exame</button>
                            <button type="submit" id="salvar_exame" class="btn btn-success" disabled="disabled">Salvar</button>
                            <button type="button" id="btn_sel_exame" class="btn btn-success" onclick="javascript:window.location.href='<?php echo BASE_URL; ?>/cadastro/cadastrar_exame_detalhe'" disabled="disabled">Selecionar Exames</button>
                        </div>
                        <div class="form-group" id="div_sucessoError">
                            <div class="alert alert-success sucessoError" id="sucessoError">msgSucesso</div>
                            <div class="alert alert-success" id="semsucessoError">msgSemSucesso</div>
                        </div>
                    </div>
                    
                </div>   
            </aside>
        </form>
        
    </div>
    	
</section>