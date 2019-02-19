<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ListarAparelho extends CI_Controller
{

    public function gerencia_aparelho(){
        $post_data = $this->input->post();
        $celulares = $this->db->get('celular')->result();
        foreach($celulares as $i){
            if(isset($post_data['excluir_'.$i->idCelular])){
                $this->db->where('idCelular', $i->idCelular);
                $this->db->delete('celular');

            }else{
                $updating_array = array(
                    'marca' => $post_data['marca_'.$i->idCelular],
                    'modelo' => $post_data['modelo_'.$i->idCelular]
                );
                $this->db->where('idCelular', $i->idCelular);
                $this->db->update('celular', $updating_array);
            }
        }
        redirect('index.php/admin/ListarAparelho');
    }

	public function index(){
        $celulares = $this->db->get('celular')->result();
        $r = array('celulares' => $celulares);
        $this->load->helper('password_confirmer');
        password_confirmer($this, $this->session->userdata(), 'admin/ListarAparelho', $r);

	}
	
}