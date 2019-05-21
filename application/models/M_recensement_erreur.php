<?php

class M_recensement_erreur extends MY_Model
{
	public $id_recensement;
    public $ien_deposant;
    public $id_categorie_erreur;
    public $id_module;
    public $description_erreur;
    public $date_recensement;
    public $etat_erreur;
    
    public function get_data()
    {
        $sql = "SELECT res.*,cat.libelle_categorie ,mo.libelle_module
		FROM recensement_erreur res
        INNER JOIN category_erreur cat 
                               ON (cat.id_categorie_erreur=res.id_categorie_erreur)
        INNER JOIN modules mo 
                               ON (mo.id_module=res.id_module) ";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_db_table()
    {
        return 'recensement_erreur';
    }
    
    public function get_db_table_pk()
    {
        return 'id_recensement';
    }

    public function get_all_data()
    {
        return $this->db->select("*")
            ->from($this->get_db_table() .' recens')
            ->join('category_erreur categor', 'categor.id_categorie_erreur = recens.id_categorie_erreur')
            ->join('modules mod', 'mod.id_module = recens.id_module')
            ->join('module_agent modag', 'modag.id_module = recens.id_module')
            ->get()
            ->result();
    }

    public function set_id_recensement($id)
    {
        $this->id_recensement = $id;
    }

    public function get_ien_deposant()
    {
        return $this->ien_deposant;
    }

    public function set_ien_deposant($ien)
    {
        $this->ien_deposant = $ien;
    }

    public function get_id_categorie_erreur()
    {
        return $this->id_categorie_erreur;
    }

    public function set_id_categorie_erreur($id)
    {
        $this->id_categorie_erreur = $id;
    }

    public function get_id_module()
    {
        return $this->id_module;
    }

    public function set_id_module($id)
    {
        $this->id_module = $id;
    }

    public function get_description_erreur()
    {
        return $this->description_erreur;
    }

    public function set_description_erreur($description)
    {
        $this->description_erreur = $description;
    }

    public function get_date_recensement()
    {
        return $this->date_recensement;
    }

    public function set_date_recensement($date)
    {
        $this->date_recensement = $date;
    }

    public function get_etat_erreur()
    {
        return $this->etat_erreur;
    }

    public function set_etat_erreur($etat_erreur)
    {
        $this->etat_erreur = $etat_erreur;
    }
}


