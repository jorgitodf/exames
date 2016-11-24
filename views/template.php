<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Conta</title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/template.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/fonts/glyphicons-halflings-regular.ttf" media="all" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <main>
            <header class="">
                
            </header>

            <section class="col-md-12 col-xs-12 col-sm-12">
                <?php $this->loadViewInTemplate($viewName, $viewData); ?>        
            </section>

            <footer>
            </footer>
        </main>

        <script src="<?php echo BASE_URL; ?>/assets/js/jquery-3.1.0.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/assets/js/jquery.maskMoney.js"></script>
        <script src="<?php echo BASE_URL; ?>/assets/js/bootstrap.min.js"></script>

    </body>
</html>
