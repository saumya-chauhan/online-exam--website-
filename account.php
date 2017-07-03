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
 <!--alert message-->
<?php if(@$_GET['wrong'])
{echo'<script>alert("'.@$_GET['wrong'].'");</script>';}
?>
<!--alert message end-->

</head>
<?php
include_once 'dbConnection.php';
?>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<img src="image/a1.jpg" width="300px" height="80px"></div>
<div class="col-md-4 col-md-offset-2">
 <?php
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Hello</span>
      <a href="account.php?q=1" class="log log1">'.$name.'</a><span class="log1">|</span><a href="logout.php?q=account.php" class="log">
      <span class="glyphicon glyphicon-log-out" aria-hidden="true">&nbsp;</span>LogOut</button></a></span>';
}?>
</div>
</div>
</div>
<div class="bg">


<div class="row">


<ul class="nav nav-pills">
<li class="active"><a href="#">Home</a></li>
<li><a href="#">About Us</a></li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
Tutorials <span class="caret"></span>
</a>
<ul class="dropdown-menu">
<li><a href="#">Php</a></li>
<li><a href="#">C</a></li>
<li><a href="#">C++</a></li>
<li><a href="#">Java</a></li>
<li class="divider"></li>
<li><a href="#">Networking</a></li>
<li class="divider"></li>
<li><a href="#">Linux</a></li>
</ul>
</li>
<li><a href="#">Developers</a></li>
</ul>

</div>
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">
<div class="container"><div class="row"><div class="col-md-6">
<!--home start-->
<?php if(@$_GET['q']==1) {

$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
echo  '<div class="panel"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topics</b></td><td><b>Total questions</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$sahi = $row['sahi'];
    $time = $row['time'];
	$eid = $row['eid'];
$q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error');
$rowcount=mysqli_num_rows($q12);	
if($rowcount == 0){
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
	<td><b><a href="account.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:#99cc99">
	<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b></td></tr>';
}
else
{
echo '<tr style="color:#99cc32"><td>'.$c++.'</td><td>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" 
aria-hidden="true"></span></td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
	<td><b><a href="update.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:pink">
	<span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Restart</b></span></a></b></td></tr>';
}
}
$c=0;
echo '</table>'; 
?></div></div><div class="col-md-1"></div>
<div class = "col-sm-4">
            <div class="thumbnail" id="pro"><center><h2>Profile</h2></center><br>
              <img src="image/profile.png" class="imgz" width="150" height="150">
<div class="caption">
<br> <div id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a 1href="account.php?q="><span class="glyphicon glyphicon-home" aria-hidden="true"></span><br>&nbsp;Home
		<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>> <a href="account.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><br>&nbsp;History
		</a></li>
		<li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="account.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span><br>&nbsp;Ranking</a></li></ul>
  </div><br>
              <br><br> <br><hr> <center>Good Luck</center>   
                </div></div></div></div></div>';

<?php } ?>
<?php 
$countdown = date("h:i:s"); // This isn't my actual $countdown variable, just a placeholder
?>
<script>$(document).ready(function name() {
    $("#this").load( function() {  
        setTimeout("name()", 1000)
      }
    }
});</script>
<div id="this"><?php echo($countdown); ?></div>
<!--home closed-->

<!--quiz start-->
<?php
if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
$eid=@$_GET['eid'];
$sn=@$_GET['n'];
$total=@$_GET['t'];
$q=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );
echo '<div class="panel" style="margin:5%">';
echo '<div id="this"><?php echo($countdown); ?></div>';
while($row=mysqli_fetch_array($q) )
{
	
$qns=$row['qns'];
$qid=$row['qid'];
echo '<b>Question &nbsp;'.$sn.'&nbsp;::<br />'.$qns.'</b><br /><br />';
}
$q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " );
echo '<form action="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST"  class="form-horizontal">
<br />';

