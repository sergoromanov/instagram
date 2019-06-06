<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<div class="container center-block">
	<div class="center-block ">
		<div>
		<img src="images/logo.png" class="img-fluid center-block w-50">
		</div>
		<form action="check.php" method="post" >
			<input name="mail" type="text" class="form-control w-50" placeholder="Эл.Адрес">
			<input name="pass" type="pass" class="form-control w-50" placeholder="Пароль">
			<button type="submit" class="btn btn-primary btn-block w-25">Войти</button>
		</form>
		<p class="ml-auto text-danger"><?php echo $_GET['txt'];?></p>
	</div>
</div>
</body>
</html>