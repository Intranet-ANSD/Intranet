<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Vos communiqués</h4>
                        
                        


                    </div>
                            <!--Formulaire d'ajout d'un article -->
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                        </ol>
                    </div>
                     
                            <!--Fin Formulaire d'ajout d'un article -->
                 
                                                <!-- /.modal-dialog -->
                                            </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                

                <div class="row">
                <ul>       
                <?php if(count($categories)): ?>
                <?php foreach($categories as $categorie): ?>
                        <li><?php echo anchor("celcom/viewCommuniqueCategories/{$categorie->categorie_id}", "$categorie->nom", ['class'=>'buttons']); ?></li>
                        
                <?php endforeach; ?>    
                <?php else: ?>
                    <li>
                        Aucune information disponible
                    </li>

                <?php endif; ?>    
                </ul>   
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