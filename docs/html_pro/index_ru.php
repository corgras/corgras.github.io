<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HTML Pro v1 - Документация</title>
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="/assets/css/main.css" rel="stylesheet">
	<link href="/assets/css/formstyle.css" rel="stylesheet">
	<link href="/assets/css/media.css" rel="stylesheet">
</head>
<body>
<div id="container">
	<div class="rd-mobilepanel fixed">
		<div class="logo">
			<h1 class="rd-mobilepanel_title pull-left"><a type="button" id="button-menu" class="pull-left"><i class="fa fa-dedent fa-lg"></i></a><span>HTML Pro</span> Документация</h1>
			<div class="rd-mobilepanel_titler pull-right">
				<span>Создан: 31/10/2017</span>
				<span>Последнее обновление: 31/10/2017</span>
				<span>Версия 1</span>
			</div>
			<div class="mobile-button-menu">
				<div id="menu-mobile" class="dropdown">
					<a type="button" id="button-menu-mobile" class="dropdown-toggle" data-toggle="dropdown">Меню<i class="fa fa-dedent fa-lg"></i></a>
					<ul class="menu-mobile-nav dropdown-menu" role="menu" aria-labelledby="button-menu-mobile">
						<li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-home"></i><span>Основная информация</span></a></li>
						<li><a href="#version" data-toggle="tab"><i class="fa fa-code-fork"></i><span>Поддержка версий</span></a></li>
						<li><a href="#install" data-toggle="tab"><i class="fa fa-cogs"></i><span>Установка</span></a></li>
						<!--<li><a href="#update" data-toggle="tab"><i class="fa fa-wrench"></i><span>Обновление</span></a></li>-->
						<li><a href="#setting" data-toggle="tab"><i class="fa fa-sliders"></i><span>Настройка</span></a></li>
						<li><a href="#design" data-toggle="tab"><i class="fa fa-desktop"></i><span>Внешний вид</span></a></li>
						<li><a href="#language" data-toggle="tab"><i class="fa fa-language"></i><span>Локализация</span></a></li>
						<li><a href="#faq" data-toggle="tab"><i class="fa fa-question"></i><span>Частые вопросы</span></a></li>
						<li><a href="#changelog" data-toggle="tab"><i class="fa fa-history"></i><span>Список изменений</span></a></li>
						<li><a href="#contacts" data-toggle="tab"><i class="fa fa-life-ring"></i><span>Тех. поддержка</span></a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>	
	<nav id="column-left">
		<ul id="menu">
			<li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-home"></i><span>Основная информация</span></a></li>
			<li><a href="#version" data-toggle="tab"><i class="fa fa-code-fork"></i><span>Поддержка версий</span></a></li>
			<li><a href="#install" data-toggle="tab"><i class="fa fa-cogs"></i><span>Установка</span></a></li>
			<!--<li><a href="#update" data-toggle="tab"><i class="fa fa-wrench"></i><span>Обновление</span></a></li>-->
			<li><a href="#setting" data-toggle="tab"><i class="fa fa-sliders"></i><span>Настройка</span></a></li>
			<li><a href="#design" data-toggle="tab"><i class="fa fa-desktop"></i><span>Внешний вид</span></a></li>
			<li><a href="#language" data-toggle="tab"><i class="fa fa-language"></i><span>Локализация</span></a></li>
			<li><a href="#faq" data-toggle="tab"><i class="fa fa-question"></i><span>Частные вопросы</span></a></li>
			<li><a href="#changelog" data-toggle="tab"><i class="fa fa-history"></i><span>Список изменений</span></a></li>
			<li><a href="#contacts" data-toggle="tab"><i class="fa fa-life-ring"></i><span>Тех. поддержка</span></a></li>
		</ul>
		<div class="rd-copyright">
			<div class="dropdown">
				<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-copyright" aria-hidden="true"></i>
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<p class="copyright">Developed by the Studio <a href="">«CORGRAS»</a> 2017</p>
				</div>
			</div>
			<p class="copyright-active">Developed by the Studio <a href="">«CORGRAS»</a> © 2017</p>
		</div>
	</nav>
	<div id="content">	
		<div class="page">
			<div id="main">
				<div class="tab-content">
					<section class="tab-pane active" id="home" >
						<article class="description">
							<h2>Введение</h2>
							<p>Html Pro даёт возможность пользователю самому создавать сетку с неограниченным количеством текстовых блоков. Модуль не привязан к определенному CSS-фреймворку, тем самым дает возможность использовать любой CSS-фреймворк, CSS-сетку или применить свои CSS-стили для оформления, всего лишь назначив для блока нужный CLASS и/или ID.</p>	
							<p>Возможности:</p>	
							<ul>
								<li>Отображение на страницах сайта текстовые блоки;</li>
								<li>Создание неограниченного количества блоков;</li>
								<li>Использование иконочных шрифтов;</li>
								<li>Не привязан к CSS-фреймворку (Bootstrap 3);</li>
								<li>Мультиязычность;</li>
								<li>Назначать: изображение и/или иконку;</li>
								<li>Назначать class и/или id.</li>
							</ul>
						</article>
					</section>
					<section class="tab-pane" id="version">
						<article class="description version">
							<h2>Совместимость версий OpenCart</h2>
							<div class="x_title">
								<h5>Opencart</h5>
							</div>
							<div class="x_content">
								<div class="row">
									<div class="col-md-2"><div class="box-reliz">3.0.2.0</div></div>
									<div class="col-md-2"><div class="box-reliz">3.0.1.2</div></div>
									<div class="col-md-2"><div class="box-reliz">3.0.1.1</div></div>
									<div class="col-md-2"><div class="box-reliz">3.0.0.0</div></div>
									<div class="col-md-2"><div class="box-reliz">2.3.0.2</div></div>
									<div class="col-md-2"><div class="box-reliz">2.3.0.1</div></div>
									<div class="col-md-2"><div class="box-reliz">2.3.0.0</div></div>
									<div class="col-md-2"><div class="box-reliz">2.2.0.0</div></div>
									<div class="col-md-2"><div class="box-reliz">2.1.0.2</div></div>
									<div class="col-md-2"><div class="box-reliz">2.1.0.1</div></div>
									<div class="col-md-2"><div class="box-reliz">2.0.3.1</div></div>
									<div class="col-md-2"><div class="box-reliz">2.0.2.0</div></div>
									<div class="col-md-2"><div class="box-reliz">2.0.1.1</div></div>
									<div class="col-md-2"><div class="box-reliz">2.0.1.0</div></div>
								</div>
							</div>
							<hr>
							<div class="x_title">
								<h5>Opencart.pro</h5>
							</div>
							<div class="x_content">
								<div class="row">
									<div class="col-md-2"><div class="box-reliz">2.3.0.2.x</div></div>
									<div class="col-md-2"><div class="box-reliz">2.1.0.2.x</div></div>
									<div class="col-md-2"><div class="box-reliz">2.1.0.1.x</div></div>
									<div class="col-md-2"><div class="box-reliz">2.0.3.1</div></div>
								</div>
							</div>
							<hr>
							<div class="x_title">
								<h5>ocStore</h5>
							</div>
							<div class="x_content">
								<div class="row">
									<div class="col-md-2"><div class="box-reliz">2.3.0.2.2</div></div>
									<div class="col-md-2"><div class="box-reliz">2.3.0.2.1</div></div>
									<div class="col-md-2"><div class="box-reliz">2.3.0.2</div></div>
									<div class="col-md-2"><div class="box-reliz">2.1.0.2.1</div></div>
									<div class="col-md-2"><div class="box-reliz">2.1.0.2</div></div>
									<div class="col-md-2"><div class="box-reliz">2.1.0.1.1</div></div>
									<div class="col-md-2"><div class="box-reliz">2.1.0.1</div></div>
								</div>
							</div>
						</article>
					</section>
					<section class="tab-pane" id="install">
						<article class="description">
							<h2>Установка</h2>
							<ol>						
								<li>Скопируйте папки <strong>admin</strong> и <strong>catalog</strong></li>
								<li>Перейти в Система/Группы пользователей и для администратора установить права доступа (в блоках <strong class="blue">«Разрешить просмотр»</strong> и <strong class="blue">«Разрешить редактировать»</strong> отметить галочкой <strong>extension/module/html_pro)</strong>;</li>
								<li>В списке модулей <strong class="blue">«Модули > Модули»</strong> установите модуль <strong>HTML Pro<strong>;</li>
								<li>В <strong class="blue">«Дизайн > Cхема»</strong> выберите страницу магазина и расположите модуль в нужной позиции.</li>
							</ol>
						</article>
					</section>
					<!--<section class="tab-pane" id="update">
						<article class="description">
							
						</article>
					</section>-->
					<section class="tab-pane" id="setting">
						<article class="description">
							<h2>Настройка модуля</h2>
							<p>Ожидается</p>
						</article>
					</section>
					<section class="tab-pane" id="design">
						<article class="description">
							<h2>Внешний вид</h2>
							<p class="alert alert-warning alert-dismissible">Модуль идет без стилизации блоков.</p>
							<p>Для оформления блоков, Вам нужно взять готовые CSS стили или написать свои CSS стили и разместить в файле <strong class="blue">«stylesheet.css»</strong>, который находится:<p>
							<p class="alert alert-info">catalog \ view \ stylesheet \ stylesheet.css</p>
							<p>Потом в настройках модуля, в нужных полях, назначить <strong>Class</strong> или <strong>Id</strong>.</p>
						</article>
					</section>
					<section class="tab-pane" id="language">
						<article class="description">
							<h2>Локализация</h2>
							<p>Модификатор имеет полную поддержку нескольких языков. По умолчанию устанавливается английский и русский язык.<br>Ниже вы найдете инструкцию, как добавить и перевести модификатор на свой язык.</p>
							<p class="alert alert-warning alert-dismissible">В зависимости от версии OpenCart папка может называться «russian» или «ru-ru»</p>
							<br>
							<hr>
							<h3>Админ-панель:</h3> 
							<ul>
								<li>Скопируйте файл <strong class="red">«html_pro.php»</strong> из папки:<p class="alert alert-info">admin \ language \ russian \ module \ html_pro.php</p>
								</li>
								<li>Вставьте в папку и после чего переведите содержимое файла:
								<p class="alert alert-info">admin \ language \ ВАШ_ЯЗЫК \ module \ html_pro.php</p></li>
							</ul>
							<br>
						</article>
					</section>
					<section class="tab-pane" id="faq">
						<article class="description">
							<!--<div class="panel-group" id="accordion">
							  <div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
									Не устанавливается</a>
								  </h4>
								</div>
								<div id="collapse1" class="panel-collapse collapse in">
								  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
								  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
								  minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
								  commodo consequat.</div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
									Collapsible Group 2</a>
								  </h4>
								</div>
								<div id="collapse2" class="panel-collapse collapse">
								  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
								  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
								  minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
								  commodo consequat.</div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
									Collapsible Group 3</a>
								  </h4>
								</div>
								<div id="collapse3" class="panel-collapse collapse">
								  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
								  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
								  minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
								  commodo consequat.</div>
								</div>
							  </div>
							</div> -->
						</article>
					</section>
					<section class="tab-pane" id="changelog">
						<article class="description">
							<div class="time-clock">
								<div class="time-circle"><i class="fa fa-history" aria-hidden="true"></i></div>
								<span>Список изменений</span>
							</div>
							<ul class="list-unstyled timeline">
								<li>
									<div class="block">
										<div class="tags">
											<h5 class="title">
												<span class="version">v1.0</span><span class="date">31.10.2017</span>
											</h5>
										</div>
										<div class="block_content">
											<ul class="excerpt"><li>Начальная версия.</li></ul>
										</div>
									</div>
								</li>
							</ul>
						</article>
					</section>
					<section class="tab-pane" id="contacts">
						<article class="description">
							<h4 style="margin-top:0px;">Уважаемые клиенты!</h4>
							<p>Перед тем как написать, большая просьба ознакомиться с документацией.<br>Если у Вас все-таки остались вопросы, то оставьте свою заявку и разработчик свяжется с Вами в течение 48 часов.</p>
							<br>
							<noindex>
								<div class="info-url">
									<h4 class="">Контакты</h4>
									<p>Вы можете отправить свое сообщение нам на почту или оставить свое сообщение в соц.сети.</p>
									<div class="row">
										<div class="col-sm-4 text-center">
<script type="text/javascript" language="JavaScript">
var login  = String.fromCharCode(119, 101, 98, 95, 100, 101, 118, 101, 108, 111, 112, 109, 101, 110, 116);
var server = String.fromCharCode(109, 97, 105, 108, 46, 117, 97);
var email  = login+'@'+server;
var email2 ='<i class="fa fa-envelope-o"></i>'+login+'@'+server;
var url = 'mailto:'+email;
document.write('<a rel="nofollow" class="btn-contact" href="'+url+'">'+email2+'</a>');
</script>
										</div>
										<div class="col-sm-4 text-center">
											<a href="https://vk.com/corgras" class="btn-contact"><i class="fa fa-vk"></i>ВКонтакте</a>
										</div>
										<div class="col-sm-4 text-center">
											<a href="https://vk.com/studio_corgras" class="btn-contact"><i class="fa fa-vk"></i>Группа ВКонтакте</a>
										</div>
									</div>
								</div>
							</noindex>
						</article>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="/assets/js/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/assetss/jquery/1.11.2/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/stickUp.min.js"></script>
<script src="/assets/js/script.js"></script>
</body>
</html>