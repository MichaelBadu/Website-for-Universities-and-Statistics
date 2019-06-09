<!DOCTYPE html>
<html>
<head>
  <title>List Of Universities In Ghana</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="\P1\js\handlebars-v4.0.11.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace|Raleway:100,500,600,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400, 600" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/stereostyler.css">
  <link href="styles/indexstyler.css" type="text/css" rel="stylesheet">
   <link href="styles/translatestyler.css" type="text/css" rel="stylesheet">

</head>
<body>

  <div class="menu_bar">
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
  
<div>
  <form id="searchform">
    <input type = "search" id="mysearchbar" onkeyup="shortlist()" placeholder="Quick Search">
    <button class="btn-default" type="button" onclick="search()">Search</button>
  </form>
</div>

<div>
  <h5 id="searchresults">
  </h5>
</div>
 
<!-- Lists the universities in for the Mauritius as wwell as extracting the data from the api -->
<div>
    <script id="basic-template" type="text/x-handlebars-template">
    <table id="schools">
     <tr>
        
        <th>Name Of University</th>
        <th>Website Of University</th>
     </tr>
     {{#each objects}}
     <tr>
     
     <td>{{name}}</td>
     <td><a href="{{web_pages}}">{{web_pages}}</a></td>
     </tr>
    {{/each}}
    </script>    
    </table> 
</div>
    <script type="text/javascript">
        $(document).ready(function() {
        var req = $.ajax({
        url: "https://cors-anywhere.herokuapp.com/http://universities.hipolabs.com/search?country=Mauritius",
          type:"get",
            dataType: "json"
        });
        req.done(function(data) {
           console.log(data);
           
           var source = $("#basic-template").html(); 
           var template = Handlebars.compile(source);
           
           var data = data;
           var wrapper  = {objects: data};

           console.log(template(wrapper));

           $('body').append(template(wrapper));

        });

        });
    </script>

    <!-- This links the search function -->
<script src = "\P1\js\search_script.js"> </script>



</body>
</html>