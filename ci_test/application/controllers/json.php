<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class json extends CI_Controller
{
  public function __construct()
  {

    parent::__construct();
    $this->load->model('emaillist');
		$this->load->library('session');
	}
  public function get_emaillist()
  {
    //echo "hello";
    $emaillists = $this->emaillist->get_list();
    echo "<pre>";
    print_r(json_encode($emaillists));
    return $emaillists;
  }
}
?>
