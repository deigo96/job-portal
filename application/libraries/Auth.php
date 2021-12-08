<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth
{
	public function cekAPI($query = "", $method = "", $data = "")
	{
		$CI = &get_instance();
		$CI->load->library('Curl');
		$API_URL = "http://localhost:3000/";
		$CI->curl->create($API_URL . $query);

		if ($method == 'POST') {
			$CI->curl->post($data);
		} else if ($method == 'DEL') {
			$CI->curl->delete($data);
		} else if ($method == 'PATCH') {
			$CI->curl->patch($data);
		}

		$result = $CI->curl->execute();
		return $result;
	}
}