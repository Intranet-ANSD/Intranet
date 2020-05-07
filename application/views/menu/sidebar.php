<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            </br></br></br></br></br>
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                         <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                             <?php if($this->auth_user->is_connected) : ?> <strong><?= $this->auth_user->username; ?></strong>
                                <?php endif; ?>
                                <span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                             
                        <?php if($this->auth_user->is_connected) : ?>
                        <li><?= anchor('deconnexion', "Déconnexion"); ?></li>
          <?php else: ?>
                        <li><?= anchor('connexion', "Connexion"); ?></li>
          <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                        </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <?php if($this->auth_user->is_connected && $this->session->auth_user['profil_nom'] == 'celcom') : ?>
                    <li class="tab-current"><a href=""><?= anchor('celcom/index', "Mon compte (Celcom)",['class' => "sticon ti-home"]) ?></a></li>
                    <?php endif;?>
                    <?php if($this->auth_user->is_connected && $this->session->auth_user['profil_nom'] == 'agent_simple') : ?>
                    <li class="tab-current"><a href=""><?= anchor('blog/index', "Mon compte",['class' => "sticon ti-home"]) ?></a></li>
                    <?php endif;?>    

                        <!--test -->
                        <li>
          
                        <a href="#" class="waves-effect"> <span class="hide-menu">Intranet<span class="fa arrow"></a>
                        <ul class="nav nav-second-level">
						<li>
						<li class="tab-current"><a href=""><?= anchor('publique/articlePublic', "Articles Publiques",['class' => "sticon ti-home"]) ?></a></li>
                        <li class="tab-current"><a href=""><?= anchor('celcom/accueil_communique', "Communiqués",['class' => "sticon ti-home"]) ?></a></li>
                    <li>
                        <a href="inbox.html" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Article<span class="fa arrow"></span><span class="label label-rouded label-info pull-right">Nouveau</span></span></a>
                        <ul class="nav nav-second-level">
                        <?php if($this->auth_user->is_connected && $this->session->auth_user['profil_nom'] == 'celcom') : ?>
                            <li><a href=""><?= anchor('celcom/edition', "Nouvel communique"); ?></a></li>
                        <?php endif; ?>
                        <?php if($this->auth_user->is_connected && $this->session->auth_user['profil_nom'] == 'agent_simple') : ?>
                        
                        <li><a href=""><?= anchor('blog/edition', "Nouvel article"); ?></a></li>
                        <?php endif; ?>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><span class="glyphicon glyphicon-equalizer"></span> <span class="hide-menu">Applications autorisées<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right"></span> </span></a>
                        <ul class="nav nav-second-level">
                        <?php if ($this->auth_user->is_connected && $this->session->auth_user['profil_nom'] == 'agent_simple') : ?>

                            <li><a href="panels-wells.html">Base de données</a></li>
                            <li><a href="panel-ui-block.html">Ressources humaines</a></li>
                            <li><a href="buttons.html">Consultation Credit</a></li>
                            <li><a href="sweatalert.html">Salle de réunion</a></li>
                            <li><a href="buttons.html">Boussole</a></li>
                            <li><a href="sweatalert.html">Appui Informatique</a></li>
                        <?php endif; ?>
                        <?php if ($this->auth_user->is_connected && $this->session->auth_user['profil_nom'] == 'celcom') : ?>
                            <li><a href="buttons.html">Gestion des RH</a></li>
                            <li><a href="sweatalert.html">Suivi des vehicules</a></li>
                            <li><a href="buttons.html">SyGEC</a></li>
                            <li><a href="sweatalert.html">Gestion Batiment ANSD</a></li>
                            <li><a href="buttons.html">Consultation Credit</a></li>
                            <li><a href="sweatalert.html">Activite Courantes</a></li>
                            <li><a href="buttons.html">Salle de réunion</a></li>
                            <li><a href="sweatalert.html">Appui Informatique</a></li>
                        <?php endif; ?>    
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Blog<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">13</span> </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="panels-wells.html">Themes</a></li>
                        </ul>
                    </li>
                     
                    <li>
                        <a href="inbox.html" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Documents<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">Administratifs</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html">Public</a></li>
                            <li><a href="chat.html">Ma direction</a></li>
                        </ul>
                    </li>
              
						<li>
						    </ul>
                    </li>

                        <!-- fin test -->


                     
                </ul>
            </div>
        </div>