<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">روابط سريعة</h4>
                <a class="btn btn-link" href="{{ route('home') }}">الرئيسية</a>
                <a class="btn btn-link" href="{{ route('about') }}">من نحن</a>
                <a class="btn btn-link" href="{{ route('schools.index') }}">المدارس</a>
                <a class="btn btn-link" href="{{ route('events.index') }}">الأحداث</a>
                <a class="btn btn-link" href="{{ route('camps.index') }}">الكامبات</a>
                <a class="btn btn-link" href="{{ route('courses.index') }}">الكورسات</a>
                <a class="btn btn-link" href="{{ route('calendar.index') }}">التقويم</a>
                <a class="btn btn-link" href="{{ route('contact.show') }}">اتصل بنا</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">اتصل بنا</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt ms-3"></i>cairo , egypt</p>
                <p class="mb-2"><i class="fa fa-phone-alt ms-3"></i><span dir="ltr">+20 121 117 7391</span></p>
                <p class="mb-2"><i class="fa fa-envelope ms-3"></i>info@nosor.com</p>
                <div class="d-flex pt-2">
                    {{-- <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a> --}}
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/EaglesTeam.Ministry"><i class="fab fa-facebook-f"></i></a>
                    {{-- <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a> --}}
                    {{-- <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a> --}}
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">تواصل سريع</h4>
                <p class="mb-3">اترك اسمك ورقمك وسنتواصل معك قريبًا.</p>
                <form action="{{ route('contact.store') }}" method="POST" class="mx-auto" style="max-width: 400px;">
                    @csrf
                    <div class="mb-2">
                        <input
                            class="form-control border-0 w-100 py-3"
                            type="text"
                            name="name"
                            placeholder="الاسم *"
                            required
                        >
                    </div>
                    <div class="mb-2">
                        <input
                            class="form-control border-0 w-100 py-3"
                            type="text"
                            name="phone"
                            dir="ltr"
                            placeholder="رقم الهاتف *"
                            required
                        >
                    </div>
                    <input type="hidden" name="message" value="رسالة من نموذج التواصل السريع في الفوتر">
                    <button type="submit" class="btn btn-primary w-100 py-3">إرسال</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="{{ route('home') }}">نسور</a>, جميع الحقوق محفوظة.
                </div>
                {{-- <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="{{ route('home') }}">الرئيسية</a>
                        <a href="{{ route('about') }}">من نحن</a>
                        <a href="{{ route('courses.index') }}">الكورسات</a>
                        <a href="{{ route('contact.show') }}">اتصل بنا</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

