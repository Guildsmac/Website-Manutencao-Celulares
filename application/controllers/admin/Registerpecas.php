<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registerpecas extends CI_Controller{
    public function index(){
        if(count($this->session->userdata())<=1) {
            $data = array('sess_data' => $this->session->userdata());
            $this->load->helper('form');
            $this->template->load('template', 'registerpecas', $data);
        }else
            redirect(base_url() . "index.php/admin/adminhomepage");

    }

    public function registroComponente(){
    	$this->load->library('form_validation');
    	$nome = $this->input->post('nome');
    	$marca = $this->input->post('marca');
    	$modelo = $this->input->post('modelo');
    	$preco = $this->input->post('preco');
    	$this->form_validation->set_rules('nome', 'Nome', 'required');
    	$this->form_validation->set_rules('marca', 'Marca', 'required');
    	$this->form_validation->set_rules('modelo', 'Modelo', 'required');
    	$this->form_validation->set_rules('preco', 'Preco', 'required');
    	if($this->form_validation->run() == FALSE){
    		$this->index();
    	}
    	else{
    		$this->load->database();
    		$data['nome'] = $nome;
    		$data['marca'] = $marca;
    		$data['modelo'] = $modelo;
    		$data['preco'] = $preco;
    		$this->db->insert('componente',$data);
    		redirect(base_url());
    	}

	}
	
	public function listarComponente(){
		
			
	}

}