 
<?php $__env->startSection("content"); ?>

<style>
    .heading-div {
        background-color: #da291c;
        border-radius: 5px;
    }
    .heading-div h4 {
        color: #fff;
        margin-top: 10px;
        margin-bottom: 10px;
        font-weight: 400;
    }
    form button {
        height: 21px !important;
    }
    .disable {
        background: green !important;
    }
    .enable {
        background: #da291c;
    }
    .infotab .btn {
        height: 21px !important;
        line-height: 8px !important;
        font-size: 12px !important;
    }
    .infotab a.btn.btn-xs {
        line-height: inherit !important;
    }
    .profile-info2 td {
        text-align: left !important;
        font-size: 12px;
    }
    .client_report_sec {
        max-height: 150px;
        overflow-y: auto;
    }
</style>
<!-- -->
<section>
    <div class="container">
        <div class="row">
            <!-- tabs content -->
            <div class="col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-md-12" style="padding-bottom: 20px;">
                        <div class="heading-title heading-dotted col-md-12 margin-bottom-20 text-center">
                            <h4>Client Management / Client Access</h4>
                        </div>
                        
                       <?php echo $__env->make('lab.lab_tabs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="tab-content margin-top-10 infotab" style="border: 1px solid #da291c !important; border-radius: 10px; padding: 10px;">
                            <input type="hidden" id="today" value="<?php echo e(date('d F Y')); ?>">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Client Name</th>
                                        <th>Client Email</th>
                                        <th>Client Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php 
                                        $report = App\Http\Controllers\MainController::getclientreport($value->id);
                                        $diagnostic = App\Http\Controllers\MainController::getclientdiagnosticreport($value->id);
                                        $recommendation = App\Http\Controllers\MainController::getclientrecommendation($value->id);
                                        $medication = App\Http\Controllers\MainController::getclientmedication($value->id);
                                        $status = App\Http\Controllers\MainController::getstatusreport($value->id);
                                    ?>
                                    <tr>
                                        <td><?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></td>
                                        <td><?php echo e($value->email); ?></td>
                                        <td><?php echo e($value->cellphone); ?></td>
                                        <td>
                                        <a class="btn btn-info report_view">View Report</a>
                                             <?php if($is_medical_user ==1): ?>   
                                       <a href="<?php echo e(url('lab/lab-test/'.$value->id)); ?>" class="btn btn-info ">Lab Test </a>
                                       
                                       <a href="<?php echo e(url('lab/tests-comparision/'.$value->id)); ?>" class="btn btn-info ">Tests Comparision </a>
                                       
                                       <a href="<?php echo e(url('lab/vital-signs/'.$value->id)); ?>" class="btn btn-info ">Vital Signs </a>
                                      
                                       <a href="<?php echo e(url('lab/pharmacy/'.$value->id)); ?>" class="btn btn-info ">Pharmacy </a>

                                       <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr class="report_details" style="display: none;">
                                        <td colspan="4">
                                            <div class="col-md-3">
                                                <div class="col-md-12 shadow-boxx">
                                                    <div class="col-md-12 text-center heading-div">
                                                        <h4>Client's Reporting</h4>
                                                    </div>
                                                    <div class="col-md-12 text-center padding-0 margin-top-20 clientreport" id="rep<?php echo e($value->id); ?>">
                                                        <!-- <form method="POST" id="register" role="form" enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?> -->
                                                            <table class="profile-info" style="width: 100%;">
                                                                <tbody>
                                                                    <!-- <tr>
                                                                        <td><b>Taken By : </b></td>
                                                                        <td><?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></td>
                                                                    </tr> -->
                                                                    <tr>
                                                                        <td><b>Reviewed By : </b></td>
                                                                        <td><?php echo e(Auth::user()->name); ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="client_report_sec">
                                                                <?php if(count($report) > 0): ?>
                                                                    <?php $__currentLoopData = $report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <table class="profile-info margin-bottom-10" style="width: 100%;">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <b>Date : </b>
                                                                                        <input type="hidden" name="actual" value="<?php echo e(strtotime($val->created_at)); ?>">
                                                                                        <input type="hidden" name="actuallast" value="<?php echo e(strtotime($val->updated_at)); ?>">
                                                                                        <input type="hidden" name="valid" value="<?php echo e(strtotime('+24 hours', strtotime($val->created_at))); ?>">
                                                                                        <input type="hidden" name="now" value="<?php echo e(strtotime(date('Y-m-d H:i:s'))); ?>">
                                                                                    </td>
                                                                                    <td class="reportdate"><?php echo e(date('d F Y', strtotime($val->created_at))); ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2">
                                                                                        <textarea required name="report" class="form-control" rows="4" style="margin-top: 10px;" readonly><?php echo e($val->report); ?></textarea>
                                                                                        <input type="hidden" class="report_id" value="<?php echo e($val->id); ?>">
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php else: ?>
                                                                    <table class="profile-info2 margin-bottom-10" style="width: 100%;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><b>Date : </b></td>
                                                                                <td class="reportdate"><?php echo e(date('d F Y')); ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2"><textarea name="report" class="form-control" rows="4" style="margin-top: 10px;"></textarea></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                <?php endif; ?>
                                                            </div>
                                                            <a class="btn btn-info add_report_sec">Add New</a>
                                                            <div class="clearfix"></div>
                                                            <hr />
                                                            <div class="col-md-12 text-center padding-0">
                                                                <input type="hidden" name="client_id" value="<?php echo e($value->id); ?>">
                                                                <button class="btn btn-xs btn-info report_submit">Save </button>
                                                                <a class="btn btn-xs btn-info edit_report_client">Edit</a>
                                                            </div>
                                                        <!-- </form> -->
                                                    </div>
                                                        
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="col-md-12 shadow-boxx">
                                                    <div class="col-md-12 text-center heading-div">
                                                        <h4>Diagnostic</h4>
                                                    </div>
                                                    <div class="col-md-12 text-center padding-0 margin-top-20 clientreport" id="diag<?php echo e($value->id); ?>">
                                                        <table class="profile-info" style="width: 100%;">
                                                            <tbody>
                                                                <!-- <tr>
                                                                    <td><b>Taken By : </b></td>
                                                                    <td><?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></td>
                                                                </tr> -->
                                                                <tr>
                                                                    <td><b>Reviewed By : </b></td>
                                                                    <td><?php echo e(Auth::user()->name); ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>  
                                                        <div class="client_report_sec">
                                                            <?php if(count($diagnostic) > 0): ?>
                                                                <?php $__currentLoopData = $diagnostic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <table class="profile-info margin-bottom-10" style="width: 100%;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <b>Date : </b>
                                                                                    <input type="hidden" name="actual" value="<?php echo e(strtotime($val->created_at)); ?>">
                                                                                    <input type="hidden" name="actuallast" value="<?php echo e(strtotime($val->updated_at)); ?>">
                                                                                    <input type="hidden" name="valid" value="<?php echo e(strtotime('+24 hours', strtotime($val->created_at))); ?>">
                                                                                    <input type="hidden" name="now" value="<?php echo e(strtotime(date('Y-m-d H:i:s'))); ?>">
                                                                                </td>
                                                                                <td class="reportdate"><?php echo e(date('d F Y', strtotime($val->created_at))); ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <textarea required name="report" class="form-control" rows="4" style="margin-top: 10px;" readonly><?php echo e($val->report); ?></textarea>
                                                                                    <input type="hidden" class="report_id" value="<?php echo e($val->id); ?>">
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php else: ?>
                                                                <table class="profile-info2 margin-bottom-10" style="width: 100%;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><b>Date : </b></td>
                                                                            <td class="reportdate"><?php echo e(date('d F Y')); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2"><textarea name="report" class="form-control" rows="4" style="margin-top: 10px;"></textarea></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            <?php endif; ?>
                                                        </div>
                                                        <a class="btn btn-info add_report_sec">Add New</a>
                                                        <div class="clearfix"></div>
                                                        <hr />
                                                        <div class="col-md-12 text-center padding-0">
                                                            <input type="hidden" name="client_id" value="<?php echo e($value->id); ?>">
                                                            <button class="btn btn-xs btn-info diagnostic_report_submit">Save </button>
                                                            <a class="btn btn-xs btn-info edit_report_client">Edit</a>
                                                            <a class="btn btn-xs <?php if($status != ''): ?> <?php if($status->diagnostic == '1'): ?> disable <?php else: ?> enable <?php endif; ?> <?php else: ?> disable <?php endif; ?>" id="<?php echo e($value->id); ?>" data-id="diagnostic"> <?php if($status != ''): ?> <?php if($status->diagnostic == '1'): ?> Disable <?php else: ?> Enable <?php endif; ?> <?php else: ?> Disable <?php endif; ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-12 shadow-boxx">
                                                    <div class="col-md-12 text-center heading-div">
                                                        <h4>Recommendations</h4>
                                                    </div>
                                                    <div class="col-md-12 text-center padding-0 margin-top-20 clientreport" id="reco<?php echo e($value->id); ?>">
                                                        <table class="profile-info" style="width: 100%;">
                                                            <tbody>
                                                                <!-- <tr>
                                                                    <td><b>Taken By : </b></td>
                                                                    <td><?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></td>
                                                                </tr> -->
                                                                <tr>
                                                                    <td><b>Reviewed By : </b></td>
                                                                    <td><?php echo e(Auth::user()->name); ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>  
                                                        <div class="client_report_sec">
                                                            <?php if(count($recommendation) > 0): ?>
                                                                <?php $__currentLoopData = $recommendation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <table class="profile-info margin-bottom-10" style="width: 100%;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <b>Date : </b>
                                                                                    <input type="hidden" name="actual" value="<?php echo e(strtotime($val->created_at)); ?>">
                                                                                    <input type="hidden" name="actuallast" value="<?php echo e(strtotime($val->updated_at)); ?>">
                                                                                    <input type="hidden" name="valid" value="<?php echo e(strtotime('+24 hours', strtotime($val->created_at))); ?>">
                                                                                    <input type="hidden" name="now" value="<?php echo e(strtotime(date('Y-m-d H:i:s'))); ?>">
                                                                                </td>
                                                                                <td class="reportdate"><?php echo e(date('d F Y', strtotime($val->created_at))); ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <textarea required name="report" class="form-control" rows="4" style="margin-top: 10px;" readonly><?php echo e($val->report); ?></textarea>
                                                                                    <input type="hidden" class="report_id" value="<?php echo e($val->id); ?>">
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php else: ?>
                                                                <table class="profile-info2 margin-bottom-10" style="width: 100%;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><b>Date : </b></td>
                                                                            <td class="reportdate"><?php echo e(date('d F Y')); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2"><textarea name="report" class="form-control" rows="4" style="margin-top: 10px;"></textarea></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            <?php endif; ?>
                                                        </div>
                                                        <a class="btn btn-info add_report_sec">Add New</a>
                                                        <div class="clearfix"></div>
                                                        <hr />
                                                        <div class="col-md-12 text-center padding-0">
                                                            <input type="hidden" name="client_id" value="<?php echo e($value->id); ?>">
                                                            <button class="btn btn-xs btn-info recommendation_report_submit">Save </button>
                                                            <a class="btn btn-xs btn-info edit_report_client">Edit</a>
                                                            <a class="btn btn-xs <?php if($status != ''): ?> <?php if($status->recommendation == '1'): ?> disable <?php else: ?> enable <?php endif; ?> <?php else: ?> disable <?php endif; ?>" id="<?php echo e($value->id); ?>" data-id="recommendation"> <?php if($status != ''): ?> <?php if($status->recommendation == '1'): ?> Disable <?php else: ?> Enable <?php endif; ?> <?php else: ?> Disable <?php endif; ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="col-md-12 shadow-boxx">
                                                    <div class="col-md-12 text-center heading-div">
                                                        <h4>Medications</h4>
                                                    </div>
                                                    <div class="col-md-12 text-center padding-0 margin-top-20 clientreport" id="medi<?php echo e($value->id); ?>">
                                                        <table class="profile-info" style="width: 100%;">
                                                            <tbody>
                                                                <!-- <tr>
                                                                    <td><b>Taken By : </b></td>
                                                                    <td><?php echo e($value->first_name); ?> <?php echo e($value->last_name); ?></td>
                                                                </tr> -->
                                                                <tr>
                                                                    <td><b>Reviewed By : </b></td>
                                                                    <td><?php echo e(Auth::user()->name); ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>  
                                                        <div class="client_report_sec">
                                                            <?php if(count($medication) > 0): ?>
                                                                <?php $__currentLoopData = $medication; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <table class="profile-info margin-bottom-10" style="width: 100%;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <b>Date : </b>
                                                                                    <input type="hidden" name="actual" value="<?php echo e(strtotime($val->created_at)); ?>">
                                                                                    <input type="hidden" name="actuallast" value="<?php echo e(strtotime($val->updated_at)); ?>">
                                                                                    <input type="hidden" name="valid" value="<?php echo e(strtotime('+24 hours', strtotime($val->created_at))); ?>">
                                                                                    <input type="hidden" name="now" value="<?php echo e(strtotime(date('Y-m-d H:i:s'))); ?>">
                                                                                </td>
                                                                                <td class="reportdate"><?php echo e(date('d F Y', strtotime($val->created_at))); ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <textarea required name="report" class="form-control" rows="4" style="margin-top: 10px;" readonly><?php echo e($val->report); ?></textarea>
                                                                                    <input type="hidden" class="report_id" value="<?php echo e($val->id); ?>">
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php else: ?>
                                                                <table class="profile-info2 margin-bottom-10" style="width: 100%;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><b>Date : </b></td>
                                                                            <td class="reportdate"><?php echo e(date('d F Y')); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2"><textarea name="report" class="form-control" rows="4" style="margin-top: 10px;"></textarea></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            <?php endif; ?>
                                                        </div>
                                                        <a class="btn btn-info add_report_sec">Add New</a>
                                                        <div class="clearfix"></div>
                                                        <hr />
                                                        <div class="col-md-12 text-center padding-0">
                                                            <input type="hidden" name="client_id" value="<?php echo e($value->id); ?>">
                                                            <button class="btn btn-xs btn-info medication_report_submit">Save </button>
                                                            <a class="btn btn-xs btn-info edit_report_client">Edit</a>
                                                            <a class="btn btn-xs <?php if($status != ''): ?> <?php if($status->medication == '1'): ?> disable <?php else: ?> enable <?php endif; ?> <?php else: ?> disable <?php endif; ?>" id="<?php echo e($value->id); ?>" data-id="medication"> <?php if($status != ''): ?> <?php if($status->medication == '1'): ?> Disable <?php else: ?> Enable <?php endif; ?> <?php else: ?> Disable <?php endif; ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </tbody>
                            </table>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).on('click', '.edit_report', function(){
        $(this).closest('.shadow-boxx').find('textarea').removeAttr('readonly');
    });
    $(document).on('click', '.edit_report_client', function(){
        var id =  $(this).parent("div").parent(".clientreport").attr("id");
        $("#"+id+" .client_report_sec .profile-info").each(function(){
            var actual = $(this).find("input[name='actual']").val();
            var actuallast = $(this).find("input[name='actuallast']").val();
            var valid = $(this).find("input[name='valid']").val();
            var now = $(this).find("input[name='now']").val();
            // if(actual == actuallast){
            //     $(this).find("textarea").removeAttr('readonly');
            // }
            // else{
                if(now <= valid){
                    $(this).find("textarea").removeAttr('readonly');
                }
            // }
        });
    });
    $(document).on('click', '.report_view', function(){
        // $(this).closest('tr').next('.report_details').addClass("active");
        $('.report_details').hide();
        $(".report_view").closest('tr').css('background', 'white');
        $(this).closest('tr').css('background', '#88ffa0');
        $(this).closest('tr').next('.report_details').show();
    });
    $(document).on('click', '.add_report_sec', function(){

        var date = $("#today").val();
        var html = '<table class="profile-info2 margin-bottom-10" style="width: 100%;"><tbody><tr><td><b>Date : </b></td><td class="reportdate">'+date+'</td></tr><tr><td colspan="2"><textarea name="report" class="form-control" rows="2" style="margin-top: 10px;"></textarea></td></tr></tbody></table>';
        $(this).parent(".clientreport").find(".client_report_sec").append(html);
    });
    $(document).on('click', '.disable', function(){
        var id = $(this).attr("id");
        var type = $(this).attr("data-id");
        $(this).removeClass("disable");
        $(this).addClass("enable");
        $(this).text("Enable");
        var url = "<?php echo url('/'); ?>/reportstatuschange";
        $.ajax({
              url: url,
              data: 'id=' + id + '&type=' + type + '&_token=<?php echo e(csrf_token()); ?>',
              type: "POST",
            success: function (response) {
                alert(response);
            }
        });
    });
    $(document).on('click', '.enable', function(){
        var id = $(this).attr("id");
        var type = $(this).attr("data-id");
        $(this).addClass("disable");
        $(this).removeClass("enable");
        $(this).text("Disable");
        var url = "<?php echo url('/'); ?>/reportstatuschange2";
        $.ajax({
              url: url,
              data: 'id=' + id + '&type=' + type + '&_token=<?php echo e(csrf_token()); ?>',
              type: "POST",
            success: function (response) {
                alert(response);
            }
        });
    });
    // $("#register").submit(function(e) {
    //     e.preventDefault();
    //     $(".client_report_sec .profile-info").each(function(){
    //         var date = $(this).find(".reportdate").text();
    //         alert(date);
    //     });

    //     // var url = "affiliate_client_report_submit"                
    // });
    $(document).on('click', '.report_submit', function(event){
        var id =  $(this).parent("div").parent(".clientreport").attr("id");
        var client_id = $("#"+id+" input[name='client_id']").val();
        var sub_arr = [];
        var sub_arr3 = [];
        $("#"+id+" .client_report_sec .profile-info").each(function(){
            var date = $(this).find(".reportdate").html();
            var report = $(this).find("textarea").val();
            var id = $(this).find(".report_id").val();
            var sub_arr2 = {};
            sub_arr2['id'] =  id;
            sub_arr2['date'] =  date;
            sub_arr2['report'] = report;
            sub_arr.push(sub_arr2);
        });
        $("#"+id+" .client_report_sec .profile-info2").each(function(){
            var date = $(this).find(".reportdate").html();
            var report = $(this).find("textarea").val();
            if(report != ""){
                var sub_arr2 = {};
                sub_arr2['client_id'] = client_id;
                sub_arr2['date'] =  date;
                sub_arr2['report'] = report;
                sub_arr3.push(sub_arr2);
            }
        });
        $.ajax({
            url: "affiliate_client_report_submit",
            data: {'sub_arr':JSON.stringify(sub_arr), 'sub_arr3':JSON.stringify(sub_arr3), '_token': '<?= csrf_token() ?>' },
            type: 'POST',
            success: function(result) {
                console.log(result);
                location.reload();
            }
        }); 
    });
    $(document).on('click', '.diagnostic_report_submit', function(){
        var id =  $(this).parent("div").parent(".clientreport").attr("id");
        var client_id = $("#"+id+" input[name='client_id']").val();
        var sub_arr = [];
        var sub_arr3 = [];
        $("#"+id+" .client_report_sec .profile-info").each(function(){
            var date = $(this).find(".reportdate").html();
            var report = $(this).find("textarea").val();
            var id = $(this).find(".report_id").val();
            var sub_arr2 = {};
            sub_arr2['id'] =  id;
            sub_arr2['date'] =  date;
            sub_arr2['report'] = report;
            sub_arr.push(sub_arr2);
        });
        $("#"+id+" .client_report_sec .profile-info2").each(function(){
            var date = $(this).find(".reportdate").html();
            var report = $(this).find("textarea").val();
            if(report != ""){
                var sub_arr2 = {};
                sub_arr2['client_id'] = client_id;
                sub_arr2['date'] =  date;
                sub_arr2['report'] = report;
                sub_arr3.push(sub_arr2);
            }
        });
        // console.log(sub_arr);
        $.ajax({
            url: "affiliate_client_diagnostic_report_submit",
            data: {'sub_arr':JSON.stringify(sub_arr), 'sub_arr3':JSON.stringify(sub_arr3), '_token': '<?= csrf_token() ?>' },
            type: 'POST',
            success: function(result) {
                console.log(result);
                location.reload();
            }
        });
    });
    $(document).on('click', '.recommendation_report_submit', function(){
        var id =  $(this).parent("div").parent(".clientreport").attr("id");
        var client_id = $("#"+id+" input[name='client_id']").val();
        var sub_arr = [];
        var sub_arr3 = [];
        $("#"+id+" .client_report_sec .profile-info").each(function(){
            var date = $(this).find(".reportdate").html();
            var report = $(this).find("textarea").val();
            var id = $(this).find(".report_id").val();
            var sub_arr2 = {};
            sub_arr2['id'] =  id;
            sub_arr2['date'] =  date;
            sub_arr2['report'] = report;
            sub_arr.push(sub_arr2);
        });
        $("#"+id+" .client_report_sec .profile-info2").each(function(){
            var date = $(this).find(".reportdate").html();
            var report = $(this).find("textarea").val();
            if(report != ""){
                var sub_arr2 = {};
                sub_arr2['client_id'] = client_id;
                sub_arr2['date'] =  date;
                sub_arr2['report'] = report;
                sub_arr3.push(sub_arr2);
            }
        });
        // console.log(sub_arr);
        $.ajax({
            url: "affiliate_client_recommendation_submit",
            data: {'sub_arr':JSON.stringify(sub_arr), 'sub_arr3':JSON.stringify(sub_arr3), '_token': '<?= csrf_token() ?>' },
            type: 'POST',
            success: function(result) {
                console.log(result);
                location.reload();
            }
        });
    });
    $(document).on('click', '.medication_report_submit', function(){
        var id =  $(this).parent("div").parent(".clientreport").attr("id");
        var client_id = $("#"+id+" input[name='client_id']").val();
        var sub_arr = [];
        var sub_arr3 = [];
        $("#"+id+" .client_report_sec .profile-info").each(function(){
            var date = $(this).find(".reportdate").html();
            var report = $(this).find("textarea").val();
            var id = $(this).find(".report_id").val();
            var sub_arr2 = {};
            sub_arr2['id'] =  id;
            sub_arr2['date'] =  date;
            sub_arr2['report'] = report;
            sub_arr.push(sub_arr2);
        });
        $("#"+id+" .client_report_sec .profile-info2").each(function(){
            var date = $(this).find(".reportdate").html();
            var report = $(this).find("textarea").val();
            if(report != ""){
                var sub_arr2 = {};
                sub_arr2['client_id'] = client_id;
                sub_arr2['date'] =  date;
                sub_arr2['report'] = report;
                sub_arr3.push(sub_arr2);
            }
        });
        // console.log(sub_arr);
        $.ajax({
            url: "affiliate_client_medication_submit",
            data: {'sub_arr':JSON.stringify(sub_arr), 'sub_arr3':JSON.stringify(sub_arr3), '_token': '<?= csrf_token() ?>' },
            type: 'POST',
            success: function(result) {
                console.log(result);
                location.reload();
            }
        });
    })
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mafamatest/public_html/resources/views/profile_info.blade.php ENDPATH**/ ?>