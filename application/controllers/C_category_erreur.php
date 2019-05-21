<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_category_erreur extends MY_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('M_category_erreur', 'categor');
	}

	public function index()
	{		
        $data_categor =  $this->categor->get_data();
        var_dump($data_categor[0]);
        exit();
	}

}
