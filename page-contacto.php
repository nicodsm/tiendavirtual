<!-- 

Template name: Contacto

 -->


 <?php get_header(); ?>


 <main class="main_contacto">



    <div class="contacto">
        <h1>Contacto</h1>
        <p>Horarios de Atención en nuestro Local:<br> <?php echo get_post_meta( get_the_ID(), 'leroma_contacto_horario', true); ?></p>
        <div class="footer_contactanos__tel">

            <i class="fa-solid fa-phone"></i>
            <p><?php echo get_post_meta( get_the_ID(), 'leroma_contacto_telefono', true); ?></p>
        </div>
        <div class="footer_contactanos__mail">
            <i class="fa-regular fa-envelope"></i>
            <p><?php echo get_post_meta( get_the_ID(), 'leroma_contacto_correo', true); ?></p>

        </div>
        <div class="footer_contactanos__ubi">
            <i class="fa-solid fa-location-dot"></i>
            <p><?php echo get_post_meta( get_the_ID(), 'leroma_contacto_direccion', true); ?></p>

        </div>



    </div>

    <div class="mapa">
        <h1>Ubicación</h1>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.149843130475!2d-58.546806684591964!3d-34.60037226482851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb78dc1775459%3A0xa7f2ea21c29bb7d4!2sAv.%20La%20Plata%203626%2C%20B1676AFQ%20Santos%20Lugares%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1652223892112!5m2!1ses!2sar"
            style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


</main>




<?php get_footer(); ?>
