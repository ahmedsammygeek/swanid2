<?php require 'header.php'; ?>


<section id="career" class="container">
  <div class="center">

    <hr>


    <hr>

    <div class="row">


      <?php
      require 'connection/conn.php';

      $query=mysqli_query($connect , "SELECT * FROM tracks");

      while ($result=mysqli_fetch_assoc($query)) {
       extract($result);

       echo "<div class='col-sm-4'>
       <h4>$name</h4>
       <p>$details.</p>
       <a href='add_applicant.php?id=$id' class='btn btn-danger' >تسجيل</a>
       

       </div>";
     }?>







   </div>
 </section>
 <!-- /Career -->

<?php require 'footer.php'; ?>