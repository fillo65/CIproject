<?php

class Login_model extends CI_Model {

  public function __construct(){
    parent::__construct();
  }
  function login($username, $password) {
    $this->db->select('id,fullname,username,password');
    $this->db->from('user');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $this->db->limit(1);

    $query = $this->db->get();
    if ($query->num_rows()==1) {
      return $query->result();
    }else  {
      return false;
    }
  }
}
