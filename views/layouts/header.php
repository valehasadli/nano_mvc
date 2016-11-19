<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php //Wilsa::getDesc();  ?>">
        <meta name="author" content="<?php // Wilsa::powered();  ?>">
        <title>WILSA MVC</title>
        <?php Controller::registerCSS(); ?>
        <?php Controller::registerJS("POS_HEAD"); ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <?php Session::init(); ?>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=BaseUrl; ?>">
                        <img class="img-responsive logo" src="<?=Assets .'/img/logo/logo.png'; ?>">
                    </a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?=BaseUrl; ?>/site/contact">
                                Contact
                            </a>
                        </li>
                        <?php if(Auth::user()): ?>
                            <li>
                                <a href="<?= BaseUrl; ?>/user/logout">
                                    Logout
                                </a>
                            </li>
                            <li>
                                <a href="<?=BaseUrl . 'user/profile'; ?>">
                                    <?= Auth::user(); ?>
                                </a>
                            </li>
                        <?php else: ?>
                            <li><a href="<?= BaseUrl; ?>/site/login">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>




