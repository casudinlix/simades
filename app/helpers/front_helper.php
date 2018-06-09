<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
if ( ! function_exists('tema')){

	function tema($uri = '',$protocol = NULL){
		$CI =& get_instance();
		$tema="front";


		$tema.="/";
		$tema.=$uri;

	return $CI->config->base_url($tema, $protocol);

	}
	function icon($uri = '',$protocol = NULL){
		$CI =& get_instance();
		$icon="front/img";


		$icon.="/";
		$icon.=$uri;

	return $CI->config->base_url($icon, $protocol);


	}
}