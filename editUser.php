<?php

$id = $_GET['id'];
$name = $_GET['name'];

// 连接数据库
$conn = mysqli_connect('localhost', 'root', 'root', 'test');

// 判断是否连接数据库成功
if (mysqli_connect_errno($conn)) {
  echo '连接数据库失败：' . mysqli_connect_error();
}

// 编写sql
$sql = 'update user set name="'.$name.'" WHERE id='.$id;

$jarr = array();
// 执行sql语句
if ($name !== '' && $id !== '') {
  $result = mysqli_query($conn, $sql);
} else if ($name == '') {
  $jarr['msg'] = '提交名称不能为空';
  $jarr['code'] = '-1';
} else {
  $jarr['msg'] = '提交id不能为空';
  $jarr['code'] = '-1';
}

if ($result == 1) {
  $jarr['msg'] = '修改成功';
  $jarr['code'] = '200';
}

echo json_encode($jarr);


// 释放结果集
mysqli_free_result($result);

// 关闭打开的数据库连接
mysqli_close($con);






























