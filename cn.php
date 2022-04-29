<!DOCTYPE html>
<?php require"./config.php"?>
<html lang="cn">
<head>
<meta charset="UTF-8">
<title><?php echo $name ?></title>
<link rel="preconnect" href="">
<link rel="preconnect" href="" crossorigin="">
<link href="static/css/css2.css" rel="stylesheet">
<link rel="stylesheet" href="static/css/style.css">
<script src='static/js/jquery2.2.4.min.js'></script>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
</head>
<body onload="get_hitokoto()">
<div class="container">
<div class="card">
<div class="content">
<h2>一言</h2>
<p id="text">努力获取一言中……</p>
<button onclick="get_hitokoto()">换一个</button>
</div>
</div>
</div>
<script src='static/js/vanilla-tilt.min.js'></script>
<script src="static/js/script.js"></script>
</body>
</html>
