<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginReg extends CI_Controller {

  	public function __construct() {
	    parent::__construct();
	    $this->load->model('Insertdata');
	    $this->load->library('session');
	    $this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->view('main');
	}

	public function login(){
		$this->load->view('login');

	}

	public function register(){
	
        $this->load->view('register');
	}

	public function loadRegForm() {
		$this->load->view('register');
	}

	public function registration()
	{
		
		$data = [
			'email'    => $_POST['email'],
			'name'     => $_POST['username'],
			'password' => $_POST['pwd'],
			'usertype' => $_POST['user_type']
		];
		
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('usertype', 'UserType', 'required');

		if($this->form_validation->run() == FALSE)
        {
          $this->load->view('register');
        } else {        
		  $this->Insertdata->insert_entry($data);
		  $data['message'] = 'Data Inserted Successfully';
		  $this->load->view('register', $data);
        }
           
	}
	public function loginuser()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('pwd');

		$result   = $this->Insertdata->fetch_entry($username,$password);

		$alldata['data']=$this->Insertdata->getalldata();
		
		if($result) {
		 $this->load->view('dasboard', $alldata);
		} else {
		 $message['msg'] = "Invalid user or password";
		 $this->load->view('login', $message);
		}
	}
}
