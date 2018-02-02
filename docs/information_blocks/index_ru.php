<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Информационные блоки v1 - Документация</title>
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
			<h1 class="rd-mobilepanel_title pull-left"><a type="button" id="button-menu" class="pull-left"><i class="fa fa-dedent fa-lg"></i></a><span>Информационные блоки</span> Документация</h1>
			<div class="rd-mobilepanel_titler pull-right">
				<span>Создан: 10/12/2017</span>
				<span>Последнее обновление: 10/12/2017</span>
				<span>Версия 1</span>
			</div>
			<div class="mobile-button-menu">
				<div id="menu-mobile" class="dropdown">
					<a type="button" id="button-menu-mobile" class="dropdown-toggle" data-toggle="dropdown">Меню<i class="fa fa-dedent fa-lg"></i></a>
					<ul class="menu-mobile-nav dropdown-menu" role="menu" aria-labelledby="button-menu-mobile">
						<li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-home"></i><span>Основная информация</span></a></li>
						<li><a href="#version" data-toggle="tab"><i class="fa fa-code-fork"></i><span>Поддержка версий</span></a></li>
						<li><a href="#install" data-toggle="tab"><i class="fa fa-cogs"></i><span>Установка</span></a></li>
						<li><a href="#update" data-toggle="tab"><i class="fa fa-wrench"></i><span>Обновление</span></a></li>
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
			<li><a href="#update" data-toggle="tab"><i class="fa fa-wrench"></i><span>Обновление</span></a></li>
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
							<p>Данный модификатор позволит вам отвечать на отзывы клиентов. Также модификатор позволит вам:</p>	
							<ul>
								<li>Оставить ответ на отзыв;</li>
								<li>Быстро изменять статус отзыва;</li>
								<li>Уведомление клиента об ответе по почте;</li>
								<li>Добавлено поле e-mail, для уведомления клиентов;</li>
								<li>Изменять дату добавления отзыва (для версий ниже 2.3.x);</li>
								<li>Включать / отключать модерацию отзывов;</li>
								<li>Включать / отключать обязательное заполнения e-mail;</li>
								<li>WYSIWYG-редактор для редактирование отзывов.</li>
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
							<p>Установка модификатора состоит из двух частей. В каждой папке <strong>«Opencart v2.x»</strong> вы обнаружите две папки: <strong>«Step-1 - Admin Panel»</strong> и <strong>«Step-2 - Store Front»</strong>.</p>
							<ol>						
								<li>В папке <strong>«Step-1 - Admin Panel»</strong> найдете архив <strong class="red">«ReplyToReviews_AdminPanel.ocmod.zip»</strong> в котором содержится основной функционал, локализация для админ панели.</li>
								<li>В папке <strong>«Step-2 - Store Front»</strong> найдете список модификаторов для своего шаблона. Список постепенно будет пополняться после обращений клиентов.</li>
							</ol>
							<br>
							<hr>				
							<h3>Шаг 1</h3>
							<ol>						
								<li>В админке перейдите <strong class="blue">«Модули > Установка расширений»</strong> и установите файл <strong class="red">«ReplyToReviews_AdminPanel.ocmod.zip»</strong>;</li>
								<li>Получаем сообщение об успешной установке и идем в <strong class="blue">«Модули > Модификаторы»</strong> и кликаем по кнопке <strong class="blue">«Обновить»</strong> в правом верхнем углу <a href="/images/rtr/admin_mod_ru.jpg">См. пример</a>;</li>
								<li>Если не появился функционал, проверяем лог на ошибки.</li>
							</ol>
							<p class="alert alert-danger alert-dismissible">В архиве находится SQL файл. Если преффикс базы данных у Вас отличается от стандартного <strong>«oc_»</strong>, то перед установкой извлеките файл <strong>«install.sql»</strong> и через тексторый редактор замените преффикс <strong>«oc_»</strong> на свой, после чего загрузите файл обратно в архив.</p>
							<br>
							<hr>
							<h3>Шаг 2</h3>
							<p>Выберите нужный модификатор из папки <strong>«Step-2 - Store Front»</strong> и выполните следующие действия:</p>
							<ol>
								<li>В админке перейдите <strong class="blue">«Модули > Установка расширений»</strong> и установите файл <strong class="red">«ReplyToReviews_StoreFront_*.ocmod.zip»</strong> для вашего шаблона;</li>
								<li>Получаем сообщение об успешной установке и идем в <strong class="blue">«Модули > Модификаторы»</strong> и кликаем по кнопке <strong class="blue">«Обновить»</strong> в правом верхнем углу <a href="/images/rtr/admin_mod_ru.jpg">См. пример</a>;</li>
								<li>Возникли проблемы / ошибки, проверяем лог на ошибки.</li>
							</ol>
						</article>
					</section>
					<section class="tab-pane" id="update">
						<article class="description">
							<h2>Обновление с версии v2 до v3</h2>
							<p>Для обновления версии модификатора выполните следующие шаги:</p>
							<br>
							<hr>							
							<h3>Шаг 1</h3>
							<ol>	
								<li>В админке перейдите <strong class="blue">«Модули > Модификаторы»</strong> и удалите модификатор 2 версии;</li>
								<li>В папке <strong>«Update»</strong> найдете файл <strong class="red">«update.sql»</strong>;
									<p class="alert alert-danger alert-dismissible">Если преффикс базы данных у Вас отличается от стандартного <strong>«oc_»</strong>, то перед выполнением запроса, замените преффикс на свой, после чего выполните запрос.</p>
								</li>
								<li>Выполните запрос который находится файле в <strong>«PhpMyAdmin»</strong>;</li>
								<li>Проверьте что в таблице <strong>«oc_review»</strong> появилось поле <strong>«Email»</strong>;</li>
								<li>Из архива <strong class="red">«ReplyToReviews_AdminPanel.ocmod.zip»</strong> удалите файл <strong class="red">«install.sql»</strong>.</li>
							</ol>
							<br>
							<hr>				
							<h3>Шаг 2</h3>
							<ol>						
								<li>В админке перейдите <strong class="blue">«Модули > Установка расширений»</strong> и установите файл <strong class="red">«ReplyToReviews_AdminPanel.ocmod.zip»</strong>;</li>
								<li>Получаем сообщение об успешной установке и идем в <strong class="blue">«Модули > Модификаторы»</strong> и кликаем по кнопке <strong class="blue">«Обновить»</strong> в правом верхнем углу <a href="/images/rtr/admin_mod_ru.jpg">См. пример</a>;</li>
								<li>Если не появился функционал, проверяем лог на ошибки.</li>
							</ol>
							<br>
							<hr>
							<h3>Шаг 3</h3>
							<p>Выберите нужный модификатор для вашего шаблона <strong>«Step-2 - Store Front»</strong> и выполните следующие действия:</p>
							<ol>
								<li>В админке перейдите <strong class="blue">«Модули > Установка расширений»</strong> и установите файл <strong class="red">«ReplyToReviews_StoreFront_*.ocmod.zip»</strong>;</li>
								<li>Получаем сообщение об успешной установке и идем в <strong class="blue">«Модули > Модификаторы»</strong> и кликаем по кнопке <strong class="blue">«Обновить»</strong> в правом верхнем углу <a href="/images/rtr/admin_mod_ru.jpg">См. пример</a>;</li>
								<li>Возникли проблемы / ошибки, проверяем лог на ошибки.</li>
							</ol>
						</article>
					</section>
					<section class="tab-pane" id="setting">
						<article class="description">
							<h2>Настройки</h2>
							<p>Для каждого описания категорий, есть свои настройки, чтоб их настроить перейдите:
							<strong class="blue">«Каталог > Категории > Ваша созданная категория»</strong> внутри перейдите во вкладку <strong class="blue">«Дизайн»</strong>, там найдете настройки:</p>
							<ul>
								<li><strong>Разделитель текста «Развернуть / Свернуть»</strong> - Включение / выключение разделителя;</li>
								<li><strong>Высота видимой части текста</strong> - Высота блока видимого описания. Значение указывается в пикселях;</li>
								<li><strong>Скрывать описание со 2+ страниц</strong> - Показывает описание только на первой странице категории;</li>
								<li><strong>Кнопка «Показать описание»</strong> - Для телефонов и планшетов допольнительное описание скрывается полностью и показывается только кнопка <strong class="blue">«Показать описание»</strong></li>
							</ul>
							<div class="box-img"><img src="/images/rtr/settings_admin_ru.jpg"></div>
						</article>
					</section>
					<section class="tab-pane" id="design">
						<article class="description">
							<h2>Внешний вид</h2>
							<p>Если стандартный стили не вписываются в ваш дизайн сайта, вы можете подправить CSS стили в файле <strong class="blue">«reply_reviews.css»</strong>, который находится:<p>
							<p class="alert alert-info">catalog \ view \ stylesheet \ reply_reviews.css</p>
						</article>
					</section>
					<section class="tab-pane" id="language">
						<article class="description">
							<h2>Локализация</h2>
							<p>Модификатор имеет полную поддержку нескольких языков. По умолчанию устанавливается английский, украинский и русский язык.<br>Ниже вы найдете инструкцию, как добавить и перевести модификатор на свой язык.</p>
							<p class="alert alert-warning alert-dismissible">В зависимости от версии OpenCart папка может называться «russian» или «ru-ru»</p>
							<br>
							<hr>
							<h3>Админ-панель:</h3> 
							<ul>
								<li>Скопируйте файл <strong class="red">«reply_reviews.php»</strong> из папки:<p class="alert alert-info">admin \ language \ russian \ catalog \ reply_reviews.php</p>
								</li>
								<li>Вставьте в папку и после чего переведите содержимое файла:
								<p class="alert alert-info">admin \ language \ ВАШ_ЯЗЫК \ catalog \ reply_reviews.php</p></li>
							</ul>
							<br>
							<hr>
							<h3>Витрина:</h3> 
							<ul>
								<li>Скопируйте файл <strong class="red">«reply_reviews.php»</strong> из папки: <p class="alert alert-info">catalog \ language \ russian \ product \ reply_reviews.php</p></li>
								<li>Вставьте в папку и после чего переведите содержимое файла:<p class="alert alert-info">catalog \ language \ ВАШ_ЯЗЫК \ product \ reply_reviews.php</p></li>
							</ul>
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
								<!--
								<li>
									<div class="block">
										<div class="tags">
											<p class="tag yellow"><span>Ожидается</span></p>
										</div>
										<div class="block_content">
											<h5 class="title pre-release">
												<strong>v4.0.1</strong>
											</h5>
											<ul class="excerpt">
												<li>Поддержка шаблона XDS Coloring Theme</li>							
												<li>Поддержка шаблона Journal Theme</li>							
											</ul>
										</div>
									</div>
								</li>
								-->
								<li>
									<div class="block">
										<div class="tags">
											<h5 class="title release">
												<span class="version">v3.0</span><span class="date">01.08.2017</span>
											</h5>
											<p class="tag"><span>Последний релиз</span></p>
										</div>
										<div class="block_content">
											<ul class="excerpt">
												<li>Оптимизирован код для работы на сборках Opencart / Opencart.pro / ocStore;</li>
												<li>Работает с версии 2.0.1.0 и выше;</li>
												<li>Модификатор разделен на AdminPanel и StoreFront;</li>
												<li>Языковая локализация вынесена в отдельный файл;</li>				
												<li>Уведомление клиента об ответе по почте;</li>
												<li>Включение/отключение модерации отзывов;</li>
												<li>WYSIWYG-редактор для редактирование отзывов;</li>
												<li>Поддержка шаблона Journal Theme v2.7.6 - v2.9.5</li>
											</ul>
										</div>
									</div>
								</li>								
								<li>
									<div class="block">
										<div class="tags">
											<h5 class="title">
												<span class="version">v2.1</span><span class="date">27.08.2016</span>
											</h5>
										</div>
										<div class="block_content">
											<ul class="excerpt">
												<li>Исправлены мелкие ошибки.</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="block">
										<div class="tags">
											<h5 class="title">
												<span class="version">v2.0</span><span class="date">03.08.2016</span>
											</h5>
										</div>
										<div class="block_content">
											<ul class="excerpt">
												<li>Добавлен Украинский язык;</li>
												<li>Добавлена возможность менять дату отзыва;</li>
												<li>Облегчена установка модификатора;</li>
												<li>Заменена надпись "Ответ администатора".</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="block">
										<div class="tags">
											<h5 class="title">
												<span class="version">v1.0</span><span class="date">09.08.2015</span>
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
							<div class="formArea">
								<form id="thirdForm" class="form" autocomplete="off">
									<p class="formTitle"></p>
									<p class="msgs"></p>
									<fieldset class="form-fieldset ui-input __first">
										<input name="uname" type="text" id="username" tabindex="0"/>
										<label for="username">
											<span data-text="Введите ваше имя:">Введите ваше имя:</span>
										</label>
									</fieldset>
									<fieldset class="form-fieldset ui-input __second">
										<input name="uemail" type="email" id="email" tabindex="0" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,5}$"/>
										<label for="email">
											<span data-text="Введите ваш E-mail:">Введите ваш E-mail:</span>
										</label>
									</fieldset>
									<fieldset class="form-fieldset ui-input __third">
										<input name="uorder" type="text" id="userorder" tabindex="0"/>
										<label for="userorder">
											<span data-text="Введите № заказа:">Введите № заказа:</span>
										</label>
									</fieldset>
									<fieldset class="form-fieldset ui-input __fourth">
										<input name="usubject" type="text" id="usersubject" tabindex="0"/>
										<label for="usersubject">
											<span data-text="Введите тему:">Введите тему:</span>
										</label>
									</fieldset>
									<fieldset class="form-fieldset ui-input __five">
										<textarea type="text" name="utext" class="form-control" id="usertext" ></textarea>
										<label for="usertext">
											<span data-text="Введите Ваш сообщение:">Введите Ваш сообщение:</span>
										</label>
									</fieldset>
									<input name="formInfo" class="formInfo" type="hidden" value=""/>
									<div class="form-footer">
										<input type="submit" class="formBtn" value="Отправить заявку" />
									</div>
								</form>
							</div>
							<noindex>
								<div class="info-url">
									<h4 class="">Дополнительные контакты</h4>
									<p>Также Вы можете отправить свое сообщение нам на почту или оставить свое сообщение в соц.сети.</p>
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
<script src="/assets/js/form_ru.js"></script>
<script src="/assets/js/stickUp.min.js"></script>
<script src="/assets/js/script.js"></script>
</body>
</html>