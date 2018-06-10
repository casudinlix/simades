 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usersconfig extends MX_Controller {
	public function __construct()
    {
      parent::__construct();
      //Codeigniter : Write Less Do More
      $this->load->model('access');
      $this->load->model('home_model','home');
      $this->load->model('m_global','global');
      if (!$this->session->userdata('login')==TRUE) {
	  	
	  	$this->session->set_flashdata('error', 'value');
	  	redirect('welcome','refresh');
	  }

}

	public function index()
	{
		if ($this->access->getread($this->session->userdata('group_id'))==FALSE) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);

		}
		$data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();
		$data['title']=" | Pengguna";
		$data['app']=$this->home->getapp()->row();
		
		$data['users']=$this->home->getuserall()->result();
		$this->load->view('_part/atas', $data);
		$this->load->view('configuration/usersv', $data);
		$this->load->view('_part/bawah', $data);
	}
	function usersadd(){
	if ($this->access->getcreate($this->session->userdata('group_id'))==FALSE) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);

		}
		$data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();
		$data['title']=" | Tambah Pengguna";
		$data['app']=$this->home->getapp()->row();
		$data['grouplist']=$this->home->getgroup()->result();
		$data['users']=$this->home->getuserall()->result();
		$this->load->view('_part/atas', $data);
		$this->load->view('configuration/useradd', $data);
		$this->load->view('_part/bawah', $data);


	}
	function usersave(){
if ($this->access->getcreate($this->session->userdata('group_id'))==FALSE) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);

		}
		if (empty($_POST)) {
			redirect($_SERVER['HTTP_REFERER']);
		}
		$this->db->trans_begin();


			$value = [
				'user_nip'			=> $this->input->post('nip',TRUE),
				'username'		=> $this->input->post('namauser',TRUE),
				'email'			=> $this->input->post('email',TRUE),
				'pass'			=> base64_encode($this->input->post('pass',TRUE)),
				'group_id'			=> $this->input->post('group',TRUE),
				'active'	=> 1,
				 


			];
			 

			 

$data = $value;

$this->global->create('users_login', $data, TRUE);
if ($this->db->trans_status() === FALSE) {
	$this->db->trans_rollback();
	$result['error']	= TRUE;
	$result['type']		= 'error';
	$result['message']	= 'Menu fail to created!';
		} else {
$this->db->trans_commit();
	$result['error']	= FALSE;
	$result['type']		= 'success';
	$result['message']	= 'Menu success to created!';
		}
echo json_encode($result);

$this->session->set_flashdata('susscess','value');

redirect('home/configuration/users');

	}
	function edituser(){
		if ($this->access->getupdate($this->session->userdata('group_id'))==FALSE) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);

		}
		$id=base64_decode( $this->uri->segment(5));
		$data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();
		$data['title']=" | Edit Pengguna";
		$data['app']=$this->home->getapp()->row();
		$data['grouplist']=$this->home->getgroup()->result();
		$data['users']=$this->home->getuserdetil($id)->row();
		$this->load->view('_part/atas', $data);
		$this->load->view('configuration/useredit', $data);
		$this->load->view('_part/bawah', $data);
	}
	function updateusers(){
		if ($this->access->getcreate($this->session->userdata('group_id'))==FALSE) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);

		}
		if (empty($_POST)) {
			redirect($_SERVER['HTTP_REFERER']);
		}
		$this->db->trans_begin();


			$value = [
				'user_nip'		=> $this->input->post('nip',TRUE),
				'username'		=> $this->input->post('namauser',TRUE),
				'email'			=> $this->input->post('email',TRUE),
				'pass'			=> base64_encode($this->input->post('pass',TRUE)),
				'group_id'		=> $this->input->post('group',TRUE),
				'active'		=> 1,
				 


			];
			 

			 

$data = $value;

$id = base64_decode($this->input->post('id',TRUE));
$this->global->update('users_login', $data, ['id'=>$id],TRUE);
if ($this->db->trans_status() === FALSE) {
	$this->db->trans_rollback();
	$result['error']	= TRUE;
	$result['type']		= 'error';
	$result['message']	= 'Menu fail to created!';
		} else {
$this->db->trans_commit();
	$result['error']	= FALSE;
	$result['type']		= 'success';
	$result['message']	= 'Menu success to created!';
		}
echo json_encode($result);

$this->session->set_flashdata('susscess','value');

redirect('home/configuration/users');
	}

}

/* End of file Usersconfig.php */
/* Location: .//var/www/html/mypro/app/modules/home/controllers/Configuration/Usersconfig.php */