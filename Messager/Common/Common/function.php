<?php
	function getPage($table,$eachNum,$where)
	{
		$count = $table->where($where)->count();
		$page = new \Think\Page($count,$eachNum);
		
		$page->setConfig('prev','prev');
    	$page->setConfig('next','next');
    	$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');

    	return $page;

	}
	function trimall($str)
 	{
    	$former=array(" ","　","\t","\n","\r");
    	$after=array("","","","","");
    	return str_replace($former,$after,$str);
 	}
 	function returnURL($module)
 	{
 		return U($module);
 	}
