 
<?php $__env->startSection('content'); ?>

<div class="nk-content ">
	<div class="container-fluid">
		<div class="nk-content-inner">
			<div class="nk-content-body">
				
				<div class="nk-block-head-content" style="margin-bottom:20px;display:flex;">
						<h3 class="nk-block-title page-title"   style="width:935px;">Affiliates Registration</h3>
						<a href="<?php echo e(url('admin/affilates_registration')); ?>" class="btn btn-sm btn-primary" style="float:right;">Back</a>
					</div><!-- .nk-block-head-content -->
				<div class="nk-block">
					<div class="card card-bordered card-stretch">
                        <div class="card-aside-wrap">
							<div class="card-inner card-inner-lg">
								<form action="<?php echo e(url('affiliate_update')); ?>" method="POST" id="" enctype="multipart/form-data">	
									<?php echo csrf_field(); ?>
									<div class="row gy-4" style="padding-bottom:20px;">
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label">Affiliate Code</label>
												<input type="text" class="form-control"  placeholder="Affilate Code" name="code" id="affiliate_code" value="<?= $details[0]->code ?>" required>
												<span style="color: red;" id="codeexitstance"></span>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>	
									<div class="divider"><!-- divider --></div>	
									<div class="row gy-4" style="padding-bottom:20px;">
										<div class="col-md-12 text-center">
											<h6>Profile Information</h6>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label">Joining Date</label>
												<input type="text" class="form-control date-picker"  placeholder="Joining Date" name="joining_date" value="<?= $details[0]->joining_date ?>" autocomplete="off" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label">First Name</label>
												<input type="text" class="form-control" value="<?= $details[0]->first_name ?>"  placeholder="Profile First Name" name="first_name" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label">Last Name</label>
												<input type="text" class="form-control" value="<?= $details[0]->last_name ?>" placeholder="Profile Last Name" name="last_name" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">Religious Faith</label>
												<select class="form-control" name="religion">
													<?php
		                                                foreach ($religion as $value) {
		                                            ?>
		                                                    <option <?php if ($details[0]->religion == $value->religion) { ?> selected <?php } ?> value="<?= $value->religion ?>"><?= $value->religion ?></option>
		                                            <?php
		                                                }
		                                            ?>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="text" class="form-control"  placeholder="Profile Email" value="<?= $details[0]->email ?>" disabled>
												<input type="hidden" name="email" value="<?= $details[0]->email ?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">Cell Phone</label>
												<input class="form-control"  placeholder="" name="cellphone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10" value="<?= $details[0]->cellphone ?>" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">Business Telephone</label>
												<input type="number" class="form-control"  placeholder="" name="business_telephone" value="<?= $details[0]->business_telephone ?>" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label" for="">Choose a Business Category</label>
												<select class="form-control form-select select2-hidden-accessible" data-search="on" tabindex="-1" aria-hidden="true" data-select2-id="1" name="business_category" required>
												  	<?php
		                                                foreach ($business_category as $value) {
		                                            ?>
		                                                    <option <?php if ($details[0]->business_category == $value->id) { ?> selected <?php } ?> value="<?= $value->id ?>"><?= $value->category ?></option>
		                                            <?php
		                                                }
		                                            ?>
												  
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label" for="">Upload Your Picture</label>
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile" name="image">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label" for="">Street Address</label>
												<input type="text" class="form-control"  placeholder="" value="<?= $details[0]->address ?>" name="address"  required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label" for="">Zip Code</label>
												<input class="form-control"  placeholder="" name="zip_code" value="<?= $details[0]->zip_code ?>" 
    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "6" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for=""> City </label>
												<input type="text" class="form-control"  placeholder="" name="city" value="<?= $details[0]->city ?>" required>
											</div>
										</div>
										
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">Country</label>
												<select id="countries_states1" class="form-control bfh-countries" data-country="<?= $details[0]->country ?>" name="country" required></select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">State/Province</label>
												<select class="form-control bfh-states" data-state="<?= $details[0]->state ?>" data-country="countries_states1" name="state" required></select>
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
												<input type="text" class="form-control"  placeholder="" name="billing_address" value="<?= $details[0]->billing_address ?>" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label" for="">Zip Code</label>
												<input class="form-control"  placeholder="" name="billing_zip_code" 
    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "6" value="<?= $details[0]->billing_zip_code ?>" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for=""> City </label>
												<input type="text" class="form-control"  placeholder="" name="billing_city" value="<?= $details[0]->billing_city ?>" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">Country</label>
												<!-- <select class="form-control form-select select2-hidden-accessible" data-search="on" tabindex="-1" aria-hidden="true" data-select2-id="4" name="billing_country">
												  <option>India</option>
												  <option>USA</option>
												  <option>Brazil</option>
												</select> -->
												<select id="countries_states2" class="form-control bfh-countries" data-country="<?= $details[0]->billing_country ?>" name="billing_country" required></select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label" for="">State/Province</label>
												<!-- <select class="form-control form-select form-control-lg select2-hidden-accessible" data-search="on" data-select2-id="5" tabindex="-1" aria-hidden="true" name="billing_state">
												  <option>Maharashtra</option>
												  <option>Punjab</option>
												  <option>Harayana</option>
												</select> -->
												<select class="form-control bfh-states" data-state="<?= $details[0]->billing_state ?>" data-country="countries_states2" name="billing_state" required></select>
											</div>
										</div>
										
										
									</div>
									
									<div class="col-md-12" style="margin-top:40px; text-align:center;">
										<input type="submit" class="btn btn-lg btn-primary" value="Update">
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#affiliate_code").change(function(){
        varr = $(this).val();
        // alert(varr);
        var url = "<?php echo url('/'); ?>/codeavailability";
        $.ajax({
              url: url,
              data: 'code=' + varr + '&_token=<?php echo e(csrf_token()); ?>',
              type: "POST",
            success: function (response) {
                // alert(response);
                if (response == "expired") {
                	$("#codeexitstance").html("The code has been expired!!!");
                	$("#affiliate_code").val("");
                }
                else if(response == "fail") {
                	$("#codeexitstance").html("The code does not exists!!!");
                	$("#affiliate_code").val("");
                }
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mafamatest/public_html/resources/views/edit_affilates_registration.blade.php ENDPATH**/ ?>