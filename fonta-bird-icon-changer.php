<?php
/*
Plugin Name: Fonta Bird Icon Changer
Description: Replace Old Bird Font Awesome icon with New X and update fontawesome version.
Version: 1.0
Author: Dheeraj Jhinjoria
*/


function enqueue_fontawesome() {
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2');
}

add_action('wp_enqueue_scripts', 'enqueue_fontawesome');


function replace_fontawesome_icon() {
    echo '<style type="text/css">
             .fa-twitter:before {
                 content: "\e61b" !important;
             }
         </style>';
}

add_action('wp_head', 'replace_fontawesome_icon');
