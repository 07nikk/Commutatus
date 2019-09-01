<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="./main.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
<head>
<style>
p {
  border: 1px solid powderblue;
  padding: 30px;
}
</style>
</head>

<body background= "fantacy.jpg" class = "parallax">
<nav class="navbar navbar-expand-md  bg-faded">
 <button class="dark navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="nav navbar-nav mx-auto text-dark ">
      
            
            <li class="nav-item"><a class="white size nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="white size nav-link" href="#certifications">Certifications</a></li>
            <li class="nav-item"><a class="white size nav-link" href="#projects">Projects</a></li>
            <li class="nav-item"><a class="white size nav-link" href="#feedback">Contact</a></li>
        </ul>
    </div>
</nav>

<div class ="dis" >
<div class="img-wrapper">
<img src="off_pic1.jpg" id="rounded" alt="Cinque Terre">
</div>
<h3 class = "text-center white w3">Nikhil Thakur</h3>
</div>

<div class="dis container">
  <div class="row">
     <h2 class="w3 dis mx-auto white text-center">ABOUT ME</h2>
     <p class="opacity size black w3 text-justify temp">A versatile, creative in terms of development. Have worked on projects in domains like Deep learning, Web development.</p>
      <a href = "./downloadResume.php" class="myclass"> <button type="button" class="mx-auto dis button button1 display-3 waves-effect">Resume</button></a>
    </div>

<div class = "dis">
    <h2 class="w3 white text-center" >SKILL SET</h2>
    <h4 class = "size white">Deep Learning</h4>
        <div class="progress">
            <div class="progress-bar bg-warning" style="width:50%"></div>
        </div>
    <h4 class = "size white">C</h4>
        <div class="progress">
            <div class="progress-bar bg-warning" style="width:60%"></div>
        </div>
    <h4 class = "size white">C++</h4>
        <div class="progress">
            <div class="progress-bar bg-warning" style="width:70%"></div>
        </div>
    <h4 class = "size white">Python</h4>
        <div class="progress">
            <div class="progress-bar bg-warning" style="width:50%"></div>
        </div>
    <h4 class = "size white">HTML</h4>
        <div class="progress">
            <div class="progress-bar bg-warning" style="width:40%"></div>
        </div>
    <h4 class = "size white">PHP</h4>
        <div class="progress">
            <div class="progress-bar bg-warning" style="width:40%"></div>
        </div>
    <h4 class = "size white">CSS</h4>
        <div class="progress">
            <div class="progress-bar bg-warning" style="width:30%"></div>
        </div>
    <h4 class = "size white">Bootstrap</h4>
        <div class="progress">
            <div class="progress-bar bg-warning" style="width:30%"></div>
        </div>
</div>

<div class = "dis">
    <h2 class = "w3 white Swhite text-center">Favourite Quotation</h2>
    <marquee scrollamount="10"
    direction="left"
    behavior="scroll"
    class = "light br w3">
    If you cannot find the bright side, polish the dull one !!!!</marquee>
</div>

<div  id='certifications'>
<div>
    <button  type="button" class="dis  button button1 display-3">Certifications</button>
</div>
</div>

<div id = 'projects'>
<section class="text-center my-5 p-1">

  <!-- Section heading -->
  <div class = "id = projects">
  <h2 class  = "dis white w3 ">Projects</h2>
  </div>
  <!-- Grid row -->
  
  <div class="dis row">

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up info-color"></div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
          <img src="binaryclassification.jpeg" class="rounded-circle img-fluid">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4">Binary classification</h4>
          <hr>
          <!--Quotation-->
          <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>A classification of two different colored points using logistic regression</p>
        </div>
      </div>
      <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up blue-gradient">
        </div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
          <img src="cartpole.jpeg" class="rounded-circle img-fluid">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4">Cartpole-OpenAI</h4>
          <hr>
          <!--Quotation-->
          <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>A game which plays by itself imported from open-Ai, a reinforcement learning application</p>
        </div>
      </div>
      <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
        <div class="card-up indigo"></div>
        <!--Avatar-->
        <div class="avatar mx-auto white">
          <img src="mountain.png" class="rounded-circle img-fluid">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4">Mountain cart- OpenAI</h4>
          <hr>
          <!--Quotation-->
          <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>A game which plays by itself imported from open-Ai, a reinforcement learning application</p>
        </div>
      </div>
      <!--Card-->
    </div>
</div>




































<div id = 'feedback'>
<div class = "dis">
    <h2 class = "text-center w3 white">Feel free to give a feedback</h2>
</div>
</div>
<div id = class="dis">
    <div class="row">

<!-- Grid column -->
    <div class="col-md-9 mb-md-0 mb-5">

  <form>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6">
        <div class="md-form mb-0">
          <input type="text" id="contact-name" class="form-control">
          <label for="contact-name" class="light">Your name</label>
        </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6">
        <div class="md-form mb-0">
          <input type="text" id="contact-email" class="form-control">
          <label for="contact-email" class="light">Your email</label>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12">
        <div class="md-form mb-0">
          <input type="text" id="contact-Subject" class="form-control">
          <label for="contact-Subject" class="light">Subject</label>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12">
        <div class="md-form">
          <textarea id="contact-message" class="light form-control md-textarea" rows="3"></textarea>
          <label for="contact-message" class = "light">Your message</label>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </form>

    <div class="text-center text-md-left">
        <a class="btn btn-success button ">Send</a>
      </div>

</div>

<div class = "dis" > 
  <img src="edx.jpg" class="rounded" alt="Cinque Terre">

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  




<br><br><br> <br>
</body>