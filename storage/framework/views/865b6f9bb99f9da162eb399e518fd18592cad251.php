 
<?php $__env->startSection("content"); ?>

<section>
    <div class="container">
        <div class="row">
            <!-- tabs content -->
            <div class="col-md-12 col-sm-12">
                <div class="heading-title heading-dotted col-md-12 margin-bottom-20 text-center">
                    <h4>Settings / User Access Roles</h4>
                </div>
                <div class="col-md-12 text-right margin-bottom-20">
                    <?php if($chat != "off"){ ?>
                        <a href="<?php echo e(url('chat')); ?>" class="btn btn-md btn-info margin-right-10">Chat</a>
                    <?php } ?>
                    <?php if($tools != "off"){ ?>
                        <a href="<?php echo e(url('tools')); ?>" class="btn btn-md btn-info margin-right-10">Tools</a>
                    <?php } ?>
                    <a href="<?php echo e(url('calender_meeting')); ?>" class="btn btn-md btn-info margin-right-10">Calender meetings / tasks</a>
                    <a href="<?php echo e(url()->previous()); ?>" class="btn btn-md btn-info">Back</a>
                </div>
                <div class="col-md-12 margin-bottom-20">
                    <a href="<?php echo e(url('add_user_access_rights')); ?>" class="btn btn-xs btn-info" style="float: right;">Add New</a>
                </div>
                <div class="col-md-12">

                    <table class="table table-striped table-bordered table-hover" id="datatable_sample">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Cell Phone</th>
                                <th>Password</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($users as $value){
                            ?>
                                <tr>
                                    <td><?= $value->first_name ?></td>
                                    <td><?= $value->last_name ?></td>
                                    <td><?= $value->email ?></td>
                                    <td><?= $value->cellphone ?></td>
                                    <td><?php echo e($value->cpassword); ?></td>
                                    <td width="20%">
                                        <a href="<?php echo e(url('view_access_roles')); ?>/<?= base64_encode($value->email) ?>" class="btn btn-xs btn-info">View</a>
                                        <a href="<?php echo e(url('edit_user_access_rights')); ?>/<?= base64_encode($value->email) ?>" class="btn btn-xs btn-success">Edit</a>
                                        <?php if($value->status == 1): ?>
                                            <a href="<?php echo e(url('deactive_user_access_rights')); ?>/<?= base64_encode($value->email) ?>" class="btn btn-xs btn-success">Deactivate</a>
                                        <?php else: ?>
                                            <a href="<?php echo e(url('active_user_access_rights')); ?>/<?= base64_encode($value->email) ?>" class="btn btn-xs btn-danger">Activate</a>
                                        <?php endif; ?>

                                        <a href="<?php echo e(url('delete_user_access_rights')); ?>/<?= base64_encode($value->email) ?>" class="btn btn-xs btn-info">Delete</a>
                                    </td>
                                </tr>
                            <?php 
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!--<div class="clearfix"></div>
                            </div>-->
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mafamatest/public_html/resources/views/user_access_rights.blade.php ENDPATH**/ ?>