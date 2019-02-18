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

    public function alter_data(){
        $post_data = $this->input->post();
        var_dump($post_data);
        $manutencao = $this->db->get('manutencao')->result();
        foreach($manutencao as $i){
            $id = $i->idManutencao;
            if(isset($post_data['excluir_' . $id])){
                $this->db->where('idManutencao', $id);
                $this->db->delete('manutencao');
            }
            else{
                $updating_data=array(
                    'custo' => $post_data['custo_' . $id],
                    'problema' => $post_data['nomeProb_' . $id],
                    'descricaoProblema' => $post_data['descProb_' . $id],
                    'dtEntrega' => isset($post_data['entregue_' . $id]) ? date('d/m/y') : ''
                );
                $this->db->where('idManutencao', $id);
                $this->db->update('manutencao', $updating_data);
            }

        }
        redirect(base_url('index.php/admin/AdminManutencao'));
    }

	public function index(){
        $this->load->helper('password_confirmer');
        $manutencao = $this->db->get('manutencao')->result();
        $result = null;
        if(sizeof($manutencao)>=1)
            $result = array('manutencao' => $manutencao);

        password_confirmer($this, $this->session->userdata(), 'admin/manutencao', $result);
	}
	
}