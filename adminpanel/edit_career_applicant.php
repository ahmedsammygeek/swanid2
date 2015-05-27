<?php 

require 'header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-right">الملتحقين بالوظائف</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">


      <div dir="rtl" class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading ">
              تعديل الملتحقين بالوظائف 
           </div>
           <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
				<?php if (isset($_GET['msg'])) {
				switch ($_GET['msg']) {
					case 'empty_data':
					echo '<div class="alert alert-danger">
					من فضلك قم بادخال جميع البيانات .
					</div>';
					break;
					case 'error':
					echo '<div class="alert alert-danger">
					هناك خطا فنى من فضلك توجه الى الدعم .
					</div>';
					break;
					case 'error_email':
					echo '<div class="alert alert-danger">
					ادخل البريد الالكترونى بالشكل الصحيح .
					</div>';
					break;
					case 'empty_data_name':
					echo '<div class="alert alert-danger">
					ادخل اسم ثلاثي من فضلك و اترك مسافة بعد كل اسم .
					</div>';
					break;
					case 'inserted':
					echo '<div class="alert alert-success">
					تم ادخال البيانات بنجاح
					</div>';
					break;

					default:
							# code...
					break;
				}
			} ?>
			 <?php 
				  //get msg from link 
                 if (isset($_GET['id'])) {
                   $id = $_GET['id'];
               } 
               require '../connection/conn.php';
               $query1 = mysqli_query($connect , "SELECT * FROM applicants_careers WHERE id='$id'");
			   $result = mysqli_fetch_assoc($query1);
               extract($result);
			  $query2 = mysqli_query($connect , "SELECT title FROM careers WHERE id= '$career_id'");
			  $result2 = mysqli_fetch_assoc($query2);
               extract($result2);

               

               ?>
			   <h4></h4>
			<div class="status alert alert-success"  style="display: none"></div>
			<form  role="form" method="post" action="update_career_applicant.php<?php echo "?id=$id"; ?>">
				<label>
					<p>
						:الإسم الثلاثي<span id="star">*</span>
					</p>
					<?php
                     $arr = array("$frist_name","$second_name","$last_name");
                      $name=implode(" ",$arr);
                    ?>
					<input type="text" size="30" maxlength="30" name="name" value="<?php echo "$name"; ?>">
				</label>
				<br>
				<br>
				<label>
					<p>
						:العمر<span id="star">*</span>
					</p>
					<input type="text" size="30" maxlength="30" name="age" value="<?php echo "$age"; ?>">
				</label>
				<br>
				<br>
				<label>
					<p>
						:الإيميل الالكتروني<span id="star">*</span>
					</p>
					<input type="text" size="30" maxlength="30" name="email" value="<?php echo "$email"; ?>">
				</label>
				<br>
				<br>
				<label>
					<p>
						:رقم الجوال<span id="star">*</span>
					</p>
					<input type="text" size="30" maxlength="30" name="mobile" value="<?php echo "$mobile"; ?>" >
				</label>



<br>
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