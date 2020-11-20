<!DOCTYPE html>
<html>
<head>
	<title>Bem Vindo ao SIMD</title>
	<link rel="shortcut icon" href="assets/img/fav.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="assets/css/css.css">
  <link rel="stylesheet" type="text/css" href="assets/css/simd.css">
</head>
<body>
<style type="text/css">
/* The animation code */
@keyframes logon {
  from {margin-top: 55%; opacity: 0;}
  to {margin-top: 10%; opacity: 1;}
}
*{  overflow: hidden;
}
/* The element to apply the animation to */
.animation {
  text-align: center;
  animation-name: logon;
  animation-duration: 2s;
  margin-top: 10%;
}
p{
  font-size: 40pt;
  text-align: center;
}
</style>
<div class="animation">
<img style="text-align: center;" src="assets/img/simd.png" width="200" height="200">
</div>
<p>SIMD</p>
<?php header("refresh:4;url=?c=".base64_encode('Home')); ?>
</body>
</html>
