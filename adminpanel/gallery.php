
<?php 

require 'header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">swanid</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-right">
                    المعارض
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">
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
                       تم الاضافة بنجاح.
                       </div>';
                       break;


                       case 'updated':
                       echo '<div class="alert alert-success text-right">
                       تم التعديل بنجاح.
                       </div>';
                       break;
                       case 'error':
                       echo '<div class="alert alert-danger text-right">
                       خطا فني من فضلك توجه الى الدعم .
                       </div>';
                       break;
                       default:
              
                       break;
                   }
               } ?>
               <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" dir="rtl" id="dataTables-example">
                    <thead>
                        <tr>
                            <th class='text-right'>م</th>
                            <th class='text-right'>العنوان</th>
                            <th class='text-right'>اسم المعرض</th>
                            
                            <th class='text-right'>حذفا</th>
                            <th class='text-right'>عدل</th>

                        </tr>
                    </thead>
                    <tbody>


                        <?php 
                                        //connection with database
                        require '../connection/conn.php';

                                        //select data from careers table
                        $query = mysqli_query($connect , "SELECT * FROM gallery");
                        $i=1;
                        while ($result = mysqli_fetch_assoc($query)) {
                            extract($result);
                            echo "<tr class='gradeU'>
                            <td class='text-right'>$i</td>
                            <td class='text-right'>$address</td>
                            <td class='text-right'>$title</td>
                            <td><a href='delete_gallery.php?id=$id' type='button' class='btn btn-danger'>حذفا</a></td>
                            <td><a href='edit_gallery.php?id=$id' type='button' class='btn btn-warning'>عدل</a></td>

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

