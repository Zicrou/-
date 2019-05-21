<?php
class C_connexions extends CI_Controller {
	public function __construct()
	{		
		parent::__construct();	
	    //initialisation de la session
	    $this->load->model('M_connexions', 'conn');
	    $this->load->model('sys/M_sys_role', 'role');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('javascript');


	}


	public function authentication()
	{

		$suite_req = site_url();

        $data['connexions_data'] = $this->conn->test_connexion();
		if(empty($data['connexions_data']))
		{
			
			$the_data = array(
				'ip' 			=> $_SERVER['REMOTE_ADDR'] ,
				'navigateur' 	=> $_SERVER['HTTP_USER_AGENT'],
				'login' 		=> str_replace("'","",$this->input->post('ien'))
					
			);

			//on log les erreurs
			header("Location:".$suite_req."sign-in?erreur=login");
		}
		else
		{
			$datas_user = array(
					   'nom'		=> $data['connexions_data']['nom'],
					   'id'			=> $data['connexions_data']['id'],
					   'ien'		=> $this->input->post('ien'),
					   'id_profil'	=> $data['connexions_data']['id_profil'],
					   'profil'	    => $data['connexions_data']['profil'],
					   'logged_in' 	=> TRUE
				);
            $id_profil 	= $data['connexions_data']['id_profil'];
            $ien 	    = $this->input->post('ien');

            $tab_mrole	= array();   ///Tableau des roles des menus
            $tab_smrole	= array();  ///Tableau des roles des sous menus
            $cur_menu	= '';

            $tab_role	= $this->role->get_conn_roles($id_profil);

            foreach($tab_role as $val)
            {
                ///Tableau des droits sur les menus
                if($cur_menu != $val->mcode)
                {
                    $tab_mrole[$val->mcode] = 1;
                    $cur_menu = $val->mcode;
                }

                //Tableau des droits sur les sous menus
                //On ne recup�re que les valeurs positives
                if($val->d_read){ $tab_smrole[$val->smcode]['d_read']	= $val->d_read;}
                if($val->d_add){ $tab_smrole[$val->smcode]['d_add']	= $val->d_add;}
                if($val->d_upd){ $tab_smrole[$val->smcode]['d_upd']	= $val->d_upd;}
                if($val->d_del){ $tab_smrole[$val->smcode]['d_del']	= $val->d_del;}
            }

            ///Chargement des donn�es de la tableau $data
            $data['menu_roles']		= $tab_mrole;
            $data['smenu_roles']	= $tab_smrole;
            //var_dump($tab_smrole);
          	//exit();

            $this->session->set_userdata('id', $data['connexions_data']['id']);
            $this->session->set_userdata('menu_roles', $data['menu_roles']);
            $this->session->set_userdata('smenu_roles', $data['smenu_roles']);
			$this->session->set_userdata($datas_user);

			//$this->load->view('template/layout',$data);
            header("Location:".$suite_req."dashboard");
		}
	}
		//redefinition de Dashbord
	public function home()
	{
		$this->load->view('template/layout');
	}
	
	//se_deconnecter
	public function se_deconnecter()
	{
		$suite_req = site_url();				
		$this->session->sess_destroy();	// destruction des donnees de la session
		header("Location:".$suite_req."sign-in");
	}

}
