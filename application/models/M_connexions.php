<?php
class M_connexions extends CI_Model {


	public function __construct()
	{
		$this->load->database();
	}

	public function test_connexion()
	{
        $this->load->helper('url');
        $ien = $this->input->post('ien');

		$sql = "SELECT urs.id, ag.nom_agent as nom ,pr.libelle_type_profil AS profil, pr.id_type_profil AS id_profil, urs.ien AS ien
		FROM sys_user urs
        INNER JOIN sys_type_profil pr 
                               ON (pr.id_type_profil=urs.id_profil)
        INNER JOIN agent ag 
                               ON (ag.ien_agent=urs.ien) 
    
        WHERE urs.ien='".$ien."' ";

        $query = $this->db->query($sql);
        return $query->row_array();

	}





}
