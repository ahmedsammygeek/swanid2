
<?php 

require 'header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-right">مساقات</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

        <div dir="rtl" class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading ">
                   تعديل مساق 
                </div>
                <div class="panel-body">
                    <div class="row">



                         <?php 
                  if (isset($_GET['msg'])) {
                   switch ($_GET['msg']) {
                       
                      

                       case 'empty_date':
                       echo '<div class="alert alert-danger text-right">
                       من فضلك ادخل جميع البيانات المطلوبة.
                       </div>';
                       break;
                       default:
              
                       break;
                   }
               } ?>
                        <div class="col-lg-12">
                            <?php //get id from link
                            if (isset($_GET['id'])) {
                                 $id=$_GET['id'];
                                 //connection with database
                                 require '../connection/conn.php';
                                 //select old data from db 
                                 $query = mysqli_query($connect , "SELECT * FROM tracks WHERE id = '$id' ");
                                 $result=mysqli_fetch_assoc($query);
                                 extract($result);
                             } ?>
                            <form role="form" method="post" action="update_track.php<?php echo "?id=$id"; ?>">
                                <div class="form-group">
            
                                    <input type="text" name="title" value="<?php echo "$name"; ?>" class="form-control">
                                   
                                </div>
                                <div class="form-group">
                                    <textarea type="text" name="content" class="form-control" ><?php echo "$details"; ?></textarea>
                                </div>

                                <button type="submit" name="submit" class="btn btn-default">تعديل</button>
                               
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->

                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
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