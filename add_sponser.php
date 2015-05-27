<?php require 'header.php';?>
<h3 class="text-center">اهلا و مرحبا بك عزيزي الداعم الى مشروعنا</h3>
<hr>
<hr>
<h4 class="text-center"> ...بدعمكم نستمر</h4>
<p class="text-center">
دعمكم لمشروع سواند يساعدنا على الاستمرار في تقديم خدماتنا ونشر الفائده للجميع ...
للمشاركه في دعم برنامج سواند الرجاء تعبئه النموذج التالي</p>

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
					من فضلك قم بادخال الاسم ثلاثي و اترك مسافى بعد كل اسم .
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
			<div class="status alert alert-success"  style="display: none">
				
			</div>
			<form method="post" action="insert_sponser.php" name="sponser_Form">
				
				<label>
					<p>
						:اسم الجهه الداعمه<span id="star">*</span>
					</p>
					<input type="text" size="30" maxlength="30" name="sponser_name">
				</label>
				<br>
				<br>
					<label>
					<p>
						:اسم الراعي ثلاثي <span id="star">*</span>
					</p>
					<input type="text" size="30" maxlength="30" name="third_name">
				</label>
				<br>
				<br>
					<label>
					<p>
						:رقم الهوية <span id="star">*</span>
					</p>
					<input type="text" size="30" maxlength="30" name="card_id">
				</label>
				<br>
				<br>
				
				<label>
					<p>
						:البريد الالكتروني<span id="star">*</span>
					</p>
					<input type="text" size="30" maxlength="30" name="email">
				</label>
				<br>
				<br>
				<label>
					<p>
						:رقم الجوال للتواصل<span id="star">*</span>
					</p>
					<input type="text" size="30" maxlength="30" name="mobile">
				</label>
				<br>
				<br>
				<label>
					<p>
						:المبلغ المراد المساهمه به لدعم سواند<span id="star">*</span>
					</p>
					<input type="text" size="30" maxlength="30" name="money">
				</label>
				
				<br>
				<br>

				<label>
					<p>
						:البرنامج المراد دعمه<span id="star">*</span>
					</p>
					<select class="form-control text-right" name="type">
						<option value="1">دعم مسارات</option>
						<option value="2">دعم مناسبات</option>
						<option value="3">دعم وظائف</option>
						<option value="4">دعم معرض</option>
					</select>
					
				</label>
				<br>
				<br>
				<input type="submit" class="btn btn-primary btn-lg" value="تسجيل" name="submit">
			</form>
			
		</div><!--/.col-sm-8-->

	</div>
</section><!--/#contact-page-->



<?php require 'footer.php'; ?>