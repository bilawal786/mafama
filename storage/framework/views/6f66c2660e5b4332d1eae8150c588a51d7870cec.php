 
<?php $__env->startSection('content'); ?>
<style type="text/css">
	 input#sendon, input#reminderdate {
        position: relative;
        /*width: 150px; height: 20px;*/
        /*color: white;*/
    }
    input#sendon:before, input#reminderdate:before {
        position: absolute;
        /*top: 3px; left: 3px;*/
        content: attr(data-date);
        display: inline-block;
        color: black;
    }

    input#sendon::-webkit-datetime-edit, input#sendon::-webkit-inner-spin-button, input#sendon::-webkit-clear-button {
        display: none;
    }
   

    input#sendon::-webkit-calendar-picker-indicator {
        position: absolute;
        /*top: 3px;*/
        right: 0;
        color: black;
        opacity: 1;
    }
</style>
<section>
    <div class="container">
        <div class="row">
            <!-- tabs content -->
            <div class="col-md-12 col-sm-12">
                <div class="row">
                    <form name="submit_register" method="POST" id="manageRegister" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
                        <div class="" style="padding-bottom: 20px;">
                            <div class="col-md-12 text-right">
                                <a href="<?php echo e(url('/')); ?>" class="btn btn-md btn-info">Back</a>
                            </div>
                            <div class="heading-title heading-dotted col-md-12 margin-bottom-20 text-center">
                                <h4>Affiliate Registration</h4>
                            </div>

                            <?php if($affiliate_reg_status=='off'): ?>
<div class="row gy-4" style="padding-bottom:20px;">
	<div class="col-md-12 text-center">
	<h4>Currently affiliate registrations are closed.</h4>
	</div>
