<?php
// template name: que es rm
 get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
</header>
<!--CONTENIDO -->
<div class="container">
	<div class="row">
		<?php  query_posts(array('post_type'=>'configuracion','posicion'=>'nosotros','posts_per_page'=>1)); ?>
		 <?php while(have_posts()){ the_post();?>
		<div class="col-lg-4 sin-padding">
			<h2 class="qrm"><?php the_title(); ?></h2>
		</div>
		<div class="clearfix"></div>
		<?php if(get_field('subtitulo-nosotrosrm')){?>
		<div class="col-lg-6  sin-padding">
			<h2 class="subtitulo-n"><?php the_field('subtitulo-nosotrosrm');?>  </h2>
		</div>
		<?php } ?>
		<?php } ?>
		<div class="clearfix"></div>

     <?php $pagename = query_posts(array('post_type'=>'nosotros','posts_per_page'=>6)); ?>
    	<?php if(!empty($pagename)) {?>
     		<?php while(have_posts()){ the_post();?>
     			<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
     			
     			<?php if(get_field('enlace-articulo')){?>
     			<a href="<?php the_field('enlace-articulo');?> " >
		<div class="imagen1-nosotros  col-lg-4 sin-padding" style="background: url(<?php echo $feat_image;?>) top center no-repeat; background-size:cover;">
			<div class="icono-lupa col-lg-12  sin-padding">
				<div class="lupa col-lg-2  col-lg-offset-6 col-md-2 col-md-offset-6 col-sm-2 col-sm-offset-5 col-xs-2 col-xs-offset-5 sin-padding text-center">
					<span class="glyphicon glyphicon-search"></span>
				</div>
			</div>
			<div class="titulo-imagen1 col-lg-12 ">
				<h2><?php the_title(); ?></h2>
			</div>

			<div class="parrafo1-nosotros col-lg-12 ">
				<p>
					 <?php echo max_charlength(get_the_content(),338);?>
				</p>
			</div>
		</div>
		</a>
		<?php } ?>
		<?php } ?>
		<?php } ?>
		
	</div>
</div>
<?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'nosotros','posts_per_page'=>1)); ?>
<?php if(!empty($pagename)) {?>
<?php while(have_posts()){ the_post();?>
<div class="container">
	<div class="row">
		<?php if(get_field('titulo-servicios-nosotros')){?>
		<div class="col-lg-6">
			<h2 class="texto10"><?php the_field('titulo-servicios-nosotros');?>  </h2>
		</div>
		<?php } ?>
		<div class="clearfix"></div>
		<div class="col-lg-9">
			<div class="col-lg-2">
				<div class="circulo1">
					<div class="circulo2">
					
					</div>
				</div>
			</div>
			<div class="parrafo20 col-lg-10">
				<p>
					<?php the_content(); ?>
				</p>
			</div>
			<div class="col-lg-2">
				<div class="circulo1">
					<div class="circulo2">
					
					</div>
				</div>
			</div>
			<?php if(get_field('parrafo2-servicios')){?>
			<div class="parrafo20 col-lg-10">
				<p>
					<?php the_field('parrafo2-servicios');?> 
				</p>
			</div>
			<?php } ?>
			<div class="col-lg-2">
				<div class="circulo1">
					<div class="circulo2">
					
					</div>
				</div>
			</div>
			<?php if(get_field('parrafo3-servicios')){?>
			<div class="parrafo20 col-lg-10">
				<p>
					<?php the_field('parrafo3-servicios');?> 
				</p>
			</div>
			<?php } ?>
			<div class="col-lg-2">
				<div class="circulo1">
					<div class="circulo2">
					
					</div>
				</div>
			</div>
			<?php if(get_field('parrafo4-servicios')){?>
			<div class="parrafo20 col-lg-10">
				<p>
					<?php the_field('parrafo4-servicios');?> 
				</p>
			</div>
			<?php } ?>
		</div>
		<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<div class="col-lg-3">
			<img src="<?php echo $feat_image;?>" class="img-responsive " alt="">
		</div>
	</div>
</div>
<?php } ?>
		<?php } ?>


<?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'contacto','posts_per_page'=>1)); ?>
<?php if(!empty($pagename)) {?>
<?php while(have_posts()){ the_post();?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="contacto-texto">Contacto</h2>
		</div>
		<div class="clearfix"></div>
		<?php if(get_field('fondo-contacto')){?>

		<div class="fondo-conta"style="background: url(<?php the_field('fondo-contacto');?>) top center no-repeat; background-size:cover;">
			<div class=" titulo1-conta col-lg-6">
				<?php if(get_field('titulo-contacto')){?>
				<h2 class="contacto-texto1"><?php the_field('titulo-contacto');?></h2>
				<?php } ?>
				<?php if(get_field('parrafo-contacto')){?>
				<div class="parrafo1-contacto col-lg-12">
					<p>
						<?php the_field('parrafo-contacto');?>
					</p>
				</div>
				<?php } ?>
			</div>
			<div class="titulo2-conta col-lg-6 text-center">
				<h2 class="contacto-texto2">Utilice este formulario para comunicarse con nosotros </h2>
                    <form    method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h3 class="subtitu4 formu-no">Nombre </h3>
                                    <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" required >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <h3 class="subtitu4 formu-no">Email</h3>
                                    <input type="email" class="form-control" placeholder=" Email " id="email"  name="email" required >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                     <h3 class="subtitu4 formu-no">Mensaje</h3>
                                    <textarea class="form-control area" placeholder="Mensaje*" id="mensaje"  name="mensaje" required ></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                               </div>
                            <div class="col-md-6">
                                 <div class="form-group">
                                    <h3 class="subtitu4 formu-no">Apellido </h3>
                                    <input type="text" class="form-control" placeholder=" Apellido " id="apellido" name="apellido" required >
                                    <p class="help-block text-danger"></p>
                                </div>
                                
                                <div class="form-group">
                                       <h3 class="subtitu4 formu-no">Teléfono </h3>
                                    <input type="tel" class="form-control" placeholder="Teléfono" id="telefono"  name="telefono" required >
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                
                                <input type="submit" class="btn btn-warning btn-lg boton-envi" name="enviar" value="ENVIAR">
                                                      
                            </div>
                        </div>
                    </form>

			</div>

		</div>
		<?php } ?>
		<!--CONTACTO -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 alto-mapa">
					<?php if(get_field('googlemap')){?>
			        <div class="mapa-contacto">
			            <iframe src="<?php the_field('googlemap');?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			        </div>
			        <?php } ?>
		        </div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php } ?>

<!--/CONTENIDO -->

<?php get_footer(""); ?>