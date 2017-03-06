<?php 
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller{
	function code(){
		$config=array(
			'fontSize'=>16,
			'length'=>4,
			'imageH'=>40,
			'imageW'=>210,
		);
		$Verify=new \Think\Verify($config);
		$Verify->entry();
	}
}


 ?>