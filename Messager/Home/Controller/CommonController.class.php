<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller
{
	public function _initialize()
		{
    		$messagers = M()->execute("show tables like 'messagers'");;
    		$page = M()->execute("show tables like 'page'");;
    		$new = M();
    		if ($messagers!=1) {
    			$new -> execute("CREATE TABLE `messager_db`.`messagers` (`id` INT NOT NULL AUTO_INCREMENT,`name` VARCHAR(100) NOT NULL,`note` LONGTEXT NOT NULL,`cdate` DATETIME NOT NULL,PRIMARY KEY (`id`));");
    		}
    		if ($page!=1) {
    			$new -> execute("CREATE TABLE `messager_db`.`page` (`id` INT NOT NULL AUTO_INCREMENT,`page` VARCHAR(100) NOT NULL,`header` LONGTEXT NULL,`content` LONGTEXT NULL,`footer` LONGTEXT NULL,PRIMARY KEY (`id`));");
    		}
		}
}