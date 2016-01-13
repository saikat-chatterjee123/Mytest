<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    class Emaillist extends CI_Model {

        public function __construct() {
            parent::__construct();
          $db = $this->load->database();
        }
        public function get_list()
        {
          $query = $this->db->query("SELECT * FROM maillist");
         if ($query->num_rows() > 0) {
             return $query->result();
         } else {
             return false;
         }
        }
}
