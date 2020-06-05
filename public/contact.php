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
                    <a href="/" class="brand-logo">
                        <img id="JanitorExpressMainLogo" src="assets/img/smallJan.jpg" alt="Janitor express logo"></a>
                    </a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                        <i class="material-icons">reorder</i>
                    </a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="navLink" href="*">Home</a></li>
                    <li><a class="dropdown-trigger navLink" href="#!" data-target="dropdown2">Services<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="navLink" href="/pastWork">Past Work</a></li>
                    <li><a class="navLink" href="/contact">Contact us</a></li>
                    </ul>
                    </div>
              </nav>
              <ul class="sidenav" id="mobile-demo">
              <li><a class="navLink" href="/">Home</a></li>
              <li><a class="dropdown-trigger navLink" href="#!" data-target="dropdown1">Services<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a class="navLink" href="/pastWork">Past Work</a></li>
              <li><a class="navLink" href="/contact">Contact us</a></li>
              </ul>
                  <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="/groutInfo" class="navLink">Grout Cleaning</a></li>
              <li class="divider" class="navLink"></li>
              <li><a href="/janitorialInfo" class="navLink">Janitorial Services</a></li>
              <li class="divider"></li>
              <li><a href="/floorInfo" class="navLink">Floor Waxing/stripping</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
              <li><a href="/groutInfo" class="navLink">Grout Cleaning</a></li>
              <li class="divider"></li>
              <li><a href="/janitorialInfo" class="navLink" data-selected="janitorial">Janitorial Services</a></li>
              <li class="divider"></li>
              <li><a href="/floorInfo" class="navLink" data-selected="floor">Floor Waxing/stripping</a></li>
          </ul>
          <div class="container">
             <h1 class="normalHeader">Contact Page</h1>
             <span class="success"><?= $success?></span>
             <div class="row">
                <form class="col l8 m8 s8" action="<?= $_SERVER['PHP_SELF'];?>" method="POST">
                  <div class="row">
                    <div class="input-field col s6">
                      <input id="full_name" type="text" name="name" value="<?= $name?>" class="validate">
                      <label for="full_name">Full Name</label>
                      <span class="err"><?= $name_error ?></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input id="email" type="email" name="email" value="<?= $email?>" class="validate">
                      <label for="email">Email</label>
                      <span class="err"><?= $email_error?></span>
                    </div>
                    <div class="input-field col s6">
                        <input id="subject" type="text" name="subject" value="<?= $subject?>" class="validate">
                        <label for="subject">Subject</label>
                        <span class="err"><?= $subject_error ?></span>
                      </div>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="icon_prefix2" class="materialize-textarea" value="<?= $message?>" name="message"></textarea>
                    <label for="icon_prefix2">Your message</label>
                    <span class="err"><?= $message_error?></span>
                  </div>
                  <button class="btn waves-effect waves-light" type="submit" name="submit">Send
                    <i class="material-icons right">send</i>
                  </button>
                </form>
                <div class="col m4">
                  <div class="alert">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                  <strong>Note:</strong> Email us to get a free quota. 
                </div>
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
                  <a href="/">
                    <img id="JanitorExpressBottomLogo" src="assets/img/JanitorExpressLogo.jpeg">
                  </a>
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
                    <li><a class="footerText" href="/">Home</a></li>
                    <li><a class="footerText" href="/pastWork">Past Work</a></li>
                    <li><a class="footerText" href="/contact">Contact us</a></li>
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