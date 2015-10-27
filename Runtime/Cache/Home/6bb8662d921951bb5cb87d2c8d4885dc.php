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
<div data-role="page" data-theme="a" id="home">
	<script type="text/javascript" src="/Messager/Public/Static/Home/javascripts/index.js"></script>
	<div data-role="header" data-position="fixed">
		<h1>Messager</h1>
	</div>
	<div data-role="content">
		<a id="goMessager" href="/Messager/index.php/Home/Index/messager" data-role="button" data-transition="flip" data-icon="grid" data-iconpos="right">Show Messagers</a>
		<a href="/Messager/index.php/Home/Index/postMessager" data-role="button" data-icon="arrow-r" data-iconpos="right">Messagers</a>
		<?php if(is_array($page)): $i = 0; $__LIST__ = $page;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><a href="#<?php echo ($list["page"]); ?>" data-role="button" data-transition="flip"><?php echo ($list["page"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
		<br/>
	</div>
	<div data-role="footer" data-position="fixed"></div>
</div>
</body>
</html>