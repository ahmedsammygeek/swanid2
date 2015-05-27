
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
       من فضلك ادخل الاسم ثلاثى.
       </div>';
       break;
       default:

       break;
     }
   } ?>
   <div dir="rtl" class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        اضافة مشارك بمناسبة
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <?php if (isset($_GET['id'])) {
              $id=$_GET['id'];
            } ?>
            <form role="form" method="post" action="insert_participant.php<?php echo "?id=$id"; ?>">
              <div class="form-group">

                <input type="text" name="name" placeholder="ادخل الاسم ثلاثي" class="form-control">

              </div>
              <div class="form-group">

                <input type="number" name="age" placeholder="ادخل عمرك" class="form-control">

              </div>
              <div class="form-group">

                <input type="text" name="email" placeholder="example@gmail.com" class="form-control">

              </div>
              <div class="form-group">

                <input type="number" name="mobile" placeholder="ادخل رقم الهاتف" class="form-control">

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