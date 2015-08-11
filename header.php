<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo("template_url"); ?>/css/main.less"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/hover/hover.css"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
	<title><?php ?></title>
</head>
<body>
<header>

    <div class="menu-emca">
<div class="container-fluid ">
		<?php query_posts(array('post_type'=>'configuracion','posicion'=>'logo','posts_per_page'=>1,));?>
		<div class="row">
			 <?php while(have_posts()){ the_post();?>
			<div class="col-lg-4 col-md-3 col-sm-6 col-xs-8 ">
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				
				<a href="<?php echo home_url("home"); ?>">
					<img src="<?php echo $feat_image;?>" class="img-responsive logo-image" alt="">
				</a>
			</div>
			<?php }  ?> 
		<!-- menu -->
			<div class="col-lg-7   col-md-8 col-sm-6    menu-r hidden-xs hidden-sm sin-padding " >
				<ul class=" nav navbar-nav  navbar-center">
					<li class="hidden">
						<a href="#page-top"></a>
	                </li>
			        <li>
			            <a class="" href="<?php echo home_url("queesrm"); ?>"><span class="rm"><b>Que es</b></span><img src="<?php bloginfo("template_url"); ?>/images/rm.jpg" class="img-responsive rm" alt=""><b>?</b></a>
			        </li>
			        <li>
			            <a class="" href="<?php echo home_url("novedades"); ?>"><b>Novedades</b></a>
			        </li>
			        <li>
			            <a class="" href="<?php echo home_url("imaginesuambiente"); ?>"><b>Imagine su ambiente</b></a>
			        </li>
			        <li>
			            <a class="" href="<?php echo home_url("tutoriales"); ?>"><b>Tutoriales</b></a>
			        </li>
			         <li>
			            <a class="" href="<?php echo home_url("servicios"); ?>"><b>Servicios</b></a>
			        </li>
			         <li>

			            <a  class="" target="_blank" href="http://shop.renovationmaker.com"><b>Tienda</b></a>
			        </li>
				</ul>
			</div>
			<div id="detonador" class="col-xs-2 visible-xs col-sm-3 visible-sm menu-r2 sin-padding" onclick="desplegar_menu();">
				<span class="glyphicon glyphicon-th-large icono-r"></span>
			</div>
			<!--IDIOMAS -->
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-2 idioma sin-padding ">
						<nav>
							<ul class="sin-padding">
								<li class="submenu">
									<a href="#" > <img src="<?php bloginfo("template_url"); ?>/images/espa.jpg" onclick="desplegar_idioma();" class="img-responsive logo-idioma" alt=""><span class="glyphicon glyphicon-chevron-down  "></span></a>
								<!--IDIOMA ingles -->
									<ul class="children">
										<li>
											 <li><a href="#"> <img src="<?php bloginfo("template_url"); ?>/images/usa.jpg" id="idioma1" class=" logo-idioma1" alt=""></a></li>
										</li>
									</ul>
								<!--/IDIOMA ingles -->
								</li>
							</ul>
						</nav>
					</div>
			<!--/IDIOMAS -->
			<div class=" col-sm-6    menu-r hidden-lg hidden-md sin-padding " id="menu">
				<ul class=" nav navbar-nav  navbar-center">
					<li class="hidden">
						<a href="#page-top"></a>
	                </li>
			        <li>
			            <a class="" href="<?php echo home_url("queesrm"); ?>"><b>Que es Rm?</b></a>
			        </li>
			        <li>
			            <a class="" href="<?php echo home_url("novedades"); ?>"><b>Novedades</b></a>
			        </li>
			        <li>
			            <a class="" href="<?php echo home_url("imaginesuambiente"); ?>"><b>Imagine su ambiente</b></a>
			        </li>
			        <li>
			            <a class="" href="<?php echo home_url("tutoriales"); ?>"><b>Tutoriales</b></a>
			        </li>
			         <li>
			            <a class="" href="<?php echo home_url("servicios"); ?>"><b>Servicios</b></a>
			        </li>
			         <li>
			            <a target="_blank" href="http://shop.renovationmaker.com"><b>Tienda</b></a>
			        </li>
				</ul>
			</div>
			<!--Redes sociales -->
			<?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'contacto','posts_per_page'=>1)); ?>
 		<?php if(!empty($pagename)) {?>
 		<?php while(have_posts()){ the_post();?>
		<div class="clearfix"></div>
		<div class="col-lg-2 col-lg-offset-9 col-md-4 col-md-offset-7 col-sm-5 col-sm-offset-6   col-xs-12  redes-s">
			
			<div class="clearfix"></div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sin-padding">
				<?php if(get_field('cuenta-facebook')){?>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><a href="<?php the_field('cuenta-facebook');?>"> <img src="<?php bloginfo("template_url"); ?>/images/face.png" class=" " alt=""></a></div>
				<?php } ?>
				<?php if(get_field('cuenta-twitter')){?>
				<div class="col-lg-2 col-md-2  col-sm-2 col-xs-2 "><a href="<?php the_field('cuenta-twitter');?>"> <img src="<?php bloginfo("template_url"); ?>/images/twitter.png" class=" " alt=""></a></div>
				<?php } ?>
				<?php if(get_field('cuenta-ins')){?>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2  "><a href="<?php the_field('cuenta-ins');?>"> <img src="<?php bloginfo("template_url"); ?>/images/ins.png" class=" " alt=""></a></div>
				<?php } ?>
				<?php if(get_field('cuenta-youtube')){?>
				<div class="col-lg-2 col-md-2 col-sm-2  col-xs-2"><a href="<?php the_field('cuenta-youtube');?>"> <img src="<?php bloginfo("template_url"); ?>/images/youtube.png" class=" " alt=""></a></div>
				<?php } ?>
				<?php if(get_field('cuenta-google')){?>
				<div class="col-lg-2 col-md-2  col-sm-2 col-xs-2 "><a href="<?php the_field('cuenta-google');?>"> <img src="<?php bloginfo("template_url"); ?>/images/google+.png" class=" " alt=""></a></div>
				<?php } ?>
			</div>
		</div>
		</div>
		<?php } ?>
		<?php }  ?> 
		
	</div>
	</div>

	