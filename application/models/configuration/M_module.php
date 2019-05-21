<?php

class M_module extends MY_Model
{
	public $id_module;
    public $libelle_module;
    
    public function get_db_table()
    {
        return 'modules';
    }
    
    public function get_db_table_pk()
    {
        return 'id_module';
    }
    
    public function set_id_module($id_module)
    {
        $this->id_module = $id_module;
    }

    public function get_libelle_module()
    {
        return $this->libelle_module;
    }
    
    public function set_libelle_module($libelle_module)
    {
        $this->libelle_module = $libelle_module;
    }

    public function get_list($id_module)
    {

        return $this->db->select("ag.nom_agent,mag.id_module")
            ->from("module_agent mag")
            ->join('agent ag', 'ag.ien_agent = mag.ien_agent')
            ->join('modules mod', 'mod.id_module = mag.id_module')
            ->where("mag.id_module" , $id_module)
            ->get()
            ->result();
    }

}


