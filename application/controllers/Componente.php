<?php
/**
 * Created by PhpStorm.
 * User: guild
 * Date: 25/01/2019
 * Time: 22:22
 */


defined('BASEPATH') OR exit('No direct scripts access allowed');

class Componente extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function confirm_buy(){
        if(count($this->session->userdata())>1 && key_exists('idUser', $this->input->post()) && key_exists('idComponente', $this->input->post())) {
            $data['Usuario_idUsuario'] = $this->input->post('idUser');
            $data['Componente_idComponente'] = $this->input->post('idComponente');
            $data['dtVenda'] = date("d/m/Y");
            $this->db->insert('venda', $data);
            $dados = array('sess_data' => $this->session->userdata(), 'nomeComponente' => $this->input->post('nomeCompra'), 'marcaComponente' => $this->input->post('marcaCompra'));
            $this->template->load('template', 'compra_sucesso', $dados);

        }else {
            $data = array('page' => 'Página de Compra');
            $this->load->view('errors/auth/acesso_negado', $data);
        }

    }

    public function buy($id){
        if(count($this->session->userdata())>1) {
            $this->load->helper('form');
            $this->load->database();
            $this->db->where('idComponente', $id);
            $componente = $this->db->get('componente')->result();
            $componente = array('sess_data' => $this->session->userdata(), 'data' => $componente[0]);
            $this->template->load('template', 'compra_componente', $componente);

        }else
            redirect(base_url() .  'index.php/register');
    }

    public function index()
    {
        $data = array('sess_data' => $this->session->userdata(),
            'hasResult' => FALSE,
            'message' => 'Erro desconhecido',
            'componentes' => array());
        $this->load->database();
        $componentes = $this->db->get('componente')->result();
        if (count($componentes) >= 1) {
            $data['hasResult'] = TRUE;
            foreach ($componentes as $i) {
                array_push($data['componentes'], array(
                    'idComponente' => $i->idComponente,
                    'nome' => $i->nome,
                    'marca' => $i->marca,
                    'modelo' => $i->modelo,
                    'preco' => $i->preco,
                    'modelosCompativeis' => $this->getModelosCompativeis($i->idComponente)
                ));
            }
        } else
            $data['message'] = 'Não há dados a serem mostrados.';
        $this->template->load('template', 'listacomponentes', $data);
    }

    private function getModelosCompativeis($idComponente)
    {
        $celular = $this->db->get('celular')->result();
        $return = array('hasResult' => FALSE, 'resultado' => array());
        foreach($celular as $i){
            $this->db->where('idComponente', $idComponente);
            $this->db->where('idCelular', $i->idCelular);
            $temp = $this->db->get('compatibilidade')->result();
            if(count($temp)==1) {
                array_push($return['resultado'], $i->modelo);
                $return['hasResult'] = TRUE;
            }
        }
        return $return;
    }
}