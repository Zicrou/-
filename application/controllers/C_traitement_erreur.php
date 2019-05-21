<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_get('UCT');
class C_traitement_erreur extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_recensement_erreur', 'recense');
		$this->load->model('M_category_erreur', 'categor');
		$this->load->model('M_module', 'mod');
		$this->load->model('M_traitement_erreur', 'ter');
	}

	public function index()
	{
		
	}

	public function aide()
	{
		$data['all_data'] = $this->recense->get_data();

		$category = $this->categor->get_data();
		$data['select_category'] = create_select_list($category,'id_categorie_erreur' , 'libelle_categorie');

		$modu = $this->mod->get_data();
		$data['select_mod'] = create_select_list($modu, 'id_module', 'libelle_module');

		$this->load->view('recensement/V_aide', $data);
	}

	public function save()
    {
		$args = func_get_args();

		if($this->input->post('id_traitement_erreur') != '')
		{$this->ter->id_traitement_erreur = $this->input->post('id_traitement_erreur');}
		
		var_dump( $args[0]);
		exit();
		$this->ter->id_recensement = $args[0];
		$this->ter->ien_traiteur = $_SESSION['ien'];
        $this->ter->description_traitement = $this->input->post('description_traitement_erreur');
		$this->ter->date_traitement = date('Y-m-d-H-i-s');
		
		$d = $this->ter->save();
		$d['message'] = "Message envoyé avec succés";
		$d['type']  = "success";
		echo json_encode($d, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

	public function affecter()
	{
		echo json_encode($this->recense, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
	}

	public function ma_khol()
	{
		
	}

	public function get_record()
	{
		$args = func_get_args();
		$this->ter->id_recensement = $args[0];
		$this->ter->get_record();
		echo json_encode($this->ter, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
	}


}

