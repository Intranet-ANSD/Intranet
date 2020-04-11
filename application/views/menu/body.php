<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Mon Compte</h4>
                    </div>
                            <!--Formulaire d'ajout d'un article -->
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                         <li class="box-label"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"><?= anchor('blog/edition', "Nouvel article"); ?></a></li>

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
                                    <h3 class="box-title">Total de mes articles</h3>
                                    <ul class="list-inline two-part">
                                        <li><i class="icon-folder-alt text-danger"></i></li>
                                        <li class="text-right"><span class="counter"><?= $this->articles->num_items; ?></span></li>
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
                                    <h1 class="text-white counter">2</h1>
                                    <p class="text-white">Consulter mes articles</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-6 col-sm-12">
                                <div class="white-box text-center bg-inverse">
                                    <h1 class="text-white counter">2</h1>
                                    <p class="text-white">Soumis</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-6 col-sm-12">
                                <div class="white-box text-center bg-info">
                                    <h1 class="counter text-white">2</h1>
                                    <p class="text-white">En cours</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-6 col-sm-12">
                                <div class="white-box text-center bg-danger">
                                    <h1 class="text-white counter">6</h1>
                                    <p class="text-white">Rejetés</p>
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
                    
                <?php if ($this->articles->has_items) : ?>
                                 <?php foreach($this->articles->items as $article) {
                                     $this->load->view('blog/article_resume', $article);
                                     
                                 }
                                 
                                    ?>
                                   
                                  <?php else: ?>
                                         <div class="col-md-12">
                                        <p class="alert alert-warning" role="alert">
                                                Il n'y a encore aucun article.
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