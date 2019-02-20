<!--Onde se configura o theme, e hooks etc-->
<?php

//para agarrar a stylesheet = enqueing
//1o bootstrap
function load_stylesheet() {//load_stylesheet pode ter outro nome
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',array(), false, 'all');
    wp_enqueue_style('bootstrap');

 /* 
    => 'stylesheet' e o nome da stylesheet pode ser outro qualquer
    => get_template_directory_uri() . '/css/bootstrap.min.css' localizacao so bootstrap
    => wp_enqueue_style('stylesheet');//referente a esta stylesheet: wp_register_style('stylesheet',
*/ 

//2o a minha stylesheet

wp_enqueue_style('style', get_template_directory_uri() . '/style.css',array(), false, 'all');
wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');//faz a funcao load_stylesheet correr


/*   ******************************************************************************************************    */ 

//enqueing Jquery absolutamente necessario
function load_jquery()
{
wp_register_script('customscripts', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('customscripts');
}

add_action('wp_enqueue_scripts', 'load_jquery');
    /*
    => wp_enqueue_script('customscripts' nome do ficheiro
    =>  get_template_directory_uri() . '/js/jquery-3.3.1.min.js', localizacao do ficheiro
    => 1.0.0 versao
    => true para ir no footer, false para nao ir no footer
    */

/*   ******************************************************************************************************    */

//enqueing javascript

function loadjs(){

    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');

    /*
    =>wp_register_script('customjs'... nome k damos ao file
    => get_template_directory_uri() . '/js/scripts.js' localizacao do file
    => '/js/scripts.js' foi criado por mim dentro da pasta js
    => 1 e a versao
    => true se quiseremos no footer, false se nao quisermos no footer
    */ 
}
add_action('wp_enqueue_scripts', 'loadjs');

/******************************************************************************************************* */

//Show nav bar

add_theme_support('menus');

register_nav_menus(//para registar o nome dos menus
    array(

        'top-menu' => __('Top menu', 'theme'),//adiciona a tick box de adicionar o menu no top
        'footer-menu' => __('Footer menu', 'theme'),//adiciona a tick box de adicionar o menu no footer

    )
);
