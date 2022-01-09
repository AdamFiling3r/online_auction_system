<?php
require_once "includes/connect.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
<body>
<?php
include_once "navbar.php";
?>
<div class="container-fluid">
    <div class="p-5 my-4 bg-light rounded-3">
        <h1>Trade physical and virtual items online</h1>
        <p class="lead">Buy and sell items in auction system powered by crypto. Bid on auctions in real time in a secured web aplication. Pay in crypto. <a href="payments.php">Suppotted coins and tokens</a></p>
        <p><a href="register.php" class="btn btn-info btn-lg ">Register today</a></p>
    </div>
    </div>

    <div class="container">
    <div class = "row my-4">
                <div class ="col-md-4 col-sm-4">
                <div class="card">
              <div class="card-header">
                Small fees
              </div>
              <div class="card-body">
                <h5 style="text-align: center;" class="card-title"><i class="bi-activity"></i></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit.</p>
              </div>
                </div>
            </div>
                <div class ="col-md-4 col-sm-4">
                  <div class="card">
                    <div class="card-header">
                      Secure
                    </div>
                    <div class="card-body">
                        <h5 style="text-align: center;" class="card-title"><i class="bi-calculator"></i></h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit.</p>
                    </div>
                  </div>
                </div>
                <div class ="col-md-4 col-sm-4">
                  <div class="card">
                    <div class="card-header">
                      Crypto friendly
                    </div>
                    <div class="card-body">
                        <h5 style="text-align: center;" class="card-title"><i class="bi-alarm"></i></h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit.</p>
                    </div>
                  </div>
                </div>
            </div>
    </div>
    <div class="container">
    <div class="row my-4">
    <div class ="col-md-6 col-sm-6">
    <img src="img/im.jpg" class="img-fluid rounded-3" alt="..."> 
                </div>
        <div class="col-md-6 col-sm-6">
        <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Find an item
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <strong>Find an item you would like to purcharse</strong> In our list of item for sale or in auction choose the item u like and want to buy. Bid the price and be the one which wins the auction or buy an item for sale right now.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Pay
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <strong>Pay for the item you have choosen</strong>After you have choosen the item you need to pay for it. You have several options how to pay. The main accepted coin is Bitcoin Cash (BCH) we also accept other coins.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Wait and enjoy the item
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        <strong>After you are done with the payment, just relax and wait</strong> The seller is obligated to ship the item, the money you payed is being hold on midleman wallet managed by us. This prevents scamers.
      </div>
    </div>
  </div>
</div>
    </div>
        </div>
    </div>
<div class="container">
  <div class="row my-4">
    <div class="col-md-6">
      <h1 style="text-align: left;">Small fees</h1>
        <p style="text-align: justify;">We only implement fees nedeed to run this auction system (hosting etc.) no other fees are being charged. You also need to pay the blockchain fee, but we highly recomend to use coins with small transfer fees like BCH or XRP.</p>
        
    </div>
      <div class="col-md-6">
      <img src="img/bch-logo.png" class="img-fluid rounded-3" alt="..."> 
      </div>

  </div>


</div>


    <div class="container-fluid">
    <div class="p-5 my-4 bg-light rounded-3">
        <h1>Trade physical and virtual items online</h1>
        <p class="lead">Buy and sell items in auction system powered by crypto. Bid on auctions in real time in a secured web aplication. Pay in crypto. <a href="payments.php">Suppotted coins and tokens</a></p>
        <p><a href="register.php" class="btn btn-info btn-lg ">Register today</a></p>
    </div>
    </div>

    

    <div class="container-fluid">
    <footer class="footer-1 bg-light container-fluid">
            <div class="mt-5 pt-5 pb-5 footer">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-5 col-xs-12 about-company">
                      <h2>Online Auction Systems Inc.</h2>
                      <p class="pr-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
                      <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
                    </div>
                    <div class="col-lg-3 col-xs-12 links">
                      <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                        <ul class="m-0 p-0">
                          <li><a href="#" style="text-decoration: none;">Privacy policy</a></li>
                          <li><a href="#" style="text-decoration: none;">Suppoted payments</a></li>
                          <li><a href="#" style="text-decoration: none;">GDPR</a></li>
                          <li><a href="#" style="text-decoration: none;">Fees</a></li>
                          <li><a href="#" style="text-decoration: none;">Shipment</a></li>
                          <li><a href="#" style="text-decoration: none;">Support</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-xs-12 location">
                      <h4 class="mt-lg-0 mt-sm-4">Location</h4>
                      <p>22, Lorem ipsum dolor, consectetur adipiscing</p>
                      <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
                      <p><i class="fa fa-envelope-o mr-3"></i>info@hsdf.com</p>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col copyright">
                      <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
                    </div>
                  </div>
                </div>
                </div>
        </footer>
    </div>  
        


    
    
</body>
</html>