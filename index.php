<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400, 600" rel="stylesheet">
    <link href="styles/indexstyler.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/media.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>

  <div class="header">
    <div class="container">
      <ul class="nav">
      <!-- Inserting the navigation bar-->
       <?php
        //list of items to be populated as the menubar
        include "navigation_bar.php";
        ?>
      </ul>
    </div>
  </div>

  <div class="pooma">
    <div class="container">  
      <div class="main">
        <h1>Tertiary Education in the UK, Mauritius & Ghana</h1>
        <a class="btn-main" href="univ_main.php">Explore Universities</a>
      </div>
    </div>
  </div>

   <div class="supporting">
    <div class="container">

      <div class="col">
        <img src="images/pic3.png" alt="*">   <!--img source: https://icons8.com/web-app/for/all/software-development -->

        <h2>Reliable</h2>
        <p>Get reliable information on the universities avaiable in the UK, Mauritius and Ghana with autentic data on them. With updates on the universities in these localities and the analysis on them.</p>
        <a class="btn-default" href="statis_main.php">Learn more</a>
      </div>

      <div class="col">
        <img src="images/pic1.png" alt="*">  <!--  image  source https://icons8.com/web-app/for/all/software-development -->

        <h2>Inform</h2>
        <p>Choosing where to study is one of biggest decisions for student’s. We help make the right choice. We’ve pulled together some information that we hope will help you to decide where to study.</p>
        <a class="btn-default" href="univ_main.php">Learn more</a>
      </div>

      <div class="col">
        <img src="images/pic2.png" alt="*">   <!-- image source https://icons8.com/web-app/for/all/software-development -->

        <h2>Access</h2>
        <p>Access data like the percentage of students in tertiary education enrolled in Education, Engineering, Manufacturing and Construction programmes in the United Kindom, Mauritius and Ghana </p>
        <a class="btn-default" href="statis_main.php">Learn more</a>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>

  <div class="footer">
    <div class="container">
      <center><p>&copy; Copyright: Michael Kofi Badu, Info 2300 </p></center>
  
    </div>
  </div>


</body>
</html>