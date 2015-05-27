
<?php 

require 'header.php';
?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">الداعمين</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">

    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading text-right">
          الداعمين
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
             تم الاضافة بنجاح بنجاح.
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
                <th class='text-right'>المبلغ المدفوع</th>
                <th class='text-right'>الجهه الداعمة</th>
                <th class='text-right'>الاسم الاول</th>
                <th class='text-right'>الاسم الثاني</th>
                <th class='text-right'>الاسم الثالث</th>
                <th class='text-right'>رقم الهوية</th>
                <th class='text-right'>الموبايل</th>
                <th class='text-right'>الايميل</th>
                <th class='text-right'>نوع الدعم</th>
                <th class='text-right'>حذف</th>
                <th class='text-right'>تعديل</th>

              </tr>
            </thead>
            <tbody>


              <?php 
              //connection with database
              require '../connection/conn.php';

               //select data from careers table
              $query = mysqli_query($connect , "SELECT * FROM sponsor");
              $i=1;
              while ($result = mysqli_fetch_assoc($query)) {
                extract($result);
               switch ($type) {
                 case '1':
                   $type = "دعم مسارات";
                   break;
                   case '2':
                   $type = "دعم مناسبات";
                   break;
                   case '3':
                   $type = "دعم وظائف";
                   break;
                   case '4':
                   $type = "دعم معرض";
                   break;
                 
                 default:
                   $type = "لايوجد جهه محددة" ;
                   break;
               }
                echo "<tr class='gradeU'>
                <td class='text-right'>$i</td>
                <td class='text-right'>$money</td>
                <td class='text-right'>$sponsor_name</td>
                <td class='text-right'>$frist_name</td>
                <td class='text-right'>$second_name</td>
                <td class='text-right'>$last_name</td>
                <td class='text-right'>$card_id</td>
                <td class='text-right'>$mobile</td>
                <td class='text-right'>$email</td>
                <td class='text-right'>$type</td>

                <td><a href='delete_sponser.php?id=$id' type='button' class='btn btn-danger'>حذف</a></td>
                <td><a href='edit_sponser.php?id=$id' type='button' class='btn btn-warning'>تعديل</a></td>

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

