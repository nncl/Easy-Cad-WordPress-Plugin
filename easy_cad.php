<?php 
    /*
    Plugin Name: Easy Cad
    Plugin URI: http://www.cauealmeida.com/easy-cad
    Description: Plugin WordPress para cadastro.
    Author: Cauê Almeida
    Version: 1.0
    Author URI: http://www.cauealmeida.com
    */

    function easy_admin_actions {
    	add_options_page("Easy Cad Product Display", "Easy Cad Product Display", 1, "Easy Cad Product Display", "easy_admin")
    }

    add_action('admin_menu', 'easy_admin_actions');

?>
