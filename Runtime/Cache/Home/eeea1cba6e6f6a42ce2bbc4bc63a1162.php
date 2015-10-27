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
<div data-role="page" data-theme="a">
	<!-- // <script type="text/javascript" src="/Messager/Public/Static/Home/javascripts/index.js"></script> -->
	<div data-role="header" data-position="fixed">
		<a href="/Messager/index.php/Home/Index/index" data-role="button" data-icon="back">back</a>
		<h1>Messager</h1>
	</div>
	<div data-role="content">
			<div class="top"><?php echo ($page); ?></div>
			<?php if(is_array($messagers)): $i = 0; $__LIST__ = $messagers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$messagers): $mod = ($i % 2 );++$i;?><div data-role="collapsible">
					<h1><?php echo ($messagers["name"]); ?>:</h1>
					<p><?php echo ($messagers["note"]); ?><span class="right"><?php echo ($messagers["cdate"]); ?></span></p>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<!-- test -->
			<div class="bottom"><?php echo ($page); ?></div>
			<script type="text/javascript">
				$('.top .prev').text()=='prev'?$('.top').html('<a class="refresh" href="/Messager/index.php/Home/Index/messager/p/1.html" data-role="button">Refresh</a>'):$('.top').remove();$('.num').remove();$('.current').remove();$('.top .next').remove();$('.top .prev').remove();$('.bottom .prev').remove();$('.bottom .next').text('Load more');$('.bottom .next').attr('data-role','button');
			</script>
		</div>
	<div data-role="footer" data-position="fixed"></div>
</div>
</body>
</html>