<div class="cont-arq cont-txt-serv">

    <div class="row-arq row-txt-serv">

        <div class="dato-arquitectura dato-servicio">
            <?php  $titulo_arquitectura = get_field('titulo_arquitectura')  ?>
            <h2> <?php echo $titulo_arquitectura  ?></h2>
            <div class="txt-arq txt-servicio">
                <div class="parrafo-1">
                    <?php $texto_1_arquitectura = get_field('texto_1_arquitectura') ?>
                    <p><?php  echo $texto_1_arquitectura ?></p>
                </div>
                <div class="parrafo-2">
                    <?php $texto_2_arquitectura = get_field('texto_2_arquitectura') ?>
                    <p><?php  echo $texto_2_arquitectura ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contenedor-imagenes-arq contenedor-imagenes">
    <div class="row-imagenes-arq row-imagenes">
        <div class="imagen-arq imagen-dato">
        <?php  $yameto = get_field('yameto')  ?>
            <h3><?php  echo $yameto ?></h3>
            <?php $img_yameto = get_field('img_yameto') ?>
            <div class="contenedor-imagen-arq contenedor-border">
            <img src="<?php echo esc_url($img_yameto['url']) ?>" alt="">
            </div>
        </div>
        <div class="imagen-arq">
        <?php  $acosta = get_field('acosta')  ?>
            <h3><?php  echo $acosta ?></h3>
            <?php $img_acosta = get_field('img_acosta') ?>
            <div class="contenedor-imagen-arq">
            <img src="<?php echo esc_url($img_acosta['url']) ?>" alt="">
            </div>
        </div>
        <div class="imagen-arq">
        <?php  $san_alberto = get_field('san_alberto')  ?>
            <h3><?php  echo $san_alberto ?></h3>
            <?php $img_san_alberto = get_field('img_san_alberto') ?>
            <div class="contenedor-imagen-arq">
            <img src="<?php echo esc_url($img_san_alberto['url']) ?>" alt="">
            </div>
        </div>
        <div class="imagen-arq">
        <?php  $san_alberto_396 = get_field('san_alberto_396')  ?>
            <h3><?php  echo $san_alberto_396 ?></h3>
            <?php $img_san_alberto_396 = get_field('img_san_alberto_396') ?>
            <div class="contenedor-imagen-arq">
            <img src="<?php echo esc_url($img_san_alberto_396['url']) ?>" alt="">
            </div>
        </div>
        <div class="imagen-arq">
        <?php  $san_eugenio = get_field('san_eugenio')  ?>
            <h3><?php  echo $san_eugenio ?></h3>
            <?php $san_eugenio87 = get_field('san_eugenio87') ?>
            <div class="contenedor-imagen-arq">
            <img src="<?php echo esc_url($san_eugenio87['url']) ?>" alt="">
            </div>
        </div>
        <div class="imagen-arq">
        <?php  $san_javier79 = get_field('san_javier79')  ?>
            <h3><?php  echo $san_javier79 ?></h3>
            <?php $img_sanjavier79 = get_field('img_sanjavier79') ?>
            <div class="contenedor-imagen-arq">
            <img src="<?php echo esc_url($img_sanjavier79['url']) ?>" alt="">
            </div>
        </div>
        <div class="imagen-arq">
        <?php  $san_javier111 = get_field('san_javier111')  ?>
            <h3><?php  echo $san_javier111 ?></h3>
            <?php $img_sanjavier111 = get_field('img_sanjavier111') ?>
            <div class="contenedor-imagen-arq">
            <img src="<?php echo esc_url($img_sanjavier111['url']) ?>" alt="">
            </div>
        </div>
        <div class="imagen-arq">
        <?php  $san_javier248 = get_field('san_javier248')  ?>
            <h3><?php  echo $san_javier248 ?></h3>
            <?php $img_sanjavier248 = get_field('img_sanjavier248') ?>
            <div class="contenedor-imagen-arq">
            <img src="<?php echo esc_url($img_sanjavier248['url']) ?>" alt="">
            </div>
        </div>
        <div class="imagen-arq">
        <?php  $san_jose107 = get_field('san_jose107')  ?>
            <h3><?php  echo $san_jose107 ?></h3>
            <?php $img_sanjose107 = get_field('img_sanjose107') ?>
            <div class="contenedor-imagen-arq">
            <img src="<?php echo esc_url($img_sanjose107['url']) ?>" alt="">
            </div>
        </div>
    </div>
</div>