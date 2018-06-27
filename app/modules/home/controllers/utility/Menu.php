
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MX_Controller {
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
		$data['title']="Akses Menu";
		$data['app']=$this->home->getapp()->row();

		$data['menu']=$this->home->getuser()->result();
		$this->load->view('_part/atas', $data);
		$this->load->view('utility/utilitymenu', $data);
		$this->load->view('_part/bawah', $data);

	}
	function addmenuakses(){
		if ($this->access->getcreate($this->session->userdata('group_id'))==FALSE) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);

		}
		$data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();
		$data['title']="Akses Menu";
		$data['app']=$this->home->getapp()->row();
		$data['user']=$this->home->getuserdetil(base64_decode($this->uri->segment(5)))->row();
		$data['menu']=$this->home->getpermission(base64_decode($this->uri->segment(5)))->result();
		$data['menulist']=$this->home->getmenulist()->result();
		$this->load->view('_part/atas', $data);
		$this->load->view('utility/utilitymenuadd', $data);
		$this->load->view('_part/bawah', $data);
	}
	function savemenuakses(){
		$data=['users_login_id'=>base64_decode($this->input->post('id')),
		'menus_id'=>$this->input->post('menuid', TRUE)];
		$this->db->insert('users_permission', $data);
		$this->session->set_flashdata('susscess','value');

redirect($_SERVER['HTTP_REFERER']);

	}

}

/* End of file Menu.php */
/* Location: .//var/www/html/mypro/app/modules/home/controllers/utility/Menu.php */
