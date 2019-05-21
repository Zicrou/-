<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_get('UCT');
class C_recensement_erreur extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_recensement_erreur', 'recense');
		$this->load->model('M_category_erreur', 'categor');
		$this->load->model('M_module', 'mod');
	}

	public function index()
	{
		$data['all_data'] = $this->recense->get_data();
		/*var_dump($data['all_data'][0]);
		exit();*/
		$this->load->view('recensement/V_recensement_erreur', $data);
		
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
		$this->recense->set_ien_deposant($this->input->post('ien_deposant'));
        $this->recense-> set_id_categorie_erreur($this->input->post('id_categorie_erreur'));
        $this->recense->set_id_module($this->input->post('id_module'));
        $this->recense->set_description_erreur($this->input->post('description_erreur'));
        $this->recense->set_date_recensement(date('Y-m-d-H-i-s'));
		$this->recense->set_etat_erreur('0');
		$d = $this->recense->save();
		$d['message'] = "Message envoyé avec succés";
		$d['type']  = "success";
		$this->load->view('recensement/V_success', $d);
    }

	public function affecter()
	{
		echo 'bie ici Zicrou';
	}

	public function ma_khol()
	{
		
	}

	public function get_record()
	{
		/*$args = func_get_args();
		$this->recense->set_id_recensement($args[0]);
		$this->recense->get_record();*/
		$d['status'] = "success";
		$d['message'] = "Vous avez relevé le défi; Traitement en cours";
		echo json_encode($d, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
	}


}

