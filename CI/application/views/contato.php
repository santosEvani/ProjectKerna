<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Contato Kerna</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CI/public/css/contato.css">
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

		<h1>Entre em contato conosco!</h1>
		<div id="ds_ps">
			<p>Quer mandar uma mensagem para o KERNA? Encontrou algum erro no site? Quer fazer alguma sugestão? Tem alguma dúvida?</p>
			<p>Você pode entrar em contato diretamente pelo e-mail equipe@kernia.com.br ou preencher formulário abaixo:</p>
			
		</div>
		
		<form id="form" name="form" action="#" method="post">
				<p>
					<label for="name">Digite seu nome </label><br/>
	        		<input id="name" name="name" type="text" autocomplete="off" size="50" maxlength="50" required />
				</p>

				<p>
					<label for="email">Digite seu email </label><br/>
	       			<input id="email" name="email" type="email" autocomplete="off" size="50" maxlength="64" required />
				</p>

				<p>
					<label for="assunto">Assunto </label><br/>
	        		<input id="assunto" name="assunto" type="text" size="50" maxlength="50"/>
				</p>

				<p>
					<label for="description">Mensagem </label><br/>
					<textarea id="description" name="description" rows="8" cols="80" required></textarea>
				</p>
			
				<button class="butCad btnModal" type="submit" form="form" value="submit" id="enviar" onclick="validar()">Enviar</button>

			</form>

	</div>

	<footer>Copyright © 2018 KERNA.</footer>
</body>
</html>