<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Bot_answer');
  }

  function index()
  {
    $this->load->view('chat/chat_form');
  }

  public function find_answer()
  {
    $chat_message=$this->input->post('chat_message');
    if ($chat_message!='') {
      $data=$this->Bot_answer
                  ->get_answer($chat_message)
                  ->result();
      if ($data==null) {
        echo "ไม่ทราบข้อมูลค่ะ";
      }
      else {
        //echo json_encode($data);
        foreach ($data as $row) {
        //  echo $row->answer;
          echo $row->answer;
        }
      }
    }
    else {
      echo "มีคำถามอะไรค่ะ";
    }
    //$this->load->view('chat/chat_answer',$data);
  }

}
