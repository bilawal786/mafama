<?php $__env->startSection("content"); ?>
<?php
$segment_users = request()->segment(2);
/*echo $segment_users;*/
$data = Session::all();
$uid = Session::get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
/*echo $uid;
echo "<pre>";
Print_r($data);
echo "</Pre>";*/
$value = $segment_users;
$name = $value;
$year = date('Y');
/*echo $year;
echo "<br>";*/
$actual_jan = DB::table('revenue_record')->whereMonth('transaction_date', '01')->whereYear('transaction_date', $year)->where('account_description', $value)->where('uid', $uid)->sum('amount_paid');
$actual_feb = DB::table('revenue_record')->whereMonth('transaction_date', '02')->whereYear('transaction_date', $year)->where('account_description', $value)->where('uid', $uid)->sum('amount_paid');
$actual_mar = DB::table('revenue_record')->whereMonth('transaction_date', '03')->whereYear('transaction_date', $year)->where('account_description', $value)->where('uid', $uid)->sum('amount_paid');
$actual_apr = DB::table('revenue_record')->whereMonth('transaction_date', '04')->whereYear('transaction_date', $year)->where('account_description', $value)->where('uid', $uid)->sum('amount_paid');
$actual_may = DB::table('revenue_record')->whereMonth('transaction_date', '05')->whereYear('transaction_date', $year)->where('account_description', $value)->where('uid', $uid)->sum('amount_paid');
$actual_jun = DB::table('revenue_record')->whereMonth('transaction_date', '06')->whereYear('transaction_date', $year)->where('account_description', $value)->where('uid', $uid)->sum('amount_paid');
$actual_jul = DB::table('revenue_record')->whereMonth('transaction_date', '07')->whereYear('transaction_date', $year)->where('account_description', $value)->where('uid', $uid)->sum('amount_paid');
$actual_aug = DB::table('revenue_record')->whereMonth('transaction_date', '08')->whereYear('transaction_date', $year)->where('account_description', $value)->where('uid', $uid)->sum('amount_paid');
$actual_sep = DB::table('revenue_record')->whereMonth('transaction_date', '09')->whereYear('transaction_date', $year)->where('account_description', $value)->where('uid', $uid)->sum('amount_paid');
$actual_oct = DB::table('revenue_record')->whereMonth('transaction_date', '10')->whereYear('transaction_date', $year)->where('account_description', $value)->where('uid', $uid)->sum('amount_paid');
$actual_nov = DB::table('revenue_record')->whereMonth('transaction_date', '11')->whereYear('transaction_date', $year)->where('account_description', $value)->where('uid', $uid)->sum('amount_paid');
$actual_decem = DB::table('revenue_record')->whereMonth('transaction_date', '12')->whereYear('transaction_date', $year)->where('account_description', $value)->where('uid', $uid)->sum('amount_paid');
$total = DB::table('revenue_record')->whereYear('transaction_date', $year)->where('account_description', $value)->where('uid', $uid)->sum('amount_paid');
// $rev = DB::table('revenue_record')->whereYear('transaction_date', $year)->where('account_description', $value)->sum('amount_paid');
// $rev = DB::table('revenue_record')->whereYear('transaction_date', $year)->where('uid', $uid)->sum('total');

$actual_au = 0;
// $reh=;

$mon = array($actual_jan,$actual_feb,$actual_mar,$actual_apr,$actual_may,$actual_jun,$actual_jul,$actual_aug,$actual_sep,$actual_oct, $actual_nov, $actual_decem);

$sort_arr = arsort($mon);

$total_rev = array_sum($mon);


// dd(DB::table('revenue_record')->whereYear('transaction_date', $year)->where('account_description', $value)->where('uid', $uid)->get());



?>
<!-- <script src="<?php echo e(asset('public/flot/jquery.flot.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/flot/jquery.flot.resize.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/flot/jquery.flot.pie.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/flot/jquery.flot.categories.min.js')); ?>" type="text/javascript"></script> -->
    <link href="<?php echo e(asset('public/morris/morris.css')); ?>" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo e(asset('public/morris/morris.min.js')); ?>" type="text/javascript"></script>

