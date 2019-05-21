<?php

class M_engagement extends MY_Model
{
	public $id_engagement;
	public $id_recensement_erreur;
    public $ien_agent;
    public $date_engagement;
    
    

    public function get_db_table()
    {
        return 'engagements';
    }
    
    public function get_db_table_pk()
    {
        return 'id_engagement';
    }

    public function get_data()
    {
        return $this->db->select("*")
            ->from($this->get_db_table() .' engage')
            ->join('recensement_erreur recens', 'recens.id_recensement = engage.id_recensement_erreur')
            ->join('agent', 'agent.ien_agent = engage.ien_agent')
            ->where($this->get_db_table_pk(), $this->id_engagement)
            ->get()
            ->result();
    }
}


