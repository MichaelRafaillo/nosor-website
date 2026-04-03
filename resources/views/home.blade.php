@extends('layouts.app')

@section('title', 'نسور - منصة التعلم الإلكتروني')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('assets/img/jesus-christ-cover.jpg') }}" alt="يسوع المسيح" fetchpriority="high" loading="eager" decoding="async">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-11 col-lg-9 text-center">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">كلمة الحياة</h5>
                                <h1 class="display-5 text-white animated slideInDown">فَاذْهَبُوا وَتَلْمِذُوا جَمِيعَ الْأُمَمِ وَعَمِّدُوهُمْ بِاسْمِ الآبِ وَالابْنِ وَالرُّوحِ الْقُدُسِ.</h1>
                                <p class="fs-5 text-white mb-4 pb-2">"متّى 28:19"</p>
                                <div class="d-flex justify-content-center flex-wrap gap-2">
                                    <a href="{{ route('about') }}" class="btn btn-primary py-md-3 px-md-5 animated slideInLeft">اقرأ المزيد</a>
                                    <a href="{{ route('contact.show') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">اتصل بنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('assets/img/jesus-christ-cover2.jpg') }}" alt="يسوع المسيح" loading="lazy" decoding="async">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-11 col-lg-9 text-center">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">كلمة الحياة</h5>
                                <h1 class="display-5 text-white animated slideInDown">فَاذْهَبُوا وَتَلْمِذُوا جَمِيعَ الْأُمَمِ وَعَمِّدُوهُمْ بِاسْمِ الآبِ وَالابْنِ وَالرُّوحِ الْقُدُسِ.</h1>
                                <p class="fs-5 text-white mb-4 pb-2">"متّى 28:19"</p>
                                <div class="d-flex justify-content-center flex-wrap gap-2">
                                    <a href="{{ route('about') }}" class="btn btn-primary py-md-3 px-md-5 animated slideInLeft">اقرأ المزيد</a>
                                    <a href="{{ route('contact.show') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">اتصل بنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">خدمتنا</h6>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3 h-100">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">التدريب</h5>
                            <p class="mb-0">نُعدّ المؤمنين ليكونوا مستعدين للشهادة بإيمانهم، قادرين أن يخدموا بثقة ومحبة.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3 h-100">
                        <div class="p-4">
                            <i class="fa fa-3x fa-bullhorn text-primary mb-4"></i>
                            <h5 class="mb-3">الكرازة</h5>
                            <p class="mb-0">نساعد الكنائس على تنظيم أحداث كرازية متكاملة بروح الصلاة والفريق المتحد.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3 h-100">
                        <div class="p-4">
                            <i class="fa fa-3x fa-users text-primary mb-4"></i>
                            <h5 class="mb-3">التلمذة</h5>
                            <p class="mb-0">نرافق النفوس الجديدة في رحلة إيمانية ثابتة حتى تنمو وتخدم الآخرين.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('assets/img/close-up-jesus-portrait.jpg') }}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">من نحن</h6>
                    <h1 class="mb-4">من نحن</h1>
                    <p class="mb-4">نحن فريق خَدَمي يؤمن بأن الكرازة هي قلب رسالة الكنيسة، وأن كل مؤمن مدعوّ ليشارك الآخرين بمحبة المسيح.</p>
                    <p class="mb-4">نعمل على تدريب الأفراد داخل الكنائس، ونساعد في تنفيذ الأحداث الكرازية، ونتابع النفوس الجديدة في مسيرة تلمذة حقيقية داخل الكنيسة المحلية.</p>
                    <div class="mb-4 p-4 bg-light rounded border-end border-4 border-primary">
                        <p class="mb-0 text-center" style="font-style: italic; font-size: 1.1rem; line-height: 1.8;">
                            "فَاذْهَبُوا وَتَلْمِذُوا جَمِيعَ الْأُمَمِ وَعَمِّدُوهُمْ بِاسْمِ الآب وَالابْنِ وَالرُّوحِ الْقُدُسِ."
                        </p>
                        <p class="text-center mt-2 mb-0 text-muted small">متى 28:19</p>
                    </div>
                    <div class="mb-4 p-4 bg-light rounded">
                        <h6 class="mb-3 text-primary">الدعوة للعمل</h6>
                        <p class="mb-2">هل ترغب أن تتدرّب تحت قيادة فريق كرازي؟</p>
                        <p class="mb-3">هل كنيستك تحتاج دعمًا لتنظيم حدث كرازي أو مجموعات تلمذة؟</p>
                        <p class="mb-0 fw-bold">تواصل معنا اليوم ودعنا نبدأ معًا الرحلة.</p>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('about') }}">اقرأ المزيد</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">الأقسام الرئيسية</h6>
                <h1 class="mb-5">الأركان الأربعة</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="{{ route('schools.index') }}">
                                <img class="img-fluid" src="{{ $pillarImages['schools'] ?? asset('assets/img/cat-1.jpg') }}" alt="المدارس" style="width: 100%; height: 260px; object-fit: cover;">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-center" style="background: rgba(0, 0, 0, 0.8);">
                                    <div class="px-3">
                                        <h4 class="mb-2 text-white">المدارس</h4>
                                        <p class="mb-0 text-white small">تابع خدمات المدارس والأنشطة التعليمية.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="{{ route('events.index') }}">
                                <img class="img-fluid" src="{{ $pillarImages['events'] ?? asset('assets/img/cat-2.jpg') }}" alt="الأحداث" style="width: 100%; height: 180px; object-fit: cover;">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-center" style="background: rgba(0, 0, 0, 0.8);">
                                    <div class="px-3">
                                        <h4 class="mb-2 text-white">الأحداث</h4>
                                        <p class="mb-0 text-white small">استعرض أحدث الفعاليات والمواعيد القادمة.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="{{ route('camps.index') }}">
                                <img class="img-fluid" src="{{ $pillarImages['camps'] ?? asset('assets/img/cat-3.jpg') }}" alt="الكامبات" style="width: 100%; height: 180px; object-fit: cover;">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-center" style="background: rgba(0, 0, 0, 0.8);">
                                    <div class="px-3">
                                        <h4 class="mb-2 text-white">الكامبات</h4>
                                        <p class="mb-0 text-white small">اكتشف الكامبات المتاحة وبرامجها.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="{{ route('courses.index') }}">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ $pillarImages['courses'] ?? asset('assets/img/cat-4.jpg') }}" alt="الكورسات" style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-center" style="background: rgba(0, 0, 0, 0.8);">
                            <div class="px-3">
                                <h4 class="mb-2 text-white">الكورسات</h4>
                                <p class="mb-0 text-white small">تصفح الكورسات المتاحة وانضم بسهولة.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->


    <!-- Courses Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">الدورات</h6>
                <h1 class="mb-5">الدورات الشائعة</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/course-1.jpg') }}" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">اقرأ المزيد</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">انضم الآن</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">149.00 ر.س</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">دورة تصميم وتطوير الويب للمبتدئين</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>أحمد محمد</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 ساعة</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 طالب</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/course-2.jpg') }}" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">اقرأ المزيد</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">انضم الآن</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">149.00 ر.س</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">دورة البرمجة المتقدمة</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>فاطمة علي</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>2.30 ساعة</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>45 طالب</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/course-3.jpg') }}" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">اقرأ المزيد</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">انضم الآن</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">149.00 ر.س</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">دورة التسويق الرقمي</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>خالد سعيد</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>3.15 ساعة</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>60 طالب</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Courses End -->


    <!-- Team Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">المدربون</h6>
                <h1 class="mb-5">مدربون خبراء</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/team-1.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">أحمد محمد</h5>
                            <small>مطور ويب</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/team-2.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">فاطمة علي</h5>
                            <small>مصممة جرافيك</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/team-3.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">خالد سعيد</h5>
                            <small>خبير تسويق</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/team-4.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">سارة أحمد</h5>
                            <small>مدربة برمجة</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->


    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">الشهادات</h6>
                <h1 class="mb-5">ماذا يقول طلابنا!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('assets/img/testimonial-1.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">محمد علي</h5>
                    <p>مطور برمجيات</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">تجربة رائعة! الدورات واضحة ومنظمة بشكل ممتاز. المدربون محترفون ويقدمون محتوى عالي الجودة.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('assets/img/testimonial-2.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">نورا حسن</h5>
                    <p>مصممة</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">لقد استفدت كثيراً من هذه المنصة. المحتوى شامل والشرح واضح. أنصح الجميع بالتسجيل.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('assets/img/testimonial-3.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">يوسف أحمد</h5>
                    <p>طالب</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">منصة ممتازة للتعلم. الأسعار معقولة والجودة عالية. شكراً لكم على هذا العمل الرائع.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('assets/img/testimonial-4.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">ليلى محمود</h5>
                    <p>مستشارة</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">أفضل منصة تعليمية عربية. المحتوى متنوع والتدريس احترافي. أنا سعيدة جداً بهذه التجربة.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->
@endsection
