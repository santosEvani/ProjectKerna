<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro - Kerna</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/cadastro.css');?>">
	<script type="text/javascript" src="<?= base_url('public/js/js.js');?>"></script>
</head>
<body>
	<?php $this->load->view('menuSupresa');?>

	<div id="container">

		<h1>Criar um Kerna ID</h1>
		
		<p id="pCenter">Cadastre-se e tenha acesso aos nossos produtos e serviços. </p>
		
		<form id="form" name="form" action="/ci/index.php/cadastro/inserir" method="post">
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