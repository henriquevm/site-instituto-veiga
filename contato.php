<?php 
	include_once("inc/header.php");
?>

<section id="conteudo">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<form class="form-group" method="POST" action="mailer.php">
					<label for="nome">Nome</label>
					<input type="text" id="nome" name="nome" class="form-control">
					<label for="email">Email</label>
					<input type="text" id="email" name="email" class="form-control">
					<label for="assunto">Assunto</label>
					<input type="text" id="assunto" name="assunto" class="form-control">
					<label for="mensagem">Mensagem</label>
					<textarea rows="4" id="mensagem" name="mensagem" class="form-control"></textarea>
					<input type="submit" value="Enviar" class="btn btn-primary">
				</form>
			</div>
			<div class="col-md-7">
				<ul class="lista-contato">
					<li><i class="fas fa-map-marker"></i>&nbsp;&nbsp;&nbsp;Rua Padre Zeferino, 230 - Bueno Brandão - MG</li>
					<li><i class="fas fa-phone"></i>&nbsp;&nbsp;(35) 99830 - 7037</li>
				</ul>
				<div class="col-md-7">
					<img src="img/contato/img1.png" alt="Cliente sendo atendida" class="img-responsive img-contato">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="texto">
					<div class="subtitulo-texto">Instituto Veiga</div>
					<p class="recuo">O instituto Veiga possui um ambiente calmo e tranquilo, com salas individuais. Onde na primeira sessão é realizado uma avaliação com o paciente e oferecido o tratamento que lhe for mais apropriado. Não havendo restrição é realizado em uma mesma sessão os procedimentos de quiropraxia e acupuntura não focamos apenas no alívio dos sintomas, mas tratando a causa da dor restaurando a função da coluna devolvendo ao corpo alinhamento e saúde.</p><br>
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
	</div>
	
	
</section>

<?php 
	include_once("inc/footer.php");
?>