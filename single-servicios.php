<?php
// template name: imagine su ambiente
 get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
</header>
<?php wp_reset_query(); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="servi">Servicios</h2>
		</div>
		<div class="clearfix"></div>
		<?php while(have_posts()){ the_post();?>
			<div class="col-lg-2">
				<div class="circulo1">
					<div class="circulo2">
					
					</div>
				</div>
			</div>
			<div class="col-lg-10 sin-padding">
				<div class="col-lg-12">
					<h2 class="servi"><?php the_title(); ?></h2>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-lg-12">
			<div class="parrafo-servi col-lg-9 col-md-9 col-sm-8 col-xs-12">
					<p>
						<?php the_content(); ?>
					</p>
			</div>
			<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
			<img src="<?php echo $feat_image;?>" class="img-responsive " alt="">
		</div>
		</div>
		<div class="marco11 col-lg-12"></div>
		<div class="clearfix"></div>
		<div class="marco13 col-lg-12"></div>
		<?php if(get_field('imagen-1')){?>
			<div class="col-lg-3 col-md-3 col-sm-6 ">
				<img src="<?php the_field('imagen-1');?> " class="img-responsive " alt="">
			</div>
		<?php } ?>
		<?php if(get_field('imagen-2')){?>
			<div class="col-lg-3 col-md-3 col-sm-6">
				<img src="<?php the_field('imagen-2');?> " class="img-responsive " alt="">
			</div>
		<?php } ?>
		<?php if(get_field('imagen-3')){?>
			<div class="col-lg-3 col-md-3 col-sm-6 ">
				<img src="<?php the_field('imagen-3');?> " class="img-responsive " alt="">
			</div>
		<?php } ?>
		<?php if(get_field('imagen-4')){?>
			<div class="col-lg-3 col-md-3 col-sm-6">
				<img src="<?php the_field('imagen-4');?> " class="img-responsive " alt="">
			</div>
		<?php } ?>
		<?php if(get_field('parrafo-2')){?>
		<div class="parrafo-servi col-lg-12">
			<p>
				<?php the_field('parrafo-2');?>
			</p>
		</div>
		<?php } ?>
		<?php } ?>
		<?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'campos-servicios-muestra','posts_per_page'=>1)); ?>
 		<?php if(!empty($pagename)) {?>
     	<?php while(have_posts()){ the_post();?>
		<div class="clearfix"></div>
		<?php if(get_field('titulo-muestra-servicios')){?>
		<div class="col-lg-12">
			<h2 class="servi"><?php the_field('titulo-muestra-servicios');?></h2>
		</div>
		<?php } ?>
		<div class="col-lg-6">
			<?php if(get_field('imagen1-muestra')){?>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<?php if(get_field('enlace-imagen1-muestra')){?>
				<a href="<?php the_field('enlace-imagen1-muestra');?>">
					<img src="<?php the_field('imagen1-muestra');?>" class="img-responsive " alt="">
				</a>
				<?php } ?>
			</div>
			<?php } ?>
			<?php if(get_field('imagen2-muestra')){?>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<?php if(get_field('enlace-imagen2-muestra')){?>
				<a href="<?php the_field('enlace-imagen2-muestra');?>">
					<img src="<?php the_field('imagen2-muestra');?>" class="img-responsive " alt="">
				</a>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
		<div class="col-lg-6 sin-padding">
			<?php if(get_field('titulo-parrafo')){?>
			<div class="col-lg-12">
				<h2 class="servi"><?php the_field('titulo-parrafo');?></h2>
			</div>
			<?php } ?>
			<div class="clearfix"></div>
			<?php if(get_field('parrafo-muestra')){?>
			<div class="parrafo-servi col-lg-12">
				<p>
					<?php the_field('parrafo-muestra');?>
				</p>
			</div>
			<?php } ?>
		</div>
		<?php } ?><!--/CIERRE WHILE  -->
		<?php } ?>
		<div class="marco11 col-lg-12"></div>
	</div>
</div>
<?php get_footer(""); ?>