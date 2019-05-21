<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_get('UCT');
class C_module_agent extends MY_Controller {

<<<<<<< HEAD
	public function __construct()
	{
		parent::__construct();
		$this->load->model('configuration/M_module_agent', 'modag');
		$this->load->model('configuration/M_module', 'mod');
		$this->load->model('sys/M_sys_user', 'user');
	}

	public function index()
	{
		$data['all_data'] = $this->modag->get_data();
		
		$data_module = $this->mod->get_data();
		
		$data['select_module'] = create_select_list($data_module, 'id_module', 'libelle_module');

	$this->load->view('configuration/V_module_agent', $data);
		
	}
=======

    public function __construct()
    {
        parent::__construct();
        $this->load->model('configuration/M_module', 'mod');
    }

    public function index()
    {
        $data['all_data'] = $this->mod->get_data();

        $this->load->view('configuration/V_module_agent', $data);

    }
>>>>>>> 5ce82ea16ede4bc5b8f290476909a39fdcbd98d3


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


    public function get_list()
    {
        $args = func_get_args();
        $data = $this->mod->get_list($args[0]);
        echo json_encode($data, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);

    }
}

