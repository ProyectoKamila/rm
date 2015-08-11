<?php
// template name: imagine su ambiente
 get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
</header>
<?php wp_reset_query(); ?>
<!--Contenido tutoriales -->
<div class="container">
	<div class="row">
		<div class="marco11 col-lg-12"></div>
		<div class="col-lg-6">
			<h2 class="tuto">Tutoriales</h2>
		</div>
		<!--IMPUT BUSCAR -->
		<div class="col-lg-6">
			<div class="col-lg-5 col-lg-offset-6">
				<?php 
					$args = array(
						'type'                     => 'tutoriales',
						'child_of'                 => 0,
						'parent'                   => 0,
						'orderby'                  => 'name',
						'order'                    => 'ASC',
						'hide_empty'               => 0,
						'hierarchical'             => 1,
						'exclude'                  => '',
						'include'                  => '',
						'number'                   => '',
						'taxonomy'                 => 'tutorial',
						'pad_counts'               => false 

					); 
					$x=0;	
					?>
					<?php $categories = get_categories($args);?>
				<div class="col-lg-6">
					
						<select class="sele">
							<option value="<?php echo get_category_link(get_term_by("slug", $category->slug, "tutorial")); ?>" onclick="window.location = "ss"">
								Seleccione
							</option>
							<?php foreach ($categories as $category) {?>
							<option class="sele1">
								<?php echo $category->name;?>
							</option>
							<?php } ?>
						</select>
					
				</div>
			</div>
		</div>
		<div class="marco11 col-lg-12"></div>
	</div>
</div>

<div class="container">
	<div class="row">
		<!--FILA 1 -->
     <?php while(have_posts()){ the_post();?>
		<div class=" col-lg-3">
			<div class=" col-lg-12">
				<div class="video1">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="col-lg-12 text-center">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="marco11 col-lg-12"></div>
		</div>
		<?php } ?>
	</div>
</div>

<!--/Contenido tutoriales -->

<?php get_footer(""); ?>