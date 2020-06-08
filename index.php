<?php
	require_once "bd/connection.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>05ru</title>
<!-- 	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script> -->
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
	<script src="jq.min.js"></script>
</head>
<body>

<div class="header">
	<div class="header-list flex">
		<ul class="flex">
			<li><a href="">Махачкала</a></li>
			<li><a href="">Каталог</a></li>
			<li><a href="">Новости</a></li>
			<li><a href="">Доставка и оплата</a></li>
			<li><a href="">Возврат товара</a></li>
			<li><a href="">Бонусы</a></li>
			<li><a href="">Акции</a></li>
		</ul>
		<ul class="header-personal flex">
			<li><a href="" class="personal-name">Магомедов Заур</a></li>
			<li><a href="">Выход</a></li>
		</ul>
	</div>
	<div class="header-search flex">
		<img src="img/logo.svg" alt="">
		<div class="header-popup_menu flex">
			<div class="hamburger" id="hamburger-1">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
	        </div>
			<p>Каталог товаров</p>
		</div>
		<div class="header-form">
			<form action="result" method="get" class="search-form flex">
				<label for="search" class="label-search">
					<input type="text" class="inputFocus" placeholder="Быстрый поиск" name="search" id="search">
				</label>
				<label>
					<select name="category" id="cat">
						<option value="1">Все категории</option>
						<option value="2">Тест1</option>
						<option value="3">Тест2</option>
						<option value="4">Тест3</option>
						<option value="5">Тест4</option>
					</select>
				</label>
				<button class="search-button">
					<img src="img/search.svg" alt="">
				</button>
			</form>
			<div class="result-search flex">
					
			</div>
		</div>
		<div class="header-phone flex-direction">
			<a href="tel:8 (800) 511-05-05" class="header-tel">8 (800) 511-05-05</a>
			<a href="">Заказать обратный звонок</a>
		</div>
		<div class="header-icons flex">
			<a href=""><img src="img/heart.svg" alt="" class="icon-heart"></a>
			<a href=""><img src="img/filter.svg" alt="" class="icon-filter"></a>
			<a href=""><img src="img/basket.svg" alt="" class="icon-basket"></a>
		</div>
	</div>
</div>

<div class="main-content">
	<div class="main-content_timer flex">
		<div class="content_timer-title">
			<h1>
				Поймай свою<br>скидку!
			</h1>
			<p>Новые скидки и подарки<br>каждые два дня.</p>
		</div>
		<div class="content_timer-timer flex">
			<div class="timer_hours flex">
				<span></span>
				<p>часов</p>
			</div>
			<div class="timer_minutes flex">
				<span></span>
				<p>минут</p>
			</div>
			<div class="timer_second flex">
				<span></span>
				<p>секунд</p>
			</div>
		</div>
	</div>
	<div class="main-content_catalog">
		<div class="content_catalog-date">
			<h2>16 декабря</h2>
		</div>
			<form action="" method="post" class="content_catalog">
	    		<?php 
					$tovars = $conn->query('SELECT * FROM tovar');
	    		?>
	    		<div class="content_catalog-items flex">
		    		<?php foreach($tovars->fetchAll() as $tovar){?>
						<div class="content_catalog-item">
							<div>
								<img src='../img/<?php echo $tovar['image'] ?>' alt="">
							</div>
							<div class="guarantee_item">
								<p><?php echo $tovar['guarantee'] ?></p>
							</div>
							<div class="name_item">
								<p><?php echo $tovar['name'] ?></p>
							</div>
							<div class="price-item flex">
								<p><span>Цена онлайн</span><br><?php echo $tovar['price'] ?> &#8381</p>
								<p><span>Цена в магазине</span><br><?php echo $tovar['price'] ?> &#8381</p>
							</div>
							<div class="buttons-item flex">
								<div class="button-basket flex">
									<p class="flex"><img src="../img/basket-butt.svg" alt="">В корзину</p>
								</div>
								<div class="button-click flex">
									<p class="flex"><img src="../img/click.svg" alt="">в 1 клик</p>
								</div>
							</div>
						</div>
		    		<?php } ?>
		    	</div>
		    </form>
		    <div class="main-content_notovar flex">
		    	<p>Не нашли интересующий товар?</p>
		    	<a href="">Посмотреть все акции</a>
		    </div>
	</div>
	<div class="footer flex">
		<div class="footer_links">
			<h1>что будет дальше?</h1>
			<ul>
				<li><a href="">Бытовая техника</a></li>
				<li><a href="">Компьютеры и переферия</a></li>
				<li><a href="">Телефоны и гаджеты</a></li>
			</ul>
			<h2>18 декабря обновление товаров</h2>
		</div>
		<div class="footer_img">
			<img src="img/footer.svg" alt="">
		</div>
	</div>
</div>

	<script src="js/main.js"></script>
</body>
</html>