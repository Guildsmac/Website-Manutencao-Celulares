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
        var_dump($this->input->post());
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