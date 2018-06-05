 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Model {

	function getread($id){
		return $this->db->get_where('view_users',array('id'=>$id,'a_read'=>1))->row();
	}
	function getcreate($id){
		return $this->db->get_where('view_users',array('id'=>$id,'a_create'=>1))->row();

	}
	function getupdate($id){
		return $this->db->get_where('view_users',array('id'=>$id,'a_update'=>1))->row();

	}
	function getdelete($id){
		return $this->db->get_where('view_users',array('id'=>$id,'a_delete'=>1))->row();

	}
	function getreport($id){
		return $this->db->get_where('view_users',array('id'=>$id,'a_report'=>1))->row();

	}

}

/* End of file Access.php */
/* Location: .//var/www/html/mypro/app/modules/home/models/Access.php */