<section>
    <div class="container">
        <div class="row">
            <!-- tabs content -->
            <div class="col-md-12 col-sm-12">
                <div class="heading-title heading-dotted col-md-12 margin-bottom-20 text-center">
                    <h4>Financial Management & Analysis</h4>
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

                <div class="col-md-12 margin-top-10 padding-0">

                    <div style="display: flex">

                        <div class="container bg-white col-md-8 mx-auto">
                            <div>
                                <h3 style="text-align: center; margin-bottom:5px !important">
                                    <?php echo e($name); ?> : <?php echo e($total_rev); ?>

                                </h3>
                                <h4 style="text-align: center; margin-bottom:20px !important">
                                    <?php echo e($year); ?>

                                </h4>
                            </div>
                            <table>
                                <style>
                                    td{
                                        padding: 1px 2px 7px 2px;
                                    }
                                </style>
                                <?php $__currentLoopData = $mon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ind => $gd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                // dd($mon);
                                    $rgbColor = array();
                                    foreach(array('r', 'g', 'b') as $color){
                                        $rgbColor[$color] = mt_rand(0, 255);
                                    }
                                ?>
                                    <tr>
                                        <td style="text-align:left; color:#da291c"><?php echo e(date('F', mktime(0, 0, 0, $ind+1, 10))); ?></td>
                                        <td>
                                            <div class="badge" style="background: #0000df">
                                                <div style="padding-left:5px;padding-right:5px;">
                                                    <?php echo e($gd); ?>

                                                </div>


                                            </div>
                                        </td>
                                        <td>
                                            <div style="width: 500px; display:flex">
                                                <div class="grp_<?php echo e($loop->index); ?>" style="border-radius:2px; width: <?php echo e($gd/$total * 100); ?>%; background: rgb(<?= implode(",", $rgbColor); ?>); height: 20px;color:white">

                                                </div>
                                                <?php if($gd != 0): ?>
                                                    <div style="margin-left: 7px">
                                                        <?php echo e(round($gd/$total_rev * 100, 2)); ?>%
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    </div>

                    <!-- <div style="padding: 30px 0px;">
                        <div class="modal_chart" id="bar-chartm" style="height: 300px;"></div>
                        <div class="text-center">
                            <h2><?php echo $name;

                            ?></h2>
                        </div>
                        <div style="display: flex">

                                                <div class="container bg-white col-md-6 mx-auto">
                                                    <div>
                                                        <h3 style="text-align: center">
                                                           <?php echo $name; ?>
                                                        </h3>
                                                    </div>
                                                    <table>


                                                        <?php
                                                            $rgbColor = array();
                                                            foreach(array('r', 'g', 'b') as $color){
                                                                $rgbColor[$color] = mt_rand(0, 255);
                                                            }
                                                        ?>
                                                            <tr>
                                                                <td style="color:#da291c">Jan</td>
                                                                <td>
                                                                    <div class="badge " style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="padding-left:5px;padding-right:5px;">
                                                                            <?php echo $actual_jan ?>
                                                                        </div>


                                                                    </div>
                                                                    <td>
                                                                    <div style="width: 300px"style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="margin-left:5px;  border-radius:2px; width: <?php echo e($actual_jan/$total*100); ?>px; background: rgb(<?= implode(",", $rgbColor); ?>); height: 20px;"> </div>
                                                                    </div>
                                                                </td>
                                                                </td>
                                                                <td ><?php echo $actual_jan/$total*100 ?>%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:#da291c">Feb</td>
                                                                <td>
                                                                    <div class="badge" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="padding-left:5px;padding-right:5px;">
                                                                            <?php echo $actual_feb ?>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div style="width: 300px"style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style=" text-white margin-left:5px; border-radius:2px; width: <?php echo e($actual_feb/$total*100); ?>px; background: rgb(<?= implode(",", $rgbColor); ?>); height: 20px;"></div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $actual_feb/$total*100 ?>%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:#da291c">Mar</td>
                                                                <td>
                                                                    <div class="badge" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="padding-left:5px;padding-right:5px;">
                                                                            <?php echo $actual_mar ?>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div style="width: 300px" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="text-white margin-left:5px; border-radius:2px; width: <?php echo e($actual_mar/$total*100); ?>px; background: rgb(<?= implode(",", $rgbColor); ?>); height: 20px;"></div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $actual_mar/$total*100 ?>%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:#da291c">Apr</td>
                                                                <td>
                                                                    <div class="badge" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="padding-left:5px;padding-right:5px;">
                                                                            <?php echo $actual_apr ?>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div style="width: 300px" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style=" text-white margin-left:5px; border-radius:2px; width: <?php echo e($actual_apr/$total*100); ?>px; background: rgb(<?= implode(",", $rgbColor); ?>); height: 20px;"></div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $actual_apr/$total*100 ?>%</td>
                                                                <tr>
                                                                    <td style="color:#da291c">May</td>
                                                                <td>
                                                                    <div class="badge" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="padding-left:5px;padding-right:5px;">
                                                                            <?php echo $actual_may ?>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div style="width: 300px" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="text-white margin-left:5px; border-radius:2px; width: <?php echo e($actual_may/$total*100); ?>px; background: rgb(<?= implode(",", $rgbColor); ?>); height: 20px;"></div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $actual_may/$total*100 ?>%</td>
                                                                </tr>

                                                                <tr>
                                                                    <td style="color:#da291c">Jun</td>
                                                                <td>
                                                                    <div class="badge" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style=" padding-left:5px;padding-right:5px;">
                                                                            <?php echo $actual_jun ?>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div style="width: 300px" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style=" text-white margin-left:5px; border-radius:2px; width: <?php echo e($actual_jun/$total*100); ?>px; background: rgb(<?= implode(",", $rgbColor); ?>); height: 20px;"></div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $actual_jun/$total*100 ?>%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:#da291c">Jul</td>
                                                                <td>
                                                                    <div class="badge" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="padding-left:5px;padding-right:5px;">
                                                                            <?php echo $actual_jul ?>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td  style="margin-left:20px;">
                                                                    <div style="width: 300px" style="margin-left:20px;">
                                                                        <div style="margin-left:5px; border-radius:2px; width: <?php echo e($actual_jul/$total*100); ?>px; background: rgb(<?= implode(",", $rgbColor); ?>); height: 20px;"></div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $actual_jul/$total*100 ?>%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:#da291c">Aug</td>
                                                                <td>
                                                                    <div class="badge" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="padding-left:5px;padding-right:5px;">
                                                                            <?php echo $actual_aug ?>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div style="width: 300px" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="text-white margin-left:5px; border-radius:2px; width: <?php echo e($actual_aug/$total*100); ?>px; background: rgb(<?= implode(",", $rgbColor); ?>); height: 20px;"></div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $actual_aug/$total*100 ?>%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:#da291c">Sep</td>
                                                                <td>
                                                                    <div class="badge" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="padding-left:5px;padding-right:5px;">
                                                                            <?php echo $actual_sep ?>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div style="width: 300px" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="text-white margin-left:5px; border-radius:2px; width: <?php echo e($actual_sep/$total*100); ?>px; background: rgb(<?= implode(",", $rgbColor); ?>); height: 20px;"></div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $actual_sep/$total*100 ?>%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:#da291c">Oct</td>
                                                                <td>
                                                                    <div class="badge" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="padding-left:5px;padding-right:5px;">
                                                                            <?php echo $actual_oct ?>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div style="width: 300px" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="text-white  margin-left:5px; border-radius:2px; width: <?php echo e($actual_oct/$total*100); ?>px; background: rgb(<?= implode(",", $rgbColor); ?>); height: 20px;"></div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $actual_oct/$total*100 ?>%</td>
                                                                <tr>
                                                                    <td style="color:#da291c">Nov</td>
                                                                <td>
                                                                    <div class="badge" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="padding-left:5px;padding-right:5px;">
                                                                            <?php echo $actual_nov ?>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div style="width: 300px" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="text-white margin-left:5px; border-radius:2px; width: <?php echo e($actual_nov/$total*100); ?>px; background: rgb(<?= implode(",", $rgbColor); ?>); height: 20px;"></div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $actual_nov/$total*100 ?>%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:#da291c">Dec</td>
                                                                <td>
                                                                    <div class="badge" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="padding-left:5px;padding-right:5px;">
                                                                            <?php echo $actual_decem  ?>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div style="width: 300px" style="margin-left:20px; background: rgb(<?= implode(",", $rgbColor); ?>)">
                                                                        <div style="text-white margin-left:5px; border-radius:2px; width: <?php echo e($actual_decem/$total*100); ?>px; background: rgb(<?= implode(",", $rgbColor); ?>); height: 20px;"></div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $actual_decem/$total*100 ?>%</td>
                                                                </tr>
                                                                <tr>

                                                                <td>

                                                                </td>
                                                            </tr>

                                                    </table>
                                                </div>
                                            </div>

                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mafamatest/public_html/resources/views/revenue_variance_monthly_graph.blade.php ENDPATH**/ ?>