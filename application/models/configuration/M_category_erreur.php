<?php

class M_category_erreur extends MY_Model
{
    public $id_categorie_erreur;
    public $libelle_categorie;

    public function get_db_table()
    {
        return 'category_erreur';
    }

    public function get_db_table_pk()
    {
        return 'id_categorie_erreur';
    }

    public function set_id_category_erreur($id_categorie_erreur)
    {
        $this->id_categorie_erreur = $id_categorie_erreur;
    }

    public function get_libelle_categorie()
    {
        return $this->libelle_categorie;
    }

    public function set_libelle_categorie($libelle_categorie)
    {
        $this->libelle_categorie = $libelle_categorie;
    }
}


