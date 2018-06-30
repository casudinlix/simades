<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kk extends MX_Controller {
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('access');
    $this->load->model('home_model','home');
    $this->load->model('m_global','global');
  }
  public function index()
  {
    if ($this->access->getread($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      redirect($_SERVER['HTTP_REFERER']);

    }
    $data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();
    $data['title']="|Kartu Keluarga";
    $data['app']=$this->home->getapp()->row();
    $data['kk']=$this->home->getdatakk()->result();



    $this->load->view('_part/atas', $data);
    $this->load->view('kk/kkv', $data);
    $this->load->view('_part/bawah', $data);
  }
}
/* End of file ${TM_FILENAME:${1/(.+)/lKk.php/}} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Kk/:application/controllers/${1/(.+)/lKk.php/}} */
