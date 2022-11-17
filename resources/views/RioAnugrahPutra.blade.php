<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht, initial-scale=1">
	<title>Rio Anugrah Putra</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->

	<header>
		<div class="container">
			<h1><a href="index.html">Rio Anugrah Putra</a></h1>
			<ul>
				<li><a href=>Home</a></li>
				<li><a href=>About</a></li>
				<li><a href=>Education</a></li>
				<li><a href=>Contact</a></li>
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2>Enjoy This Website</h2>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyrigth &copy; 2021 - Rio Anugrah Putra. All Rights Reserved.</small>
		</div>
	</footer>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>

</body>
</html>
<style>
tengah {
    float: center;
    padding: 30px;
    width: auto;
    height: auto;
    background: #7D9D9C;
    text-align: center;
    font-size: large;
    font-family: roboto;
}
.kolom {
	margin-top: 20px;
	margin-bottom: 40px;
}
.kartu-partner {
    width: 10%;
    margin: auto;
}
.partner-list {
    position: relative;
    display: flex;
    flex-wrap: wrap;
}
*{
	padding: 0;
	margin: 0;
	font-family: sans-serif;
}
a{
	color: inherit;
	text-decoration: none;
}
.container{
	width: 90%;
	margin: 0 auto;
}
.container:after{
	content: '';
	display: block;
	clear: both;
}

header{
	padding: 20;
	background-color: #BDB76B;
	padding: 10px;
}
header h1{
	float: left;
	padding: 15px 0;
	color: #192a3d;
}
header ul{
	float: right;
}
header ul li{
	display: inline-block;
}
header ul li a{
	padding: 25px 20px;
	display: inline-block;
}
header ul li a:hover{
	background-color: #192a3d;
	color: #fff;
}
.banner{
	height: 22vh;
	background-image: url('../img/banner.jpg');
	background-size: cover;
	background-position: center;
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
}
.banner h2{
	text-align: center;
	font-style: italic;
	font-size:40px;
	color: #000;
	margin-top: 150px;
	border:4px solid #000;
	padding: 10px;
}
section{
	padding: 50px 0;
}
section h3{
	text-align: center;
	padding: 20px 0;
	color: #192a3d;
	margin-bottom: 20px;
}
footer{
	padding: 30px 0;
	background-color: #000;
	color: #fff;
	text-align: center;
}
footer {
	background-color: #000;
	padding: 50px;
	font-size: 20px;
	text-align: left;
}
footer {
	width: 100%;
	margin: 172px auto;
}
footer small{
	color: #fff;
}
</style>