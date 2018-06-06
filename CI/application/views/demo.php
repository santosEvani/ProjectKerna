<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Demo</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/demo.css');?>">
	<script type="text/javascript" src="<?= base_url('public/js/js.js');?>"></script>
</head>
<body>
	<?php $this->load->view('menuSupresa');?>
	
	<div id="container">

		<h1>Demo</h1>
		<div id="ds_ps">
			<p></p>
			<p>Teste a Demo funcional da engine</p>
		</div>
		
		<div id="demoplaceholder">
	        
		</div>
		
		

	</div>

	<footer>Copyright © 2018 KERNA.</footer>
</body>
</html>