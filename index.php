<?php $title = 'Радов Юрий | Главная';?>
<?php require_once '_include/header.php'; ?>
<?php require_once '_include/menu.php'; ?>
<!-- ----------------------ГАЛЕРЕЯ---------------------------------- -->
	
	<div class="hidden-lg hidden-md hidden-sm instead_gallery">
		<img src="img/custom.png" class="img-responsive" alt="">
	</div>
	<div class="container hidden-xs">
		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>Навыки <i class="fa fa-cog fa-spin"></i></h2>
				<p><b>
					- HTML/CSS<br>
					- MySQL<br>
					- PHP
                </b></p>
				<a href="skills" class="da-link">Подробнее</a>
				<div class="da-img"><img src="img/web.png" alt="image01" height=256 width=256/></div>
			</div>
			<div class="da-slide">
				<h2>О себе <i class="fa fa-smile-o fa-spin"></i></h2>
                <p><b>
					- Работа<br>
					- Семья<br>
					- Интересы
                </b></p>
				<a href="mi" class="da-link">Подробнее</a>
				<div class="da-img"><img src="img/hobby.png" alt="image01" height=256 width=256 /></div>
			</div>
			<div class="da-slide">
				<h2>Контакты <i class="fa fa-at fa-spin"></i></h2>
                <p><b>
					- Адрес<br>
					- Телефоны<br>
					- E-mail
                </b></p>
				<a href="contacts" class="da-link">Подробнее</a>
				<div class="da-img"><img src="img/2.png" alt="image01" height=256 width=256 /></div>
			</div>
			<div class="da-slide">
				<h2>Резюме <i class="fa fa-spinner fa-pulse"></i></h2>
                <p><b>
					- Что?<br>
					- Где?<br>
					- Когда?
                </b></p>
				<a href="resume" class="da-link">Подробнее</a>
				<div class="da-img"><img src="img/3.png" alt="resume" height=256 width=256 /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
	</div><!-- .container -->
</div><!-- MAIN --> 
<!-------------------------------------------------------------------------------------------------->
<?php require_once '_include/footer.php'; ?>
</div><!--#wrapper-->
<!--=====================================================================================================-->
    <script type="text/javascript" src="js/jquery v1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/my_scripts.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
	<script type="text/javascript" src="js/jquery.cslider.js"></script>
	<script type="text/javascript">
		$(function() {
		
			$('#da-slider').cslider({
				autoplay	: true,
				bgincrement	: 450
			});
		
		});
	</script>	


</body>
</html>