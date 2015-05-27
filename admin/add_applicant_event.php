<?php require 'header.php'; ?>
<section id="contact-page" class="container">
	<div class="row" dir="rtl">
		<div class="col-sm-8">
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
			<h4></h4>
			<div class="status alert alert-success"  style="display: none"></div>
			<form  method="post" role="form" action="insert_applicant_event.php">
				<label>
					<p>
						:الإسم الثلاثي<span id="star">*</span>
					</p>
					<input type="text" size="30" maxlength="30" name="name">
				</label>
				<br>
				<br>
				<label>
					<p>
						:العمر<span id="star">*</span>
					</p>
					<input type="text" size="30" maxlength="30" name="age">
				</label>
				<br>
				<br>
				<label>
					<p>
						:الإيميل الالكتروني<span id="star">*</span>
					</p>
					<input type="text" size="30" maxlength="30" name="email">
				</label>
				<br>
				<br>
				<label>
					<p>
						:رقم الجوال<span id="star">*</span>
					</p>
					<input type="text" size="30" maxlength="30" name="mobile">
				</label>
				<br>
				<br>

				<label>
					<p>
						:رقم الهوية <span id="star">*</span>
					</p>
					<input type="text" size="30" maxlength="30" name="card_number">
				</label>


				<br>
				<br>
				<label>
					<p>
						:المؤهل الدراسي<span id="star">*</span>
					</p>
					<select name="qualification" class="form-control text-right" id="">
						<option value="1">ثانوي</option>
						<option value="2">فني</option>
						<option value="3">جامعي</option>
						<option value="4">غير ذلك</option>
					</select>
				</label>
				<br>
				<br>

				<br>
				<br>
				<label>
					<p>
						:المناسبة المطلوب الالتحاق به<span id="star">*</span>
					</p>
					<select name="event_id" class="form-control text-right" id="">
						<?php require '../connection/conn.php';
						$query=mysqli_query($connect , "SELECT id,title FROM events");
						while ($result=mysqli_fetch_assoc($query)) {
							extract($result);
							echo "<option value='$id'>$title</option>";
						} ?>
						
					</select>
				</label>
				<br>
				<br>
				<label>
					<p>
						:المناسبة المطلوب الالتحاق به<span id="star">*</span>
					</p>

					<textarea name="description" id="" cols="30" rows="10"></textarea>
					
				</label>


<br>
				
				<button type="submit" class="btn btn-primary btn-lg">تسجيل</button>
				

			</form>
		</div><!--/.col-sm-8-->

	</div>
</section><!--/#contact-page-->




<?php require 'footer.php'; ?>