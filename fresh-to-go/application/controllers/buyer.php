<?php
class buyer extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'html'));
		$this->load->library('session');
		$this->load->database();
        $this->load->model('user_model');
        $this->load->model('supply_model');
        $this->load->library('cart');
	}
	
	function index()
	{
		$data['title'] = "Fresh To Go | Home";

		// should be in profile ??
		$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
		$data['uname'] = $details[0]->fname . " " . $details[0]->lname;
		$data['uemail'] = $details[0]->email;

		$this->load->view('templates/header', $data);
        $this->load->view('buyer/buyer_home_view', $data);
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

	function all_supplies() {
		$data['supply'] = $this->supply_model->all_products();
		$data['starts'] = $this->supply_model->distinct_products();
		$data['title'] = "Fresh To Go | All Products";

		$this->load->view('templates/header', $data);
        $this->load->view('buyer/all_supply_view', $data);
        $this->load->view('templates/footer', $data);
	}	

	// when choosing a category
	function showme($supply_category)
    {
        $data['starts'] = $this->supply_model->distinct_products();
        $data['comes'] = $this->supply_model->showme($supply_category); //for showme function in home/showme

        $this->load->view('templates/header', $data);
        $this->load->view('buyer/distinct_supply_view',$data);
        $this->load->view('templates/footer', $data);
    }

    // when category chosen is Sales
    function showmesales()
    {
        $data['starts'] = $this->supply_model->distinct_products();
        $data['comes'] = $this->supply_model->showmesales(); //for showmesales function in home/showmesales
        
        $this->load->view('templates/header', $data);
        $this->load->view('buyer/distinct_supply_view',$data);
        $this->load->view('templates/footer', $data);
    }

	function add_to_cart($id) {
        $supply = $this->supply_model->find($id);
        $data = array(
            'id'    => $supply->id,
            'qty'   => 1,
            'price' => $supply->supply_price,
            'name'  => $supply->supply_name,
            'desc'  => $supply->supply_description
        );
        $this->cart->insert($data);
        redirect('buyer/cart/');
    }

    function cart()
    {
    	$data['title'] = "Fresh To Go | Cart";

		$this->load->view('templates/header', $data);
        $this->load->view('buyer/show_cart');
    }

    function clear_cart() {
        $this->cart->destroy();
        redirect('home/cart');
    }
}


