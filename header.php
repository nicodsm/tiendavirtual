<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://kit.fontawesome.com/6908e1f2d3.js" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <title>
        Leroma Deportes - 
        <?php single_post_title(); ?>
    </title>

</head>

<body>
<div class="contenedor">

<div class="icono-whatsapp">
    <a href="https://wa.me/message/LETC5JJCGFY6E1">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
</div>

<header class="header">
    <nav>
        <div class="logo">
            <a href="<?php echo esc_url( home_url('/')); ?>">

                <img src="<?php echo get_template_directory_uri();?>/src/imagenes/logo.jpg" alt="Logo Leroma Deportes">
            </a>
        </div>

        <div class="barra-busqueda">
            <form action="#">
                <input type="text" placeholder=" ¿Qué estás buscando?" name="search">
            </form>
        </div>

        <div class="mi-cuenta">
            <div class="cuenta">
                <a href="<?php echo esc_url( home_url('/mi-cuenta')); ?>">
                    <i class="fa-regular fa-user"></i>
                    <p>Mi Cuenta</p>

                </a>

            </div>
            <div class="carrito">
                <a href="<?php echo esc_url( home_url('/carrito')); ?>">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p>Mi carrito</p>
                </a>
            </div>

        </div>
        <div class="nav-toggle">
            <i class="fa fa-bars"></i>

        </div>
    </nav>


            <?php

            $args = array(
                'container_id' => 'menu_principal',
                'container_class' => 'menu',
                'theme_location' => 'menu_principal'
            );
            wp_nav_menu($args); 
            
            ?>


    <div class="menu_lateral">
        <i class="fa-solid fa-xmark"></i>
        <a href="#">

            <i class="fa-regular fa-user"></i>
        </a>


        <?php
            $args = array(
            'container_id' => 'menu_secundario',
            'container_class' => 'menu_responsive',
            'theme_location' => 'menu_responsive'
        );
        wp_nav_menu($args); 

        ?>

    </div>
        


</header>
    <div class="navScroll" id="menuScroll">
            <div class="logo">
                <a href="index.html">

                    <img src="<?php echo get_template_directory_uri();?>/src/imagenes/logo.jpg" alt="Logo">
                </a>
            </div>

 

        <?php
            $args = array(
            'container_id' => 'menuScroll',
            'container_class' => 'menu',
            'theme_location' => 'menu_scroll'
            );
            wp_nav_menu($args); 

        ?>
        <div class="mi-cuenta">
                <div class="cuenta">
                    <a href="#">
                        <i class="fa-regular fa-user"></i>
                    </a>

                </div>
                <div class="carrito">
                    <a href="#">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
            </div> 
    </div>