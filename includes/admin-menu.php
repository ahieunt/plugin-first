<?php 

// add menu cha

function add_admin_menu()
{
    add_menu_page (
            'Plugin Options',  //Tieeu de
            'Plugin Options', 	// Ten hien thi
            'manage_options', 	// phan quyen
            'plugin-options', 	// slug
            'show_plugin_options', // noi dung hien thi
            '', 					//icon
            '2'						// vi tri thu 2 tu tren
    );
}
 
function show_plugin_options()
{
    echo '<h1>Đây là trang Plugin Options</h1>';
}

add_action('admin_menu', 'add_admin_menu');



// add menu con ben trong menu cha

function add_admin_sub_menu()
{
    // add menu con General Settings
    add_submenu_page (
    		'plugin-options',	// url cha
            'General Settings',  //Tieeu de
            'General Settings', 	// Ten hien thi
            'manage_options', 	// phan quyen
            'general-settings', 	// slug
            'show_general_setting_page', // noi dung hien thi
    );

    // add menu con Advance Settings
    add_submenu_page (
    		'plugin-options',	// url cha
            'Advance Settings',  //Tieeu de
            'Advance Settings', 	// Ten hien thi
            'manage_options', 	// phan quyen
            'advance-settings', 	// slug
            'show_advance_setting_page', // noi dung hien thi
    );
}
 
function show_general_setting_page()
{
    echo '<h1>Đây là trang General Settings</h1>';
}

function show_advance_setting_page()
{
    echo '<h1>Đây là trang Advance Settings</h1>';
}

add_action('admin_menu', 'add_admin_sub_menu');



 ?>