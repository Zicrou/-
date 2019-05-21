<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_get('UCT');
class C_module extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('configuration/M_module', 'mod');
	}

	public function index()
	{
		$data['all_data'] = $this->mod->get_data();

		$this->load->view('configuration/V_module', $data);
		
	}


    public function save()
    {
        if ($this->input->post('id_module') != '')
        { $this->mod->id_module = $this->input->post('id_module');}


        $this->mod->libelle_module = $this->input->post('libelle_module');

        echo json_encode($this->mod->save(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

    }
    public function get_record()
    {
        $args = func_get_args();
        $this->mod->id_module = $args[0];
        $this->mod->get_record();
        echo json_encode($this->mod, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }


    public function delete()
    {
        $args = func_get_args();
        $this->mod->id_module = $args[0];
        echo json_encode($this->mod->delete(), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
    }

}

