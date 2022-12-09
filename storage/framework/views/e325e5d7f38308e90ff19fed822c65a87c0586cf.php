<?php $__env->startSection("content"); ?>

<section>
    <div class="container">
        <div class="row">
            <!-- tabs content -->
            <div class="col-md-12 col-sm-12">
                <div class="col-md-12 margin-bottom-20">
                    <div class="heading-title heading-dotted col-md-12 margin-bottom-20 text-center">
                        <h4>Settings / Financial Management</h4>
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
                    <ul class="nav nav-tabs nav-button-tabs nav-justified margin-bottom-40">
                        <li><a href="<?php echo e(url('financial_mgmt_setting')); ?>">Create Revenue Account</a></li>
                        <li><a href="<?php echo e(url('financial_mgmt_expenses_settings')); ?>">Create Expense Account</a></li>
                        <li><a href="<?php echo e(url('financial_mgmt_invoice_setup')); ?>">Invoice Setup</a></li>
                        <li><a href="<?php echo e(url('balancesheet_template1')); ?>">Balance Sheet</a></li>
                        <li class="active"><a href="<?php echo e(url('financial_mgmt_choose_template')); ?>">Activate Financial Accounts</a></li>
                    </ul>

                    <div class="tab-content margin-top-10" style="border: 1px solid #da291c !important; border-radius: 10px; padding: 10px;">
                        <div class="tab-pane fade in active" id="tab5">
                            <div class="col-md-12">
                            <div class="margin-top-10" style="">
                                <div class="col-md-12 margin-bottom-40 margin-top-20 padding-0 shadow-boxx">
                                    <div class="col-md-12 padding-0 text-center margin-top-20">
                                        <h4 style="font-size: 30px; margin-bottom: 0px;">Activate Financial Accounts</h4>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="divider divider-center divider-short margin-top-10 margin-bottom-10">
                                        <!-- divider -->
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="col-md-6 margin-bottom-20">
                                        <div class="col-md-12">
                                            <div class="col-md-12 padding-0 margin-top-20">
                                                <h4>List of Revenue Accounts</h4>
                                                <table class="table margin-bottom-10" style="width: 100%;">
                                                    <tbody class="revenue_account_body">
                                                        <?php if($revenue_account != ""): ?>
                                                            <?php $__currentLoopData = $revenue_account; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                            $count = \App\Http\Controllers\MainController::account_existance($value->account_name);
                                                            $del_check = \App\Http\Controllers\MainController::account_revenue_exits($value->account_name);
                                                            $amount=\App\Http\Controllers\MainController::account_price($value->account_name);
                                                            $del_id = \App\Http\Controllers\MainController::account_revenue_deleteId($value->account_name);
                                                            ?>
                                                                <tr>
                                                                    <td>
                                                                      <?php if($del_check == 1): ?>
                                                                        <label class="checkbox chk-sm">
                                                                            <input id="rev_check" type="checkbox" value="<?php echo e($value->id); ?>" class="revenue_no_delete" <?php if($count == 'exist'): ?> checked  <?php endif; ?> />
                                                                            <i></i> <?php echo e($value->account_name); ?>

                                                                        </label>
                                                                      <?php else: ?>

                                                                       <label class="checkbox chk-sm">
                                                                            <input id="rev_check" type="checkbox" value="<?php echo e($value->id); ?>" <?php if($count == 'exist'): ?> checked data-id="<?php echo e($del_id); ?>"  class="revenue_delete_account"  <?php endif; ?> />
                                                                            <i></i> <?php echo e($value->account_name); ?>

                                                                        </label>

                                                                      <?php endif; ?>
                                                                     <span class="input_field" style="float: right;margin-top:-7px;font-size:12px;color:#404040">
                                                                         <label >Default Amount  </label>

                                                                        <input type="text" class="form-control" name="rev_amount" id="rev_amount_<?php echo e($value->id); ?>" placeholder="Amount" value="<?php echo e($amount); ?>" style="width: 130px;height:28px!important;float: right;font-size: 10px;margin-top: -4px;" >

                                                                      </span>

                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                                <a href="javascript:void();" class="btn btn-md btn-info margin-right-10 revenue_account_sub">Activate Account</a>
                                                <a class="btn btn-md btn-info margin-right-10" data-toggle="modal" data-target="#RevenueModal">Add Account</a>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-6 margin-bottom-20">
                                        <div class="col-md-12">
                                            <div class="col-md-12 padding-0 margin-top-20">
                                                <h4>List of Expenses Accounts</h4>
                                                <table class="table margin-bottom-10" style="width: 100%;">
                                                    <tbody class="expenses_account_body">
                                                        <?php if($expenses_account != ""): ?>
                                                            <?php $__currentLoopData = $expenses_account; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                                $count2 = \App\Http\Controllers\MainController::account_existance2($value->account_name);
                                                            $amount2 = \App\Http\Controllers\MainController::account_price2($value->account_name);
                                                            $del_check2 = \App\Http\Controllers\MainController::expense_revenue_exits($value->account_name);
                                                            $del_id2 = \App\Http\Controllers\MainController::expense_revenue_deleteId($value->account_name);
                                                            ?>
                                                                <tr>
                                                                    <td>

                                                                     <?php if($del_check2 == 1): ?>
                                                                        <label class="checkbox chk-sm">

                                                                        <input id="exp_check" class="expense_no_delete" type="checkbox" value="<?php echo e($value->id); ?>" <?php if($count2 == 'exist'): ?> checked  <?php endif; ?> />
                                                                            <i></i> <?php echo e($value->account_name); ?>

                                                                        </label>
                                                                      <?php else: ?>
                                                                        <label class="checkbox chk-sm">
                                                                            <input id="exp_check" type="checkbox" value="<?php echo e($value->id); ?>" <?php if($count2 == 'exist'): ?>  checked data-id="<?php echo e($del_id2); ?>" class="expense_delete_account"  <?php endif; ?> />
                                                                            <i></i> <?php echo e($value->account_name); ?>

                                                                        </label>
                                                                       <?php endif; ?>
                                                                         <span class="input_field" style="float: right;margin-top:-7px;font-size:12px;color:#404040">
                                                                         <label >Default Amount  </label>
                                                                        <input type="text" class="form-control" name="exp_amount" id="exp_amount_<?php echo e($value->id); ?>" placeholder="Amount" style="width: 130px;height:28px!important;float: right;font-size: 10px;margin-top: -4px;" value="<?php echo e($amount2); ?>">

                                                                      </span>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                                <a class="btn btn-md btn-info margin-right-10 expenses_account_sub">Activate Account</a>
                                                <a class="btn btn-md btn-info margin-right-10" data-toggle="modal" data-target="#ExpenseModal">Add Account</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="RevenueModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align-last: center">Add Revenue Account</h4>
            </div>
            <form action="<?php echo e(url('revenue_new_account_submit')); ?>" method="POST" onsubmit="confirmed1()">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Account Name</label>
                                <input type="text" class="form-control" name="account_name" id="revenue_account_name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Default Amount (optional)</label>
                                <input type="text" class="form-control" name="amount" id="revenue_amount" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-sm btn-primary" value="Save">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="ExpenseModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align-last: center">Add Expenses Account</h4>
            </div>
            <form action="<?php echo e(url('expense_new_account_submit')); ?>" method="POST" onsubmit="confirmed()">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Account Name</label>
                                <input type="text" class="form-control" name="account_name" id="expense_account_name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Default Amount (optional)</label>
                                <input type="text" class="form-control" name="amount" id="expense_amount" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-sm btn-primary" value="Save">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#revenue_account_name").on("change", function(){
        var val = $(this).val();
        $.ajax({
                url: "revenue_account_check",
                data: {'val':val, '_token': '<?= csrf_token() ?>' },
                type: 'POST',
                success: function(result) {
                    if(result == "exist"){
                        $("#revenue_account_name").val("");
                        alert("This account is already exists.")
                    }
                }
            });
    });
    $("#expense_account_name").on("change", function(){
        var val = $(this).val();
        $.ajax({
                url: "expense_account_check",
                data: {'val':val, '_token': '<?= csrf_token() ?>' },
                type: 'POST',
                success: function(result) {
                    if(result == "exist"){
                        $("#expense_account_name").val("");
                        alert("This account is already exists.")
                    }
                }
            });
    });



