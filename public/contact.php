<?php include("./assets/php/index.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Contact</title>
</head>
<body>
        <nav>
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">
                        <img id="JanitorExpressMainLogo" src="assets/img/smallJan.jpg" alt="Janitor express logo"></a>
                    </a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                        <i class="material-icons">reorder</i>
                    </a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a class="navLink" href="index.html">Home</a></li>
                        <li><a class="dropdown-trigger navLink" href="#!" data-target="dropdown2">Services<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="navLink" href="pastWork.html">Past Work</a></li>
                        <li><a class="navLink" href="contact.html">Contact us</a></li>
                    </ul>
                    </div>
              </nav>
              <ul class="sidenav" id="mobile-demo">
                    <li><a class="navLink" href="index.html">Home</a></li>
                    <li><a class="dropdown-trigger navLink" href="#!" data-target="dropdown1">Services<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="navLink" href="pastWork.html">Past Work</a></li>
                    <li><a class="navLink" href="contact.html">Contact us</a></li>
                  </ul>
                  <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="#!" class="navLink">Grout Cleaning</a></li>
                <li class="divider" class="navLink"></li>
                <li><a href="#!" class="navLink">Janitorial Services</a></li>
                <li class="divider"></li>
                <li><a href="#!" class="navLink">Floor Waxing/stripping</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
              <li><a href="grout.html" class="navLink">Grout Cleaning</a></li>
              <li class="divider"></li>
              <li><a href="janitor.html" class="navLink" data-selected="janitorial">Janitorial Services</a></li>
              <li class="divider"></li>
              <li><a href="floor.html" class="navLink" data-selected="floor">Floor Waxing/stripping</a></li>
          </ul>
          <div class="container">
             <h1 class="normalHeader">Contact Page</h1>
             <div class="row">
                <form class="col l8 m8 s8" action="<?= $_SERVER['PHP_SELF'];?>" method="POST">
                  <div class="row">
                    <div class="input-field col s6">
                      <input id="full_name" type="text" name="name" value="<?= $name?>" class="validate">
                      <label for="full_name">Full Name</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input id="email" type="email" name="email" value="<?= $email?>" class="validate">
                      <label for="email">Email</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="subject" type="text" name="subject" value="<?= $subject?>" class="validate">
                        <label for="subject">Subject</label>
                      </div>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="icon_prefix2" class="materialize-textarea" value="<?= $message?>" name="message"></textarea>
                    <label for="icon_prefix2">Your message</label>
                  </div>
                  <button class="btn waves-effect waves-light" type="submit" name="submit">Send
                    <i class="material-icons right">send</i>
                  </button>
                </form>
                <div class="col m4">
                  <p class="alert">
                    *Note: You can get a free quota.
                  </p>
                </div>
              </div>
          
              <hr>
          <h1 class="normalHeader">Or call us: (510)560-3687</h1>
              <hr>
              <br>
          </div>
          <footer class="page-footer">
                <div class="row">
                  <div class="col l3 s12">
                      <img id="JanitorExpressBottomLogo" src="assets/img/JanitorExpressLogo.jpeg">
                  </div>
                  <div class="col l3 s12">
                    <h5 class="white-text">Our Contact</h5>
                    <ul>
                        <li><a href="https://mail.google.com/" class="footerText">Email: JanitorExpress2019@gmail.com</a></li>
                        <li>Phone Number:(510)560-3687</li>
                    </ul>
                  </div>
                  <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Quick Links</h5>
                    <ul>
                      <li><a class="footerText" href="index.html">Home</a></li>
                      <li><a class="footerText" href="#!">Services</a></li>
                      <li><a class="footerText" href="pastWork.html">Past Work</a></li>
                      <li><a class="footerText" href="#!">Contact us</a></li>
                      <li><a class="footerText" href="#!">About us</a></li>
                    </ul>
                  </div>
                </div>
              <div class="footer-copyright">
                <div class="container">
              Janitor Express - © 2020 All Rights Reserved.
                </div>
              </div>
            </footer>
      <script src="assets/js/index.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
</body>
</html>