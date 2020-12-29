<?php
// 连接数据库
$conn = mysqli_connect('localhost', 'root', 'root', 'test');

// 判断是否连接数据库成功
if (mysqli_connect_errno($conn)) {
  echo '连接数据库失败：' . mysqli_connect_error();
}