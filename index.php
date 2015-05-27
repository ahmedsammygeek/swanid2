<?php 
require 'header.php';

require 'connection/conn.php';

$old_events = mysqli_query($connect, "SELECT * FROM events WHERE DATEDIFF(date,NOW()) > 0")

?>
<section id="main-slider" class="no-margin">
    <div class="carousel slide wet-asphalt">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(images/887595_461722653982889_3849890687847624326_o.jpg)">
                
            </div><!--/.item-->
            <div class="item" style="background-image: url(images/10533114_461722623982892_1552298449323609068_n.jpg)">
               
            </div><!--/.item-->
            <div class="item" style="background-image: url(images/11241141_460814440740377_1143352320_o.jpg)">
                
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="icon-angle-right"></i>
    </a>
</section>

<!--/#main-slider-->



<?php 

require 'footer.php';
?>