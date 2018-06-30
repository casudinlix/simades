
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
public function __construct()
    {
      parent::__construct();
  }

  function getapp(){
  	return $this->db->get('apps');
  }
	function getprofil($id){
	return	$this->db->get_where('view_users',array('users_id'=>$id));

	}
	function getmenulist(){
		return $this->db->get('menus');
	}

	function get_level_menu($parent){
		$result = $this->db->get_where('menus',['id' => $parent])->row_array();

		return $result['level'] + 1;
	}
	function menudetil($id){
return $this->db->get_where('menus',['id'=>$id]);
	}
	function getgrop(){
		return $this->db->get('users_group');
	}

	function getdetilgroup($id){
return $this->db->get_where('users_group',['id'=>$id]);
	}
	function getaksesmenu($id){
		return $this->db->get_where('view_permission',['id'=>$id]);
	}
	function getuser(){
		return $this->db->get('users_login');
	}
	function getuserdetil($id){
		return $this->db->get_where('view_users',['users_id'=>$id]);
	}
	function getpermission($id){
return $this->db->get_where('view_permission',['users_login_id'=>$id]);
	}
function getuserall(){
	return $this->db->get('view_users');
}
function getgroup(){
	return $this->db->get('users_group');
}
function getwarga(){
  return  $this->db->query("SELECT * FROM view_warga WHERE id >0");


}
function getkk(){
  return $this->db->get('view_kk');
}
function getrt(){
  return $this->db->get('master_rtrw');

}
function getagama(){
  return $this->db->get('master_agama');
}
function getpendidikan(){
  return $this->db->get('master_pendidikan_kk');
}
function getstatuspendidikan(){
return $this->db->get('master_status_pendidikan');
}
function getpendkk(){
    return $this->db->get('master_pendidikan_kk');

}
function getpekerjaan(){
    return $this->db->get('master_pekerjaan');

}
function statuskawin(){
    return $this->db->get('master_kawin');

}
function getwn(){
  return $this->db->get('master_warganegara');
}
function getgoldarah(){
  return $this->db->get('master_golongan_darah');
}
function getstatus(){
  return $this->db->get('master_status');
}
function getwargadetil($data){
  return $this->db->get_where('view_warga',['id'=>$data]);

}
}

/* End of file Home_model.php */
/* Location: .//var/www/html/mypro/app/modules/home/models/Home_model.php */
