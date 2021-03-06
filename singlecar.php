<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Single Car Page</title>

    <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/singlecar.css" rel="stylesheet">
  </head>
  <body>
    <header class=''>
        <?php include('header1.php') ?>
    </header>
    <div class="container">

      <!-- services-->
      <div class="row">
        <div class="col-lg-3 col-sm-12" style="">
          <div class="">
           <img class="rounded" id="car-image" src="http://res.cloudinary.com/dmz79kgf0/image/upload/v1507712161/toyota_l90lr7.png" alt="Toyota"> 
          </div>
           <p class="cartype">Toyota, Tundra</p>
           <div class="car-details">
              <h2>Pick Up</h2>
              <ul class="list-group">
                <li class="list-unstyled">Lagos, Ikeja</li>
                <li class="list-unstyled">12/02/01 at 12:00</li>
              </ul>
               <h2>Return</h2>
              <ul class="list-group">
                <li class="list-unstyled">Lagos, Ikeja</li>
                <li class="list-unstyled">13/09/21 at 24:00</li>
              </ul>
              <h2>Hire</h2>
              <ul class="list-group">
                <li class="list-unstyled">One day</li>
              </ul>
              <h2>Options</h2>
              <ul class="list-group">
                <li class="list-unstyled">Fridge</li>
                <li class="list-unstyled">Tv</li>
                <li class="list-unstyled">Gas cooker</li>
              </ul>
              <h2>Specs</h2>
              <ul class="list-group">
                <li class="list-unstyled">5 people</li>
                <li class="list-unstyled">1 large case</li>
                <li class="list-unstyled">1 hand luggage</li>
              </ul>
           </div>
        </div>
        <div class="col-lg-9 col-sm-12">
          <div id="customer-name">
            <h2>Welcome Kingley Ukeje</h2>
            <a href="#"><h3>Select Tariff and extras</h3></a>
          </div>
          <ul class="list-group">
             <h4>Tariff and inclusive services</h4>
             <h4>Hire Costs<span class="cost">N10,000</span></h4> 
          </ul>
          <div id="services">
              <ul class="list-group">
                <li class="list-unstyled">Free Transfer and cancellation</li>
                <li class="list-unstyled">Unlimited kilometres</li>
                <li class="list-unstyled">Personal Accident Protection</li>
                <li class="list-unstyled">Comprehensive and Anti-theft protection</li>
                <li class="list-unstyled">Liability Insurance</li>
                <li class="list-unstyled">Driver Service (limited hours/day)</li>
              </ul>
          </div>
          <div id = "extra-services">
      <h3>Recommended Extra Services</h3>
      <div class="blue-background">
        <ul class="list-group">
        <li class="list-unstyled"><h4><span style = "color: #1F8BD1">✔ </span><strong>Liablility and Insurance</strong><span class="cost" style = "color: #1F8BD1">✔</span></h4></li>
        <li class="list-unstyled"><h4><strong>for all your family: N20,000 <span class="cost">included</span></strong></h4></li> 
        </ul>
      </div>
      <div class="blue-background">
        <ul class="list-group">
          <li class="list-unstyled"><h4><strong>Liability Insurance</strong></h4></li>
        </ul>
      </div>
      </div>
      <div>
        <a href="#"><h3>Click here for more extras (0 Extra(s) selected)</h3></a>
            <div class="blue-background">
              <ul class="list-group">
                <li class="list-unstyled"><h5>Your total<span class="cost"></span></h5></li>
                <li class="list-unstyled"><h5>Rental price<span class="cost"></span></h5></li> 
                <li class="list-unstyled"><h5>:<span class="cost">:</span></h5></li> 
                <li class="list-unstyled"><h5>Rental period: 1 day<span class="cost">N10,000</span></h5></li> 
                <li class="list-unstyled"><h5>Extra Offers<span class="cost">N20,000</span></h5></li> 
                <li class="list-unstyled"><h5>Actual price to be paid<span class="cost">N30,000</span></h5></li> 
              </ul>
              <div class="text-center">
                <h4>Cancel at any time</h4>
                <a href="#" class="btn btn-info" role="button">Tarrifs & Extra</a>
              </div>
        </div>
          </div>
        </div>
      
    </div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <footer>
        <?php include('footer1.php') ?>
    </footer>
  </body>
</html>