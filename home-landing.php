<?php   

/*
*Template Name:Home-landing
*/

?>

<?php  get_header() ?>

<main class="seccion-home">
    <div class="row-home">
         <div class="servicio">
            <?php  $page_id = 22; $page_permalink = get_permalink($page_id) ?>

            <?php $titulo_arquitectura = get_field('titulo_arquitectura') ?>
             <h2><?php  echo $titulo_arquitectura ?></h2> 
             <?php  $imagen_arquitectura = get_field('imagen_arquitectura') ?>
             <a href="<?php echo esc_url($page_permalink)  ?>"><img src="<?php echo esc_url($imagen_arquitectura['url'])  ?>" alt=""></a>
             
         </div>
         <div class="servicio">
              <?php $imagen_construccion = get_field('imagen_construccion') ?>
              <?php  $titulo_construccion = get_field('titulo_construccion') ?>
             <h2><?php  echo $titulo_construccion  ?></h2>
             <img src="<?php  echo esc_url($imagen_construccion['url'])  ?>" alt="">
         </div>
         <div class="servicio">
              <?php $imagen_inmobiliaria = get_field('imagen_construccion') ?>
              <?php  $titulo_inmobiliaria = get_field('titulo_inmobiliaria') ?>
             <h2><?php  echo $titulo_inmobiliaria  ?></h2>
             <img src="<?php  echo esc_url($imagen_construccion['url'])  ?>" alt="">
         </div>
    </div>
</main>

<style>
    .seccion-home{
        background-color:#000;
    }
</style>




<?php  get_footer() ?>