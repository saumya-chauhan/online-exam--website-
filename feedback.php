<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ONline For Exam  || FEEDBACK </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
     
        <link rel="stylesheet" href="new/css/font-awesome.min.css">
    
        <link rel="stylesheet" href="new/css/jquery.fancybox.css">
        <link rel="stylesheet" href="new/css/owl.carousel.css">
        <link rel="stylesheet" href="new/css/animate.css">

        <link rel="stylesheet" href="new/css/main.css">
        <link rel="stylesheet" href="new/css/responsive.css">

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

 
 
	<!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>

<body>

<!--header start-->
<div class="row header">
<div class="col-lg-6">
<span class="logo"><img src="image/a1.jpg" width="300px" height="80px"></span></div>

<div class="col-lg-4">
<?php
 include_once 'dbConnection.php';
session_start();
  if((!isset($_SESSION['email']))){
echo '<a href="#" class="pull-right btn sub1" color:white;" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true">
</span>&nbsp;Signin</a>&nbsp;';}
else
{
echo '<a href="logout.php?q=feedback.php" class="pull-right btn sub1" ><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a>&nbsp;';}
?>
&nbsp;
<a href="index.php" class="pull-right btn sub1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Home</a>&nbsp;
</div><div class="col-lg-2"></div></div>

<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

<!--header end-->



		

 <section id="remind">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-5 wow fadeInLeft">
                        <div class="subtitle text-center">
                            <h3>some reviews </h3>
                                                    </div>
                        <div id="testimonial">
                            <div class="tst-item clearfix">
                                <div class="tst-single clearfix">
                                    <img src="image/a.jpg" alt="Client" class="img-circle">
                                    <div class="tst-content">
                                        <p>This website helped me a lot . Seriously i made myself up to date with the help of this website. Thanks for providing 
										me such a platform</p>
                                        <span>Jhon</span>
                                    </div>
                                </div>
                                <div class="tst-single clearfix">
                                    <img src="image/a.jpg" alt="Client" class="img-circle">
                                    <div class="tst-content">
                                        <p> This site is flesxible and easy to use and i loved it. Thank you for proving us such a good platform</p>
                                        <span>Kartik</span>
                                    </div>
                                </div>
								<div class="tst-single clearfix">
                                    <img src="image/a.jpg" alt="Client" class="img-circle">
                                    <div class="tst-content">
                                        <p>This website helped me a lot . Seriously i made myself up to date with the help of this website. Thanks for providing 
										me such a platform</p>
                                        <span>shivani</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tst-item clearfix">
                                <div class="tst-single clearfix">
                                    <img src="image/a.jpg" alt="Client" class="img-circle">
                                    <div class="tst-content">
                                        <p>HTML 4 added the ability to let events trigger actions in a browser, like starting a JavaScript when a user clicks on an element.</p>
                                        <span>jonnnnn<span>
                                    </div>
                                </div>
                             <div class="tst-single clearfix">
                                    <img src="image/a.jpg" alt="Client" class="img-circle">
                                    <div class="tst-content">
                                        <p>HTML 4 added the ability to let events trigger actions in a browser, like starting a JavaScript when a user clicks on an element.
										</p>
                                        <span>John Doe,CEO</span>
                                    </div>
                                </div>
								<div class="tst-single clearfix">
                                    <img src="image/a.jpg" alt="Client" class="img-circle">
                                    <div class="tst-content">
                                        <p>HTML 4 added the ability to let events trigger actions in a browser, like starting a JavaScript when a user clicks on an element.</p>
                                        <span>saumy</span>
                                    </div>
                                </div>
                            </div></div> 
                    </div> <div class="col-md-1"></div>
                    <div class="col-md-6 wow fadeInRight" style="float:right;">
<div style="background-image:url(image/bg1.jpg); min-height:430px;">
<h2 align="center" style="font-family:'typo'; color:#000066">FEEDBACK OR REPORT ANY PROBLEM, </h2>
<div style="font-size:14px">
<?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo' 
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<br /><br />
</div><div class="col-md-1"></div></div>
<form role="form"  method="post" action="feed.php?q=feedback.php">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">

<div class="form-group">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text"><br />    
   <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text">    

</div><div class="col-md-1"></div>
</div>
</div>

<div class="row"><div class="col-md-1"></div>
<div class="col-md-10">

<div class="form-group">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">    
 </div><div class="col-md-1"></div>
</div>
</div>

<div class="form-group"> <div class="col-md-1"></div>
<div class="col-md-10">
<textarea rows="7" cols="7" name="feedback" class="form-control" placeholder="Write feedback or any report here..."></textarea>
</div></div><div class="col-md-1"></div><br>
<div class="form-group" align="right">
<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
</div>
</form>';}  ?>

</div></div>
</div><!--container end-->

                    </div>
                </div>
            </div></section>
        <script src="new/js/jquery.nav.js"></script>
        <script src="new/js/jquery.mixitup.min.js"></script>
        <script src="new/js/jquery.fancybox.pack.js"></script>
        <script src="new/js/jquery.parallax-1.1.3.js"></script>
        <script src="new/js/jquery.appear.js"></script>
        <script src="new/js/jquery-countTo.js"></script>
        <script src="new/js/owl.carousel.min.js"></script>
        <script src="new/js/wow.min.js"></script>
        <script src="new/js/main.js"></script>
    
</body>
</html>
