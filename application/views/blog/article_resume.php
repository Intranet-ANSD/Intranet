<?php
$article_url = 'blog/' . $alias . '_' . $id;
?>

                     
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"> <?= heading(anchor($article_url, htmlentities($title)), 2); ?>
                             </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <p>
                                    <small>
       
      <?= $author ?>
      <?php if ($this->auth_user->is_connected) : ?>
        -
        <?= $this->article_status->label[$status]; ?>
      <?php endif; ?>
    </small>           
                                     </p>
                        <p>
                             <?= nl2br(htmlentities($content)); ?>... <?= anchor($article_url, "Lire la suite"); ?>
                        </p>
                                  
                                
                                   </div>
                                <div class="panel-footer">  <?= nice_date($date, 'd/m/Y'); ?> </div>
                            </div>
                        </div>
                    </div>
                
            
                    