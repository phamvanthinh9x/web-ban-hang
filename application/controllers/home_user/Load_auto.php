<?php 

class Load_auto extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		$data=array();

	}
	function index()
	{
        $this->load->model('my_model');
		$data['tinh']=$this->my_model->get_info_simple('name,matp');
		$this->load->view('home_user/cart',$data);
	}
	function ajax_1()
	{
		$this->load->model('my_huyen');

	}
}
 ?>