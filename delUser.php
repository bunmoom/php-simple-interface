<?php

$id = $_GET['id'];

// 连接数据库
$conn = mysqli_connect('localhost', 'root', 'root', 'test');

// 判断是否连接数据库成功
if (mysqli_connect_errno($conn)) {
  echo '连接数据库失败：' . mysqli_connect_error();
}

// 编写sql
$sql = 'delete from user where id='.$id;
$jarr = array();
// 执行sql语句
if ($id !== '') {
  $result = mysqli_query($conn, $sql);
} else {
  $jarr['msg'] = '提交id不能为空';
  $jarr['code'] = '-1';
}

if ($result == 1) {
  $jarr['msg'] = '删除成功';
  $jarr['code'] = '200';
} else {
  $jarr['msg'] = '删除失败';
  $jarr['code'] = '-1';
}

echo json_encode($jarr);


// 释放结果集
mysqli_free_result($result);

// 关闭打开的数据库连接
mysqli_close($con);






























