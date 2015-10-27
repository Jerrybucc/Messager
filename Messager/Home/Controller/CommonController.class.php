<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller
{
    public function index()
    {
       	if (session('?name')) {
       		$this->success('Loading...', U('Admin/index'));
       	} else {
       		$this->display();
       	}   
    }
}