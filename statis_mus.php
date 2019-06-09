<!DOCTYPE html>
<html>
<head>
  <title>Statistics</title>
  
  <link href="https://fonts.googleapis.com/css?family=Lato: 100,300,400,700|Luckiest+Guy|Oxygen:300,400" rel="stylesheet">
  <link href="styles/translatestyler.css" type="text/css" rel="stylesheet">
    <link href="styles/indexstyler.css" type="text/css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>

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

<section class="introduction">
    <center><h2>Statistics On University Education in Mauritius</h2></center>
   </section>



<!-- the first chart representing the overall in Mauritius -->
<center><div>
        <div class="col span_1_of_2 charts" id="left-chart" style="position: relative; width: 38%">
            <canvas id="myChart" width="400" height="400"></canvas>
               

<script src = "\P1\js\mus.js"> </script>
</div></center>



<!-- fourth -->
<center><div>
        <div class="col span_1_of_2 charts" id="left-chart" style="position: relative; width: 38%">
            <canvas id="myChart3" width="400" height="400"></canvas>
                <script>
                  createChart('myChart3', 'https://cors-anywhere.herokuapp.com/http://api.worldbank.org/v2/countries/MUS/indicators/UIS.FOSEP.56.F200?date=2009:2015', 'Mauritius','Percentage Enrolment of Arts and Humanities');
</script></center>
</div>

<!-- fifth -->
<center><div >
        <div class="col span_1_of_2 charts" id="left-chart" style="position: relative; width: 38%">
            <canvas id="myChart4" width="400" height="400"></canvas>
                <script>
                  createChart('myChart4', 'https://cors-anywhere.herokuapp.com/http://api.worldbank.org/v2/countries/MUS/indicators/UIS.FOSEP.56.FUK?date=2009:2015', 'Mauritius','Percentage Enrolment of unspecified fields');
                </script>
</div></center>

<!-- six -->
<center><div >
        <div class="col span_1_of_2 charts" id="left-chart" style="position: relative; width: 38%">
            <canvas id="myChart5" width="400" height="400"></canvas>
                <script>
                  createChart('myChart5', 'https://cors-anywhere.herokuapp.com/http://api.worldbank.org/v2/countries/MUS/indicators/UIS.FOSEP.56.F800?date=2009:2015', 'Mauritius','Percentage Enrolment of Agriculture, Forestry, Fisheries and Veterinary');
                </script>
</div></center>

<!-- seven -->
<center><div >
        <div class="col span_1_of_2 charts" id="left-chart" style="position: relative; width: 38%">
            <canvas id="myChart6" width="400" height="400"></canvas>
                <script>
                  createChart('myChart6', 'https://cors-anywhere.herokuapp.com/http://api.worldbank.org/v2/countries/MUS/indicators/SE.TER.ENRL.FE?date=2009:2015', 'Mauritius','Enrolment Female Students in All Programs');
                </script>
</div></center>


<!--nine-->
<center><div >
        <div class="col span_1_of_2 charts" id="left-chart" style="position: relative; width: 38%">
            <canvas id="myChart8" width="400" height="400"></canvas>
                <script>
                  createChart('myChart8', 'https://cors-anywhere.herokuapp.com/http://api.worldbank.org/v2/countries/MUS/indicators/UIS.FOSEP.56.F700?date=2009:2015', 'Mauritius','Percentage Enrolment of Healthcare');
                </script>
</div></center>
</body>
</html>
