<?php 

// Hàm bổ sung chữ freetuts.net vào chuỗi
function send_email_public($id, $post)
{
    if ($post->post_status == 'public'){
        // Thực hiện gửi email
        // Vì là ví dụ nên mình không gửi email
    }
}
 
// Đưa hàm add_string_to_title vào hook filter the_title
add_action('save_post', 'send_email_public', 11, 2);

 ?>