<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
                                                 <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><?= $this->auth_user->username; ?></strong></button>
                                                            <h4 class="modal-title" id="myModalLabel">Ajouter un article</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                        <?= form_open_multipart(uri_string(), ['class' => 'form-horizontal']); ?>
                                                            <from class="form-horizontal">
                                                            <div class="form-group">
                                         <?= form_label("Titre&nbsp;:", "title", ['class' => "col-md-2 control-label"]) ?>
                                             <div class="col-md-10 <?= empty(form_error('title')) ? "" : "has-error" ?>">
                                                <?= form_input(['name' => "title", 'id' => "title", 'class' => 'form-control'], set_value('title', $this->article->title)) ?>
                                                   <span class="help-block"><?= form_error('title'); ?></span>
                                              </div>
                                                           </div>

                                                           <div class="form-group">
                                        <?= form_label("Texte&nbsp;:", "content", ['class' => "col-md-2 control-label"]) ?>
                                             <div class="col-md-10 <?= empty(form_error('content')) ? "" : "has-error" ?>">
                                        <?= form_textarea(['name' => "content", 'id' => "content", 'class' => 'form-control'], set_value('content', $this->article->content)) ?>
                                                  <span class="help-block"><?= form_error('content'); ?></span>
                                              </div>
                                                            </div>  

                                                             <div class="form-group">
                                         <?= form_label("Statut&nbsp;:", "status", ['class' => "col-md-2 control-label"]) ?>
                                                 <div class="col-md-10 <?= empty(form_error('status')) ? "" : "has-error" ?>">
                                          <?= form_dropdown("status", $this->article_status->text, set_value('status', $this->article->status), ['id' => "content", 'class' => 'form-control']) ?>
                                             <span class="help-block"><?= form_error('status'); ?></span>
                                                  </div>
                                                              </div>

                                                              <div class="form-group">
		                                    	<div class="row">
				                            <label class="col-md-3">Image</label>
				                                    <div class="col-md-9">
				                        	<input type="file" name="image" class="form-control">
				                                    </div>
				                                         <div class="clearfix"></div>
		                                    	</div>
		                                                       </div>

                                                              <div class="form-group">
                                                        <?= form_submit("send", "Envoyer", ['class' => "btn btn-info waves-effect"]); ?>
                                                        </div>
                                                            <?= form_close() ?>
                                                            </from>
                                                        </div>
                                                       
                                                    </div>
                                                    <!-- /.modal-content -->
                                                 