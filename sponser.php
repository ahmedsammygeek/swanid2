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

  <section id="bottom" class="wet-asphalt">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <h4>About Us</h4>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
          <p>Pellentesque habitant morbi tristique senectus.</p>
        </div><!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <h4>Company</h4>
          <div>
            <ul class="arrow">
              <li><a href="#">The Company</a></li>
              <li><a href="#">Our Team</a></li>
              <li><a href="#">Our Partners</a></li>
              <li><a href="#">Our Services</a></li>
              <li><a href="#">Faq</a></li>
              <li><a href="#">Conatct Us</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Copyright</a></li>
            </ul>
          </div>
        </div><!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <h4>Latest Blog</h4>
          <div>
            <div class="media">
              <div class="pull-left">
                <img src="images/blog/thumb1.jpg" alt="">
              </div>
              <div class="media-body">
                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                <small class="muted">Posted 17 Aug 2013</small>
              </div>
            </div>
            <div class="media">
              <div class="pull-left">
                <img src="images/blog/thumb2.jpg" alt="">
              </div>
              <div class="media-body">
                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                <small class="muted">Posted 13 Sep 2013</small>
              </div>
            </div>
            <div class="media">
              <div class="pull-left">
                <img src="images/blog/thumb3.jpg" alt="">
              </div>
              <div class="media-body">
                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                <small class="muted">Posted 11 Jul 2013</small>
              </div>
            </div>
          </div>  
        </div><!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <h4>Address</h4>
          <address>
            <strong>Twitter, Inc.</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
          </address>
          <h4>Newsletter</h4>
          <form role="form">
            <div class="input-group">
              <input type="text" class="form-control" autocomplete="off" placeholder="Enter your email">
              <span class="input-group-btn">
                <button class="btn btn-danger" type="button">Go!</button>
              </span>
            </div>
          </form>
        </div> <!--/.col-md-3-->
      </div>
    </div>
  </section><!--/#bottom-->

 <?php require 'footer.php'; ?>