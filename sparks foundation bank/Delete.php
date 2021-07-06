<!----------------------Delete SQL--------------------------------->
<?php

include('connection.php');

if(isset($_POST['email_id'])) {
    $email_id = $_POST['email_id'];
    $sql_delete = "DELETE from user_info where Email_id = '$email_id'";
    $query_delete = mysqli_query($dbcon, $sql_delete);
    if(mysqli_affected_rows($dbcon)>0) {
        ?>
            <script>
                swal({
                title: "Account Deleted Successfully!!",
                icon: "success",
                });
            </script>
            
            <?
            
        }
}
?>
        

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
            background-color: 	#FFEBCD;
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
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        th {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }
        
        th, td {
            padding: 12px 15px;
        }

        tr {
            border-bottom: 1px solid #dddddd;
        }

        tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        tr:nth-of-type(odd) {
            background-color: #FFFFFF;
        }

        tr:hover {
            background-color: #ffff99;
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

        <br><br><br>
        <br>
        <center> <h3 style="margin: 10"> User Details </h3> </center>

    <?php
        include('connection.php');

        $sql = "SELECT * FROM user_info";
        $query = mysqli_query($dbcon, $sql);

        if(mysqli_num_rows($query)==0) {
            echo("Sorry, the database is empty!!!");
        }
        else {
        ?>
            <table >
            <tr>
            <th>Sl. No.</th>
            <th>User Name</th>
            <th>Email id</th>
            <th>Account Number</th>
            <th>Balance</th>
            <th></th>
            </tr>
            <tbody>
        <?php
        $i=1;
            while($row = mysqli_fetch_array($query)) {
        ?>
                <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Email_id']; ?></td>
                <td><?php echo $row['Account_no']; ?></td>
                <td><?php echo $row['Balance']; ?></td>
                <td><form action="Delete.php" method="POST">
                    <input type="hidden" value=<?echo $row['Name'];?> name="t_name">
                    <input type="hidden" value=<?echo $row['Email_id'];?> name="email_id">
                    <input type="hidden" value=<?echo $row['Account_no'];?> name="account_no">
                    <input type="hidden" value=<?echo $row['Balance'];?> name="balance">
                    <button type="submit" class="btn btn-secondary" style="width: 100%">Delete</button></form></td>
                </tr>
        <?php $i++; } ?>
            </tbody>
            </table>
            <div class="col-md-12 text-center">
                <a href="home.php"><button type="button" class="btn btn-primary" style="width: 7%">Back</button></a>
            </div><br>
            
        <?php } ?>

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
