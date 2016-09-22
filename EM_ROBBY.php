<?php
/*
 * Plugin Name: Robby Ticketing System for Events Manager
 * Version: 	1.4.3
 * Plugin URI: 	https://www.robby.ai
 * Description: Sell tickets with Events Manager, support any kind of payment cards.
 * Author: 		robbyassistant, essfeed, Brice Pissard
 * Author URI: 	https://www.robby.ai/add-events/ess/
 * Text Domain: em-robby
 * Domain Path: /languages
 */

require_once( "inc/config/HC_Config.php" );

if ( get_site_option( 'dbem_ms_global_table' ) && is_multisite() )	{define( 'HC_MS_GLOBAL', TRUE  );}
else																{define( 'HC_MS_GLOBAL', FALSE );}

add_option( EM_ROBBY_VERSION_KEY, EM_ROBBY_VERSION );
add_action( 'plugins_loaded', array( 'EM_ROBBY', 'init' ) );

final class EM_ROBBY
{
	protected static $instance;

	function __construct()
    {
        add_action( current_filter(), array( &$this, 'init_plugin' ), 30 );
    }

	public static function init_plugin()
    {
        HC_Config::load_MVC_files();
		HC_Notices::set_notices_global_handler();
		HC_IO::set_filters_handler();
    }

	public static function init()
	{
		if ( !defined( 'EM_VERSION' ) ) return; // EM is not installed

		is_null( self::$instance ) AND self::$instance = new self;
        return self::$instance;
	}
}

register_activation_hook( 	__FILE__, 	array( 'HC_IO', 'set_activation' 	) );
register_deactivation_hook( __FILE__, 	array( 'HC_IO', 'set_deactivation' 	) );
register_uninstall_hook(    __FILE__, 	array( 'HC_IO', 'set_uninstall' 	) );