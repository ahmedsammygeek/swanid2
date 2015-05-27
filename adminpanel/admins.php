
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
          الادمن
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
             case 'error':
             echo '<div class="alert alert-danger text-right">
             خطا فني من فضلك توجه الى الدعم .
             </div>';
             break;

             case 'inserted':
             echo '<div class="alert alert-success text-right">
             تم اضافة البيانات بنجاح.
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
                <th class='text-right'>اسم الادمن</th>
                <th class='text-right'>كلمة السر</th>
                <th class='text-right'>حذفا</th>
           
               

              </tr>
            </thead>
            <tbody>


              <?php 
              //connection with database
              require '../connection/conn.php';

               //select data from careers table
              $query = mysqli_query($connect , "SELECT * FROM admins");
              $i=1;
              while ($result = mysqli_fetch_assoc($query)) {
                extract($result);
                echo "<tr class='gradeU'>
                <td class='text-right'>$i</td>
                <td class='text-right'>$user_name</td>
                <th class='text-right'>**********</th>        
                <td><a href='delete_admin.php?id=$id' type='button' class='btn btn-danger'>حذفا</a></td>
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

