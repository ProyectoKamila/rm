<?php function portada($categoria){?>
    <?php if( $categoria != null){?>
        <?php $pagename = query_posts(array('post_type'=>'portada','sesion'=>$categoria,'posts_per_page'=>3)); ?>
    <?php if(!empty($pagename)) {?>
        <div class="container-fluid sli sin-padding">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 alto-slider">
                <ul id="slider1">
                     <?php while(have_posts()){ the_post();?>
                          <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                                <li style="background: url(<?php echo $feat_image;?> ) top center no-repeat; background-size:cover; sin-padding">
                                    <!--CUADRO1-->
                                    <!--CIRCULO-->
                                  <?php 
                                    $xxs= get_field('activar-circulo1');
                                  if( $xxs == true){?>

                                    <div  style="top: <?php if(get_field('top')){ the_field('top');}else{echo '250';}?>px; left: <?php if(get_field('left')){ the_field('left');}else{echo '200';}?>px;" class="p1 col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 hidden-sm hidden-xs sin-padding">
                                        
                                        <span class="circulo glyphicon glyphicon-record "></span>
                                            <!--CUADRO DE INFORMACION -->
                                    <div class="col-lg-12  col-md-12 chidden-sm hidden-xs cuadro-info sin-padding">
                                        <div class="cuadro-uno1">
                                            <div class="cuadro-uno  col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 text-center sin-padding">
                                                
                                                    <h2>1</h2>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        
                                        <div class="cuadro-texto col-lg-12 col-md-12 col-sm-12 col-sm-12">
                                        <div class="cuadro-linea"></div>
                                            <p>
                                                <?php the_content(); ?>  
                                            </p>
                                    
                                        </div>
                                    </div>
                                    </div>
                                    <?php } ?>
                                    <!--CUADRO2-->
                                  <!--CIRCULO-->
                                   <?php if(get_field('activar-circulo2') == true){?>
                                    <div  style="top: <?php if(get_field('top-cuadro2')){ the_field('top-cuadro2');}else{echo '250';}?>px; left: <?php if(get_field('left-cuadro2')){ the_field('left-cuadro2');}else{echo '473';}?>px;" class="p1 col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 hidden-sm hidden-xs sin-padding">
                                        <span class="circulo glyphicon glyphicon-record "></span>
                                            <!--CUADRO DE INFORMACION -->
                                    <div class="col-lg-12  col-md-12 chidden-sm hidden-xs cuadro-info sin-padding">
                                        <div class="cuadro-uno1">
                                            <div class="cuadro-uno  col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 text-center sin-padding">
                                                
                                                    <h2>2</h2>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                               
                                        <div class="cuadro-texto col-lg-12 col-md-12 col-sm-12 col-sm-12">
                                        <?php if(get_field('cuadro-publicacion2')){?>
                                            <div class="cuadro-linea"></div>
                                                <p>
                                                    <?php the_field('cuadro-publicacion2');?>
                                                </p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    </div>
                                    <?php } ?>
                                     <!--CUADRO3-->
                                     <!--CIRCULO-->
                                     <?php if(get_field('activar-circulo3') == true){?>
                                   <div  style="top: <?php if(get_field('top-cuadro3')){ the_field('top-cuadro3');}else{echo '250';}?>px; left: <?php if(get_field('left-cuadro3')){ the_field('left-cuadro3');}else{echo '838';}?>px;" class="p1 col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 hidden-sm hidden-xs sin-padding">
                                        <span class="circulo glyphicon glyphicon-record "></span>
                                            <!--CUADRO DE INFORMACION -->
                                    <div class="col-lg-12  col-md-12 chidden-sm hidden-xs cuadro-info sin-padding">
                                        <div class="cuadro-uno1">
                                            <div class="cuadro-uno  col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 text-center sin-padding">
                                                
                                                    <h2>3</h2>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="cuadro-texto col-lg-12 col-md-12 col-sm-12 col-sm-12">
                                            <?php if(get_field('cuadro-publicacion3')){?>
                                        <div class="cuadro-linea"></div>
                                            <p>
                                                <?php the_field('cuadro-publicacion3');?>
                                            </p>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    </div>
                                    <?php } ?>
                                    <div class="col-lg-12 col-md-12 col-sm-12 text-center sin-padding">
                                        <div class="franja">
                                            <?php if(get_field('texto-slider')){?>
                                            <h3 class="texto-sli"><?php the_field('texto-slider');?> </h3>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </li>
                     <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <?php } ?>
<!--/SLIDER -->
        <?php } ?>
<?php } ?>