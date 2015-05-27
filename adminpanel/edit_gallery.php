
<?php 

require 'header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-right">المعارض</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

        <div dir="rtl" class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    تعديل معرض جديد
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php 
                            //get msg from link 
                            if (isset($_GET['id'])) {
                                 $id = $_GET['id'];
                             } 
                             require '../connection/conn.php';
                             $query = mysqli_query($connect , "SELECT * FROM gallery WHERE id = '$id' ");

                             $result = mysqli_fetch_assoc($query);
                             extract($result);

                             ?>
                            <form role="form" method="post" action="update_gallery.php?id=<?php echo $id; ?>">
                                <div class="form-group">
            
                                    <input type="text" name="title" value="<?php echo $title ?>" class="form-control">
                                   
                                </div>
                                <div class="form-group">
            
                                    <input type="text" name="address" value="<?php echo $address ?>" class="form-control">
                                   
                                </div>
                               
                                <button type="submit" name="submit" class="btn btn-default">تعديل</button>
                                <button type="reset" class="btn btn-default">مسح</button>
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