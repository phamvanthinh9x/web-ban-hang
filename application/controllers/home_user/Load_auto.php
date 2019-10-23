<?php 

class Load_auto extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		$data=array();
		$this->load->model('my_model');

	}
	function index()
	{
        $this->load->model('my_model');

		$data['tinh']=$this->my_model->get_info_simple('name,matp');
		$this->load->view('home_user/cart',$data);
	}
	function ajax_1()
	{
		$ma='matp';
		$id=$_GET['province'];
		$name='name,maqh';
		$data='devvn_quanhuyen';
		$result=$this->my_model->get_info_huyen($ma,$id,$name,$data);
		die (json_encode($result));



	}
	function ajax_2()
	{
		$ma='maqh';
		$id=$_GET['province'];
		$name='name,maqh';
		$data='devvn_xaphuongthitran';
		$result=$this->my_model->get_info_huyen($ma,$id,$name,$data);
		die (json_encode($result));



	}



}
 ?>