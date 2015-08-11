<?php
// template name: detalle imagen
 get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
</header>
<!--BLOQUE-6 PORTAFOLIO-->
		<?php  query_posts(array('post_type'=>'configuracion','posicion'=>'titulo-p','posts_per_page'=>1)); ?>
		<div class="container">
			 <?php while(have_posts()){ the_post();?>
			<div class="row">
				<div class="col-lg-12  sin-padding">
					<h2 class="imagine">Imagine su Ambiente</h2>
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
						<a class=" dropdown-toggle hvr-border-fade" data-toggle="dropdown" id="<?php echo $x;?>"  <?php if(!empty($categories)) {?> onclick="show(id);" <?php } ?>role="button" aria-haspopup="true" aria-expanded="false">
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
					<?php } wp_reset_query(); ?>
					</ul>
						</div>
				</div>
			</div>
		</div>
		<?php the_post();  ?>
		<div class="container">
			<div class="row">
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<div class="col-lg-4 sin-padding">
					<img src="<?php echo $feat_image;?>" class="img-responsive" alt="">
				</div>
				<div class="col-lg-8 sin-padding">
					<div class="parrafo-detalle col-lg-12">
						<p>
							<h3 class="titulo-cate"><b><?php the_title();?></b></h3><?php  the_content(); ?>
						</p>
					</div>
				</div>
				<div class="marco11 col-lg-12"></div>
			</div>
		</div>
		<!--BLOQUE-6 PORTAFOLIO-IMAGENES-->
		<?php $x=0;?>
		<?php query_posts(array('post_type'=>'portafolio','posts_per_page'=>8 )); ?>
		<div class="container-fluid sin-padding todos item <?php echo $x;?>">
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
									<p><?php echo max_charlength(get_the_content(),164);?></p>
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
						'hierarchical'             => 1,
						'exclude'                  => '',
						'include'                  => '',
						'number'                   => '',
						'taxonomy'                 => 'categoria',
						'pad_counts'               => false 

					); ?>
<?php $subcategories = get_categories( $sub ); ?>
		<?php if(empty($subcategories)) {?>
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
									<?php the_content('',FALSE,''); ?>
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

<?php get_footer(""); ?>