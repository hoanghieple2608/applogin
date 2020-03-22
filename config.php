<?php

/**
 * khai báo các hằng số để kết nối đến csdl
 */
define("DB_SERVER", "localhost");
define("DB_SERVER_USERNAME", "root");
define("DB_SERVER_PASSWORD", "");
define("DB_SERVER_NAME", "demoapplogin");

/**
 * mysqli_connect() kết nối đến csdl
 */
$connection = mysqli_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_SERVER_NAME);

/**
 * Kiểm tra xem kết nối đến csdl có thành công hay ko
 * nếu không thành công thì ngắt chương trình bằng câu lệnh die()
 */
if ($connection == false) {
    die("ERROR không thể kết nối đến CSDL ". mysqli_connect_error());
}