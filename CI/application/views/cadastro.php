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
	
		<?php 
			// serve para saber se uma variavel existe
			if(isset($msgErros)){
				echo '<div style="color:#FF4500;font-size:0.9em;margin-top:3%;">'. $msgErros .'</div>';
			}
		?>
		
		<?php 
			// serve para saber se uma variavel existe
			if(isset($enviado)){
				echo '<div style="color:green;font-size:1em;margin-top:3%;text-align: center;">'. $enviado .'</div>';
			}
		?>
		<form id="form" name="form" action="<?= site_url('cadastro/validarCampos');?>" method="post" onload="document.form.reset()">
	
				<p class="formPs">
					<label for="username">Username </label><br/>
	        		<input id="username" name="username" type="text" value="<?php echo set_value('username'); ?>" size="50" />
				</p>

				<p class="formPs">
					<label for="email">Email </label><br/>
	       			<input id="email" name="email" type="email" value="<?php echo set_value('email'); ?>" size="50" />
				</p>

				<p class="formPs">
					<label for="senha">Senha</label><br/>
	        		<input id="senha" name="senha" type="password" size="50"/>
				</p>

				<p class="formPs">
					<label for="confimarSenha">Confimar Senha</label><br/>
	        		<input id="confimarSenha" name="confimarSenha" type="password" size="50" />
	        		
				</p>

				<div id="divBot">
					<button class="butCad btnModal" type="submit" form="form" value="submit" id="cadastrar" onclick="validar()">Cadastrar</button>
				</div>

			</form>
	</div>

	<footer>Copyright © 2018 KERNA.</footer>

</body>
</html>