<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clientes extends CI_Controller
{

	public function index(){
		$this->template->load('admin/admin_template', 'admin/clientes');
	}
	
}