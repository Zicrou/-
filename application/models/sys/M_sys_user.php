<?php
class M_sys_user extends MY_Model
{


    public $id ;
    public $ien ;
    public $id_profil;
    public $code_str;
    public $statut;

	public function get_data( /*$code_str*/)

	{

		return $this->db->select("usr.id as id, ag.nom_agent as nom, ssp.libelle_type_profil AS profil, usr.ien")
			->from($this->get_db_table() . ' as usr')
			->join('agent as ag', 'ag.ien_agent = usr.ien')
			->join('sys_type_profil as ssp', 'ssp.id_type_profil = usr.id_profil')
			->get()
			->result();

		/*		$sql = "SELECT
                            usr.id as id_user, CONCAT(UPPER(ens.prenom_ens), ' ',UPPER(ens.nom_ens)) AS prenom_nom,
                            usr.email,
                            pr.libelle_type_profil AS profil,
                            usr.ien
                        FROM
                            sys_niits usr
                        INNER JOIN sys_type_profil pr ON (pr.id_type_profil = usr.id_profil)";
                       WHERE usr.code_str = '$code_str'";

                $query = $this->db->query($sql);*/

	}

	public function verif_ien()
    {
        $sql = "SELECT * FROM agent AS ag 
        WHERE ag.ien_agent = '".$this->ien."'";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    public function verif_ienusr()
    {
        $sql = "SELECT * FROM sys_user AS usr 
        WHERE usr.ien = '".$this->ien."'";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

	public function get_db_table()
    {
		return 'sys_user';
	}

    public function get_db_table_pk()
    {
        return 'id';
    }


}