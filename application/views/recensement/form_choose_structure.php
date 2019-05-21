<!-- sample modal content -->
<form action='C_recensement/form_census_step_2/' method="post" id='form_cour_divcrud' class='form-horizontal'>
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                    <h4 class="modal-title" id="modal_formLabel">Recenser un nouveau matériel</h4>
                </div>
                <div class="modal-body">
					<div class="form-body">
 
<div class="row">
	    <div class='col-md-12'>
			<label class=' col-md-4'>Structure concernée</label>
			<div class='col-md-8'>
				<select name="id_structure" id="id_structure" class="select2 form-control" required>
					<?php 
						//echo gen_option_for_a_select($dat_form_list_struct,'');
						//function create_select_list($data, $key, $label, $default_value=null,$chained_attr=null)

						echo create_select_list($df_list_struct,'id','libelle');
					?>
				</select>
			</div>
		</div>

	</div>
</div>
 

<div class="row">
<div class='clearfix'> <br>
<div class='clearfix'> <br>

	<div class='col-md-12'>
			<label class=' col-md-4'>Type élément à recenser</label>

			<div class='col-md-8'>

				<!-- <p>Radios without label text <code>.radio-single</code></p> -->
                    <div class="radio" id="div_has_ien">
                <div class='col-md-4'>
                        <input type="radio" name="radio_b_1" id="radio1" value="agent" class="radio1_class" required>
                        <label for="radio1">Agent(personnel)</label>
                </div>
                <div class='col-md-4'>
                        <input type="radio" name="radio_b_1" id="radio2" value="bureau" class="radio1_class" required>
                        <label for="radio2">Bureau physique</label>
                </div>
                <div class='col-md-4'>
                        <input type="radio" name="radio_b_1" id="radio3" value="stock" class="radio1_class" required>
                        <label for="radio3">Stock/magasin</label>
                    </div>

			</div>
		</div>

	</div>
</div>


                    </div>												
                </div>
                <div class="modal-footer">
				<input type='button' id="autorisation_control" class='btn btn-primary' value='Enregistrer'/>
				<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            <!-- /.modal-content -->

    </form>


	<script type="text/javascript">
	//alert();

    $(document).ready(function () {//tafsir
     
	  $("#autorisation_control").click(function () {
       
			if($('#form_cour_divcrud').valid())
			{
				//alert();
				var formulaire = $("#form_cour_divcrud");
				var form = $("#form_cour_divcrud")[0];//parse kes champs du formulaire et les mettre dans un tableau
				$.ajax({
					url: formulaire.attr('action'),
					type: 'POST',
				// enctype: 'multipart/form-data',
					data: new FormData(form),
					async: false,
					cache: false,
					contentType: false,
					processData: false,
					dataType: 'Text',
					success: function(data) {
						$('#div_container').empty().html(data);
						//show_mess_success("Imputation réalisée avec succès");
					},
					error: function(jqXHR) {
						content.html(jqXHR.responseText);
						content.show();
					}
				})
				return false;
       		 }
	  });
        //$('#form_autorisation').submit()
   });

</script>


















