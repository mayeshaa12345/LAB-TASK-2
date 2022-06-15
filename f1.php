<form action= "f2.php" method= "post">
<?php
$isPost=false;
$username="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	//echo "button clicked";
}
?>
<form action="#" method="post">
<header>
<h1>USER REGISTRATION</h1>
</header>
<style>
body{
background-color:Moccasin
}
</style> 
Username:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $username=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>
Password:<input type="password" id="pass" name="pass"><br><br>
Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others
<br><br>
Skills:<input type="checkbox" name="skills[]" value="C">C<br><br>
<input type="checkbox" name="skills[]" value="C++">C++<br><br>
<input type="checkbox" name="skills[]" value="C#">C#<br><br>
<input type="checkbox" name="skills[]" value="Python">Python
<br><br>
Department:<select name="dept">
<option value="FST">FST</option>
<option value="FBA">FBA</option>
<option value="FASS">FASS</option>
</select><br><br>
Address:<textarea name="address" rowspan="3" colspan="30"></textarea>
<br><br>
City/Town:<textarea name="city/town" rowspan="3" colspan="30"></textarea>
<br><br>
Country:<textarea name="country" rowspan="3" colspan="30"></textarea>
<br><br>
Nationality:<textarea name="nationality" rowspan="3" colspan="30"></textarea>
<br><br>

Phone Number:<textarea name="number" rowspan="3" colspan="30"></textarea><br><br>

Email Address:<textarea name="email" rowspan="3" colspan="30"></textarea>
<br><br>

Marital Status:<input type="radio" name="marital" value="Married">Married
<input type="radio" name="marital" value="Unmarried">Unmarried
<input type="radio" name="marital" value="Others">Others
<br><br>

Religion:<input type="radio" name="religion" value="Islam">Islam
<input type="radio" name="religion" value="Hinduism">Hinduism
<input type="radio" name="religion" value="Buddhism">Buddhism
<input type="radio" name="religion" value="Christian">Christian
<br><br>

Hobby:<textarea name="hobby" rowspan="3" colspan="30"></textarea>
<br><br>

<input type="submit" value="Click" name="btnClick">
</form>