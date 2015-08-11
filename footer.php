<footer>
	<?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'contacto','posts_per_page'=>1)); ?>
 <?php if(!empty($pagename)) {?>
     <?php while(have_posts()){ the_post();?>
	<div class="container">
		<div class="row">

			


			<div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
					<img src="<?php bloginfo("template_url"); ?>/images/logo-footer.png" class="imagen-footer" alt="">
			</div>




			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">

			<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4  col-sm-offset-4 col-xs-7 col-xs-offset-3 sin-padding ">
				
				<?php if(get_field('cuenta-facebook')){?>
				<a href="<?php the_field('cuenta-facebook');?>"> <img src="<?php bloginfo("template_url"); ?>/images/face.png" class=" " alt=""></a>
				<?php } ?>
				<?php if(get_field('cuenta-twitter')){?>
				<a href="<?php the_field('cuenta-twitter');?>"> <img src="<?php bloginfo("template_url"); ?>/images/twitter.png" class=" " alt=""></a>
				<?php } ?>
				<?php if(get_field('cuenta-ins')){?>
				<a href="<?php the_field('cuenta-ins');?>"> <img src="<?php bloginfo("template_url"); ?>/images/ins.png" class=" " alt=""></a>
				<?php } ?>
				<?php if(get_field('cuenta-youtube')){?>
				<a href="<?php the_field('cuenta-youtube');?>"> <img src="<?php bloginfo("template_url"); ?>/images/youtube.png" class=" " alt=""></a>
				<?php } ?>
				<?php if(get_field('cuenta-google')){?>
				<a href="<?php the_field('cuenta-google');?>"> <img src="<?php bloginfo("template_url"); ?>/images/google+.png" class=" " alt=""></a>
				<?php } ?>
			</div>

			<div class="marco15 col-xs-12"></div>
				<?php if(get_field('cuenta-correos')){?>
			<div class="col-lg-8 col-lg-offset-2  col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 sin-padding">
				<span class="email20"><?php the_field('cuenta-correos');?></span>
			</div>
			<?php } ?>
			<div class="clearfix"></div>
			<div class="marco15 col-xs-12"></div>
			<div class="clearfix"></div>
			<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-4 col-xs-offset-4   sin-padding">
				<a href="<?php echo home_url("home"); ?>" class="menu-footer10">Inicio</a>
				<a href="<?php echo home_url("queesrm"); ?>" class="menu-footer10">¿Qué es RM?</a>
				<a href="<?php echo home_url("novedades"); ?>"  class="menu-footer10">Novedades</a>
				<a href="<?php echo home_url("imaginesuambiente"); ?>" class="menu-footer10">Imaginé su ambiente</a>
				<a href="<?php echo home_url("tutoriales"); ?>"  class="menu-footer10">Tutoriales</a>
				<a href="<?php echo home_url("servicios"); ?>"  class="menu-footer10">Servicios</a>
				<a target="_blank" href="http://shop.renovationmaker.com" class="menu-footer10">Tienda</a>
				<a href="<?php echo home_url("queesrm"); ?>"  class="menu-footer10">Contacto</a>
			</div>
			<div class="clearfix"></div>
			<div class="marco15 col-xs-12"></div>
			<div class="clearfix"></div>
			<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8  col-sm-offset-2 col-xs-10 col-xs-offset-1 sin-padding">
				<span class="email20">© 2015 Renovation Maker Todos los derechos reservados </span>
			</div>
			<div class="clearfix"></div>
			<div class="marco15 col-xs-12"></div>
			<div class="clearfix"></div>
			<div class="col-lg-4 col-lg-offset-4 col-md-4   col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 sin-padding  ">
				<a href="http://proyectokamila.com/" class="pklink">
					<p>Desarrollado Por Proyecto Kamila</p>
				</a>
			</div>
		</div>
		</div>
	</div>
	<?php } ?>
	<?php } ?>
</footer>







<link rel="stylesheet" href="<?php bloginfo('template_url');?>/slider/css/anythingslider.css">
<script src="<?php bloginfo('template_url');?>/slider/js/jquery.anythingslider.js"></script>


    <script>
    $(function () {
        $('#slider1').anythingSlider({
expand: true,
buildStartStop: false,
buildArrows: true,
enableArrows        : false,  
			  buildArrows         : false, 
autoPlay: true ,
hashTags: false
                        
        });


    });
    </script>
    <script>
	
    function desplegar_menu (){
    	console.log("Desplegar");
    	// $("#menu").removeClass("collapse");
    		$('#menu').removeClass('hidden-sm');
    	$('#menu').removeClass('hidden-xs');
    	$('#menu').slideDown();
    	$("#detonador").attr('onclick','colapsar_menu();');
    }
        function colapsar_menu (){
    	console.log("Ocultar");
    	// $("#menu").addClass("collapse");
    	$('#menu').addClass('hidden-sm');
    	$('#menu').addClass('hidden-xs');
    	$('#menu').slideUp();
    	$("#detonador").attr('onclick','desplegar_menu();');
    }
    function show(id){
    	console.log(id);
    	$('.item').slideUp();
    	$('.'+id).slideDown();
    }
</script>

<?php
if (isset($_POST['email'])) {
if(!empty($_POST['nombre']) AND !empty($_POST['email'])){

$to ="serviciosrm@renovationmaker.com";
$headers = "Content-Type: text/html; charset=iso-8859-1\n";
$headers .= "From:".$_POST['email']."\r\n";           
$tema="Solicitud de Contacto maikolleon@hotmail.com ";
$contenido = '<div style="font-color: #000;">';
                           $contenido .= '<p>Enviado el ' . date("d/m/Y") . '</p>';
                           //$contenido .= '<p>vengo de' . bloginfo('template_url') . '</p>';
                           $contenido .= '<hr />';
                           $contenido .= '<p><strong>Nombre: </strong>' . $_POST['nombre'] . '</p>';
                           $contenido .= '<p><strong>Apellido: </strong>' . $_POST['apellido'] . '</p>';
                           $contenido .= '<p><strong>Email: </strong>' . $_POST['email'] . '</p>';
                           $contenido .= '<p><strong>Telefono: </strong>' . $_POST['telefono'] . '</p>';
                           $contenido .= '<p><strong>Mensaje: </strong>' . $_POST['mensaje'] . '</p>';
                           $contenido .= '<hr />';
                           $contenido .= '</div>';
@mail($to,$tema,$contenido,$headers);
    //echo "Su mensaje ha sido enviado con éxito, Gracias por Contactarnos.";
echo $mensaje = '<script type="text/javascript">alert("Su mensaje ha sido enviado con éxito, Gracias por Contactarnos.");</script>';
} else {
   //echo "No se puede enviar el formulario, verifica los campos";
   echo $mensaje = '<script type="text/javascript">alert("No se puede enviar el formulario, verifica los campos.");</script>';
}
}
?>
</body>
</html>