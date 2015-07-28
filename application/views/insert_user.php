<html>
    <head>
        <title>User_Regsitration</title>
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
        <link  rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/semantic/dist/semantic.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/fnt/css/font-awesome.css">
        <script src="<?php echo base_url();?>js/jquery-2.1.1.js"></script>
        <script src="<?php echo base_url();?>js/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>css/semantic/javascript/semantic.js"></script>
    </head>
    <body style="margin:0px" background="<?php echo base_url()?>/back.jpg" bgproperties="fixed">

    <?php $this->load->view('header'); ?>
            
        <div id="container" class="ui form segment" style="width:50%;  padding:1em">
            <?php echo form_open('user_reg'); ?>
            <h2><center>Registration</center></h2><hr/> 
            <?php if (isset($message)) { ?>
                <CENTER><h4 style="color:green;"><?php echo $message ?></h4></CENTER><br>
            <?php } ?>
            
            <div class="two fields">
            <div class=" field">
            <?php echo form_label('Name :'); ?> 
            <?php echo form_input(array('id' => 'dfname', 'name' => 'dfname','value'=> $user_fname) ); ?><br />
            <?php echo form_error('dfname'); ?>
            </div>
             <div class=" field">
            <?php echo form_label('Last Name :'); ?> 
            <?php echo form_input(array('id' => 'dlname', 'name' => 'dlname','value'=> $user_lname) ); ?><br />
            <?php echo form_error('dlname'); ?>
            </div>
            </div>
            
            <?php echo form_label('Age :'); ?> 
            <?php echo form_input(array('id' => 'dage', 'name' => 'dage','value'=> $user_age)); ?><br />
            <?php echo form_error('dage'); ?><br />
            
            
            <?php echo form_label('Email :'); ?> 
            <?php echo form_input(array('id' => 'demail', 'name' => 'demail','value'=> $user_email)); ?><br />
            <?php echo form_error('demail'); ?><br />

            <?php echo form_label('Mobile No. :'); ?> 
            <?php echo form_input(array('id' => 'dmobile', 'name' => 'dmobile', 'placeholder' => '10 Digit Mobile No.','value'=> $user_mob)); ?><br />
            <?php echo form_error('dmobile'); ?><br />

            <?php echo form_label('Password :'); ?> 
            <?php echo form_password(array('id' => 'dpass', 'name' => 'dpass')); ?><br />
            <?php echo form_error('dpass'); ?><br />

            

            <?php echo form_label('Location :'); ?> 
            <?php echo form_input(array('id' => 'dlocal', 'name' => 'dlocal','value'=> $user_loc)); ?><br />
            <?php echo form_error('dlocal'); ?><br />

            <?php echo form_label('Choice :'); ?> 
            <?php echo form_textarea(array('id' => 'dchoice', 'name' => 'dchoice','value'=> $user_choice)); ?><br />
            <?php echo form_error('dchoice'); ?><br />

            

            <?php echo form_submit(array('id' => 'submit', 'value' => 'Register')); ?>
            <?php echo form_close(); ?>
           
        </div>
    </body>
</html>
