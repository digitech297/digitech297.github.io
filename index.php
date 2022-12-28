<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<meta name="viewport" content="width=1024">
	<title>Jai Siya Ram 297</title>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		body{
			height: 100vh;
			overflow: hidden;
		}
		img{
			height: 100px;
		}
		#heading{
			background-image: url("images/img1.jpg");
			background-repeat: repeat;
			height: 200px;
			background-size: 344px auto ;
			text-align: center;
			font-family: monospace;
			font-weight: 900;
			font-size: 1.5rem;
			position: relative;
		}
		.h_image{
			height: 70px;
			width: 140px;
			border-radius: 10px;
			font-size: 4rem;
			color: #ffd000;
			text-shadow: #232323 0 0 25px , #232323 0 0 25px , #232323 0 0 20px , #232323 0 0 20px , #232323 0 0 20px , #232323 0 0 20px;
		}
		.h_image:nth-child(1){
			position: absolute;
			left: 10px;
		}
		.h_image:nth-child(3){
			position: absolute;
			right: 10px;
		}
		.h_image:nth-child(4){
			position: absolute;
			bottom: 0px;
			height: 80px;
			margin-left: -140px;
		}
		#leftimage{
			position: absolute;
			left: 0;
			width: 20%;
			height: 70.3vh;
		}
		iframe{
			position: absolute;
			left: 20%;
			width: 79.8%;
			height: 70vh;
			border:none;
			z-index: 99999999;
		}
		#somedata{
			height: 2520%;
			width: 100%;
			z-index: 99999999;
			background-image: linear-gradient(#f2e0bf,#f2e0bf);
			position: absolute;
		}
	</style>
</head>
<body>
	<div id="somedata">
		<p id="heading">
			<span class="h_image">19</span>
			<span class="h_image">297</span>
			<span class="h_image">376</span>
		</p>
		<img id="leftimage" src="images/leftpane.jpg">
		<iframe src="data.php"></iframe>
	</div>
	
</body>
</html>