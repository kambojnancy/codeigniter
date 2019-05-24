<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	  function __construct() {
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
		
			$data=array(
				'email' => $_POST['email'],
                'name' => $_POST['username'],
                'password' => $_POST['pwd'],
                'usertype' => $_POST['user_type']
            	);
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('usertype', 'UserType', 'required');

			if ($this->form_validation->run() == FALSE)
		        {
		            $this->load->view('register');
		        }
	        else
		        {
		            // load success template...
		            $this->Insertdata->insert_entry($data);
		           $data['message'] = 'Data Inserted Successfully';
				$this->load->view('register', $data);
		        }
           
	}
	public function loginuser()
	{

		$username=$this->input->post('username');
		$password=$this->input->post('pwd');
		$result = $this->Insertdata->fetch_entry($username,$password);
		$alldata['data']=$this->Insertdata->getalldata();
		//print_r($result);
		if($result)
		{
		$this->load->view('dasboard',$alldata);
		}
		
		else{
			$message['msg']="invalid user and password";
			$this->load->view('login',$message);
		}
	}
}
