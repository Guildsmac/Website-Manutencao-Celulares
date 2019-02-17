<?php
/**
 * Created by PhpStorm.
 * User: guild
 * Date: 25/01/2019
 * Time: 20:24
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminManutencao extends CI_Controller
{

	public function index(){
		$this->template->load('admin/admin_template', 'admin/manutencao');
	}
	
}