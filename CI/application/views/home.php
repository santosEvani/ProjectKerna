<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Kerna</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/main.css');?>">
	<script type="text/javascript" src="<?= base_url('public/js/js.js');?>"></script>
</head>
<body>
	<header>
	    <div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color: #FF4500;font-size: 50px; border: none;">&times;</a>
			<ul id="ulSand">
				<li><a href="<?php echo site_url('pagemain/index');?>">Home</a></li>
				<li><a href="<?php echo site_url('sobre/page_sobre');?>">Sobre</a></li>
				<li><a href="<?php echo site_url('contato/page_contato');?>">Contato</a></li>
			</ul>
		</div>
	
		<div id="divLogo">
			<span id="iconMenu" onclick="openNav()">&#9776;</span>
		</div>

		<div id="blocoCad">
			<a href="<?php echo site_url('cadastro/page_cadastro');?>"><img src="<?php echo base_url('public/imgs/iconCadastro.png');?>" alt=" "></a>
		</div>
	</header>
	
	<div id="container">

	<main>
		<h1>KERNA</h1>
		<h2>Engine Visual Novel</h2>
		<p>Criada para trazer Visual Novels para a Web moderna e levá-las ao próximo nível, facilitando a criação e distribuição de Visual Novels de maneira simples para que qualquer pessoa possa aproveitá-las em praticamente qualquer lugar, criar jogos com recursos que ninguém já imaginou ... é hora de Visual Novels evoluir.</p>
		
	</main>

	<nav id="navMenu">
			<ul id="ulMenu">
				<li><a href="<?= site_url('page_demo/demo');?>">Demo</a></li>
				<li><a href="<?= site_url('documentacao/page_doc');?>">Doc</a></li>
				<li class="liCenter"><a href="https://github.com/santosEvani/ProjectKerna" target="_blank">GitHub</a></li>
			</ul>
	</nav>

	</div>
	<footer>Copyright © 2018 KERNA.</footer>

</body>
</html>