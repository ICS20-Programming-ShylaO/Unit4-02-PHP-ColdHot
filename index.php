<!DOCTYPE html>
<!-- ICS20-Programming-Unit4-02-PHP-ColdHot -->
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Hot or Cold, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon[1].png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32[1].png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16[1].png">
    <link rel="manifest" href="./favicon/site[1].webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Temperature Checker, Using PHP</title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
    <?php
      echo "<h1>Temperature Checker</h1>";
      echo "<h3>This webpage has an opinion on the weather today, given the degrees in Celsius.</h3>";
    ?>
    <center>
    <img src="./images/thermometer.png" alt="Thermometer Image" width="10%" height="10%">
    <!-- Form for the user's guess -->
    <form action="./results.php" method="post" target="results">
      <label for="lblUserTemp">Temperature (°C):</label>
      <input type="number" id="user-temp" step="1" placeholder="Eg. 5" name="user-temp"><br><br>
      <input type="submit" value="Submit Temperature">
    </form>
    <!-- iframe for the response to show on the web page. -->
    <iframe id="results" name="results"></iframe>
    </center>
  </body>
</html>