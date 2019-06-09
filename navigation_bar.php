<?php
  $my_menu_items = array("Home"=>"index.php", "Universities"=>"univ_main.php", 
                            "Statistics"=>"statis_main.php", "Contact Us"=>"contact.php" );
  foreach ($my_menu_items as $key => $value) {
    echo "<li><a class=\"mymenu\" href=$value>$key</a></li>";
  }
?>