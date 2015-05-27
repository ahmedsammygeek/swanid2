
<?php 


 //get id from link
if (isset($_GET['id'])) {
 $id=$_GET['id'];
// conection with database
 require '../connection/conn.php';
 //select old data from db
 $query = mysqli_query($connect , "SELECT * FROM certification_and_awards WHERE id = '$id' ");
 $result = mysqli_fetch_assoc($query);
 extract($result);

 require 'header.php';

} 
?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header text-right">الجوائز</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">


    <div dir="rtl" class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading ">
          اضافة جائزة جديد
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
                 case 'error_email':
                 echo '<div class="alert alert-danger text-right">
                 من فضلك ادخل الاميل بالشكل الصحيح example@gmail.com
                 </div>';
                 break;
                 default:

                 break;
               }
             } ?>

             <form role="form" method="post" action="update_award.php?id=<?php echo $id; ?>">
              <div class="form-group">

                <input type="text" name="title" value="<?php echo $title ?>" class="form-control">

              </div>
              <div class="form-group">
                <textarea name="content"   class="form-control" id="" cols="30" rows="10"><?php echo $description ?></textarea>

              </div>
               <div class="form-group">
                <label>نوع الدعم</label>
                <select class="form-control" name="event_id">
                  <?php 
                  require '../connection/conn.php';
                  $query=mysqli_query($connect , "SELECT * FROM events");
                  while ($result=mysqli_fetch_assoc($query)) {
                     extract($result);
                     echo "<option value='$id'>$title</option>";
                   } ?>
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