<?php 
	include_once("inc/header.php");
?>

<section id="conteudo">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="titulo-texto titulo-localizacao">
					Localização
				</div>
				<div class="subtitulo-texto subtitulo-localizacao">
					Rua Padre Zeferino, 230 - Centro - Bueno Brandão - MG
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<img src="img/localizacao/img1.png" alt="Foto do local" class="img-responsive img-mapa">
			</div>
			<div class="col-md-6">
				<div id="map"></div>
				<script>
			      function initMap() {
			        var uluru = {lat: -22.4422158, lng: -46.350088};
			        var map = new google.maps.Map(document.getElementById('map'), {
			          zoom: 17,
			          center: uluru
			        });
			        var marker = new google.maps.Marker({
			          position: uluru,
			          map: map
			        });
			      }
			    </script>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="texto">
					<div class="subtitulo-texto">Instituto Veiga</div>
					<p class="recuo">O instituto Veiga possui um ambiente calmo e tranquilo, com salas individuais. Onde na primeira sessão é realizado uma avaliação com o paciente e oferecido o tratamento que lhe for mais apropriado. Não havendo restrição é realizado em uma mesma sessão os procedimentos de quiropraxia e acupuntura não focamos apenas no alívio dos sintomas, mas tratando a causa da dor restaurando a função da coluna devolvendo ao corpo alinhamento e saúde.</p><br>
					<div class="subtitulo-texto">Aproveite para conhecer Bueno Brandão</div>
				</div>	
				<img src="img/localizacao/img2.png" alt="História da Acupuntura" class="img-fullscreen img-responsive">
				<div class="texto" style="margin: 20px; 0;">
					<p class="recuo">Num cantinho das Minas Gerais, nas cristas da Mantiqueira, encontra-se um pedaço do paraíso. Clima ameno na maior parte do ano, fontes de águas cristalinas, cachoeiras inesquecíveis e uma população, que no seu jeito interiorano de ser, torna-se extremamente receptiva. Esta é Bueno Brandão. <a target="_blank" href="http://www.buenobrandaoroteiros.com.br/">Mais informações sobre Bueno Brandão</a></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<img src="img/localizacao/img3.png" style="margin-bottom:20px;" alt="Cachoeira 1" class="img-responsive">
			</div>
			<div class="col-md-6">
				<img src="img/localizacao/img4.png" alt="Cachoeira 2" class="img-responsive">
			</div>
		</div>
	</div>
	
	
</section>

<?php 
	include_once("inc/footer.php");
?>