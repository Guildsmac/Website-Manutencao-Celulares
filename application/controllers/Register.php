<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller{
    public function index(){
    	$this->load->helper('form');
        $this->template->load('template', 'register');

    }

    public function userRegister(){
    	$this->load->library('form_validation');
    	$nome = $this->input->post('nome');
    	$email = $this->input->post('email');
    	$senha = $this->input->post('senha');
    	$endereco = $this->input->post('endereco');
    	$numTelefone = $this->input->post('numTelefone');
    	$cpf = $this->input->post('cpf');
    	$dataNasc = $this->input->post('Data_de_Nascimento');
    	$this->form_validation->set_rules('email', 'Email', 'required');
    	$this->form_validation->set_rules('Data_de_Nascimento', 'Data de Nascimento', 'required');
    	$this->form_validation->set_rules('endereco', 'Endereço', 'required');
    	$this->form_validation->set_rules('numTelefone', 'Número de Telefone', 'required');
    	$this->form_validation->set_rules('cpf', 'CPF', 'required');
    	$this->form_validation->set_rules('senha', 'Senha', 'required');
    	$this->form_validation->set_rules('nome', 'Nome', 'required');
    	if($this->form_validation->run() == FALSE){
    		$this->index();
    	}
    	else{
    		$this->load->database();
    		$data['email'] = $email;
    		$data['dtNascimento'] = $dataNasc;
    		$data['endereco'] = $endereco;
    		$data['numTelefone'] = $numTelefone;
    		$data['cpf'] = $cpf;
    		$data['senha'] = $senha;
    		$data['nome'] = $nome;
    		$data['permissionLevel'] = 0;
    		$this->db->insert('usuario',$data);
    		redirect(base_url());
    	}

    }

}