<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
         <div class="user-details">
            <div class="pull-left">
                <img src="<?php echo base_url(); ?>assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
            </div>
           <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <?php
                        // Nom de l'utilisateur
                        echo $_SESSION["nom"];
                        ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                        <li><a href="<?php  //echo site_url() ?>se_deconnecter"><i class="md md-settings-power"></i> Logout</a></li>
                    </ul>
                </div>

               <p class="text-muted m-0"><?php
                   echo  $_SESSION['profil'];
                   ?></p>
            </div>
        </div> 

        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>


                <?php

                $menu_roles = $_SESSION['menu_roles'];
                $smenu_roles = $_SESSION['smenu_roles'];

                if (isset($smenu_roles['DASH']['d_read'])): ?>
                    <li>
                        <a href="<?php echo base_url(); ?>dashboard" class="waves-effect"><i class="fa fa-tachometer"></i><span> Tableau de bord </span></a>
                    </li>

                <?php endif; ?>
                <?php

                if (isset($menu_roles['RCMENT'])): ?>
                    <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="md md-account-balance"></i><span> Recencement des erreurs </span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul class="list-unstyled">

                            <?php if (isset($smenu_roles['LSTRCMENT']['d_read'])): ?>
                                <li><a href="<?php echo base_url(); ?>C_recensement_erreur" class="menu LSTRCMENT"
                                       id="LSTRCMENT">liste des recencements</a></li>
                            <?php endif; ?>

                            <?php if (isset($smenu_roles['BAIDE']['d_read'])): ?>
                                <li><a href="<?php echo base_url(); ?>C_recensement_erreur/aide" class="aide"
                                       id="aide">Besoin aide</a></li>
                            <?php endif; ?>
                 </ul>
                    </li>
                <?php endif; ?>

                <?php
                if (isset($menu_roles['TRMENT'])): ?>
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-account-balance"></i><span> Traitement </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">


                    </ul>
                </li>
                <?php endif; ?>

                <?php
                if (isset($menu_roles['CONFIGURATION'])): ?>
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-account-balance"></i><span> Configuration </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">

                        <?php if (isset($smenu_roles['MODULE']['d_read'])): ?>
                            <li><a href="<?php echo base_url(); ?>configuration/C_module" class="menu"
                                   id="menu_MODULE">Module</a></li>
                        <?php endif; ?>

                        <?php if (isset($smenu_roles['MODULE_AGENT']['d_read'])): ?>
                            <li><a href="<?php echo base_url(); ?>configuration/C_module_agent" class="menu"
                                   id="menu_MODULE_AGENT">MODULE AGENT</a></li>
                        <?php endif; ?>
                        <?php if (isset($smenu_roles['CATEGORY_ERREUR']['d_read'])): ?>
                            <li><a href="<?php echo base_url(); ?>configuration/C_category_erreur" class="menu CATEGORY_ERREUR"
                                   id="menu CATEGORY_ERREUR">Category_Erreur</a></li>
                        <?php endif; ?>

                    </ul>
                </li>
                <?php endif; ?>

                <?php if (isset($menu_roles['SECURITE'])): ?>
                    <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="md md-settings"></i><span> Sécurité </span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul class="list-unstyled">

                            <?php if (isset($smenu_roles['USR']['d_read'])): ?>
                                <li><a href="<?php echo base_url(); ?>sys/C_sys_user" class="menu"
                                       id="menu_sys_users">Utilisateurs</a></li>
                            <?php endif; ?>

                            <?php if (isset($smenu_roles['MENU']['d_read'])): ?>
                                <li><a href="<?php echo base_url(); ?>sys/C_sys_menu" class="menu"
                                       id="menu_sys_menu">Menus</a></li>
                            <?php endif; ?>
                            <?php if (isset($smenu_roles['LST_MENU']['d_read'])): ?>
                                <li><a href="<?php echo base_url(); ?>sys/C_sys_menu/list_menu" class="menu"
                                       id="menu_list_menu">Liste Menu</a></li>
                            <?php endif; ?>
                            <?php if (isset($smenu_roles['LST_S_MENU']['d_read'])): ?>
                                <li><a href="<?php echo base_url(); ?>sys/C_sys_menu/list_sous_menu"
                                       class="menu" id="menu_list_sous_menu">Liste Sous Menus</a></li>
                            <?php endif; ?>

                            <?php if (isset($smenu_roles['PROFIL']['d_read'])): ?>
                                <li><a href="<?php echo base_url(); ?>sys/C_sys_profil" class="menu"
                                       id="menu_sys_profils">Profils</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <li>
                    <a href="<?php echo base_url(); ?>se_deconnecter" class="waves-effect"><i class="ion-power"></i><span> Déconnexion </span></a>
                </li>

			</ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<?php 
unset($menu_roles, $smenu_roles, $tab_data_ses);
?>
<!-- Left Sidebar End --> 
