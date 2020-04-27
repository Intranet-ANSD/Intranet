<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">CELCOM</h4>
                    </div>
                            <!--Formulaire d'ajout d'un article -->
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                         <li class="box-label"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"><?= anchor('celcom/edition', "Nouveau communique"); ?></a></li>

                        </ol>
                    </div>
                     
                            <!--Fin Formulaire d'ajout d'un article -->
                 
                                                <!-- /.modal-dialog -->
                                            </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-sm-12">
                                <div class="white-box">
                                    <h3 class="box-title">Total des  demandes</h3>
                                    <ul class="list-inline two-part">
                                        <li><i class="icon-folder-alt text-danger"></i></li>
                                        <li class="text-right"><span class="counter"><?= $this->listercommunique->num_itemsC; ?></span></li>
                                    </ul>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-sm-12">
                                <div class="white-box">
                                    <h3 class="box-title">Total des  communiqués</h3>
                                    <ul class="list-inline two-part">
                                        <li><i class="icon-folder-alt text-danger"></i></li>
                                        <li class="text-right"><span class="counter"><?= $this->listercommunique->num_itemsC; ?></span></li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-5 col-sm-6">
                        <div class="row">
                            <!-- .col -->
                            <div class="col-md-6 col-sm-12">
                                <div class="white-box text-center bg-megna">
                                    <h1 class="text-white counter">?</h1>
                                    <p class="text-white">Demandes en cours</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-6 col-sm-12">
                                <div class="white-box text-center bg-inverse">
                                    <h1 class="text-white counter">?</h1>
                                    <p class="text-white">Demandes validées</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-6 col-sm-12">
                                <div class="white-box text-center bg-info">
                                    <h1 class="counter text-white">?</h1>
                                    <p class="text-white">Demande rejetées</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-6 col-sm-12">
                                <div class="white-box text-center bg-danger">
                                    <h1 class="text-white counter">?</h1>
                                    <p class="text-white">Demande en attente</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                           
                            <!-- /.col -->
                        </div>
                    </div>
                </div>
                 
                <div class="">
                <div class="row">
                    
                <?php if ($this->listercommunique->has_itemsC) : ?>
                                 <?php foreach($this->listercommunique->itemsC as $communique) {
                                     $this->load->view('celcom/communique_resume', $communique);
                                     
                                 }
                                 
                                    ?>
                                   
                                  <?php else: ?>
                                         <div class="col-md-12">
                                        <p class="alert alert-warning" role="alert">
                                                Il n'y a encore aucun communiqué.
                                        </p>
                                         </div>
                                  <?php endif; ?>
                  </div>
                    

            </div>        
                 
                
                 
                <!-- /.row -->
                <!--/.row -->
                 
                <!-- .right-sidebar -->
              
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> Abdoul Aziz Kebe </footer>
        </div>