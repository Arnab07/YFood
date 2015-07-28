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
      <br>
<div id="container" style="ui segment; width:80%; background-color: #ffffff">
<pre>
Q. What is Yfood?
Ans:- YFOOD is a connection between people who loves home-food and the Indian house-wives who love to cook food for other people. YFOOD helps in delivering the cooked food from Indian house-wives to the customers. The food is prepared by Indian women who loves to cook food and want to spread the happiness of home cooked food.

Q. How does Yfood works?
Ans:-The food is prepared by Indian women in their own kitchen, packed in Yfood special packages that keep the food absolutely fresh delivered to your doorstep through ‘Yservice’-Our delivery service.

Q.Where does Yfood deliver?
Ans:-Currently, Yfood is only available in Koramangala but soon it will expanded to other places.

Q.Who can join Yfood?
Ans:- Yfood is open to all who enjoys food and want to spread the joy of eating .

Q. Do I need any cooking qualification to join?
Ans:- No, You can be home maker who loves to cook and you can be a professional . The only qualification you need is passion to cook.

Q. Where and when do I have to cook?
Ans:-You will cook from the convenience of your home at time mutually suitable for both of us.

Q. Do I need to cook daily?
Ans:-No, you just have to tell us the day before about your availability.

Q. Can I add more meals to an already placed order?
Ans:- Yes, you can. You just need to make a new order.

Q. Can I pre-book a meal?
Ans:- Yes, Just call at +91 7750817368 to pre-book a order that you see at Yfood.

Q. Can I plan a party or place a bulk order with Yfood?
Ans:- Yes you can. You can call us at +91 7750817368 for placing bulk order.

Q. Where will my personal information be used?
Ans:-Yfood take security very seriously and we take precautions to keep your personal information secure and will not disclose your information until it is asked by any government agencies.


</pre>

</div>

<?php $this->load->view('footer'); ?>
</body>
</html>