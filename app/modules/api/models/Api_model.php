 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {

	function getmenu(){
		return $this->db->get('menus');
	}

}

/* End of file Api_model.php */
/* Location: .//var/www/html/mypro/app/modules/api/models/Api_model.php */