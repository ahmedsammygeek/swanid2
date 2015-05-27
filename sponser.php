<?php require 'header.php'; ?>
     

  <section id="career" class="container">
    <div class="center">

    <hr>
  

    <hr>

    <div class="row">
      
      
        <?php
         require 'connection/conn.php';

      $query=mysqli_query($connect , "SELECT * FROM sponsor");

      while ($result=mysqli_fetch_assoc($query)) {
       extract($result);
       switch ($type) {
         case '1':
         $type = "دعم مساقات";
         break;
         case '2':
         $type = "دعم مناسبات";
         break;
         case '3':
         $type = "دعم وظائف";
         break;
         case '4':
         $type = "دعم معرض";
         break;

         default:
         $type = "لايوجد جهه محددة" ;
         break;
       }

       echo "<div class='col-sm-4'>
       <h4>$sponsor_name</h4>
       <h5>$type</h5>
       <h6>$email</h6>
       <p>$mobile.</p>
       </div>";
     }?>
        
        
      

      

      
    </div>
  </section>
  <!-- /Career -->



 <?php require 'footer.php'; ?>