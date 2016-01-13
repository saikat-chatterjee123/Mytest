<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Checklogin extends CI_Model
{
  public function __construct() {
      parent::__construct();
      $db = $this->load->database();
  }
  public function login_check($uid,$pass)
  {
    $query = $this->db->query("SELECT * FROM admin WHERE email = '".$uid."' AND password = '".md5($pass)."'");

    if($query->num_rows()>0)
    {
      $logindetails = $query->result();
      foreach ($logindetails as $key => $value)
      {
        $data = array(
          'name' => $value->name,
          'email' => $value->email,
          'password' => $value->password,
          'is_admin_login' => true
        );
      }

      $this->session->set_userdata($data);
      return 'found';
    }
    else
    {
      return 'notfound';
    }
  }
}
?>
