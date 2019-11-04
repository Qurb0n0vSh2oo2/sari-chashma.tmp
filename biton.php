<?php
//include_once('config.php');
	
	// function getLastNews()
	// {
		// $sql = "SELECT * FROM news LIMIT 3";
		// $res = mysql_query($sql);
		
		// while($row = mysql_fetch_object($res))
			// $news[] = $row;
			
		// return $news;
	// }
	if (isset($_POST['submit']))
	{
		$text = $_POST['text'];
		$email = $_POST['email'];
		$name = $_POST['name'];
		
		$to      =  "sari.chashma@gmail.com";
		$subject = 'Сообщение от '.$name;
		$message = $text;
		
		$headers = 'From:'. $email. "'" . "\r\n" .
			'Content-type: text/html; charset=windows-1251' . "\r\n";

		mail($to, $subject, $message, $headers);
	}
	
	// $news = getLastNews();
	// for($i = 0; $i < count($news); $i++)
	// {
		// $a = $news[$i]->news;
		
		// $intro[] = substr($a, 0, 200);
	// }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<!-- This template was created by Mantis-a [http://www.mantisa.cz/]. For more templates visit Free website templates [http://www.mantisatemplates.com/]. -->

<meta name="Description" content="..." />
<meta name="Keywords" content="..." />
<meta name="robots" content="all,follow" />
<meta name="author" content="..." />


<meta http-equiv="Content-Script-Type" content="text/javascript" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!-- CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection, tv" />
<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/style-ie.css" media="screen, projection, tv" /><![endif]-->
<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<title>ООО "Сари-Чашма"</title>
</head>

<body>
	
	<!-- Header -->
	<div id="header">
	
		<!-- Your gallery name  -->
		<h1><a href="index.php">ООО "Сари-Чашма"</a></h1>
		<!-- Your gallery name end -->
		
			<!-- Your slogan -->
			<h2> </h2>
			<!-- Your slogan end -->
		
		<!-- Search form -->	
		<form class="searching" action="">
		<fieldset>
			<label></label>
				<!--<div id="picture-input">
					<input type="text" class="search" onfocus="if(this.value==this.defaultValue)this.value=''" 
					onblur="if(this.value=='')this.value=this.defaultValue" value="Search phrase&hellip;" />
				</div>
				<input class="hledat" type="image" src="img/search-button.gif" name="" alt="Search" />-->
<address>Наши контакты:<br>(+992) 918-55-33-30<Br></address>
		</fieldset>
		<p style="color: #fff;">Язык: <a style="color: white;" href="index.php">Русский</a>&nbsp;|&nbsp;<a style="color: #fff;" href="tj/index.php">Таджикский</a></p>
		</form>
		<!-- Search end -->
		
<a href="#skip-menu" class="hidden">Cкрыть меню</a>
	
		<!-- Menu -->
		<ul id="menu">
			<li><a href="index.php" >Главная страница</a></li>
			<li><a href="about.php" >О нас</a></li>
			<li><a href="gallery.php" >Галерея</a></li>
			<li><a href="products.php" class="active">Наша продукция</a></li>
			<li><a href="contacts.php">Контакты</a></li>
		</ul>
		<!-- Menu end -->
	</div>
	<!-- Header end -->
	
<hr class="noscreen" />

