<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_get('UCT');
class C_engagement extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('engagement/M_engagement', 'engage');
		
	}

	public function index()
	{
		$data['all_data'] = $this->recense->get_data();
		
		$this->load->view('recensement/V_recensement_erreur', $data);
		
	}

	public function affecter()
	{
		echo 'bie ici Zicrou';
	}

	public function ma_khol()
	{
        $args = func_get_args();
        $this->engage->id_engagement = $args[0];
        $data = $this->engage->get_data();
        echo json_encode($data, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

	}

	public function get_record()
	{
		
	}


}

