<?php
$conn=mysqli_connect("localhost",  //数据库地址
"kl_cc",            // 数据库账号 
"inBLWnZEXiRytrr2", //数据库密码 数据库名
"kl_cc",        //数据库密码 数据库名
"3306");      //端口号

if(!$conn){
echo "数据库连接失败";
}
