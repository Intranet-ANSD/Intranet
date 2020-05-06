<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
                  
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"></h4>
                    </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                         <?php if ($this->auth_user->is_connected && $this->session->auth_user['username'] != 'mor talla kebe') : ?>
                         <?= anchor('blog/index', "Liste des articles") ?>
            <?= anchor(['blog', 'edition', $this->article->id], "Modifier") ?>
            <?= anchor(['blog/soumettre',$this->article->id], "soumettre") ?>
                         <?php endif; ?>
                         <?php if ($this->auth_user->is_connected && $this->session->auth_user['username'] == 'mor talla kebe') : ?>
                          <?= anchor(['blog', 'traiter', $this->article->id], "Traiter Article") ?>
                         <?php endif; ?>
                        </ol>
                        </div>
                     
                    </div>
                
                
        <div id="page-wrapper">
            <div class="container-fluid">
                
                <div class="row">
                    
                    
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"> <?= heading($title); ?>
                            </div>
                <div class>
                <img src="<?php echo base_url('uploads/thumbnail/'.$this->article->image);?>" class="img-fluid" >
                        <div class="panel-wrapper collapse in">
                
                            <div class="panel-body">
                                    <p>
                                    <small>
       
                                    <?= $this->article->author ?>

    </small>           
                                     </p>
                        <p>
                        <?= nl2br(htmlentities($this->article->content)); ?> 
                        </p>
                                  
                                
                            </div>
                                <div class="panel-footer">   <?= $this->article->date; ?> </div>
                        </div>
                    </div>
                    
                    </div>
              </div>
                    

            </div>       
             
        </div> 

                 
                
                 
                <!-- /.row -->
                <!--/.row -->
                 
                <!-- .right-sidebar -->
              
                <!-- /.right-sidebar -->
            
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Suppression de l'article</h4>
      </div>
      <div class="modal-body" id="deleteModalContent">
      </div>
    </div>
  </div>
</div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> Abdoul Aziz Kebe </footer>
        </div>