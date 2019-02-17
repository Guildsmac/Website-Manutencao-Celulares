<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CadastrarPecas extends CI_Controller
{

	public function index(){
		$this->template->load('admin/admin_template', 'admin/cadastrarpecas');
	}
	
}