<html>

<head>
    <title>SIMEN/AIDE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,500' rel='stylesheet' type='text/css'>

</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-xl-8 offset-xl-2">

                <h1><a href="#">Bienvenue au service d'assistance</a><br>Veuillez remplir ce formulaire pour que nous puissions resoudre  vos difficultés.
                </h1>

                <p class="lead">Aidez-nous à vous aider.</p>


                <form id="contact-form" method="post" action="<?php echo site_url()?>C_recensement_erreur/save" role="form">

                    <div class="messages"></div>

                    <div class="controls">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="ien_deposant">Mon IEN *</label>
                                    <input id="ien_deposant" type="text" name="ien_deposant" class="form-control" placeholder="Tapez IEN *" required="required"
                                        data-error="Votre IEN est obligatoire.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="id_categorie_erreur">Type de Message *</label>
                                    <select name="id_categorie_erreur" id="id_categorie_erreur" class="form-control" required="required" data-error="Obligatoire.">
                                        <?php echo $select_category; ?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="form_email">Module *</label>
                                    <select name="id_module" id="id_module" class="form-control" data-error="Obligatoire." required="required">
                                        <?php echo $select_mod; ?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form_message">Description *</label>
                            <textarea id="description_erreur" name="description_erreur" class="form-control" placeholder="Message for me *" rows="4" required="required"
                            data-error="Obligatoire."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>


                        <!--div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <input class="form-control d-none" data-recaptcha="true" required data-error="Captcha: cocher la case, Obligatoire!">
                            <div class="help-block with-errors"></div>
                        </div-->


                        <input type="submit" class="btn btn-success btn-send" value="Envoyé">

                        <p class="text-muted">
                            Tous les champs sont obligatoire<strong>*</strong>!
                        </p>

                    </div>

                </form>

            </div>
            <!-- /.8 -->

        </div>
        <!-- /.row-->

    </div>
    <!-- /.container-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    
</body>

</html>