
<?php 

require 'header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-right">المشاركين</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

        <div dir="rtl" class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   تعديل مشارك 
                </div>
                <div class="panel-body">
                    <div class="row">

                         <?php 
                  if (isset($_GET['msg'])) {
                   switch ($_GET['msg']) {
                       
                       case 'error':
                       echo '<div class="alert alert-danger text-right">
                       خطا فني من فضلك توجه الى الدعم .
                       </div>';
                       break;

                       case 'empty_data':
                       echo '<div class="alert alert-danger text-right">
                       من فضلك ادخل جميع البيانات المطلوبة.
                       </div>';
                       break;
                       default:
              
                       break;
                   }
               } ?>
                        <div class="col-lg-12">
                            <?php if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                //connection with database
                                require '../connection/conn.php';
                                $query = mysqli_query($connect , "SELECT * FROM participants WHERE id = '$id' ");
                                $result=mysqli_fetch_assoc($query);
                                extract($result);
                                $array = array("$frist_name" , "$second_name" , "$last_name");
                                $the_name = implode(" " , $array);
                            } ?>
                            <form role="form" method="post" action="update_participant.php<?php echo "?id=$id";  ?>">
                                <div class="form-group">

                                    <input type="text" name="name" value="<?php echo "$the_name"; ?>" class="form-control">

                                </div>
                                <div class="form-group">

                                    <input type="number" name="age" value="<?php echo "$age"; ?>" class="form-control">

                                </div>
                                <div class="form-group">

                                    <input type="text" name="email" value="<?php echo "$email"; ?>" class="form-control">

                                </div>
                                <div class="form-group">

                                    <input type="number" name="mobile" value="<?php echo "$mobile"; ?>" class="form-control">

                                </div>
                                 <div class="form-group">

                                    <input type="date" name="date" value="<?php echo "$date"; ?>" class="form-control text-right">

                                </div>
                                <div class="form-group text-right">
                                    <label>المؤهل الدراسي</label>
                                    <select class="form-control text-right" name="academic_qualification">
                                        <option value="1">ثانوي</option>
                                        <option value="2">دبلوم</option>
                                        <option value="3">جامعي</option>
                                        <option value="4">غير ذلك</option>
                                    </select>
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