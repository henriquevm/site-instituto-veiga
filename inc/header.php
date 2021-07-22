<?php
	$pagina = basename($_SERVER['PHP_SELF'],'.php');

	if($pagina == "index"){
		$pagina = "home";
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-EL0ZYC8RWC"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-EL0ZYC8RWC');
	</script>

    <!-- Hotjar Tracking Code for http://institutoveiga.com -->
    <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:888747,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Instituto Veiga - De saúde e Bem-estar</title>
    <link rel="icon" href="img/favicon.png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS base de todas as páginas -->
    <link href="css/base.css" rel="stylesheet">
    <!-- CSS da página atual -->
    <link href="css/<?= $pagina ?>.css" rel="stylesheet">

	<!-- Carousel -->
	<link href="css/slick.css" rel="stylesheet">
	<link href="css/slick-theme.css" rel="stylesheet">

	<!-- Glyphicons -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

	<!-- Fontes -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>
	<!-- Javascript SDK Facebook
	<div id="fb-root"></div>-->
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.12&appId=197592364040011&autoLogAppEvents=1';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<!-- Fim do Javascript SDK Facebook -->

	<!-- Seção do Topo -->
	<header id="topo">
		<div class="row">
			<div class="col-md-12">
				<div class="container">
					<div class="row hidden-xs hidden-sm cabecalho">
						<div class="col-md-4 col-sm-6">
							<a href="index.php"><img src="img/logoSVG.svg" alt="Instituto Veiga" class="img-responsive img-logo"></a>
						</div>
						<div class="col-md-4">
							<div class="texto-header vcenter">
								<div class="icone"><div class="icon-header iconeMax" ><i class="fas fa-clock"></i></div>&nbsp;&nbsp;Segunda a Sexta das 8:00 às 18:00</div>
								<div class="icone"><div class="icon-header iconeMax"></div>&nbsp;&nbsp;Sábado das 8:00 às 12:00</div>
								<div class="icone"><div class="icon-header iconeMax"><i class="fas fa-phone-square"></i></div>&nbsp;&nbsp;(35) 998307037</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="texto-header vcenter">
								<div class="icone"><div class="icon-header iconeMax"><i class="fas fa-location-arrow"></i></div>&nbsp;&nbsp;Rua Padre Zeferino, 230 - Centro</div>
								<div class="icone"><div class="icon-header iconeMax"><i class="fas fa-map-marker"></i></div>&nbsp;&nbsp;Bueno Brandão - MG</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row ret-inutil">
			<div class="col-md-12 ret-inutil">
				<nav class="navbar navbar-default menu-principal" data-spy="affix" data-offset-top="150">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed"
									  data-toggle="collapse" data-target="#barra-navegacao">
								<span class="sr-only">alternar navegação</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand hidden-md hidden-lg" href="#">
    							<img alt="Instituto Veiga" class="logo-dispositivo-movel img-responsive" src="img/logo-menu.png">
  							</a>
						</div>

						<div class="collapse navbar-collapse" id="barra-navegacao">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="quiropraxia.php">Quiropraxia</a></li>
								<li><a href="acupuntura.php">Acupuntura</a></li>
								<li><a href="localizacao.php">Localização</a></li>
								<li><a href="contato.php">Contato</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<!-- Fim da seção do Topo -->
