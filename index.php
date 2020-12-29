<?php
// 存储cookie
//setcookie('test', time());
// 获取cookie
//echo $_COOKIE['test'];
// 删除cookie
//setcookie('test', '', time()-1);

// 设置session
//$_SESSION['test'] = time();
// 获取session
//echo $_SESSION['test'];
// 删除session
//unset($_SESSION['test']);
// 删除全部session
//session_destroy();

// 读取文件
//$content = file_get_contents('./test.txt');
//echo $content;

// 判断文件是否存在
//if (file_exists('./test1.txt')) {
//  echo '文件存在';
//} else {
//  echo '文件不存在';
//}

// 判断文件是否存在
// if (is_file('./test1.txt')) {
//   echo '文件存在';
// } else {
//   echo '文件不存在';
// }

// 判断文件是否可读
// if (is_writeable('./test.txt')) {
//   echo '文件可写';
// } else {
//   echo '文件不可写';
// }

// 判断文件是否可读
// if (is_readable('./test.txt')) {
//   echo '文件可读';
// } else {
//   echo '文件不可读';
// }

// 获取文件所有者
// echo fileowner('./test.txt');
// echo "<br/>";
// 获取文件创建时间
// echo filectime('./test.txt');
// echo "<br/>";
// 获取文件修改时间
// echo filemtime('./test.txt');
// echo "<br/>";
// 获取文件访问时间
// echo fileatime('./test.txt');

// 获取文件大小
// echo filesize('./test.txt');

// 写入内容到文件
// file_put_contents('./test.txt', 'test222222222222222');

// 删除文件
// unlink('./test.txt');

// 删除文件夹
// rmdir('./test');

// 抛出一个异常
// try {
//   if (!file_exists('./test.txt')) {
//     throw new Exception("文件不存在");
//   }
// } catch (Exception $e) {
//   echo $e->getMessage();
//   echo '<br/>';
//   echo $e->getTrace();
//   echo '<br/>';
//   echo $e->getTraceAsString();
// }

// 连接数据库
// try {
//   $link = mysql_connect('127.0.0.1', 'root', 'root');
//   var_dump($link);
// } catch (Exception $e) {
//   $e->getMessage();
// }
// $link = mysqli_connect('localhost', 'root', 'root');
// $link = mysql_connect('localhost', 'root', 'root');

// $conn = new mysqli('localhost', 'root', 'root');
// // 检测连接
// if ($conn->connect_error) {
//   die("连接失败: " . $conn->connect_error);
// } else {
//   echo '连接成功';
// }

// 创建连接
// $conn = mysqli_connect('localhost', 'root', 'root');
// 检测连接
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo '连接成功';

// // $dsn = 'mysql:dbname=mysql;host=localhost';
// // $user = 'root';
// // $password = 'root';
// // $dbh = new PDO($dbn,$user,$password);

// // 选择数据库
// mysqli_select_db('test', $conn);

// // 设置字符编码
// mysqli_query("set names 'utf8'");
// // 获取查询句柄
// $res = $conn->query('select * from user limit 1');
// $sql = "select * from user limit 1";
// $res = mysqli_query($sql,$con);
// print_r(mysqli_fetch_assoc($res));
//$row = $res->fetch_assoc();
//print_r($res);
// echo $row;
// if ($res->num_rows > 0) {
//   // 输出数据
//   while($row = $res->fetch_assoc()) {
//       echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
//   }
// } else {
//   echo "0 结果";
// }

// $con = mysql_connect("localhost", "root", "");
// if (!$con)
// {
//   die('Could not connect: ' . mysql_error());
// }
// echo $con;
// exit();
// $db_selected = mysql_select_db("test", $con);
// $sql = "SELECT * from user";
// $result = mysql_query($sql,$con);
// print_r(mysql_fetch_assoc($result));

// mysql_close($con);

// $mysqli = new mysqli("localhost", "root", "root");
// if(!$mysqli)  {
//     echo"database error";
// }else{
//     echo"php env successful";
// }
// $result = mysqli_query($mysqli,"SELECT * FROM user");
// $row = mysqli_fetch_array($result);
// printf('1',$row['name']);
// // 释放结果集
// mysqli_free_result($result);
// $mysqli->close($mysqli);

// 假定数据库用户名：root，密码：123456，数据库：RUNOOB 
$con=mysqli_connect("localhost","root","root","test"); 
if (mysqli_connect_errno($con)) 
{ 
    echo "连接 MySQL 失败: " . mysqli_connect_error(); 
} 
 
$sql="SELECT name FROM user";
$result=mysqli_query($con,$sql);
 
// 数字数组
// $row=mysqli_fetch_array($result,MYSQLI_NUM);
// printf ("%s : %s",$row[0],$row[1]);
 
// 关联数组
// $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// echo $result->num_rows;
// echo $result->fetch_assoc();
// var_dump($result->fetch_assoc());
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 结果";
}
// printf ("%s",$row["name"]);
 
// 释放结果集
mysqli_free_result($result);
 
mysqli_close($con);
?>