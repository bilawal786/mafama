@extends('layouts.main') 
@section("content")

<section>
    <div class="container">
        <div class="row">
            <!-- tabs content -->
            <div class="col-md-12 col-sm-12">
                <div class="row">
                    <div class="heading-title heading-dotted col-md-12 margin-bottom-20 text-center">
                        <h4>Client Management / Add Client</h4>
                    </div>
                    <div class="col-md-12 text-right margin-bottom-10">
                        <?php if($chat != "off"){ ?>
                            <a href="{{ url('chat') }}" class="btn btn-md btn-info margin-right-10">Chat</a>
                        <?php } ?>
                        <?php if($tools != "off"){ ?>
                            <a href="{{ url('tools') }}" class="btn btn-md btn-info margin-right-10">Tools</a>
                        <?php } ?>
                        <a href="{{ url('calender_meeting') }}" class="btn btn-md btn-info margin-right-10">Calender meetings / tasks</a>
                        <a href="{{ url('/') }}" class="btn btn-md btn-info">Back</a>
                    </div>
                    <!--<ul class="nav nav-tabs nav-button-tabs nav-justified" style="padding:10px;">
                                <li class="active"><a href="profile_info.php">Profile</a></li>
                                <li><a href="task.php">Task</a></li>
                                
                            
                                
                            </ul>-->
                    <form action="{{ url('addclient_appointment') }}" method="POST" id="" enctype="multipart/form-data" autocomplete="off">@csrf
                        <div class="col-md-12" style="border: 1px solid #da291c !important; border-radius: 10px; padding-top: 30px; padding-bottom: 20px;">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4 text-center">
                                    <div>
                                        <img src="{{ asset('public/images/upload.png') }}" style="width: 100px; height: 100px; margin: 0 auto; " id="blah">
                                    </div>
                                    <div>
                                        <input type="file" name="image" class="form-control" style="margin-top: 10px" id="imgInp" >
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Address" required name="email" id="affiliateemail" />
                                    <span style="color: red" id="emailexitstance"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">First Name </label>
                                    <input type="text" class="form-control" placeholder="First Name" required name="first_name" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Last Name </label>
                                    <input type="text" class="form-control" placeholder="Last Name" autocomplete="off" required name="last_name" />
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Religion</label>
                                    <select class="form-control select2" name="religion">
                                        <?php
                                        foreach($religion as $value){
                                        ?>
                                            <option value="<?= $value->religion ?>"><?= $value->religion ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <input class="form-control" placeholder="" name="address" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="">Zip Code</label>
                                    <input class="form-control" name="zip_code" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number"  maxlength = "6" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for=""> City </label>
                                    <input type="text" class="form-control" placeholder="" name="city" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="">Country</label>
                                    <select id="countries_states1" class="form-control bfh-countries" data-country="US" name="country" required></select>
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
                                    <label class="form-label">Date of Birth</label>
                                    <input type="text" class="form-control datepicker" placeholder="" data-format="mm/dd/yyyy" name="dob" required />
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Home Phone</label>
                                    <input class="form-control" placeholder="Home Phone" name="home_phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10" />
                                </div>
                            </div> -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Work Phone</label>
                                    <input class="form-control" placeholder="Work Phone" name="work_phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Cell Phone</label>
                                    <input class="form-control" placeholder="Cell Phone" name="cell_phone"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10" required />
                                </div>
                            </div>
                            <div class="col-md-4" id="passsec">
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required />
                                </div>
                            </div>
                            <div class="col-md-4" id="conpasssec">
                                <div class="form-group">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password"  name="confirm_password" required />
                                    <p id="CheckPasswordMatch" style="color: red;"></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Company</label>
                                    <input type="text" class="form-control" placeholder="" name="company" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Comments</label>
                                    <textarea class="form-control" placeholder="" rows="4" name="comment" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12" style="margin-top: 40px; text-align: center;">
                            <input type="submit" class="btn btn-lg btn-primary" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="emn" class="modal fade" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" data-toggle="modal" href="#ex2"><span aria-hidden="true">&times;</span></button>
                <p>Your email id is already registered. Do you want to continue with your previous details?</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                <button class="btn btn-primary" onclick="prevdetails()">Yes</button>
            </div>
        </div>
    </div>
</div>
<script>
    function checkPasswordMatch() {
       $("#CheckPasswordMatch").hide();
        var password = $("#password").val();
        var confirmPassword = $("#confirm_password").val();
        if (password != confirmPassword){
            $("#CheckPasswordMatch").show();
            $("#CheckPasswordMatch").html("Passwords does not match!");
            $("#confirm_password").val("");
        }
    }
    $(document).ready(function () {
       $("#confirm_password").change(checkPasswordMatch);
    });
    $("#affiliateemail").change(function(){
        // var varr = $(this).val();
        // $("#emailexitstance").hide();
        // // alert(varr);
        // var url = "<?php echo url('/'); ?>/clientemailavailability";
        // $.ajax({
        //       url: url,
        //       data: 'email=' + varr + '&_token={{ csrf_token() }}',
        //       type: "POST",
        //     success: function (response) {
        //         // alert(response);
        //         if(response == "success") {
        //             $('#emn').modal('show');
        //             // $("#emailexitstance").show();
        //             // $("#emailexitstance").html("The email already exists!!!");
        //             // $("#affiliateemail").val("");
        //         }
        //         else if(response == "unuseable"){
        //             alert("You can't use this email id!!!");
        //             $("#affiliateemail").val("");
        //         }
        //     }
        // });
        prevdetails();
    });
    function prevdetails()
    {
        var varr = $("#affiliateemail").val();
        // alert(varr);
        var url = "<?php echo url('/'); ?>/clientprevdetails";
        $.ajax({
              url: url,
              data: 'email=' + varr + '&_token={{ csrf_token() }}',
              type: "POST",
            success: function (response) {
                // alert(response);
                if(response != ""){
                    if(response[0] == "client"){
                        $("input[name=first_name]").val(response[1]);
                        $("input[name=last_name]").val(response[2]);
                        $("input[name=address").val(response[3]);
                        $("input[name=dob").val(response[4]);
                        $("input[name=home_phone").val(response[5]);
                        $("input[name=cell_phone").val(response[6]);
                        $("input[name=password").val(response[7]);
                        $("input[name=confirm_password").val(response[7]);
                        $("#passsec").hide();
                        $("#conpasssec").hide();
                        $('#emn').modal('hide');
                    }
                    else if(response[0] == "affiliate"){
                        $("input[name=first_name]").val(response[1]);
                        $("input[name=last_name]").val(response[2]);
                        $("input[name=address").val(response[3]);
                        $("input[name=cell_phone").val(response[4]);
                        $("input[name=password").val(response[5]);
                        $("input[name=confirm_password").val(response[5]);
                        $("#passsec").hide();
                        $("#conpasssec").hide();
                        $('#emn').modal('hide');
                    }
                    else if(response[0] == "user"){
                        $("input[name=first_name]").val(response[1]);
                        $("input[name=last_name]").val(response[2]);
                        $("input[name=address").val(response[3]);
                        $("input[name=cell_phone").val(response[4]);
                        $("input[name=password").val(response[5]);
                        $("input[name=confirm_password").val(response[5]);
                        $("#passsec").hide();
                        $("#conpasssec").hide();
                        $('#emn').modal('hide');
                    }
                }
                else{
                    $("input[name=first_name]").val("");
                        $("input[name=last_name]").val("");
                        $("input[name=address").val("");
                        $("input[name=dob").val("");
                        $("input[name=home_phone").val("");
                        $("input[name=cell_phone").val("");
                        $("input[name=password").val("");
                        $("input[name=confirm_password").val("");
                        $("#passsec").show();
                        $("#conpasssec").show();
                }
                
            }
        });
    }
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
          $("#blah").css("border", "2px solid #da291c");
          $("#blah").css("border-radius", "4px");
          $("#blah").css("padding", "2px");
        }
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $("#imgInp").change(function() {
      readURL(this);
    });
</script>

@endsection