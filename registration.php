<?php 
$mail=$_POST['mail'];
$name=$_POST['name']; 
$nick=$_POST['nick'];
$pass=$_POST['pass'];
$con=mysqli_connect('127.0.0.1','root','','store');
$query=mysqli_query($con, "INSERT INTO instagram(email,name,username,password) VALUES('" .$mail."', '" .$name."', '" .$nick."','".$pass."')");
mail($mail, "Регистрация на сайте instagram.com", "Вы успешно зарегистрировались на сайте instagram.com. Ваш логин:".$name.". Ваш пароль".$pass.""); 


 ?>