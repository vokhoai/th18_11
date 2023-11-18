<?php
$servername = "localhost"; // Thay đổi nếu cần
$username = "root";
$password = "";
$dbname = "th18_11"; // Tên cơ sở dữ liệu bạn đã tạo
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}
?>
