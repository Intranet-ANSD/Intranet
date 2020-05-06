<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <b>
                         <!--This is light logo icon-->
                        <img src="<?php echo base_url('ressources/plugins/images/log.jpg');?>" alt="home" class="light-logo" />
                     </b>
                        
                    </a>
                </div>
                
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <?php if($this->auth_user->is_connected && $this->session->auth_user['username'] != 'mor talla kebe') : ?>

                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="icon-note">Tableau de Bord</i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Total</strong> <span class="pull-right text-muted"><?= $this->listerarticles->num_itemsTotal; ?></span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            
                            <li>
                                
                                    <div>
                                    <h3> <strong><?= anchor('blog/index', "Non Soumis"); ?></strong> <span class="pull-right text-muted" style="color: blue;"><?= $this->listerarticles->num_itemsNonSoumis; ?>&nbsp&nbsp</span> </h3>
                                    <h3> <strong><?= anchor('blog/listevalide', "Validé"); ?></strong> <span class="pull-right text-muted" style="color: blue;"><?= $this->listerarticles->num_itemsvalideAg; ?>&nbsp&nbsp</span> </h3>
                                    <h3> <strong><?= anchor('blog/listeAttente', "En Attente"); ?></strong> <span class="pull-right text-muted" style="color: blue;"><?= $this->listerarticles->num_itemsattenteAg; ?>&nbsp&nbsp</span> </h3>
                                    <h3> <strong><?= anchor('blog/listerejet', "Rejeté"); ?></strong> <span class="pull-right text-muted" style="color: blue;"><?= $this->listerarticles->num_itemsrejeteAg; ?>&nbsp&nbsp</span> </h3>   
                                    <h3> <strong><?= anchor('blog/lesbrouillons', "Brouillons"); ?></strong> <span class="pull-right text-muted" style="color: blue;"><?= $this->listerarticles->num_itemsBrouillon; ?>&nbsp&nbsp</span> </h3>
                                    <h3> <strong><?= anchor('blog/listesoumis', "Soumis"); ?></strong> <span class="pull-right text-muted" style="color: blue;"><?= $this->listerarticles->num_itemsSoumis; ?>&nbsp&nbsp</span> </h3>

                                      
                                   </div>
                                   
                                
                            </li>
                            
                            
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>Votre Tableau de bord <strong>&nbsp<?= $this->auth_user->username; ?></strong> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <?php endif; ?>
                    <!-- /.dropdown -->

                    <!-- dropdown celcom -->

                    <?php if ($this->auth_user->is_connected && $this->session->auth_user['username'] == 'mor talla kebe') : ?>

                        <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="icon-note"></i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Total</strong> <span class="pull-right text-muted"><?= $this->listerarticles->num_itemsDemande; ?></span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            
                            <li>
                                
                                    <div>
                                    <h3> <strong><?= anchor('celcom/listevalideCelcom', "Validé"); ?></strong> <span class="pull-right text-muted" style="color: blue;"><?= $this->listerarticles->num_itemsvalide; ?>&nbsp&nbsp</span> </h3>
                                    <h3> <strong><?= anchor('celcom/listeAttenteCelcom', "En Attente"); ?></strong> <span class="pull-right text-muted" style="color: blue;"><?= $this->listerarticles->num_itemsattente; ?>&nbsp&nbsp</span> </h3>
                                    <h3> <strong><?= anchor('celcom/listeRejetCelcom', "Rejeté"); ?></strong> <span class="pull-right text-muted" style="color: blue;"><?= $this->listerarticles->num_itemsrejete; ?>&nbsp&nbsp</span> </h3>
                                    <h3> <strong><?= anchor('celcom/index', "En cours de traitement"); ?></strong> <span class="pull-right text-muted" style="color: blue;"><?= $this->listerarticles->num_itemsnt; ?>&nbsp&nbsp</span> </h3>   
                                    

                                      
                                   </div>
                                   
                                
                            </li>
                            
                            
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>Votre Tableau de bord (celcom)</strong> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>    

                    <?php endif; ?>  
                    <!-- fin dropdown celcom -->
                    
                </ul>

                
                    
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>