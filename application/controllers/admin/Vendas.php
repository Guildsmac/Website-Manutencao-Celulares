<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendas extends CI_Controller
{

    public function alter_venda(){
        $post_data = $this->input->post();
        $vendas = $this->db->get('venda')->result();
        foreach($vendas as $i){
            if(isset($post_data['excluir_' . $i->idVenda])) {
                $this->db->where('idVenda', $i->idVenda);
                $this->db->delete('venda');
            }
        }
        redirect(base_url('index.php/admin/Vendas'));
    }

	public function index(){
        $this->load->helper('password_confirmer');
        $vendas = $this->db->get('venda')->result();
        $result = array();
        if(sizeof($vendas)>=1){
            foreach($vendas as $i) {
                $this->db->where('idUsuario', $i->Usuario_idUsuario);
                $usuario = $this->db->get('usuario')->result();
                $usuario = $usuario[0];
                $this->db->where('idComponente', $i->Componente_idComponente);
                $componente = $this->db->get('componente')->result();
                $componente = $componente[0];
                array_push($result, array(
                    'dtVenda' => $i->dtVenda,
                    'idVenda' => $i->idVenda,
                    'nomeCliente' => $usuario->nome,
                    'emailCliente' => $usuario->email,
                    'nomeComponente' => $componente->nome,
                    'marcaComponente' => $componente->marca,
                    'precoVenda' => $componente->preco
                ));

            }
        }
        $r = array('result' => $result);
        password_confirmer($this, $this->session->userdata(), 'admin/vendas', $r);
	}
	
}