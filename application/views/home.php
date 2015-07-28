<html>
    <head>
        <title>YFood.com</title>
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
        <link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico"> 
    </head>
    <body style="margin:0px;" background="<?php echo base_url()?>/back.jpg" bgproperties="fixed">
      <?php $this->load->view('header'); ?>

            
        <div id="container" class="ui form segment" style="width:280px; padding:1em">
            <?php echo form_open('reg_cook/reg'); ?>
            <h2><center>Signup</center></h2><hr/> 
            
            <div class=" field" align="center">
               <?php $options = array(
                  'user'  => 'User',
                  'cook'    => 'Cook'
                );
            
            echo form_dropdown('login', $options,array(),'class="ui dropdown" ');
            ?>

            </div>

            
           
            
            
            <?php echo form_submit(array('id' => 'submit', 'value' => 'Register')); ?>
            <?php echo form_close(); ?>
           
        </div>
        <br><Br><BR><b
    </body>
</html>
