  <!DOCTYPE html>
  <html>
  <head>
  <title> Profile | TAPS NITW</title>
    <style>
    #profile{
      padding: 10px;
    }
    h3
    {
      font-family: Montserrat;
    }
    #image{
    width:auto;
    height:350px;
    min-width: 190px;
}
    </style>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <!--Import Google Icon Font-->
    <link href="<?php echo base_url('assets/google_fonts/mat_icon.css')?>" rel="stylesheet">
  </head>

  <body>
  <script type="text/javascript">
  $(document).ready(function(){
    $('ul.tabs').tabs();
  });
        </script>
    <div>
    <div class="card-panel blue darken-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s1">
            <a data-target="#modal1" href="#modal1" class="modal-trigger">
           <img src="<?php if (file_exists('./assets/stud_profile_pic/'.$user['encrypt'].$id.'.jpg')){echo base_url('./assets/stud_profile_pic/'.$user['encrypt'].$id.'.jpg');} else {echo base_url('assets/materialize/images/avatar.jpg');}?>" alt="" class="responsive-img valign profile-image">
            </a>
            </div>
            <div class="col s11">
              <span class="white-text">
                <h3>MY PROFILE</h3>
                <hr>
              <div>
                <?php
                switch ($approved) {
                  case 0:
                    echo "Fill the complete details correctly.";
                    break;
                  case 1:
                    echo "Profile Locked!";
                    break;
                  case 2:
                    echo "Check all details are filled correctly before its locked.";
                    break;
                }?>
              </div>
              </span>
            </div>
          </div>
        </div>
    <div class="row">
    <div class="col s12">
      <ul class="tabs tabs-profile light-blue">
        <li class="tab col s4"><a class="white-text waves-effect waves-light active" href="#test1">Personal Details</a></li>
        <li class="tab col s4"><a class="white-text waves-effect waves-light" href="#test2">Contact Details</a></li>
         <li class="tab col s4"><a class="white-text waves-effect waves-light" href="#test3">Academic Details</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
    <div class="container offset s3" style="padding:2em;">
      <div class="row">
        <form name="myForm"  action="<?php echo base_url('student/display');?>" onsubmit="return validateForm()" method="POST">
          <div class="row">
            <div class="input-field col s4">
              <i class="material-icons prefix">account_circle</i>
              <input value="<?php echo "$first_name";?>" id="fn" name="fn" type="text" <?php if ($approved==1) {echo "readonly";} else{echo "required";}?> >
              <label for="fn">First Name*</label>
            </div>
            <div class="input-field col s4">
              <input value="<?php echo "$middle_name";?>" id="mn" name="mn" type="text" <?php if ($approved==1) {echo "readonly";} else{echo "required";}?>>
              <label for="mn">Middle Name*</label>
            </div>
            <div class="input-field col s4">
              <input value="<?php echo "$last_name";?>" id="ln" name="ln" type="text" <?php if ($approved==1) {echo "readonly";} else{echo "required";}?>>
              <label for="ln">Last Name*</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">reorder</i>
              <input id="reg_no" name="reg_no" type="number" value="<?php echo "$registration_number";?>" <?php if ($approved==1) {echo "readonly";} else{echo "required";}?>>
              <label for="reg_no">Registration No.*</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_telephone" name="roll_no" type="number" value="<?php echo "$roll_number";?>" <?php if ($approved==1) {echo "readonly";} else{echo "required";}?>>
              <label for="icon_telephone">Roll No.*</label>
            </div>
          </div>
          <div class="row">
           <div class=" col s6">
            <label >Branch</label>
              <select class="browser-default" id="icon_prefix" name="branch" onChange="getSpecialization(this.value)" <?php if ($approved==1 || isset($specialization_id)) {echo "disabled";} else{echo "required";}?>>
                <option value="" disabled selected for="icon_prefix">-- Select your branch --</option>
                <option value="1"<?php if(isset($did)&&$did==1) echo "selected"; ?>> CIVIL</option>
                <option value="2"<?php if(isset($did)&&$did==2) echo "selected"; ?>> EEE</option>
                <option value="3"<?php if(isset($did)&&$did==3) echo "selected"; ?>> MECHACNICAL</option>
                <option value="4"<?php if(isset($did)&&$did==4) echo "selected"; ?>> ECE</option>
                <option value="5"<?php if(isset($did)&&$did==5) echo "selected"; ?>> META</option>
                <option value="6"<?php if(isset($did)&&$did==6) echo "selected"; ?>> CHEMICAL</option>
                <option value="7"<?php if(isset($did)&&$did==7) echo "selected"; ?>> CSE</option>
                <option value="8"<?php if(isset($did)&&$did==8) echo "selected"; ?>> BIOTECH</option>
                <option value="9"<?php if(isset($did)&&$did==9) echo "selected"; ?>> PHYSICS</option>
                <option value="10"<?php if(isset($did)&&$did==10) echo "selected"; ?>> CHEMISTRY</option>
                <option value="11"<?php if(isset($did)&&$did==11) echo "selected"; ?>> MATHEMATICS</option>
                <option value="12"<?php if(isset($did)&&$did==12) echo "selected"; ?>> HUNANITIES & SOCIAL SCIENCE</option>
                <option value="14"<?php if(isset($did)&&$did==14) echo "selected"; ?>> SCHOOL OF MANAGEMENT</option>
              </select>

            </div>
            <div class="col s6" id="wow">
              <label >Specialization</label>
              <select class="browser-default" id="branch_spe" name="branch_spe">
              <?php if(isset($specialization_id)){?>
              <option value=""><?php echo $spe_name; ?></option>
              <?php }else{?>
              <option value="">Select Specialization</option>
              <?php } ?>
              </select>
            </div>
            </div>
          <div class="row">
            <div class="input-field col s9">
              <i class="material-icons prefix">today</i>
              <input id="icon_prefix" name="dob" name="middle_name" type="date" value="<?php echo $birthday;?>" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix"></label>
            </div>
          </div>
          <div class="row">
            <div class="col s9">
            <i class="material-icons prefix">face</i>             
            <label for="icon_prefix" ><h8>Gender</h8></label> 
            <br><br>
            <div class="row">
              <div class="col s4">
                <input name="gen" type="radio" id="gen1" value="1" <?php if (isset($gender)&&$gender==1) echo "checked";?> />
                <label for="gen1">Male</label>
              </div>
              <div class="col s4">
                <input name="gen" type="radio" id="gen2" value="0" <?php if (isset($gender)&&$gender==0) echo "checked";?>/>
                <label for="gen2">Female</label>
              </div>
            </div>
            </div>
          </div> 
          <div class="row">
            <i class="material-icons prefix">supervisor_account</i>             
            <label for="icon_prefix" ><h6>Whether SC/ST</h6></label>
            <p>
              <input name="catg" type="radio" id="t0"  value="1" <?php if (isset($category_id)&&$category_id==1) echo "checked";?>/>
              <label for="t0">OPEN</label>
            </p>  
            <p>
              <input name="catg" type="radio" id="t1" value="2"<?php if (isset($category_id)&&$category_id==2) echo "checked";?> />
              <label for="t1">OBC</label>
            </p>
            <p>
              <input name="catg" type="radio" id="t2" value="3" <?php if (isset($category_id)&&$category_id==3) echo "checked";?>/>
              <label for="t2">SC</label>
            </p>
            <p>
              <input name="catg" type="radio" id="t3"  value="4" <?php if (isset($category_id)&&$category_id==4) echo "checked";?>/>
              <label for="t3">ST</label>
            </p>
            <p>
              <input name="catg" type="radio" id="t4"  value="5" <?php if (isset($category_id)&&$category_id==5) echo "checked";?>/>
              <label for="t4">PWD</label>
            </p>
          </div>        
          <div class="row">
           <div class="col s6">
            <label >Country</label>
              <select class="browser-default" id="icon_prefix" name="country">
                <option value="" disabled selected for="icon_prefix">-- Select your country --</option>
                <option value="India" <?php if(isset($country)&&$country=="India") echo "selected"; ?> > India</option>
                <option value="Nepal" <?php if(isset($country)&&$country=="Nepal") echo "selected"; ?>>Nepal</option>
                <option value="China" <?php if(isset($country)&&$country=="China") echo "selected"; ?>>  China</option>
                <option value="Japan" <?php if(isset($country)&&$country=="Japan") echo "selected"; ?>>  Japan</option>
                <option value="Pakistan" <?php if(isset($country)&&$country=="Pakistan") echo "selected"; ?>>Pakistan</option>
                <option value="Afghanistan" <?php if(isset($country)&&$country=="Afghanistan") echo "selected"; ?>>Afghanistan</option>
              </select>

            </div>
            </div>
            <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input id="icon_prefix" name="passport" type="text" value="<?php echo $passport;?>" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix">Passport</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s11">
              <i class="material-icons prefix">location_on</i>
              <input id="icon_prefix" name="add" type="text" value="<?php echo $permanent_address;?>" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix">Permanent Address</label>
            </div>
          </div>          
    </div>
    </div>
    </div>
    <div id="test2" class="col s12">
    <div class="container offset s3" style="padding:2em;">
      <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">phone</i>
              <input id="icon_telephone" name="mob" type="tel" value="<?php echo $mobile;?>" <?php if ($approved==1) {echo "readonly";} else{echo "required";}?> >
              <label for="icon_telephone">Mobile Number*</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input id="icon_prefix" name="email" type="text" value="<?php echo $email;?>" <?php if ($approved==1) {echo "readonly";} else{echo "required";}?>>
              <label for="icon_prefix">Email ID*</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">call</i>
              <input id="icon_prefix" name="emergency_contact" type="text" value="<?php echo $emergency_contact ?>" <?php if ($approved==1) {echo "readonly";} ?> >
              <label for="icon_prefix">Emergency Contact</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">supervisor_account</i>
              <input id="icon_prefix" name="linkedin" type="text" value="<?php echo $linkedin ?>" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix">Linkedin</label>
            </div>
          </div>
        </div>
    </div>
    <div id="test3" class="col s12">
      <div class="container offset s3" style="padding:2em;">
        <div>
          <h5>SSC</h5>
          <hr>
          <div class="row">
            <div class="input-field col s6">
              <input id="icon_prefix" name="tenth_ins" value="<?php echo $sscInst;?>" type="text" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix">Institute</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_prefix" name="tenth_uni" type="text"  value="<?php echo $sscUniv;?>" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix">University</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="icon_prefix" name="tenth" type="text"  value="<?php echo $sscPer;?>" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix">10th Percentage</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_prefix" name="tenth_yr" type="text"  value="<?php echo $sscPassYr;?>" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix">Passing Year</label>
            </div>
          </div>
        </div>
        <div>
          <h5>Inter</h5>
          <hr>
          <div class="row">
            <div class="input-field col s6">
              <input id="icon_prefix" name="twelfth_ins" type="text"  value="<?php echo $interInst;?>" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix">Institute</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_prefix" name="twelfth_uni" type="text"  value="<?php echo $interUniv;?>" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix">University</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="icon_prefix" name="twelfth" type="text"  value="<?php echo $interPer;?>" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix">12th Percentage</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_prefix" name="twelfth_yr" type="text"  value="<?php echo $interPassYr;?>" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix">Passing Year</label>
            </div>
          </div>
        </div>
        <div>
          <h5>Graduation</h5>
          <hr>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">perm_identity</i>
              <input id="icon_prefix" name="cgpa" type="text" value="<?php echo $cgpa;?>" <?php if ($approval_status==1) {echo "readonly";}?>/>
              <label for="icon_prefix">CGPA</label>
            </div>
          </div>
          <h6>SGPA</h6>
          <div class="row">
            <div class="input-field col s6">
              <input id="icon_prefix" name="sem1" type="text" value="<?php echo $sem1sg;?>" <?php if ($approval_status==1) {echo "readonly";}?>>
              <label for="icon_prefix">Sem1(SG)</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_prefix" name="sem1cg" type="text" value="<?php echo $sem1cg;?>" <?php if ($approval_status==1) {echo "readonly";}?>>
              <label for="icon_prefix">Sem1(CG)</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="icon_prefix" name="sem2" type="text" value="<?php echo $sem2sg;?>" <?php if ($approval_status==1) {echo "readonly";}?>>
              <label for="icon_prefix">Sem2(SG)</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_prefix" name="sem2cg" type="text" value="<?php echo $sem2cg;?>" <?php if ($approval_status==1) {echo "readonly";}?>>
              <label for="icon_prefix">Sem2(CG)</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="icon_prefix" name="sem3" type="text" value="<?php echo $sem3sg;?>" <?php if ($approval_status==1) {echo "readonly";}?>>
              <label for="icon_prefix">Sem3(SG)</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_prefix" name="sem3cg" type="text" value="<?php echo $sem3cg;?>" <?php if ($approval_status==1) {echo "readonly";}?>>
              <label for="icon_prefix">Sem3(CG)</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="icon_prefix" name="sem4" type="text" value="<?php echo $sem4sg;?>" <?php if ($approval_status==1) {echo "readonly";}?>>
              <label for="icon_prefix">Sem4(SG)</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_prefix" name="sem4cg" type="text" value="<?php echo $sem4cg;?>" <?php if ($approval_status==1) {echo "readonly";}?>>
              <label for="icon_prefix">Sem4(CG)</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="icon_prefix" name="sem5" type="text" value="<?php echo $sem5sg;?>" <?php if ($approval_status==1) {echo "readonly";}?>>
              <label for="icon_prefix">Sem5(SG)</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_prefix" name="sem5cg" type="text" value="<?php echo $sem5cg;?>" <?php if ($approval_status==1) {echo "readonly";}?>>
              <label for="icon_prefix">Sem5(CG)</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="icon_prefix" name="sem6" type="text" value="<?php echo $sem6sg;?>"  <?php if ($approval_status==1) {echo "readonly";}?>>
              <label for="icon_prefix">Sem6(SG)</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_prefix" name="sem6cg" type="text" value="<?php echo $sem6cg;?>"  <?php if ($approval_status==1) {echo "readonly";}?>>
              <label for="icon_prefix">Sem6(CG)</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="icon_prefix" name="sem7" type="text" value="<?php echo $sem7sg;?>" <?php if ($approval_status==1) {echo "readonly";}?>>
              <label for="icon_prefix">Sem7(SG)</label>
            </div>
            <div class="input-field col s6">
              <input id="icon_prefix" name="sem7cg" type="text" value="<?php echo $sem7cg;?>" <?php if ($approval_status==1) {echo "readonly";}?>>
              <label for="icon_prefix">Sem7(CG)</label>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">content_copy</i>
              <input id="icon_prefix" name="skills" type="text" value="<?php echo $skills ?>" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix">Skills</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">local_mall</i>
              <input id="icon_prefix" name="experience" type="text" value="<?php echo $experience ?>" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix">Experience/Interns</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">content_copy</i>
              <input id="icon_prefix" name="project" type="text" value="<?php echo $projects ?>" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix">Projects</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">content_copy</i>
              <input id="icon_prefix" name="hobbies" type="text" value="<?php echo $hobbies ?>" <?php if ($approved==1) {echo "readonly";}?> >
              <label for="icon_prefix">Hobbies</label>
            </div>
          </div>
        </div>
    </div>
          <button class="btn waves-effect waves-light" type="submit" name="action" <?php if($approved==1)echo 'disabled'?>>Update
            <i class="material-icons right">send</i>
          </button>

        </form>
      </div>
    </div>

    <div id="modal1" class="modal">
      <center><h5>Upload Image</h5>
    <hr>
    <div class="modal-content">
      <form enctype="multipart/form-data" action="<?php echo base_url('student/upload/do_upload_photo')?>" method="post">
        <div>
            <img id="image"src="<?php if (file_exists('./assets/stud_profile_pic/'.$user['encrypt'].$id.'.jpg')){echo base_url('./assets/stud_profile_pic/'.$user['encrypt'].$id.'.jpg');} else {echo base_url('assets/materialize/images/avatar.jpg');}?>" alt="" class="responsive-img valign profile-image">
        </div>
        <input type="file" name="userfile" id="profile_image" size="20" onchange="readURL(this)" style="padding-left:6em;" />   
        <br /><br />
        <input type="hidden" name="x1" value="" />
        <input type="hidden" name="y1" value="" />
        <input type="hidden" name="x2" value="" />
        <input type="hidden" name="y2" value="" />
        <input type="hidden" name="width" value=""/>
        <button id="upl" class="btn waves-effect waves-light" type="submit" disabled>Upload</button>
      </form>
      </center>
    </div>
  </div>
      <script>
      function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('image').src=e.target.result;
            $('input[name="width"]').val(document.getElementById('image').width);
            $('#upl').prop('disabled', false);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$(document).ready(function () {
    $('img#image').imgAreaSelect({
        aspectRatio: '1:1',
        onSelectEnd: function (img, selection) {
            $('input[name="x1"]').val(selection.x1);
            $('input[name="y1"]').val(selection.y1);
            $('input[name="x2"]').val(selection.width);
            $('input[name="y2"]').val(selection.height);            
        }
    });
});
  function getSpecialization(y)
  {
    $.ajax(
  {
    url: '<?php echo base_url("/student/getSpecialization");?>',
    data:
    {
      branch:y
    },
    type:"POST",
    success: function(data) {
    $("#branch_spe").html(data);
    }
  });
  }
      </script>
    <!--Import jQuery before materialize.js-->
  </body>
  </html>