</div>
                            <?php else: ?>
									<div class="row gy-4" style="padding-bottom:20px;">
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label">Affiliate Code</label>
												<input type="text" class="form-control"  placeholder="Affilate Code" name="code" id="affiliate_code" autocomplete="off" value="<?php echo e(isset($code)?$code:''); ?>"  <?php echo e(!empty($code)?'readonly':''); ?>>
												<span style="color: red;" id="codeexitstance"></span>
											</div>
										</div>

										<?php if(!empty($user_id)): ?>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label">Sponsor Id</label>
												<input type="text" class="form-control"  placeholder="Sponsor Id" name="sponsor_id" id="sponsor_id" autocomplete="off" value="<?php echo e(isset($user_id)?$user_id:''); ?>" <?php echo e(isset($user_id)?"readonly":""); ?> >
												<span style="color: red;" id="codeexitstance"></span>
											</div>
										</div>
										<?php else: ?>
										<input type="hidden"  name="sponsor_id" id="sponsor_id" value='admin@gmail.com'  >
										<?php endif; ?>
									</div>
									<div class="clearfix"></div>	
									<div class="divider"><!-- divider --></div>	
									<div class="row gy-4" style="padding-bottom:20px;">
										<div class="col-md-12 text-center">
											<h6>Profile Information</h6>
										</div>



  
										<?php $today = date('Y-m-d') ?>
										<input type="hidden" name="joining_date" value="<?= $today ?>">
										<!-- <div class="col-md-6">
											<div class="form-group">
												<label class="form-label">Joining Date</label>
												<input type="text" class="form-control date-picker"  placeholder="Joining Date" name="joining_date" autocomplete="off" required>
											</div>
										</div> -->
										
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label">First Name</label>
												<input type="text" class="form-control"  placeholder="Profile First Name" name="first_name" required value="<?php echo e(old('first_name')); ?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label">Last Name</label>
												<input type="text" class="form-control" placeholder="Profile Last Name" name="last_name" value="<?php echo e(old('last_name')); ?>" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">Cell Phone</label>
												<input class="form-control"  placeholder="" name="cellphone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10"  value="<?php echo e(old('cellphone')); ?>" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">Business Telephone</label>
												<input type="number" class="form-control"  placeholder="" name="business_telephone" value="<?php echo e(old('business_telephone')); ?>" required>
											</div>
										</div>

									    <div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">Religious Faith</label>
												<select class="form-control" name="religion" id="otherreligion">
													<?php
		                                                foreach ($religion as $value) {
		                                            ?>
		                                                    <option value="<?= $value->religion ?>"><?= $value->religion ?></option>
		                                            <?php
		                                                }
		                                            ?>
												</select>
											</div>
										</div>
										<div class="col-md-4" id="relother" style="display:none">
											<div class="form-group"> 
												<label class="form-label" for="">Religious Faith</label>
												<input type="text" class="form-control" name="religionother" id="religionother" placeholder="Enter your Religion">	
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="text" class="form-control"  placeholder="Profile Email" name="email" id="affiliateemail" required value="<?php echo e(old('email')); ?>">
												<span style="color: red" id="emailexitstance"></span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label">Date Of Birth</label>
											
												<input type="date" name="dob" class="form-control"  data-date-format="DD MMMM YYYY" value="<?= date('Y-m-d') ?>" id="sendon" value="<?php echo e(old('dob')); ?>">
												
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label" for="">Street Address</label>
												<input type="text" class="form-control"  placeholder="" name="address" value="<?php echo e(old('address')); ?>" required>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label class="form-label" for="">Zip Code</label>
												<input class="form-control" id="zip_code" placeholder="" name="zip_code" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" value="<?php echo e(old('zip_code')); ?>"  maxlength = "6" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for=""> City </label>
												<input type="text" class="form-control"  placeholder="" name="city" required value="<?php echo e(old('city')); ?>">
											</div>
										</div>
										
										
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">Country</label>
												<select id="countries_states1" class="form-control bfh-countries" data-country="US" name="country" required></select>
											</div>
										</div>

										<div class="col-md-4 comm" style="display:none">
											<div class="form-group">
												<label class="form-label" for="">Commune</label>
												<select id="commune" class="form-control bfh-commune" name="commune" required>
													<option value=""></option>
													<?php $__currentLoopData = $communes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commune): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?php echo e($commune->id); ?>"><?php echo e($commune->commune); ?></option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</select>
											</div>
										</div>

										<div class="col-md-4 dep" style="display: none">
											<div class="form-group">
												<label class="form-label" for="">Departments</label>
												<select name="selectdepartment" id="department" class="form-control">
													<option></option>
												</select>
											</div>
										</div>

										<div class="col-md-4 arr" style="display: none">
											<div class="form-group">
												<label class="form-label" for="">Arrondissement</label>
												<select name="selectarr" id="arro" class="form-control">
													<option></option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">State/Province</label>
												<select class="form-control bfh-states" data-country="countries_states1" name="state" required></select>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">Choose a Business Category</label>
												<select class="form-control form-select select2-hidden-accessible" data-search="on" tabindex="-1" aria-hidden="true" data-select2-id="1" name="business_category" id="businesscat" required>
													<option value="">Select</option>
												    <?php
		                                                foreach ($business_category as $value) {
		                                            ?>
		                                                    <option value="<?= $value->id ?>"><?= $value->category ?></option>
		                                            <?php
		                                                }
		                                            ?>
												  
												</select>
											</div>
										</div>
										<div class="col-md-4" id="otherbusiness" style="display:none">
											<div class="form-group"> 
												<label class="form-label" for="">Other Business</label>
												<input type="text" id="businessother" name="businessother" class="form-control" placeholder="Enter your other business">	
											</div>
										</div>
                                       	<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for=""> Business Category (Type)</label>
												<select class="form-control form-select select2-hidden-accessible" data-search="on" tabindex="-1" aria-hidden="true" data-select2-id="1" name="lead_category" >
												  <option value="">Select</option>
		                                        <?php $__currentLoopData = $lead_cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
		                                           
		                                              <option value="<?php echo e($value->id); ?>"><?php echo e($value->category); ?> </option>
		                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												  
												</select>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">Uplaod Picture</label>
		                                        <div class="fancy-file-upload fancy-file-info">
		                                            <i class="fa fa-upload"></i>
		                                            <input type="file" class="form-control" name="image" onchange="jQuery(this).next('input').val(this.value);" />
		                                            <input type="text" class="form-control" placeholder="no file selected" readonly="" />
		                                            <span class="button">Choose File</span>
		                                        </div>
											</div>
										</div>
										
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label">Password</label>
												<input type="password" class="form-control"  placeholder="Password" id="mypass" name="password" value="<?php echo e(old('password')); ?>" autocomplete="off" required>
											</div>
										<?php if($errors->has('password')): ?>
			                                    <span class="help-block text-danger">
			                                        <strong><?php echo e($errors->first('password')); ?></strong>
			                                    </span>
			                                <?php endif; ?>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label">Confirm Password</label>
												<input type="password" class="form-control"  placeholder="Confirm assword" name="confirm_password" id="confirm_password" autocomplete="off" required>
											</div>
											<span class="cpass"></span>
											 <?php if($errors->has('confirm_password')): ?>
			                                    <span class="help-block text-danger">
			                                        <strong><?php echo e($errors->first('confirm_password')); ?></strong>
			                                    </span>
			                                <?php endif; ?>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label">Company Name</label>
												<input type="text" class="form-control"  placeholder="Company Name" name="company" autocomplete="off" required value="<?php echo e(old('company')); ?>">
											</div>
										</div>
									</div>
									<div class="clearfix"></div>	
									<div class="divider"><!-- divider --></div>	
									<div class="row gy-4" style="padding-bottom:20px;">
										
										<div class="col-md-12 text-center" style="margin-top:20px;">
											<h6>Billing Information</h6>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label" for="">Street Address</label>
												<input type="text" class="form-control"  placeholder="" name="billing_address" value="<?php echo e(old('billing_address')); ?>" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label" for="">Zip Code</label>
												<input class="form-control"  placeholder="" id="billing_zip_code" name="billing_zip_code" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "6" required value="<?php echo e(old('billing_zip_code')); ?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for=""> City </label>
												<input type="text" class="form-control"  placeholder="" name="billing_city" required value="<?php echo e(old('billing_city')); ?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">Country</label>
												<select id="countries_states2" class="form-control bfh-countries" data-country="US" name="billing_country" required ></select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">State/Province</label>
												<select class="form-control bfh-states" data-country="countries_states2" name="billing_state" required></select>
											</div>
										</div>
										
										   
									</div>
									<div class="col-md-12" style="margin-top:20px; ">
										 <h4 >
                                        <label class="checkbox chk-sm" style="color: #da291c;">
                                            <input type="checkbox"  name="terms" value="1"  required="" />
                                            <i></i> Agree <a href="javascript:void(0)"  data-toggle="modal" data-target="#termData">terms and conditions</a>
                                        </label>
                                    </h4>
									</div>
									<div class="col-md-12" style="margin-top:10px; text-align:center;">
										<input type="button" data-action="<?php echo e(url('adaffiliate_entry')); ?>" class="btn btn-lg btn-primary btn_submit" value="Save">
									</div>
                        </div>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="termData" class="modal fade" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">            
            <div class="modal-header">              
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Term & Conditions</h4>
            </div>
            <div class="modal-body ">
                <div class="row">
                    <div class="col-md-12">
                     <?php echo $terms; ?>

                    </div>
                    
                </div>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
        </div>
    </div>
