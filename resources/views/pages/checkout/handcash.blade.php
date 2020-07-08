<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thanh toán thành công</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
<style>
#backhome{
	font-family: 'Roboto', sans-serif;
	background-color: #2ae411;
	border: red solid 2px;
	text-decoration: none;
	color: #000000;
	border-radius: 5px;
	padding: 10px;
}
h1 {
	text-align: center; 
	color: red;
}
</style>
<h1>Thanh toán thành công!</h1>
<a id="backhome" href="{{URL::to('/trang-chu')}}"><i class="far fa-arrow-alt-circle-left"> Quay lại trang chủ</i></a>
</body>
</html>
