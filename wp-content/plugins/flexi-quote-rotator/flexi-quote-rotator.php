<?php
/*
Plugin Name: Flexi Quote Rotator
Plugin URI: http://sww.co.nz/wordpress-plugins/flexi-quote-rotator/
Description: Flexi quote rotator allows you to add quotations/testimonies to your site using a shortcode or php snippet in template or as a widget. Flexible styling and settings options.
Version: 0.9.3
Author: Aidan Curran
Author URI: http://sww.co.nz/

---------------------------------------------------------------------
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
---------------------------------------------------------------------
*/

require_once('classes/quote-rotator.class.php');
require_once('classes/quote-rotator-management.class.php');


if( class_exists('QuoteRotator') && class_exists('QuoteRotatorManagement') ) :

$quoteRotator = new QuoteRotator();
$management = new QuoteRotatorManagement();

if( isset($quoteRotator) && isset($management) )
{

	function process_post() {
		global $quoteRotator, $management;

      if($_GET['action']=="delete-quote" && check_admin_referer('fqr-nonce'))
   	{
   		$management->deleteQuote($_GET['id']);
   	}
   
   	if($_POST['addQuote'] == 1 && check_admin_referer('fqr-nonce'))
   	{
   		$management->addQuote($_POST['quote'], $_POST['author']);
   	}
   	
   	if($_POST['editQuote'] == 1 && check_admin_referer('fqr-nonce'))
   	{
   		$management->editQuote($_POST['quote'], $_POST['author'], $_POST['id']);
   	}
	}
   
	function widgetInit()
	{
		global $quoteRotator, $management;
		
		if( !function_exists('register_sidebar_widget') )
		{
			return;
		}
		
		register_sidebar_widget('Flexi Quote Rotator', array(&$quoteRotator, 'displayWidget'));
		register_widget_control('Flexi Quote Rotator', array(&$management, 'displayWidgetControl'));
	}
	
	function managementInit()
	{
		global $management;
		
		wp_enqueue_script( 'listman' );
		add_management_page('Quotes', 'Quotes', 5, basename(__FILE__), array(&$management, 'displayManagementPage'));
      add_options_page('Flexi Quote Rotator Options', 'Testimonials', 10, basename(__FILE__), array(&$management, 'displayOptionsPage'));
	}

   function includejquery()
   {
      wp_enqueue_script('jquery');   
   }
   	
   // [quoteRotator [title=""] [delay=""] [fade=""]]
   function quoteRotator_func($atts) {
   	global $quoteRotator;

      extract( shortcode_atts( array(
         'title' => '',
         'delay' => '',
         'fade' => '',
         'fadeout' => '',
         ), $atts ) );
      return $quoteRotator->getQuoteCode($title, $delay, $fade, $fadeout);
   }
   add_shortcode('quoteRotator', 'quoteRotator_func');
   
   
   function quoteRotator($title=null, $delay=null, $fadeDuration=null, $fadeoutDuration=null) {
      global $quoteRotator;
      echo $quoteRotator->getQuoteCode($title, $delay, $fadeDuration, $fadeoutDuration);
   }
   
	add_action('activate_flexi-quote-rotator/flexi-quote-rotator.php', array(&$quoteRotator, 'createDatabaseTable'));
	add_action('deactivate_flexi-quote-rotator/flexi-quote-rotator.php', array(&$quoteRotator, 'deleteDatabaseTable'));
	add_action('init', 'includejquery');
   add_action('init', 'process_post');
   add_action('wp_head', array(&$quoteRotator, 'addHeaderContent'));
	add_action('admin_menu', 'managementInit');
	add_action('plugins_loaded', 'widgetInit');
}

endif;
?>
