<?php get_header(); ?>

<?php while(have_posts()): the_post(); 
$page_id = get_the_ID();

?>


            <!-- slider -->

            <!-- Slider main container -->
            <div class="swiper-main">
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="<?php echo get_post_meta( get_the_ID(), 'leroma_homepage_slider_1', true) ?>" />
                      </div>
                      <div class="swiper-slide">
                      <img src="<?php echo get_post_meta( $page_id, 'leroma_homepage_slider_2', true) ?>" />
                      </div>
                      <div class="swiper-slide">
                      <img src="<?php echo get_post_meta( $page_id, 'leroma_homepage_slider_3', true) ?>" />
                      </div>
    
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
              

            </div>


            <section class="info">
                <div>
                    <div class="icono"><i class="fa-solid fa-truck"></i></div>
                    <p>Envios a Todo el País</p>
                </div>
                <div>
                    <div class="icono"><i class="fa-regular fa-credit-card"></i></div>
                    <p>Cuotas y Facilidades</p>
                </div>
                <div>
                    <div class="icono"><i class="fa-solid fa-house"></i></div>
                    <p>Compra seguro desde tu casa</p>
                </div>

            </section>

            <section class="destacados">
                <div class="destacados__title">
                    <h2>Destacados</h2>
                </div>

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="img_producto">
                                <img src="<?php echo get_template_directory_uri();?>/src/imagenes/producto1.jpg" alt="imagen producto">
                            </div>
                            <div class="info_producto">
                                <p class="info_producto__title">Remera</p>
                                <p class="info_producto__precio">$ 1.200</p>
                                <div class="botones_producto">
                                    <a class="botones_producto__comprar" href="#">Comprar</a>
                                    <a class="botones_producto__ver" href="#">Ver</a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_producto">
                                <img src="<?php echo get_template_directory_uri();?>/src/imagenes/producto2.jpg" alt="imagen producto">
                            </div>
                            <div class="info_producto">
                                <p class="info_producto__title">Remera</p>
                                <p class="info_producto__precio">$ 1.200</p>
                                <div class="botones_producto">
                                    <a class="botones_producto__comprar" href="#">Comprar</a>
                                    <a class="botones_producto__ver" href="#">Ver</a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_producto">
                                <img src="<?php echo get_template_directory_uri();?>/src/imagenes/producto3.jpg" alt="imagen producto">
                            </div>
                            <div class="info_producto">
                                <p class="info_producto__title">Remera</p>
                                <p class="info_producto__precio">$ 1.200</p>
                                <div class="botones_producto">
                                    <a class="botones_producto__comprar" href="#">Comprar</a>
                                    <a class="botones_producto__ver" href="#">Ver</a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_producto">
                                <img src="<?php echo get_template_directory_uri();?>/src/imagenes/producto4.jpg" alt="imagen producto">
                            </div>
                            <div class="info_producto">
                                <p class="info_producto__title">Remera</p>
                                <p class="info_producto__precio">$ 1.200</p>
                                <div class="botones_producto">
                                    <a class="botones_producto__comprar" href="#">Comprar</a>
                                    <a class="botones_producto__ver" href="#">Ver</a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_producto">
                                <img src="<?php echo get_template_directory_uri();?>/src/imagenes/producto5.jpg" alt="imagen producto">
                            </div>
                            <div class="info_producto">
                                <p class="info_producto__title">Remera</p>
                                <p class="info_producto__precio">$ 1.200</p>
                                <div class="botones_producto">
                                    <a class="botones_producto__comprar" href="#">Comprar</a>
                                    <a class="botones_producto__ver" href="#">Ver</a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_producto">
                                <img src="<?php echo get_template_directory_uri();?>/src/imagenes/producto6.jpg" alt="imagen producto">
                            </div>
                            <div class="info_producto">
                                <p class="info_producto__title">Remera</p>
                                <p class="info_producto__precio">$ 1.200</p>
                                <div class="botones_producto">
                                    <a class="botones_producto__comprar" href="#">Comprar</a>
                                    <a class="botones_producto__ver" href="#">Ver</a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_producto">
                                <img src="<?php echo get_template_directory_uri();?>/src/imagenes/producto7.jpg" alt="imagen producto">
                            </div>
                            <div class="info_producto">
                                <p class="info_producto__title">Remera</p>
                                <p class="info_producto__precio">$ 1.200</p>
                                <div class="botones_producto">
                                    <a class="botones_producto__comprar" href="#">Comprar</a>
                                    <a class="botones_producto__ver" href="#">Ver</a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_producto">
                                <img src="<?php echo get_template_directory_uri();?>/src/imagenes/producto8.jpg" alt="imagen producto">
                            </div>
                            <div class="info_producto">
                                <p class="info_producto__title">Remera</p>
                                <p class="info_producto__precio">$ 1.200</p>
                                <div class="botones_producto">
                                    <a class="botones_producto__comprar" href="#">Comprar</a>
                                    <a class="botones_producto__ver" href="#">Ver</a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img_producto">
                                <img src="<?php echo get_template_directory_uri();?>/src/imagenes/producto9.jpg" alt="imagen producto">
                            </div>
                            <div class="info_producto">
                                <p class="info_producto__title">Remera</p>
                                <p class="info_producto__precio">$ 1.200</p>
                                <div class="botones_producto">
                                    <a class="botones_producto__comprar" href="#">Comprar</a>
                                    <a class="botones_producto__ver" href="#">Ver</a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </section>
<?php endwhile; ?>


<?php get_footer(); ?>