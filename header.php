<!DOCTYPE html>
<html>
    <head>

        <?php wp_head();?><!--tras os standard WP scripts, o top menu WP, e hooka plugins -->

    </head>

<body <?php body_class();?>> <!--Permite ao WP adicionar as suas proprias classes-->
 <!-- o restante corpo do html esta no footter-->  

 <header class="sticky-top"><!--"sticky-top" faz a header ficar sticky mesmo depois de scroll down-->

            <div class="container">
<!-- apos registar os menus em functions.php escolhemos onde pomos o menu-->
                    <?php wp_nav_menu( 

                            array(

                                    'theme_location' => 'top-menu',
                                    'menu_class' => 'navigation',//da ao menu uma class="" k serve para o style

                            )

                            );?>
            </div>
 </header> 
