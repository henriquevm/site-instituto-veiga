<footer id="rodape">
		<div class="container">
			<div class="row">
				<div class="col-md-5 footerMargin">
					<div class="row">
						<a href="index.php"><img src="img/logoSVG.svg" class="img-responsive logo-rodape"><br></a>
					</div>
				</div>
				<div class="col-md-2">
					<ul class="menu-rodape">
						<a href="index.php"><li>Home</li></a>
						<a href="quiropraxia.php"><li>Quiropraxia</li></a>
						<a href="acupuntura.php"><li>Acupuntura</li></a>
						<a href="localizacao.php"><li>Localização</li></a>
						<a href="contato.php"><li>Contato</li></a>
					</ul>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-12 footerMargin">
							<div class="texto-header">
								<span><i class="fas fa-clock"></i>&nbsp;Segunda a Quinta das 9:00 às 18:00<br />&emsp;Sexta das 9:00 às 16:00</span>
								<span><i class="fas fa-phone-square"></i>&nbsp;&nbsp;(35) 998307037</span>
								<span><i class="fas fa-location-arrow"></i>&nbsp;&nbsp;Rua Padre Zeferino, 230 - Centro</span>
								<span><i class="fas fa-map-marker"></i>&nbsp;&nbsp;Bueno Brandão - MG</span>
							</div>
						</div>
					</div>
				<!-- <div class="row">
						<div class="col-md-12">
							<div class="box-facebook">
								<div class="fb-page" data-href="https://www.facebook.com/Instituto-Veiga-955888764518528/" data-tabs="timeline" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
									<blockquote cite="https://www.facebook.com/Instituto-Veiga-955888764518528/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Instituto-Veiga-955888764518528/">Instituto Veiga</a></blockquote>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</footer>

	<section id="direitos">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="texto-direitos">
					Copyright © 2021 Instituto Veiga - Todos os direitos reservados.<br>
					Desenvolvido por engesite@gmail.com
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
		if($pagina == "localizacao" || $pagina == "contato"){
			echo '<!-- Script para carregamento do google maps -->
				  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsxWkfBontY01F57ihN-3kT7WRubWYfts&callback=initMap">
				  </script>';
		}
	?>

	<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!--<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

	<!-- Custom JS -->
    <script src="js/custom.js"></script>

	<!-- Slick JS -->
	<script type="text/javascript" src="js/slick.min.js"></script>

	<?php
		$pagina = basename($_SERVER['PHP_SELF'],'.php');
		if($pagina == "index"){
			echo '<!-- Slick JS -->
			<script type="text/javascript" src="js/home.js"></script>';
		}
	?>

</body>
</html>
