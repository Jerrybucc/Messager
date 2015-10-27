<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController
{

public function index()
    {
        $this -> display();
    }
public function messager()
    {
        $messagers = D('Messagers');
        $page = getPage($messagers,5,"id > 0");
        $list = $messagers->field(true)->order('id DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $this -> assign('page', $page -> show());
        $this -> assign('messagers', $list);
        $this -> display();   
    }
public function postMessager()
    {
        $this -> display();
    }
public function warm()
    {
        $this -> display();  
    }
public function post()
    {
        $name = I('post.')['name'];
        $note = I('post.')['note'];
        if ($name==""||$note=="") {
            return;
        } else {
            $data = array(
            "name" => $name,
            "note" => $note,
            "cdate" => date("Y-m-d H:i:s",time())
            );
            $Messagers = D('Messagers');
            $Messagers -> add($data);
        }
    }

}