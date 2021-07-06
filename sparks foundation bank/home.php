<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Bootstrap Files -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <!-- My Style -->
    <link rel="stylesheet" href="style.css">
    <title>Basic Banking System</title>
</head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">SNB</a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                      <a class="nav-link active" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="About.php" >About Me</a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#contactMe">Contact Me</a>
                      </li>
                  </ul>
                </div>
              </div>
            </nav>
          </header>
          
          <div id="main" style="background-color: #00FFFF;">

          <!---------------------------Carousel ---------------------------------------->
          
          <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#D2B48C"/></svg>

              <div class="container">
                <div class="carousel-caption text-start">
                  <h1 style="float: right; padding: 13%;">Welcome to the Sparks National Bank</h1>
                  <img src="home2.gif" style="width: 80%; height: 80%; margin: -5.5%;">
                  <br><br>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#D2B48C"/></svg>

              <div class="container">
                <div class="carousel-caption">
                  <h1 style="float: right; padding: 7%;">The Sparks National Bank</h1>
                  <p style="float: right;">It maintains all the records of the transactions made at the particular date and time</p>
                  <img src="home3.png" style="width: 40%; height: 40%; margin: -5.5%;">
                  <br><br>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#D2B48C"/></svg>

              <div class="container">
                <div class="carousel-caption">
                  <h1 style="padding: 7%;">Transaction Made Easy</h1>
                  <p>A quicker way to transfer money</p>
                  <img src="home4.png" style="width: 40%; height: 40%;">
                  <br><br>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <!---------------------------Cards ---------------------------------------->

        <center><h1>Services</h1></center>

          <div class="row" style="background-color: #00FFFF;">
            <div class="column">
              <div class="card">
                <center><img src="tr_hist.png" style="width: 60%; height: 60%;"></center>
                <a href = "tr_history.php"><button type="button" class="btn btn-primary" style="width: 100%;">View Transaction History</button></a>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <center><img src="tr_mon.png" style="width: 60%; height: 60%;"></center>
                <a href = "tr_money.php"><button type="button" class="btn btn-primary" style="width: 100%;">Transfer Money</button></a>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <center><img src="cust.png" style="width: 60%; height: 60%;"></center>
                <div class="containe" style="display: inline-block;">
                <button type="button" class="btn btn-primary" data-modal="modalOne" style="width: 50%; display: inline-block;">Create New User</button>
                <a href="Delete.php"><button type="button" class="btn btn-primary" style="width: 48%;">Delete Account</button></a>
                </div>
              </div>
            </div>
          </div>
          

          <!-- Pop Up -->
          <div id="modalOne" class="modal">
            <div class="modal-content">
              <div class="contact-form">
                <a class="close">&times;</a>
                <form action="home.php" method="POST">
                  <h2>New User</h2>
                  <div>
                    <input class="fname" type="text" name="fname" placeholder="Full name" required>
                    <input type="email" name="email_id" placeholder="Email-id" required>
                    <input type="text" name="acc_no" placeholder="Account Number" required>
                    <input type="text" name="balance" placeholder="Balance" required>
                   <button type="submit">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <br><br>
        </div> 
        
          <!-----------------------Footer-------------------------------------------------->
          <footer class="bg-dark text-center text-white" id="contactMe">
            <br>
          <a href="#" class="o-scroll-up static" title="back to top">
            <span class="o-scroll-up-text">Back to top</span>
            <span class="o-scroll-up-icon" aria-hidden="true"></span>
          </a>
            <div class="container p-3">
              <section class="mb-4">
                <!-- Gmail -->
                <a class="btn btn-outline-light btn-floating m-1" href="mailto: sangramjithazarika123@gmail.com" role="button"><i class="fas fa-envelope"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/hazarika_sangram.243/" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/sangramjit-hazarika-148666193/" role="button"><i class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/SangramjitHazarika/BankWebsite.git" role="button"><i class="fab fa-github"></i></a>

              </section>

            <!-- Copyright -->
            <div class="text-center" style="background-color: rgba(0, 0, 0, 0.2);">&copy; 2021 Copyright: Done By Sangramjit Hazarika</div>
            </div>
          </footer>
          
          <script>
            let modalBtns = [...document.querySelectorAll(".btn-primary")];
            modalBtns.forEach(function(btn) {
              btn.onclick = function() {
                let modal = btn.getAttribute('data-modal');
                document.getElementById(modal)
                  .style.display = "block";
              }
            });
            let closeBtns = [...document.querySelectorAll(".close")];
            closeBtns.forEach(function(btn) {
              btn.onclick = function() {
                let modal = btn.closest('.modal');
                modal.style.display = "none";
              }
            });
            window.onclick = function(event) {
              if(event.target.className === "modal") {
                event.target.style.display = "none";
              }
            }
          </script>

        
      
    </body> 
</html>

<?php


include('connection.php');
if (isset($_POST['fname'])) {
  $sql_insert_record = "INSERT into user_info(Name, Email_id, Account_no, Balance) values('$_POST[fname]', '$_POST[email_id]', '$_POST[acc_no]', '$_POST[balance]')";
  $query_insert_record = mysqli_query($dbcon, $sql_insert_record);
  if(mysqli_affected_rows($dbcon)>0) {
    ?>
      <script>
            swal({
            title: "Data Inserted Successfully!!",
            icon: "success",
            });
      </script>
      <?
  }
  else {
    ?>
      <script>
            swal({
            title: "Oops... User Existed!!!",
            icon: "error",
            });
      </script>
      <?
  }
  
}

?>
