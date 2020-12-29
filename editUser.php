<?php

include_once "./conn_head.php";

$id = $_GET['id'];
$name = $_GET['name'];

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

include_once "./conn_foot.php";






























