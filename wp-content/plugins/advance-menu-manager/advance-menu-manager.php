<?php
/**
 * Plugin Name: Advanced Menu Manager
 * Plugin URI: https://www.thedotstore.com/
 * Description: Very Simple, easy, admin-friendly menu manege with this plugin which can be used for the customize menus like edit, sorting, delete, Add new menu etc.
 * Author: Thedotstore
 * Author URI: https://www.thedotstore.com/
 * Version: 2.9.4
 *
 * Copyright: (c) 2014-2015 Multidots Solutions PVT LTD (info@multidots.com)
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @author         Multidots
 * @category       Plugin
 * @copyright      Copyright (c) 2015-2016 Multidots Solutions Pvt. Ltd.
 * @license
 *
 *
 *
 * /**
 *
 * If this file is called directly, abort.
 *
 * @version        1.0.0
 * @author         Multidots
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * prevent direct access data leaks
 *
 * This is the condition to prevent direct access data leaks.
 *
 * @version        1.0.0
 * @author         Multidots
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
define( 'PLUGIN_NAME', 'Advanced Menu Manager' );
define( 'PLUGIN_TITLE_NAME', 'Menu Manager' );
define( 'PLUGIN_SLUG', 'advance-menu-manager' );
define( 'AMM_PLUGIN_PATH', plugin_dir_url( __FILE__ ) );
define( 'AMM_FREE_PLUGIN_TEXT_DOMAIN', 'advance-menu-manager' );
define( 'PLUGIN_BASE_PATH', AMM_PLUGIN_PATH . "includes/image/" );
define( 'PLUGIN_PATH', AMM_PLUGIN_PATH . "includes/" );
define( 'PLUGIN_URL', AMM_PLUGIN_PATH );
if ( !defined( 'AMM_FREE_PLUGIN_BASENAME' ) ) {
	define( 'AMM_FREE_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
}
/**
 * plugin_activation function
 *
 * On activation, admin page interface will be loaded.
 *
 * @version        1.0.0
 * @author         Multidots
 */
function plugin_activation() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/classes/class_activator.php';
	global $wpdb;
	set_transient( '_welcome_screen_advance_menu_manager_activation_redirect_data', true, 30 );
}
register_activation_hook( __FILE__, 'plugin_activation' );
require_once plugin_dir_path( __FILE__ ) . 'includes/admin/class-amm-user-feedback.php';
add_action( 'admin_init', 'welcome_advance_menu_manager_screen_do_activation_redirect' );
add_action( 'admin_menu', 'dot_store_menu_advance_menu_manager' );
add_action( 'advance_menu_manager_about', 'advance_menu_manager_about' );
add_action( 'admin_print_footer_scripts', 'advance_menu_manager_pointers_footer' );
add_action( 'admin_menu', 'welcome_screen_advance_menu_manager_remove_menus', 999 );
add_action( 'plugin_row_meta', 'amm_plugin_row_meta', 10, 2 );

$prefix = is_network_admin() ? 'network_admin_' : '';
add_filter( "{$prefix}plugin_action_links_" . AMM_FREE_PLUGIN_BASENAME,'plugin_action_links', 10, 4 );
	
