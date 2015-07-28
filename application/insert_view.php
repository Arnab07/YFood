<html>
    <head>
        <title>Cook_Regsitration</title>
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
        <link  rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/semantic/css/semantic.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.css">
        <script src="<?php echo base_url();?>js/jquery-2.1.1.js"></script>
        <script src="<?php echo base_url();?>js/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>css/semantic/javascript/semantic.js"></script>
    </head>
    <body style="margin:0px">


           <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand active" href="#">Cooking Simplified</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


        <div id="container" class="form_group" style="width:50%">
            <?php echo form_open('reg_cook', array('id' => 'form1', 'class'=> 'ui form' )); ?>
            <h1>Registration</h1><hr/> 
            <?php if (isset($message)) { ?>
                <CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
            <?php } ?>
              
            
                <?php echo form_label('Name :'); ?> <?php echo form_error('dname'); ?>
                <?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br />
         
                <?php echo form_label('Age :'); ?> <?php echo form_error('dage'); ?>
                <?php echo form_input(array('id' => 'dage', 'name' => 'dage')); ?><br />
         
            <?php echo form_label('Email :'); ?> <?php echo form_error('demail'); ?>
            <?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?><br />
           
            <?php echo form_label('Mobile No. :'); ?> <?php echo form_error('dmobile'); ?>
            <?php echo form_input(array('id' => 'dmobile', 'name' => 'dmobile', 'placeholder' => '10 Digit Mobile No.')); ?><br />
        
            <?php echo form_label('Password :'); ?> <?php echo form_error('dpass'); ?>
            <?php echo form_password(array('id' => 'dpass', 'name' => 'dpass')); ?><br />
           
            <?php echo form_label('City :'); ?> <?php echo form_error('dcity'); ?>
            <?php echo form_input(array('id' => 'dcity', 'name' => 'dcity')); ?><br />
         
            <?php echo form_label('Locality :'); ?> <?php echo form_error('dlocal'); ?>
            <?php echo form_input(array('id' => 'dlocal', 'name' => 'dlocal')); ?><br />
           
            <?php echo form_label('Student Address :'); ?> <?php echo form_error('daddress'); ?>
            <?php echo form_input(array('id' => 'daddress', 'name' => 'daddress')); ?><br />
           
            <?php echo form_label('Pincode :'); ?> <?php echo form_error('dpin'); ?>
            <?php echo form_input(array('id' => 'dpin', 'name' => 'dpin')); ?><br />
           
            <?php echo form_label('About :'); ?> <?php echo form_error('dabout'); ?>
            <?php echo form_textarea(array('id' => 'dabout', 'name' => 'dabout')); ?><br />
         
            <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
            <?php echo form_close(); ?><br/>
           
           
        </div>
    </body>
</html>
