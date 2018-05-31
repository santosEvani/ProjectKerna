	<header>
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color: #FF4500;font-size: 50px; border: none;">&times;</a>
			<ul id="ulSand">
				<li><a href="<?php echo site_url('pagemain/index');?>">Home</a></li>
				<li><a href="<?php echo site_url('sobre/page_sobre');?>">Sobre</a></li>
				<li><a href="<?php echo site_url('contato/page_contato');?>">Contato</a></li>
			</ul>
		</div>

		<div id="divLogo">Kerna</div>

		<div id="divMenu">
			<span id="iconMenu" onclick="openNav()">&#9776;</span>
		</div>

		<nav id="navMenu">
    		<ul id="ulMenu">
    			<li class="liCenter"><a href="#">Demo</a></li>
    			<li class="liCenter"><a href="<?= site_url('documentacao/page_doc');?>">Doc</a></li>
    			<li class="liCenter"><a href="https://github.com/santosEvani/ProjectKerna" target="_blank">GitHub</a></li>
    			<li id="blocoCad"><a href="<?php echo site_url('cadastro/page_cadastro');?>"><img src="<?php echo base_url('public/imgs/iconCadastro.png');?>" alt=" "></a></li>
    		</ul>
    	</nav>
	</header>
	
	