<div id="skip-menu"></div>
	
	<!-- Content box -->
	<div id="content-box">
		<div id="content-box-in">
		
			<!-- Content left -->
			<div id="content-box-in-left">
				<div id="content-box-in-left-in">
					<h3 class="line"><span>Бетонные изделия‎</span></h3>
						
						<!-- My latest work -->
						<div class="galerie">
						
							<div class="object">
								<img src="img/gallery/IMG_2737.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									
										<b>Продукт: Колодезное кольцо КЦ  </b><br>
										<b>Размер: 9 Х 1h Х 1000мм; V=0,3 м3</b><br>
										<b>Цена: 400000 Сомони </b><br> 
										<br>
										<b>Продукт: Колодезное кольцо КЦ </b><br>
										<b>Размер: 14 Х 1h Х 1000мм; V=0,5 м3</b><br>
										<b>Цена: 350 Сомони </b><br>
										<br>
										<b>Продукт: Колодезное кольцо КЦ  </b><br>
										<b>Размер: 9 Х 1h Х 1500мм; V=0,45 м3</b><br>
										<b>Цена: 400 Сомони </b><br><br> 
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">
							
							<div class="object">
								<img src="img/gallery/IMG_2737.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									
										<B>Продукт: Колодезное кольцо + арматура </B><br>
										<b>Размер: КЦ 9 Х 1h Х 1000мм; V=0,3 м3</b><br>
										<b>Цена: 300 сомони </b><br>
										<br>
										<b>Продукт: Колодезное кольцо + арматура </b><br>
										<b>Размер: КЦ 14 Х 1h Х 1000мм; V=0,5 м3</b><br>
										<b>Цена: 400 Сомони </b><br>
										<br>   
										<b>Продукт: Колодезное кольцо + арматура  </b><br>
										<b>Размер: КЦ 9 Х 1h Х 1500мм; V=0,45 м3</b><br>
										<b>Цена: 450 Сомони </b><br><br> 
									</div>
								</div>
							</div>
							
							<hr style="width: 500px">
							
                                                        	<div class="object">
								<img src="img/gallery/IMG_2737.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									
										<B>Продукт: Колодезное кольцо </B><br>
										<b>Размер: КЦ 12 Х 1h Х 2000мм; V=0,8 м3</b><br>
										<b>Цена: 700 сомони </b><br>
										<br>										
									</div>
								</div>
							</div>
							
							<hr style="width: 500px">

							<div class="object">
								<img src="img/gallery/images.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									   
                                                                                <b>Продукт: Крышка колодца КЦП </i><br>
										<b>Размер: 1 Х 10 Х 2; V=0,01 м3</b><br>
										<b>Цена: 300 Сомони</b><br>
										<br>
										<b>Продукт: Крышка колодца КЦП </b><br>
										<b>Размер: 1 Х 15 Х 2; V=0,27 м3</b><br>
										<b>Цена: 400 Сомони</b><br>
                                                                                <br>   
										<b>Продукт: Крышка колодца КЦП </b><br>
										<b>Размер: 1 Х 20 Х 2; V=0,35 м3</b><br>
										<b>Цена: 700 Сомони </b><br><br>    
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">
							
							<div class="object">
								<img src="img/gallery/4.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<br>
										<b>Продукт: Бетонный лоток ЛК </b><br>
										<b>Размер: 2 Х 3; V=0,42 м3</b><br>
										<b>Цена: 400 Сомони</i><br>
										<br>
										<b>Продукт: Бетонный лоток ЛК </b><br>
										<b>Размер: 2 Х 3; V=0,40 м3</b><br>
										<b>Цена: 350 Сомони</i><br>
								</div>
							</div>
							
							<hr style="width: 550px">
							
							<div class="object">
								<img src="img/gallery/IMG_2769.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b>Продукт: Бетонный лоток ЛК </b><br>
										<b>Размер: 3 Х 2,5; V=0,21 м3</b><br>
										<b>Цена:	250 Сомони</b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">
							
							<div class="object">
								<img src="img/gallery/IMG_2773.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b>Продукт: Бетонный лоток ЛК</i><br>
										<b>Размер: 0,16 Х 0,26 Х 1; V=0,03 м3</b><br>
										<b>Цена: 50 Сомони</b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">
							
							<div class="object">
								<img src="img/gallery/image-2df.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b>Продукт: Бетонный лоток ЛК </b><br>
										<b>Размер: 0,16 Х 0,26 Х 2; V=0,06 м3</b><br>
										<b>Цена: 100 Сомони</b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">
							
							<div class="object">
								<img src="img/gallery/IMG_2673.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b>Продукт: Шпалер  </b><br>
										<b>Размер: ВС-1; V=0,026 м3</b><br>
										<b>Цена: 50 Сомони</b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/16.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b>Продукт: Цементные блоки  </b><br>
										<b>Размер: 20см Х 40см</b><br>
										<b>Цена: 2.40 Сомони; 2.50 Сомони</b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">
							
						</div>
						<!-- My latest work end -->	
					
				</div>
			</div>
			<!-- Content left end -->
				
			<!-- Content right -->
			<div id="content-box-in-right">
				<div id="content-box-in-right-in">
					
					<h3>Обратная связь</h3>
						<form action="" method="post">
							<fieldset>
								<label>Ваше имя</label>
								<input type="text" name="name"/><br />
								<label>E-mail</label>
								<input type="text" value="@" name="email"/><br />
								<label>Текст сообщения</label>
								<textarea cols="25" rows="7" name="text"></textarea><br />
								<input class="send-button" type="submit" value="Отправить" name="submit"/>
							</fieldset>
						</form>
				</div>
			</div>
			<!-- Content right end -->
			<div class="cleaner">&nbsp;</div>
		</div>
	</div>
	<!-- Content box end -->

<hr class="noscreen" />
	
	<!-- Footer -->	
	<div id="footer">
		<div id="footer-in">
			<p class="footer-left">&copy; <a href="index.php">ООО "Сари-Чашма"</a>, 2015.</p>
		</div>
	</div>
	<!-- Footer end -->
	
</body>
</html>
