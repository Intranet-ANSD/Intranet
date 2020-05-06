
                     
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading panel"> <?= $title; ?>
                             </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <p>
                                    
       
      
       <?= $author ?>
       <small>
    
        
        <?= $this->demande_status->label[$status]; ?>
        </small>
        
        <small style="color: red;">
    
        </small>
      
      

               
                        
                                     </p>
                                    <div class="">
                         <img class="img-fluid" src="<?php echo base_url('uploads/thumbnail/'.$image);?>">
                                    </div>            
                                    </br>
                        <p>
                        
                             <?= $content; ?>
                        </p>
                                  
                                
                                   </div>
                                <div class="panel-footer">  <?= $date; ?> </div>
                            </div>
                        </div>
                    </div>
                
            
                    