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
  function addkk(){
    if ($this->access->getcreate($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      redirect($_SERVER['HTTP_REFERER']);

    }
    $data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();
    $data['title']="|Tambah Kartu Keluarga";
    $data['app']=$this->home->getapp()->row();
    $data['kk']=$this->home->getdatakk()->result();
    $data['warga']=$this->home->getwarga()->result();



    $this->load->view('_part/atas', $data);
    $this->load->view('kk/addkk', $data);
    $this->load->view('_part/bawah', $data);
  }
  function savekk(){
    if ($this->access->getcreate($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      redirect($_SERVER['HTTP_REFERER']);
    }
if (empty($_POST)) {
  $this->session->set_flashdata('access', 'value');
  redirect($_SERVER['HTTP_REFERER']);
}

$data=['no_kk'			=> $this->input->post('kk',TRUE),
      'id_kepala'			=> $this->input->post('nik',TRUE),
    ];
    $this->global->create('master_kk', $data, TRUE);
    if ($this->db->trans_status() === FALSE) {
      $this->db->trans_rollback();
      $this->session->set_flashdata('error', 'value');
      redirect($_SERVER['HTTP_REFERER']);
        } else {
    $this->db->trans_commit();
        }

    $this->session->set_flashdata('susscess','value');

    redirect('home/master/kk/');

  }
  function detilkk(){
    if ($this->access->getread($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      redirect($_SERVER['HTTP_REFERER']);

    }
    $id=base64_decode($this->uri->segment(5));
    $kkid=base64_decode($this->uri->segment(6));
    $data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();
    $data['title']="|Detil Kartu Keluarga";
    $data['app']=$this->home->getapp()->row();
    $data['anggota']=$this->home->getkkdetil($kkid)->result();
    $data['kk']=$this->home->getdatakk()->result();
    $data['datakk']=$this->home->getdatakkdetil($kkid)->row();
    $data['warga']=$this->home->getwarga()->result();



    $this->load->view('_part/atas', $data);
    $this->load->view('kk/kkdetil', $data);
    $this->load->view('_part/bawah', $data);
  }
  function updatekk(){
    if ($this->access->getupdate($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      redirect($_SERVER['HTTP_REFERER']);
    }
if (empty($_POST)) {
  $this->session->set_flashdata('access', 'value');
  redirect($_SERVER['HTTP_REFERER']);
}
$data=['no_kk'			=> $this->input->post('kk',TRUE),
      'id_kepala'			=> $this->input->post('nik',TRUE),
    ];
    $id=$this->input->post('id');
    $this->global->update('master_kk', $data, ['id'=>$id]);
    if ($this->db->trans_status() === FALSE) {
      $this->db->trans_rollback();
      $this->session->set_flashdata('error', 'value');
      redirect($_SERVER['HTTP_REFERER']);
        } else {
    $this->db->trans_commit();
        }

    $this->session->set_flashdata('susscess','value');

    redirect('home/master/kk/');

  }
}
/* End of file ${TM_FILENAME:${1/(.+)/lKk.php/}} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Kk/:application/controllers/${1/(.+)/lKk.php/}} */
