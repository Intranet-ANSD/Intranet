<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
                                                 <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><?= $this->auth_user->username; ?></strong></button>
                                                            <h4 class="modal-title" id="myModalLabel">Ajouter un communique</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                        <?= form_open_multipart(uri_string(), ['class' => 'form-horizontal']); ?>
                                                            <from class="form-horizontal">
                                                            <div class="form-group">
                                         <?= form_label("Titre&nbsp;:", "title", ['class' => "col-md-2 control-label"]) ?>
                                             <div class="col-md-10 <?= empty(form_error('title')) ? "" : "has-error" ?>">
                                                <?= form_input(['name' => "title", 'id' => "title", 'class' => 'form-control'], set_value('title', $this->communique->title)) ?>
                                                   <span class="help-block"><?= form_error('title'); ?></span>
                                              </div>
                                                           </div>

                                                           <div class="form-group">
                                        <?= form_label("Texte&nbsp;:", "content", ['class' => "col-md-2 control-label"]) ?>
                                             <div class="col-md-10 <?= empty(form_error('content')) ? "" : "has-error" ?>">
                                        <?= form_textarea(['name' => "content", 'id' => "content", 'class' => 'form-control'], set_value('content', $this->communique->content)) ?>
                                                  <span class="help-block"><?= form_error('content'); ?></span>
                                              </div>
                                                            </div>

                                                            <div class="form-group">
                                        <?= form_label("Categorie&nbsp;:", "categorie", ['class' => "col-md-2 control-label"]) ?>
                                             <div class="col-md-10 <?= empty(form_error('categorie')) ? "" : "has-error" ?>">
                                             <select class="col-lg-9" name="categorie_id">

                                                    <option value="">Select</option>
                                                    <?php if(count($categories)): ?>
                                                    <?php foreach($categories as $categorie): ?>
                                                        <option value=<?php echo $categorie->categorie_id ?>><?php echo $categorie->nom ?></option>
                                                    <?php endforeach; ?>                    
                                                    <?php endif; ?> 
                                              </select>
                                                  <span class="help-block"><?= form_error('categorie'); ?></span>
                                              </div>
                                                            </div> 


                                                              <div class="form-group">
		                                    	<div class="row">
				                            <label class="col-md-3">Image</label>
				                                    <div class="col-md-9">
                                                    <?= form_input(['name' => "image", 'id' => "image", 'class' => 'form-control'], set_value('image', $this->communique->image)) ?>
				                                    </div>
				                                         <div class="clearfix"></div>
		                                    	</div>
		                                                       </div>

                                                              <div class="form-group">
                                                        <?= form_submit("send", "Envoyer", ['class' => "btn btn-info waves-effect"]); ?>
                                                        </div>
                                                            <?= form_close() ?>
                                                            <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
                                                            </from>
                                                        </div>
                                                       
                                                    </div>
                                                    <!-- /.modal-content -->
                                                 