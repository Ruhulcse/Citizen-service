<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <title>Mycity web application</title>

          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">

          <link href="css/styles.css" rel="stylesheet">

          <style>
               
               .astonish {
                    visibility: visible;
               }

               @media (min-width: 768px) {
                    .astonish {
                         visibility: hidden;
                    }
                    .animated {
                         visibility: visible;
                    }
               }
          </style>
     </head>
     <body>
          
          <nav class="main-nav" id="main-nav">
               <div class="content-wrapper-sm">
                    <a href="#" class="navbar-brand">আমার শহর</a>
                    <div id="menu-button">
                         <div class="bar1"></div>
                         <div class="bar2"></div>
                         <div class="bar3"></div>
                    </div>
                    <ul class="nav-links">
                          <li><a href="tourist.php">ভ্রমণ</a></li>
                          <li><a href="doctor.php">ডাক্তার</a></li>
                          <li><a href="blood.php">রক্তদান</a></li>
                          <li><a href="rent.php">বাসাভাড়া</a></li>
                          <li><a href="news.php">সংবাদ</a></li>
                          <li><a href="#about">সম্পর্কে</a></li>
                          <li><a href="login.php">লগইন</a></li>
                    </ul>
               </div>
          </nav>

          <header>
               
               <img class="img-absolute" src="img/city.png" alt="City 1">
               <div class="wrapper astonish animated fadeInDown">
                    <h1><strong>নাগরিক </strong>সেবা </h1>
                    <h2>খুঁজুন , জানুন , ঘুরুন ,.</h2>
               </div>
          </header>

        
          <main>
               <div class="content-wrapper" id="about">
                    
                    <img class="img-absolute" src="img/city2.png" alt="City 2">
                    <div class="grid">
                         <div class="grid-col-sm-12 grid-col-md-6 astonish" data-animation="fadeInLeft">
                              <h2 class="section-title">আমার শহর অ্যাপ সম্পর্কে</h2>
                              <p>আমার শহর অ্যাাপটিতে আপনি পাচ্ছেন সকল ধরনের নাগরিক সেবা । 
                              ট্রাভেল , ফুড, সিটি গাইড পাচ্ছেন খুব সহজে । </p>
                              <p>মেডিক্যাল সেবা থেকে শিক্ষা সেবা সব পাচ্ছেন  একইসাথে 
                               সাথে আরও থাকছে বিনোদন মূলক বিভিন্ন ফিচার । </p>
                              <p>আমার শহর অ্যাপের সাথে থাকুক , সময় বাঁচান , আপনার শহরকে জানুন 
                              স্মার্ট শহরের নাগরিক সেবা নিন </p>
                         </div>
                    </div>
               </div>
          <footer>
               <div class="content-wrapper-sm display-flex-between">
                    <span></span>
               </div>
          </footer>

          <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
          <script src="js/menu.js" charset="utf-8"></script>
          <script src="js/astonish.js" charset="utf-8"></script>
          <script src="js/nav.js" charset="utf-8"></script>
          <script src="js/scroll.js" charset="utf-8"></script>
     </body>
</html>
