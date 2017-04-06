<?php require_once("conecta.php");
	  require_once("banco-cursos.php");
	  $cursosConcluidos = listaCursosConcluido($conexao);
?>

<section class="our-team" id="cursos">
<div class="container">
	
	
	<div class="section-header">
		
		
		<h2 class="dark-text">Meus cursos</h2>
		
		
		<h6>
			Conheça os cursos que já concluir.		
		</h6>
	</div>
	
		
	<div style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 3s; -moz-animation-duration: 3s; animation-duration: 3s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;" class="row wow fadeInRight animated" data-wow-offset="40" data-wow-duration="3s" data-wow-delay="0.15s">
		<h6>Conheça os cursos que já concluir</h6>
		<?php foreach($cursosConcluidos as $concluido){?>
		<div class="col-lg-3 col-sm-3">
			<div class="team-member">
				<figure class="profile-pic">
				<img src="arquivos/javascript.png" alt="JavaScript" title="JavaScript">
				</figure>
				<div class="member-details">
					<h5 class="dark-text yellow-border-bottom"><?=utf8_encode($curso['nome'])?></h5>
					<div class="position">
						<p style="font-size:10px;">HTML e CSS I: Suas primeiras páginas na web</p>
						Alura<br>
						julho/2016 - janeiro/2017
					</div>
				</div>
			</div>
		</div>
		<?php }?>
	</div> 
	<h6>
		Conheça os cursos que estou cursando.		
    </h6>
	<br>
	<br>
	<div style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 3s; -moz-animation-duration: 3s; animation-duration: 3s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;" class="row wow fadeInRight animated" data-wow-offset="40" data-wow-duration="3s" data-wow-delay="0.15s">
		
		<div class="col-lg-3 col-sm-3">
			<div class="team-member">
				<figure class="profile-pic">
				<img src="arquivos/android_icone.png" alt="Android" title="Android">
				</figure>
				<div class="member-details">
					<h5 class="dark-text green-border-bottom">Android I</h5>
					<div class="position">
						<p style="font-size:10px;">Android I: Crie sua APP fantástica com Android Studio.</p>
						Alura<br>
						julho/2016 - atual
					</div>
				</div>
			</div>
		</div>
			<div class="col-lg-3 col-sm-3">
			<div class="team-member">
				<figure class="profile-pic">
				<img src="arquivos/jquery.png" alt="JQuery" title="JQuery">
				</figure>
				<div class="member-details">
					<h5 class="dark-text yellow-border-bottom">Chart Tools</h5>
					<div class="position">
						<p style="font-size:10px;">Google Chart Tools: Crie gráficos memóraveis na web.</p>
						Alura<br>
						setembro/2016 - atual
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-lg-3 col-sm-3">
			<div class="team-member">
				<figure class="profile-pic">
				<img src="arquivos/php_icone.png" alt="PHP" title="PHP">
				</figure>
				<div class="member-details">
					<h5 class="dark-text red-border-bottom">Design Patterns PHP I</h5>
					<div class="position">
						<p style="font-size:10px;">Design Patterns PHP I: Boas práticas de programção.</p>
						Alura<br>
						setembro/2016 - atual
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-lg-3 col-sm-3">
			<div class="team-member">
				<figure class="profile-pic">
				<img src="arquivos/android_icone.png" alt="Android" title="Android">
				</figure>
				<div class="member-details">
					<h5 class="dark-text green-border-bottom">Android III</h5>
					<div class="position">
						<p style="font-size:8px;">Android III: Aprimore sua APP com Fragments, Google MAPS e GPS.</p>
						Alura<br>
						julho/2016 - atual
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-3">
			<div class="team-member">
				<figure class="profile-pic">
				<img src="arquivos/php_icone.png" alt="PHP" title="PHP">
				</figure>
				<div class="member-details">
					<h5 class="dark-text red-border-bottom">PHP</h5>
					<div class="position">
						<p style="font-size:10px;">PHP - MVC</p>
						TreinaWeb<br>
						novembro/2016 - atual
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-3">
			<div class="team-member">
				<figure class="profile-pic">
				<img src="arquivos/php_icone.png" alt="PHP" title="PHP">
				</figure>
				<div class="member-details">
					<h5 class="dark-text red-border-bottom">PHP</h5>
					<div class="position">
						<p style="font-size:10px;">Loja Virtual com PHP e Banco de Dados Avançado.</p>
						udemy<br>
						dezembro/2016 - atual
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-3">
			<div class="team-member">
				<figure class="profile-pic">
				<img src="arquivos/php_icone.png" alt="PHP" title="PHP">
				</figure>
				<div class="member-details">
					<h5 class="dark-text red-border-bottom">PHP</h5>
					<div class="position">
						<p style="font-size:10px;">Laravel 5 Express</p>
						udemy<br>
						janeiro/2017 - atual
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
</div> 
</section> 