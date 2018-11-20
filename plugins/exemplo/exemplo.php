<?php
/**
 * Plugin Name: exemplo plugin
 * Description: plugin de exemplo para 3IFEM
 * Version: 1.0
 * Author: 
 * Author URI: http://site.com.br
 */
 
 
function Calculo( $atts ){
    return '<iframe src="'.plugins_url().'/exemplo/index.php" frameborder="0" width="400px" height="500px"></iframe>';
}
add_shortcode('exemplo', 'Calculo');
?>