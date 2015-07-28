
<?php $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
$this->output->set_header('Pragma: no-cache'); ?>

<html>
    <head>
    <META Http-Equiv="Cache-Control" Content="no-cache">
    <META Http-Equiv="Pragma" Content="no-cache">
    <META Http-Equiv="Expires" Content="0">
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
        <script type="text/javascript" src="<?php echo base_url();?>css/semantic/dist/semantic.js"></script>
    </head>
    <body style="margin:0px" background="<?php echo base_url()?>/back.jpg" bgproperties="fixed">
      <?php $this->load->view('header'); ?>

            
        <div id="container" style="ui segment; width:40%; background-color: #ffffff">
            
        <h1>Welcome <?php echo $username; ?></h1>
        <ul >
        <li>Email: <?php echo $email; ?>        </li>
        <li>Age: <?php echo $user_age; ?>        </li>
        <li>Mobile:<?php echo $user_mob; ?>        </li>
        <li>About: <?php echo $user_about; ?>        </li>
        </ul>

            <div class="ui huge label" >
        <a class="detail" href="<?php echo site_url('upload/do_upload')?>">Upload Pictures</a>
        </div>
            <div class="ui huge label" >
        <a class="detail" href="<?php echo site_url('login/logout')?>">Logout</a>
        </div>
        
           
        </div>
        <br><Br>
        
        <BR><br>
        <?php $this->load->view('footer'); ?>
    </body>
</html>
