<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Groupconfig extends MX_Controller {
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
		$data['title']="Group";
		$data['app']=$this->home->getapp()->row();
		
		$data['groupp']=$this->home->getgrop()->result();
		$this->load->view('_part/atas', $data);
		$this->load->view('configuration/groupv', $data);
		$this->load->view('_part/bawah', $data);
	}
	function addgroup(){
		if ($this->access->getcreate($this->session->userdata('group_id'))==FALSE) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);

		}
		$data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();
		$data['title']="Group";
		$data['app']=$this->home->getapp()->row();
		
		 
		$this->load->view('_part/atas', $data);
		$this->load->view('configuration/addgroupv', $data);
		$this->load->view('_part/bawah', $data);

	}
	function editgroup(){
		if ($this->access->getupdate($this->session->userdata('group_id'))==FALSE) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);

		}
		$data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();
		$data['title']="Group Edit";
		$data['detilgroup']=$this->home->getdetilgroup(base64_decode($this->uri->segment(4)))->row();
		$data['app']=$this->home->getapp()->row();
		
		 
		$this->load->view('_part/atas', $data);
		$this->load->view('configuration/groupedit', $data);
		$this->load->view('_part/bawah', $data);

	}
	function savegroup(){
		if ($this->access->getcreate($this->session->userdata('group_id'))==FALSE) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);

		}
		if (empty($_POST)) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);
		}
		$this->db->trans_begin();


			$value = [
				'group_name'=> $this->input->post('namagroup',TRUE),
				'group_desc'=> $this->input->post('desc',TRUE),
				'a_create'=> $this->input->post('acreate',TRUE),
				'a_read'=> $this->input->post('aread',TRUE),
				'a_update'=> $this->input->post('aupdate',TRUE),
				'a_delete'=> $this->input->post('adelete',TRUE),
				'a_report'=> $this->input->post('areport',TRUE),
				'addby'=> $this->session->userdata('username'),


			];
			

$data_group = $value;

$this->global->create('users_group', $data_group, TRUE);
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

redirect('home/group');
	}
	function updategroup(){
if ($this->access->getcreate($this->session->userdata('group_id'))==FALSE) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);

		}
		if (empty($_POST)) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);
		}
		$this->db->trans_begin();


			$value = [
				'group_name'=> $this->input->post('namagroup',TRUE),
				'group_desc'=> $this->input->post('desc',TRUE),
				'a_create'=> $this->input->post('acreate',TRUE),
				'a_read'=> $this->input->post('aread',TRUE),
				'a_update'=> $this->input->post('aupdate',TRUE),
				'a_delete'=> $this->input->post('adelete',TRUE),
				'a_report'=> $this->input->post('areport',TRUE),
				'addby'=> $this->session->userdata('username'),


			];
			

$data_group = $value;
$id = $this->input->post('id',TRUE);
$this->global->update('users_group', $data_group, ['id'=>$id]);
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

redirect('home/group');
	}

}

/* End of file Groupconfiguation.php */
/* Location: .//var/www/html/mypro/app/modules/home/controllers/Configuration/Groupconfiguation.php */