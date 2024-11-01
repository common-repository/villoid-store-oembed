<?php
/*
 * Plugin Name: oEmbedVilloidStore
 * Version: 1.6
 * Plugin URI: https://www.villoid.com
 * Description: Share Products from Villoid Stores to your Wordpress blogs via oEmbed.
 * Author: Wojciech Nowak
 * Author URI: https://www.villoid.com
 *
 * Text Domain: oembedvilloidstore
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Wojciech Nowak
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-wordpress-villoid-store-oembed.php' );
