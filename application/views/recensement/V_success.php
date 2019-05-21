<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>GESTION ERREURS </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon_1.ico">

        <link href="<?php echo base_url(); ?>assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">

        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/jquery.steps/demo/css/jquery.steps.css">

        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css">
		
		<link href="<?php echo base_url(); ?>assets/plugins/jquery-multi-select/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />


        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">


        <script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->




    </head>


    <body class="fixed-left">

<div>
<?php
    if (!empty($status)) {
        echo '<div class="alert alert-success">Message envoyé avec succés</div>';
    }else{
        echo '<div class="alert alert-danger">Message non envoyé</div>';
    }
?>
</div>


<script>
    var resizefunc = [];
</script>

<!-- Main  -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/detect.js"></script>
<script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/zz__demba_local_form_add_courriers.js"></script>

<script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

<!-- jQuery  -->
<script src="<?php echo base_url(); ?>assets/plugins/moment/moment.js"></script>

<script src="<?php echo base_url(); ?>assets/js/managing_menu.js"></script>
<script src="<?php echo base_url(); ?>assets/js/managing_ajax.js"></script>

<!-- sweetalert  -->
<link href="<?php echo base_url(); ?>assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url(); ?>assets/plugins/sweetalert/dist/sweetalert.min.js"></script>


<!-- Modal Plugins css
<link href="<php echo base_url(); ?>assets/plugins/modal-effect/css/component.css" rel="stylesheet">-->


<!-- DataTables js && css -->
<link href="<?php echo base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>


<!--Form Validation
<script src="<php echo base_url(); ?>assets/plugins/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>-->

<!--Form Wizard-->
<script src="<?php echo base_url(); ?>assets/plugins/jquery.steps/build/jquery.steps.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin-forms/js/jquery.validate.translations.fr-FR.js"></script>

<!--wizard initialization-->
<script src="<?php echo base_url(); ?>assets/plugins/jquery.steps/build/wizard-patient.js" type="text/javascript"></script>

<!-- jQuery Validate Plugin && Admin Forms CSS
<link rel="stylesheet" type="text/css" href="?php echo base_url(); ?>assets/admin-forms/css/admin-forms.css">
<script src="?php echo base_url(); ?>assets/admin-forms/js/jquery.validate.min.js"></script>->

<!-- inputmask js
<script src="<php echo base_url(); ?>assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>-->

<!--Select js
<link href="<php echo base_url(); ?>assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
<link href="<php echo base_url(); ?>assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
<script src="<php echo base_url(); ?>assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>->

<!--datepicker js
<link href="<php echo base_url(); ?>assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
<script type="text/javascript" src="<php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<php echo base_url(); ?>assets/plugins/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js"></script>->

<!-- notification js-->
<link href="<?php echo base_url(); ?>assets/plugins/notifications/notification.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/plugins/notifyjs/dist/notify.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/notifications/notify-metro.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/notifications/notifications.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-multi-select/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-multi-select/jquery.quicksearch.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>

<script>
            jQuery(document).ready(function() {               
                // Select2
                jQuery(".select2").select2({
                    width: '100%'
                });
            }); 
</script>

<style type="text/css">.ms-container {  width: 100%; }
    .ms-container .ms-selectable li.ms-hover, .ms-container .ms-selection li.ms-hover {  background-color: #33b86c; }
</style>
</body>
</html>

