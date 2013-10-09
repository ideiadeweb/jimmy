<?php
//Verifica se existe algo na URL
if(isset($_GET['url'])){
	//Joga o conteudo da URL para a variável URL
	$url = $_GET['url'];
	//Quebra a variável em um array
	$url_pieces = explode("/", $url);	
	//Cria a variável content e lhe atribui o caminho da pasta
	$content = "html/";
	//Percorre o array da URL
	foreach($url_pieces as $up){
		//Adiciona o valor do segmento da URL da variável content
		$content .= $up . "-";
	}
	//Excluir o último "-" da variável content
	$content = substr($content,0,-1);
	//Adiciona o .html no caminho do arquivo
	$content .= ".html";
	//Verifica se o arquivo instancioado em content não existe
	if(!file_exists($content)){
		//Caso não exista a página 404 é mostrada
		$content = "html/404.html";
	}
}else{
	//Caso esteja vazia, mostrar a home
	$content = "html/home.html";
}

//Inclui arquivos HTML
include 'html/header.html';
include 'html/nav.html';
//Inclui a variável content
include $content;
include 'html/footer.html';
?>