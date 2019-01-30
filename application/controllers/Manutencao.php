<?php
/**
 * Created by PhpStorm.
 * User: guild
 * Date: 25/01/2019
 * Time: 22:22
 */


defined('BASEPATH') OR exit('No direct scripts access allowed');

class Manutencao extends CI_CONTROLLER{
	public function index(){
		if(count($this->session->userdata()) <= 1)
			redirect(base_url('index.php/register'));
		
		else{
			$this->load->database();
			$this->load->helper('form');
			$celulares = $this->db->get('celular')->result();
			$data = array('sess_data' => $this->session->userdata(), 'celulares' => $celulares);
			$this->template->load('template', 'manutencao', $data);
		}
	}
}

?>