</div>
<script type="text/javascript">

$(document).on('click', '.btn_submit', function(e)
{
     e.preventDefault();
      swal({
        title: 'Confirm Business Category',
        text: "Please make sure business category first after make any transaction it could not be update",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: ' Continue ',
        cancelButtonText: ' Edit ',
        confirmButtonClass: 'btn btn-success btn-md mybtn',
        cancelButtonClass: 'btn btn-primary btn-md mybtn',
        buttonsStyling: false,
        reverseButtons: true
    }).then((result) =>
    {
        if(result.value)
        {
          $elm=$(this);
          $elm.hide();
          $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
           var action=$(this).attr("data-action");
           var form=$("#manageRegister");
            form.attr('action', action);
            form.submit();
             $(".submit-loading").remove();
            $elm.show();


        }
    })

});

$(document).on('blur','#confirm_password',function() {
	var password=$("#mypass").val();
	var confirm_password=$(this).val();	
	//alert(password+'='+confirm_password);
	if(confirm_password == password){
		
		$(".cpass").text('Password and confirm matches.');
		$(".cpass").css('color','green');
	}else{
		$(".cpass").text('Password and confirm password does not match');
		$(".cpass").css('color','red');
	}
});
   $(document).on('change','#zip_code',function(){
   	var pincode=$(this).val();
   	 var _token="<?php echo e(csrf_token()); ?>";
   	 var url = "<?=url('/');?>/get_street_info";
        $.ajax({
              url: url,
              data:{pincode:pincode,_token:_token},
              type: "POST",
            success: function (resp) {
            	 resp=JSON.parse(resp);
             $("input[name='city']").val(resp.city);	 
             $("input[name='address']").val(resp.street);	 
              console.log(resp);
               
            }
        });


     });

   $(document).on('change','#billing_zip_code',function(){
   	var pincode=$(this).val();
   	 var _token="<?php echo e(csrf_token()); ?>";
   	 var url = "<?=url('/');?>/get_street_info";
        $.ajax({
              url: url,
              data:{pincode:pincode,_token:_token},
              type: "POST",
            success: function (resp) {
            	 resp=JSON.parse(resp);
             $("input[name='billing_city']").val(resp.city);	 
             $("input[name='billing_address']").val(resp.street);	 
              console.log(resp);
               
            }
        });


     });

	$("#affiliate_code").change(function(){
        varr = $(this).val();
        // alert(varr);
        var url = "<?php echo url('/'); ?>/adcodeavailability";
        $.ajax({
              url: url,
              data: 'code=' + varr + '&_token=<?php echo e(csrf_token()); ?>',
              type: "POST",
            success: function (response) {
                // alert(response);
                if(response == "exists") {
                	$("#codeexitstance").html("");
                }
                else if (response == "expired") {
                	$("#codeexitstance").html("The code has been expired!!!");
                	$("#affiliate_code").val("");
                }
                else if(response == "fail") {
                	$("#codeexitstance").html("The code does not exists!!!");
                	$("#affiliate_code").val("");
                }
                else {
                	$("#codeexitstance").html("Validation start date for this code is "+response);
                	$("#affiliate_code").val("");
                }
            }
        });
    });
    $("#affiliateemail").change(function(){
        varr = $(this).val();
        $("#emailexitstance").hide();
        // alert(varr);
        var url = "<?php echo url('/'); ?>/ademailavailability";
        $.ajax({
              url: url,
              data: 'email=' + varr + '&_token=<?php echo e(csrf_token()); ?>',
              type: "POST",
            success: function (response) {
                // alert(response);
                if(response == "success") {
                	$("#emailexitstance").show();
                	$("#emailexitstance").html("The email already exists!!!");
                	$("#affiliateemail").val("");
                }
            }
        });
    });

    $(function(){
        var dtToday = new Date();
        
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        
        var maxDate = year + '-' + month + '-' + day;
        // alert(maxDate);
   
       // $('#sendon').attr('min', maxDate);
    });
    $("#sendon").on("change", function() {
        this.setAttribute(
            "data-date",
            moment(this.value, "YYYY-MM-DD")
            .format( this.getAttribute("data-date-format") )
        )
    }).trigger("change");
    
