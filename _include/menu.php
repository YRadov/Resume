<?php
    require_once 'functions/funcs.php';
    $content = ($_GET)?$_GET['content']:'home';
    $content = (getContent($content))?$content:'home';
?>
<div class="container" id="main"><!-- MAIN -->
    <div class="row"><!-- menu -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responcive-menu">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="home" class="navbar-brand"><h3 id="logo">Радов Юрий</h3></a>
                </div><!-- navbar-header -->

                <div class="collapse navbar-collapse pull-right" id="responcive-menu" >
                    <ul class="nav navbar-nav">
                        <li><a href="home" class="<?php if($content == 'home')echo 'active';?>"><i class="fa fa-home fa-2x"></i></a></li>
                        <li><a href="skills" class="<?php if($content == 'skills')echo 'active';?>">Навыки IT</a></li>
                        <li><a href="about" class="<?php if($content == 'about')echo 'active';?>">О себе</a></li>
                        <li><a href="contacts" class="<?php if($content == 'contacts')echo 'active';?>">Контакты</a></li>
                        <li><a href="resume" target="_blank">Резюме</a></li>
                    </ul>
                </div><!-- navbar-collapse -->
            </div><!-- container -->
        </div><!-- navbar -->
    </div><!-- /menu -->

