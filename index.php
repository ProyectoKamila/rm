<?php get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
</header>
<!--BLOQUE-2 -->
<?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'home','posts_per_page'=>1)); ?>
 <?php if(!empty($pagename)) {?>
     <?php while(have_posts()){ the_post();?>
	<div class="container">
		<div class="row">
		<div class="fondo-uno" style="background: url(<?php bloginfo("template_url"); ?>/images/fondo1.png) top center no-repeat; background-size:initial;">
			
			<div class="marco1 col-lg-12"></div>
			<div class="clearfix"></div>
			<div class="marco col-lg-12 col-md-12 col-sm-12">
				<div class="col-lg-12 sin-paddin">
					<?php if(get_field('titulo-sitio')){?>
					<h3 class="titulo"><?php the_field('titulo-sitio');?> </h3>
					<?php } ?>
				</div>
				<div class="marco2 col-lg-3 col-md-3 col-sm-6  sin-paddin"></div>
				<div class="col-lg-12 col-md-12 col-sm-12 sin-paddin">
					<?php if(get_field('titulo-sitio')){?>
					<h4><?php the_field('subtitulo1-sitio');?></h4>
					<?php } ?>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12  sin-paddin">
					<?php if(get_field('subtitulo2-sitio')){?>
					<h4 class="titulo"><?php the_field('subtitulo2-sitio');?></h4>
					<?php } ?>
				</div>
				<div class="clearfix"></div>
				<div class="parrafo-b2 col-lg-12  col-md-12 col-sm-12">
					<p>
						<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						<img src="<?php echo $feat_image;?>" class="img-responsive  imagen-b2" alt="">
						<?php echo get_the_content(); ?>
					</p>
				
				</div>
			</div>
			
			
			<div class="clearfix"></div>
			<div class="marco1 col-lg-12"></div>
		</div>
	</div>
</div>

<!--BLOQUE-3 FONDO -->
<div class="container-fluid">
	<div class="row">
		<?php if(get_field('fondo2-home')){?>
		<div class="fondo2-b3" style="background: url(<?php the_field('fondo2-home');?>   ) top center no-repeat; background-size:cover;">
			<?php } ?>
			<div class="col-lg-8 col-lg-offset-2  col-md-8 col-md-offset-2  text-center">
				<div class="textos-b3">
					<?php if(get_field('textos-fondo')){?>
					<p>
						<?php the_field('textos-fondo');?> 
					</p>
					 <?php } ?>
				</div>
			</div>
			<div class="clearfix"></div>
				<div class="col-lg-2 col-lg-offset-9 col-md-2 col-md-offset-9  col-sm-4 col-sm-offset-8  col-xs-5 col-xs-offset-7 text-center ">
					
					<?php if(get_field('enlace-tienda')){?>
					<a href="<?php the_field('enlace-tienda');?>" class="">
						<?php if(get_field('boton-fondo2')){?>
						<div class="boton1 text-center">
							<span class="tienda"><?php the_field('boton-fondo2');?></span>
						</div>
						<?php } ?>
					</a>
					<?php } ?>
				</div>
		</div>
	</div>
</div>
<?php } ?>
<?php } ?><!--/ CONSULTA PAGE HOME-->
<!--BLOQUE-4 NOVEDADES-->
<?php  query_posts(array('post_type'=>'configuracion','posicion'=>'texto','posts_per_page'=>1)); ?>
     
		<div class="container">
			<?php while(have_posts()){ the_post();?>
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="novedades"><?php the_title();?></h2>
				</div>
				<div class="col-lg-12 text-center">
				<div class="texto-b4">
					<?php if(get_field('subtitulo-novedades')){?>
					<h3><?php the_field('subtitulo-novedades');?>  </h3>
					<?php } ?>
				</div>
				</div>
				<?php } ?>

				<?php  query_posts(array('post_type'=>'novedades','posts_per_page'=>1)); ?>
     			<?php while(have_posts()){ the_post();?>
				<div class="clearfix"></div>
				<div class="col-lg-6 col-md-6 fondo01 sin-padding">
					<div class="col-lg-12 text-center enlace2 ">
							<a href="<?php echo home_url("novedades"); ?>"><h3 class="titulo-b4"><?php the_title();?> </h3></a>
					</div>
					<div class="clearfix"></div>
					<div class="marco4 col-lg-6"></div>
					<div class="col-lg-12 parrafo-b4">
						<p>
							 <?php echo max_charlength(get_the_content(),374);?>
							 <br><a href="<?php echo home_url("novedades"); ?>">Leer Más</a>
						</p>
					</div>
					
				</div>
				<div class="col-lg-6 col-md-6 sin-padding">
					<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						<img src="<?php echo $feat_image;?>" class="im img-responsive " alt="">
				</div>
			</div>
		</div>
 <?php } ?>

		<!--BLOQUE-5 SERVICIOS-->
			<?php 

					$args = array(
						'type'                     => 'servicios',
						'child_of'                 => 0,
						'parent'                   => '',
						'orderby'                  => 'name',
						'order'                    => 'ASC',
						'hide_empty'               => 0,
						'hierarchical'             => 1,
						'exclude'                  => '',
						'include'                  => '',
						'number'                   => '',
						'taxonomy'                 => 'trabajos',
						'pad_counts'               => false 

					); ?>
				<?php $categories = get_categories( $args ); ?>
				<?php if(!empty($categories)) {?>
				<?php   query_posts(array('post_type'=>'servicios','taxonomy'=>'trabajos','posts_per_page'=>1)); ?>
     <?php while(have_posts()){ the_post();?>
		<div class="container-fluid">
			<div class="row sin-padding">
				<div class="col-lg-12 text-center">
					<h2 class="servicios">SERVICIOS</h2>
				</div>
				<div class="clearfix"></div>
			
					<div class="fondo-b5" style="background: url(<?php bloginfo("template_url"); ?>/images/pared.png) top center no-repeat; background-size:cover; overflow:hidden;">
						<div class="imagenes-servi col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
							<?php
							$x=0; 
							foreach ($categories as $category) {?>
								<div class="col-lg-2  col-md-2 col-md-offset-0 col-sm-4 col-xs-6 col-lg-offset-0 sin-padding">
									
									<a href="<?php echo get_category_link(get_term_by("slug", $category->slug, "trabajos")); ?>">
										<img src="<?php the_field('icono', $category->taxonomy . '_' . $category->term_id); ?>" class="img-responsive" alt="">
									 </a>
									
								</div>

						<?php //if(!$x==3) {?>
								<div class="col-lg-2  col-md-2 col-md-offset-0 col-sm-4 col-xs-6 col-lg-offset-0 sin-padding">
									
									<a href="<?php echo get_category_link(get_term_by("slug", $category->slug, "trabajos")); ?>">
										<img src="<?php the_field('muestra', $category->taxonomy . '_' . $category->term_id); ?>" class=" img-responsive" alt="">
									</a>
								</div>
							<?php //} $x++; ?>
							<?php } ?>
						</div>
					</div>

		</div>
			<?php } ?>
		<?php } ?>
		<!--BLOQUE-6 PORTAFOLIO-->
		<?php  query_posts(array('post_type'=>'configuracion','posicion'=>'titulo-p','posts_per_page'=>1)); ?>
		<div class="container">
			 <?php while(have_posts()){ the_post();?>
			<div class="row">
				<div class="col-lg-12  text-center">
					<h2 class="portafolio"><?php the_title();?></h2>
				</div>
	
				<?php } ?>
		<!--BLOQUE-6 CATEGORIAS-PORTAFOLIO-->
						<div class=" col-xs-12">
								<?php 
					$args = array(
						'type'                     => 'portafolio',
						'child_of'                 => 0,
						'parent'                   => 0,
						'orderby'                  => 'name',
						'order'                    => 'ASC',
						'hide_empty'               => 0,
						'hierarchical'             => 1,
						'exclude'                  => '',
						'include'                  => '',
						'number'                   => '',
						'taxonomy'                 => 'categoria',
						'pad_counts'               => false 

					); 
					$x=0;	
					?>
					<?php $categories = get_categories($args);?>
					
					<ul class="botones-submenu nav nav-pills">
					  <li role="presentation" class="dropdown" >
						<a class="hvr-border-fade"id="<?php echo $x;?>" onclick="show(id);">Todos</a>
					</li>
					<?php foreach ($categories as $category) {?>
<?php
					$x++;
					$sub = array(
						'type'                     => 'portafolio',
						'child_of'                 => $category->term_id,
						'parent'                   => '',
						'orderby'                  => 'name',
						'order'                    => 'ASC',
						'hide_empty'               => 1,
						'hierarchical'             => 1,
						'exclude'                  => '',
						'include'                  => '',
						'number'                   => '',
						'taxonomy'                 => 'categoria',
						'pad_counts'               => false 

					); ?>
					<?php $subcategories = get_categories( $sub ); ?>
					  <li role="presentation" class="dropdown"?>
						<a class=" dropdown-toggle hvr-border-fade" data-toggle="dropdown" id="<?php echo $x;?>"  <?php if(!empty($subcategories)) {?> onclick="show(id);" <?php } ?>role="button" aria-haspopup="true" aria-expanded="false">
							<?php echo $category->name;?>
							<?php if(!empty($subcategories)){?>
							 <ul class="dropdown-menu">
							 <?php foreach ($subcategories as $subcategory) {?>
							 <?php $x++;?>
							 	 <li role="presentation" class="<sub></sub>dropdown"?>
							 	 	<a id="<?php echo $x;?>" onclick="show(id);" > <?php echo $subcategory->name;?></a>
							 	 </li>
							 	 <?php } ?>
							 </ul>
							 <?php } ?>
						</a>

					</li>
					<?php } ?>
					</ul>
						</div>
			
				</div>
			</div>
		</div>
		
		<!--BLOQUE-6 PORTAFOLIO-IMAGENES-->
		<?php $x=0;?>
		<?php query_posts(array('post_type'=>'portafolio','posts_per_page'=>8 )); ?>
		<div class="container-fluid sin-padding todos item <?php echo $x;?>">
			<div class="row sin-padding">
				
				<?php while(have_posts()){ the_post();?>
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<div class="col-lg-3 imagenes-porta sin-padding "style="background:url('<?php echo $feat_image;?>') top center no-repeat; background-size:cover;">
					
						<div class="imagen-info">
							<div class="col-lg-12 text-center">
								<div class="titulo">
									<h2 class="oficina"><?php the_title(); ?></h2>
								</div>
							</div>
							<div class="marco6 col-lg-4 col-lg-offset-4"></div>
							<div class="clearfix"></div>
							<div class="col-lg-12">
								<div class="texto-info text-center">
									<p>
										<?php echo max_charlength(get_the_content(),164);?>
									</p>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-lg-6 col-lg-offset-3 text-center">
									<a href="<?php the_permalink(); ?>" >
										<div class="boton-imagen">
											<span class="boton-ver">VER MÁS</span>
										</div>
									</a>
							</div>
						</div>
					
				</div>
				<?php }  ?>
				
			</div>
		</div>
			<?php 
					$args = array(
						'type'                     => 'portafolio',
						'child_of'                 => 0,
						'parent'                   => 0,
						'orderby'                  => 'name',
						'order'                    => 'ASC',
						'hide_empty'               => 0,
						'hierarchical'             => 1,
						'exclude'                  => '',
						'include'                  => '',
						'number'                   => '',
						'taxonomy'                 => 'categoria',
						'pad_counts'               => false 

					); ?>
		<!--BLOQUE-6 SUBCATEGORIA-PORTAFOLIO-->
					<?php $categories = get_categories($args);?>
					<?php foreach ($categories as $category) {?>
						<?php 
						$x++;
					$sub = array(
						'type'                     => 'portafolio',
						'child_of'                 => $category->term_id,
						'parent'                   => '',
						'orderby'                  => 'name',
						'order'                    => 'ASC',
						'hide_empty'               => 0,
						'hierarchical'             => 0,
						'exclude'                  => '',
						'include'                  => '',
						'number'                   => '',
						'taxonomy'                 => 'categoria',
						'pad_counts'               => false 

					); ?>
<?php $subcategories = get_categories( $sub ); ?>
		<?php if(empty($subcategories)) {
$x++;
			?>
		<?php query_posts(array('post_type'=>'portafolio','posts_per_page'=>8 , 'categoria'=>$category->slug)); ?>
		<div class="container-fluid sin-padding oculto item <?php echo $x;?>">
			<div class="row sin-padding">
				
				<?php while(have_posts()){ the_post();?>
				<div class="col-lg-3 imagenes-porta sin-padding "style="background:url('<?php echo pk_thumbnail(get_the_ID()); ?>') top center no-repeat; background-size:cover;">
					
						<div class="imagen-info">
							<div class="col-lg-12 text-center">
								<div class="titulo">
									<h2 class="oficina"><?php the_title(); ?></h2>
								</div>
							</div>
							<div class="marco6 col-lg-4 col-lg-offset-4"></div>
							<div class="clearfix"></div>
							<div class="col-lg-12">
								<div class="texto-info text-center">
									<p>
										<?php echo max_charlength(get_the_content(),164);?>
									</p>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-lg-6 col-lg-offset-3 text-center">
									<a href="<?php the_permalink(); ?>" >
										<div class="boton-imagen">
											<span class="boton-ver">VER MAS</span>
										</div>
									</a>
							</div>
						</div>
					
				</div>
				<?php }  ?>
				
			</div>
		</div>

		<?php } else {?>
			<?php foreach ($subcategories as $subcategory) {?>
				<?php $x++;?>
			<?php query_posts(array('post_type'=>'portafolio','posts_per_page'=>8 , 'categoria'=>$subcategory->slug)); ?>
	<div class="container-fluid sin-padding oculto item <?php echo $x;?>">
			<div class="row sin-padding">
				
				<?php while(have_posts()){ the_post();?>
				<div class="col-lg-3 imagenes-porta sin-padding "style="background:url('<?php echo pk_thumbnail(get_the_ID()); ?>') top center no-repeat; background-size:cover;">
					
						<div class="imagen-info">
							<div class="col-lg-12 text-center">
								<div class="titulo">
									<h2 class="oficina"><?php the_title(); ?></h2>
								</div>
							</div>
							<div class="marco6 col-lg-4 col-lg-offset-4"></div>
							<div class="clearfix"></div>
							<div class="col-lg-12">
								<div class="texto-info text-center">
									<p>
										<?php echo max_charlength(get_the_content(),164);?>
									</p>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-lg-6 col-lg-offset-3 text-center">
									<a href="<?php the_permalink(); ?>" >
										<div class="boton-imagen">
											<span class="boton-ver">VER MAS</span>
										</div>
									</a>
							</div>
						</div>
					
				</div>
				<?php }  ?>
				
			</div>
		</div>
		<?php }?> 
		<?php }?> 
		<?php }?>
		<!-- BLOQUE 7 TUTORIALES -->
		<div class="clearfix"></div>
		<?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'home','posts_per_page'=>1)); ?>
 		<?php if(!empty($pagename)) {?>
     	<?php while(have_posts()){ the_post();?>
		<div class="container-fluid sin-padding">
			<div class="row">
				<?php if(get_field('fondo3-home')){?>
				<div class="fondo-b7 sin-padding" style="background: url(<?php the_field('fondo3-home');?>) top center no-repeat; background-size:cover;">
					<?php } ?>
					<div class="col-lg-8 col-lg-offset-2">
						<div class="fondo-blanco">
							<div class="col-lg-12 text-center">
								<?php if(get_field('fondo3-titulo')){?>
								<h2 class="titulo-b7"><?php the_field('fondo3-titulo');?></h2>
								<?php } ?>
							</div>
							<div class="clearfix"></div>
							<div class="parrafo-b7 col-lg-12">
								<?php if(get_field('fondo3-parrafo')){?>
								<p>
									<?php the_field('fondo3-parrafo');?>
								</p>
								<?php } ?>
							</div>
							<div class="clearfix"></div>
							<div class="col-lg-3 col-lg-offset-9 col-md-3 col-md-offset-9  col-sm-4 col-sm-offset-7  col-xs-12 text-center ">
								<?php if(get_field('enlace-tutoriales')){?>
								<a href="<?php the_field('enlace-tutoriales');?>" class="clasea">
									<?php if(get_field('fondo3-boton')){?>
										<div class="boton2 text-center">
										<span class="tienda"><?php the_field('fondo3-boton');?></span>
									</div>
									<?php } ?>
								</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<div class="marco7 col-lg-12"></div>
			</div>
		</div>
<?php } ?>
<?php } ?>
<?php get_footer(""); ?>

