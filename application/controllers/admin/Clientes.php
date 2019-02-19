<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clientes extends CI_Controller
{

    public function gerencia_clientes(){
        $post_data = $this->input->post();
        var_dump($post_data);
        $usuarios = $this->db->get('usuario')->result();
        foreach($usuarios as $i){
            $id = $i->idUsuario;
            if(isset($post_data['excluir_'.$id])){
                $this->db->where('idUsuario', $id);
                $this->db->delete('usuario');
            }else{
                $updating_data = array(
                    'nome' => $post_data['nome_'.$id],
                    'email' => $post_data['email_'.$id],
                    'dtNascimento' => $post_data['dtnasc_'.$id],
                    'endereco' => $post_data['endereco_'.$id],
                    'numTelefone' => $post_data['telefone_'.$id],
                    'cpf' => $post_data['cpf_'.$id],
                    'permissionLevel' => isset($post_data['admin_'.$id]) ? 1 : 0
                );
                $this->db->where('idUsuario', $id);
                $this->db->update('usuario', $updating_data);
            }
        }
        redirecT(base_url('index.php/admin/clientes'));
    }

	public function index(){
        $this->load->helper('password_confirmer');
        $usuarios = $this->db->get('usuario')->result();
        $r = array('usuarios' => $usuarios);
        password_confirmer($this, $this->session->userdata(), 'admin/clientes', $r);
	}
	
}