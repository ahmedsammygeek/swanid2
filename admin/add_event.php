
<?php 

require 'header.php';
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-right">المناسات</h1>
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
                       default:
              
                       break;
                   }
               } ?>
            <div dir="rtl" class="col-lg-12">
                    <div class="panel panel-default">
                        <div  class="panel-heading">
                            اضافة مناسبة جديدة
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="insert_event.php" method="post">
                                        <div class="form-group">
                                            <label> عنوان المناسة </label>
                                            <input name="title" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label> مكان المناسبة </label>
                                            <input  name="address" class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label> تاريخ المناسبة </label>
                                           <input name="date" type="date" class="form-control text-right" >
                                        </div>
                                        

                                        <div class="form-group">
                                            <label> تفاصيل المناسة</label>
                                           <textarea name="content" id="" cols="30" class="form-control" rows="10"></textarea>
                                        </div>
                                        
                                        
                   
                                        <button type="submit" class="btn btn-primary">اضافة</button>
                                        <button type="reset" class="btn btn-default">اعداة ضبط</button>
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