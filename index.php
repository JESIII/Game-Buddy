<!doctype html>
<html lang="en">
  <head>
    <title>Game Buddy</title>
    <script src="https://unpkg.com/react@16.7.0/umd/react.production.min.js"></script>
    <link href="./styles/homecards.css" rel="stylesheet">
    <link rel="icon" 
      type="image/png" 
      href="images/favicon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link href="./main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.css" type="text/css">
  </head>
  <body>
    <?php
    require 'components/navbar.php';
    ?>
<!-- Main Image -->
<div class="card bg-dark text-black border-0">
<img src="./images/home-main.png" class="card-img" alt="...">
<div class="card-img-overlay">
  <h2 class="card-title">Welcome to Game Buddy</h2>
  <h4 class="card-text">Critic reviews aren't the only ones that matter.</h4>
  <h4 class="card-text">Log and review games you've played!</h4>
  <button id="signupButton" type="button" class="btn btn-primary">Sign up</button>
  <script type="text/javascript">
    document.getElementById("signupButton").onclick = function () {
        location.href = "register.php";
    };
</script>
</div>
</div>
<!-- Game Carousel -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div id= "gamecarousel" class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div id='gamerow1'></div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div id='gamerow2'></div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div id='gamerow3'></div>
        
      </div>
    </div>
  </div>
  <script src="scripts/homegamecards.js"></script>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="features-boxed">
  <div class="container">
      <div class="intro">
          <h2 class="text-center">Features </h2>
          <!-- <p class="text-center"></p> -->
      </div>
      <div class="row justify-content-center features">
          <div class="col-sm-6 col-md-5 col-lg-4 item">
              <div class="box"><i class="fa fa-map-marker icon"></i>
                  <h3 class="name">Every Platform </h3>
                  <p class="description">Xbox, PS4, Windows, Mac, Nintendo Switch; whatever it is, we got it!</p><a class="learn-more" href="#">Learn more »</a></div>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4 item">
              <div class="box"><i class="fa fa-clock-o icon"></i>
                  <h3 class="name">Frequently Updated </h3>
                  <p class="description">The APIs we use are updated frequently to show the newest games and reviews.</p><a class="learn-more" href="#">Learn more »</a></div>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4 item">
              <div class="box"><i class="fa fa-list-alt icon"></i>
                  <h3 class="name">Opinion Sharing </h3>
                  <p class="description">S*** on games you don't like and praise the ones you do! Let your opinion be known.</p><a class="learn-more" href="#">Learn more »</a></div>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4 item">
              <div class="box"><i class="fa fa-leaf icon"></i>
                  <h3 class="name">Game Log </h3>
                  <p class="description">Log games you've played so others can see what you've played.</p><a class="learn-more" href="#">Learn more »</a></div>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4 item">
              <div class="box"><i class="fa fa-plane icon"></i>
                  <h3 class="name">Stat Tracking </h3>
                  <p class="description">We use stat tracking APIs to show your stats for supported games.</p><a class="learn-more" href="#">Learn more »</a></div>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-4 item">
              <div class="box"><i class="fa fa-phone icon"></i>
                  <h3 class="name">Big Reviewers </h3>
                  <p class="description">We have reviews from websites like Meta Critic, IGN, and GameSpot all in one place.</p><a class="learn-more" href="#">Learn more »</a></div>
          </div>
      </div>
  </div>
</div>
<?php
    require 'components/footer.php';
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
