

<div class='row'>
    <div class='col-md-12'>
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <div class-"row" style="height:34px">

                    <div class='col-md-5'>
                        <h3 class='panel-title'>Liste du matériel répertorié</h3>
                    </div>
                    <div class='col-md-5'>
                        <div class='col-md-4'><span>Agent	</span>	</div>
                        <div class='col-md-8'>		
                            <select name="id_elt" id="id_elt" class="select2 form-control">
                            <?php 
                                echo create_select_list($df_list_agents_offices,'id','libelle');
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class='col-md-2'>
                        <button type='button' id='btn_add' class='btn btn-info'>Ajouter <span class=''><i class='fa fa-plus-square'></i></span></button>
                    </div>

                </div> 
 
            </div>
            <div class='panel-body'>
                <table id='datatable-buttons' class='table table-striped table-bordered'>
                    <thead>
                    <tr>
                        <th>Libellé</th>
                        <th>Type</th>
                        <th>Etat</th>
                        <th>Caractéristiques</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($df_list_matos_aff as $value) { ?>
                        <tr>
                            <td><?php echo $value->libelle; ?></td>
                            <td><?php echo $value->etat; ?></td>
                            <td><?php echo $value->etat; ?></td>
                            <td><?php echo $value->etat; ?></td>
                            <td class='actions' style='width: 1%; text-align: center; white-space: nowrap'>
				<a href='#' class='on-default btn_edit' id='<?php echo $value->id_type_unite; ?>'>
					<i class='fa fa-pencil'></i></a>
				&nbsp;
				<a href='#' class='on-default btn_delete' id='<?php echo $value->id_type_unite; ?>'>
					<i class='fa fa-trash-o' style='color:red'></i></a>
				&nbsp;
				<a href='#' class='on-default btn_edit' id='<?php echo $value->id_type_unite; ?>'>
					<i class='fa fa-eye' style='color:#CCCCCC'></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div> <!-- End Row -->


<!-- sample modal content -->
<div id='modal_form' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='modal_formLabel'
     aria-hidden='true'>
    <form action='#' id='form' class='form-horizontal'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'> X </button>
                    <h4 class='modal-title' id='modal_formLabel'>Title</h4>
                </div>
                <div class='modal-body'>
                    <input type='hidden' id='id_type_unite' name='id_type_unite'/>

                    <div class='form-body'>
                        <div class='form-group'>
                            <label class='control-label col-md-3'>Libellé</label>

                            <div class='col-md-9'>
                                <input name='libelle' id='libelle'
                                       class='form-control' type='text' required>
                            </div>
                        </div>


					
					<div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Etat</label>

                            <div class="col-md-9">
                            <select name="ETAT" id="ETAT" class="select2 form-control">
                            <?php 
                            foreach ($all_type_status as $key=>$one_val)
                            {
                                ?>
                                <option value="<?php echo $key ?>"><?php echo $one_val ?></option>
                                <?php 
                            }
                            ?>
                            </select>
                                
                            </div>
                        </div>
                    </div>


                    </div>
                </div>
                <div class='modal-footer'>
                    <input type='submit' class='btn btn-primary' value='Enregistrer'/>
                    <button type='button' class='btn btn-default' data-dismiss='modal'>Fermer</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </form>
</div><!-- /.modal -->


<script type='text/javascript'>
        //TableManageButtons.init();
        $(document).ready(function () {
            $('#datatable-buttons').managing_ajax({
                id_menu: 'menu_form_choose_period_step_2', //id du menu dans le fichier navigation_bar
                id_modal_form: 'modal_form', //id du modal qui contient le formulaire

                id_form: 'form', //id du formulaire
                url_submit: '<?php echo site_url('C_type_unite/save')?>', //url du save (donn�es envoy�s par post)

                title_modal_add: 'Nouveau ', //Title du modal � l'ouverture en mode ajout
                focus_add: 'libelle_type_statut_etablissement', //l'emplacement du focus en mode ajout

                title_modal_edit: 'Edition ', //Title du modal � l'ouverture en mode edit
                focus_edit: 'libelle_type_statut_etablissement',//l'emplacement du focus en mode edit

                url_edit: '<?php echo site_url('C_type_unite/get_record')?>', //url le fonction qui recup�re la donn�es de la ligne
                url_delete: '<?php echo site_url('C_type_unite/delete')?>', //url de la fonction supprim�
            });
    });
</script>
