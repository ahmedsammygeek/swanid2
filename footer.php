

<section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>About Us</h4>
                    <p>We design this SWANID website as final project in internet application development course at 2015</p>
                    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>team</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">Abeer Matar Almalki</a></li>
                            <li><a href="#">Shurooq Hussen Al-Amoudi</a></li>
                            <li><a href="#">Sarah Sultan Al-Aboud</a></li>
                            
                        </ul>
                    </div>
                </div><!--/.col-md-3-->


                <div class="col-md-3 col-sm-6">
                    <h4>Address</h4>
                    <address>
                       <br>
                        جامعه ام القرى- مكه المكرمه - العابديه<br>
                        
                       
                    </address>
          
                </div> <!--/.col-md-3-->
            </div>
        </div>
    </section>


<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="MyGmaps" style="width:1200px;height:400px;border:1px solid #CECECE;">

                </div>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">

function LoadGmaps() {
    var myLatlng = new google.maps.LatLng(21.3198960,39.9452915);
    var myOptions = {
        zoom: 14,
        center: myLatlng,
        disableDefaultUI: true,
        panControl: true,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.DEFAULT
        },

        mapTypeControl: true,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
        },
        streetViewControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById("MyGmaps"), myOptions);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:"جامعة ام القرى،مبادرة سواند"
    });
}
</script>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>