
<section class="container col-sm-12 col-md-12">
    <div class="div_cont_exames">
        <?php isset($contagem) ? $contagem : ""; ?>
        <ul class="list-group">
            <?php foreach ($contagem as $linha): ?>
            <li class="list-group-item">Total de Exames Realizados em <?php echo $linha['data']; ?>: <span class="badge"><?php echo $linha['qtd_exam']; ?></span></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>