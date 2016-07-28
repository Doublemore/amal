<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','amal');
define('DB_NAME','Users');

$connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
if(!$connect){
  die('数据库连接失败，错误信息：'.mysqli_connect_error());
}

$sql = "select * from user";
$result = $connect->query($sql);
if($result === false){//执行失败
    echo $connect->error;
    echo $connect->errno;
}
echo
"<table border=1>
<tr>
<th>username</th>
<th>users_tories</th>
<th>passwd</th>
<th>Charactername</th>
<th>institution</th>
<th>userconfiguiation</th>
<th>enable</th>
<th>lognum</th>
<th>lastlogtime</th>
<th>create_personnel</th>
<th>create_date</th>
<th>updata_personnel</th>
<th>updata_time</th>
</tr>";





//行数
 // echo $result->num_rows;
//列数 字段数
 // echo $result->field_count;
//获取字段信息
// $field_info_arr = $result->fetch_fields();
// echo $field_info_arr;
//移动记录指针
//$result->data_seek(1);//0 为重置指针到起始
//获取数据
while($row = $result->fetch_assoc()){

    echo "<tr><td>".$row['username']."</td>";
    echo "<td>".$row['users_tories']."</td>";
    echo "<td>".$row['passwd']."</td>";
    echo "<td>".$row['Charactername']."</td>";
    echo "<td>".$row['institution']."</td>";
    echo "<td>".$row['userconfiguiation']."</td>";
    echo "<td>".$row['enable']."</td>";
    echo "<td>".$row['lognum']."</td>";
    echo "<td>".$row['lastlogtime']."</td>";
    echo "<td>".$row['create_personnel']."</td>";
    echo "<td>".$row['create_date']."</td>";
    echo "<td>".$row['updata_personnel']."</td>";
    echo "<td>".$row['updata_time']."</td></tr>";
}
    echo "</table>";
//也可一次性获取所有数据
//$result->data_seek(0);//如果前面有移动指针则需重置
// $data = $result->fetch_all(MYSQLI_ASSOC);
?>
