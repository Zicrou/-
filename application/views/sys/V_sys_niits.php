<?php btn_add_action('CODE_ROLE') ?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des utilsateurs </h3>
            </div>
            <div class="panel-body">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ien</th>
                        <th>email</th>
                        <th>id_profil</th>
                        <th>code_str</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($all_data as $value) {?>
                        <tr>
                             <td><?=$value->ien; ?></td>
                             <td><?=$value->email; ?></td>
                             <td><?=$value->libelle_type_profil; ?></td>
                             <td style="width: 1%; white-space: nowrap">
                                 <?php btn_edit_action($value->id,'CODE_ROLE')  ?>&nbsp;&nbsp;
                                 <?php btn_delete_action($value->id,'CODE_ROLE')  ?>&nbsp;&nbsp;
                                 <?php btn_show_action($value->id, 'CODE_ROLE')  ?>
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
<div id="modal_form" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_formLabel"
     aria-hidden="true">
    <form action="#" id="form" class="form-horizontal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="modal_formLabel">Title</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" name="id"/>
                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3">IEN</label>
                            <div class="col-md-9">
                                <input name="ien" id="ien"
                                       class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Email</label>
                            <div class="col-md-9">
                                <input name="email" id="email"
                                       class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Profile</label>
                            <div class="col-md-9">
                                <select name="id_profil" id="id_profil" class="form-control" required>
                                    <?php echo $select_profile; ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input name="password" id="password" value="Azerty"
                                       class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-12">Statut</label>
                            <div class="col-md-3">
                                <input name="statut" value="attente"
                                       class="form-control" type="radio" checked>
                                En attente
                            </div>
                            <div class="col-md-3">
                                <input name="statut" value="actif"
                                       class="form-control" type="radio">
                                Actif
                            </div>
                            <div class="col-md-3">
                                <input name="statut" value="resilie"
                                       class="form-control" type="radio">
                                Resilie
                            </div>
                            <div class="col-md-3">
                                <input name="statut" value="supprime"
                                       class="form-control" type="radio">
                                Supprime
                            </div>
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Enregistrer"/>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </form>
</div><!-- /.modal -->


<script type="text/javascript">
	$(document).ready(function (){

	    $('#datatable').managing_ajax({
			id_modal_form: 'modal_form', //id du modal qui contient le formulaire

			id_form: 'form', //id du formulaire
            url_submit: "<?php echo site_url('sys/C_sys_niits/save')?>", //url du save (données envoyés par post)
			
			title_modal_add: 'Nouveau user', //Title du modal à l'ouverture en mode ajout
			focus_add: 'ien', //l'emplacement du focus en mode ajout

			title_modal_edit: 'Edition user', //Title du modal à l'ouverture en mode edit
			focus_edit: 'email',//l'emplacement du focus en mode edit

            url_edit: "<?php echo site_url('sys/C_sys_niits/get_record')?>", //url le fonction qui recupére la données de la ligne
            url_delete: "<?php echo site_url('sys/C_sys_niits/delete')?>", //url de la fonction supprimé
		});
		
	});
</script>