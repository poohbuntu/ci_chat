<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Bot_admin');
  }

  function index()
  {
    $data['query']=$this->Bot_admin->get_all();
    $this->load->view('admin/index',$data);
  }

  public function insert()
  {
    $this->load->view('admin/add');
  }

  public function insert2()
  {
    if ($this->Bot_admin->insert()==TRUE) {
      redirect('admin/index');
    } else {
      redirect('admin/add');
    }
  }
}