while($row=mysqli_fetch_array($q) )
{
$option=$row['option'];
$optionid=$row['optionid'];
echo'<input type="radio" name="ans" value="'.$optionid.'">'.$option.'<br /><br />';
}
echo'<br /><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>';
//header("location:dash.php?q=4&step=2&eid=$id&n=$total");
}
//result display
if(@$_GET['q']== 'result' && @$_GET['eid']) 
{
$eid=@$_GET['eid'];
$q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error157');
echo  '<div class="panel">
<center><h1 class="title" style="color:#660033">Result</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>'.$qa.'</td></tr>
      <tr style="color:#99cc32"><td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr> 
	  <tr style="color:red"><td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
	  <tr style="color:#66CCFF"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
}
$q=mysqli_query($con,"SELECT * FROM rank WHERE  email='$email' " )or die('Error157');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
}
echo '</table></div>';

}
?>
<!--quiz end-->
<?php
//history start
if(@$_GET['q']== 2) 
{
$q=mysqli_query($con,"SELECT * FROM history WHERE email='$email' ORDER BY date DESC " )or die('Error197');
echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>S.N.</b></td><td><b>Quiz</b></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$eid=$row['eid'];
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
$q23=mysqli_query($con,"SELECT title FROM quiz WHERE  eid='$eid' " )or die('Error208');
while($row=mysqli_fetch_array($q23) )
{
$title=$row['title'];
}
$c++;
echo '<tr><td>'.$c.'</td><td>'.$title.'</td><td>'.$qa.'</td><td>'.$r.'</td><td>'.$w.'</td><td>'.$s.'</td></tr>';
}
echo'</table></div>';
}

//ranking start
if(@$_GET['q']== 3) 
{
$q=mysqli_query($con,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$e=$row['email'];
$s=$row['score'];
$q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
while($row=mysqli_fetch_array($q12) )
{
$name=$row['name'];
$gender=$row['gender'];
$college=$row['college'];
}
$c++;
echo '<tr><td style="color:#99cc32"><b>'.$c.'</b></td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$s.'</td><td>';
}
echo '</table></div>';}
?>
</div></div></div></div>






<section>
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
        <div class = "col-sm-4">
            <div class="thumbnail">
              <img src="slide.jpg" class="imgz" alt=""   data-toggle="modal" data-target="#modal-2">
                <div class="caption">
                    <h4><i class="glyphicon glyphicon-tag">SAUMYA CHAUHAN</i></h4><br>
                    <h4> <i class="glyphicon glyphicon-home">email id: sasich3@gmail.com</i></br><br>
                    <span class="label label-primary label-sm">Phone no: 8935778823</span>   <br>   </h4>
                    <h4>          </h4>
                </div></div></div>
				<div class = "col-sm-4">
            <div class="thumbnail">
              <img src="slide.jpg" class="imgz" alt=""   data-toggle="modal" data-target="#modal-2">
                <div class="caption">
                    <h4><i class="glyphicon glyphicon-tag">SAUMYA CHAUHAN</i></h4><br>
                    <h4> <i class="glyphicon glyphicon-home">email id: sasich3@gmail.com</i></br><br>
                    <span class="label label-primary label-sm">Phone no: 8935778823</span>   <br>   </h4>
                    <h4>          </h4>
                </div></div></div>
				<div class = "col-sm-4">
            <div class="thumbnail">
              <img src="slide.jpg" class="imgz" alt=""   data-toggle="modal" data-target="#modal-2">
                <div class="caption">
                    <h4><i class="glyphicon glyphicon-tag">SAUMYA CHAUHAN</i></h4><br>
                    <h4> <i class="glyphicon glyphicon-home">email id: sasich3@gmail.com</i></br><br>
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
						<img src="slide.jpg"  class="imgz" alt="Random Name" width="400px" height="400px" />
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
                    <div class="section-title text-center wow fadeInUp">
                        <h2>IT,s for you</h2>    
                      </div>
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
