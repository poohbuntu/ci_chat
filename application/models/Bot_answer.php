<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bot_answer extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_answer($chat_message)
  {
    $where="question like '%$chat_message%'";
    $this->db->select('answer')
              ->from('bot_answers')
              //->where('question',$chat_message);
              ->where($where)
              ->order_by('rand()')
              ->limit(1);
    $query=$this->db->get();
    return $query;
  }

}
