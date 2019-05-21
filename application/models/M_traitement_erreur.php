<?php

class M_traitement_erreur extends MY_Model
{
	public $id_traitement_erreur;
	public $id_recensement;
    public $description_traitement;
    public $ien_traiteur;
    public $date_traitement;
   
    

    public function get_db_table()
    {
        return 'traitement_erreur';
    }
    
    public function get_db_table_pk()
    {
        return 'id_traitement_erreur';
    }

   
}