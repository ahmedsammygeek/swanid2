<?php 
require 'header.php';

require 'connection/conn.php';

$old_events = mysqli_query($connect, "SELECT * FROM events WHERE DATEDIFF(date,NOW()) > 0")

?>


<section dir="rtl" id="services" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        
                        <div class="media-body">
                            <h3 class="media-heading">الهدف</h3>
                            <p>الهدف هو اثراء المجمتع و توعية الشبابا و مساعدتهم على النهوض و الشتراك فى التكنولوجيا و تطوينها.</p>
                        </div>

                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                       
                        <div class="media-body">
                            <h3 class="media-heading">الروئية </h3>
                            <p>روئيتنا هيا ان ننمو بمستوى الافارد داخل المجتع و خصوصا الشبابا عن ريق عقد التمراتت و اشراكهم فى الحياة العملية عن طريق تدقمي فرص عمل و تدريب متواصل لهم .</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                       
                        <div class="media-body">
                            <h3 class="media-heading">التوجة </h3>
                            <p>التوجة فى الفترة الحالية يكون عن طريق انشاء مشاريع و جعل الشباب مشاركين فيها بنسبة 90 % و ايضا تمكينهم من مسايرت  و مواكب سوق العمل .</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section>

    <section id="testimonial" class="alizarin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                        <h2>ماذا يقول بعض المشاركين عنا </h2>
                        <p>هذة بعض اراء المشاريكن فى نشاطتنا و  مؤتمراتنا و نريد ان نريكم اياها .</p>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-6">
                            
                            <blockquote>
                                <p>هذا هو المؤتمر الرابع الذى احضرة و كل مرة يذداد شغفى و اصرارى على الاكمال حيث انهم يوفروا كثيرا جدا من الفرص التى عن طريقها انمى من مهارااتى و مستوايا المهنى </p>
                                <small> ياسر بن جمال </small>
                            </blockquote>
                        </div>

                        <div class="col-md-6">
                            <blockquote>
                                <p>الحمد لله الذى وفقنى الى هذة المباردة لقد استفت كثيرا مها  و ايضا سوف اقوم بالمتابعة  و الاشتراك فى الورش القدادمة</p>
                                <small> محمد على </small>
                            </blockquote>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--/#main-slider-->



<?php 

require 'footer.php';
?>