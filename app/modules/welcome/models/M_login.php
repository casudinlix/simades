<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    function login($email,$pass){
        
$query=$this->db->get_where('users_login',array('email'=>$email,
'pass'=>$pass,'active'=>1));
return $query;
        

    }

function forgot($email){
	$this->db->get_where('logins',array('email'=>$email));
	 
	
	$this->email->from('admin@casudin.net', 'admin');
	$this->email->to($email);
	 
	
	$this->email->subject('Forgot Password');

	$this->email->message('sdfsdfsdfsdfsdfsdf');
	
	$this->email->send();
	
	echo $this->email->print_debugger();

}

}

/* End of file M_login.php */
