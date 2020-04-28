<?php
$public_url = 'blog/' . $alias . '_' . $id;
?>

                     
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"> <?= heading(anchor($public_url, htmlentities($title)), 4); ?>
                             </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <p>
                                    <small>
       
      
       <?= $author ?>     

    </small>           
                        
                                     </p>
                                    <div class="">
                         <img class="img-fluid" src="<?php echo base_url('uploads/thumbnail/'.$image);?>">
                                    </div>            
                                    </br>
                        <p>
                        
                             <?= nl2br(htmlentities($content)); ?>... <?= anchor($public_url, "Lire la suite"); ?>
                        </p>
                                  
                                
                                   </div>
                                <div class="panel-footer">  <?= nice_date($date, 'd/m/Y'); ?> </div>
                            </div>
                        </div>
                    </div>
                
            
                    