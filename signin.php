<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<img src="img1.png" style="padding:0px;margin:0px"/>
<div style="margin:150px;margin-top:0px;background-color:white;padding-top:10px;border:4px solid black">
<form action="" id="form3" method="post" style="font-size:30px;padding:10px">
	Name:<input type="text" name="fname"/><br>
	Password:<input type="password" name="password"/><br>
	Email:<input type="email" name="email"/><br>
	
	<button type="button" name="login" value="login" onclick="fun1()">login</button>
</form>
<form action="" id="form2" style="display:none;font-size:30px;padding:10px" method="post" onsubmit="return validate()">
	
	Editor's Name:<input type="text" name="name"/><br>
	Date:<input type="date" name="date"/><br>
	Title:<input type="text" name="title"/><br>
	Content:<br>
	<textarea name="content" rows="10" cols="100"></textarea><br> 
	<input type="submit" name="submit" value="submit"/>
</form>

<script>
	function fun1(){
		
var fname =document.forms["form3"]["fname"].value;
var password=document.forms["form3"]["password"].value;
var email=document.forms["form3"]["email"].value;
	if(password==""){alert("please fill all fields!");
return false;} 
	if(email==""){alert("please fill all fields!");
return false;}

 if(fname==""){alert("please fill all fields!");
return false;}
if(!(fname=="") && !(password=="") && !(email=="")){
		document.getElementById("form2").style.display="block";
		document.getElementById("form3").style.display="none";}
	}
	function validate(){

var name=document.forms["form2"]["name"].value;
var date=document.forms["form2"]["date"].value;
var title=document.forms["form2"]["title"].value;
var content=document.forms["form2"]["content"].value;
if (name==""){
	alert("please fill all fields!");
return false;} 

  if(date==""){alert("please fill all fields!");
return false;}
   if(title==""){alert("please fill all fields!");
return false;}
    if(content=="") {
alert("please fill all fields!");
return false;}
}
</script>


<?php

$xml=new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load("blog.xml");
if(!($xml)){
	$blogs=$xml->createElement("blogs");
	$xml->appendChild($blogs);
}
else{
	$blogs=$xml->firstChild;
}

if(isset($_POST['submit']))
{
	$fname=$_POST['name'];
	$date=$_POST['date'];
	$title=$_POST['title'];
	$content=$_POST['content'];
$blog=$xml->createElement("blog");
$blogs->appendChild($blog);
$name=$xml->createElement("name",$fname);
$blog->appendChild($name);
$date=$xml->createElement("date",$date);
$blog->appendChild($date);
$title=$xml->createElement("title",$title);
$blog->appendChild($title);
$content=$xml->createElement("content",$content);
$blog->appendChild($content);

$xml->save("blog.xml");
echo "<p style='font-family:cursive;font-size:20px;color:black;margin:30px'><b>Your blog is created SUCCESSFULLY!</b></p>";
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