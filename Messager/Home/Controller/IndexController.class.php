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
public function warn()
    {
        $this -> display();  
    }
public function clear()
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
                "cdate" => date("Y-m-d H:i:s",time()),
                "done" => 0
            );
            $Messagers = D('Messagers');
            $Messagers -> add($data);
        }
    }
public function Done()
{   $id = I('post.')['id'];

    $messagers = D('Messagers');
    $data['done'] = 1;

    $messagers -> where("id = $id") -> save($data);
}
public function Undone()
{   $id = I('post.')['id'];

    $messagers = D('Messagers');
    $data['done'] = 0;

    $messagers -> where("id = $id") -> save($data);
}
public function delete()
    {
        $id = I('post.')['id'];
        $messagers = D('Messagers');
        $messagers -> where("id = $id") -> delete();
    }
public function cleardata()
    {
          $messagers = D('Messagers');
          $messagers -> where("id > 0") -> delete();
    }

}