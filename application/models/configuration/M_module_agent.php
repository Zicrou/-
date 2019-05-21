<?php

class M_module_agent extends MY_Model
{
	public $id_module;
    public $ien_agent;
    public $date_affectation;
    public $ien_affecter;
    
    
    public function get_db_table()
    {
        return 'module_agent';
    }
    
    public function get_db_table_pk()
    {
        return 'id_module';
    }
    
    public function get_data()
    {
        return $this->db->select('*')
            ->from($this->get_db_table())
            ->join('modules mod', 'mod.id_module = module_agent.id_module')
            ->join('sys_user user', 'user.id = module_agent.ien_affecter')
            ->join('agent', 'agent.ien_agent = user.ien')
            ->get()
            ->result();
    }
    
}


