<?php

function secondtheme_theme_support(){

//adds dynamic titel tags for the pages (wordpres is going to manage the titeltracks automaticly)
add_theme_support('titel-tag');
}

add_action('after_theme_setup', 'secondtheme_support');




//enable wordpress menus

function secondtheme_menus(){

    $locations = array(
        //key is the menu location name 
        //value is titel 
        'primary menu' => "Desktop Primary Navigation",
        'fotter manu' => "Footer Menu Items"


    );
    register_nav_menus($locations);
}
//init is an initilize funtion
add_action('init', 'secondtheme_menus');




// css files

//here is que funtion for the css files so wordpress dynamicly can load css files based on what reqired files it needs for the specific pages. 

//que css style file
function secondtheme_register_styles(){ 

    //assign our surrent version which is declared in the stylesheet as your property as this varible "$version".
   $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('secondtheme-style', get_template_directory_uri() . "/style.css", array('secondtheme-bootstrap'), $version, 'all');
        //first parameter is the name of the stylesheet internaly

        // second parameter is the url to the stylesheet with a funcktion that returns path to the current themes directory 

        // third parameter is an array for dependencies parameters, since the secondtheme-style is depended on boostrap css file, so the boostrap css fiule have to load before loading the style css file. 

        //fourth parameter is version "1.0) (will be set up dynamic later so wordpress can detect the paramter) - Edit "is done on line 9"

        //fifth paramter determens which style sheet is going to be for.

        // Bootstrap CSS
        wp_enqueue_style('secondtheme-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');

        //FontAwesome CSS
        wp_enqueue_style('secondtheme-fontawsome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

//when wordprees runs this hook, it also has to execute my function.
add_action('wp_enqueue_scripts', 'secondtheme_register_styles' );





// Javascipt 
function secondtheme_register_scripts(){ 

    wp_enqueue_script('secondtheme-jquery',"https://code.jquery.com/jquery-3.4.1.slim.min.js", array(),'3.4.1',true);

    wp_enqueue_script('secondtheme-popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(),'1.16.0',true);

    wp_enqueue_script('secondtheme-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(),'/4.4.1',true);

    wp_enqueue_script('secondtheme-main', get_template_directory_uri() . "/assets/js/main.js", array(),'1.0',true);


}

//when wordprees runs this hook, it also has to execute my function.
add_action(' wp_enqueue_scripts', 'secondtheme_register_scripts' );




?>