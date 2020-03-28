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
                    <li class="nav-small-cap m-t-10">--- Mon Compte</li>
                    <li><a href="index.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Intranet</span></a></li>
                    <li>
                        <a href="inbox.html" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Article<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">Nouveau</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html">Ajouter un article</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Applications autorisées<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">13</span> </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="panels-wells.html">Base de données</a></li>
                            <li><a href="panel-ui-block.html">Ressources humaines</a></li>
                            <li><a href="buttons.html">Reseaux</a></li>
                            <li><a href="sweatalert.html">CELCOM</a></li>
                            
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
                       
                     
                </ul>
            </div>
        </div>