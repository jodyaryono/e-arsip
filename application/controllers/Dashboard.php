<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
   
        $this->load->model('admin');
    }

	public function index()
	{
		if($this->admin->logged_id())
		{

			$this->load->view("dashboard");			

		}else{

		
			redirect("login");

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}
