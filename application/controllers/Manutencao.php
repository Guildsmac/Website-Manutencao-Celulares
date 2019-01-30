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

	public function solicita(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('problemaInput', 'Problema', 'required',
            array('required' => 'Você deve inserir o nome do problema'));
        if($this->form_validation->run() == FALSE){
            $celulares = $this->db->get('celular')->result();
            $data = array('sess_data' => $this->session->userdata(), 'celulares' => $celulares);
            $this->template->load('template', 'manutencao', $data);
        }else{
            $cost = rand(10, 100);
            $data = array('sess_data' => $this->session->userdata(), 'cost' => $cost);
            $this->load->database();
            $data_db['dtPedido'] = date('d/m/y');
            $data_db['custo'] = $cost;
            $data_db['Celular_idCelular'] = $this->input->post('modelos');
            $data_db['Usuario_idUsuario'] = $this->session->userdata('session_id');
            $data_db['problema'] = $this->input->post('problemaInput');
            $data_db['descricaoProblema'] = $this->input->post('descProblemaInput');
            $this->db->insert('manutencao', $data_db);
            $this->template->load('template', 'manutencao_sucesso', $data);


        }
    }
}

?>