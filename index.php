<?php
get_header();
?>

<div> 
    <!--calling content using the WP/SQL loop-->
    <?php
            if(have_posts()){

                while(have_posts()){
                    
                    the_post();
                    the_content();
                }
            }

        ?>
</div>

<?php
  get_footer();
  ?>
