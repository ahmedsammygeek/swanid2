
<?php 

require 'header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-right">مسارات</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

       <?php 
       if (isset($_GET['msg'])) {
         switch ($_GET['msg']) {
             
             case 'error':
             echo '<div class="alert alert-danger text-right">
             خطا فني من فضلك توجه الى الدعم .
             </div>';
             break;

             case 'empty_date':
             echo '<div class="alert alert-danger text-right">
             من فضلك ادخل جميع البيانات المطلوبة.
             </div>';
             break;
          
         }
     } ?>
     <div dir="rtl" class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading ">
                اضافة مسار جديد
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" method="post" action="insert_track.php">
                            <div class="form-group">
                                
                                <input type="text" name="title" placeholder="اضافة عنوان مسار جديد" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="content" class="form-control" placeholder="ادخل تفاصيل المسار"></textarea>
                            </div>

                            <button type="submit" name="submit" class="btn btn-default">اضافة</button>
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