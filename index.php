<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RBG | main</title>
	<link rel="shortcut icon" href="img/knopochka.svg" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/fontstyle.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/media.css">
</head>
<body>
	<?php require_once ('html/navigation_DEV.html') ?>  
	<?php require_once ('html/header.html') ?>

	<div class="mainblock_bg" style="background-image: url(img/main.png); height: 784px;"></div>
	<div class="container mainblock" style="height: 0">
		<div class="h1 font-white tac">Найти недвижимость сейчас</div>
		<div class="mainpicker d-flex adaptation_block">
			<select>
				<option class="d-none">Новостройка</option>
				<option>Пункт</option>
				<option>Пункт</option>
				<option>Пункт</option>
			</select>
			<select>
				<option class="d-none">Квартира</option>
				<option>Пункт</option>
				<option>Пункт</option>
				<option>Пункт</option>
			</select>
			<select>
				<option class="d-none">Комнат</option>
				<option>Пункт</option>
				<option>Пункт</option>
				<option>Пункт</option>
			</select>
			<span class="inpprice d-flex aic">				
				<input type="text" placeholder="Цена от">
				<span class="mr-2">|</span>				
				<input class="inp2" type="text" placeholder="до">
				<span>₽</span>
			</span>
			<select class="saint">
				<option class="d-none">Санкт-Петербург</option>
				<option>Пункт</option>
				<option>Пункт</option>
				<option>Пункт</option>
			</select>
			<select>
				<option class="d-none">Метро</option>
				<option>Пункт</option>
				<option>Пункт</option>
				<option>Пункт</option>
			</select>
		</div>
		<div class="underpickercon d-flex jcsb adaptation_none">
			<div>
				<div class="d-flex">
					<img src="img/knopochka.svg" />
					<div class="aic">
						<span class="h4 font-white">Продадим вашу недвижимость за 30 дней</span><br>
						<span class="click">кликай и заказывай</span>
					</div>
				</div>
			</div>
			<div class="d-flex aic">
				<span class="font-white onmap">На карте</span>
				<span class="font-white btn">Найти</span>
			</div>
		</div>
		<div class="underpickercon_a adaptation_block">
			<div class="btn font-white">Найти</div>
			<div class="d-flex aic m0auto">
				<img src="img/mappin.svg" />
				<div class="h9 font-white">На карте</div>
			</div>
			<div class="d-flex sel m0auto">
				<img src="img/knopochka.svg" />
				<div class="text font-white">
					<div class="h9 fw500">Продадим вашу недвижимость за 30 дней</div>
					<div class="h9 fw300">кликай и заказывай</div>
				</div>
			</div>
		</div>
	</div>
	<div class="mainslider container">
		<div class="h3 font-dark333 tac whywe">Почему мы?</div>
		<div class="slider">
			<div><img src="img/slider/1.png" /></div>
			<div><img src="img/slider/2.png" /></div>
			<div><img src="img/slider/3.png" /></div>
			<div><img src="img/slider/4.png" /></div>
			<div><img src="img/slider/5.png" /></div>
			<div><img src="img/slider/6.png" /></div>
			<div><img src="img/slider/7.png" /></div>
			<div><img src="img/slider/8.png" /></div>
			<div><img src="img/slider/9.png" /></div>
		</div>
	</div>	
	<div class="goodlinks">
		<div class="container">
			<div class="h3 font-dark333 tac whywe">Полезные ссылки</div>
			<div class="row treaplelink ">
				<div class="col d-flex jcsb">					
					<div class="linktext">						
						<div class="h4">Новостройки</div>						
						<a href="#">Сданные ЖК</a><br>
						<a href="#">Строящиеся ЖК</a><br>
						<a href="#">Новостройки в Москве</a><br>
						<a href="#">Новостройки в МО</a><br>
						<div class="btn">Акции</div>
					</div>
					<img src="img/main/baner1.png " />
				</div>
				<div class="col centercol">
					<div class="linktext">
						<div class="h4">Вторичное жилье</div>
						<a href="#">Однокомнатные</a><br>
						<a href="#">Двухкомнатные</a><br>
						<a href="#">Трехкомнатные</a><br>
						<a href="#">Комнаты и доли в квартире</a><br>
						<div class="btn">Найти</div>
						<div class="btn">Обменять</div>
					</div>
				</div>
				<div class="col d-flex jcsb linktext2_a">
					<div class="linktext">
						<div class="h4">Коммерческая</div>
						<a href="#">Продажа ПСН</a><br>
						<a href="#">Продажа офисов</a><br>
						<a href="#">Помещения в ЖК</a><br>
						<a href="#">Продажа торговых <br />помещений</a><br />						
					</div>
					<img src="img/main/baner2.png" />
				</div>
			</div>
			
			<div class="treaplelink_bigfirst">
				<div class="row">
					<div class="col-5 d-flex jcsb">
						<div class="linktext fix_a_pading">
							<div class="h4">Услуги компании</div>							
							<a href="#">Продажа квартиры</a><br>
							<a href="#">Оценка недвижимости</a><br>
							<a href="#">Сопровождение сделок</a><br>
							<a href="#">Расселение комунальных квартир</a><br>
							<div class="btn">Заказать звонок</div>
						</div>
						<div class="linktext fixinbig">							
							<a href="#">Юридические услуги</a><br>
							<a href="#">Помощь в получении ипотеки</a><br>
							<a href="#">Региональные сделки</a>
						</div>
					</div>
					<div class="col-4 d-flex jcsb">
						<div class="linktext">
							<div class="h4 font-blue" style="font-weight: 500">Ипотека online</div>
							<div class="h4 font-blue">от 4.5%</div>
							<div class="btn_blue">Оформить</div>
						</div>
						<img src="img/main/baner3.png" />
					</div>
					<div class="col-3">
						<div class="h3 tac">Поиск на карте</div>
						<div class="h5 tac">Прямо на карте можете найти<br> недвижимость вблизи от работы</div>
						<div class="btn_searchonmap tac">Найти на карте</div>
					</div>
				</div>
			</div>
			<div class="longpaners">
				<div class="row adaptation_block">
					<div class="col longpaners_1">
						<div class="h4 font-white">Продадим вашу недвижимость <span>за 30 дней</span></div>
						<div class="h6 font-white">В короткое время продадим ваш объект недвижимости, это может<br> быть квартира, офис, склад, новостройки, вторичное жилье</div>
						<img src="img/main/click 1.png" />
					</div>
					<div class="col longpaners_2">
						<div class="h4 font-white">RBG-ремонт</div>
						<div class="h6 font-white">У нас собственные бригады профессиональных мастеров,<br />мы принципиально не работаем с субподрядчиками</div>
						<img src="img/main/click 2.png" />
					</div>
				</div>
			</div>
			<div class="bestoffer_title">
				<div class="h4 tac">Лучшие предложения</div>
				<div class="bestoffer_picker d-flex jcsb">
					<div class="active_offerpicker">Новостройки</div>
					<div>Вторичное жилье</div>
					<div>Коммерчиская недвижимость</div>
					<div>Переуступки</div>
				</div>
			</div>
			<div class="offersgrid row">
				<div class="col"><?php require ('html/offer_grid.html') ?></div>
				<div class="col"><?php require ('html/offer_grid.html') ?></div>
				<div class="col"><?php require ('html/freetour.html') ?></div>
				<div class="col"><?php require ('html/offer_grid.html') ?></div>
			</div>
			<div class="offersgrid row" style="margin-top: 31px">
				<div class="col"><?php require ('html/offer_grid.html') ?></div>
				<div class="col"><?php require ('html/offer_grid.html') ?></div>
				<div class="col"><?php require ('html/offer_grid.html') ?></div>
				<div class="col"><?php require ('html/offer_grid.html') ?></div>
			</div>
			
			<img class="offerbaner" src="img/main/aner1.png" />
			
			<div class="offersgrid row">
				<div class="col"><?php require ('html/offer_grid.html') ?></div>
				<div class="col"><?php require ('html/offer_grid.html') ?></div>
				<div class="col"><?php require ('html/offer_grid.html') ?></div>
				<div class="col"><?php require ('html/offer_grid.html') ?></div>
			</div>
			<div class="offersgrid row" style="margin-top: 31px">
				<div class="col"><?php require ('html/offer_grid.html') ?></div>
				<div class="col"><?php require ('html/offer_grid.html') ?></div>
				<div class="col"><?php require ('html/freetour.html') ?></div>
				<div class="col"><?php require ('html/offer_grid.html') ?></div>
			</div>
		</div>
	</div>

	<div class="sellyours">
		<div class="container">
			<div class="h4 font-white">Продадим вашу недвижимость</div>
			<div class="days font-white">за 30 дней</div>
			<div class="btn">Оставить заявку</div>
		</div>
	</div>
	<div class="whiweblock" style="margin-bottom: 97px">
		<div class="container">
			<div class="tac">
				<div class="h4 fw500">ПОЧЕМУ ИМЕННО</div>
				<div class="h4 fw300">АГЕНТСТВО НЕДВИЖИМОСТИ <span class="font-blue h4 fw300">«RBG»</span></div>
			</div>
			<div class="row whiweblocks">
				<div class="col-4 d-flex">
					<img src="img/main/num/01.png" />
					<div class="ml53px">
						<div class="title">Официальный риэлтор</div>
						<div class="text">Официальный представитель <br />гильдии риэлторов</div>
					</div>
				</div>
				<div class="col-4 d-flex">
					<img src="img/main/num/03.png" />
					<div class="ml53px">
						<div class="title">Более 3-х тысяч</div>
						<div class="text">Продано объектов недвижимости <br />за все время</div>
					</div>
				</div>
				<div class="col-4 d-flex">
					<img src="img/main/num/05.png" />
					<div class="ml53px">
						<div class="title">Официиальный парнер застройщиков</div>
						<div class="text">С нами работают лидеры<br /> застройки в 2-х регионах</div>
					</div>
				</div>

				<div class="col-4 d-flex mt-5">
					<img src="img/main/num/02.png" />
					<div class="ml53px">
						<div class="title">Прямой партнер банков</div>
						<div class="text">С нами работают лидеры в<br /> баковской сфере </div>
					</div>
				</div>
				<div class="col-4 d-flex mt-5">
					<img src="img/main/num/04.png" />
					<div class="ml53px">
						<div class="title">7 лет на рынке</div>
						<div class="text">Уверено держимся на<br /> рынке недвижимости </div>
					</div>
				</div>
				<div class="col-4 d-flex mt-5">
					<img src="img/main/num/06.png" />
					<div class="ml53px">
						<div class="title">Работаем в больших регионах</div>
						<div class="text">Присутствия в двух регионах<br /> Москва и Санкт-Петербург</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="general">
		<div class="container">
			<div class="row adaptation_block">
				<div class="col-4">
					<div class="genimage"><img src="img/main/general.png" /></div>
					<div class="border tac">
						<div class="h8 font-white fw600">Кущева Марина Николаевна</div>
						<span class="h8 font-white">Генеральный директор</span>
					</div>
				</div>
				<div class="col-8">
					<div class="h4 fw500">Агентство недвижимости Realty Broker Group</div>
					<p>Специализируется на продаже и покупке недвижимости в Санкт-Петербурге и Ленинградской области.</p>
					<p>На сегодня Мы являемся универсальной компанией, которая оказывает услуги по сделкам с различными видами жилых и коммерческих объектов в Санкт-Петербурге и Ленинградской области.</p><img class="bgrbg adaptation_none" src="img/main/RBG.png" />
					<p>У нас Богатый опыт работы на рынке жилья Санкт-Петербурга и Ленинградской области, высокий профессионализм и безупречная репутация специалистов, все операции с недвижимостью производятся в полном соответствии с Российским законодательством.</p>
					<div class="btn font-white">Подробнее</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main_patners adaptation_none">
		<div class="container">
			<div class="h4 tac">Партнеры</div>
			<div class="d-flex">
				<a href="#"><img src="img/main/partners/norman.png" /></a>
				<a href="#"><img src="img/main/partners/cds.png" /></a>
				<a href="#"><img src="img/main/partners/pioner.png" /></a>
				<a href="#"><img src="img/main/partners/smu.png" /></a>
				<a href="#"><img src="img/main/partners/gazban.png" /></a>
			</div>
		</div>
	</div>
	<div class="main_patners_a adaptation_block">
		<div class="h4 tac fw500">Партнеры</div>
		<div class="main_patners_slider adaptation_flex aic">
			<a href="#"><img src="img/main/partners/norman.png" /></a>
			<a href="#"><img src="img/main/partners/cds.png" /></a>
			<a href="#"><img src="img/main/partners/pioner.png" /></a>
			<a href="#"><img src="img/main/partners/smu.png" /></a>
			<a href="#"><img src="img/main/partners/gazban.png" /></a>
		</div>
	</div>

	<div class="news_main adaptation_none">
		<div class="container">
			<div class="d-flex jcsb newsmtmb">
				<div class="h4">Новости</div>
				<a href="#" class="h5 font-blue">Все новости</a>
			</div>
			<div class="row">
				<div class="col-3"><?php require('html/newsitem.html') ?></div>
				<div class="col-3"><?php require('html/newsitem.html') ?></div>
				<div class="col-3"><?php require('html/newsitem.html') ?></div>
				<div class="col-3"><?php require('html/newsitem.html') ?></div>
			</div>
		</div>
	</div>
	<div class="news_main_a adaptation_block">
		<div class="news_main_slider">
			<div class=""><?php require('html/newsitem.html') ?></div>
			<div class=""><?php require('html/newsitem.html') ?></div>
			<div class=""><?php require('html/newsitem.html') ?></div>
			<div class=""><?php require('html/newsitem.html') ?></div>
			<div class=""><?php require('html/newsitem.html') ?></div>
			<div class=""><?php require('html/newsitem.html') ?></div>
		</div>
	</div>

	<div class="markdown">
		<div class="container d-flex jcsb">
			<div class="getmd font-white">
				<div class="h4 fw500">Получить скидку 5% на покупку квартиры</div>
				<div class="h4 fw300">Подберем квартиру в проведем полностью сделку, предоставим скидку и выпьем шампанское</div>
				<div class="btn font-white">Получить скидку</div>
			</div>
			<div class="sofa adaptation_none">
				<img src="img/main/sofa.png" />
			</div>
		</div>
	</div>

	<?php require_once ('html/footer.html') ?>	

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<script type="text/javascript" src="slick/slick.min.js"></script>
	<script src="js/libs.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>