function amm_plugin_row_meta( $links, $file ) {
	if ( strpos( $file, 'advance-menu-manager.php' ) !== false ) {
		$new_links = array(
			'support' => '<a href="https://www.thedotstore.com/support/" target="_blank">Support</a>',
		);
		$links = array_merge( $links, $new_links );
	}
	return $links;
}
function my_enqueue( $hook ) {
	wp_enqueue_script( 'jquery-ui-dialog' );
	wp_enqueue_style( 'wp-jquery-ui-dialog' );
	wp_enqueue_script( 'wp-pointer' );
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'googleapis', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'webkit-css', plugin_dir_url( __FILE__ ) . 'includes/admin/css/webkit.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'style-css', plugin_dir_url( __FILE__ ) . 'includes/admin/css/style.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'media-css', plugin_dir_url( __FILE__ ) . 'includes/admin/css/media.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'custom', plugin_dir_url( __FILE__ ) . 'css/custom.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'amm_style', plugin_dir_url( __FILE__ ) . 'includes/css/style.css' );
	wp_enqueue_style( 'amm_style_fancy', plugin_dir_url( __FILE__ ) . 'includes/css/fancy_alert.css' );
	
	wp_enqueue_style( 'amm_style_notice', plugin_dir_url( __FILE__ ) . 'includes/admin/css/notice.css' );
	wp_enqueue_style( 'amm_style_notice' );

	if ( ! empty( $_GET['page'] ) && isset( $_GET['page'] ) && ( $_GET['page'] == 'advance-menu-manager-lite' ) ) {
		wp_enqueue_script( "custom-js", plugin_dir_url( __FILE__ ) . 'includes/js/custom.js', array( 'jquery' ) );
	}
	wp_enqueue_script( 'custom-js-amm', plugin_dir_url( __FILE__ ) . 'includes/js/amm_custom.js', array( 'jquery' ), false );
}
add_action( 'admin_enqueue_scripts', 'my_enqueue' );
function welcome_advance_menu_manager_screen_do_activation_redirect() {
	if ( ! get_transient( '_welcome_screen_advance_menu_manager_activation_redirect_data' ) ) {
		return;
	}
	// Delete the redirect transient
	delete_transient( '_welcome_screen_advance_menu_manager_activation_redirect_data' );
	// if activating from network, or bulk
	if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {
		return;
	}
	// Redirect to extra cost welcome  page
	wp_safe_redirect( add_query_arg( array( 'page' => 'advance-menu-manager-lite&tab=menu_advance_manager_get_started_method' ), admin_url( 'admin.php' ) ) );
}
// dots stor landing page
function dot_store_menu_advance_menu_manager() {
	global $GLOBALS;
	if ( empty( $GLOBALS['admin_page_hooks']['dots_store'] ) ) {
		add_menu_page( 'DotStore Plugins', __( 'DotStore Plugins' ), 'null', 'dots_store', 'dot_store_menu_page', plugin_dir_url( __FILE__ ) . 'images/menu-icon.png', 6 );
	}
	add_submenu_page( 'dots_store', 'Advanced Menu Manager', 'Advanced Menu Manager', 'manage_options', 'advance-menu-manager-lite', 'custom_advance_submenu_extra' );
}
// custom submenu for extra flate rate shipping
function custom_advance_submenu_extra() {
	$url        = admin_url( '/admin.php?page=advance-menu-manager-lite&tab=menu-manager-add&section=menu-add' );
	$active_tab = "menu-manager-add";
	if ( ! empty( $_GET["tab"] ) ) {
		if ( $_GET["tab"] == "menu-manager-add" ) {
			dot_store_advance_menu_manager();
		}
		if ( $_GET["tab"] == "menu_advance_manager_premium_method" ) {
			menu_advance_manager_premium_method_function();
		}
		if ( $_GET['tab'] == 'menu_advance_manager_get_started_method' ) {
			menu_advance_manager_get_started_method_function();
		}
		if ( $_GET['tab'] == 'menu_advance_manager_dotstore_contact_support_method' ) {
			menu_advance_manager_dotstore_contact_support_method_function();
		}
		if ( $_GET['tab'] == 'dotstore_introduction_menu_advance_manager' ) {
			dotstore_introduction_menu_advance_manager_function();
		}
	} else {
		?>
		<script>location.href = '<?php echo $url; ?>';</script>
	<?php }
}
// advance manu manager premium rate function
function menu_advance_manager_premium_method_function() {
	advance_menu_manager_admin_menu_side_header_part();
	menu_advance_manager_premium_method();
}
// advance manu manager Getting started
function menu_advance_manager_get_started_method_function() {
	advance_menu_manager_admin_menu_side_header_part();
	include_once dirname( __FILE__ ) . '/includes/admin/getting_started.php';
	dotstore_advance_menu_manager_left_side_menu();
}
// advance manu manager support and contact function
function menu_advance_manager_dotstore_contact_support_method() {
	advance_menu_manager_admin_menu_side_header_part();
	menu_advance_manager_premium_method();
	dotstore_advance_menu_manager_left_side_menu();
}
// advance manu manager premium rate function
function dotstore_introduction_menu_advance_manager_function() {
	advance_menu_manager_admin_menu_side_header_part();
	include_once dirname( __FILE__ ) . '/includes/admin/quick_info.php';
	dotstore_advance_menu_manager_left_side_menu();
}
// dots store function
function dot_store_advance_menu_manager() {
	require_once( ABSPATH . 'wp-admin/includes/nav-menu.php' );
	$admin_interface = new md_admin_interface();
	advance_menu_manager_admin_menu_side_header_part();
	?>
	<div class="flat-table res-cl adv-menu-manager-main left-container">
		<div class="menu_add_section">
			<!-- menu content start -->
			<?php
			if ( $_GET["tab"] == "menu-manager-add" ) {
				require_once dirname( __FILE__ ) . '/includes/admin/admin.php';
			}
			?>
			<!-- Menu content -->
		</div>
	</div>
	<?php
	dotstore_advance_menu_manager_left_side_menu();
}
function advance_menu_manager_admin_menu_side_header_part() {
	$plugin_name    = "Advanced Menu Manager";
	$plugin_version = "2.9.4";
	include_once dirname( __FILE__ ) . '/includes/admin/header.php';
}
function menu_advance_manager_premium_method() {
	include_once dirname( __FILE__ ) . '/includes/admin/premium_method.php';
}
function dotstore_advance_menu_manager_left_side_menu() {
	$site_url = "admin.php?page=advance-menu-manager-lite&tab=";
	include_once dirname( __FILE__ ) . '/includes/admin/sidebar.php';
}
function welcome_screen_advance_menu_manager_remove_menus() {
	remove_submenu_page( 'index.php', 'advance-menu-manager-lite' );
}
function welcome_screen_content_advance_menu_manager() {
	$current_user = wp_get_current_user();
	?>
	<div class="wrap about-wrap">
		<?php
		$setting_tabs_wc = apply_filters( 'advance_menu_manager_setting_tab', array(
			"about"           => "Overview",
			"other_plugins"   => "Checkout our other plugins",
			"premium_feauter" => "Premium Feature",
		) );
		$current_tab_wc  = ( isset( $_GET['tab'] ) ) ? $_GET['tab'] : 'general';
		$aboutpage       = isset( $_GET['page'] )
		?>
		<h2 id="woo-extra-cost-tab-wrapper" class="nav-tab-wrapper">
			<?php
			foreach ( $setting_tabs_wc as $name => $label ) {
				echo '<a  href="' . admin_url( '/index.php?page=advance-menu-manager-lite&tab=' . $name ) . '" class="nav-tab ' . ( $current_tab_wc == $name ? 'nav-tab-active' : '' ) . '">' . $label . '</a>';
			}
			?>
		</h2>
		<?php
		foreach ( $setting_tabs_wc as $setting_tabkey_wc => $setting_tabvalue ) {
			switch ( $setting_tabkey_wc ) {
				case $current_tab_wc:
					do_action( 'advance_menu_manager_' . $current_tab_wc );
					break;
			}
		}
		?>
		<hr/>
		<div class="return-to-dashboard">
			<a href="<?php echo admin_url( '/themes.php?page=advance-menu-manager' ); ?>"><?php _e( 'Go to Advance Menu Manager Settings', 'advance-menu-manager' ); ?></a>
		</div>
	</div>
	<?php
}
function advance_menu_manager_about() {
	$current_user = wp_get_current_user();
	?>
	<div class="changelog">
		</br>
		<div class="changelog about-integrations">
			<div class="wc-feature feature-section col three-col">
				<div>
					<p class="advance_menu_manager_overview"><?php _e( 'The Menu makes it difficult for you to manage hundreds of menu items including sub-menu items if you run a complex content management system. Plus, when you have a blog integrated with it, you need to know what item is a page or a post. The existing WP Menu Feature makes it difficult for you and your team to add, manage, delete menu items, posts, pages etc. What`s more, you cannot waste your time dragging and dropping menu items. It increases the chance of human error and is cumbersome too. The Advanced Menu Manager has been built for websites with elaborate menu structure. It allows you to add pages and posts parallely.', 'advance-menu-manager' ); ?></p>
				</div>
			</div>
		</div>
	</div>
	<?php
}
function advance_menu_manager_pointers_footer() {
	$admin_pointers = custom_advance_menu_manager_admin_pointers();
	$script = '';
	$script .= 'jQuery.noConflict();';
	$script .= '(function ($) {';
	foreach ( $admin_pointers as $pointer => $array ) {
		if ( $array['active'] ) {
			if ( array_key_exists( "content", $array ) ) {
				$array_content = $array['content'];
			} else {
				$array_content = '';
			}
			$script .= '$(' . $array['anchor_id'] . ').pointer({
                                            content: ' . $array_content . ',
                                            position: {
                                                edge: ' . $array['edge'] . ',
                                                align: ' . $array['align'] . '
                                            },
                                            close: function () {
                                                $.post(ajaxurl, {
                                                    pointer: ' . $pointer . ',
                                                    action: "dismiss-wp-pointer"
                                                });
                                            }
                                        }).pointer("open");
                                    
                                }
                            }';
		}
	}
	$script .= '})(jQuery);';
	wp_add_inline_script( 'custom-js', $script );
}
function custom_advance_menu_manager_admin_pointers() {
	$dismissed = explode( ',', (string) get_user_meta( get_current_user_id(), 'dismissed_wp_pointers', true ) );
	$version   = '1_0'; // replace all periods in 1.0 with an underscore
	$prefix    = 'custom_advance_menu_manager_admin_pointers' . $version . '_';
	return array(
		$prefix . 'custom_advance_menu_manager_admin_pointers' => array(
			// 'content' => $new_pointer_content,
			'anchor_id' => '#toplevel_page_woocommerce',
			'edge'      => 'left',
			'align'     => 'left',
			'active'    => ( ! in_array( $prefix . 'custom_advance_menu_manager_admin_pointers', $dismissed ) ),
		),
	);
}
/**
 * plugin_deactivation function
 *
 * This function will run when someone deactivate the plugin and all admin interface will be disabled.
 *
 * @version        1.0.0
 * @author         Multidots
 */
