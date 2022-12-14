 
<?php $__env->startSection('content'); ?>
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                          <!--   <h3 class="nk-block-title page-title"  style="width:980px;">Affilates Registration
								<a href="<?php echo e(url('add_affilates_registration')); ?>" class="btn btn-sm btn-primary" style="float:right;">Add New</a>
							</h3> -->
                            
                        </div><!-- .nk-block-head-content -->
                        
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
							<div class="col-md-12">
								
							</div>
							<div class="card-inner">
								<table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
									<thead>
										<tr class="nk-tb-item nk-tb-head">
											<th class="nk-tb-col"><span class="sub-text">Id</span></th>
											<th class="nk-tb-col"><span class="sub-text"> First Name</span></th>
											<th class="nk-tb-col"><span class="sub-text"> Last Name</span></th>
											<th class="nk-tb-col tb-col-lg"><span class="sub-text"> Email</span></th>
												<th class="nk-tb-col tb-col-lg"><span class="sub-text">Password</span></th>
											<th class="nk-tb-col tb-col-lg"><span class="sub-text">Country</span></th>
											<th class="nk-tb-col tb-col-lg"><span class="sub-text">Status</span></th>
											<th class="nk-tb-col tb-col-lg"><span class="sub-text">Action</span></th>
											
											
										</tr>
									</thead>
									<tbody>
										<?php
											foreach ($details as $value) {
										?>
												<tr class="nk-tb-item">
													<td class="nk-tb-col">
														<span><?= $value->id ?></span>
														
													</td>
													<td class="nk-tb-col">
														<span><?= $value->first_name ?></span>
														
													</td>
													<td class="nk-tb-col">
														<span><?= $value->last_name ?></span>
														
													</td>
													<td class="nk-tb-col tb-col-md">
														<span><?= $value->email ?></span>
													</td>
														<td class="nk-tb-col tb-col-md">
														<span><?= $value->show_pass ?></span>
													</td>
													<td class="nk-tb-col tb-col-md">
														<span class="bfh-countries" data-country="<?= $value->country ?>"></span>
													</td>
													<td class="nk-tb-col tb-col-md">
														<?php if($value->ustatus==1): ?>
														<span class="text-success">Activated</span>
														<?php else: ?>
                                                      <span class="text-danger">Deactivated</span>
														<?php endif; ?>
													</td>
													<td class="nk-tb-col tb-col-md">
														<?php if(permission_access('reg_affiliate_view')==1): ?>
														<a href="<?php echo e(url('view_affilates_registration')); ?>/<?= $value->id ?>" class="btn btn-xs btn-info">View</a>
														<?php endif; ?>
														<?php if(permission_access('reg_affiliate_edit')==1): ?>
														<a href="<?php echo e(url('edit_affilates_registration')); ?>/<?= $value->id ?>" class="btn btn-xs btn-primary">Edit</a>
														<?php if($value->ustatus==1): ?>
                                                        <a  data-id="<?= $value->user_id ?>" data-status="2" href="javascript:void(0)" data-msg="Are you sure to deactivate this account ?" class="btn btn-xs btn-info update_account_status" >Deactivate</a>
														<?php else: ?>
                                                       <a  data-id="<?= $value->user_id ?>" data-status="1" href="javascript:void(0)" data-msg="Are you sure to activate this account ?" class="btn btn-xs btn-success update_account_status" >Activate</a>
														<?php endif; ?>
														<?php endif; ?>
														<?php if(permission_access('reg_affiliate_delete')==1): ?>
														<a  data-email="<?= $value->email ?>" href="javascript:void(0)" class="btn btn-xs btn-danger deleteaffiliate" data-list="affiliate_registrations">Delete</a>
														<?php endif; ?>
													</td>
													
													
												</tr>
										<?php 
											}
										?>
									</tbody>
								</table>
							</div>
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mafamatest/public_html/resources/views/admin_affilates_registration.blade.php ENDPATH**/ ?>