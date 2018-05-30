<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Kerna ID</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CI/public/css/cadastro.css">
	<script type="text/javascript" src="<?= base_url();?>CI/public/js/js.js"></script>
</head>
<body>
	<header>

		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color: #FF4500;font-size: 50px; border: none;">&times;</a>
			<ul id="ulSand">
				<li><a href="<?php echo base_url();?>CI/index.php/pagemain/index">Home</a></li>
				<li><a href="<?php echo base_url();?>CI/index.php/sobre/page_sobre">Sobre</a></li>
				<li><a href="<?php echo base_url();?>CI/index.php/contato/page_contato">Contato</a></li>
			</ul>
		</div>

		<div id="divLogo">Kerna</div>

		<div id="divMenu">
			<span id="iconMenu" onclick="openNav()">&#9776;</span>
		</div>

		<nav id="navMenu">
    		<ul id="ulMenu">
    			<li class="liCenter"><a href="#">Demo</a></li>
    			<li class="liCenter"><a href="<?= base_url();?>CI/index.php/documentacao/page_doc">Doc</a></li>
    			<li class="liCenter"><a href="https://github.com/santosEvani/ProjectKerna" target="_blank">GitHub</a></li>
    			<li id="blocoCad"><a href="<?php echo base_url();?>CI/index.php/cadastro/page_cadastro"><img src="<?php echo base_url();?>CI/public/imgs/iconCadastro.png" alt=" "></a></li>
    		</ul>
    	</nav>
    	
	</header>

	<div id="container">

		<h1>Criar um Kerna ID</h1>
		
		<p id="pCenter">Cadastre-se e tenha acesso aos nossos produtos e serviços. </p>
		
		<form id="form" name="form" action="#" method="post">
				<p class="formPs">
					<label for="name">Username </label><br/>
	        		<input id="name" name="name" type="text" autocomplete="off" size="50" maxlength="50" required />
				</p>

				<p class="formPs">
					<label for="email">Email </label><br/>
	       			<input id="email" name="email" type="email" autocomplete="off" size="50" maxlength="64" required />
				</p>

				<p class="formPs">
					<label for="senha">Senha</label><br/>
	        		<input id="senha" name="senha" type="password" size="50" maxlength="10" required autocomplete="off"/>
				</p>

				<p class="formPs">
					<label for="confimarSenha">Confimar Senha</label><br/>
	        		<input id="confimarSenha" name="confimarSenha" type="password" size="50" maxlength="10" required autocomplete="off"/>
				</p>

				<div id="divBot">
					<button class="butCad btnModal" type="submit" form="form" value="submit" id="cadastrar" onclick="validar()">Cadastrar</button>
				</div>

			</form>
	</div>

	<footer>Copyright © 2018 KERNA.</footer>

</body>
</html>