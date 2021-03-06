
<?php 

require 'header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-right">لوحة التحكم</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> اللوحة الرئيسية للتحكم فى الموقع 
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group">

                        <ul class="nav" id="side-menu">
                            <br>


                            <br>

                            <li>
                                <a target="_blank" href="index.php"> اللوحة الرئيسية </a>
                            </li>



                            <li>
                                <a target="_blank" href="#"> الرعاة<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a target="_blank" href="sponsers.php">الرعاة</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="add_sponser.php">اضافة راعى جديد</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>


                            <li>
                                <a target="_blank" href="#"> المناسبات<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a target="_blank" href="events.php">المناسبات</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="add_event.php">اضف مناسبة جديدة</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a target="_blank" href="#"> الوظائف<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a target="_blank" href="jobs.php">الوظائف</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="add_job.php"> اضافة وظيفة جديدة</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                                <a target="_blank" href="#"> المشاركين<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a target="_blank" href="participants.php">المشاركين</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="add_participant.php"> اضافة مشاركين </a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a target="_blank" href="#"> الشهادات و الجوائز<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a target="_blank" href="awards.php">مشاهدة الكل </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="add_award.php"> اضافة جديد </a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>




                            <li>
                                <a target="_blank" href="#"> المساقات<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a target="_blank" href="tracks.php">المساقات</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="add_track.php">اضافة مساق جديد</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>


                            <li>
                                <a target="_blank" href="#"> Galleried<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a target="_blank" href="gallery.php"> show Galleries</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="add_gallery.php"> add gallery  </a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                                <a target="_blank" href="#"> applicants<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">

                                    <li>
                                        <a target="_blank" href="applicants.php"> applicants  </a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                                <a target="_blank" href="#"> الادارة <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a target="_blank" href="admins.php">مشاهدة المديرين</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="add_admin.php">اضف مدير جديد</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>


                        </ul>


                    </div>
                    <!-- /.list-group -->

                </div>
                <!-- /.panel-body -->
            </div>

        </div>
    </div>


</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->



<?php 
require 'footer.php';

?>