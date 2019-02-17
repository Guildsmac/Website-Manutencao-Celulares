<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendas extends CI_Controller
{

	public function index(){
		$this->template->load('admin/admin_template', 'admin/vendas');
	}
	
}