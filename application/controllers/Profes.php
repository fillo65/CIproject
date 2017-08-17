<?php
class Profes extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('profes_model');
    $this->load->library('session');
  }

  public function index()  {
    $data = array();
    $data["result"] = $this->alumnos_model->get_all();
    $this->load->view('pages/admin/Profes_list', $data);
  }
}
