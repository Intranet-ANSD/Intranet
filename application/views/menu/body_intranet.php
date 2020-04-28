<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Page d'accueil de l'intranet</h4>
                    </div>
                            <!--Formulaire d'ajout d'un article -->
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                         <li class="box-label"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"></a></li>

                        </ol>
                    </div>
                     
                            <!--Fin Formulaire d'ajout d'un article -->
                 
                                                <!-- /.modal-dialog -->
                                            </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            
                 
            <div class="">
                <div class="row">
                    
                <?php if ($this->listerarticles->has_items) : ?>
                                 <?php foreach($this->listerarticles->items as $article) {
                                     $this->load->view('blog/article_public', $article);
                                     
                                 }
                                 
                                    ?>
                                   
                                  <?php else: ?>
                                         <div class="col-md-12">
                                        <p class="alert alert-warning" role="alert">
                                                Il n'y a encore aucune demande.
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