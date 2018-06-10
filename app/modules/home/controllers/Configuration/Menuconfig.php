<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Menuconfig extends MX_Controller {
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
		$data['title']="Menu";
		$data['app']=$this->home->getapp()->row();
		
		$data['menu']=$this->home->getmenulist()->result();
		$this->load->view('_part/atas', $data);
		$this->load->view('configuration/menuv', $data);
		$this->load->view('_part/bawah', $data);
		
	}
	function addmenu(){
		if ($this->access->getcreate($this->session->userdata('group_id'))==FALSE) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);

		}
		$data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();
		$data['title']=" Tambah Menu";
		$data['app']=$this->home->getapp()->row();
		$data['menu']=$this->home->getmenulist()->result();
		$this->load->view('_part/atas', $data);
		$this->load->view('configuration/addmenuv', $data);
		$this->load->view('_part/bawah', $data);
	}

function savemenu(){
	if ($this->access->getcreate($this->session->userdata('group_id'))==FALSE) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);

		}
		$this->db->trans_begin();


			$value = [
				'menu'			=> $this->input->post('namamenu',TRUE),

				'parent'		=> $this->input->post('parent',TRUE),
				'link'			=> $this->input->post('link',TRUE),
				'is_published'	=> 1,
				'menu_order'	=> 1,


			];
			$parent=$this->input->post('parent',TRUE);

			if($parent == 0) {
				$value['level'] = 0;
				$value['icon'] 	= $this->input->post('icon',TRUE);
			} else {
				$value['level'] = $this->home->get_level_menu($parent);
				$value['icon']	= NULL;
			}

$data_menu = $value;

$this->global->create('menus', $data_menu, TRUE);
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

redirect('home/menu');

}
function editmenu(){
	if ($this->access->getupdate($this->session->userdata('group_id'))==FALSE) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);

		}
	$data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();
	$data['title']=" Edit Menu";
	$data['app']=$this->home->getapp()->row();
	$id=base64_decode($this->uri->segment(4));
	$cek=$this->db->get_where('menus',['id'=>$id])->result();
		foreach ($cek as $key) {
			$idm=$key->id;
		}
		$data['parent']=$this->db->get_where('menus',['id'=>$idm])->row();

	$data['menulist']=$this->home->getmenulist()->result();
	$data['menu']=$this->home->menudetil($id)->row();
	$this->load->view('_part/atas', $data);
	$this->load->view('configuration/menuedit', $data);
	$this->load->view('_part/bawah', $data, FALSE);
}
function updatemenu(){
if ($this->access->getupdate($this->session->userdata('group_id'))==FALSE) {
			$this->session->set_flashdata('access', 'value');
			redirect($_SERVER['HTTP_REFERER']);

		}
	$this->db->trans_begin();

			$value = [
				'menu'			=> $this->input->post('namamenu',TRUE),
				'parent'		=> $this->input->post('parent',TRUE),
				'link'			=> $this->input->post('link',TRUE),
				'is_published'	=>1,
				'menu_order'	=>1,
			];

			$parent = $this->input->post('parent',TRUE);

			if($parent == 0) {
				$value['level'] = 0;
				$value['icon'] 	= $this->input->post('icon',TRUE);
			} else {
				$value['level'] = $this->home->get_level_menu($parent);
				$value['icon']	= NULL;
			}

			$data_menu = $value;
			$id = $this->input->post('id',TRUE);

			$this->global->update('menus', $data_menu, ['id' => $id]);


			if ($this->db->trans_status() === FALSE) {
	            $this->db->trans_rollback();
				$this->session->set_flashdata('error','error');
				redirect('home/menu');

	        } else {
	        	$this->db->trans_commit();

	        }
$this->session->set_flashdata('susscess','success');
redirect('home/menu');
exit();

		

}
}

/* End of file Menuconfig.php */
/* Location: .//var/www/html/mypro/app/modules/home/controllers/Configuration/Menuconfig.php */