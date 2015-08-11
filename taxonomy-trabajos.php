<?php
// template name: imagine su
 get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
</header>
<?php wp_reset_query(); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 sin-padding">
			<h2 class="servi">Servicios</h2>
		</div>
	
		<div class="clearfix"></div>
		<?php while(have_posts()){ the_post();?>
		<div class="col-lg-4 sin-padding">
			<div class="col-lg-2 sin-padding">
				<div class="circulo1">
					<div class="circulo2">
					
					</div>
				</div>
			</div>
			<div class="col-lg-10 sin-padding">
				<div class="col-lg-12 text-center">
					<a href="<?php the_permalink(); ?>">
						<h2 class="servi"><b><?php the_title();?></b></h2>
					</a>
				</div>
				<div class="parrafo-servi col-lg-12">
					<p>
						<?php echo max_charlength(get_the_content(),348);?>
					</p>
				</div>
			</div>
		</div>
		<?php } ?><!--/CIERRE WHILE  -->
		<?php while(have_posts()){ the_post();?>
		<div class="clearfix"></div>
		<?php if(get_field('muestra-del-servicio')){?>
		<div class="col-lg-12">
			<h2 class="servi"><?php the_field('muestra-del-servicio');?></h2>
		</div>
		<?php } ?>
		<div class="clearfix"></div>
		<div class="col-lg-6">
			<?php if(get_field('imagen1-muestra')){?>
			<div class="col-lg-6">
				<?php if(get_field('enlace-imagen1-muestra')){?>
				<a href="<?php the_field('enlace-imagen1-muestra');?>">
					<img src="<?php the_field('imagen1-muestra');?>" class="img-responsive " alt="">
				</a>
				<?php } ?>
			</div>
			<?php } ?>
			<?php if(get_field('imagen2-muestra')){?>
			<div class="col-lg-6">
				<?php if(get_field('enlace-imagen2-muestra')){?>
				<a href="<?php the_field('enlace-imagen2-muestra');?> ">
					<img src="<?php the_field('imagen2-muestra');?> " class="img-responsive " alt="">
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
	</div>
</div>
<?php get_footer(""); ?>