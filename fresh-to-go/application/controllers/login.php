<?php
class login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}
    public function index()
    {
    	$data['title'] = "Fresh To Go | Login";
		$this->load->view('templates/header', $data);
		
		// get form input
		$email = $this->input->post("email");
        $password = $this->input->post("password");

		// form validation
		$this->form_validation->set_rules("email", "Email-ID", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required|md5");
		
		if ($this->form_validation->run() == FALSE)
        {
			// validation fail
			$this->load->view('login_view');
		}
		else
		{
			// check for user credentials
			$uresult = $this->user_model->get_user($email, $password);

			if (count($uresult) > 0 )
			{
				// set session
				$sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname . " " . $uresult[0]->lname, 'uid' => $uresult[0]->id, 'urole' => $uresult[0]->role);
				$this->session->set_userdata($sess_data);

				 if($sess_data['urole'] == '1') {
					redirect('profile');
				}

				if($sess_data['urole'] == '2') {
					redirect('buyer');
				}
			}

			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email Address or Password!</div>');
				redirect('login');
			}
		}

		$this->load->view('templates/footer', $data);
    }
}