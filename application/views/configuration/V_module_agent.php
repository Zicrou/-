<?php btn_add_action('MODULE'); ?>


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Liste des modules </h3>
                </div>

                <div class="panel-body">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 35%">Libellé Module</th>
                            <th style="width: 35%">Les agent de ce module</th>
                            <th style="width: 35%">ajouter des agent</th>
                            <th></th>
                        </tr>

                        </thead>
                        <tbody>
                        <?php foreach ($all_data as $value): ?>
                            <tr>
                                <td><?= $value->libelle_module ?></td>
                                <td><?php btn_show_list_action($value->id_module, 'CODE_TYPEINF')?></td>
                                <td>
                                    <a href="#" class="on-default btn_affect" id='btn_affect'>
                                        <span class="label label-info">Affecter</span>
                                    </a>
                                </td>
                                <td class="actions" style="width: 1%; text-align: center; white-space: nowrap">
                                    <?php btn_edit_action($value->id_module, 'MODULE'); ?> &nbsp;
                                    <?php btn_delete_action($value->id_module, 'MODULE'); ?>&nbsp;
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


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
                        <input type="hidden" id="id_module" name="id_module"/>

                        <div class="form-body">

                            <div class="form-group">
                                <label class="control-label col-md-4">Libelle Module <span class="text-danger">*</span></label>

                                <div class="col-md-8">
                                    <input name="libelle_module" id="libelle_module" type="text"
                                           class="form-control" required>
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
        <form action="#" id="form_list" class="form-horizontal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="modal_formLabel">Liste des agent de ce module</h4>
                    </div>
                    <div class="modal-body">

                            <div class="form-group">
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 35%">Libellé Module</th>
                            <th style="width: 35%">IEN Agent</th>
                            <th style="width: 35%">Date Affectation</th>
                            <th style="width: 35%">IEN Affecter</th>
                            
                            <th></th>
                        </tr>

                        </thead>
                        <tbody>
                        <?php foreach ($all_data as $value): ?>
                            <tr>
                                <td><?= $value->libelle_module ?></td>
                                
                                <td class="actions" style="width: 1%; text-align: center; white-space: nowrap">
                                    <?php btn_edit_actio($value->id_module, 'MODULE_AGENT'); ?> &nbsp;
                                    <?php  btn_delete_action($value->id_module, 'MODULE_AGENT'); ?>&nbsp;
                                    <?php btn_show_action($value->id_module, 'MODULE_AGENT'); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                            </div>

                        <table id="datatable-agmodule" class="table table-striped table-bordered">

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

        $(document).ready(function () {

            $('#datatable-buttons').managing_ajax({
                id_modal_form: 'modal_form',

                id_form: 'form',
                url_submit: "<?php echo site_url('configuration/C_module_agent/save')?>",

                title_modal_add: 'Ajouter un module',
                focus_add: 'code',

                title_modal_edit: 'Modifier un module',
                focus_edit: 'libelle',

                url_edit: "<?php echo site_url('configuration/C_module_agent/get_record')?>",
                url_delete: "<?php echo site_url('configuration/C_module_agent/delete')?>",
            });

            $('#datatable-buttons tbody').on('click', '.btn_show_list', function () {
                $("#datatable-agmodule tbody").empty();

                var lid= $(this).attr('id');
                $.ajax({
                    url: "<?php echo site_url('configuration/C_module_agent/get_list/')?>"+lid,
                    type: "GET",
                    dataType: "JSON",
                    success: function (data) {
                        $(data).each(function (key, value) {
                            var ltr = "<tr><td>"+ value.nom_agent +"</td></tr>";
                            $("#datatable-agmodule tbody").append(ltr);
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
<?php if (ENVIRONMENT !== 'production'): ?>{elapsed_time} seconds&nbsp;|&nbsp;{memory_usage}<?php endif ?>