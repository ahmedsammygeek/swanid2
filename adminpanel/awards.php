
<?php 

require 'header.php';
?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">الجوائز</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">

    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading text-right">
          الجوائز
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
             case 'updated':
             echo '<div class="alert alert-success text-right">
             تم التعديل بنجاح.
             </div>';
             break;

             case 'data_inserted':
             echo '<div class="alert alert-success text-right">
             تم الاضافة  بنجاح.
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
                <th class='text-right'>المحتوى</th>
                <th class='text-right'>الايفنت</th>
                <th class='text-right'>حذفا</th>
                <th class='text-right'>عدل</th>

              </tr>
            </thead>
            <tbody>


              <?php 
                 //connection with database
              require '../connection/conn.php';

                //select data from careers table
              $query = mysqli_query($connect , "SELECT * FROM certification_and_awards");
              $i=1;
              while ($result = mysqli_fetch_assoc($query)) {
                extract($result);
                $query2=mysqli_query($connect , "SELECT title FROM events WHERE id='$event_id' ");
                $result2=mysqli_fetch_assoc($query2);
                $event_name = $result2['title'];

                echo "<tr class='gradeU'>
                <td class='text-right'>$i</td>
                <td class='text-right'>$title</td>
                <td class='text-right'>$description</td>
                <td class='text-right'>$event_name</td>
                <td><a href='delete_award.php?id=$id' type='button' class='btn btn-danger'>حذفا</a></td>
                <td><a href='edit_award.php?id=$id' type='button' class='btn btn-warning'>عدل</a></td>

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

