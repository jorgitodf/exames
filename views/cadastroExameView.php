
<section class="container col-sm-12 col-md-12">
    <div class="row form_cadastro_exame" >
        <form method="POST" action="<?php echo BASE_URL; ?>/cadastro/cadastrar_exame" class="form_exame_cadastro" id="form_exa_cad">
            <aside class="panel panel-info" id="panel_form_cadastro_exame">
                <div class="panel-heading" id="panel_form_cadastro_exame_heading">
                    <h3 class="panel-title">Cadastro de Novo Exame</h3>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group" id="div_num_exame">
                            <label for="num_exame" class="control-label">Número do Exame:</label>
                            <input type="text" name="num_exame" id="num_exame" class="form-control input-sm" placeholder="Número do Exame">
                            <div class="msgError" id="numExameError">erro</div>
                        </div>
                        <div class="form-group" id="div_data_exame">
                            <label for="data_exame" class="control-label">Data Exame:</label>
                            <input type="date" name="data_exame" id="data_exame" class="form-control input-sm" placeholder="Data do Exame">
                            <div class="msgError" id="dataExameError">erro</div>
                        </div>
                        <div class="form-group" id="div_medico">
                            <label for="data_exame" class="control-label">Médico:</label>
                            <select class="form-control input-sm" name="medico" id="medico" >
                                <option></option>
                                    <?php foreach ($medicos as $linha): ?> 
                                        <option value="<?php echo $linha['id_medico']; ?>"><?php echo $linha['nome_med']; ?> </option>
                                    <?php endforeach; ?>
                            </select>
                            <div class="msgError" id="medicoError">erro</div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group" id="div_lab">
                            <label for="lab" class="control-label">Laboratório:</label>
                            <select class="form-control input-sm" name="lab" id="lab" >
                                <option></option>
                                    <?php foreach ($labs as $linha): ?> 
                                        <option value="<?php echo $linha['id_laboratorio']; ?>"><?php echo $linha['nome_lab']; ?> </option>
                                    <?php endforeach; ?>
                            </select>
                            <span class="msgError" id="laboratotioError">erro</span>
                        </div>
                        <div class="form-group" id="div_tipo_exame">
                            <label for="tipo_exame" class="control-label">Tipo de Exame:</label>
                            <select class="form-control input-sm" name="tipo_exame" id="tipo_exame" >
                                <option></option>
                                    <?php foreach ($tipoExame as $linha): ?> 
                                        <option value="<?php echo $linha['id_tipo_exame']; ?>"><?php echo $linha['tipo_exame']; ?> </option>
                                    <?php endforeach; ?>
                            </select>
                            <span class="msgError" id="tipoExameError">erro</span>
                            <span class="msgError" id="idExame">id</span>
                        </div>
                    </div>
                    <br/>    
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group" id="div_btn_salvar">
                            <button type="button" id="novo_exame" class="btn btn-success">Novo Exame</button>
                            <button type="submit" id="salvar_exame" class="btn btn-success" disabled="disabled">Salvar</button>
                            <button type="button" id="btn_sel_exame" class="btn btn-success" onclick="javascript:window.location.href='<?php echo BASE_URL; ?>/cadastro/cadastrar_exame_detalhe'" disabled="disabled">Selecionar Exames</button>
                            
                        </div>
                        <div class="form-group" id="div_sucessoError">
                            <div class="alert alert-success" id="sucessoError">msgSucess</div>
                        </div>
                    </div>
                </div>   
            </aside>
        </form>
        
    </div>

</section>