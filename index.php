    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index_style.css" />
    <title>Banking System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <nav class="nav-bar">
      
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/SBI-logo.svg/50px-SBI-logo.svg.png?20200329171950" alt="" />
      <div class="nav-items">
        <a href="index.php">Home</a>
        <a href="transfermoney.php">Transfer Money</a>
        <a href="transactions.php">Transaction History</a>
      
      </div>
    </nav>
<header class="hero-section">
      <div class="hero-text-container">
        <h1
          >Welcome to<br>
           SBI Bank</h1
        >
        <p
          >Take your financial life online. Your SBI bank account<br />
          will be a one-stop-shop for spending,transfering,<br />investing,
          and much more.</p
        >
      </div>
      <div class="hero-img-container">
        <img src="./images/image-mockups.png" alt="" />
      </div>
      </header>
    <div class="container">
      <section class="features-section">
        <div class="feature-item">
          <img src="./images/icon-create-user.jpg" alt="" />
          <a href="createuser.php"><h1>Create User</a><br>
          <p
            >Here You can create<br>  
            user to whom you can<br>
            tranfer the money.</p
          >
        </div>
        <div class="feature-item">
          <img src="./images/icon-view-all-users.jpg" alt="" />
          <a href="all_cust.php"><h1>View all Users</a><br>
          <p
            >Here you can view<br>
             all your users
          </p></div
        >

        <div class="feature-item">
          <img src="./images/icon-check-balance.jpg" alt="" />
          <a href="checkbalance.php"><h1>Check Balance</a><br>
            <p
            > You can check that you have <br>
            sufficient amount of money to <br>
            transfer to the user.
             </p
          >
        </div>
      </section>

        </div>
    </center>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        
        $(document).ready(function () {

            $(".zoomin").animate({
                width: '400px'
            }, '5000', 'linear');
            $(".zoomfont").animate({
                fontSize: '71px'
            }, '5000', 'linear');
        });
    </script>

      </div>
<footer class="footer">

      <div class="footer-container">
        <div class="social-container">
        <img src="./images/icon-facebook.jpg" alt="" />
      <img src="./images/icon-instagram.jpg" alt="" />
      <img src="./images/icon-twitter.jpg" alt="" />
      <br>
      <br>
          <p>&copy 2023 made by <b>Srushti Rupapara</b> <br> The Sparks Foundation</p>
        </div>
      </div>
    </footer>
    </body>
</html>
