
<?php 

require 'header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-right">الداعمين</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">


      <div dir="rtl" class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading ">
                اضافة داعم جديد
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
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
                             case 'empty_data_name':
                             echo '<div class="alert alert-danger text-right">
                             من فضلك ادخل اسم المورد الثلاثي و اترك مسافة بعد كل اسم
                             </div>';
                             break;
                             case 'error_email':
                             echo '<div class="alert alert-danger text-right">
                             من فضلك ادخل الاميل بالشكل الصحيح example@gmail.com
                             </div>';
                             break;
                             default:

                             break;
                         }
                     } ?>

                     <form role="form" method="post" action="insert_sponser.php">
                        <div class="form-group">

                            <input type="text" name="money" placeholder="ادخل مبلغ المدفوع" class="form-control">

                        </div>
                        <div class="form-group">

                            <input type="text" name="sponser_name" placeholder="اسم الجهه الداعمة" class="form-control">

                        </div>
                        <div class="form-group">

                            <input type="text" name="third_name" placeholder="اسم الداعم الثلاثي" class="form-control">

                        </div>
                        <div class="form-group">

                            <input type="text" name="card_id" placeholder="رقم هوية الداعم" class="form-control">

                        </div>
                       
                        <div class="form-group">

                            <input type="text" name="mobile" placeholder="هاتف الداعم" class="form-control">

                        </div>
                        <div class="form-group">

                            <input type="text" name="email" placeholder="ايميل الداعم" class="form-control">

                        </div>
                        <div class="form-group text-right">
                            <label>نوع الدعم</label>
                            <select class="form-control text-right" name="type">
                                <option value="1">دعم مسارات</option>
                                <option value="2">دعم مناسبات</option>
                                <option value="3">دعم وظائف</option>
                                <option value="4">دعم معرض</option>
                            </select>
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