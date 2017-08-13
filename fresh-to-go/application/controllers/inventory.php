<?php
class inventory extends CI_Controller
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
        $data['title'] = "Fresh To Go | Inventory";
        
        $this->load->view('templates/header', $data);
        $this->load->view('inventory_view', $data);
        $this->load->view('templates/footer', $data);
    }
}

?>