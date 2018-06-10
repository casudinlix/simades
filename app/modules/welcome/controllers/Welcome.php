<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	public function __construct()
    {
		$this->load->model('m_login','login');
	  parent::__construct();
	  
	  if ($this->session->userdata('login')==TRUE) {
	  	redirect('home','refresh');
	  }
	  
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	function cek(){
$email=$this->input->post('email');
$pass=base64_encode( $this->input->post('pass'));
$cek =$this->login->login($email,$pass);
if ($cek->num_rows()>0) {
	foreach ($cek->result() as $key) {
	$session=array('login' =>TRUE ,
	'user_login_id'=>$key->id,
	'email'=>$key->email,
	'username'=>$key->username,
	'group_id'=>$key->group_id,
	 );
	}
	 
	
	$this->session->set_userdata($session );
	redirect('home','refresh');
}else{
	
	$this->session->set_flashdata('error', 'value');
	redirect('welcome','refresh');
}


		
	}
	function forgotpass(){
		$this->login->forgot($this->input->post('email', TRUE));
		redirect('welcome','refresh');
	}
}
