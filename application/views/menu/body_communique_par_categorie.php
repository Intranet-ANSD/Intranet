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
                



  

                 
            <div class="">
                <div class="row">
                    
                    
                <?php if (count($communiques)) : ?>
                                 <?php foreach($communiques as $communique) {?>

                                    <?php
$communique_url = 'celcom/' . $communique->alias . '_' . $communique->id;
?>                       
                     
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"> <?= heading(anchor($communique_url, htmlentities($communique->title)), 4); ?>
                             </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <p>
                                    <small>
       
      
      <?php if ($this->auth_user->is_connected) : ?>
        
     par: <?= $communique->author ?>
        
      <?php endif; ?>
    </small>           
                        
                                     </p>
                                    <div class="">
                         <img class="img-fluid" src="<?php echo base_url('uploads/thumbnail/'.$communique->image);?>">
                                    </div>            
                                    </br>
                        <p>
                        
                        <?= nl2br(htmlentities($communique->content)); ?>... <?= anchor($communique_url, "Lire la suite"); ?>
                        </p>
                                  
                                
                                   </div>
                                <div class="panel-footer">  <?= $communique->date ; ?> </div>
                            </div>
                        </div>
                    </div>
                
            
                    
                                     
                                 <?php }
                                 
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