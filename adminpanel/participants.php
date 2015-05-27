
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
          الوظائف
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


              case 'inserted':
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
                <th class='text-right'>الاسم الاول</th>
                <th class='text-right'>الاسم الثاني</th>
                <th class='text-right'>الاسم الاخير</th>
                <th class='text-right'>العمر</th>
                <th class='text-right'>البريد الالكتروني</th>
                <th class='text-right'>رقم الهاتف</th>
                <th class='text-right'>المؤهل الدراسي</th>
                <th class='text-right'>التاريخ</th>
                <th class='text-right'>حذف</th>
                <th class='text-right'>تعديل</th>

              </tr>
            </thead>
            <tbody>


              <?php 
              //connection with database
              require '../connection/conn.php';

               //select data from careers table
              $query = mysqli_query($connect , "SELECT * FROM participants");
              $i=1;
              while ($result = mysqli_fetch_assoc($query)) {
                extract($result);
                switch ($academic_qualification) {
                  case '1':
                  $academic_qualification = "ثانوي";
                  break;
                  case '2':
                  $academic_qualification = "دبلوم";
                  break;
                  case '3':
                  $academic_qualification = "جامعي";
                  break;
                  case '4':
                  $academic_qualification = "غير ذلك";
                  break;
                  
                  default:
                    # code...
                  break;
                }
                echo "<tr class='gradeU'>
                <td class='text-right'>$i</td>
                <td class='text-right'>$frist_name</td>
                <th class='text-right'>$second_name</th>
                <th class='text-right'>$last_name</th>
                <th class='text-right'>$age</th>
                <th class='text-right'>$email</th>
                <th class='text-right'>$mobile</th>
                <th class='text-right'>$academic_qualification</th>
                <td class='text-right'>$date</td>          
                <td><a href='delete_participant.php?id=$id' type='button' class='btn btn-danger'>حذف</a></td>
                <td><a href='edit_participant.php?id=$id' type='button' class='btn btn-warning'>تعديل</a></td>

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

