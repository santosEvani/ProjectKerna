<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sucesso</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/envioSucesso.css');?>">
	<script type="text/javascript" src="<?= base_url('public/js/js.js');?>"></script>
</head>
<body>
	<?php $this->load->view('menuSupresa');?>

	<div id="container">

		<h1>Cadastro realizado com sucesso!!!</h1>
		
		<p id="pCenter">Aproveite nossos produtos e serviços. </p>
	
	</div>

	<footer>Copyright © 2018 KERNA.</footer>

</body>
</html>