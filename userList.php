<?php

include_once "./conn_head.php";

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

include_once "./conn_foot.php";