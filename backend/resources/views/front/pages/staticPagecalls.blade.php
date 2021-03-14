@extends('layouts.frontlayout.frontpage')
@section('content')
 <!-- page content start -->
 <div id="content pt-5">
    <div id="">
        <div class="text-center myaya2">
            <div class="">
                <h4 class="btn" style="margin-top: 40px;margin-left: 900px">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                            <li aria-current="page" class="breadcrumb-item active">اتصل بنا</li>
                        </ol>
                    </nav>
                </h4>
            </div>

        </div>
        <div id="contact" class="container">
            <div class="row text-center">
                <div class="col-md-8">
                        <div class="mt-5 text-center py-2 mb-5" style="background-color: #0b3b65;color:white">
                            <h2>نحن هنا من أجل الطالب</h2>
                        </div>
                        <form class="mb-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">الاسم الأول</label>
                                        <input id="firstname" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">الاسم الأخير</label>
                                        <input id="lastname" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">الايميل</label>
                                        <input id="email" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject">العنوان</label>
                                        <input id="subject" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">الرسالة</label>
                                        <textarea id="message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn" style="background-color: #0b3b65;color: white"><i class="fa fa-envelope-o"></i> أرسل الرسالة</button>
                                </div>
                            </div>
                        </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <section class="bar mb-0">
                        <div class="card">
                            <div class="card-header" style="color: white">
                                <h3 class="">عنواننا</h3>
                            </div>
                            <div class="card-body">
                                <p class="text-sm">الجامعة الإسلامية<br>كلية الهندسة<br>مبنى القدس<br>الطابق الخامس<br><strong>K315</strong></p>
                                <h3 class="text-uppercase">أو تواصل معنا عبر</h3>
                                <p class="text-muted text-sm">كن على ثقة أننا هنا من أجلك</p>
                                <ul class="text-sm list-unstyled">
                                    <li><strong><a style="color: #0b3b65" href="#">:جوال</a></strong> 0592309501</li>
                                    <li ><strong><a style="color: #0b3b65" href="mailto:">computer@engineer.com</a></strong></li>

                                </ul>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection