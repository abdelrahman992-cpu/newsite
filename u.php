<?php
  
//check if usercomming from request 
if($_SERVER['REQUEST_METHOD'] =='POST'){
$user =filter_var($_POST['username'],FILTER_SANITIZE_STRING);
$mail = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$cell = filter_var($_POST['phone'],FILTER_VALIDATE_INT);
$msg = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
$formErrors=array();

if(strlen($user)<=3){
$formErrors[]= 'username Must be Larger than 3 chars';
}


if(strlen($msg)<=10){
$formErrors[]= 'Msseage Must be Larger than 10 chars';
}
    $header =  'MIME-Version: 1.0' . "\r\n"; 
$header .= 'From: Your name ' . $mail."\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  
    $mymail ="ertyopoken@hotmail.com";
    $sub='contact-form';
    //If no errors send the email [mail(To, subject , message,Header, parameters)]
    if(empty($formErrors)){
        mail($mymail,$sub,$msg,$header,$cell );
        $user ='';
$mail = '';
$cell ='';
$msg ='';
        $success='<div class="alert alert-success> Message received</div>';
    }
}
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous"> 
<title>darag.com</title>
<link rel="icon" type="image/x-icon" href="Untitled.PNG">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<style>
    *{box-sizing:border-box;}//for not calculate padding

.clearfix{clear:both}
.container{
width:1170px;
margin:auto;
}
.header{
text-align:center;
}
.header .slider{
background-image:url(rose.jpg);
background-size:cover;
height:600px;
}
.header .slider .intro {
padding-top:200px;
text-align:center;
color:#FFF;
}

.header .slider .intro h2{
margin:0 auto;
font-size:50px;
width:600px;
border-top:3px solid #FFF;
border-bottom:3px solid #FFF;

}
.go{
  color:white;
  text-align:center;
  letter-spacing: 25px;
}
.go:hover{
  letter-spacing:1px;
}
#buttonone{
	background-color: transparent;
	border:2px solid #FFF;
	font-size: 20px;
	text-transform: uppercase;
	width: 150px;
	font-family: 'Montserrat', sans-serif;
	margin-top: 30px;	
	padding :10px 30px;
text-align:center;
}

body{
height:4000px;
font-family: "Sofia", sans-serif;
}
 ul.ff{list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
background-color:#2c3e50;
Position:fixed;
width:100%;
top:0;}
.left{float:left;}
.right{float:right}
li a {display:inline-block;
color:white;
text-align:center;
padding:29px 29px;
text-decoration:none;
}
li a:hover{background-color:red;
opacity:0.4;
border-bottom-style:solid;
border-color:white;
text-decoration:none;
}
@media screen and (max-width: 600px) {
  ul.ff li.right, ul.ff li.left {float: none;}
  ul.ff li a{padding:14px;}
}

.active{background-color:red;
opacity:0.4;}
  footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
