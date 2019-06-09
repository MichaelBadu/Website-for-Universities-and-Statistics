<!DOCTYPE html>
<html>
  <head>
  <title>Book A Trip</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400, 600" rel="stylesheet">
    <link href="styles/indexstyler.css" type="text/css" rel="stylesheet">
    <link href="styles/registerstyler.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/contact.css">
  </head>
<body>

  <div class="header">
    <div class="container">
      <ul class="nav">
       <?php
        //list of items to be populated as the menubar
        include "navigation_bar.php";
        ?>
      </ul>
    </div>
  </div>

<!--forms title-->
  <div id = "glob_content">
  <div id ="title">Contact Us</div>
  <div id = "fore_content">
  <!--forms input-->
  <form>
  <input type = "text" name="name" placeholder="Name"/>
  <input type = "email" name="email" placeholder="Email"/>
  <textarea name="message" placeholder="Message"/></textarea>
  <input type = "submit" name="send" value ="send"/>
  </form>
  </div>

  </div>
</body>