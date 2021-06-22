<?php
/**
* Plugin Name: Orchid
*/

require_once (dirname(__FILE__), 'activate.php');
require_once (dirname(__FILE__), 'uninstall.php');

register_activation_hook(__FILE__, 'orchid_activation');
register_deactivation_hook(__FILE__, 'orchid_deactivation');

function orchid_activation() {

}

function orchid_deactivation() {

}

?>