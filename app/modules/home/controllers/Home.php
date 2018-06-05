<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	public function __construct()
    {
		 
	  parent::__construct();
	  
	  if (empty($this->session->userdata('login'))) {
	  	$this->session->set_flashdata('notlogin', 'value');
	  	redirect('welcome','refresh');
	  }
      $this->load->model('home_model','home');
	  
	}

    public function index()
    {
        $data['title']=" .:Home:.";
        $data['group']=$this->home->getprofil($this->session->userdata('user_login_id'))->row();

       $data['app']=$this->home->getapp()->row();
       $this->load->view('_part/atas', $data, FALSE);
       $this->load->view('home', $data, FALSE);
       $this->load->view('_part/bawah', $data, FALSE);

    }
    function logout(){
    	$this->session->sess_destroy();
    	redirect('welcome','refresh');

    }
    function menu_read() {
        //$this->myacl->validate_read();
    }
    function menu_specific_read() {
       // $this->myacl->validate_read(currentFunction());
    }
    function save_data() {
       // $this->myacl->validate_create();
    }

}

 
