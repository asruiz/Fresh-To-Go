<?php
class supply extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','date'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('supply_model');
        $this->load->model('user_model');
        
    }

    function index()
    {  
        $details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
        $data['uname'] = $details[0]->fname . " " . $details[0]->lname;
        $data['title'] = "Fresh To Go | Supply";
        $data['categories'] = $this->supply_model->get_categories(); 

        $this->load->view('templates/header', $data);

        $this->form_validation->set_rules('supply_name','Supply Name','required');
        $this->form_validation->set_rules('supply_description','Supply Category','required');
        $this->form_validation->set_rules('supply_category','Supply Description','required');
        $this->form_validation->set_rules('supply_price','Supply','required|integer');
        $this->form_validation->set_rules('supply_stock','Supply Stock','required|integer');
        $this->form_validation->set_rules('supply_sale','Supply Sale','integer');
        //$this->form_validation->set_rules('userfile','image error','required');   
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('sell_supply_view');   

        }else{

            $data = array
            (
                'supply_name'          => set_value('supply_name'),
                'supply_description'   => set_value('supply_description'),
                'supply_category'      => set_value('supply_category'),
                'supply_price'         => set_value('supply_price'),
                'supply_stock'         => set_value('supply_stock'),
                'supply_sale'          => set_value('supply_sale'),
                'supply_owner_id'      => $this->session->userdata('uid'),
                'supply_owner_name'    => $this->session->userdata('uname'),
                'supply_start_date'    => date('Y-m-d H:i:s')

                    );//end array data

                    //$this->supply_model->create($data);

            if ($this->supply_model->create($data))
            {
                        /*
                        $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your product is successfully published in Vamp Stop! Please go to the home page!</div>');
                        */
                        
                        redirect('profile', $data);
                    }
                    else
                    {
                        // error
                        $this->session->set_flashdata('emsg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                        redirect('supply');
                    }
                    //redirect('products'); 
        }//end if form_validation  

        $this->load->view('templates/footer', $data);

    }

    function edit($id) {
        $this->load->view('templates/header');
        
        $this->form_validation->set_rules('supply_name','Supply Name');
        $this->form_validation->set_rules('supply_description','Supply Category');
        $this->form_validation->set_rules('supply_category','Supply Description');
        $this->form_validation->set_rules('supply_price','Supply','integer');
        $this->form_validation->set_rules('supply_stock','Supply Stock','integer');
        $this->form_validation->set_rules('supply_sale','Supply Sale','integer');

        if ($this->form_validation->run() == FALSE)
        {
            $data['supply'] = $this->supply_model->find($id);
            $this->load->view('update_supply_view', $data);   

        }else{

            $data_products = array
            (
                'supply_name'          => set_value('supply_name'),
                'supply_description'   => set_value('supply_description'),
                'supply_category'      => set_value('supply_category'),
                'supply_price'         => set_value('supply_price'),
                'supply_stock'         => set_value('supply_stock'),
                'supply_sale'          => set_value('supply_sale'),
                'supply_owner'         => $this->session->userdata('uid')
                    );//end array data

            $this->supply_model->edit($id,$data_products);
            redirect('home', $data_products);    
        }//end if form_validation  

        $this->load->view('templates/footer', $data);

    }

     function delete($id)
    {
        $this->supply_model->delete($id);
        redirect('home');
    }
}
