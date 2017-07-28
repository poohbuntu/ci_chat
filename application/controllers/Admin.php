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

  public function delete()
  {
    if ($this->Bot_admin->delete()==TRUE) {
      redirect('admin/index');
    } else {
      redirect('admin/index');
    }
  }

  public function update()
  {
    $data['query']=$this->Bot_admin->update();
    $this->load->view('admin/update',$data);
  }

  public function update2()
  {
    if ($this->Bot_admin->update2()==TRUE) {
      redirect('admin/index');
    } else {
      redirect('admin/update');
    }
  }
}
