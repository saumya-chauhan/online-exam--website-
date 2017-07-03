<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ONline For Exam  </title>

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

<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;
                         if (y == null || y == "") {alert("Name must be filled out.");
						 return false;}
						 var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");
						 return false;}
						 var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
                         var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");
						 return false;}
	s					 var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");
						 return false;}
						 if a.validity.rangeOverflow) {
                          alert("Value too large");
                                                   }
						 if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");
						 return false;}
                         var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");
						 return false;}}
</script>


</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo"><img src="image/a1.jpg" width="300px" height="80px"></span>
</div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true">
</span>&nbsp;<span class="title1"><b>Signin</b></span></a></div>
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:pink">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>
  <div class="col-md-6">
  <div class="input-group">
<span class="input-group-addon">@</span>
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    </div>
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

</div><!--header row closed-->
<div class="row">

<ul class="nav nav-pills tit">
<li class="active tit1"><a href="#">Home</a></li>
<li class="tit1"><a href="#">About Us</a></li>
<li class="dropdown">
<a class="dropdown-toggle tit1" data-toggle="dropdown" href="#">
Tutorials <span class="caret"></span>
</a>
<ul class="dropdown-menu">
<li><a href="#">Php</a></li>
<li><a href="#">C</a></li>
<li><a href="#">C++</a></li>
<li><a href="#">Java</a></li>
<li class="divider"></li>
<li class="tit1"><a href="#">Networking</a></li>
<li class="divider"></li>
<li><a href="#">Linux</a></li>
</ul>
</li>
<li class="tit1"><a href="#">Developers</a></li>
</ul>

</div>
<div class="bg1">
<div class="row">

<div class="col-md-7">   <br><br><br>  <div class="animated bounceInRight" id="cro" style="background-image:url(image/bg1.jpg); min-height:430px;" >
                                <h2>Take a Free Practice Exam!</h2>
                                <p>


Study Group4Tests.com is a world-wide provider of free, online practice exams. We exist to serve the education and testing markets and
we're proud to help you pass your upcoming exams. Feel free to surf our site, and if you have any questions, please</p>

							</div></div>
<div class="col-md-4 panel">
<!-- sign in form begins -->
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->



<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>
  <div class="col-md-12">
  <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">

  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
   <div class="input-group">
<span class="input-group-addon">@</span>
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    </div >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number" min="100000000" max="9999999999">

  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">

  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">

  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12">
    <input  type="submit" class="sub" value="sign up" class="btn btn-success"/>
  </div>
</div>

</fieldset>
</form>
</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->

<br><br><hr><br><br>
<section id="my_love">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInDown">
                            <h2><br><hr><br>About us</h2>
                            </div>
                    </div>
                </div>
                <div class="row" style="background-image:url('image/bg2.jpg')">
                    <div class="col-md-6 col-sm-12 wow fadeInLeft">
                        <div class="media">
                                 <div class="media-body">
                                <h3>Happy to help you</h3>
                                <p><blockquote>
The listed books will cover main genres of books- Science fiction, Romance,Mystery, Self help, Religion, Spirituality & New Age, Action and Adventure, Fantasy.
1.The Alchemist -The Alchemist follows the journey of an shepherd boy named Santiago. Believing a recurring dream to be prophetic, he decides to travel and discovers
 its meaning. This book will definitely inspire you to follow your dreams. “Tell your heart that the fear of suffering is worse than the suffering itself. And that no
 heart has ever suffered when it goes in search of its dreams, because every second of the search is a second’s encounter with God and with eternity.” “The secret of life, though, is to fall seven times and to get up eight times.”
2.The Kite Runner - The unforgettable, heartbreaking story of the unlikely friendship between a wealthy boy and the son of his father’s servant, The Kite Runner is a
 beautifully crafted novel set in a country that is in the process of being destroyed. It is about the power of reading, the price of betrayal, and the possibility of
 redemption; and an exploration of the power of fathers over sons—their love, their sacrifices, their lies.“there is only one sin, only one. And that is theft. Every other
 sin is a variation of theft. When you kill a man, you steal a life... you steal his wife's right to a husband, rob his children of a father. When you tell a lie, you steal
 someone's right to the truth. When you cheat, you steal the right to fairness... there is no act more wretched than stealing.” One of my favorite lines- “She said, 'I'm so afraid.'
 And I said, 'why?,' and she said, 'Because I'm so profoundly happy, Dr. Rasul. Happiness like this is frightening.'
I asked her why and she said, 'They only let you be this happy if they're preparing to take something from you.”<blockquote/> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="media">
                                                       <div class="media-body">
                                <h3>Happy to help you</h3>
                                <p><blockquote>The listed books will cover main genres of books- Science fiction, Romance,Mystery, Self help, Religion, Spirituality & New Age, Action and Adventure, Fantasy.
1.The Alchemist -The Alchemist follows the journey of an shepherd boy named Santiago. Believing a recurring dream to be prophetic, he decides to travel and discovers
 its meaning. This book will definitely inspire you to follow your dreams. “Tell your heart that the fear of suffering is worse than the suffering itself. And that no
 heart has ever suffered when it goes in search of its dreams, because every second of the search is a second’s encounter with God and with eternity.” “The secret of life, though, is to fall seven times and to get up eight times.”
