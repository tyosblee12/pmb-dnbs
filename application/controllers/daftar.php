<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('daftar/daftar');
		$this->load->view('template/footer');
		
	}

}