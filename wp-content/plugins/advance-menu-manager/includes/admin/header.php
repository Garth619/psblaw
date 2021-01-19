<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
</head>

<body>
<div id="main">
    <div class="all-pad main-container">
        <header>
            <div class="logo-main">
                <img src="<?php echo esc_url(PLUGIN_URL . 'images/amm-logo.png'); ?>" width="width: 70px;">
            </div>
            <div class="header-right">
                <div class="logo-detail">
                    <strong><?php echo esc_html($plugin_name); ?></strong>
                    <span> Free Version <?php echo esc_html($plugin_version); ?></span>
                </div>
                <div class="button-dots">
                            <span class="support_dotstore_image"><a
                                        href="https://bit.ly/3qdmn6q"
                                        target="_blank"><img
                                            src="<?php echo esc_url(PLUGIN_URL . 'includes/admin/images/upgrade_new.png'); ?>"> </a></span>
                    <span class="support_dotstore_image"><a target="_blank"
                                                            href="https://www.thedotstore.com/support/"> <img
                                    src="<?php echo esc_url(PLUGIN_URL . 'includes/admin/images/support_new.png'); ?>"></a></span>
                </div>
            </div>
        </header>
		<?php
			$lite_flate_rate_methode = '';
			$menu_advance_manager_premium_method = '';
			$menu_advance_manager_get_started_method = '';
			$wc_lite_extra_shipping_dotstore_contact_support_method = '';
			$dotstore_introduction_menu_advance_manager = '';
			$dotstore_setting_menu_enable = '';
			$dotpremium_setting_menu_enable = '';
			$add_new_menu_manager = '';
			
			if ((!empty($_GET['tab']) && $_GET['tab'] != '' && !empty($_GET['section']) && $_GET['tab'] == 'menu-manager-add')) {
				$add_new_menu_manager = "active";
			}
			if ((empty($_GET['extra_method']) && !empty($_GET['section']) && $_GET['section'] == 'wc_lite_extra_shipping_method')) {
				$lite_flate_rate_methode = "active";
			}
			
			if (!empty($_GET['tab']) && $_GET['tab'] == 'menu_advance_manager_premium_method') {
				$menu_advance_manager_premium_method = "active";
			}
			if (!empty($_GET['tab']) && $_GET['tab'] == 'menu_advance_manager_get_started_method') {
				$menu_advance_manager_get_started_method = "active";
			}
			if (!empty($_GET['tab']) && $_GET['tab'] == 'wc_lite_extra_shipping_dotstore_contact_support_method') {
				$wc_lite_extra_shipping_dotstore_contact_support_method = "active";
			}
			if (!empty($_GET['tab']) && $_GET['tab'] == 'dotstore_introduction_menu_advance_manager') {
				
				$dotstore_introduction_menu_advance_manager = "active";
			}
			
			$site_url = "admin.php?page=advance-menu-manager-lite&tab=";
		?>
        <div class="menu-main">
            <nav>
                <ul>
                    <li>
                        <a class="dotstore_plugin <?php echo esc_attr($add_new_menu_manager); ?>"
                           href="<?php echo esc_url($site_url . '&tab=menu-manager-add&section=menu-add'); ?>">Menus</a>
                    </li>

                    <li>
                        <a class="dotstore_plugin <?php echo esc_attr($menu_advance_manager_premium_method); ?>"
                           href="<?php echo esc_url($site_url . '&tab=menu_advance_manager_premium_method'); ?>">Premium
                            Version</a>
                    </li>
                    <li>
                        <a class="dotstore_plugin <?php echo esc_attr($menu_advance_manager_get_started_method); ?> <?php echo esc_attr($dotstore_introduction_menu_advance_manager); ?>"
                           href="<?php echo esc_url($site_url . 'menu_advance_manager_get_started_method'); ?>">About
                            Plugin</a>
                        <ul class="sub-menu">
                            <li>
                                <a class="dotstore_plugin <?php echo esc_attr($menu_advance_manager_get_started_method); ?>"
                                   href="<?php echo esc_url($site_url . 'menu_advance_manager_get_started_method'); ?>">Getting
                                    Started</a></li>
                            <li>
                                <a class="dotstore_plugin <?php echo esc_attr($dotstore_introduction_menu_advance_manager); ?>"
                                   href="<?php echo esc_url($site_url . 'dotstore_introduction_menu_advance_manager'); ?>">Quick
                                    info</a></li>
                            <li><a class="dotstore_plugin" href=" https://www.thedotstore.com/suggest-a-feature/"
                                   target="_blank">Suggest A Feature</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="dotstore_plugin <?php echo esc_attr($wc_lite_extra_shipping_dotstore_contact_support_method); ?>"
                           href="#">Dotstore</a>
                        <ul class="sub-menu">
                            <li><a target="_blank" href="https://www.thedotstore.com/woocommerce-plugins/">WooCommerce
                                    Plugins</a></li>
                            <li><a target="_blank" href="https://www.thedotstore.com/wordpress-plugins/">Wordpress
                                    Plugins</a></li>
                            <li><a target="_blank" href="https://www.thedotstore.com/support/">Contact
                                    Support</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>