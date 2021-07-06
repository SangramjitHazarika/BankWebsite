<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap Files -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <!-- My Style -->
    <style>
        body {
            background: #ffae42;
            /* font-family: 'Roboto', sans-serif; */
        }

        .card1 {
            background-color: #FFE4B5;
            border-radius: 4px;
            max-width: 400px;
            margin: 3% auto;
            height: 300px;
            position: relative;
            padding: 34px;
            color: #444;
            cursor: pointer;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .card2 {
            background-color: #FFE4B5;
            border-radius: 4px;
            max-width: 800px;
            margin: 3% auto;
            height: 300px;
            position: relative;
            padding: 34px;
            color: #444;
            cursor: pointer;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            border-radius: 25px;
        }

        h5 {
                font-weight: 100;
                font-size: 25px;
        }        

    </style>

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

        <br><br>
        <br>
        <?php
        include('connection.php');
        $email_id = $_POST['email_id'];
        $sql = "SELECT * FROM user_info where Email_id = '$email_id'";
        $query = mysqli_query($dbcon, $sql);
        $row = mysqli_fetch_array($query);
        ?>

        <div class="card1 level-3">
            <center><h3>User</h3></center>
            <br>
            <p> <b>Name: </b><? echo $row['Name']; ?></p>
            <p> <b>Email: </b><? echo $_POST['email_id']; ?></p>
            <p> <b>Account No.: </b><? echo $_POST['account_no']; ?></p>
            <p> <b>Balance: </b>&#x20B9; <? echo $_POST['balance']; ?></p>
        </div>

        <div class="card2 level-3"  style="margin: 0 auto;">
            <center><h3>Money Transfer</h3></center>
            <br>
            <table style=" margin-left: auto; margin-right: auto;"> <tr> <td><b>Beneficiary Name:</b></td>
            <td>
            <form action="tr_history.php" method="POST">
            <input type="hidden" name="sender_emailid" value='<? echo $email_id; ?>'/>
            <select name="receiver_emailid" style= "width: 100%; height: 30px;">  
                <option value="">--- Select ---</option>  
                <?  
                    $list=mysqli_query($dbcon, "select * from user_info");  
                    while($row_list=mysqli_fetch_array($list)){  
                        if($email_id != $row_list['Email_id']){
                            ?>  
                                <option value="<? echo $row_list['Email_id']; ?>"> <?echo $row_list['Name']." [Balance: ".$row_list['Balance']."]"?>
                                </option>  
                            <?  
                        }
                        
                    }  
                ?>  
            </select> 
            </td></tr>
            <tr><td><b>Amount: </b></td><td><input type="text" name="amount" style= "width: 100%;"></td></tr></table><br>
            <div class="col-md-12 text-center"> <button type="submit" class="btn btn-warning" style="width: 25%;">Transfer Money</button></form>
            <a href="tr_money.php"><button type="button" class="btn btn-secondary" style="width: 25%">Back</button></a></div>
        </div><br><br><br><br>

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

</body>
</html>

