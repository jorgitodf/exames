
<section class="container col-sm-12 col-md-12">
    <div class="form_cadastro_exame col-sm-12 col-md-12">
        <form method="POST" action="<?php echo BASE_URL; ?>/cadastro/cadastrar_cliente" class="form_exame_cadastro" id="form_exa_cad">
            <aside class="panel panel-info" id="panel_form_cadastro_exame">
                <div class="panel-heading" id="panel_form_cadastro_exame_heading">
                    <h3 class="panel-title">Cadastro de Novo Exame</h3>
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <label for="num_exame" class="control-label">Número do Exame:</label>
                        <input type="text" name="num_exame" id="num_exame" class="form-control" placeholder="Número do Exame">
                    </div>
                    <div class="form-group">
                        <label for="data_exame" class="control-label">Data Exame:</label>
                        <input type="date" name="data_exame" id="data_exame" class="form-control" placeholder="Data do Exame">
                    </div>
                    <div class="form-group">
                        <label for="data_exame" class="control-label">Médico:</label>
                        <select class="form-control" name="medico" id="medico" >
                            <option></option>
                                <?php foreach ($medicos as $linha): ?> 
                                    <option value="<?php echo $linha['id_medico']; ?>"><?php echo $linha['nome_med']; ?> </option>
                                <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lab" class="control-label">Laboratório:</label>
                        <select class="form-control" name="lab" id="lab" >
                            <option></option>
                                <?php foreach ($labs as $linha): ?> 
                                    <option value="<?php echo $linha['id_laboratorio']; ?>"><?php echo $linha['nome_lab']; ?> </option>
                                <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tipo_exame" class="control-label">Tipo de Exame:</label>
                        <select class="form-control" name="tipo_exame" id="tipo_exame" >
                            <option></option>
                                <?php foreach ($tipoExame as $linha): ?> 
                                    <option value="<?php echo $linha['id_tipo_exame']; ?>"><?php echo $linha['tipo_exame']; ?> </option>
                                <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>   
            </aside>
        </form>

    </div>

</section>