$(document).on("click", ".revenue_no_delete", function () {
     alert('This account can not be unchecked because  transactions are already recorded');
     $(this).prop('checked',true);
});


$(document).on("click", ".revenue_delete_account", function () {
     if(confirm('Are you sure to remove this account'))
     {
     var id=$(this).attr('data-id');
     $.ajax({
            url: "delete_revenue_aacount_post",
            data: {'id':id, '_token': '<?= csrf_token() ?>' },
            type: 'POST',
            success: function(result) {
                console.log(result);
                location.reload();
            }
        });
     }else{
        $(this).prop('checked',true);
     }
});


$(document).on("click", ".expense_delete_account", function () {
     if(confirm('Are you sure to remove this account'))
     {
     var id=$(this).attr('data-id');
     $.ajax({
            url: "delete_expenses_aacount_post",
            data: {'id':id, '_token': '<?= csrf_token() ?>' },
            type: 'POST',
            success: function(result) {
                console.log(result);
                location.reload();
            }
        });
     }else{
        $(this).prop('checked',true);
     }

});




$(document).on("click", ".expense_no_delete", function () {
     alert('This account can not be unchecked because  transactions are already recorded');
     $(this).prop('checked',true);
});


$(document).on("change", "#rev_check", function () {
     var id=$(this).val();
    if($(this).is(':checked')){

    //  $("#rev_amount_"+id).css('display','inline-block');
   }else{
    //$("#rev_amount_"+id).css('display','none');
    $("#rev_amount_"+id).val('');
   }

});


