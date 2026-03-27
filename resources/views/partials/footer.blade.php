<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">روابط سريعة</h4>
                <a class="btn btn-link" href="{{ route('about') }}">من نحن</a>
                <a class="btn btn-link" href="#">اتصل بنا</a>
                <a class="btn btn-link" href="#">سياسة الخصوصية</a>
                <a class="btn btn-link" href="#">الشروط والأحكام</a>
                <a class="btn btn-link" href="#">الأسئلة الشائعة</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">اتصل بنا</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>الرياض، المملكة العربية السعودية</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+966 12 345 6789</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@nosor.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">المعرض</h4>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="{{ asset('assets/img/course-1.jpg') }}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="{{ asset('assets/img/course-2.jpg') }}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="{{ asset('assets/img/course-3.jpg') }}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="{{ asset('assets/img/course-2.jpg') }}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="{{ asset('assets/img/course-3.jpg') }}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="{{ asset('assets/img/course-1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">النشرة الإخبارية</h4>
                <p>اشترك في نشرتنا الإخبارية للحصول على آخر الأخبار والعروض.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="بريدك الإلكتروني">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">اشترك</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="{{ route('home') }}">نسور</a>, جميع الحقوق محفوظة.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="{{ route('home') }}">الرئيسية</a>
                        <a href="#">الكوكيز</a>
                        <a href="#">المساعدة</a>
                        <a href="#">الأسئلة الشائعة</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

