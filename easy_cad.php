<?php 
    /*
    Plugin Name: Easy Cad
    Plugin URI: http://www.cauealmeida.com/easy-cad
    Description: Plugin WordPress para cadastro.
    Author: Cauê Almeida
    Version: 1.0
    Author URI: http://www.cauealmeida.com
    */

    function easy_admin() {
        include('easy_import_admin.php');
    }

    function easy_admin_actions() {
    	add_options_page("easy-painel", "Easy Cad Painel", 1, "easy-painel", "easy_admin");
    }

    add_action('admin_menu', 'easy_admin_actions');

?>
