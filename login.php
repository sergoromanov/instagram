<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
$id=$_GET['id'];
$con=mysqli_connect('127.0.0.1','root','','store');
$query=mysqli_query($con, "SELECT * FROM instagram WHERE id='$id'");
$result=$query->fetch_assoc();
$res=$result['username'];
$ress=$result['id'];
 ?>
 <div class="container">
 	<div class="row">
 		<div>
 			<img src="images/avatar.png" class="w-50">
 		</div>
 		<div>
 <h2 style="font-size:40px"><?php echo $result['name']?></h2>
 <h2 style="font-size:40px"><?php echo $res?></h2>
 </div>
 	</div>
 <h3>Опубликовать новый инста пост:</h3>
 <form action="tweet.php" enctype="multipart/form-data" method="POST">
 	<input type="hidden" name="nicks" value="<?php echo $res ?>">
 	<input type="hidden" name="id" value="<?php echo $ress?>">
 	<input name="img" type="file">
 	<input type="" name="text">
 	<button >Добавить</button>
 </form>
 <?php $query=mysqli_query($con, "SELECT * FROM post ORDER BY id DESC");?>
 <?php for($i = 0; $i < $query->num_rows; $i++) { ?>
 	<?php  $post=$query->fetch_assoc(); ?>
 <div class="mt-5 border border-box w-75">
 	<div class="row ml-3">
 	<img src="images/avatar.png" style="height:50px">
 	<h3 class="ml-2"><?php echo $post['name']?></h3>
 	</div>
 	<img src="<?php  echo $post['img']?>" class="w-50">
 	<strong style="font-size:20px; display:block"><?php echo $post['name']?></strong>
 	<span style="font-size:20px; display:block"><?php echo $post['text'] ?></span>
 	</div>
 <?php } ?>
 </div>
</body>
</html>