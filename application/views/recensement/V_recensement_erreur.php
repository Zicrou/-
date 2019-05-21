<?php 'CODE_RECENSEMENT' ?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Liste de Recensement des erreurs</h3>
            </div>
            <div class="panel-body">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
						<tr>
							<th>IEN</th>
							<th>CATEGORY</th>
							<th>MODULE</th>
							<th>DESCRIPTION</th>
							<th>DATE</th>
							<th>ETAT</th>
                            <th>A TRAITER</th>
				
						</tr>
                    </thead>
                    <tbody>
                    <?php foreach ($all_data as $value)
                    { ?>
                        <tr>
							<td><?php echo $value->ien_deposant ?></td>
							<td><?php echo $value->libelle_categorie ?></td>
							<td><?php echo $value->libelle_module ?></td>
							<td><?php echo $value->description_erreur ?></td>
							<td><?php echo $value->date_recensement ?></td>
                            <td style="width:1%; white-space: nowrap">
                                <?php btn_etat($value->etat_erreur, 'CODE_RECENSEMENT')?>&nbsp;
                            </td>
                            <td id="" style="white-space: nowrap">
                            &nbsp;<?php btn_edit($value->id_recensement,$value->etat_erreur, 'CODE_RECENSEMENT')?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div> <!-- End Row -->


<div id="modal_form" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_formLabel"
     aria-hidden="true">
    <form action="#" id="form" class="form-horizontal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="modal_formLabel">Nouveau recensement</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id_traitement_erreur" name="id_traitement_erreur"/>
                        <div class="form-body">
                            
                            <div class="form-group">
                                <label for="form_message">Description *</label>
                                <textarea id="description_traitement_erreur" name="description_traitement_erreur" class="form-control" placeholder="Votre Message*" rows="4" required="required"
                                data-error="Obligatoire."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Envoyé"/>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </form>
</div><!-- /.modal -->


<?php
/***************************************************************************
 * DEBUT MODAL VOIR
***************************************************************************/
?>

<div id="modal_list" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_formLabel"
     aria-hidden="true">
    <form action="#" id="form" class="form-horizontal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="modal_formLabel">Nouveau recensement</h4>
                </div>
                <div class="modal-body">
                    <table id="datatable-dengagement" class="table table-striped table-bordered">

                        <tbody>
                            <tr>
                                <td id="id_engagement" name="id_engagement" type="hidden"></td>
                                <td id="ien_agent" name="ien_agent"></td>
                                <td id="nom_agent" name="nom_agent"></td>
                                <td id="date_recensement" name="date_recensement"></td>
                                <td id="date_engagement" name="date_engagement"></td>
                            </tr>
                        </tbody>
                    </table> 
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </form>
</div><!-- /.modal -->

<?php
/***************************************************************************
 * FIN MODAL VOIR
***************************************************************************/
?>

<script type="text/javascript">
    $(document).ready(function (){
        $('#datatable').managing_ajax({
			id_menu: 'menu_recensement', //id du menu dans le fichier navigation_bar
            id_modal_form: 'modal_form', //id du modal qui contient le formulaire

            id_form: 'form', //id du formulaire
            url_submit: "<?php echo site_url('C_traitement_erreur/save')?>", //url du save (données envoyés par post)

            title_modal_add: 'Information sur le traitement', //Title du modal à l'ouverture en mode ajout
            focus_add: 'ien_deposant', //l'emplacement du focus en mode ajout

            title_modal_edit: 'Envoyer un message', //Title du modal à l'ouverture en mode affecter
            focus_edit: 'description_traitement_erreur',//l'emplacement du focus en mode edit

            url_edit: "<?php echo site_url('C_traitement_erreur/get_record')?>", //url le fonction qui recupére la données de la ligne
        });
    });
</script>
