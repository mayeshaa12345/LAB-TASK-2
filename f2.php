
<?php
echo "Welcome to f2.php<br>";
echo "My username is: ".$_POST["uname"]."<br>";
echo "My password is: ".$_POST["pass"]."<br>";
echo "Gender: ".$_POST["gender"]."<br>";
echo "Skills: ";
foreach($_POST["skills"] as $b)
{
	echo $b." ";
}
echo "Department: ".$_POST["dept"]."<br>";
echo "Address: ".$_POST["address"]."<br>";
echo "City/Town ".$_POST["city/town"]."<br>";
echo "Country: ".$_POST["country"]."<br>";
echo "Nationality: ".$_POST["nationality"]."<br>";
echo "Phone Number: ".$_POST["number"]."<br>";
echo "Email Address: ".$_POST["email"]."<br>";
echo "Marital Status: ".$_POST["marital"]."<br>";
echo "Religion: ".$_POST["religion"]."<br>";
echo "Hobby: ".$_POST["hobby"]."<br>";
?>