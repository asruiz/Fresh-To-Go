<?php
class home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'html'));
		$this->load->library('session');
		$this->load->database();
        $this->load->model('supply_model');
        $this->load->library('cart');
	}
	
	function index()
	{
		$data['supply'] = $this->supply_model->all_products();
		$data['title'] = "Fresh To Go | Home";
		
		$this->load->view('templates/header', $data);
        $this->load->view('home_view', $data);
		$this->load->view('templates/footer', $data);
	}
	
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('login');
	}
}


