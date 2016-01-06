<?php $title = 'Радов Юрий | Контакты';?>
<?php require_once '_include/header.php'; ?>
<?php require_once '_include/menu.php'; ?>

<!--------------------------------------------------------------------------------------------------->
<div class="container main">
    <h1 class="title">Контакты</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 left">
            <button type="button" id="f" class="btn btn-default swing">Адрес</button>
            <br>
            <br>
            <button type="button" id="s" class="btn btn-default swing">Телефоны</button>
            <br>
            <br>
            <button type="button" id="sk" class="btn btn-default swing">Skype</button>
            <br>
            <br>
            <button type="button" id="th" class="btn btn-default swing">E-mail</button>
            <br>
            <br>
            <button type="button" id="fou" class="btn btn-default swing">Соцсети</button>
        </div><!--.left-->

        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 right">
            <div id="img"><img src="img/web-custom.png" class="img-responsive" alt=""></div>
            <div id="first">
                <h3>Адрес</h3>
                <table class="table">
                    <tr>
                        <td>Страна</td>
                        <td>Украина</td>
                    </tr>
                    <tr>
                        <td>Город</td>
                        <td>Одесса</td>
                    </tr>
                </table>
            </div>
            <div id="second">
                <h3>Телефоны</h3>
                <table class="table">
                    <tr>
                        <td>Контактные</td>
                        <td> (067)128-32-59; (063)623-58-70;</td>
                    </tr>
                </table>
            </div>

            <div id="skype">
                <h3>Skype</h3>
                <table class="table">
                    <tr>
                        <td>Имя</td>
                        <td>Yurii Radov</td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>radov.yuriy@ukr.net</td>
                    </tr>
                    <tr>
                        <td>Логин</td>
                        <td>radov.yuriy</td>
                    </tr>

                </table>
            </div>

            <div id="third">
                <h3>E-mail</h3>
                <ul>
                    <li><a href="mailto:radov.yuriy@ukr.net"><h4>radov.yuriy@ukr.net</h4></a></li>
                </ul>
            </div>

            <div id="fourth">
                <h3>Соцсети</h3>
                <ul>
                    <li><a href="https://www.facebook.com/radov.yuriy" target="_blank"><h4>- Facebook</h4></a></li>
                    <li><a href="https://vk.com/radov_yuriy" target="_blank"><h4>- Контакт</h4></a></li>
                </ul>
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