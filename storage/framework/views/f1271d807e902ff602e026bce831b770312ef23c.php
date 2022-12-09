 
<?php $__env->startSection("content"); ?>
<section>
    <div class="container">
        <div class="row">
            <!-- tabs content -->
            <div class="col-md-12 col-sm-12">
                <div class="col-md-12 margin-bottom-20">
                    <div class="heading-title heading-dotted col-md-12 margin-bottom-20 text-center">
                        <h4>Email Management / Manage</h4>
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
                    <ul class="nav nav-tabs nav-button-tabs nav-justified margin-bottom-20">
                        <li><a href="<?php echo e(url('manage_folders')); ?>">Manage Folders</a></li>
                        <li class="active"><a href="<?php echo e(url('manage_contacts')); ?>">Manage Contacts</a></li>
                        <li><a href="<?php echo e(url('manage_emails')); ?>">Manage Emails</a></li>
                        <li><a href="<?php echo e(url('uploads')); ?>">Uploads</a></li>
                        <!--<li><a href="#">My Mailbox</a></li>-->
                    </ul>
                    <div class="tab-content margin-top-10" style="border: 1px solid #da291c !important; border-radius: 10px; padding: 10px;">
                        <form action="<?php echo e(url('manage_contacts_entry')); ?>" method="POST" id="" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <div class="col-md-12" style="border-radius: 10px; padding-top: 30px; padding-bottom: 20px;">
                                <div class="col-md-12">
                                    <h4>Add Contact</h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label"> First Name </label>
                                        <input type="text" class="form-control" name="first_name" placeholder="" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label"> Last Name </label>
                                        <input type="text" class="form-control" name="last_name" placeholder="" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Telephone No. </label>
                                        <input type="text" class="form-control" name="telephone" placeholder="" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Email Address </label>
                                        <input type="text" class="form-control" name="email" placeholder="" required />
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Image </label>
                                        <input type="file" class="form-control" name="image" placeholder=""  />
                                    </div>
                                </div> -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Folder</label>
                                        <select class="form-control select2" name="folder" required>
                                            <?php 
                                                foreach ($folders as $value) {
                                                if($value->id == 12 || $value->id == 13){
                                           
                                                }
                                                else{
                                            ?>
                                                <option value="<?= $value->id ?>"><?= $value->folder_name ?></option>
                                            <?php
                                                }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center" style="margin-top: 20px; margin-bottom: 20px;">
                                    <input type="submit" class="btn btn-md btn-info" value="Save">
                                </div>
                            </div>
                        </form>
                        <div class="col-md-12">
                            <table class="table table-striped table-bordered table-hover" id="datatable_sample">
                                <thead>
                                    <tr>
                                        <th>Contact Name</th>
                                        <th>Telephone No.</th>
                                        <th>Email Address</th>
                                        <th>Folder Category</th>
                                      <!--   <th>Image</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($contacts as $value) {
                                    ?>
                                    <tr>
                                        <td><?= $value->first_name ?> <?= $value->last_name ?></td>
                                        <td><?= $value->telephone ?></td>
                                        <td><?= $value->email ?></td>
                                        <td><?= $value->folder_name ?></td>
                                        <!-- <td><img src="<?php echo e(asset('public/assets/images/client')); ?>/<?= $value->image ?>" width="100px" height="100px"></td> -->
                                        <td>
                                            <?php if(($value->folder_name == "Family") || ($value->folder_name == "Friends") || ($value->folder_name == "Client") || ($value->folder_name == "VIP client") || ($value->folder_name == "Basket 1") || ($value->folder_name == "Basket 2") || ($value->folder_name) == "Basket X"){ ?>
                                        
                                        <?php }else{ ?>
                                            <?php } ?>
                                            <form action="<?php echo e(url('edit_manage_contacts')); ?>" method="POST" id="" enctype="multipart/form-data" style="display: inline-flex;">
                                            <?php echo csrf_field(); ?>
                                                <input type="hidden" name="id" value="<?= $value->id ?>">
                                                <input type="submit" class="btn btn-xs btn-info" value="Edit">
                                            </form>
                                            <form action="<?php echo e(url('delete_manage_contacts')); ?>" method="POST" id="" enctype="multipart/form-data" style="display: inline-flex;">
                                            <?php echo csrf_field(); ?>
                                                <input type="hidden" name="id" value="<?= $value->id ?>">
                                                <input type="submit" class="btn btn-xs btn-info" value="Delete">
                                            </form>
                                            <form action="<?php echo e(url('view-email')); ?>" method="POST" style="display: inline-flex;">
                                            <?php echo csrf_field(); ?>
                                                <input type="hidden" name="id" value="<?= $value->email ?>">
                                                <input type="submit" class="btn btn-xs btn-info" value="View Email">
                                            </form>
                                            <form action="<?php echo e(url('view-message')); ?>" method="POST" style="display: inline-flex;">
                                            <?php echo csrf_field(); ?>
                                                <input type="hidden" name="id" value="<?= $value->email ?>">
                                                <input type="submit" class="btn btn-xs btn-info" value="View SMS">
                                            </form>
                                                                                        

                                        </td>
                                    </tr>
                                    <?php 
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mafamatest/public_html/resources/views/manage_contacts.blade.php ENDPATH**/ ?>