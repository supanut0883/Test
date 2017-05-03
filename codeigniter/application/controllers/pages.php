<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($name = 'sPk') {
		$page = 'home';

		// if(!file_exists('application/views/pages/'. $page . '.php')) {
		// 	show_404();
		// }
 
		$data['title'] = ucfirst($page);
		$data['name'] = $name;
 
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}
?>