<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<img src="img1.png" style="padding:0px;margin:0px"/>
<div style="margin:150px;margin-top:0px;background-color:white;padding-top:10px;border:4px solid black">
<form  id="form1" method="post" action="">
	<input type="submit" name="submit" value="login" style="height:50px;width:150px;background-color:black;color:white;position:absolute;top:150px;right:180px"/>
</form>


<?php
 if(isset($_POST['submit'])){
 header('location:signin.php');
  }


 $x = simplexml_load_file('blog.xml');
 foreach ($x->blog as $blog) {
 	echo "<div style='background-color:white;margin:30px;margin-right:250px;background-color: #cce6ff;'>";
   
      echo "<p style='font-family:arial;font-size:20px;color:#ffcc00;margin:0px;margin-left:20px'><b>Title:".$blog->title."</b></p>";
       echo "<p style='font-family:cursive;font-size:15px;color:grey;margin:0px;margin-left:15px'>By ".$blog->name."</p>";
     echo "<p style='font-family: arial;font-size:15px;color:grey;margin:0px;margin-left:15px'>date:".$blog->date."</p>";
      echo "<div style='background-color:white;border:2px solid black;margin-left:10px'>";
        echo "<p style='font-family:Bookman;font-size:20px;margin:0px;margin-left:15px'>".$blog->content."</p>";
    echo "</div>";
    echo "</div>";
            }
?>
</div>
<div id="footer" margin-bottom:0px;>
  <ul>
  <li><a class="active" href="exc.php">Home</a></li>
  <li><a href="contact.xml">Contact</a></li>
  <li><a href="about.xml">About</a></li>
  <li><a href="https://www.facebook.com/profile.php?id=100010262250364"><img src="fb.png" style="width:20px;height:20px"></a></li>
  <li><a href="https://www.linkedin.com/in/shivangi-goel-4a69b7148"><img src="link.png" style="width:20px;height:20px"></a></li>
</ul>
<p>© 2017 The Blogger Union, Inc. All rights reserved</p>
</div>
</body>
</html>
