<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditaPecas extends CI_Controller
{

	public function index(){
		$this->template->load('admin/admin_template', 'admin/editapeca');
	}
	
}