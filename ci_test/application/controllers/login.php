<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
  {

    parent::__construct();
		$this->load->model('login/checklogin');
		$this->load->library('session');
	}

	public function signup()
	{
		if ($this->session->userdata('is_admin_login')) {
					redirect('dashboard');
			}
		$data['page'] = 'login';
		$data['page_title'] = 'Test Management';
		$data['main_content'] = 'test';
		$this->load->view('includes/template', $data);
		//$this->load->view('test');
	}

  public function index()
  {
    echo "hello";
  }
  public function hello()
  {
    echo "hello";
  }
	public function check_login()
	{
		if ($this->session->userdata('is_admin_login')) {
					redirect('dashboard');
			}
		if(isset($_POST['submit']))
		{
			$uid = $_POST['uid'];
			$pass = $_POST['pass'];
			$check = $this->checklogin->login_check($uid,$pass);
			if($check == 'found')
			{

				redirect('dashboard');

			}
			else
			{
				$data['page'] = 'login';
				$data['page_title'] = 'Test Management';
				$data['error'] = 'Please Enter Correct Information';
				$data['main_content'] = 'test';
				$this->load->view('includes/template', $data);
			}

		}
	}

	public function dashboard()
	{
		if (!$this->session->userdata('is_admin_login')) {
					redirect('login');
			}
		$data['page'] = 'Home Page';
		$data['page_title'] = 'Home Page';
		$data['main_content'] = 'home';
		$this->load->view('includes/template', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
