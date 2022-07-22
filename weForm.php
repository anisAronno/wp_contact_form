<?php

/*
Plugin Name: weForm
Plugin URI:
Description: Contact Form or submit any data
Version: 1.0.0
Author: Anis Arronno
Author URI: https://wedevs.com
License: GPLv2 or later
Text Domain: weForm
 */


function we_form_init()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'wp_db';
    $sql = "CREATE TABLE {$table_name} (
			id INT NOT NULL AUTO_INCREMENT,
			`name` VARCHAR(250) NOT NULL,
			email VARCHAR(250) NOT NULL,
			sex ENUM('M', 'F', 'O') DEFAULT 'M',
            age INT NOT NULL,
			PRIMARY KEY (id)
	);";
    require_once ABSPATH . "wp-admin/includes/upgrade.php";
    dbDelta($sql);
}

register_activation_hook(__FILE__, "we_form_init");

require_once('page.php');
require_once "tabledata.php";
