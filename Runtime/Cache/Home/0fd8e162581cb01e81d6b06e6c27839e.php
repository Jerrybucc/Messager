<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" user-scalable="no"/>
	<script type="text/javascript" src="/Messager/Public/Static/jquery.js"></script>
	<script type="text/javascript" src="/Messager/Public/Static/jquery.mobile/jquery.mobile-1.4.5.js"></script>
	<script type="text/javascript" src="/Messager/Public/Static/Home/javascripts/default.js"></script>
	<link rel="stylesheet" type="text/css" href="/Messager/Public/Static/jquery.mobile/jquery.mobile-1.4.5.css">
	<link rel="stylesheet" type="text/css" href="/Messager/Public/Static/Home/stylesheets/index.css">
	<title>Messager</title>
</head>
<body>
<div data-role="dialog" data-theme="a">
	<script type="text/javascript" src="/Messager/Public/Static/Home/javascripts/index.js"></script>
	<div data-role="header" data-position="fixed">
		<h1>Messager</h1>
	</div>
	<div data-role="content">
<!-- post messager -->
		<input id="name" type="text" name="name" placeholder="Pick an Username"/>
		<textarea id="note" rows="5" name="note" placeholder="Enter your Messager"></textarea>
		<button data-role="button" id="postMessager">Message Now!</button>
<!-- post messager -->
	</div>
</div>
</body>
</html>