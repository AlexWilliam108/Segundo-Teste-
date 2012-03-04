<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<link rel="shorcut icon" type="image/x-ico" href="http://www.metododerose.org/arquivos/imagens/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=yearly&format=link'); ?>
    
    <script type="text/javascript" src="http://apis.google.com/js/plusone.js">{lang: 'pt-BR'}</script>
    
	<title>
	<?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?>

	</title>
    
    <?php wp_enqueue_script( 'quotes_blog' ); ?>
    <?php wp_enqueue_script( 'scripts_blog' ); ?> 
    <?php wp_enqueue_script( 'css_blog' ); ?>    
	<?php wp_head(); ?>	
   
    
</head>

<body>
<?php
include("diasdetransmissao.php");
?>

	<div id="header">
	    <img class="ao-vivo" src="<?php bloginfo('stylesheet_directory'); ?>/images/ao-vivo.png" alt="" />    	
	    <div class="center">            
	        <img class="flor-lis" src="<?php bloginfo('stylesheet_directory'); ?>/images/flor-lis.png" alt="" />            
	        <div class="quotes">
	            <p></p>
	            <img class="assinatura-mestre" src="<?php bloginfo('stylesheet_directory'); ?>/images/assinatura.png" alt="" />            
	        </div>            
	        <img class="mestre" src="<?php bloginfo('stylesheet_directory'); ?>/images/mestre.png" alt="" />            
	        <ul class="menu">
	            <li><a class="active home" href="http://metododerose.yogaoffice.com.br/blogdoderose">Home</a></li>
	            <li><a class="coluna-social" href="http://metododerose.yogaoffice.com.br/blogdoderose/coluna-social">Coluna Social</a></li>
	            <li><a class="links" href="http://metododerose.yogaoffice.com.br/blogdoderose/links">Links</a></li>
	            <!--<li><a class="posts" href="http://metododerose.yogaoffice.com.br/blogdoderose/todos-os-posts-2">Veja todos os Posts</a></li>-->
	        </ul>            
	    </div> 
	</div>
    
    <div class="categorias">            
		<a href="#" title="Próximo" class="next"> Próximo </a>
		<a href="#" title="Anterior" class="prev"> Anterior </a>
		<div class="menu-categorias">              	
		   <ul>
            	<li><a class="categorias-cultura" href="http://metododerose.yogaoffice.com.br/blogdoderose/cultura-geral/">Cultura Geral</a></li>
            	<li><a class="categorias-acoes" href="http://metododerose.yogaoffice.com.br/blogdoderose/acoes-sociais-e-humanitarias/">Ações Sociais & Humanitárias</a></li>
                <li><a class="categorias-cursos" href="http://metododerose.yogaoffice.com.br/blogdoderose/cursos/">Cursos</a></li>
                <li><a class="categorias-artigos" href="http://metododerose.yogaoffice.com.br/blogdoderose/artigos/">Artigos</a></li>
                <li><a class="categorias-imprensa" href="http://metododerose.yogaoffice.com.br/blogdoderose/imprensa/">Imprensa</a></li>                
                <li><a class="categorias-comendas" href="http://metododerose.yogaoffice.com.br/blogdoderose/comendas-e-condecoracoes/">Comendas & Condecorações</a></li>        
                <li><a class="categorias-ambiental" href="http://metododerose.yogaoffice.com.br/blogdoderose/responsabilidade-ambiental/">Responsabilidade Ambiental</a></li>
                <li><a class="categorias-caes" href="http://metododerose.yogaoffice.com.br/blogdoderose/caes-e-animais/">Cães & Animais</a></li>                
                <li><a class="categorias-amigos" href="http://metododerose.yogaoffice.com.br/blogdoderose/amigos/">Amigos</a></li>
                <li><a class="categorias-justica" href="http://metododerose.yogaoffice.com.br/blogdoderose/a-bem-da-justica-e-da-verdade/">Justiça & Verdade</a></li>
                <li><a class="categorias-profissao" href="http://metododerose.yogaoffice.com.br/blogdoderose/profissao/">Profissão</a></li>
                <li><a class="categorias-mensagens" href="http://metododerose.yogaoffice.com.br/blogdoderose/mensagens/">Mensagens & Pensamentos</a></li>
                <li><a class="categorias-filosofia" href="http://metododerose.yogaoffice.com.br/blogdoderose/filosofia/">Filosofia</a></li>
                <li><a class="categorias-livros" href="http://metododerose.yogaoffice.com.br/blogdoderose/livros/">Livros</a></li>
                <li><a class="categorias-gastronomia" href="http://metododerose.yogaoffice.com.br/blogdoderose/gastronomia/">Gastronomia & Alimentação</a></li>
                <li><a class="categorias-india" href="http://metododerose.yogaoffice.com.br/blogdoderose/india/">Índia</a></li>
                <li><a class="categorias-tv" href="http://metododerose.yogaoffice.com.br/blogdoderose/videos/">TV & Vídeos</a></li>
                <li><a class="categorias-musica" href="http://metododerose.yogaoffice.com.br/blogdoderose/musica/">Música</a></li>
                <li><a class="categorias-diversos" href="http://metododerose.yogaoffice.com.br/blogdoderose/diversos/">Diversos</a></li>
                <li><a class="categorias-uni" href="http://metododerose.yogaoffice.com.br/blogdoderose/uni-yoga-2/">Uni-Yôga</a></li>
                <li><a class="categorias-metodo" href="http://metododerose.yogaoffice.com.br/blogdoderose/metododerose-2/">Metodo</a></li>                    
		    </ul>
		</div>
	</div>
		
	<div id="container">
