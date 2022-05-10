<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="img/H.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta charset="utf-8">
<title>七彩心情-投封信</title>
</head>
<body>
<div class="divs">
<div class="imgs"><a href="/"><img src="img/mail.png" width="25%"></a>
</div>
</div>
</div>
<div style="padding:60px;border:1px solid #96c2f1;">
    <!--background:#eff7ff-->
<form action="submit.php" method="post" name="tijiao">
<font size="3px">
</font>
<input type="text" name="name" placeholder="Ta的姓名或者暗号"  style="background-color:transparent; border:0px; height:30px; font-size:18px; width:100%"/>
<hr>
<textarea name="text" placeholder="你想要留言的内容"  style="background-color:transparent; border:0px; height:100px; font-size:18px; width:100%"/></textarea>
<span onmouseover="" style="font-size:15px;color:green">(为了防止重名，可以加上给某省某市的某某哦～比如：江苏南京的张伟）</span>
<style>
body
{
background-image:url('https://tse1-mm.cn.bing.net/th/id/R-C.71adf451aa5c68d0371b230c6217d2b7?rik=OKAGkNOtAr9lxQ&riu=http%3a%2f%2fwww.obzhi.com%2fwp-content%2fuploads%2f2021%2f01%2fyueguang.jpeg&ehk=XtHU3ltaGog%2fJIR0bnaI41E%2bhlOPPbrVQws7Z7QtxzE%3d&risl=&pid=ImgRaw&r=0');
background-size:cover;  
background-attachment:fixed; 
}
</style>
<br><center>
<hr>
<input type="submit" name="gos" class="css_btn_class" value="提交留言"><br><br><br>
</form>
</center>
</div>
</body>
<?php
if($_POST["gos"]){
    if($_POST["name"]==""|$_POST["text"]=="")
    {
    echo "<script>alert(\"请填写完整哦，不可以留空！\")</script>";
    }
    else
    {
        $id=rand(1,999999);
        $name=$_POST["name"];
        $time=date('Y-m-j');
        $text=$_POST["text"];
        include_once("database.php");
        $sqlcx="insert into itmua values('$id','$name','$text','$time')";
        $sqlcxgo=mysqli_query($conn,$sqlcx);
        if($sqlcxgo)
        {
            echo "<script>alert(\"恭喜你留言成功！\")</script>";
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
	color:#666666;
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