<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FUT COMMUNITY - FIFA ULTIMATE TEAM</title>
     <link rel="shortcut icon" href="fifa.jpg" />
     <link rel="stylesheet" type="text/css" href="style.css">
  </head>
    <body>

      <?php
      require 'navbar.php';
       ?>


    <?php

    $dbc = mysqli_connect('localhost', 'bartuser', 'bartuser', 'myfifa') or die ('Error dbc!');
    if (isset($_POST['submit_search'])) {
        $searchterm = mysqli_real_escape_string($dbc,trim($_POST['searchterm']));
        $searchterm = '%' . $searchterm . '%';
    } else {
        $searchterm = '%';
    }
    $query = "SELECT * FROM articles WHERE title LIKE '$searchterm'";
    $result = mysqli_query($dbc, $query);
    while ($row = mysqli_fetch_array($result)) {
        $target = $row['target'];
        $title = $row['title'];
        $title2 = $row['title2'];
        $title3 = $row['title3'];
        $description = $row['description'];
        $description2 = $row['description2'];
        $description3 = $row['description3'];
        $short_description = $row['short_description'];
        $id = $row['id'];
        if($id == "1") {
          echo '<a href="1.php">';
          echo ' <div id="media">';
          echo ' <img class="photo" id="mediaimg" src="' . $target . '" alt="IMAGE">';
          echo '<h1 id="Title">' . $title . '</H1>';
          echo '<h3 id="Beschrijving">' . $short_description . '</h3>';
          echo ' </div>';
          echo '</a>';
        }

        if($id == "2") {
          echo '<a href="2.php">';
          echo ' <div id="media">';
          echo ' <img class="photo" id="mediaimg" src="' . $target . '" alt="IMAGE">';
          echo '<h1 id="Title">' . $title . '</H1>';
          echo '<h3 id="Beschrijving">' . $short_description . '</h3>';
          echo ' </div>';
          echo '</a>';
        }

        if($id == "3") {
          echo '<a href="3.php">';
          echo ' <div id="media">';
          echo ' <img class="photo" id="mediaimg" src="' . $target . '" alt="IMAGE">';
          echo '<h1 id="Title">' . $title . '</H1>';
          echo '<h3 id="Beschrijving">' . $short_description . '</h3>';
          echo ' </div>';
          echo '</a>';
        }

        if($id == "4") {
          echo '<a href="4.php">';
          echo ' <div id="media">';
          echo ' <img class="photo" id="mediaimg" src="' . $target . '" alt="IMAGE">';
          echo '<h1 id="Title">' . $title . '</H1>';
          echo '<h3 id="Beschrijving">' . $short_description . '</h3>';
          echo ' </div>';
          echo '</a>';
        }
    }
    mysqli_close($dbc);
    ?>

<!--
<a href="FIFA/1.php">
<div id="media">
<img class="photo" id="mediaimg" src="ronaldo.jpg" alt="FREEKCIK-GIF">
<h1 id="Title"> HIER KOMT DE TITLE </H1>
  <h3 id="Beschrijving">Hier Komt Een Kleine Beschrijving over het onderwerp.</h3>
</div>
</a>
-->

<?php
require 'footer.php';
 ?>


  </body>
</html>
