<?php

function btn_add_action($smenu_code)
{
    $fall = get_instance();
    /*$tab_smrole = $fall->session->smenu_roles;
	
	if(isset($tab_smrole[$smenu_code]['d_add']))
	{*/
		echo '<div class="row">
                <div class="col-sm-12" style="margin-bottom: 30px">
                    <button type="button" id="btn_add" class="btn btn-primary">Ajouter <span lass="m-l-5"><i
                                class="fa fa-plus-square"></i></span></button>
                </div>
            </div>';
	/*}*/
}


function btn_edit_action($id,$smenu_code)
{
	
		echo '<a href="#" class="on-default btn_edit"
		id="'.$id.'" style=""><i class="fa fa-edit"></i></a>';

}

/*function btn_edit_actio($id, $etat,$smenu_code)
{
	if ($etat == 2 ) {
		echo '<a href="#" class="on-default btn_edit"
		id="'.$id.'" style="color:#ff4757"><i class="fa fa-cogs"></i>Traiter</a>';
	}
}*/


function btn_delete_action($id, $smenu_code)
{
	echo '<a href="#" class="on-default btn_delete"
          id="'.$id.'"><i class="fa fa-trash" style="color:red"></i></a>&nbsp;';
}


function btn_show_action($id, $smenu_code)
{
    
		echo '<a href="#" class="on-default btn_edit"
           id="'.$id.'"><i class="fa fa-eye" style="color:#3c6382"></i></a>';

}
function btn_etat($etat, $smenu_code)
{
		if ($etat == 0) {
			# code...
			echo '<span class="on-default btn_active" etat="'.$etat.'" style=""><i class="fa fa-spinner fa-pulse fa-2x fa-fw" style="color:#2c3e50;"></i>En Attente</span>';
		}elseif($etat == 1){
			echo '<span class="on-default btn_active" etat="'.$etat.'">En Cours<i class="fa fa-cog fa-spin fa-2x fa-fw" style="color:gray"></i></span>';
		}elseif($etat == 2){
			echo '<span class="on-default btn_active" etat="'.$etat.'"><i class="fa fa-on fa-check-square" style="color:#2ed573">Résolu</i></span>';
		}else{
			echo '<span class="on-default btn_default" etat="'.$etat.'"><i class="fa fa-ban fa-fw" style="color:red">Impossible</i></span>';
		}
}

function btn_edit($id, $etat,$smenu_code)
{
    if ($etat == 0) {
		echo '<a href="#" class="on-default btn_edit"
           id="'.$id.'" style="color:#ff6b81; border:1px solid; border-radius:12%"><i class="fa fa-cogs"></i>Traiter</a>';
	}elseif ($etat == 1 ) {
		echo '<a href="#" class="on-default btn_show"
           id="'.$id.'" style="color:#; border-left:1px solid;border-right:1px solid; border-radius:35%;"><i class="fa fa-eye"></i>Voir...</a>';
	}elseif ($etat == 2) {
		echo '<a href="#" class="on-default btn_edit"
           id="'.$id.'" style="color:#2f3542; border-top:1px solid;border-bottom:1px solid; border-radius:19%"><i class="fa fa-envelope-o fa-fw"></i>Message</a>';
	}
} 

function btn_editt($id,$smenu_code)
{
		echo '<a href="#" class="on-default btn_edit"
           id="'.$id.'" style="color:#ff4757"><i class="fa fa-cogs"></i>Traiter</a>';
}

function btn_show_list_action($id, $smenu_code)
{

    echo '<a href="#" class="on-default btn_show_list"
           id="'.$id.'"><i class="fa fa-eye" style="color:#3c6382"></i></a>';

}

function btn_affecter_list_action($id, $smenu_code)
{

    echo '<a href="#" class="on-default btn_affecter_list"
           id="'.$id.'"><i class="label label-info" style="color:#3c6382"></i></a>';

}

function btn_archive_action($id, $smenu_code, $etat = "")
{
		if ($etat == 1) {
			# code...
			echo '<a href="#" class="on-default btn_archive"
           id="'.$id.'" etat="'.$etat.'"><i class="fa fa-toggle-on" style="color:#2ed573"></i></a>';
		}else{
			echo '<a href="#" class="on-default btn_archive"
           id="'.$id.'" etat="'.$etat.'"><i class="fa fa-toggle-off" style="color:#ff4757"></i></a>';
		}
}



function btn_etat_active($etat)
{
	echo '<span href="#" class="on-default btn_active"
           ><i class="fa fa-toggle-on" style="color:#2ed573"></i></span>';
}

function btn_etat_inactive($etat)
{
	echo '<span href="#" class="on-default btn_inactive"
           ><i class="fa fa-toggle-off" style="color:#ff4757"></i></span>';
}

function format_date($value)
{
    if($value == NULL)
        return '';
    else
        return date('d/m/Y', strtotime($value));
}

/*
* @$table: 		Tableau dans lequel on fait la recherche
* @$to_find: 	Param�tre de recherche
* @$colonne:  	Colonne sur le sous tableaux
* @$cle:		La colonne du tableau associatif
*/

function multi_array_search($tableau, $valeurConnue, $colonneValeurConnue, $colonneValeurRecherchee)
{
	if(!empty($tableau))
	{
		$tableau = json_decode(json_encode($tableau), true);
		//return array_search($valeurConnue, array_column($tableau, $colonneValeurConnue));
		if(array_search($valeurConnue, array_column($tableau, $colonneValeurConnue)) !== false)
		{
			$val = $tableau[array_search($valeurConnue, array_column($tableau, $colonneValeurConnue))][$colonneValeurRecherchee];
			return $val;
		}else
		{
			return false;
		}
	}else
	{
		return false;
	}
}


function utf8_converter($array)
{
    array_walk_recursive($array, function(&$item, $key)
	{
        if(!mb_detect_encoding($item, 'utf-8', true))
		{
                $item = utf8_encode($item);
        }
    });
 
    return $array;
}

