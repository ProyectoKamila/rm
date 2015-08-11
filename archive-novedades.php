<?php
// template name: novedades
 get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
</header>
<script type="text/javascript" language="javascript" src="<?php bloginfo('template_url');?>/scripts/carousel/jquery.carouFredSel-6.2.1.js"></script>

<?php wp_reset_query(); ?>
<!--CONTENIDO NOVEDADES -->
<?php 
					$args = array(
						'type'                     => 'novedades',
						'child_of'                 => 0,
						'parent'                   => 0,
						'orderby'                  => 'name',
						'order'                    => 'ASC',
						'hide_empty'               => 1,
						'hierarchical'             => 0,
						'exclude'                  => '',
						'include'                  => '',
						'number'                   => '',
						'taxonomy'                 => 'tipo',
						'pad_counts'               => false 

					); 
					$x=0;	
					?>
					<?php $categories = get_categories($args);?>
					<?php foreach ($categories as $category) {?>
<div class="corousel ">
	<ul id="foo<?php echo $x;?>" class="carou">
		<?php query_posts(array('post_type'=>'novedades','tipo'=>$category->slug));?>
		<?php while(have_posts()){ the_post();?>
		<li>
<div class="container">
	
	<div class="row ">
		<div class="col-lg-12">
			<h2 class="categoria"><?php echo $category->name;?></h2>
		</div>
		<div class="clearfix"></div>
		<div class="col-lg-9 sin-padding">
			<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<img src="<?php echo $feat_image;?>" class="img-responsive" alt="">
			</div>
			<?php if(get_field('segunda-imagen')){?>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<img src="<?php the_field('segunda-imagen');?> " class=" img-responsive" alt="">  
			</div>
			<?php } ?>
		</div>
		<div class="col-lg-3">
			<div class="col-lg-12 text-center">
				<h2><?php the_title(); ?></h2>
			</div>
			<!--Los parrafos lo maximo de caracteres son 539 -->
			<div class="parrafo-cate1 col-lg-12">
				<p>
					<?php the_content();?>
				</p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="marco9 col-lg-12"></div>
		<?php if(get_field('imagen-3')){?>
		<div class="col-lg-9 sin-padding">
			<img src="<?php the_field('imagen-3');?>" class="img-responsive " alt=""> 
		</div>
		<?php } ?>
		<div class="col-lg-3">
			<div class="col-lg-12 text-center">
				<h2>lorem</h2>
			</div>
			<?php if(get_field('parrafo2-imagen3')){?>
			<div class=" parrafo-cate1 col-lg-12">
				<p>
					 <?php the_field('parrafo2-imagen3');?>  
				</p>
			</div>
			<?php } ?>
		</div>
		<div class="marco9 col-lg-12"></div>
		<div class="clearfix"></div>
		<?php if(get_field('fondo-imagen')){?>
		<div class="fondo-ima" style="background: url(<?php the_field('fondo-imagen');?>) top center no-repeat; background-size:cover; overflow:hidden;">
			<div class="bor-texto col-lg-12 ">
				<?php if(get_field('contenido-fondo')){?>
				<div class="bor-texto1">
					<p>
						<?php the_field('contenido-fondo');?>
					</p>
				</div>
				<?php } ?>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
</li><!--/CIERRE PRIMERA LISTA -->
<?php } ?><!--CIERRE WHILE -->
</ul><!--CIERE UL  -->
<!--BOTONES CAROUSEL -->

</div>
<div class="container-fluid">
	<div class="row">

				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
					
						<a id="prev<?php echo $x;?>" class="prev" href="#">
							<span class="icono-fle glyphicon glyphicon-menu-left"></span>
						</a>
				
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-xs-offset-10 col-sm-offset-10 col-md-offset-10 col-lg-offset-10">
				
						<a id="next<?php echo $x;?>" class="next" href="#">
							<span class="icono-fle glyphicon glyphicon-menu-right"></span>
						</a>
					
				</div>
	
		</div>
</div>
<script>
 $('#foo<?php echo $x; ?>').carouFredSel({
					auto: false,
					prev: '#prev<?php echo $x; ?>',
					next: '#next<?php echo $x; ?>',
					responsive: true,
					pagination: "#pager<?php echo $x; ?>",
					mousewheel: true,
					swipe: {
						onMouse: true,
						onTouch: true
					}
				});   
</script>
<?php $x++;?>
<?php } ?>
<!--/CONTENIDO NOVEDADES -->
<?php get_footer(""); ?>

