<?php
/*
 * Add my new menu to the Admin Control Panel
 */
 
// Hook the 'admin_menu' action hook, run the function named 'wpfc_Add_My_Admin_Link()'
add_action( 'admin_menu', 'wpfc_Add_My_Admin_Link' );
 
// Add a new top level menu link to the ACP
function wpfc_Add_My_Admin_Link()
{
      add_menu_page(
        'My First Page', // Title of the page
        'My First Plugin', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'plugin-teste-wpfc/includes/wpfc-page.php'
    );
  }

?>