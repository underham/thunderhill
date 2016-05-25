
<?php include "config/config.php"; ?>
<?php include "libraries/Database.php"; ?>
<?php include "includes/header.php"; ?>
<?php
  $db = new Database();
?>


<div class="jumbotron block text-center img-responsive" id="home">
  <h1 class="block-title m-b-sm text-uppercase ">Thunder Hill Tech</h1>
  <p class="lead m-b-lg p-b-md">Custom Web Development &amp; Design</p>

  <div id="message"></div>  

  <div>
  <!-- Submit Project Query Modal -->

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary btn-lg outline" data-toggle="modal" data-target="#myModal" id="myButton" >Submit a Project Query</button>
  <?php include "includes/modal.php"; ?>

  </div>
  
</div>




<div class="block block-bordered-lg">
  <div class="container text-center app-translate-15" data-transition="entrance">
    <blockquote class="pull-quote">
      <img class="img-circle" src="images/profile.jpg">
      <p>I am a web developer proficient in HTML, CSS, JavaScript, jQuery, Bootstrap, Wordpress, PHP, and MySQL. </p>
      <p>Are you looking for an eye-catching, engaging, responsive, mobile-friendly website? </p>
      <p>I offer professional, high-quality development and design solutions. I am always available and willing to communicate and problem-solve with my clients to reach an optimal solution for their needs. You can always expect great work, clear communication, and on-time and on-budget delivery.</p>

      
    </blockquote>
  </div>
</div>





<?php include "includes/portfolio.php"; ?>



<?php include "includes/footer.php"; ?>