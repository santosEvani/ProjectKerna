<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Contato Kerna</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/contato.css');?>">
	<script type="text/javascript" src="<?= base_url('public/js/js.js');?>"></script>
</head>
<body>
	<?php $this->load->view('menuSupresa');?>
	
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