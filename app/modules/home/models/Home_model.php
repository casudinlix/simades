 
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

}

/* End of file Home_model.php */
/* Location: .//var/www/html/mypro/app/modules/home/models/Home_model.php */