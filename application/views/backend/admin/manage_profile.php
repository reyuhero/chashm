<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" >
            <div class="panel-heading">
                <div class="panel-title">
                <h4><?php echo get_phrase('edit_profile');?></h4>
                </div>
            </div>
            <div class="panel-body">
                <?php
                foreach($edit_data as $row):
                    ?>
                    <?php echo form_open(site_url('Admin/manage_profile/update_profile_info'), array('class' => 'form-horizontal form-groups validate','target'=>'_top'));?>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" required/>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-3 col-sm-5">
                              <button type="submit" class="btn btn-success">
                                  <i class="fas fa-check"></i>&nbsp;
                                  <?php echo get_phrase('update_profile');?></button>
                          </div>
                            </div>
                    </form>
                    <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>
</div>


<!--password-->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" >
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo get_phrase('change_password');?></h4>
                </div>
            </div>
            <div class="panel-body">
					<?php
                    foreach($edit_data as $row):
                        ?>
                        <?php echo form_open(site_url('Admin/manage_profile/change_password'), array('class' => 'form-horizontal form-groups validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('current_password');?></label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" name="password" value="" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('new_password');?></label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" name="new_password" value="" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('confirm_new_password');?></label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" name="confirm_new_password" value="" required/>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-success">
                                      <i class="fas fa-check"></i>&nbsp;
                                      <?php echo get_phrase('update_password');?></button>
                              </div>
								</div>
                        </form>
						<?php
                    endforeach;
                    ?>
            </div>
        </div>
    </div>
</div>
