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
            background: #C8C8C8;
        }

        .card1 {
            background-color: 	#FFA07A;
            border-radius: 4px;
            max-width: 700px;
            margin: 3% auto;
            height: 550px;
            position: relative;
            padding: 34px;
            color: #444;
            cursor: pointer;
            font-family: Georgia;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.25);
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

        <div class="card1 level-3">
            <center><h3>About Me</h3></center>
            <br>
            <p> Hello there!! This is <i>Sangramjit Hazarika</i>. I am pursuing my B.tech in the field of Computer Science and Engineering 
            from Vellore Institute of Technology, Chennai, Tamil Nadu, India. I have been selected as an intern in the Web Developement Domain in Sparks Foundation and 
            this is my task (Banking Website) which I have been assigned to complete in a stipulated time frame. I have used HTML, CSS, Bootstrap and JavaScript 
            for the frontend and PHP for the backend. Apart from Web Development, I have a keen interest in the domain of Android Development and Machine Learning.
            </p>
            <p>
            Henceforth, looking forward to obtain a challenging and responsible position in a software organization where my skills and technical abilities are being utilised and improved.</p>
            <br><p style="text-align: center;">
            <b>You can contact me through</b>
            <div class="text-center" id="contactMe">
            <div class="container">
              <section>
                <!-- Gmail -->
                <a class="btn btn-outline-dark btn-floating m-1" href="mailto: sangramjithazarika123@gmail.com" role="button"><i class="fas fa-envelope"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-dark btn-floating m-1" href="https://www.instagram.com/hazarika_sangram.243/" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-dark btn-floating m-1" href="https://www.linkedin.com/in/sangramjit-hazarika-148666193/" role="button"><i class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>

              </section>
            </div>
        </div>
        </div>

        <div class="col-md-12 text-center">
                <a href="home.php"><button type="button" class="btn btn-primary" style="width: 7%">Back</button></a>
            </div><br><br>

</body>
</html>