$(document).on("change", "#exp_check", function () {
     var id=$(this).val();
    if($(this).is(':checked')){
    //  $("#exp_amount_"+id).css('display','inline-block');
   }else{
    //$("#exp_amount_"+id).css('display','none');
    $("#exp_amount_"+id).val('');
   }
});

    $(".revenue_account_sub").on("click", function(){
        var sub_arr = [];
        var amount_arr = [];
        $(".revenue_account_body tr").each(function(){
            if ($(this).find("input").is(':checked')) {
                var id = $(this).find("input").val();
                sub_arr.push(id);
                var amount =$("#rev_amount_"+id).val();
                 amount_arr.push(amount);

            }
        });

        if(sub_arr != ""){
            // alert(1);
            $.ajax({
                url: "revenue_template_submit",
                data: {'sub_arr':JSON.stringify(sub_arr),'amount_arr':JSON.stringify(amount_arr), '_token': '<?= csrf_token() ?>' },
                type: 'POST',
                success: function(result) {
                    console.log(result);
                    location.reload();
                    notify("Revenue Account is Activated Successfully", "success");
                    // alert(1);
                }
            });

        }
    });
    $(".expenses_account_sub").on("click", function(){
        var sub_arr = [];
        var amount_arr = [];
        $(".expenses_account_body tr").each(function(){
            if ($(this).find("input").is(':checked')) {
                var id = $(this).find("input").val();
                sub_arr.push(id);
                var amount =$("#exp_amount_"+id).val();
                 amount_arr.push(amount);
            }


        });
       // alert(amount_arr);
        if(sub_arr != ""){
            $.ajax({
                url: "expenses_template_submit",
                data: {'sub_arr':JSON.stringify(sub_arr), 'amount_arr':JSON.stringify(amount_arr), '_token': '<?= csrf_token() ?>' },
                type: 'POST',
                success: function(result) {
                    console.log(result);
                    location.reload();
                    notify("Expense Account is Activated Successfully", "success");

                }
            });
        }


    });

    function confirmed() {
        notify("New Expense Account is Created", "success");
    }

    function confirmed1() {
        notify("New Revenue Account is Created", "success");
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mafamatest/public_html/resources/views/financial_mgmt_choose_template.blade.php ENDPATH**/ ?>