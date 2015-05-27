<?php require 'header.php'; ?>
     

  <section id="career" class="container">
    <div class="center">

    <hr>
  

    <hr>

    <div class="row">
      
      
        <?php
         require 'connection/conn.php';

      $query=mysqli_query($connect , "SELECT * FROM certification_and_awards");

      while ($result=mysqli_fetch_assoc($query)) {
         extract($result);

         echo "<div class='col-sm-4'>
         <h4>$title</h4>
        <p>$description.</p>
        </div>";
       } ?>
        
        
      

      

      
    </div>
  </section>
  <!-- /Career -->



 <?php require 'footer.php'; ?>