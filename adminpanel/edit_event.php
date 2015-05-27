
<?php 

require 'header.php';
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-right">المناسبات</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
             
            <div dir="rtl" class="col-lg-12">
                    <div class="panel panel-default">
                        <div  class="panel-heading">
                            تعديل المناسبة
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php //get id from link
                                    if (isset($_GET['id'])) {
                                         $id=$_GET['id'];
                                         // conection with database
                                         require '../connection/conn.php';
                                         //select old data from db
                                         $query = mysqli_query($connect , "SELECT * FROM events WHERE id = '$id' ");
                                         $result = mysqli_fetch_assoc($query);
                                         extract($result);

                                     } ?>
                                    <form role="form" action="update_event.php<?php echo "?id=$id"; ?>" method="post">
                                        <div class="form-group">
                                            <label> عنوان المناسة </label>
                                            <input name="title" value="<?php echo "$title"; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label> مكان المناسبة </label>
                                            <input  name="address" class="form-control" value="<?php echo "$address"; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label> تاريخ المناسبة </label>
                                           <input name="date" type="date" value="<?php echo "$date"; ?>" class="form-control text-right" >
                                        </div>
                                        

                                        <div class="form-group">
                                            <label> تفاصيل المناسة</label>
                                           <textarea name="content" id="" cols="30" class="form-control" rows="10"><?php echo "$details"; ?></textarea>
                                        </div>
                                        
                                        
                   
                                        <button type="submit" class="btn btn-primary">تعديل</button>
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