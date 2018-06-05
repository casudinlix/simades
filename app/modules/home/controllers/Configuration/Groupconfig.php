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
		
		$data['menu']=$this->home->getmenulist()->result();
		$this->load->view('_part/atas', $data);
		$this->load->view('configuration/groupv', $data);
		$this->load->view('_part/bawah', $data);
	}

}

/* End of file Groupconfiguation.php */
/* Location: .//var/www/html/mypro/app/modules/home/controllers/Configuration/Groupconfiguation.php */