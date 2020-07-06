<?php 

/*
  Plugin Name: EWP Query
  Author: Figoli Quinn & Associates
  Description: A WP Query for a more eloquent civilization.
  Version: 0.1
*/	

if ( !defined( 'ABSPATH' ) ) exit;

require_once __DIR__ . '/vendor/autoload.php';

if ( is_plugin_active( 'wp-update-from-github/wp-update-from-github.php' ) ) {
    // Allow updating from github repository.
    new FigoliQuinn\EWPQuery\WPUpdater;
}