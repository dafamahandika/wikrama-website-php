<?php
if(isset($_GET['page'])) {
     $page= $_GET['page'];

     switch ($page) {
          case 'sejarah':
               require "page/sejarah.php";
               break;
          
          case 'kompetensi':
               include "page/kompetensi.php";
               break;
          
          case 'matrikulasi':
               include "page/matrikulasi.php";
               break;

          case 'kantin':
               include "page/kantin.php";
               break;

          default: 
               echo "<center><h3>Page Not Found !!!</h3></center>";
               break;  
     } 
}     

?>