.features{
overflow:hidden;
padding-top:50px;
padding-bottom:50px;
}
.features .feat{
float:left;
width:33.33333%;
height:225px;
background-color:#DDD;
}
.features .feat h2{color:#444;}
.features .feat p{
line-height:1.7;
color:#888;
}
.about-me{
background-color:#F2F2F2;
overflow:hidden;
}
.about-me .image{
float:left;
width:40%;
}
.about-me .image img{

width:107%;
}
.about-me .info{
float:left;
width:60%;
}
.about-me .info h2 {
margin:14px 0 20px 40px;
}
.about-me .info > p {
margin:0 0 10px 40px;
}
.about-me .info  p {

line-height:1.7;
color:#666;
}
.about-me .info > p:last-of-type{
margin-top:25px;
}
.about-me .info .hobbies{
overflow:hidden;
margin:15px 0 0 40px;
}
.about-me .info .hobbies .content h3{color:#555;}
.about-me .info .hobbies .content {
float:left;
width:50%;
min-height:100px;
overflow:hidden;
}
.about-me .info .hobbies .content .icon{
float:left;
width:12%;
margin-right:5%;
}
.about-me .info .hobbies .content .icon img{
max-width:100%;
margin:20px 10px 0 0 ;
}
.about-me .info .hobbies .content .text{
float:left;
width:83%;}

.my-skills{
padding-top:30px;
padding-bottom:30px;
overflow:hidden;
}
.my-skills .skills , .my-skills .progresso{
width:50%;
float:left;
}
.my-skills .skills h2{
margin:25px 0 20px 40px;
color:#666;
}

.my-skills .skills p{
margin:0 0 10px 10px;
line-height:1.6;
color:#666;
}
.my-skills .skills p:last-of-type{
margin-top:25px;
}
.my-skills .skills .progressy .technique{margin-left:50px;}
.my-skills .skills .progressy .technique h3{color:#555;}
.my-skills .skills .progressy .technique div{
background-color:gray;
height:25px;
width:50%;}
.my-skills .skills .progressy .technique div span{
background-color:#2DCC70;
height:25px;
display:block;
line-height:25px;
text-align:right;
color:gray;}
.resume{
background-color:#F2F2F2;
padding-top:30px;
padding-bottom:30px;
text-align:center;
}
.resume p{
line-height:1.7;
color:#666;
padding:0 40px;
}
.resume h2{
text-transform:uppercase;
font-weight:bold;
color:#666;
}
.resume button{
background:none;
border :3px solid #2DCC70;
padding:10px 30px;
color:#2DCC70;
margin-top:20px;
margin-left:40px;
}
.my-education p {
margin:0 0 10px 40px;
line-height:1.6;
color:#666;
}
.my-education{
padding-top:30px;
padding-bottom:30px;
overflow:hidden;
}
.my-education .main, .my-education .exp{
width:50%;
float:left;
}
.my-education .exp span{
display:block;
margin-bottom:5px;
}
.my-education .exp .certificate span:first-of-type{color:#999;}
.my-education .exp .certificate span:last-of-type{background-color:#2DCC70;color:#FFF; display:inline; padding:10px;}
.my-education .exp hr {margin:20px 0 ; background-color:#999 ; height:1px ; border:0;}
.project{
background-color:#F2F2F2;
padding-top:30px;
padding-bottom:30px;
text-align:center;
}
.project q {
line-height:1.7;
color:#888;
font-size:18px;
font-style:italic;
font-weight:bold;
font-family:tahoma;
}
.project h2{
color:#777;
}
.project ul{
list-style:none;
 padding-left:0;
text-align:center;
margin-top:10px;
background-color:#f5f5f5;}
.project ul li{width:20px;height:20px;border:2px solid #2DCC70; border-radius:50%;display:inline-block;}
.project ul li.active{background-color:2DCC70;}
.project ul li:hover{background-color:2DCC70;}
.contact-form input,.contact-form textarea{
margin-bottom:5px;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
  position: relative;

}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}
.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

 div.gallery:hover .overlay {
  opacity: 0.6;
}

.texto {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}


.contact-form textarea{
height:180px;
}
.fas {
height:0;
float:left;
position:relative;
top:-32px;
left:10px;
color:red;
}
.contact-form input {
padding-left: 25px;
}
.contact-form .send-icon{
display:block;
position:relative;
top:-32px;
left:7px;
color:#FFF;
}
.contact-form{
max-width:400px;
margin:40px auto;
}
.contact-form .contact-group
{margin-bottom:0;
position:relative;
}
.contact-form input {
padding-left: 25px;
}
.contact-form input,.contact-form textarea{
margin-bottom:5px;
}

.contact-form textarea{
height:180px;
}
.contact-form .asterisx{
float:right;
height:0;
font-size:22px;
color:red;
position:absolute;
right:10px;
top:29px;
}

.fas {
height:0;
float:left;
position:relative;
top:-32px;
left:10px;
color:red;
}

.contact-form .send-icon{
display:block;
position:relative;
top:-32px;
left:7px;
color:#FFF;
}
.contact-form .custom-alert{
padding:5px 10px;
    display: none;

}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
top:0;
  width: 100%;
}


.sticky + .content {
  padding-top: 60px;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(function(){
  'use strict';
        var userError= true;
        var emailError= true;
        var msgError= true;
  $('.username').blur(function(){
  if($(this).val().length<4){
  $(this).css('border','1px solid #F00');
  $(this).parent().find('.custom-alert').fadeIn(200).end().find('.asterisx').fadeIn(200);
 
        userError= true;
  } else {
  $(this).css('border','1px solid green');
  $(this).parent().find('.custom-alert').fadeOut(200).end().find('.asterisx').fadeOut(200);
        userError=false;
  }
 
  });
  
  $('.email').blur(function(){
  if($(this).val().length<1){
  $(this).css('border','1px solid #F00');
  $(this).parent().find('.custom-alert').fadeIn(200).end().find('.asterisx').fadeIn(200);
        emailError= true;
  } else {
  $(this).css('border','1px solid green');
  $(this).parent().find('.custom-alert').fadeOut(200).end().find('.asterisx').fadeOut(200);
      emailError=false;
  }
    
  });
  
  $('.message').blur(function(){
  if($(this).val().length<11){
  $(this).css('border','1px solid #F00');
  $(this).parent().find('.custom-alert').fadeIn(200).end().find('.asterisx').fadeIn(200);
       msgError= true;
  } else {
  $(this).css('border','1px solid green');
  $(this).parent().find('.custom-alert').fadeOut(200).end().find('.asterisx').fadeOut(200);
     msgError=false;
  }
     
  });
        $('.contact-form').submit(function(e){
             if(userError === true || emailError === true || msgError === true){
            e.preventDefault();
                 $('.username' , '.email','.message').blur();
             }
            else{
                
            }
        });
           });
    

    </script>
</head>
<body>

<div class="header">
<div class="slider">
<div class="container">
<div class="intro"> <h2>front end devoloper and data entry</h2> </div>
<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><button id="buttonone"> learn more</button>
<h2 class="go">Let's go<h2>
</div>
</div>

<ul class="ff">
<li class="left"><a href = "#home" >Home</a></li>
<li class="left"><a href = "#About" >About</a></li>
<li class="left"><a href = "#skills" >Skills</a></li>
<li class="left"><a href = "#projects">projects</a></li>
<li class="left"><a href = "#portfolio">portfolio</a></li>
<li class="left"><a href = "#Contact" >Contact</a></li>
<li class="right"><a href = https://www.facebook.com/profile.php?id=100011930646556 target="_blank" ><i class="fab fa-facebook" ></i></a></li>
<li class="right"><a href = www.twitter.com target="_blank" ><i class="fab fa-twitter-square"></i></a>
<li class="right"><a href = https://github.com/abdelrahman992-cpu target="_blank" ><i class="fab fa-github"></i></a>
</ul>

</div>
<div class="features" id="home">
<div class="container">
<div class="feat">
<h2>Values</h2>
<p> I Like Computer Science and Bioinformatics</p>
</div>
<div class="feat">
<h2>Goals</h2>
<p> To be senior in Bioinformatics</p>
</div>
<div class="feat">
<h2>Works</h2>
<p> Pharmacian Assistant</p>
<p> In capmas</p>
<p> Temporary Teacher</p>
<p> Customer Service Representative</p>
<p> Sellar and Data-entry in stationary</p>
</div>
</div>
</div>
<div class="about-me" id="About">
<div class="container">
<div class="image">
<img src="rr.png" alt="test">
</div>
<div class="info">
<h2> About-me</h2>
<p>I graduated from faculty of science, Statistics and Computer science department, with diploma of computer science from faculty of science- Ain Shams University.
I worked as a Data Entry for 4 years as a freelancer, worked as a Temporary teacher of math and CS in faculty of science and faculty of education.
I have experience in (C++, Java, .....).
</p>
<div class="hobbies">
<div class="content">
<div class="icon">
<img src="web.png" alt="web">
</div>
<div class= "text"><h3>Web Design</h3> 
<p>HTML-CSS-JS-JQUERY-Bootstrap3,4-angular</p></div>
</div>
<div class="content">
<div class="icon">
<img src="mar.png" alt="web">
</div>
<div class="text"><h3>Marketing </h3>
<p>Market via printed papers, social media and web design</p></div>
</div>
<div class="content">
<div class="icon">
<img src="pro.png" alt="web">
</div>

<div class="text"><h3>Programming </h3>
<p> Algorithm - datastructure - database - oop -github- C++ -Java - SmallBasic - visual Basic -pascal - php</div>
</div>
<div class="content">
<div class="icon">
<img src="pai.png" alt="web">
</div>
<div class="text"><h3>Painting</h3>
<p> painting of homes - roads - flowers</p></div>
</div>
</div>
</div>
</div>
</div>
<div class="my-skills" id="skills">
<div class="container">
<div class="skills">
<h2> My Skills</h2>
 <p>I graduated from science faculty Helwan University (2014). Diploma of computer science 2018 ain shams university Department of Computer Science & Statistics.
 He studied at Space Weather School  Helwan University - Mat lab, geomagnetism station, Space Weather School GIS, GPS, Solar and heliospheric space physics, Space weather and new technologies.
Abdelrahman study diploma about computer science at faculty of science Ain Shams University and he is looking forward to being pioneer in bioinformatics. 
i participated in volunteer activities during the university stage in the American University as the initiative of science and society. 
It organized scientific and entertainment events such as Science and Science Week under the supervision of the American University 
Physics Professor Dr. Alaa Ibrahim in the presence of Farouk El-Baz
 and representatives of the World Health Organization and media.Previously, the fieldwork in the Central Agency for Mobilization and Statistics</p>
<p>I have many skills dataentry , programming , painting , webdesign , webdevolop ,SQL , printing ,maintance of computer ,office ,spss and social media</p>
<div class = "progressy">
<div class="technique">
<h3>english</h3>
<div>
<span style"width:80%">80% &nbsp;</span>
</div>
</div>
<div class="technique">
<h3>statistics</h3>
<div>
<span style"width:80%">80% &nbsp;</span>
</div>
</div>
<div class="technique">
<h3>math</h3>
<div>
<span style"width:80%">80% &nbsp;</span>
</div>
</div>
</div>
</div>
<div class="progresso">
 <h2>css</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70%
    </div>

</div>
 <h2>HTML</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70%
    </div>
 </div>
 <h2>Javascript</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
      70%
    </div>
</div>
 <h2>PHP</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70%
    </div>
  </div>
<h2>Bootstrap</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
      60%
    </div>
  </div>
<h2>JQuery</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
      60%
    </div>
  </div>
<h2>Java</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70%
    </div>
  </div>
<h2>C++</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70%
    </div>
  </div>
<h2>IT Essential</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70%
    </div>
  </div>
<h2>Matlab</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
      80%
    </div>
  </div>
<h2>Office</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
      90%
    </div>
</div>
</div>
</div>
</div>
<div class="resume">
<div class="container">
<h2> Resume</h2>
<p>I am born in cairo 26-11-1992 .I like swimming , painting and Nescafe .I am single </p> <br>
<button> Download CV </button>
</div>
</div>
<div class="my-education">
<div class="container">
<div class="main">
<p>
elkobba secondary school2006-2009</p><br>
<p>helwan university faculty of science 2009-2014</p><br>
<p>Diploma of computer science helwan university 2016-2018</p>

</div>
<div class="exp">
<div class="certificate">
<h2>high school2006-2009</h2>
<span>elkobba secondary school2006-2009</span>
<span>90%</span>
<hr>
<p>I have studied math- physics- chemistry</p>
</div>
<div class="certificate">
<h2> BSC statistics and computer science</h2>
<span>2014 helwan university</span>
<span> 70% good c+</span>
<hr>
<p> I studied math - statistics - computer science and physics</p>
</div>
<div class="certificate">
<h2> Computer science Diploma</h2>
<span> Ain shams university 2018</span>
<span> good c</span>
<hr>
<p> I studied programming - data structure - database -opearting systems</p>
</div>
</div>
<div class="clearfix"></div>
<hr>
<div class ="main">
<h2> work experience</h2>
<p> Pharmacian Assistant</p>
<p> In capmas</p>
<p> Temporary Teacher</p>
<p> Customer Service Representative</p>
<p> Sellar and Data-entry in stationary</p>
</div>
<div class="exp">
<div class="certificate">
<h2> Pharmacian Assistant</h2>
<span> Amany pharmacy</span>
<span> 70%</span>
<hr>
<p> Sells medicines </p>
</div>
<div class="certificate">
<h2> In capmas</h2>
<span> Amany pharmacy</span>
<span> 60%</span>
<hr>
<p> Collect information about people and families</p>
</div>
<div class="certificate">
<h2> Temporary Teacher</h2>
<span> In university</span>
<span> 70%</span>
<hr>
<p> Explain maths and computer science </p>
</div>
<div class="certificate">
<h2> Customer Service Representative</h2>
<span> For etisalat </span>
<span> 70%</span>
<hr>
<p> Help  customers of etisalat  </p>
</div>
<div class="certificate">
<h2> Sellar and Data-entry in stationary</h2>
<span> For etisalat </span>
<span> 70%</span>
<hr>
<p> Help  customers and make photos  </p>
</div>

</div>
</div>
</div>

<!-- myprojects-->
<div class="project" id="projects">
<div class="container">
<q> School tools, writing letters, entering data, printing ,computer science notes , foods and perfumes</q>
<h2>drag</h2>
<ul>
<li></li>
<li class="active"></li>
<li></li>
<li></li>
</ul>
</div>
</div> 

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
 <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="dataentry.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="mamol.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="l.jpg" alt="New york" style="width:100%;">
      </div>

      <div class="item">
        <img src="hasb.png" alt="New york" style="width:100%;">
      </div>

      <div class="item">
        <img src="ny.jpg" alt="New york" style="width:100%;">
      </div>
<div class="item">
        <img src="par.png" alt="New york" style="width:100%;">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div id="portfolio">
    <h2> My Works</h2>
  <div class="responsive">
  <div class="gallery">
    
      <img src="a.png" alt="Cinque Terre" width="600" height="400" class="image">
      <div class="overlay">
    <div class="texto"><a href="https://github.com/abdelrahman992-cpu/si.git">Download</a></div>
  </div>
    <div class="desc">Calculator</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    
      <img src="b.png" alt="Forest" width="600" height="400" class="image">
      <div class="overlay">
    <div class="texto"><a href="https://github.com/abdelrahman992-cpu/jav.git">Download</a></div>
  </div>
    <div class="desc">Stock managerment system</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    
      <img src="c.png" alt="Northern Lights" width="600" height="400" class="image">
      <div class="overlay">
    <div class="texto"><a href="https://github.com/abdelrahman992-cpu/darr.git">Download</a></div>
  </div>
    <div class="desc">dictionary web</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    
      <img src="d.png" alt="Mountains" width="600" height="400" class="image">
      <div class="overlay">
    <div class="texto"><a href="https://github.com/abdelrahman992-cpu/bmi.git">Download</a></div>
  </div>
    <div class="desc">Bmi</div>
  </div>
</div>
          </div>


<div id="Contact">
<h1> Lets Do Business  </h1>
<h2 class="text-center">Contact Me</h2>
<form class="contact-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <?php if(!empty($formErrors)) {?>
    <div class="alert alert-danger alert-dismissible" role="start">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button> 
    <?php 
                                   foreach($formErrors as $error){
                                       echo $error . '<br>';
                                   }
                                   ?>
    </div>
    <?php }?>
    <?php if (isset($success))
              {echo $success;} 
    ?>
<div class="form-group">
    <label >Name</label>
   <input class="username form-control" type="text" name="username" placeholder="name"size="60" maxlength="128" value="<?php if(isset($user)) echo $user ?>" required><i class="fas fa-user fa-fw"></i><span class="asterisx">*</span> 
    <div class="alert alert-danger custom-alert"><strong>Username</strong> Must be Larger than 3 chars </div>
</div>
<div class="form-group">
   <label >phone</label>
  	<input class="form-control" type="text" name="phone" placeholder="phone" size="60" maxlength="128" value="<?php if(isset($cell)) echo $cell ?>"><i class="fas fa-phone fa-fw"></i>
</div>
<div class="form-group">
<label >Email</label>
    <input class="email form-control" type="email" name="email" placeholder="email" size="60" maxlength="128" value="<?php if(isset($mail)) echo $mail ?>" required> <i class="fas fa-envelope fa-fw"></i><span class="asterisx">*</span><div class="alert alert-danger custom-alert"><strong>Email:</strong> required </div>
</div>
<div class="form-group">
    <label >Enter your message</label>
    <textarea class=" message form-control"  rows="5" placeholder="yourmessage" name="message" value="<?php if(isset($msg)) echo $msg ?>" required></textarea><span class="asterisx">*</span><div class="alert alert-danger custom-alert"><strong>Message</strong> Must be Larger than 10 chars </div>
    <button id="form-submit" class="btn btn-default pull-left btn01" type="submit" style="pointer-events: all; cursor: pointer;"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send Message </button>
    </form>



    </form>
    </div>







<footer class="container-fluid text-center">
  <p><span class="glyphicon glyphicon-search"></span>15 Mustafa mahmoud street aboregela elsalam cairo   <span class="glyphicon glyphicon-earphone"></span>0221938054  <span class="glyphicon glyphicon-phone"></span>01006134098-01127967233 </p>
</footer>

 
</body>
</html>









