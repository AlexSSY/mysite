<?php
/*
    Plugin Name: Orchid
*/

defined('ABSPATH') or die;

class OrchidPlugin
{
    public function __construct() {

    }

    public static function activated() {

    }

    public static function de_activated() {

    }

    public function register() {

    }
}

class_exists('OrchidPlugin') or die;

register_activation_hook(__FILE__, ['OrchidPlugin', 'activated']);
register_deactivation_hook(__FILE__, ['OrchidPlugin', 'de_eactivated']);

$plugin = new OrchidPludin();

?>