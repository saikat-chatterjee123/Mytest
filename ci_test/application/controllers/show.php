<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class show extends CI_Controller {


	public function abc()
	{

		$this->load->view('display');
	}

  public function index()
  {

  }
  public function xyz()
  {
    echo "XYZ";
  }
}
