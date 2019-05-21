<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_sys_user extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sys/M_sys_user', 'user');
        $this->load->model('sys/M_sys_profil', 'profil');
        //$this->load->model('M_table_param');
    }

    public function index()
    {


        $user_data = $this->user->get_data();
        $data['all_data'] = $user_data;

        $profil = $this->profil->get_data();
        $data['select_profile'] = create_select_list($profil, 'id_type_profil', 'libelle_type_profil');

        $this->load->view('sys/V_sys_user', $data);
    }

    public function save()
    {
        if ($this->input->post('id') != '')
        { $this->user->id = $this->input->post('id');}


        $this->user->ien = $this->input->post('ien');
       // $a=$this->input->post('ien');


        if (empty($this->user->verif_ien()))
        {
            $d=array("status" => "error", "message" =>"Ien inexistante" );

            echo json_encode($d, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
            die();
        }

        elseif (!empty($this->user->verif_ienusr()))
        {
            $d=array("status" => "error", "message" =>"Ien deja utilisateur" );

            echo json_encode($d, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
            die();
        }

        else
        {
            $recup = $this->user->verif_ien();

            $this->user->id_profil = $this->input->post('id_profil');
            $this->user->statut    = '1';

            echo json_encode($this->user->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

        }
    }

    public function get_record()
    {
        $args = func_get_args();
        $this->user->id = $args[0];
        $this->user->get_record();
        echo json_encode($this->user, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }


    public function delete()
    {
        $args = func_get_args();
        $this->user->id = $args[0];

        echo json_encode($this->user->delete(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

}