2.The Kite Runner - The unforgettable, heartbreaking story of the unlikely friendship between a wealthy boy and the son of his father’s servant, The Kite Runner is a
 beautifully crafted novel set in a country that is in the process of being destroyed. It is about the power of reading, the price of betrayal, and the possibility of
 redemption; and an exploration of the power of fathers over sons—their love, their sacrifices, their lies.“there is only one sin, only one. And that is theft. Every other
 sin is a variation of theft. When you kill a man, you steal a life... you steal his wife's right to a husband, rob his children of a father. When you tell a lie, you steal
 someone's right to the truth. When you cheat, you steal the right to fairness... there is no act more wretched than stealing.” One of my favorite lines- “She said, 'I'm so afraid.'
 And I said, 'why?,' and she said, 'Because I'm so profoundly happy, Dr. Rasul. Happiness like this is frightening.'
I asked her why and she said, 'They only let you be this happy if they're preparing to take something from you.”<blockquote/> </p></p>
                            </div>
                        </div></div>
                                    </div>
            </div>
       </section>

<center><h1><u>DEVELOPERS...</u></h1></center><br><BR><BR><br>

 <div class="container">
        <div class = "col-sm-3">
            <div class="thumbnail">
              <img src="slide.jpg" class="imgz" alt=""   data-toggle="modal" data-target="#modal-2">
                <div class="caption">
                    <h4><i class="glyphicon glyphicon-tag">SAUMYA CHAUHAN</i></h4><br>
                    <h4> <i class="glyphicon glyphicon-home">sasich3@gmail.com</i></br><br>
                    <span class="label label-primary label-sm">Phone no: 8935778823</span>   <br>   </h4>
                    <h4>          </h4>
                </div></div></div>
				<div class = "col-sm-3">
            <div class="thumbnail">
              <img src="slide.jpg" class="imgz" alt=""   data-toggle="modal" data-target="#modal-2" >
                <div class="caption">
                    <h4><i class="glyphicon glyphicon-tag">SAUMYA CHAUHAN</i></h4><br>
                    <h4> <i class="glyphicon glyphicon-home">sasich3@gmail.com</i></br><br>
                    <span class="label label-primary label-sm">Phone no: 8935778823</span>   <br>   </h4>
                    <h4>          </h4>
                </div></div></div>
				<div class = "col-sm-3">
            <div class="thumbnail">
              <img src="slide.jpg" class="imgz" alt=""   data-toggle="modal" data-target="#modal-2">
                <div class="caption">
                    <h4><i class="glyphicon glyphicon-tag">SAUMYA CHAUHAN</i></h4><br>
                    <h4> <i class="glyphicon glyphicon-home">sasich3@gmail.com</i></br><br>
                    <span class="label label-primary label-sm">Phone no: 8935778823</span>   <br>   </h4>
                    <h4>          </h4>
                </div></div></div>

				<div class = "col-sm-3">
            <div class="thumbnail">
              <img src="slide.jpg" class="imgz" alt=""   data-toggle="modal" data-target="#modal-2">
                <div class="caption">
                    <h4><i class="glyphicon glyphicon-tag">SAUMYA CHAUHAN</i></h4><br>
                    <h4> <i class="glyphicon glyphicon-home">sasich3@gmail.com</i></br><br>
                    <span class="label label-primary label-sm">Phone no: 8935778823</span>   <br>   </h4>
                    <h4>          </h4>
                </div></div></div>

				</div>





<div class="modal" id="modal-1">
    <div class="modal-dialog" >
	     <div class="modal-content">

			     <div class="modal-body">

			        <div class="well">
						<img src="slide.jpg" alt="Random Name" width="400px" height="400px" />
			       </div>

				 </div>

		 </div>
	</div>

</div>
<div class="modal" id="modal-2">
    <div class="modal-dialog" >
	     <div class="modal-content">

			     <div class="modal-body">

			        <center><div class="well">
						<img src="slide.jpg"  class="imgz" width="400px" height="400px" />
			       </div></center>

				 </div>

		 </div>
	</div>

</div>
<div class="modal" id="modal-3">
    <div class="modal-dialog" >
	     <div class="modal-content">

			     <div class="modal-body">

			        <div class="well">
						<img src="slide.jpg" alt="Random Name" width="400px" height="400px" />
			       </div>

				 </div>

		 </div>
	</div>

</div>
<div class="modal" id="modal-4">
    <div class="modal-dialog" >
	     <div class="modal-content">

			     <div class="modal-body">

			        <div class="well">
						<img src="slide.jpg" alt="Random Name" width="400px" height="500px" />
			       </div>

				 </div>

		 </div>
	</div>
</div>
<div class="counter-section clearfix">
                   <center>
                        <div class="row wow zoomIn" data-wow-delay="1.1s">
                            <h2>We need your feedback please help us to know how you felt about our website
<br>thanks a lot for being with us :)							</h2>
              <br><h3><div class="button">
			  <a href="feedback.php">feedback</a></div></h3>
                     </div>
                        </center>
                                            </div>

<section>
            <div class="container">
                <div class="row">

                    <div class="about-us text-center wow fadeInDown">
                        <img src="image/c.png" alt="About Us" class="img-responsive" width="600px" height="300px">
                    </div>
                </div>
            </div>
        </section>

<br><br><div style="float:left">
<a href="#" data-toggle="modal" data-target="#login"><img src="image/b.png" width="50px" height="50px"></a>
</div>
<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/>
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--Footer start-->
<div class="row footer"><center><br><br>
 ONline For Exam &copy; by KNIT sultanpur students | All Rights Reserved
					<br><br>Follow Us:<br><br>
					<a href="http://sasich3@gmail.com/go/facebook/" target="_blank" class="facebook"><img src="image/1.png"></a>
					<a href="http://sasich3@gmail.com/go/twitter/" target="_blank" class="twitter"><img src="image/2.png"></a>
					<a href="http://sasich3@gmail.com/go/googleplus/" target="_blank" class="googleplus"><img src="image/3.png"></a>

		</div>
</center>
</div>


<!--footer end-->


</body>
</html>
