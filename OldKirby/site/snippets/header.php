<!DOCTYPE html>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic|Montserrat' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
		<title>Arsalan Bashir &bull; Learner</title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="//use.typekit.net/gjh2vhe.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="/assets/styles/reset.css">
		<link rel="stylesheet" type="text/css" href="/assets/styles/style.css">
		<link rel="stylesheet" type="text/css" href="/assets/styles/ionicons.css">
					<!-- custom css -->
		<?php foreach($page->files()->findByExtension('css') as $css): ?>
		<?php echo css($css->url()) ?>
		<?php endforeach ?>

		<!-- custom javascript -->
		<?php foreach($page->files()->findByExtension('js') as $js): ?>
		<?php echo js($js->url()) ?>
		<?php endforeach ?>
		
	</head>
	<body>
	
			<center>
				<div id="top" class="top">
				<h1><a href="">ARSALAN BASHIR</a></h1>
				<h2 id="tagline">learner and technology enthusiast</h2>
				<ul id="menu">
					<li class="home"><a href="#">home</a></li>
					<li class="blog"><a href="#">blog</a></li>
					<li class="work"><a href="#">work</a></li>
					</ul>
				<script>
					$("#top").hover(function(){
				    $("#menu").show();
				    $("#tagline").hide();
						},function(){
			  		 $("#menu").hide();
			  		 $("#tagline").show();
						});			
				</script>
				</div>

	