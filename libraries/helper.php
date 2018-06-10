<?php
// Hàm tạo URL
function base_url($uri = ''){
    return 'http://localhost:8081'.$uri;
}
// Hàm redirect
function redirect($url){
    header("Location:{$url}");
    exit();
}
// Hàm lấy value từ $_POST
function input_post($key){
    return isset($_POST[$key]) ? trim($_POST[$key]) : '';
}
 
// Hàm lấy value từ $_GET
function input_get($key){
    return isset($_GET[$key]) ? trim($_GET[$key]) : '';
}
 
// Hàm kiểm tra submit
function is_submit($key){
    return (isset($_POST['request_name']) && $_POST['request_name'] == $key);
}
 
// Hàm show error
function show_error($error, $key){

        echo "<script type='text/javascript'>alert('$error[$key]');</script>";	
}
?>