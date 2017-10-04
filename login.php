<html>
<head>
<title>
Login Page
</title>
<script> 
function go() 
{ 
	window.location="dashboard.php"; 
} 
</script>
<style>
h1 {
    background-image: url(http://www.intrawallpaper.com/static/images/background-618226_640.png);
    background-position: right;
}
div {
    background-image: url(https://s-media-cache-ak0.pinimg.com/736x/05/e4/37/05e43779a9aaec197b9ddec05f5c2fb0.jpg);
}
p {
    background-color: red;
    background: url(https://www.facebook.com/photo.php?fbid=896878093745774&set=a.126925107407747.17637.100002707748221&type=3&theater)
    background-position: right;
}
body {
    background : url(https://s-media-cache-ak0.pinimg.com/originals/c4/d2/e5/c4d2e5787b567ea31a2eb4101595053d.jpg);
    background-size: 1600px 750px;
    background-repeat: no-repeat;
}
</style>
</head>
<body>
<?php
?>
<center>
<font face = "cursive" size = "10" color = "Red" > 
LOGIN PAGE 
</font>
</center>
<br>
<br>
<form action = "dashboard.php" method = "post" align = "middle">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Name: 
<input type = "text" name = "fname">
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Email: 
<input type = "text" name = "email">
<br>
<br>
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<input type = "reset" name = "reset" value = "Reset">
<input type = "submit" name = "submit" value = "Submit" onclick = "go()">
</form>
</body>
</html>