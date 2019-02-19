<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CadastrarPecas extends CI_Controller
{

    public function cadastra(){
        $post_data = $this->input->post();
        $this->db->insert('componente', $post_data);
        redirect(base_url('index.php/admin/cadastrarpecas'));
    }

	public function index(){
        $this->load->helper('password_confirmer');
        password_confirmer($this, $this->session->userdata(), 'admin/cadastrarpecas', null);
	}
	
}