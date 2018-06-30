
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warga extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('access');
    $this->load->model('home_model','home');
    $this->load->model('m_global','global');
  }

  function index()
  {
    if ($this->access->getread($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      redirect($_SERVER['HTTP_REFERER']);

    }
    $data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();
    $data['title']="|Data Warga";
    $data['app']=$this->home->getapp()->row();
    $data['warga']=$this->home->getwarga()->result();
    $this->load->view('_part/atas', $data);
  $this->load->view('warga/wargav', $data);
    $this->load->view('_part/bawah', $data);
  }
  function addwarga(){
    if ($this->access->getcreate($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      redirect($_SERVER['HTTP_REFERER']);

    }
    $data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();
    $data['title']="|Tambah Warga";
    $data['app']=$this->home->getapp()->row();
    $data['warga']=$this->home->getwarga()->result();
    $data['kk']=$this->home->getkk()->result();
    $data['rt']=$this->home->getrt()->result();
    $data['agama']=$this->home->getagama()->result();
    $data['statuspend']=$this->home->getstatuspendidikan()->result();
    $data['pend']=$this->home->getpendidikan()->result();
    $data['pekerjaan']=$this->home->getpekerjaan()->result();
    $data['kawin']=$this->home->statuskawin()->result();
    $data['wn']=$this->home->getwn()->result();
    $data['darah']=$this->home->getgoldarah()->result();
    $data['status']=$this->home->getstatus()->result();
    $this->load->view('_part/atas', $data);
  $this->load->view('warga/wargaadd', $data);
    $this->load->view('_part/bawah', $data);
  }
  function savewarga(){
    if ($this->access->getcreate($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      redirect($_SERVER['HTTP_REFERER']);

    }
    $this->db->trans_begin();
    $data=['nik'			=> $this->input->post('nik',TRUE),
          'nama'			=> $this->input->post('nama',TRUE),
          'id_kk'			=> $this->input->post('kk',TRUE),
          'jk'			=> $this->input->post('jk',TRUE),
          'tempatlahir'			=> $this->input->post('tempatlahir',TRUE),
          'tanggallahir'			=> tanggal($this->input->post('ttl',TRUE)),
          'rtrw_id'			=> $this->input->post('rtrw',TRUE),
          'agama_id'			=> $this->input->post('agama',TRUE),
          'pendidikan_id'			=> $this->input->post('statuspend',TRUE),
          'pendidikan_kk_id'			=> $this->input->post('pendterkahir',TRUE),
          'pekerjaan_id'			=> $this->input->post('pekerjaan',TRUE),
          'status_kawin'			=> $this->input->post('kawin',TRUE),
          'warganegara_id'			=> $this->input->post('wn',TRUE),
          'nama_ayah'			=> $this->input->post('namaayah',TRUE),
          'nama_ibu'			=> $this->input->post('namaibu',TRUE),
          'nik_ayah'			=> $this->input->post('nikayah',TRUE),
          'nik_ibu'			=> $this->input->post('nikibu',TRUE),
          'golongan_darah_id'			=> $this->input->post('goldarah',TRUE),
          'status'			=> $this->input->post('statuswarga',TRUE),
          'alamat_sebelumnya'			=> $this->input->post('alamatsebelumnya',TRUE),
          'alamat_sekarang'			=> $this->input->post('alamatsekarang',TRUE),
          'telepon'			=> $this->input->post('tlp',TRUE)
];

    $this->global->create('master_warga', $data, TRUE);
    if ($this->db->trans_status() === FALSE) {
    	$this->db->trans_rollback();
      $this->session->set_flashdata('error', 'value');
      redirect($_SERVER['HTTP_REFERER']);
    		} else {
    $this->db->trans_commit();
    		}
    echo json_encode($result);

    $this->session->set_flashdata('susscess','value');

    redirect('home/master/warga/');
  }
  function editwarga(){
    if ($this->access->getupdate($this->session->userdata('group_id'))==FALSE) {
      $this->session->set_flashdata('access', 'value');
      redirect($_SERVER['HTTP_REFERER']);

    }
    $data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();
    $data['title']="|Edit Warga";
    $data['app']=$this->home->getapp()->row();
    $id=base64_decode($this->uri->segment(5));
    $data['warga']=$this->home->getwargadetil($id)->row();
    $data['kk']=$this->home->getkk()->result();
    $data['rt']=$this->home->getrt()->result();
    $data['agama']=$this->home->getagama()->result();
    $data['statuspend']=$this->home->getstatuspendidikan()->result();
    $data['pend']=$this->home->getpendidikan()->result();
    $data['pekerjaan']=$this->home->getpekerjaan()->result();
    $data['kawin']=$this->home->statuskawin()->result();
    $data['wn']=$this->home->getwn()->result();
    $data['darah']=$this->home->getgoldarah()->result();
    $data['status']=$this->home->getstatus()->result();
    $this->load->view('_part/atas', $data);
  $this->load->view('warga/wargaedit', $data);
    $this->load->view('_part/bawah', $data);
  }
  function updatewarga(){
    if ($this->access->getupdate($this->session->userdata('group_id'))==FALSE AND empty($_POST)) {
      $this->session->set_flashdata('access', 'value');
      redirect($_SERVER['HTTP_REFERER']);

    }
    $id=$this->input->post('id');
    $this->db->trans_begin();
    $data=['nik'			=> $this->input->post('nik',TRUE),
          'nama'			=> $this->input->post('nama',TRUE),
          'id_kk'			=> $this->input->post('kk',TRUE),
          'jk'			=> $this->input->post('jk',TRUE),
          'tempatlahir'			=> $this->input->post('tempatlahir',TRUE),
          'tanggallahir'			=> tanggal($this->input->post('ttl',TRUE)),
          'rtrw_id'			=> $this->input->post('rtrw',TRUE),
          'agama_id'			=> $this->input->post('agama',TRUE),
          'pendidikan_id'			=> $this->input->post('statuspend',TRUE),
          'pendidikan_kk_id'			=> $this->input->post('pendterkahir',TRUE),
          'pekerjaan_id'			=> $this->input->post('pekerjaan',TRUE),
          'status_kawin'			=> $this->input->post('kawin',TRUE),
          'warganegara_id'			=> $this->input->post('wn',TRUE),
          'nama_ayah'			=> $this->input->post('namaayah',TRUE),
          'nama_ibu'			=> $this->input->post('namaibu',TRUE),
          'nik_ayah'			=> $this->input->post('nikayah',TRUE),
          'nik_ibu'			=> $this->input->post('nikibu',TRUE),
          'golongan_darah_id'			=> $this->input->post('goldarah',TRUE),
          'status'			=> $this->input->post('statuswarga',TRUE),
          'alamat_sebelumnya'			=> $this->input->post('alamatsebelumnya',TRUE),
          'alamat_sekarang'			=> $this->input->post('alamatsekarang',TRUE),
          'telepon'			=> $this->input->post('tlp',TRUE)
];

    $this->global->update('master_warga', $data,['id'=>$id]);
    if ($this->db->trans_status() === FALSE) {
    	$this->db->trans_rollback();
      $this->session->set_flashdata('error', 'value');
      redirect($_SERVER['HTTP_REFERER']);
    		} else {
    $this->db->trans_commit();
    		}


    $this->session->set_flashdata('susscess','value');

    redirect('home/master/warga/');
  }

}
