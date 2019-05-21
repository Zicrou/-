<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	private function the_session_expired()
	{
		/*@$tab_data_ses = $this->session->all_userdata();

		$is_authorised			= "";
		$is_authorised_regex	= "";
		$prenom	= $tab_data_ses['daj85_cour9_fr']['nom'];

		$id = $tab_data_ses['daj85_cour9_fr']['id'];

		if (empty($prenom) || empty($id) || !empty($is_authorised) || !empty($is_authorised_regex))
		{
			$tab_data_ses = $this->session->all_userdata();
			$this->session->sess_destroy();
			header("Location:".base_url('')."sign-in?erreur=login");
			exit();
		}
		else
		{
			return 1;
		}
		*/
		return 1;
	}

}

