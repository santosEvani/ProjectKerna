<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sobre - Kerna</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/about.css');?>">
	<script type="text/javascript" src="<?= base_url('public/js/js.js');?>">
		document.form.reset();
	</script>
</head>
<body>
	<?php $this->load->view('menuSupresa');?>
	
	<div id="container">

		<h1>Sobre</h1>
		
		<h2>A breve história de Kerna</h2>
		
		<div id="ds_ps">
			
			<p>Kerna começou a ser desenvolvido como um TCC para o curso superior de Sistemas para a Internet, seu objetivo é 
	            trazer de volta a simplicidade e genialidade dos Adventure Games/Visual Novels antigos, como Snatcher, Policenauts, Day of the Tentacle 
	            e Maniac Mansion, com gameplay simples e intuitivo, e também ser uma Engine simples e eficiente para desevolvedores iniciantes.</p>
		</div>
		

	</div>

	<footer>Copyright © 2018 KERNA.</footer>
</body>
</html>