</script>

<script>
	$(document).on("change","#countries_states1",function(){
		haiti=$("#countries_states1").val();
		// alert(haiti);
		if(haiti=="HT"){
			$(".comm").show();
			$(".dep").show();
			$(".arr").show();

		}else{
			$(".comm").hide();
			$(".dep").hide();
			$(".arr").hide();


		}
	})
</script>


<script>
	$(document).on("change","#department",function(){
		dep=$("#department").val();
		// alert(dep);
		var url = "<?=url('/');?>/select_arr";

		if(haiti=="HT" && commune!="" && dep!=""){
		$.ajax({
			url: url,
         	data: 'dep=' + dep,
         	type: "GET",
			success:function(data){
				$("#arro").html(data);
			}
		})
		}	
		
	})
</script>


<script>
	$(document).on("change","#commune",function(){
		commune=$("#commune").val();
		haiti=$("#countries_states1").val();
		var url = "<?=url('/');?>/select_department";

		if(haiti=="HT" && commune!=""){
		$.ajax({
			url: url,
         	data: 'haiti=' + haiti,
         	type: "GET",
			success:function(data){
				$("#department").html(data);
			}
		})
		}	
	})
</script>
<script>
	$(document).on("change","#otherreligion",function(){
		// alert("ok");
		otherreligion=$("#otherreligion").val();
		if(otherreligion=="Other"){

			$("#relother").show();

		}else{
			$("#relother").hide();
			$("#religionother").val("");

		}
	})
</script>

<script>
	$(document).on("change","#businesscat",function(){
		// alert("ok");
		businesscat=$("#businesscat").val();
		if(businesscat==13){

			$("#otherbusiness").show();

		}else{
			$("#otherbusiness").hide();
			$("#businessother").val("");

		}
	})
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mafamatest/public_html/resources/views/affiliate_registration.blade.php ENDPATH**/ ?>