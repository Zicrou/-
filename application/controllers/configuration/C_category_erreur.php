<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_get('UCT');
class C_category_erreur extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('configuration/M_category_erreur', 'cat');
    }

    public function index()
    {
        $data['all_data'] = $this->cat->get_data();

        $this->load->view('configuration/V_category_erreur', $data);

    }


    public function save()
    {
        if ($this->input->post('id_categorie_erreur') != '')
        { $this->cat->id_categorie_erreur = $this->input->post('id_categorie_erreur');}


        $this->cat->libelle_categorie = $this->input->post('libelle_categorie');

        echo json_encode($this->cat->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

    }
    public function get_record()
    {
        $args = func_get_args();
        $this->cat->id_categorie_erreur = $args[0];
        $this->cat->get_record();
        echo json_encode($this->cat, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }


    public function delete()
    {
        $args = func_get_args();
        $this->cat->id_categorie_erreur = $args[0];
        echo json_encode($this->cat->delete(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

}

