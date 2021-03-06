<?php

/*
Plugin Name: Horloge
Plugin URI: http://wordpress.org/plugins/horloge/
Description: affichage d'horloge par ville et pays avec le fuseau horaire dans un slider  .
Author: Remj
Version: 1.0
*/



function enqueue_script()
{

  wp_register_style('horloge_style.css', plugins_url(basename(plugin_dir_path(__FILE__)) . '/style.css'));
  wp_enqueue_style('horloge_style.css');
  // Main Scripts
  wp_register_script('/script.js', plugins_url(basename(plugin_dir_path(__FILE__)) . '/script.js'));
  wp_enqueue_script('/script.js');
}


add_action('wp_enqueue_scripts', 'enqueue_script');

function get_horloge()
{
  $aff =
    '<div id="carousel" class="carousel slide" data-interval="false">

    <div class="carousel-inner">
        <div class="carousel-item active">
            <h3 class="d-block w-100"><span class="hours" id="2"></span></h3>
            <h5 class= "pays">Local</h5>
        </div>
        <div class="carousel-item">
            <h3 class="d-block w-100"> <span class="hours" id="1"></span></h3>
            <h5 class= "pays">London -1 </h5>
        </div>
        <div class="carousel-item">
            <h3 class="d-block w-100"> <span class="hours" id="-4"></span></h3>
            <h5 class= "pays">Cleveland -6</h5>
        </div>
        <div class="carousel-item">
            <h3 class="d-block w-100"> <span class="hours" id="-5"></span></h3>
            <h5 class= "pays">Milwaukee -7 </h5>
        </div>
        <div class="carousel-item">
            <h3 class="d-block w-100"> <span class="hours" id="-7"></span></h3>
            <h5 class= "pays">Sandiego -9 :</h5>
         </div>

    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
        <span class="sr-only">Next</span>
    </a>
</div>';

  return $aff;
}


add_shortcode('horloge', 'get_horloge');
