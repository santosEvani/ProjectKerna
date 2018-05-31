<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>CSS Estilo</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/cssEstilo.css');?>">
</head>
<body>
	<header>	
		<div id="mySidenav" class="sidenav">

			<ul id="ulSand">
				<span id="iconMenu">Kerna</span>
				<p>Kerna documentação</p>
				<li><a href="<?php echo site_url('documentacao/page_doc');?>"><img src="<?= base_url('public/imgs/arrow_back_white_192x192.png');?>">Voltar</a></li>
				<li><img src="<?= base_url('public/imgs/white-about-256.png');?>">CSS Classes</li>
			</ul>
		</div>

	</header>
	
	<div id="container">

		<h1>Directório de estilos</h1>

		<p>CSS é a linguagem de marcação usada para estilizar seu jogo, desde a configuração das cores até a melhoria da aparência, CSS é o que permite que você faça todas elas. Como antes, você estará usando os arquivos marcados , os arquivos com uma extensão ˋ.min.cssˋ são bibliotecas de terceiros usadas para o mecanismo e outras funcionalidades, você deve deixá-los intocados.</p>

		<table>
			<tr>
			    <th>Arquivo</th>
			    <th>Contém</th> 
  			</tr>
  			<tr>
  				<td>main.css</td>
  				<td>Adicione seu estilo neste arquivo.</td>
  			</tr>
  			<tr>
  				<td>kerna.css</td>
  				<td>Arquivo com o estilo inicial do Kernia, quaisquer midifications devem ser feitas no arquivo main.css.</td>
  			</tr>
  			<tr>
  				<td>csshake.min.css</td>
  				<td>Biblioteca de animações CSS Shake.</td>
  			</tr>
  			<tr>
  				<td>animate.min.css</td>
  				<td>Biblioteca de animações CSS.</td>
  			</tr>
  			<tr>
  				<td>font-awesome.min.css</td>
  				<td>CSS de Font Awesome.</td>
  			</tr>
  			<tr>
  				<td>normalize.min.css</td>
  				<td>Normalizador CSS</td>
  			</tr>
		</table>

	</div>

	<footer>Copyright © 2018 KERNA.</footer>
</body>
</html>