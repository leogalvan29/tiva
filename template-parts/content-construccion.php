<div class="cont-txt-serv">

    <div class="row-txt-serv">

        <div class="dato-servicio">
            <?php  $titulo_construccion = get_field('titulo_construccion')  ?>
            <h2> <?php echo $titulo_construccion  ?></h2>
            <div class="txt-servicio">
                <div class="parrafo-1">
                    <?php $parrafo_1_construccion = get_field('parrafo_1_construccion') ?>
                    <p><?php  echo $parrafo_1_construccion ?></p>
                </div>
                <div class="parrafo-2">
                    <?php $parrafo_2_construccion = get_field('parrafo_2_construccion') ?>
                    <p><?php  echo $parrafo_2_construccion ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contenedor-imagenes-arq contenedor-imagenes">
    <div class="row-imagenes-arq row-imagenes">
        <div class="imagen-arq imagen-dato">
            <?php  $corporativo_tiva = get_field('corporativo_tiva')  ?>
            <h3><?php  echo $corporativo_tiva ?></h3>
            <?php $img_corporativo_tiva = get_field('img_corporativo_tiva') ?>
            <div class="contenedor-imagen-arq contenedor-border">
                <img src="<?php echo esc_url($img_corporativo_tiva['url']) ?>" alt="">
            </div>
        </div>
        <div class="imagen-arq imagen-dato">
            <?php  $corporativo_tiva = get_field('corporativo_tiva')  ?>
            <h3><?php  echo $corporativo_tiva ?></h3>
            <?php $img_corporativo_tiva = get_field('img_corporativo_tiva') ?>
            <div class="contenedor-imagen-arq contenedor-border">
                <img src="<?php echo esc_url($img_corporativo_tiva['url']) ?>" alt="">
            </div>
        </div>
    </div>
</div>