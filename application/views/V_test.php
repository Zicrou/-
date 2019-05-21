<?php
btn_add_action('CODE_TYPEINF');
/**
 * Created by PhpStorm.
 * User: Zicrou
 * Date: 28/06/2018
 * Time: 15:55
 
 */

?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des Entreprises</h3>
            </div>
            <div class="panel-body">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>CODE TYPE ACTIVITES</th>
                        <th>LIBELLE TYPE ACTIVITES</th>
                        <th>ETAT TYPE ACTIVITES</th>                        
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($all_data as $value)
                    { ?>
                        <tr>
                            <td><?php echo $value->code_type_activites ?></td>
                            <td><?php echo $value->libelle_type_activites ?></td>
                            
                            <!--td><?php /*if ($value->etat_type_activites == 1) {echo btn_etat_active();}else{echo btn_etat_inactive();} */ ?></td-->
                            <td><?php btn_archive_action($value->id_type_activites, 'CODE_CATCORPS', $value->etat_type_activites) ?></td>
                            <td style="width: 1%; white-space: nowrap">
                                <?php btn_edit_action($value->id_type_activites,'CODE_TYPEINF')  ?>&nbsp;&nbsp;
                                <?php btn_delete_action($value->id_type_activites,'CODE_TYPEINF')  ?>&nbsp;&nbsp;
                                <?php btn_show_list_action($value->id_type_activites, 'CODE_TYPEINF')  ?>
                            </td>    
                        </tr>
                        <?php
                    }
                    ?>
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
                    <h4 class="modal-title" id="modal_formLabel">Title</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id_type_activites" name="id_type_activites"/>
                    <input type="hidden" id="etat_type_activites" name="etat_type_activites" value="1"/>

                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3">CODE TYPE ACTIVITE</label>

                            <div class="col-md-9">
                                <input name="code_type_activites" id="code_type_activites"
                                       class="form-control" type="text" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="control-label col-md-3">LIBELLE ACTIVITE</label>

                            <div class="col-md-9">
                                <input name="libelle_type_activites" id="libelle_type_activites"
                                       class="form-control" type="text" required>
                            </div>

                        </div>

                        <div class="form-group">
                            <!--label class="control-label col-md-3">DOMAINE ACTIVITE</label-->

                            <div class="col-md-9">
                            <table id="datatable_domaine_activite" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Domaine activité</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lst_type_domaine as $value)  { ?>
                                <tr>
                                    <td>
                                        <input class="class_type_domaine" type="checkbox" name="lst_id_type_domaine[]" id="id_type_domaine<?=$value->id_domaine?>"  value="<?php echo  $value->id_domaine ?>"  >
                                        <input type="hidden" value="<?php echo $value->libelle_domaine; ?>" name="libelle_domaine<?php echo  $value->id_domaine ?>"/>
                                        &nbsp;&nbsp;<?php echo $value->libelle_domaine; ?>
                                    </td>
                                </tr>
                                <?php }  ?>


                            </tbody>
                        </table>

                        <?php foreach ($lst_type_domaine as $value)  { ?>
                            <input id="id_domaine<?php echo $value->id_domaine ?>" type="hidden" value="<?php  echo  $value->id_domaine ?>" >
                        <?php  }  ?>
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






<div id="modal_list" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_formLabel"
     aria-hidden="true">
    <form action="#" id="form" class="form-horizontal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="modal_formLabel">Liste des domaine activités</h4>
                </div>
                <div class="modal-body">

                    <table id="datatable-dactivites" class="table table-striped table-bordered">

                        <tbody>

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




<script type="text/javascript">
    $(document).ready(function (){

        $('#datatable').managing_ajax({
            id_modal_form: 'modal_form', //id du modal qui contient le formulaire

            id_form: 'form', //id du formulaire
            url_submit: "<?php echo site_url('C_type_infrastructure/save')?>", //url du save (données envoyés par post)

            title_modal_add: 'Nouvelles infrastructure', //Title du modal à l'ouverture en mode ajout
            focus_add: 'code_domaine_activite', //l'emplacement du focus en mode ajout

            title_modal_edit: 'Edition d\'une infrastructure', //Title du modal à l'ouverture en mode edit
            focus_edit: 'code_domaine_activite',//l'emplacement du focus en mode edit

            url_edit: "<?php echo site_url('C_type_infrastructure/get_record')?>", //url la fonction qui recupére la données de la ligne
            url_archive: "<?php echo site_url('C_type_infrastructure/archive')?>", //url la fonction qui recupére la données de la ligne
            url_delete: "<?php echo site_url('C_type_infrastructure/delete')?>" //url de la fonction supprimé
        });

        $('#datatable tbody').on('click', '.btn_show_list', function () {
            $("#datatable-dactivites tbody").empty();

            var lid= $(this).attr('id');
            $.ajax({
                url: "<?php echo site_url('C_type_infrastructure/get_list/')?>"+lid,
                type: "GET",
                dataType: "JSON",
                success: function (data) {
                    $(data).each(function (key, value) {
                        var ltr = "<tr><td>"+ value.libelle_domaine_activite +"</td></tr>";
                        $("#datatable-dactivites tbody").append(ltr);
                    });
                    $("#modal_list").modal('show');
                },
                error: function () {
                    alert('Error adding / update data');
                }
            });

        });
    });
</script>