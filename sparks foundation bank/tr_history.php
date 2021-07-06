<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap Files -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <!-- My Style -->
    <style>
        body{
            background-color: #00ffff;
            font-family: 'Oswald', sans-serif !important;
        }

        table {
            border-collapse: collapse;
            margin: 80px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 800px;
            min-height: 450px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.25);
        }

        th {
            background-color: #964B00;
            color: #ffffff;
            text-align: center;
        }
        
        th, td {
            padding: 12px 15px;
        }

        tr {
            border-bottom: 1px solid #dddddd;
        }

        tr:nth-of-type(even) {
            background-color: #DCDCDC;
        }

        tr:nth-of-type(odd) {
            background-color: #FFFFFF;
        }

        tr:last-of-type {
            border-bottom: 2px solid #964B00;
        }

        tr:hover {
            background-color: #FFA74F;
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

        <br><br><br><br>
        <?php
        include('connection.php');
        if (isset($_POST["sender_emailid"])) {
            $send_email_id = $_POST['sender_emailid'];
            $receive_email_id = $_POST['receiver_emailid'];

            //---------------Sender Part---------------------------

            $sql_send = "SELECT * FROM user_info where Email_id = '$send_email_id'";
            $query_send = mysqli_query($dbcon, $sql_send);
            $row_send = mysqli_fetch_array($query_send);
            $send_name = $row_send['Name'];
            $send_amount = $_POST['amount'];
            $send_balance = $row_send['Balance'];
            $send_rem_balance = (int)$send_balance - (int)$send_amount;

            if($send_rem_balance>0) { 
                $sql_update_sender = "UPDATE user_info set Balance = '$send_rem_balance' where Email_id = '$send_email_id'";
                $query_update_sender = mysqli_query($dbcon, $sql_update_sender);

                //---------------Receiver Part---------------------------
                
                $sql_receive = "SELECT * FROM user_info where Email_id = '$receive_email_id'";
                $query_receive = mysqli_query($dbcon, $sql_receive);
                $row_receive = mysqli_fetch_array($query_receive);
                $receive_name = $row_receive['Name'];
                $receive_amount = $_POST['amount'];
                $receive_balance = $row_receive['Balance'];
                $receive_rem_balance = (int)$receive_balance + (int)$receive_amount;

                $sql_update_receiver = "UPDATE user_info set Balance = '$receive_rem_balance' where Email_id = '$receive_email_id'";
                $query_update_receiver = mysqli_query($dbcon, $sql_update_receiver);

                //---------------Inserting in Transaction History Table---------------

                $sql_insert_record = "INSERT into transaction_history(sender_name, receiver_name, sender_email, receiver_email, Amount, Date_and_time) values('$send_name','$receive_name', '$send_email_id', '$receive_email_id', '$send_amount', CURRENT_TIMESTAMP)";
                $query_insert_record = mysqli_query($dbcon, $sql_insert_record);
                if(mysqli_affected_rows($dbcon)>0) {
                    ?>
                      <script>
                            swal({
                                title: "Transaction Done Successfully!!",
                                icon: "success",
                            });
                      </script>
                      <?
                  }
            }
            else {
                ?>
                <script>
                    swal({
                        title: "Not Sufficient Balance!!",
                        icon: "error",
                    });
                </script>
                <?
            }
  
        }
        ?>
        <?php
        //---------------Displaying Records from Transaction History Table---------------
        ?>
        <br>
        <center> <h2 style="margin: 10"> Transaction History </h2> </center>
        <div id="main">
        <?php
        include('connection.php');

        $sql = "SELECT * FROM transaction_history";
        $query = mysqli_query($dbcon, $sql);

        if(mysqli_num_rows($query)==0) {
            echo("Sorry, the database is empty!!!");
        }
        else {
        ?>
            <table >
            <tr>
            <th>Sl. No.</th>
            <th>Sender Name</th>
            <th>Beneficiary Name</th>
            <th>Sender Email-id</th>
            <th>Beneficiary Email-id</th>
            <th>Amount</th>
            <th>Date and Time</th>
            </tr>
            <tbody>
        <?php
            while($row = mysqli_fetch_array($query)) {
        ?>
                <tr>
                <td><?php echo $row['Sl.No.']; ?></td>
                <td><?php echo $row['sender_name']; ?></td>
                <td><?php echo $row['receiver_name']; ?></td>
                <td><?php echo $row['sender_email']; ?></td>
                <td><?php echo $row['receiver_email']; ?></td>
                <td><?php echo $row['Amount']; ?></td>
                <td><?php echo $row['Date_and_time']; ?></td>
                </tr>
        <?php } ?>
            </tbody>
            </table>
            <div class="col-md-12 text-center">
                <a href = "home.php"><button type="button" class="btn btn-primary" style="width: 7%">Back</button></a>
            </div>
            <br>
            
        <?php } ?>
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
</body>
</html>

