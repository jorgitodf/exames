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
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <a href="<?php echo BASE_URL; ?>/" class="logo">SISTEMA <span>EXAMES</span></a>
            <div class="top-nav">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#">Resultados<b class=" fa fa-angle-down"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASE_URL; ?>/exame">Geral</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>

        <main class="">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>        
        </main>

        <footer>
        </footer>

        <script src="<?php echo BASE_URL; ?>/assets/js/jquery-3.1.0.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/assets/js/jquery.maskMoney.js"></script>
        <script src="<?php echo BASE_URL; ?>/assets/js/bootstrap.min.js"></script>

    </body>
</html>
