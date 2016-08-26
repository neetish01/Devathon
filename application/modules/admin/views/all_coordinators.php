<title> Coordinators | TAPS NITW</title>
  <div class="container">
  <div class="row" id="content">
<?php foreach ($result as $key => $value){?>
    <div class="col s12 m6 l4" >
    <div id="profile-card" class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?php echo base_url('assets/images/bg.jpg');?>" alt="user background">
        </div>
        <div class="card-content">
           <img src="<?php if (file_exists('./assets/stud_profile_pic/'.$user->encrypt.$id.'.jpg')){echo base_url('./assets/stud_profile_pic/'.$user->encrypt.$id.'.jpg');} else {echo base_url('assets/materialize/images/avatar.jpg');}?>" alt="" class="circle responsive-img activator card-profile-image">
            <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                <i class="mdi-action-account-circle"></i>
            </a>
            <span class="card-title activator grey-text text-darken-4"><?php echo $value['first_name'].' '.$value['last_name'];?></span>
            <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i><?php echo $value['name']; ?></p>

        </div>
        <div class="card-reveal">
            <span class="card-title activator grey-text text-darken-4"><?php echo $value['first_name'].' '.$value['last_name'];?></span>
            <a href="tel:<?php echo $value['mobile']; ?>"><p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i><?php echo $value['mobile']; ?></p></a>
            <a href="mailto:<?php echo $value['email']; ?>"></a><p><i class="mdi-communication-email cyan-text text-darken-2"></i><?php echo $value['email']; ?></p>
             <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i><?php echo $value['name']; ?></p>
        </div>
    </div>
</div>

    <?php } ?>
  </div> 
</div>