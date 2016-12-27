
<section class="container col-sm-12 col-md-12">
    <div class="div_cont_exames col-sm-3 col-md-3">
        <aside class="panel">
            <div class="div_qtd_exame_geral">
                <h3>Geral</h3>
            </div>
            <?php isset($contagem) ? $contagem : ""; ?>
            <ul class="list-group" id="list_group_home">
                <?php foreach ($contagem as $linha): ?>
                <li class="list-group-item">Total de Exames Realizados em <?php echo $linha['data']; ?>: <a href="<?php echo BASE_URL; ?>/exame/listar_ano/<?php echo $linha['data']; ?>"><span class="badge" id="badge_geral"><?php echo $linha['qtd_exam']; ?></span></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </div>
    <div class="div_cont_exames col-sm-3 col-md-3">
        <aside class="panel">
            <div class="div_qtd_exame_geral">
                <h3>Resultados Aberto</h3>
            </div>
            <?php isset($contexaaberto['exames']) ? $contexaaberto['exames'] : ""; ?>
            <ul class="list-group" id="list_group_home">
                <?php foreach ($contexaaberto['exames'] as $linha): ?>
                <li class="list-group-item">Total Exames S/ Resultados em <?php echo !empty($linha['data']) ? $linha['data'] : ""; ?>: <a href="<?php echo BASE_URL; ?>/exame/listar_ano/<?php echo !empty($linha['idExame']) ? $linha['idExame'] : ""; ?>"><span class="badge" id="badge_geral"><?php echo !empty($linha['qtd']) ? $linha['data'] : 0; ?></span></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </div>
</section>