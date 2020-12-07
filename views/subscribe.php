<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Magebit test task</title>
    <link rel="stylesheet" href="../public/css/styles.css">
  </head>
  <body>
    <div class="container">

      <!-- First column -->
      <div class="col35">

        <!-- Navigation bar -->
        <div class="nav">

          <!-- Logo -->
          <div class="logo"></div>

          <!-- Navigation links -->
          <ul>
            <li>About</li>
            <li>How it works</li>
            <li>Contact</li>
          </ul>
        </div>

        <!-- Main content -->
        <div class="text-content">

          <!-- Union image -->
          <img src="public/images/union.png" alt="" class="union-image">

          <div class="heading">Subscribe to newsletter</div>
          <p class="main-text">
            Subscribe to our newsletter and get 10% discount
            on pineapple glasses.
          </p>

          <!-- Email input -->
          <div class="input-wrapper">
            <input id="email" type="text"
              placeholder="Type your email address here...">
            <div class="input-mask"></div>
          </div>

          <!-- Error message -->
          <div class="error"></div>

          <!-- Terms block -->
          <div class="terms-block">
            <input type="checkbox" id="terms" name="terms">
            <label for="terms"></label>
            <label for="terms" class="terms-text">
              I agree to <a href="#">terms of service</a>
            </label>
          </div>

          <!-- Hr -->
          <div class="grayline"></div>

          <!-- Social links -->
          <div class="social-links">
            <div class="facebook-icon"></div>
            <div class="instagram-icon"></div>
            <div class="twitter-icon"></div>
            <div class="youtube-icon"></div>
          </div>
        </div>
      </div>

      <!-- Second column -->
      <div class="col65">

        <!-- Background image -->
        <div class="background"></div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/js/app.js"></script>
  </body>
</html>
