<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_acl extends CI_Model {

	
function currentFunction() {
	$CI =& get_instance();
	return $CI->router->fetch_method();
}

function getClassName() {
	$CI = &get_instance();
	return $CI->router->fetch_class();
}

}

/* End of file M_acl.php */
/* Location: .//var/www/html/mypro/app/models/M_acl.php */