function plugin_deactivation() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/classes/class_deactivator.php';
}
register_deactivation_hook( __FILE__, 'plugin_deactivation' );
function generate_menu_template() {
}
/**
 * This function runs when plugin activates. (use period)
 *
 * This function executes when plugin activates and object initialised.
 *
 * @since    1.0.0
 */
function generate_menu_page() {
	global $gloable_all_author_array;
	global $gloable_all_template_array;
	global $gloable_all_category_array;
	global $gloable_all_current_menu_id;
	$current_user = wp_get_current_user();
	include( 'includes/admin/admin.php' );
}
/**
 * spl_autoload_register function
 *
 * This function will run admin panel loades.
 *
 * @version        1.0.0
 * @author         Multidots
 */
function amm_autoloader( $name ) {
	require_once plugin_dir_path( __FILE__ ) . 'includes/classes/class_admin_page.php';
	require_once plugin_dir_path( __FILE__ ) . 'includes/classes/class_admin_menu_walker.php';
	require_once plugin_dir_path( __FILE__ ) . 'includes/classes/class_menu_ajax_action.php';
}
function plugin_action_links( $actions ) {
	$custom_actions = array(
		'configure' => sprintf( '<a href="%s">%s</a>', esc_url( add_query_arg( array( 'page' => 'advance-menu-manager-lite&tab=menu-manager-add&section=menu-add' ), admin_url( 'admin.php' ) ) ), __( 'Settings', PLUGIN_SLUG ) ),
		'docs'      => sprintf( '<a href="%s" target="_blank">%s</a>', esc_url( 'https://www.thedotstore.com/docs/plugins/advanced-menu-manager/' ), __( 'Docs', PLUGIN_SLUG ) ),
		'support'   => sprintf( '<a href="%s" target="_blank">%s</a>', esc_url( 'www.thedotstore.com/support' ), __( 'Support', PLUGIN_SLUG ) )
	);
	
	// add the links to the front of the actions list
	return array_merge( $custom_actions, $actions );
}

spl_autoload_register( 'amm_autoloader' );
add_action( 'wp_ajax_my_action_delete_menu', array( 'md_admin_interface', 'my_action_ajax_for_delete_menu' ) );
add_action( 'wp_ajax_my_action_create_menu_ajax', array( 'md_admin_interface', 'my_action_ajax_for_create_menu' ) );
/* * * popup content *** */
add_action( 'wp_ajax_my_action_for_add_new_menu_item_html_filter', array(
	'md_admin_menu_revision_ajax_action',
	'my_action_for_add_new_menu_item_html_filter_own',
) );
/**
 * Pagination post per page feature
 *
 * @version        1.0.1
 */
add_action( 'wp_ajax_my_action_for_add_pagination_limit', array(
	'md_admin_menu_revision_ajax_action',
	'my_action_for_add_pagination_post_per_page_limit_method',
) );
