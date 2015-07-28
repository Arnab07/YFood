<html>
    <head>
        <title>Cook_Regsitration</title>
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

            
        <div id="container" class="ui form segment" style="width:50%; padding:1em">
            <?php echo form_open('cook_reg'); ?>
            <h2><center>Registration</center></h2><hr/> 
            <?php if (isset($message)) { ?>
                <CENTER><h4 style="color:green;"><?php echo $message ?></h4></CENTER><br>
            <?php } ?>
            
            <div class="two fields">
            <div class=" field">
            <?php echo form_label('Name :'); ?> 
            <?php echo form_input(array('id' => 'dname', 'name' => 'dname','value'=> $cook_name) ); ?><br />
            <?php echo form_error('dname'); ?>
            </div>
            <div class="field">
            <?php echo form_label('Age :'); ?> 
            <?php echo form_input(array('id' => 'dage', 'name' => 'dage','value'=> $cook_age)); ?><br />
            <?php echo form_error('dage'); ?><br />
            </div>
            </div>
            <?php echo form_label('Email :'); ?> 
            <?php echo form_input(array('id' => 'demail', 'name' => 'demail','value'=> $cook_email)); ?><br />
            <?php echo form_error('demail'); ?><br />

            <?php echo form_label('Mobile No. :'); ?> 
            <?php echo form_input(array('id' => 'dmobile', 'name' => 'dmobile', 'placeholder' => '10 Digit Mobile No.','value'=> $cook_mob)); ?><br />
            <?php echo form_error('dmobile'); ?><br />

            <?php echo form_label('Password :'); ?> 
            <?php echo form_password(array('id' => 'dpass', 'name' => 'dpass')); ?><br />
            <?php echo form_error('dpass'); ?><br />

            <?php echo form_label('City :'); ?> 
            <?php echo form_input(array('id' => 'dcity', 'name' => 'dcity','value'=> $cook_city)); ?><br />
            <?php echo form_error('dcity'); ?><br />

            <?php echo form_label('Locality :'); ?> 
            <?php echo form_input(array('id' => 'dlocal', 'name' => 'dlocal','value'=> $cook_locality)); ?><br />
            <?php echo form_error('dlocal'); ?><br />

            <?php echo form_label('Student Address :'); ?> 
            <?php echo form_input(array('id' => 'daddress', 'name' => 'daddress','value'=> $cook_address)); ?><br />
            <?php echo form_error('daddress'); ?><br />

            <?php echo form_label('Pincode :'); ?> 
            <?php echo form_input(array('id' => 'dpin', 'name' => 'dpin','value'=> $cook_pincode)); ?><br />
            <?php echo form_error('dpin'); ?><br />

            <?php echo form_label('About :'); ?> 
            <?php echo form_textarea(array('id' => 'dabout', 'name' => 'dabout','value'=> $cook_about)); ?><br />
            <?php echo form_error('dabout'); ?><br />

            <?php echo form_submit(array('id' => 'submit', 'value' => 'Register')); ?>
            <?php echo form_close(); ?>
           
        </div>
    </body>
</html>
