<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Roteiro</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CI/public/css/roteiro.css">
</head>
<body>
	<header>	
		<div id="mySidenav" class="sidenav">

			<ul id="ulSand">
				<span id="iconMenu">Kerna</span>
				<p>Kerna documentação</p>
				<li><a href="<?php echo base_url();?>CI/index.php/documentacao/page_doc"><img src="<?= base_url();?>CI/public/imgs/arrow_back_white_192x192.png">Voltar</a></li>
				<li><img src="<?= base_url();?>CI/public/imgs/Document.png">Roteiro</li>
                <li><a href="<?php echo base_url();?>CI/index.php/roteiro/page_roteiro"><img src="<?= base_url();?>CI/public/imgs/Document.png">Personagens</a></li>
                <li><a href="<?php echo base_url();?>CI/index.php/roteiro/page_roteiro"><img src="<?= base_url();?>CI/public/imgs/Document.png">Cenários</a></li>
                <li><a href="<?php echo base_url();?>CI/index.php/roteiro/page_roteiro"><img src="<?= base_url();?>CI/public/imgs/Document.png">Áudios</a></li>
                <li><a href="<?php echo base_url();?>CI/index.php/roteiro/page_roteiro"><img src="<?= base_url();?>CI/public/imgs/Document.png">Cenas</a></li>
			</ul>
		</div>

	</header>
	
	<div id="container">

		<h1>Roteirize seu jogo</h1>

    <p>Contar sua história é sobre o que é roteirizar, aprender como a linguagem Monogatari funciona, aprender todas as possibilidades que você tem para contar sua história, mostrar imagens, vídeos, animações, scripts é o que faz tudo funcionar.</p>

	</div>

	<footer>Copyright © 2018 KERNA.</footer>
</body>
</html>