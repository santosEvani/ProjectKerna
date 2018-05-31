<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Configuração</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/config.css');?>">
</head>
<body>
	<header>	
		<div id="mySidenav" class="sidenav">

			<ul id="ulSand">
				<span id="iconMenu">Kerna</span>
				<p>Kerna documentação</p>
				<li><a href="<?php echo site_url('documentacao/page_doc');?>"><img src="<?= base_url('public/imgs/arrow_back_white_192x192.png');?>">Voltar</a></li>
				<li><img src="<?= base_url('public/imgs/white-settings-256.png');?>">Configuração</li>
			</ul>
		</div>

	</header>
	
	<div id="container">

		<h1>Configure seu ambiente</h1>

		<p>Para desenvolver no Kerna você precisaria do mesmo que desenvolver uma página web, você só precisa de um editor de texto capaz de editar HTML, Javascript e CSS, o que significa que praticamente qualquer editor de texto deve funcionar, mesmo o Windows NotePad, mas para facilitar, você provavelmente quer um com realce de sintaxe de código.</p>

		<p>Alguns recomendados (e gratuitos) incluem:</p>

		<ul id="progRec">
			<li>Atom</li>
			<li>Brackets</li>
			<li>Visual Studio Code</li>
		</ul>

		<p>Dê uma olhada neles e escolha o que você mais gosta e se sinta confortável, essa será sua principal ferramenta a partir de agora.</p>

		<p>Agora, você sempre pode abrir um site clicando no arquivo (index.html) e abri-lo com o seu navegador, no entanto, há pequenos aspectos do Kerna que funcionam melhor quando servidos através de um servidor web. Você não precisa de nada extravagante para isso, na verdade, há um ótimo servidor web que você pode baixar da Chrome Store</p>

		<p>Como mencionado anteriormente, o uso de um servidor web é completamente opcional, você pode simplesmente abrir seu jogo com o navegador como um arquivo e ele rodará muito bem, o servidor web permitirá que você teste recursos como os Service Workers, necessários para O suporte offline e o pré-carregamento de ativos da Monogatari.</p>

		<h2>Baixe o último lançamento</h2>
		
		<p>Depois de configurar seu ambiente, é hora de fazer o download do Kernia. Você pode obter o <a href="#">último lançamento daqui<a>.

		<p>Faça o download do arquivo .zip e descompacte-o, dentro de você encontrará seus arquivos de jogo, agora, quais são esses arquivos e para que eles são usados?</p>

		<h2>Diretórios</h2>

		<p>Você encontrará alguns diretórios, aqui é o que você deve usá-los para.</p>

		<table>
			<tr>
			    <th>Diretório</th>
			    <th>Contém</th> 
  			</tr>
  			<tr>
  				<td>áudio</td>
  				<td>Arquivos de áudio (música, voz e sons).</td>
  			</tr>
  			<tr>
  				<td>erro</td>
  				<td>Páginas de erro personalizadas, você pode modificá-las como desejar.</td>
  			</tr>
  			<tr>
  				<td>fontes</td>
  				<td>Font Awesome por padrão, todas as outras fontes devem ser colocadas aqui também.</td>
  			</tr>
  			<tr>
  				<td>estilo</td>
  				<td>Arquivos CSS para o seu projeto (CSS define a aparência e o estilo do seu jogo).</td>
  			</tr>
  			<tr>
  				<td>img</td>
  				<td>Todas as imagens para o seu projeto (interface do usuário, fundos, personagens etc.)</td>
  			</tr>
  			<tr>
  				<td>js</td>
  				<td>Todas as coisas que farão o seu VN funcionar</td>
  			</tr>
		</table>

		<h2>Fluxo de trabalho</h2>

		<p>Ok, agora você tem o ambiente configurado, você tem alguma idéia sobre quais arquivos você tem, então como você pode começar a desenvolver o seu jogo?</p>

		<p>Experimente o jogo primeiro, abra o arquivo index.html dentro do diretório que você acabou de descompactar e jogue o jogo de amostra. Depois de tocar uma vez, abra o diretório (aquele que você descompactou) com o editor que você escolheu para começar a fazer alterações. Abra o arquivo script.js com seu editor, encontre a variável chamada ˋscriptˋ, como você verá, todos os diálogos que você acabou de ver são apenas uma simples lista lá. Mais informações podem ser encontradas na documentação.</p>

		<p>Mude um dos diálogos, salve o arquivo e recarregue o jogo (assim como você recarrega um site). Reproduza-o novamente e você verá a caixa de diálogo alterada exatamente como você fez. Agora tente adicionar mais diálogo a ele e você verá rapidamente como as coisas são feitas. Uma vez que você tenha se acostumado a adicionar diálogos, adicionar uma cena como um desafio, isso significa que você terá que adicionar seu arquivo de imagem ao diretório ˋimg / cenas /, mais instruções estarão no link.</p>

		<p>Se você conseguir fazer tudo isso, parabéns! Você acabou de fazer o seu primeiro jogo e provavelmente está mais familiarizado com o fluxo de trabalho que você estará usando, apenas faça alterações, salve, recarregue, tente e repita!</p>	
	</div>

	<footer>Copyright © 2018 KERNA.</footer>
</body>
</html>