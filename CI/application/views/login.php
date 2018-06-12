<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login - Kerna</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/cadastro.css');?>">
	<script type="text/javascript" src="<?= base_url('public/js/js.js');?>"></script>
</head>
<body>
	<?php $this->load->view('menuSupresa');?>

	<div id="container">

		<h1>Faça login com o Kerna ID</h1>
		
		<p id="pCenter">Se você não tiver um Kernia ID, crie um. </p>
	
	
		<form id="form" name="form" action="<?= site_url('login/autenticar');?>" method="post">
	
				<p class="formPs">
					<label for="username">Username </label><br/>
	        		<input id="username" name="username" type="text" size="50" />
				</p>

				<p class="formPs">
					<label for="senha">Senha</label><br/>
	        		<input id="senha" name="senha" type="password" size="50"/>
				</p>

				<div id="divBot">
					<button class="butCad btnModal" type="submit" form="form" value="submit" id="cadastrar" onclick="validar()">Logar</button>
				</div>

			</form>
	</div>

	<footer>Copyright © 2018 KERNA.</footer>

</body>
</html>