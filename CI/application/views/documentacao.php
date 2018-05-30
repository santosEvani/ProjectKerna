<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Documentação</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CI/public/css/doc.css">
</head>
<body>
	<header>	
		<div id="mySidenav" class="sidenav">

			<ul id="ulSand">
				<span id="iconMenu">Kerna</span>
				<p>Kerna documentação</p>
				<li><a href="<?php echo base_url();?>CI/index.php/pagemain/index"><img src="<?= base_url();?>CI/public/imgs/icone-casa-e-decoracao-w.png">Home</a></li>
				<li><a href="<?php echo base_url();?>CI/index.php/config/page_config"><img src="<?= base_url();?>CI/public/imgs/white-settings-256.png">Configuração</a></li>
				<li><a href="<?php echo base_url();?>CI/index.php/cssEstilo/page_estilo"><img src="<?= base_url();?>CI/public/imgs/white-about-256.png">CSS Classes</a></li>
				<li><a href="<?php echo base_url();?>CI/index.php/roteiro/page_roteiro"><img src="<?= base_url();?>CI/public/imgs/Document.png">Roteiro</a></li>
				<li><a href="https://github.com/santosEvani/ProjectKerna" target="_blank"><img src="<?= base_url();?>CI/public/imgs/Git-icon-white.svg.png">GitHub</a></li>
			</ul>
		</div>

	</header>
	
	<div id="container">

		<h1>Começando</h1>

		<p>A primeira coisa sobre Kerna que você provavelmente deve saber é que, com isso, seu visual novel é uma página da web primeiro e um jogo depois. Isso significa que o Kerna foi criado especificamente para a web, colocando coisas como capacidade de resposta (o fato de seu jogo se adaptar a qualquer tela ou tamanho de dispositivo) primeiro. Você não precisa necessariamente pensar em seu jogo dessa maneira também, mas certamente tirará o máximo proveito de Kerna se o fizer.</p>
		
	</div>

	<footer>Copyright © 2018 KERNA.</footer>
</body>
</html>