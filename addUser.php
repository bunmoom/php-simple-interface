<?php

$name = $_GET['name'];

// 连接数据库
$conn = mysqli_connect('localhost', 'root', 'root', 'test');

// 判断是否连接数据库成功
if (mysqli_connect_errno($conn)) {
  echo '连接数据库失败：' . mysqli_connect_error();
}

// 编写sql
$sql = 'insert user(name) values("'.$name.'")';
$jarr = array();
// 执行sql语句
if ($name !== '') {
  $result = mysqli_query($conn, $sql);
} else {
  $jarr['msg'] = '提交名称不能为空';
  $jarr['code'] = '-1';
  
}

if ($result == 1) {
  $jarr['msg'] = '添加成功';
  $jarr['code'] = '200';
}

echo json_encode($jarr);


// 释放结果集
mysqli_free_result($result);

// 关闭打开的数据库连接
mysqli_close($con);






























