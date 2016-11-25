
<section class="container col-sm-12 col-md-12">
    <div class="panel_exame_geral">
        <?php isset($exameDetalhe) ? $exameDetalhe : ""; ?>

        <?php 

            
            foreach ($exameDetalhe['grupo1'] as $linha) {
                echo $linha['exame']." - ";
                echo $linha['resultado']."<br>";
                $nomeGrupo = $linha['nome_grupo'];
            }; 
            echo $nomeGrupo;
            echo "<br>";
            
            foreach ($exameDetalhe['grupo2'] as $linha) {
                echo $linha['exame']." - ";
                echo $linha['resultado']."<br>";
            };

        ?>
    </div>
</section>