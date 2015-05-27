
<?php 

require 'header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">المسارات</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
         <?php 
                  if (isset($_GET['msg'])) {
                   switch ($_GET['msg']) {
                       
                       case 'deleted':
                       echo '<div class="alert alert-success text-right">
                       تم الحذف بنجاح.
                       </div>';
                       break;
                       case 'data_inserted':
                       echo '<div class="alert alert-success text-right">
                       تم اضافة المناسة بنجاح
                       </div>';
                       break;
                       case 'updated':
                       echo '<div class="alert alert-success text-right">
                       تم التعديل بنجاح.
                       </div>';
                       break;
                   }
               } ?>


        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-right">
                    المسارات
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" dir="rtl" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th class='text-right'>م</th>
                                    <th class='text-right'>العنوان</th>
                                    <th class='text-right'>المحتوى</th>
                                    <th class='text-right'>حذف</th>
                                    <th class='text-right'>تعديل</th>
                                    


                                </tr>
                            </thead>
                            <tbody>


                                <?php 
                                        //connection with database
                                require '../connection/conn.php';

                                        //select data from careers table
                                $query = mysqli_query($connect , "SELECT * FROM tracks");
                                $i=1;
                                while ($result = mysqli_fetch_assoc($query)) {
                                    extract($result);
                                    echo "<tr class='gradeU'>
                                    <td class='text-right'>$i</td>
                                    <td class='text-right'>$name</td>
                                    <td class='text-right'>$details</td>

                                    <td><a href='delete_track.php?id=$id' type='button' class='btn btn-danger'>حذف</a></td>

                                    <td><a href='edit_track.php?id=$id' type='button' class='btn btn-warning'>تعديل</a></td>

                                    </tr>";
                                    $i++;
                                }
                                ?>


                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->




<?php 
require 'footer.php';

?>

