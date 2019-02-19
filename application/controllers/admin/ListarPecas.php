<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ListarPecas extends CI_Controller
{

    public function gerencia_pecas(){
        $post_data = $this->input->post();
        $componentes = $this->db->get('componente')->result();
        foreach($componentes as $i){
            if(isset($post_data['excluir_'.$i->idComponente])){
                $this->db->where('idComponente', $i->idComponente);
                $this->db->delete('componente');
            }else{
                $updating_values = array(
                    'nome' => $post_data['nome_'.$i->idComponente],
                    'marca' => $post_data['marca_'.$i->idComponente],
                    'modelo' => $post_data['modelo_'.$i->idComponente],
                    'preco' => $post_data['preco_'.$i->idComponente]
                );
                $this->db->where('idComponente', $i->idComponente);
                $this->db->update('componente', $updating_values);

            }
        }
        redirect(base_url('index.php/admin/listarpecas'));
    }

	public function index(){
        $this->load->helper('password_confirmer');
        $componentes = $this->db->get('componente')->result();
        $r = array('componentes' => $componentes);
        password_confirmer($this, $this->session->userdata(), 'admin/listarpecas', $r);
	}
	
}