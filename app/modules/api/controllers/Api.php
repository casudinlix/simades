<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MX_Controller {
    public function __construct()
    {
      parent::__construct();
      //Codeigniter : Write Less Do More
      if(!$this->input->is_ajax_request()){
        exit('No direct script access allowed :)');
    }
    if (!$this->session->userdata('login')==TRUE) {

      $this->session->set_flashdata('error', 'value');
      redirect('welcome','refresh');
    }
 $this->load->model('access');
 $this->load->model('api_model','api');
    }
    public function loginapp()
    {


    }
function nonactivemenu(){
  if ($this->access->getupdate($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      show_404();

    }

  $data=array('is_published'=>0);
  $this->db->where('id', $this->uri->segment(3));

  $this->db->update('menus', $data);
}
function activemenu(){
   if ($this->access->getupdate($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      show_404();

    }

  $data=array('is_published'=>1);
  $this->db->where('id', $this->uri->segment(3));

  $this->db->update('menus', $data);

}
function hapusmenu(){
  if ($this->access->getdelete($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      show_404();

    }
    $this->db->where('id', $this->uri->segment(3));

  $this->db->delete('menus');


}
function hapusgroup(){
  if ($this->access->getdelete($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      show_404();

    }
    $this->db->where('id', $this->uri->segment(3));

  $this->db->delete('users_group');
}
function hapuspermission(){
   if ($this->access->getdelete($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      show_404();

    }
    $this->db->where('id', $this->uri->segment(3));

  $query=$this->db->delete('users_permission');

}
function activeuser(){
if ($this->access->getupdate($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      show_404();

    }

  $data=array('active'=>1);
  $this->db->where('id', $this->uri->segment(3));
  $this->db->update('users_login', $data);
}
function nonactiveuser(){
if ($this->access->getupdate($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      show_404();

    }

  $data=array('active'=>0);
  $this->db->where('id', $this->uri->segment(3));
  $this->db->update('users_login', $data);
}
function hapusanggota(){
  if ($this->access->getdelete($this->session->userdata('group_id'))==FALSE) {
     $this->session->set_flashdata('access', 'value');
     show_404();

   }
   $data=array('id_kk'=>0);
   $this->db->where('id', $this->uri->segment(3));

  $query=$this->db->update('master_warga',$data);
}
}
