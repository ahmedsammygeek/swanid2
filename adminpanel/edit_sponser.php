
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
               تعديل الداعم
           </div>
           <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                  <?php 

                //get msg from link 
                 if (isset($_GET['id']) || isset($_GET['msg'])) {
                   $id = $_GET['id'];
               } 
               require '../connection/conn.php';
               $query = mysqli_query($connect , "SELECT * FROM sponsor WHERE id = '$id' ");

               $result = mysqli_fetch_assoc($query);
               extract($result);
               $arr = array("$frist_name" , "$second_name" , "$last_name");
               $the_name=implode(" ", $arr);

               ?>


               <form role="form" method="post" action="update_sponser.php<?php echo "?id=$id"; ?>">
                <div class="form-group">

                    <input type="text" name="money" value="<?php echo "$money"; ?>" class="form-control">

                </div>
                <div class="form-group">

                    <input type="text" name="sponser_name" value="<?php echo "$sponsor_name"; ?>"  class="form-control">

                </div>
                 <div class="form-group">

                            <input type="text" name="third_name" value="<?php echo "$the_name"; ?>" class="form-control">

                        </div>
                        <div class="form-group">

                            <input type="text" name="card_id" value="<?php echo "$card_id"; ?>" class="form-control">

                        </div>
                <div class="form-group">

                    <input type="number" name="mobile" value="<?php echo "$mobile"; ?>" class="form-control">

                </div>
                <div class="form-group">

                    <input type="text" name="email" value="<?php echo "$email"; ?>" class="form-control">

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