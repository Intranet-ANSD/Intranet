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
                    <div class="col-md-6 col-sm-2 col-xs-2">
                    <div class="col-md-6 col-sm-2">
                                <div class="white-box">
                                    <h3 class="box-title">Total de mes articles</h3>
                                    <ul class="list-inline two-part">
                                        <li><i class="material-icons" style="font-size:48px;color:blue">speaker_notes</i></li>
                                        <li class="text-right"><span class="counter"><?= $this->listerarticles->num_itemsTotal; ?></span></li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    <!-- /.col -->
                    
                    <div class="row">
                            <!-- .col -->
                            <div class="col-md-2 col-sm-2">
                                <div class="white-box text-center bg-primary">
                                    <h1 class="text-white counter"><?= $this->listerarticles->num_itemsNonSoumis; ?></h1>
   <p class="text-white"> <?= anchor('blog/index', "Non Soumis", array('class' => 'text-white')); ?></p> 
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-2 col-sm-2">
                                <div class="white-box text-center bg-primary">
                                    <h1 class="text-white counter"><?= $this->listerarticles->num_itemsvalideAg; ?></h1>
   <p class="text-white"> <?= anchor('blog/listevalide', "Validé", array('class' => 'text-white')); ?></p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-2 col-sm-2">
                                <div class="white-box text-center bg-primary">
                                    <h1 class="counter text-white"><?= $this->listerarticles->num_itemsattenteAg; ?></h1>
    <p class="text-white"> <?= anchor('blog/listeAttente', "En Attente", array('class' => 'text-white')); ?></p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-2 col-sm-2">
                                <div class="white-box text-center bg-primary">
                                    <h1 class="text-white counter"><?= $this->listerarticles->num_itemsrejeteAg; ?></h1>
    <p class="text-white"> <?= anchor('blog/listerejet', "Rejeté", array('class' => 'text-white')); ?></p>                                
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="white-box text-center bg-primary">
                                    <h1 class="text-white counter"><?= $this->listerarticles->num_itemsSoumis; ?></h1>
    <p class="text-white"> <?= anchor('blog/listesoumis', "Soumis", array('class' => 'text-white')); ?></p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="white-box text-center bg-primary">
                                    <h1 class="text-white counter"><?= $this->listerarticles->num_itemsBrouillon; ?></h1>
    <p class="text-white"> <?= anchor('blog/lesbrouillons', "Brouillons", array('class' => 'text-white')); ?></p>

                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                           
                            <!-- /.col -->
                        </div>
                    
                    
                </div>
                 
            <div class="">
                <div class="row">
                    
                <?php if ($this->listerarticles->has_itemsS) : ?>
                                 <?php foreach($this->listerarticles->itemsS as $article) {
                                     $this->load->view('blog/article_resume_soum', $article);
                                     
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