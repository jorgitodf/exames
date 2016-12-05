
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
                <?php isset($examesPorGrupo['grupo1']) ? $examesPorGrupo['grupo1'] : ""; ?>
                <form method="POST" action="<?php echo BASE_URL; ?>/cadastro/selecionar_exames" class="" id="">
                    <?php foreach ($examesPorGrupo['grupo1'] as $linha): ?>
                    <div class="form-group checkbox">
                        <label>
                            <input type="checkbox" value="<?php echo $linha['id_nome_exame']; ?>"><?php echo $linha['nome_exame']; ?>
                        </label>
                    </div>
                    <?php endforeach; ?>  
                    <div class="form-group">
                        <div class="div_btn_sair">
                            <button type="submit" id="" class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                </form>    
            </div>
            
            <div id="hemograma" class="tab-pane">
                <?php isset($examesPorGrupo['grupo2']) ? $examesPorGrupo['grupo2'] : ""; ?>
                <form method="POST" action="<?php echo BASE_URL; ?>/cadastro/selecionar_exames" class="" id="">
                <?php foreach ($examesPorGrupo['grupo2'] as $linha): ?>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="<?php echo $linha['id_nome_exame']; ?>"><?php echo $linha['nome_exame']; ?>
                    </label>
                </div>
                <?php endforeach; ?> 
                    <div class="form-group">
                        <div class="div_btn_sair">
                            <button type="submit" id="" class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                </form>    
            </div>
            
            <div id="hormonio" class="tab-pane">
                <?php isset($examesPorGrupo['grupo3']) ? $examesPorGrupo['grupo3'] : ""; ?>
                <?php foreach ($examesPorGrupo['grupo3'] as $linha): ?>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="<?php echo $linha['id_nome_exame']; ?>"><?php echo $linha['nome_exame']; ?>
                    </label>
                </div>
                <?php endforeach; ?> 
            </div>
            
            <div id="testo" class="tab-pane">
                <?php isset($examesPorGrupo['grupo4']) ? $examesPorGrupo['grupo4'] : ""; ?>
                <?php foreach ($examesPorGrupo['grupo4'] as $linha): ?>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="<?php echo $linha['id_nome_exame']; ?>"><?php echo $linha['nome_exame']; ?>
                    </label>
                </div>
                <?php endforeach; ?> 
            </div>
            
            <div id="geral" class="tab-pane">
                <?php isset($examesPorGrupo['grupo5']) ? $examesPorGrupo['grupo5'] : ""; ?>
                <?php foreach ($examesPorGrupo['grupo5'] as $linha): ?>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="<?php echo $linha['id_nome_exame']; ?>"><?php echo $linha['nome_exame']; ?>
                    </label>
                </div>
                <?php endforeach; ?> 
            </div>
            
            <div id="urina" class="tab-pane">
                <?php isset($examesPorGrupo['grupo6']) ? $examesPorGrupo['grupo6'] : ""; ?>
                <?php foreach ($examesPorGrupo['grupo6'] as $linha): ?>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="<?php echo $linha['id_nome_exame']; ?>"><?php echo $linha['nome_exame']; ?>
                    </label>
                </div>
                <?php endforeach; ?> 
            </div>            
        </div>
    </div>

</section>