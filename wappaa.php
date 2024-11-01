<?php
/**
 * Plugin Name: wappaa cookies GDPR and PWA app
 * Plugin URI: https://wappaa.com/wappstore/wappaa-cookies-GDPR-and-PWA-app/
 * Description: This plugin allow you to create your Notice Cookies Banner (GDPR) with full control on the Cookies banner
 * Version: 1.0.0
 * Author: wappaa - yaniv soussana
 * Author URI: https://wappaa.com/wappstore/author
 * Text Domain: wappaa cookies GDPR and PWA app
 * Domain Path: /lang
 * License: GPLv2 or later
 */

/*
wappaa cookies GDPR and PWA app
Copyright (C) 2019 - 2020, yaniv soussana <nivben27@gmail.com>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to us https://wappaa.com
*/

define('WAPPAA_PLUGIN_DIR',str_replace('\\','/',dirname(__FILE__)));

if ( !class_exists( 'WappaaTools' ) ) {

	class WappaaTools {

		
		function __construct() {
			
			add_action( 'init', array( &$this, 'init' ) );
			add_action( 'admin_init', array( &$this, 'admin_init' ) );
			add_action( 'admin_menu', array( &$this, 'admin_menu' ) );
			add_action( 'wp_footer', array( &$this, 'wp_footer' ) );
			

		}

		function init() {

			load_plugin_textdomain( 'wappaa-cookies-GDPR-and-PWA-app', false, dirname( plugin_basename ( __FILE__ ) ).'/lang' );

//add page Cookies-Policy	

$post_title = "Cookies-Policy";
$post_content = "<h1>Cookies Policy</h1>
<p><strong>Introduction</strong></p>
<p>Our website is committed to protecting your privacy. We aim to provide trustworthy, industry-leading products and services so that you can focus on building meaningful connections. Our approach to privacy is to provide you with clear information about our data practices. That’s why we've tried to keep legal and technical jargon to a minimum.</p>
<p>This Cookie Policy explains what cookies are, what types of cookies are placed on your device when you visit our website and how we use them.</p>
<p>This Cookie Policy does not address how we deal with your personal information generally. To learn more about how we process your personal information, please see our Privacy Policy <a href=\"/privacy-policy\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"\">here</a>.</p>
<p><strong>What are cookies?</strong></p>
<p>Cookies are small text files that are sent to or accessed from your web browser or your device’s memory.  A cookie typically contains the name of the domain (internet location) from which the cookie originated, the “lifetime” of the cookie (i.e., when it expires) and a randomly generated unique number or similar identifier. A cookie also may contain information about your device, such as user settings, browsing history and activities conducted while using our services.</p>
<p><strong>Are there different types of cookies?</strong></p>
<p><em>First-party and third-party cookies</em></p>
<p>There are first-party cookies and third-party cookies. First-party cookies are placed on your device directly by us. For example, we use first-party cookies to adapt our website to your browser’s language preferences and to better understand your use of our website. Third-party cookies are placed on your device by our partners and service providers. For example, we use third-party cookies to measure user numbers on our website or to enable you to share content with others across social media platforms.</p>
<p><em>Session and persistent cookies</em></p>
<p>There are session cookies and persistent cookies. Session cookies only last until you close your browser. We use session cookies for a variety of reasons, including to learn more about your use of our website during one single browser session and to help you to use our website more efficiently. Persistent cookies have a longer lifespan and aren't automatically deleted when you close your browser. These types of cookies are primarily used to help you quickly sign-in to our website again and for analytical purposes.</p>
<p><strong>What about other tracking technologies, like web beacons?</strong></p>
<p>Other technologies such as web beacons (also calls pixel tags or clear gifs), tracking URLs or software development kits (SDKs) are used for similar purposes. Web beacons are tiny graphics files that contain a unique identifier that enable us to recognise when someone has visited our service or opened an e-mail that we have sent them.  Tracking URLs are custom generated links that help us understand where the traffic to our webpages comes from. SDKs are small pieces of code included in apps, which function like cookies and web beacons.</p>
<p>For simplicity, we also refer to these technologies as “cookies” in this Cookie Policy.</p>
<p><strong>What do we use cookies for?</strong></p>
<p>Like most providers of online services, we use cookies to provide, secure and improve our services, including by remembering your preferences, recognizing you when you visit our website and personalizing and tailoring ads to your interests. To accomplish these purposes, we also may link information from cookies with other personal information we hold about you.</p>
<p>When you visit our website, some or all of the following types of cookies may be set on your device.</p>
<table>
<tbody>
<tr>
<td>
<p><strong>Cookie type</strong></p>
</td>
<td>
<p><strong>Description</strong></p>
</td>
</tr>
<tr>
<td>
<p><strong>Essential website cookies</strong></p>
</td>
<td>
<p>These cookies are strictly necessary to provide you with services available through our website and to use some of its features, such as access to secure areas.</p>
</td>
</tr>
<tr>
<td>
<p><strong>Analytics cookies</strong></p>
</td>
<td>
<p>These cookies help us understand how our website is being used, how effective marketing campaigns are, and help us customize and improve our websites for you.</p>
</td>
</tr>
<tr>
<td>
<p><strong>Advertising cookies</strong></p>
</td>
<td>
<p>These cookies are used to make advertising messages more relevant to you.  They perform functions like preventing the same ad from continuously reappearing, ensuring that ads are properly displayed for advertisers, selecting advertisements that are based on your interests and measuring the number of ads displayed and their performance, such as how many people clicked on a given ad.</p>
</td>
</tr>
<tr>
<td>
<p><strong>Social networking cookies</strong></p>
</td>
<td>
<p>These cookies are used to enable you to share pages and content that you find interesting on our website through third-party social networking and other websites.  These cookies may also be used for advertising purposes too.</p>
</td>
</tr>
</tbody>
</table>
<p><strong>How can you control cookies?</strong></p>
<p>There are several cookie management options available to you. Please note that changes you make to your cookie preferences may make browsing our website a less satisfying experience. In some cases, you may even find yourself unable to use all or part of our site.</p>
<p><em>Browser and devices controls</em></p>
<p>Some web browsers provide settings that allow you to control or reject cookies or to alert you when a cookie is placed on your computer.  The procedure for managing cookies is slightly different for each internet browser. You can check the specific steps in your particular browser help menu.</p>
<p>You also may be able to reset device identifiers by activating the appropriate setting on your mobile device. The procedure for managing device identifiers is slightly different for each device. You can check the specific steps in the help or settings menu of your particular device.</p>
<p>Opting out does not mean you will not see advertising - it means you won’t see personalized advertising from the companies that participate in the opt-out programs.  Also, if you delete cookies on your device after you opted out, you will need to opt-out again.</p>
<p><strong>Social Cookies</strong></p>
<p>To allow you to share content on social media, some features of this website use social media plug-ins (e.g., Twitter™ “Share to Twitter” or LinkedIn™ “in” buttons). Depending on your social media account settings, we automatically receive information from the social media platform when you use the corresponding button on our website.</p>
<p>To learn more about social media cookies, we suggest you refer to your social media platform’s cookie policy and privacy policy.</p>
<p><strong>Adobe Flash Player™ Flash cookies</strong></p>
<p>Adobe Flash Player™ is an application for viewing and interacting with dynamic content using the Flash platform. Flash (and similar applications) use a technology akin to cookies to memorize parameters, preferences and uses of this content. However, Adobe Flash Player manages this information and your choices via an interface separate from that supplied by your browser.</p>
<p>If your terminal is likely to display content developed using the Flash platform, we suggest you access your Flash cookie management tools directly via <a href=\"https://www.adobe.com/\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=https://www.adobe.com/&amp;source=gmail&amp;ust=1586440160278000&amp;usg=AFQjCNG0RBwkz5h3bM8zbeaE4kMS5e2dPw\">https://www.adobe.com</a>.</p>
<p><strong>Google™ Cookies</strong></p>
<p><em>Stuff Google Wants to Make Sure You Know about Google’s Data Collection Technology</em></p>
<p><em>Google™ Maps API Cookies</em></p>
<p>Some features of our website and some services rely on the use of Google™ Maps API Cookies. Such cookies will be stored on your device.</p>
<p>When browsing this website and using the services relying on Google™ Maps API cookies, you consent to the storage, collection of such cookies on your device and to the access, usage and sharing by Google of the data collected thereby.</p>
<p>Google™ manages the information and your choices pertaining to Google™ Maps API Cookies via an interface separate from that supplied by your browser. For more information, please see <a href=\"https://www.google.com/policies/technologies/cookies/\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=https://www.google.com/policies/technologies/cookies/&amp;source=gmail&amp;ust=1586440160278000&amp;usg=AFQjCNFrcTIQ6P5GCZtlyCcCgqd8p9C5PQ\">https://www.google.com/<wbr />policies/technologies/cookies/</a><wbr />.</p>
<p><em>Google Analytics</em></p>
<p>We use Google Analytics, which is a Google service that uses cookies and other data collection technologies to collect information about your use of the website and services in order to report website trends.</p>
<p>You can opt out of Google Analytics by visiting <a href=\"http://www.google.com/settings/ads\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=http://www.google.com/settings/ads&amp;source=gmail&amp;ust=1586440160278000&amp;usg=AFQjCNEuORNIL9NaW8gKbQzJ0WwXj8Y1Yg\">www.google.com/<wbr />settings/ads</a> or by downloading the Google Analytics opt-out browser add-on at <a href=\"https://tools.google.com/dlpage/gaoptout\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=https://tools.google.com/dlpage/gaoptout&amp;source=gmail&amp;ust=1586440160278000&amp;usg=AFQjCNGDwxd6Ju1boTqV87wbXmwzbJd2xA\">https://tools.google.com/<wbr />dlpage/gaoptout</a>.</p>
<p><strong>How to contact us?</strong></p>
<p>If you have questions about this Cookie Policy, here’s how you can reach us:</p>
<p>yourmail@gmail.com</p>";
$post_status = "publish"; //publish, draft, etc
$post_type = "page"; // or whatever post type desired

/* Attempt to find post id by post name if it exists */
$found_post_title = get_page_by_title( $post_title, OBJECT, $post_type );
$found_post_id = $found_post_title->ID;

/**********************************************************
** Check If Page does not exist, if true, create a new post 
************************************************************/
if ( FALSE === get_post_status( $found_post_id ) ): 

      $post_args = array(
        'post_title' => $post_title,
        'post_type' => $post_type,
        'post_content'=> $post_content,
        'post_status'  => $post_status,
        //'post_author'  => get_current_user_id(),

        /* If you have meta fields to enter data into */ 
        'meta_input'   => array(
            'meta_key1' => 'my value',
            'meta_key2' => 'my other value',
        ),
      );      


      /* Add a new wp post into db, return it's post id */
      $returned_post_id = wp_insert_post( $post_args );  

      /* Update page template only if using "page" as the post_type */ 
	  update_post_meta( $returned_post_id, '_wp_page_template', 'my-page-template.php' ); 
	  add_post_meta($returned_post_id,'_wp_page_script_footer','',TRUE);
	  //update_post_meta( $returned_post_id, '_wp_page_script_footer', '<script> alert(656) </script>' ); 



endif;

		}

		function admin_init() {

			// register settings for sitewide script

			register_setting( 'wappaa-cookies-GDPR-and-PWA-app', 'wappaa-scripts', 'trim' );

			// add meta box to all post types
			foreach ( get_post_types( '', 'names' ) as $type ) {
				add_meta_box('post_meta', esc_html__('', 'wappaa-cookies-GDPR-and-PWA-app'), 'meta_setup', $type, 'normal', 'high');
			}

		}

		// adds menu item to wordpress admin dashboard
		function admin_menu() {
			$page = add_submenu_page( 'options-general.php', __('Wappaa tools', 'wappaa-cookies-GDPR-and-PWA-app'), __('Wappaa tools', 'wappaa-cookies-GDPR-and-PWA-app'), 'manage_options', __FILE__, array( &$this, 'load_panel' ) );
		 }

	
		function wp_footer() {
			
			if ( !is_admin() && !is_feed() && !is_robots() && !is_trackback() ) {
				

				$post_type = "page"; // or whatever post type desired
				$post_title = "Cookies-Policy";
	
				$found_post_title = get_page_by_title( $post_title, OBJECT, $post_type );
				$found_post_id = $found_post_title->ID;
	 			 //update_post_meta( $returned_post_id, '_wp_page_script_footer', '<script> alert(656) </script>' ); 
				$current_data = get_post_meta($found_post_id, '_wp_page_script_footer', TRUE);

				if ( $current_data != '' ) {
					
					echo $current_data, "\n";
				}
			}
			
		}
		
	

		
		function load_panel() {
				// Load options page
				require_once(WAPPAA_PLUGIN_DIR . '/inc/options.php');
		}
	}

	function meta_setup() {
		global $post;

		// using an underscore, prevents the meta variable
		// from showing up in the custom fields section
		$meta = get_post_meta($post->ID,'_inpost_head_script',TRUE);

		// instead of writing HTML here, lets do an include
		include_once(WAPPAA_PLUGIN_DIR . '/inc/meta.php');

		// create a custom nonce for submit verification later
		echo '<input type="hidden" name="wappaa_post_meta_noncename" value="' . wp_create_nonce(__FILE__) . '" />';
	}


	$wappaa_tools = new WappaaTools();
}
