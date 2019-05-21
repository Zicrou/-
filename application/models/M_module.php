<?php

class M_module extends MY_Model
{
	private $id_module;
    private $libelle_module;
    
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
}


