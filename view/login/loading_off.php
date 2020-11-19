<!DOCTYPE html>
<html>
<head>
	<title>Bem Vindo ao SIMD</title>
	<link rel="shortcut icon" href="../../assets/img/fav.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../../assets/css/simd.css">
</head>
<body>
<style type="text/css">
/* The animation code */
@keyframes logout {
  0% {margin-top: 10%; opacity: 1;}
  100% {margin-top: 55%; opacity: 0;}
}
*{  overflow: hidden;
}
/* The element to apply the animation to */
.animation {
  text-align: center;
  animation-name: logout;
  animation-duration: 3s;
  animation-delay: 2s;
  margin-top: 10%;
}
p{
  font-size: 40pt;
  text-align: center;
}
</style>
<div class="animation">
<img style="text-align: center;" src="../../assets/img/simd.png" width="200" height="200">
</div>
<p>SIMD</p>
<?php header("refresh:4;url=../../index.php"); ?>
</body>
</html>
