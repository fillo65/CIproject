<?php
class Aulas_model extends CI_model{

  public function __construct(){
    parent::__construct();
  }

  public function get_all(){
    $this->db->select('id_course, name_module');
    $this->db->from('courses');
    $this->db->join('modules', 'courses.fk_module = modules.id_module', 'left');
    $query = $this->db->get();
    return $result = $query->result_array();
}

function list_groups() {
    $this->db->select('id_aula, nombre_aula');
    $this->db->from('aulas')->order_by('id','asc');
    $query = $this->db->get();
    return $query->result_array();
}



}
