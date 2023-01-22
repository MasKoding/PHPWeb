<?php 
    include "header.php";
    include "nav.php";
    
    $name = htmlspecialchars($_GET['name']);
    // $age = $_GET['age'];
?>

<div class="container">
    <h1>Ini Halaman Profile</h1>
      <?=$name?>
   

</div>