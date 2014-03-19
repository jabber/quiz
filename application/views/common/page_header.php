<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>

		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="<?php echo $this->config->base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $this->config->base_url();?>assets/css/font-awesome.min.css">
	</head>
	<body>
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="../" class="navbar-brand">QUIZ</a>
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="navbar-main">
					<ul class="nav navbar-nav">
						<!--li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Themes <span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labelledby="themes">
								<li><a href="../default/">Default</a></li>
								<li class="divider"></li>
							</ul>
						</li-->
						<!--li>
							<a href="../help/">Help</a>
						</li-->
						<!--li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Download <span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labelledby="download">
								<li><a href="./bootstrap.min.css">bootstrap.min.css</a></li>
								<li><a href="./bootstrap.css">bootstrap.css</a></li>
								<li class="divider"></li>
								<li><a href="./variables.less">variables.less</a></li>
								<li><a href="./bootswatch.less">bootswatch.less</a></li>
							</ul>
						</li-->
					</ul>

					<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url();?>auth/create_user" >注册</a></li>
					<li><a href="<?php echo base_url();?>auth/login" >登录</a></li>
					</ul>

				</div>
			</div>
		</div>
<?php
