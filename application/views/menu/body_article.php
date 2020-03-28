<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Mon Compte</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Dashboard 1</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                
                <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    
                <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"> <?= heading($title); ?>
                             </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <p>
                                    <small>
       
                                    <?= $this->article->author ?>
      <?php if ($this->auth_user->is_connected) : ?>
        -
        <?= $this->article_status->label[$this->article->status]; ?>
      <?php endif; ?>
    </small>           
                                     </p>
                        <p>
                        <?= nl2br(htmlentities($this->article->content)); ?> 
                        </p>
                                  
                                
                                   </div>
                                <div class="panel-footer">   <?= nice_date($this->article->date, 'd/m/Y'); ?> </div>
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
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> Abdoul Aziz Kebe </footer>
        </div>