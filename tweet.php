<?php 
$con=mysqli_connect('127.0.0.1','root','','store');
$query=mysqli_query($con, "INSERT INTO post (text,img,name) VALUES ('" .$_POST['text']."' , 'images/" .$_FILES['img']['name']."' , '" .$_POST['nicks']."' )");
move_uploaded_file($_FILES['img']['tmp_name'], 'images/'.$_FILES['img']['name']);
header('Location:http://casualgram/login.php?id='.$_POST['id']);
 ?>