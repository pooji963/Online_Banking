<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid " style="background-color: #f2f2f2">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color: white" >
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5"><br><br><br><br>
                  <h5>Welcome to</h5>
                  <h1>MY BANK</h1><p>We are here to make you <b>Money</b> Safe.</p>
                    <a href="about.php"><button style="background-color:#57b894; border-color:white; color:white">Know more</button></a>
                </div>

              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/image.avif" alt="bank" class="img-fluid pt-2 ">
              </div>
            </div>

            <br><hr>

      <!-- Activity section -->
      <div class=" gallery image-size">
            <div class="row activity text-center ">
                  <div class="col-md act" >
                    <img src="img/slide3.png" width="70%" height="80%"  class="img-fluid image">
                    <br><br>
                    <a href="createuser.php"><button style="background-color:#57b894; border-color:white; color:white">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/ruser.jpg" class="img-fluid">
                    <br>
                    <a href="removeuser.php"><button style="background-color : #57b894;border-color:white;color:white"">Delete Users</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/slide2.webp" width="70%" height="85%" class="img-fluid image">
                    <br><br>
                    <a href="transfermoney.php"><button style="background-color : #57b894;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/slide1.png" width="70%" height="100%" class="img-fluid image">
                    <br><br>
                    <a href="transactionhistory.php"><button style="background-color : #57b894;">Transaction History</button></a>
                  </div>
                </div><hr><br>
              </div>
            </div>
          </div>
    </div>
  </section>
  <br>
  <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="footer-col">
              <h4>MY BANK</h4>
              <ul>
                <li><a href="#">about us</a></li>
                <li><a href="#">our services</a></li>
                <li><a href="#">privacy policy</a></li>
                <li><a href="#">affiliate program</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>more</h4>
              <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">online service</a></li>
                <li><a href="#">transaction</a></li>
              </ul>
            </div>
            
            <div class="footer-col">
              <h4>follow us</h4>
              <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              
            </div>
          </div>
        </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>