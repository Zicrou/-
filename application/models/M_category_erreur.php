<?php

class M_category_erreur extends MY_Model
{
	public $id_category_erreur;
    public $libelle_category;
    
    public function get_db_table()
    {
        return 'category_erreur';
    }
    
    public function get_db_table_pk()
    {
        return 'id_category_erreur';
    }

    public function set_id_category_erreur($id_category_erreur)
    {
        $this->id_category_erreur = $id_category_erreur;
    }

    public function get_libelle_category()
    {
        return $this->libelle_category;
    }
    
    public function set_libelle_module($libelle_category)
    {
        $this->libelle_category = $libelle_category;
    }
}


