<form action= "f4.php" method= "post">
<?php
$isPost=false;
$username="";
if(isset($_POST["btnClick2"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	//echo "button clicked";
}
?>
<form action="#" method="post">
<header>
<h1>USER LOGIN</h1>
</header>
<style>
body{
background-color:Cyan
}
</style> 
Username:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $username=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>
Password:<input type="password" id="pass" name="pass"><br><br>
Email Address:<textarea name="email" rowspan="3" colspan="30"></textarea>
<br><br>
<input type="submit" value="login" name="btnClick">
</form>