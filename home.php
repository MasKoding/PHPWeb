<?php 
   //membuat session awal wajib pakai session_start()
   session_start();
   if(!isset($_SESSION['user'])){
        header('Location: login.php');

   }

   include "header.php";
   include "nav.php";

?>
<div class="container">
    <h1>Ini Halaman Home</h1>
</div>