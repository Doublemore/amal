<?php
//连接数据库
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','passwd');
define('DB_NAME','Users');

$connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
if(!$connect){
  die('数据库连接失败，错误信息：'.mysqli_connect_error());
}

$sql = "insert into user(
  username,users_tories,passwd,Charactername,institution,
  userconfiguiation,enable,lognum,lastlogtime,create_personnel,
  create_date,updata_personnel,updata_time)
  values(
    'jack','haha','abc12345','marry','QQ','qweqwe','no',30,now(),'mark',now(),
    'mark',now()
);";

$result = $connect->query($sql);

echo "$sql </br>";
?>
