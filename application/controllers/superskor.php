<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct() {
        parent::__construct();
		
    }

	public function index() {
		$this->load->view('template/header');
		$this->load->view('v_pagesuperskor');
		$this->load->view('template/footer');
	}
}
