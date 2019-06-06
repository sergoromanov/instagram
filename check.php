<?php  
$mail=$_POST['mail'];
$pass=$_POST['pass'];
$con=mysqli_connect('127.0.0.1','root','','store');
$query=mysqli_query($con, "SELECT * FROM instagram WHERE email='$mail' AND password='$pass'" );
if($query->num_rows == 1){
	$result=$query->fetch_assoc();
	header('Location:http://casualgram/login.php?id='.$result['id']);
}
else{
	$txt= 'Нет такого пользователя';
	header('Location:http://casualgram/autorisation.php?txt='.$txt);
}

?>