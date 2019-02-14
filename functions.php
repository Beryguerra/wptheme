<!--Onde se configura o theme, e hooks etc-->
<?php

//para agarrar a stylesheet = enqueing
//1o bootstrap
function load_stylesheet() {//load_stylesheet pode ter outro nome
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',array(), false, 'all');
    wp_enqueue_style('bootstrap');

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