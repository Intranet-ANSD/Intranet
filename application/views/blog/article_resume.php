<?php
$article_url = 'blog/' . $alias . '_' . $id;
?>

                     
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"> <?= heading(anchor($article_url, htmlentities($title)), 4); ?>
                             </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <p>
                                    <small>
       
      
       <?= $author ?>
       <?php if ($this->auth_user->is_connected && $this->session->auth_user['username'] != 'mor talla kebe') : ?>

        
        <?= $this->article_status->label[$status]; ?>
        
      <?php endif; ?>

    <?php if ($this->auth_user->is_connected && $this->session->auth_user['username'] == 'mor talla kebe') : ?>

        
        <?= $this->demande_status->label[$status]; ?>

    <?php endif; ?>

      
      

    </small>           
                        
                                     </p>
                                    <div class="">
                         <img class="img-fluid" src="<?php echo base_url('uploads/thumbnail/'.$image);?>">
                                    </div>            
                                    </br>
                        <p>
                        
                             <?= nl2br(htmlentities($content)); ?>... <?= anchor($article_url, "Lire la suite"); ?>
                        </p>
                                  
                                
                                   </div>
                                <div class="panel-footer">  <?= nice_date($date, 'd/m/Y'); ?> </div>
                            </div>
                        </div>
                    </div>
                
            
                    