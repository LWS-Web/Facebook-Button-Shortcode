<?php
/*
Plugin Name: Facebook Button Shortcode
Plugin URI: -
Description: Display Facebook-Buttons via shortcode.
Author: Mo
Version: 1.0.0
Author URI: -
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Create shortcode
 *
 * Use: [fb]<Facebook URL>[/fb]
 * See: http://www.w3examples.com/wordpress/shortcode_like_button.php
 **/
function fblike_function( $atts, $content=null ){

    extract(shortcode_atts(array(

            'send'          => 'false',
            'layout'        => 'standard',
            'show_faces'    => 'false',
            'width'         => '450px',
            'action'        => 'like',
            'font'          => 'arial',
            'colorscheme'   => 'light',
            'ref'           => '',
            'locale'        => 'de_DE',
            'share'         => 'false',
            'appId'         => '' // AppId if you have one

    ), $atts));

    //check vars for wrong parameters
    if($send != 'false' && $send != 'true'){$send='false';}
    if($show_faces != 'false' && $show_faces != 'true'){$show_faces='false';}
    if($action != 'like' && $action != 'recommend'){$action='like';}
    if($layout != 'standard' && $layout != 'button_count' && $layout != 'box_count'){$layout='standard';}
    if($share != 'false' && $share != 'true'){$share='false';}
    
    $fblike_code = <<<HTML
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/$locale/all.js#appId=$appId&xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <fb:like ref="$ref" href="$content" width="$width" colorscheme="$colorscheme" layout="$layout" action="$action" show_faces="$show_faces" share="$share" send="$send" font="$font"></fb:like>
HTML;

    return $fblike_code;

}
add_shortcode('fb', 'fblike_function');