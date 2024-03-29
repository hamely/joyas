<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->_load_layout('inicio');
	}
	public function saludo()
	{
		$this->load->view('inicio');
	}

	public function product()
	{
		$this->_load_layout('product');
	}

	public function detailproduct()
	{
		$this->_load_layout('detailproduct');
	}
	public function contact()
	{
		$this->_load_layout('contact');
	}

	
	function _load_layout($template)
	{

		$this->load->view('layouts/header');
		$this->load->view($template);
		$this->load->view('layouts/footer');
	}
}
