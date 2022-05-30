<?php
include('connection.php');
?>
<html>
<head>
<title>
Form
</title>
<style>
#connect{
  font-weight: bold;
  font-size: 30px;
}
</style>
</head>
<body>
<div id="connect">Connecting...</div>
<form method="POST" action="">
Name: <input id="name" type="text" name="name" required/>
<br>
Username: <input id="user" type="text" name="username" required/>
<br>
Password: <input type="password" id="pswd" name="password" required/>
<br>
Gmail: <input type="email" id="mail" name="email" required/>
<br>
Phone number: <input type="number" id="phone" name="phone" min="0" required/>
<br>
country: <input type="text" id="country" name="country" required/>
<br>
Birth date: <input type="date" id="date" name="date" required/>
<br>
<input type="submit" id="submit" name="submit" value="submit"/>
</form>
<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$mail=$_POST['email'];
$phone=$_POST['phone'];
$country=$_POST['country'];
$date=$_POST['date'];
$query="INSERT INTO `database` VALUES ('','$name','$username','$password','$mail','$phone','$country','$date')";
$result=mysqli_query($con,$query);
if($result){
include("submission.php");
}else{
include("submit.php");
};
};
?>
</body>
</html>