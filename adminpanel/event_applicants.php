
<?php 

require 'header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">الملتحقين </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-right">
                   الملتحقين بالمناسبات
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
                         case 'data_inserted':
                         echo '<div class="alert alert-success text-right">
                         تم اضافة المناسة بنجاح
                         </div>';
                         break;

                         case 'inserted':
                         echo '<div class="alert alert-success text-right">
                         تم اضافة المناسة بنجاح
                         </div>';
                         break;
                         case 'updated':
                         echo '<div class="alert alert-success text-right">
                         تم التعديل بنجاح.
                         </div>';
                         break;
                     }
                 } ?>
                 <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" dir="rtl" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class='text-right'>م</th>
                                <th class='text-right'>المناسبة</th>
                                <th class='text-right'>الاسم الاول</th>
                                <th class='text-right'>الاسم الثانى</th>
                                <th class='text-right'>الاسم الاخير</th>
                                <th class='text-right'>العمر </th>
                                <th class='text-right'>البريد  </th>
                                <th class='text-right'>الجوال </th>
                                <th class='text-right'>الؤهل الدراسى </th>
                                <th class='text-right'>التوصيف </th>
                                <th class='text-right'>رقم الهوية </th>
                                <th class='text-right'>حذف </th>
                                <th class='text-right'>تعديل </th>

                            </tr>
                        </thead>
                        <tbody>


                            <?php 
                                        //connection with database
                            require '../connection/conn.php';

                                        //select data from careers table
                                        //
                            $sql = "SELECT a_e.* ,  a_e.id as applicant_id , e.title FROM applicants_events as a_e LEFT JOIN events as e  ON e.id = a_e.event_id";

                            $query = mysqli_query($connect , $sql);
                            $i=1;
                            while ($result = mysqli_fetch_assoc($query)) {
                                extract($result);
                                echo "<tr class='gradeU'>
                                <td class='text-right'>$i</td>
                                <td class='text-right'>$title</td>
                                <td class='text-right'>$frist_name</td>
                                <td class='text-right'>$second_name</td>
                                <td class='text-right'>$last_name</td>
                                <td class='text-right'>$age</td>
                                <td class='text-right'>$email</td>
                                <td class='text-right'>$mobile</td> ";


                                switch ($academic_qualification) {
                                    case '1':
                                    echo "<td class='text-right'>ثانوى</td>";
                                    break;

                                    case '2':
                                    echo "<td class='text-right'>فنى</td>";
                                    break;


                                    case '3':
                                    echo "<td class='text-right'>جامعى</td>";
                                    break;


                                    case '4':
                                    echo "<td class='text-right'> لم يتم التحديد</td>";
                                    break;

                                    default:
                            					# code...
                                    break;
                                }

                                echo "
                                <td class='text-right'>$description</td>  
                                <td class='text-right'>$card_id</td>  
                                <td class='text-right'>
                                <a href='delete_applicant.php?id=".$applicant_id."&type=event' type='button' class='btn btn-danger'>حذف</a>
                                </td> 
                                <td><a href='edit_event_applicant.php?id=$id' type='button' class='btn btn-warning'>تعديل</a></td>

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

