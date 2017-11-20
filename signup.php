<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<img src="img1.png" style="padding:0px;margin:0px"/>
<div style="margin:150px;margin-top:0px;background-color:white;padding-top:10px;border:4px solid black">
<form action="" id="form4" method="post" style="font-size:30px;padding:10px" onsubmit="return fun1()">
	Name:<input type="text" name="fname"/><br>
	Password:<input type="password" name="password"/><br>
	Email:<input type="email" name="email"/><br>
	DOB:<input type="date" name="DOB"/><br>

	
	<input type="submit" name="submit" value="submit"/>

</form>
<script>
function fun1(){
		
var fname =document.forms["form4"]["fname"].value;
var password=document.forms["form4"]["password"].value;
var email=document.forms["form4"]["email"].value;
var DOB=document.forms["form4"]["DOB"].value;


	if(password==""){alert("please fill all fields!");
return false;} 
	if(email==""){alert("please fill all fields!");
return false;}

 if(fname==""){alert("please fill all fields!");
return false;}
if(DOB==""){alert("please fill all fields!");
return false;}
}
</script>
<?php


$xml=new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load("login.xml");
if(!($xml)){
	$blogs=$xml->createElement("members");
	$xml->appendChild($members);
}
else{
	$members=$xml->firstChild;
}

if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$DOB=$_POST['DOB'];
$member=$xml->createElement("member");
$members->appendChild($member);
$fname=$xml->createElement("fname",$fname);
$member->appendChild($fname);
$email=$xml->createElement("email",$email);
$member->appendChild($email);
$password=$xml->createElement("password",$password);
$member->appendChild($password);
$DOB=$xml->createElement("DOB",$DOB);
$member->appendChild($DOB);

$xml->save("login.xml");
echo "<p style='font-family:cursive;font-size:20px;color:black;margin:30px'><b>Your are signed up SUCCESSFULLY!</b></p>";
}
?>
</div>
<div id="footer" style="margin-bottom:0px;position:fixed">
  <ul>
  <li><a class="active" href="exc.php">Home</a></li>
  <li><a href="contact.xml">Contact</a></li>
  <li><a href="about.xml">About</a></li>
  <li><a href="https://www.facebook.com/profile.php?id=100010262250364"><img src="fb.png" style="width:20px;height:20px"></a></li>
  <li><a href="https://www.linkedin.com/in/shivangi-goel-4a69b7148"><img src="link.png" style="width:20px;height:20px"></a></li>
</ul>
</div>
</body>
</html>