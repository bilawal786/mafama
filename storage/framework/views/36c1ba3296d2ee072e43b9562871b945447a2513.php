
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
           <?php
                $curPageName = Request::path(); 
                ?>            
 <ul class="nav nav-tabs nav-button-tabs nav-justified margin-bottom-20">
    
    <li class="<?php echo 'active',(request()->path() != 'tasks')?:'';?>
            "><a href="<?php echo e(url('tasks')); ?>">Task</a></li>
     <?php if($is_medical_user ==1): ?>       
     <li class="<?php echo 'active',(request()->path() != 'profile_info')?:'';?>
            "><a href="<?php echo e(url('profile_info')); ?>">Patient Profile</a></li>
    <li class="<?php echo 'active',(request()->path() != 'lab/lab-test')?:'';?>
            "><a href="javascript:void(0)" >Lab Tests</a></li>
     <li class="<?php echo 'active',(request()->path() != 'lab/lab-test')?:'';?>
            "><a href="javascript:void(0)" >Lab Test Comparison</a></li>        
    <li class="<?php echo 'active',(request()->path() != 'lab/vital-signs/')?:'';?>
            "><a href="javascript:void(0)" >Vital Signs</a></li>
      <li  class="<?php echo 'active',(request()->path() != 'lab/pharmacy')?:'';?>
            "><a href="javascript:void(0)" 
            >Pharmacy</a>  </li>       
   <!--  <li  class="<?php echo 'active',(request()->path() != 'lab/referals')?:'';?>
            "><a href="<?php echo e(url('lab/referals')); ?>">Referral</a></li> -->
    <!-- <li  class="<?php echo 'active',(request()->path() != 'lab/visits')?:'';?>
            "><a href="<?php echo e(url('lab/visits')); ?>">Visits</a></li> -->
   <!--  <li  class="<?php echo 'active',(request()->path() != 'lab/care-reminders')?:'';?>
            "><a href="<?php echo e(url('lab/care-reminders')); ?>">Care Reminders</a></li>
    <br> -->
    <!-- <li  class="<?php echo 'active',(request()->path() != 'lab/access-role')?:'';?>
            "><a href="">Access Role</a></li> -->
   
    
   <!--  <li  class="<?php echo 'active',(request()->path() != 'lab/patient-grouping')?:'';?>
            "><a href="<?php echo e(url('lab/patient-grouping')); ?>">Patients Grouping</a></li>
    <li  class="<?php echo 'active',(request()->path() != 'lab/resources')?:'';?>
            "><a href="<?php echo e(url('lab/resources')); ?>">Resources</a></li> -->
            <li  class="<?php echo 'active',(request()->path() != 'forms_library')?:'';?>
            "><a href="<?php echo e(url('forms_library')); ?>">Forms Library</a></li>
     <?php endif; ?>   
         
</ul>






<?php /**PATH /home/mafamatest/public_html/resources/views/lab/lab_tabs.blade.php ENDPATH**/ ?>