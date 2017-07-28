<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bot_admin extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_all()
  {
    $query = $this->db->get('bot_answers');
    return $query;
  }

  public function insert()
  {
    $data=array(
      'question'=>$this->input->post('question'),
      'answer'=>$this->input->post('answer')
    );

    $query=$this->db->insert('bot_answers',$data);
    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function delete()
  {
    $this->db->where('id',$this->uri->segment(3));
    if($this->db->delete('bot_answers')){
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function update()
  {
    $this->db->where('id',$this->uri->segment(3));
    return $this->db->get('bot_answers');
  }

  public function update2()
  {
    $data=array(
      'question'=>$this->input->post('question'),
      'answer'=>$this->input->post('answer')
    );

    $this->db->where('id',$this->input->post('id'));
    if ($this->db->update('bot_answers',$data)) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}
