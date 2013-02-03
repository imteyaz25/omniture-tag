<?php
/*
Plugin Name: Omniture tag
Plugin URI: http://www.facebook.com/eimteyaz 
Description: Plugin for displaying omniture tag in footer
Author: Imteyaz Ahmad
Version: 1.0
Author email: eimteyaz@gmail.com
*/
?>
<?php
function omniture_footer(){
	$omniture_code = get_option('omniture_code');
	print $omniture_code; 

}
add_action('wp_footer','omniture_footer');

function omniture_admin_actions(){
	add_options_page('Omniture code interface','Omniture interface',1,'omniture-code','omniture_admin');

}
add_action('admin_menu','omniture_admin_actions');

function omniture_admin(){
	include('omniture-code.php');
}

?>
