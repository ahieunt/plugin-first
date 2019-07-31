<?php 


//add_filter ( $tag, $function_to_add, $priority = 10, $accepted_args = 1 )

// Hàm bổ sung chữ freetuts.net vào chuỗi
function add_string_to_title($title)
{
    return ' - ' . $title;
}
 
// Đưa hàm add_string_to_title vào hook filter the_title
add_filter('the_title', 'add_string_to_title', 10, 1);


// Hàm bổ sung chữ freetuts.net vào chuỗi
function add_string_to_excerpt($content)
{
    $email = get_option('mailer_gmail_username');
    $pass = get_option('mailer_gmail_password');
    return $email. ' - ' .$pass. ' - ' .	$content;
}
 
// Đưa hàm add_string_to_title vào hook filter the_title
add_filter('the_content', 'add_string_to_excerpt', 10, 1);

?>