<?php

include_once "./conn_head.php";

$id = $_GET['id'];

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


include_once "./conn_foot.php";






























