<?php
    wp_footer();

    wp_nav_menu(
        array(
            'menu' => 'footer', 
            'container' => 'menu-footer', //becomes <menu-header>, not called in source html but makes it customizable in #style
            'theme_location' => 'footer', 
            'items_wrap' => '<ul id="" class="nav util-links">%3$s</ul>'
        )
    );
?>

</body>
</html>