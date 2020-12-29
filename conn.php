<?php

/*
 * 连接数据库并获取数据
 */

// 连接数据库
$conn = mysqli_connect('localhost', 'root', 'root', 'test');

// 判断是否连接数据库成功
if (mysqli_connect_errno($conn)) {
  echo '连接数据库失败：' . mysqli_connect_error();
}

// 编写查询语句
$sql = 'SELECT * FROM user';

// 获取查询句柄
$result = mysqli_query($conn, $sql);

// 循环获取数据
$jarr = array();
if ($result->num_rows > 0) {
  while ($row=$result->fetch_assoc()) {
    //echo 'id:' . $row['id'] . ' name:' . $row['name'] . '<br/>';
    array_push($jarr, $row);
  }
}

// 数组转json
echo json_encode($jarr);

// 释放结果集
mysqli_free_result($result);

// 关闭打开的数据库连接
mysqli_close($con);