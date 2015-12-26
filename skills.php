<?php $title = 'Радов Юрий | Навыки';?>
<?php require_once '_include/header.php'; ?>
<?php require_once '_include/menu.php'; ?>
<!--------------------------------------------------------------------------------------------------->
<div class="container main">
    <h1 class="title">Навыки IT</h1>

    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 left">
            <button type="button" id="f" class="btn btn-default swing">HTML/CSS</button>
            <br>
            <br>
            <button type="button" id="s" class="btn btn-default swing">JavaScript/JQuery</button>
            <br>
            <br>
            <button type="button" id="th" class="btn btn-default swing">PHP/MySQL</button>
            <br>
            <br>
            <button type="button" id="fou" class="btn btn-default swing">Разное</button>
        </div><!--.left-->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 right">
            <div id="img"><img src="img/web-custom.png" class="img-responsive" alt=""></div>
            <div id="first">
                <h3>HTML/CSS</h3>
                <p>
                    - Есть опыт верстки с нуля сайтов, интернет-магазинов,<br>
                    - кроссбраузерной и адаптивной верстки,<br>
                    - установки шаблонов на WordPress и Joomla,<br>
                    - использования Bootstrap, Less, Sass.
                </p>

            </div>
            <div id="second">
                <h3>JavaScript/JQuery</h3>
                <p>
                    - Подключал готовые плагины,<br>
                    - Дорабатывал готовые плагины под нужды проектов,<br>
                    - Писал небольшие собственные скрипты(в основном с помощью JQuery),<br>
                    - Есть опыт использования Ajax и формата Json.
                </p>
            </div>
            <div id="third">
                <h3>PHP/MySQL</h3>
                <p>
                    <b>- PHP</b>
                    <br>
                    - Написания с нуля полного функционала интернет-магазинов
                    <br>
                    - MVC
                    <br>
                    - ООП
                    <br>
                    - Фреймворки: CakePHP, Laravel , Yii
                    <br>
                    - GIT
                    <br><br>
                    <b>- Базы данных</b> <br>
                    - MySQL
                    <br>
                    - PostgreSQL
                    <br>
                    - PDO

                </p>

            </div>

            <div id="fourth">
                <h3>Разное</h3>
                <p>
                    <b>Языки программирования:</b>
                    <br>
                    - С/С++
                    <br>
                    <br>
                    <b>ОС:</b>
                    <br>
                    - Windows
                    <br>
                    - Linux(Ubuntu)
                </p>

            </div>

        </div><!--.right-->
    </div><!--.row -->
</div><!--.container main -->
</div><!--# MAIN -->
<!-------------------------------------------------------------------------------------------------->
<?php require_once '_include/footer.php'; ?>
</div><!--#wrapper-->
<!--=====================================================================================================-->
<script type="text/javascript" src="js/jquery v1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/my_scripts.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".main").fadeIn(3000);
    });
</script>

</body>
</html>