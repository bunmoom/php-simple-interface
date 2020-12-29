<?php

include_once "./conn_head.php";

$name = $_GET['name'];

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

include_once "./conn_foot.php";






























