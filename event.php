<?php 
require 'header.php';
?>
<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>منطقة الاحداث</h1>
                
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">الرئيسية</a></li>
                    <li class="active">الاحداث</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/#title-->     

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="center gap">
                    <h2>اجدد الاحداث</h2>
                    <p>نرحب بكم دائما ان تنضموا للاداث الخاصة بنا</p>
                </div>                
            </div>
        </div>
        <div dir="rtl" class="blog-item">

            <div class="blog-content">
                <a href="blog-item.html"><h3>عنوان الحدث</h3></a>
                
                <p>محتوى الحدث</p>
              
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="center">
                    <h2>هل تريد ان تكون راعى لهذا الحدث</h2>
                    <p>نرحب بكم كى تكونوا رعاة لهذا الحدث  و تستطيع ذلك عن طريق اضافة اليانات ادناة</p>
                </div>
                <div class="gap"></div>
                <div class="row">
                   <section id="registration" class="container">
                    <form class="center" role="form">
                        <fieldset class="registration-form">
                            <div class="form-group">
                                <input type="text" id="username" name="username" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="email" name="email" placeholder="E-mail" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" id="password_confirm" name="password_confirm" placeholder="Password (Confirm)" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-md btn-block">Register</button>
                            </div>
                        </fieldset>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>
</section><!--/#services-->
<?php require 'footer.php'; ?>