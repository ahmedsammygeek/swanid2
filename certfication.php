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

  <section id="bottom" class="wet-asphalt">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <h4>About Us</h4>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
          <p>Pellentesque habitant morbi tristique senectus.</p>
        </div><!--/.col-md-3-->

        <div class="col-md-4 col-sm-12">
          <h4>Company</h4>
          <div>
            <ul class="arrow">
              <li><a href="#">alaa</a></li>

              <li><a href="#">moahmed</a></li>
              <li><a href="#">glal</a></li>
             
            </ul>
          </div>
        </div><!--/.col-md-3-->

      
        <div class="col-md-4 col-sm-6">
          <h4>Address</h4>
          <address>
            <strong>makah, Inc.</strong><br>
            address here <br>
            
            <abbr title="Phone">P:</abbr> (123) 456-7890
          </address>
    
        </div> <!--/.col-md-3-->
      </div>
    </div>
  </section><!--/#bottom-->

 <?php require 'footer.php'; ?>