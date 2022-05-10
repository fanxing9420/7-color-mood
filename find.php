<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="img/H.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta charset="utf-8">
<title>七彩心情-查信箱</title>
</head>
<!--<a href="/"  >   -->
<!--<img  src="https://img95.699pic.com/element/40135/5978.png_860.png" alt="" width="100px" height="70px">-->
<!--</a>-->
<body>
<div class="divs">
<div class="imgs"><a href="/"><img src="img/mail.png" width="25%"></a>
</div>
</div>
</div>
<div style="padding:60px;border:1px solid #96c2f1;">
    <!--background:#eff7ff-->
<form action="find.php" method="post" name="tijiao">
<style>
body
{
background-image:url('https://tse1-mm.cn.bing.net/th/id/R-C.71adf451aa5c68d0371b230c6217d2b7?rik=OKAGkNOtAr9lxQ&riu=http%3a%2f%2fwww.obzhi.com%2fwp-content%2fuploads%2f2021%2f01%2fyueguang.jpeg&ehk=XtHU3ltaGog%2fJIR0bnaI41E%2bhlOPPbrVQws7Z7QtxzE%3d&risl=&pid=ImgRaw&r=0');
background-size:cover;  
background-attachment:fixed; 
}
</style>
<input type="text" name="name" placeholder="请输入姓名或者暗号查看留言"  style="background-color:transparent; border:0px; height:30px; font-size:18px; width:100%"/>
<center>
<hr>
<input type="submit" name="gos" class="css_btn_class" value="查询留言">
</form>
</center>
</div>
</body>
<center style="color:pink;font-size:30px;">-----留言记录-----</center>
<?php
    if($_POST["gos"]){
        if($_POST["name"]=="")
            {
             echo "<script>alert(\"难道这个人没有名字？\")</script>";
            }
         else
         {
            include_once("database.php");
            $sqlcx="select * from itmua where name='".$_POST["name"]."'";
            $sqlcxgo=mysqli_query($conn,$sqlcx);
            if($sqlcxgo>0)
            {
                while($myrow=mysqli_fetch_array($sqlcxgo))
                {
                    echo '<div style="padding:30px;border-radius:25px;;background:#ffffff";>';
                    echo "时间:".$myrow['time']."<br><hr>";
                    $atte = $myrow['text'];
                    echo htmlentities($atte,ENT_QUOTES,"UTF-8");
                    echo "</div></p>";
                }
            
            }
           
         } 
    }
?>


<style type="text/css">
.css_btn_class {
	font-size:20px;
	font-family:KaiTi;
	font-weight:normal;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:50px;
	border:0px solid #dcdcdc;
	padding:15px 80px;
	text-decoration:none;
	/*background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #f9f9f9), color-stop(100%, #e9e9e9) );*/
	/*background:-moz-linear-gradient( center top, #f9f9f9 5%, #e9e9e9 100% );*/
	/*background:-ms-linear-gradient( top, #f9f9f9 5%, #e9e9e9 100% );*/
	/*filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9');*/
	/*background-color:#f9f9f9;*/
	/*color:#666666;*/
	display:inline-block;
	text-shadow:1px 0px 0px #ffffff;
 	-webkit-box-shadow:inset 1px 1px 14px 0px #ffffff;
 	-moz-box-shadow:inset 1px 1px 14px 0px #ffffff;
 	box-shadow:inset 1px 1px 14px 0px #ffffff;
}
/* 按钮 */
</style>
<style>
    .divs .imgs{
        display: inline-block;
        vertical-align: middle;
    }
    .divs .infos{

                position: absolute;

                top: 100px;

                left: 110px;

            }
</style>