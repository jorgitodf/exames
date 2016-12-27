
<section class="container col-sm-12 col-md-12">
    <div class="row form_cadastro_exame" >
        <form method="POST" action="<?php echo BASE_URL; ?>/cadastro/cadastrar_exame" class="form_cadastro_de_exame" id="form_exa_cad">
            <aside class="panel panel-info" id="panel_form_cadastro_de_exame">
                <div class="panel-heading" id="panel_form_cadastro_de_exame_heading">
                    <h3 class="panel-title">Cadastro de Novo Exame</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group" id="">
                        <div class="" id="div_num_exame">
                            <label for="num_exame" class="control-label">Número do Exame:</label>
                            <input type="text" name="num_exame" id="num_exame" class="form-control input-sm" disabled="disabled" placeholder="Número do Exame">
                        </div>
                        <div class="" id="div_num_exame_error">
                            <div class="" id="numExameError">erro</div>
                            <div class="alert-danger" id="msgErroExameJaCadastrado">Exame já Cadastrado</div>
                        </div>  
                        <div class="" id="div_data_exame">
                            <label for="data_exame" class="control-label">Data Exame:</label>
                            <input type="date" name="data_exame" id="data_exame" class="form-control input-sm" disabled="disabled" placeholder="Data do Exame">
                        </div>
                        <div class="" id="div_data_exame_error">
                            <div class="" id="dataExameError">erro</div>
                        </div>  
                        <div class="" id="div_medico">
                            <label for="data_exame" class="control-label">Médico:</label>
                            <select class="form-control input-sm" name="medico" id="medico" disabled="disabled">
                                <option></option>
                                    <?php foreach ($medicos as $linha): ?> 
                                        <option value="<?php echo $linha['id_medico']; ?>"><?php echo $linha['nome_med']; ?> </option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="" id="div_medico_error">
                            <div class="" id="medicoError">erro</div>
                        </div>    
                        <div class="" id="div_lab">
                            <label for="lab" class="control-label">Laboratório:</label>
                            <select class="form-control input-sm" name="lab" id="lab" disabled="disabled">
                                <option></option>
                                    <?php foreach ($labs as $linha): ?> 
                                        <option value="<?php echo $linha['id_laboratorio']; ?>"><?php echo $linha['nome_lab']; ?> </option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="" id="div_lab_error">
                            <div class="" id="laboratotioError">erro</div>
                        </div>  
                        <div class="form-group" id="div_tipo_exame">
                            <label for="tipo_exame" class="control-label">Tipo de Exame:</label>
                            <select class="form-control input-sm" name="tipo_exame" id="tipo_exame" disabled="disabled">
                                <option></option>
                                    <?php foreach ($tipoExame as $linha): ?> 
                                        <option value="<?php echo $linha['id_tipo_exame']; ?>"><?php echo $linha['tipo_exame']; ?> </option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="" id="div_tipo_exame_error">
                            <div class="" id="tipoExameError">erro</div>
                            <div class="msgError" id="idExame">id</div>
                        </div>  
                    </div>    
                    <div class="form-group" id="div_botoes_cad_exame">
                        <div class="form-group" id="">
                            <button type="button" id="btn_criar_exame" class="btn btn-success">Criar</button>
                            <button type="submit" id="btn_salvar_exame" class="btn btn-success" disabled="disabled">Salvar</button>
                            <button type="button" id="btn_novo_exame" class="btn btn-success" onclick="javascript:window.location.href='<?php echo BASE_URL; ?>/cadastro'" disabled="disabled">Novo</button>
                            <button type="button" id="btn_selecionar_exame" class="btn btn-success" onclick="javascript:window.location.href='<?php echo BASE_URL; ?>/cadastro/cadastrar_exame_detalhe'" disabled="disabled" title="Clique aqui para Cadastrar os Tipos de Exames">Exames</button>
                        </div>
                    </div>
                </div>   
            </aside>
        </form>
        <div class="form-group" id="div_msg_sucesso_e_sem_sucesso_form_cad_exame">
            <div class="alert alert-success" id="msgCadExameSucesso">msgSucesso</div>
            <div class="alert alert-danger" id="msgCadExameError">msgCadExameError</div>
        </div>
    </div>
    	
</section>