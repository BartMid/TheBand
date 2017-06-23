<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FUT COMMUNITY - FIFA ULTIMATE TEAM</title>
     <link rel="shortcut icon" href="fifa.jpg" />
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" type="text/css" href="article.css">

  </head>
    <body>


      <?php
      require 'navbar.php';
       ?>


  <!--  <div id="article">
    <img class="photo" id="articleimg" src="ronaldo.jpg" alt="FREEKCIK-GIF">
    <h1 id="articletitle"> HIER KOMT DE TITLE </H1>

      <h3 id="articlebeschrijving1"></h3>

        <h2 id="title2">HIER KOMT DE TITLE</h2>
        <h3 id="articlebeschrijving2"></h3>

          <h2 id="title2">HIER KOMT DE TITLE</h2>
          <h3 id="articlebeschrijving2"></h3>
    </div> -->

<?php

$dbc = mysqli_connect('localhost', 'bartuser', 'bartuser', 'myfifa') or die ('Error!');
$query = "SELECT * FROM articles";
$result = mysqli_query($dbc, $query);
while ($row = mysqli_fetch_array($result)) {
    $target = $row['target'];
    $title = $row['title'];
    $title2 = $row['title2'];
    $title3 = $row['title3'];
    $description = $row['description'];
    $description2 = $row['description2'];
    $description3 = $row['description3'];
    $id = $row['id'];
    if($id == "1") {
      echo '<div id="article">';
      echo '  <img class="photo" id="articleimg" src="' . $target . '" alt="FREEKCIK-GIF">';
      echo ' <h1 id="articletitle">' . $title . '</h1>';
      echo '<h3 id="articlebeschrijving1">' . $description . '</h3>';
      echo '<h2 id="title2">' . $title2 . '</h2>';
      echo '  <h3 id="articlebeschrijving2">' . $description2 . '</h3>';
      echo '<h2 id="title2">' . $title3 . '</h2>';
      echo '<h3 id="articlebeschrijving2">' . $description3 . '</h3>';
      echo '</div>';
    }
}
mysqli_close($dbc);





 ?>

  </body>
  <?php
require 'footer.php';
   ?>
  </html>
