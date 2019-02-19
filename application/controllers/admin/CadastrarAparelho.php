<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrarAparelho extends CI_Controller
{

    public function cadastra_aparelho(){
        $post_data = $this->input->post();
        unset($post_data['confirmButton']);
        $this->db->insert('celular', $post_data);
        redirect(base_url('index.php/admin/CadastrarAparelho'));
    }



	public function index(){
	    $this->load->helper('password_confirmer');
		password_confirmer($this, $this->session->userdata(), 'admin/cadastrarAparelho', null);
	}
	
}