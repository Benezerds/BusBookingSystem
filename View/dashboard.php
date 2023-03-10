<!DOCTYPE html>
<html lang="en">
<?php
    require_once '../View/header.php';
    error_reporting(0);
?>


<body>
  <style>
      /* Remove the navbar's default margin-bottom and rounded borders */
      .navbar {
        margin-bottom: 0;
        border-radius: 0;
      }

      /* Add a gray background color and some padding to the footer */
      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }

      .glyphicon.glyphicon-send {
      font-size: 150px;
      }

      .glyphicon.glyphicon-bookmark {
      font-size: 150px;
      }

      .glyphicon.glyphicon-remove-circle {
      font-size: 150px;
      }

      .glyphicon.glyphicon-list-alt {
      font-size: 150px;
      }

      .glyphicon.glyphicon-user {
      font-size: 150px;
      }

      .glyphicon.glyphicon-edit {
      font-size: 150px;
      }
      .glyphicon.glyphicon-bullhorn {
      font-size: 150px;
      }
      .glyphicon.glyphicon-qrcode {
      font-size: 150px;
      }
    </style>
  <?php require_once '../View/navbar.php';
  require '../Controller/SeatPopulateController.php'; ?>

  <!--<div class="jumbotron">
    <div class="container text-center">
      <h1>Book Bus Tickets On The Go...</h1>
      <p>Eat Lunch In Peace, Ditch the Queue!</p>
    </div>
  </div> -->
  <?php
      if($_GET['booked'] == '1')
      {
      echo '<div class = container><div class="alert alert-success">
              <strong>Yay! Your ticket is Booked!...</strong> Remember, you can always book your ticket here :)
          </div></div>';
      $_GET['alert'] = '0';
  }?>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="/BusBookingSystem/images/carousel/bus.jpg" alt="BusBookingSystem">
        <div class="carousel-caption">
          <h1>BusBooking!</h1>
          <h3>Because You Need To Eat Your Lunch In Peace...</h3>
        </div>
      </div>

      <div class="item">
        <img src="/BusBookingSystem/images/carousel/bus_bg.jpeg" alt="BusBookingSystem">
        <div class="carousel-caption">
          <h1>BusBookingSystem!</h1>
          <h3>Because You Have To Ditch The Queue...</h3>
        </div>
      </div>

      <div class="item">
        <img src="/BusBookingSystem/images/carousel/bus2.png" alt="BusBookingSystem">
        <div class="carousel-caption">
          <h1>BusBookingSystem!</h1>
          <h3>Because Juniors Baap Ke Naukar Nahin Hai...</h3>
        </div>
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
  </div><br><br>
  <div class="container-fluid bg-3 text-center">

    <h2><i class="fas fa-ticket-alt"></i>&nbsp;Ticket Window&nbsp;<i class="fas fa-ticket-alt"></i></h2><br>
    <div class="row">
      <div class="col-sm-3">
        <h3>Book Ticket</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <a href="../View/bookTicket.php"><span class="glyphicon glyphicon-send"></span></a>
        </button>
      </div>
      <div class="col-sm-3">
        <h3>View Ticket</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <!--<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
          <a href="../Controller/TicketViewController.php"><span class="glyphicon glyphicon-qrcode"></span></a>
        </button>
      </div>
      <div class="col-sm-3">
        <h3>Cancel Ticket</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <a href="../View/cancelTicket.php"><span class="glyphicon glyphicon-remove-circle"></span></a>
        </button>
      </div>
      <div class="col-sm-3">
        <h3>Weekly Bus Schedule</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <a href="../View/schedule.php"><span class="glyphicon glyphicon-list-alt"></span></a>
        </button>
      </div>
    </div>
  </div><br><br>

  <div class="container-fluid bg-3 text-center">
    <h2><i class="fas fa-child"></i>&nbsp;Enquiries and Everything Else&nbsp;<i class="fas fa-child"></i></h2><br>
    <div class="row">
      <div class="col-sm-3">
        <h3>About Us</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <a href="../aboutus.php"><span class="glyphicon glyphicon-bookmark"></span></a>
        </button>
      </div>
      <div class="col-sm-3">
        <h3>Your Profile</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <a href="../Controller/ProfileController.php"><span class="glyphicon glyphicon-user"></span></a>
        </button>
      </div>
      <div class="col-sm-3">
        <h3>Announcements</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <a href="../View/announcements.php"><span class="glyphicon glyphicon-bullhorn"></span></a>
        </button>
      </div>
      <div class="col-sm-3">
        <h3>Terms & Conditions</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <a href="../tandc.php"><span class="glyphicon glyphicon-edit"></span></a>
        </button>
      </div>
    </div>
  </div><br><br>
  
  <?php require_once '../View/footer.php';?>
</body>
</html>
