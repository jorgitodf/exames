
<section class="container col-sm-12 col-md-12">
    <div class="row form_cadastro_exame" >
        <form method="POST" action="<?php echo BASE_URL; ?>/referencia/cadastrar" class="form_exame_cadastro" id="form_cad_ref_exame">
            <aside class="panel panel-info" id="panel_form_cadastro_tipo_de_exame">
                <div class="panel-heading" id="panel_form_cadastro_tipo_de_exame_heading">
                    <h3 class="panel-title">Cadastro de Referência de Exame</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group" id="">
                        <div class="" id="div_exame_sem_ref">
                            <label for="exame_sem_ref" class="control-label">Tipo de Exame:</label>
                            <select class="form-control input-sm" name="exame_sem_ref" id="exame_sem_ref" disabled="disabled">
                                <option></option>
                                    <?php foreach ($exasemref as $linha): ?> 
                                        <option value="<?php echo $linha['id']; ?>"><?php echo $linha['nome']; ?> </option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="" id="div_exame_sem_ref_error">
                            <div class="msgError" id="exameSemRefError">erro</div>
                        </div> 
                        <div class="" id="div_ref_exame">
                            <label for="ref_exame" class="control-label">Referência:</label>
                            <input type="text" name="ref_exame" id="ref_exame" class="form-control input-sm" disabled="disabled" placeholder="Referência do Exame">
                        </div>
                        <div class="" id="div_ref_exame_error">
                            <div class="msgError" id="refExameError">erro</div>
                        </div>    
                        <div class="form-group" id="div_valor_ref">
                            <label for="valor_ref" class="control-label">Valor:</label>
                            <input type="text" name="valor_ref" id="valor_ref" class="form-control input-sm" disabled="disabled" placeholder="Valor da Referência do Exame">
                        </div>
                        <div class="" id="div_valor_ref_error">
                            <div class="msgError" id="valorRefError">erro</div>
                        </div> 
                    </div>
                    <div class="form-group" id="div_botoes">
                        <div class="form-group" id="">
                            <button type="button" id="btn_criar_ref_exame" class="btn btn-success">Criar</button>
                            <button type="submit" id="btn_salvar_ref_exame" class="btn btn-success" disabled="disabled">Salvar</button>
                            <button type="button" id="btn_novo_ref_exame" class="btn btn-success" onclick="javascript:window.location.href='<?php echo BASE_URL; ?>/referencia/cadastrar'" disabled="disabled">Novo</button>
                        </div>
                    </div>
                </div>   
            </aside>
        </form>
        <div class="form-group" id="div_msg_sucesso_e_sem_sucesso">
            <div class="alert alert-success" id="msgCadRefExameSucesso">msgSucesso</div>
            <div class="alert alert-danger" id="msgCadRefExameError">msgSemSucesso</div>
        </div>
    </div>
    	
</section>