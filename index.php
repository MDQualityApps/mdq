<?php
  $con = mysqli_connect("localhost","root","","charts");
  if($con){
    echo "";
  }else
  {
	  echo "Not Connected";
	  }
?>
<html>

  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>MDQ</title>
  
  </head>
  
  <body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>MDQ</span>uality <span>A</span>pps <span>S</span>olutions</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="/chart.php" data-after="Service">Services</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
    <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Visual Representation of Data<span></span></h1>
        <a href="#projects" type="button" class="cta">A Better View!</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->


  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Play with <span>Data</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/fluent/48/000000/line-chart.png"/></div>
          <div class="contact-info">
            <h1>
			<a href="javascript:drawChartl();">Line Chart</a></li>

          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/dusk/64/000000/doughnut-chart.png"/></div>
          <div class="contact-info">
            <h1>
			<a href="javascript:drawChart();">Pie Chart</a></li>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/bar-chart.png"/></div>
          <div class="contact-info">
            <h1>
			<a href="javascript:drawChartb();">Bar Chart</a></li>
          </div>
        </div>
		  <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/dusk/64/000000/area-chart.png"/></div>
          <div class="contact-info">
            <h1>
			<a href="javascript:drawChartc();">Column Chart</a></li>
		  </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

<div align= center>
	
	
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
	
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

   function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['students', 'contribution'],
         <?php
         $sql = "SELECT * FROM contribution";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['student']."',".$result['contribution']."],";
          }
         ?>
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
	  
	   function drawChartl() {

        var data = google.visualization.arrayToDataTable([
          ['students', 'contribution'],
         <?php
         $sql = "SELECT * FROM contribution";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['student']."',".$result['contribution']."],";
          }
         ?>
        ]);

        var options = {
          title: ' '
        };

        var chart = new google.visualization.LineChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
  
   function drawChartb() {

        var data = google.visualization.arrayToDataTable([
          ['students', 'contribution'],
         <?php
         $sql = "SELECT * FROM contribution";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['student']."',".$result['contribution']."],";
          }
         ?>
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.BarChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
  
  function drawChartc() {

        var data = google.visualization.arrayToDataTable([
          ['students', 'contribution'],
         <?php
         $sql = "SELECT * FROM contribution";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['student']."',".$result['contribution']."],";
          }
         ?>
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
  
  
    </script>
	
      <div id="piechart" style="width: 900px; height: 500px;"></div>

  </body>
</html>
