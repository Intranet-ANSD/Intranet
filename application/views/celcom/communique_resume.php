<?php
$communique_url = 'celcom/' . $alias . '_' . $id;
?>

                     
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"> <?= heading(anchor($communique_url, htmlentities($title)), 4); ?>
                             </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <p>
                                    <small>
       
      
      <?php if ($this->auth_user->is_connected) : ?>
        
     par: <?= $author ?>
        
      <?php endif; ?>
    </small>           
                        
                                     </p>
                                    <div class="">
                         <img class="img-fluid" src="<?php echo base_url('uploads/thumbnail/'.$image);?>">
                                    </div>            
                                    </br>
                        <p>
                        
                             <?= nl2br(htmlentities($content)); ?>... <?= anchor($communique_url, "Lire la suite"); ?>
                        </p>
                                  
                                
                                   </div>
                                <div class="panel-footer">  <?= $date; ?> </div>
                            </div>
                        </div>
                    </div>
                
            
                    