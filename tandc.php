<!DOCTYPE html>
<html lang="en">
<head>

  <title>Terms & Conditions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #000000;
  }
  h2 {
      font-size: 15px;
      text-transform: uppercase;
      color: #000000;
      font-weight: 600;
      margin-bottom: 30px;
  }
 ol li {
      font-size: 15px;
      line-height: 1.375em;
      color: #000000;
      font-weight: 400;
      margin-bottom: 30px;
  }
  ul li {
      margin-bottom: 10px;
  }
  .jumbotron {
      background-color: #333;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .panel {
      border: 1px solid #428bce;
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #428bce;
      background-color: #fff !important;
      color: #428bce;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #428bce !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #428bce;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #333;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #428bce !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../View/Dashboard.php">Bus Booking</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="View/bookTicket.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Get Onboard!</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>TERMS AND CONDITIONS</h1>
</div>


<div class="container text-left">
  <h3>The Bus  &nbsp;<i class="fab fa-github"></i>&nbsp; at <button type="button" class="btn btn-link"><h3><a href="https://github.com/Benezerds/BusBookingSystem"><i class="fab fa-github"></i>Bus Booking System</h3></a></button></h3>

  <h3> Basic Terms and Conditions </h3><br><br>
    <ol>
      <li>For the purpose of these Terms, wherever the context so requires "You" or "User" (would mean 'Bus Booking user') shall mean any natural or legal person who has agreed to become a buyer of the bus tickets and/or an availer of the Facility being offered on the Website.</li>

<?php require 'View/footer.php'; ?>
</body>
</html>
