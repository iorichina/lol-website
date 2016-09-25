<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>英雄联盟</title>
	<style>
		/*@import url(//fonts.googleapis.com/css?family=Lato:700);*/

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
		<a href="<?php echo URL::action($__CLASS__.'@getChampions', null, false);?>" title="英雄联盟"><img src="<?php echo URL::asset('/img/main/welcome/bd_36.jpg', null, false);?>" alt="英雄联盟"></a>
		<h1>欢迎来到英雄联盟.</h1>
	</div>
</body>
</html>
