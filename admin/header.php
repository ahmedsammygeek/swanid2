<?php  
require 'check_admin.php';
 ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>لوحة التحكم</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
   
    <link href="css/plugins/timeline/timeline.css" rel="stylesheet">
        <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">لوحة التحكم</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
       
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> الصفحة الشخصية</a>
                        </li>
                        
                       
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> تسجيل الخروج</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                        <br>
                        
                        
                        <br>

                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> الرئيسية</a>
                    </li>
                      <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> مديري الموقع<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="admins.php">عرض المديرين</a>
                            </li>
                            <li>
                                <a href="add_admin.php">اضف مدير جديد</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> المناسبات<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="events.php">المناسبات</a>
                            </li>
                            <li>
                                <a href="add_event.php">اضف مناسبة جديدة</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> المسارات<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="tracks.php">المسارات</a>
                            </li>
                            <li>
                                <a href="add_track.php">اضافة مسار جديد</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> الرعاة<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="sponsers.php">الرعاة</a>
                            </li>
                            <li>
                                <a href="add_sponser.php">اضافة راعى جديد</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> الوظائف<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="jobs.php">الوظائف</a>
                            </li>
                            <li>
                                <a href="add_job.php"> اضافة وظيفة جديدة</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> الشهادات و الجوائز<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="awards.php">عرض الشهادات </a>
                            </li>
                            <li>
                                <a href="add_award.php"> اضافة شهادة جديدة </a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> المعرض<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="gallery.php"> المعارض</a>
                            </li>
                            <li>
                                <a href="add_gallery.php">اضافة معرض جديد  </a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> طلبات الاتحاق<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                            <li>
                                <a href="applicants.php"> طلبات الالتحاق  </a>
                                <a href="add_applicant_event.php"> اضافه طلب التحاق بمناسبة </a>
                                <a href="add_applicant_gallery.php"> اضافة طلب التحاق بمعرض  </a>
                                <a href="add_applicant_track.php"> اضافه طلب التحاق بمسار </a>
                                <a href="add_applicant_career.php"> اضافة طلب التحاق بوظيفة  </a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                     <li>
                        <a href="https://accounts.google.com/ServiceLogin?service=cl&passive=1209600&continue=https://www.google.com/calendar/render?tab%3Dwc&followup=https://www.google.com/calendar&scc=1#main_7"><i class="fa fa-dashboard fa-fw"></i> التقويم</a>
                    </li>


                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->
