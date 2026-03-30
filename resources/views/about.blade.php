@extends('layouts.app')

@section('title', 'من نحن - نسور')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">من نحن</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">من نحن</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('assets/img/about.jpg') }}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">نبذة عن الفريق</h6>
                    <h1 class="mb-4">فريق نسور</h1>
                    <p class="mb-4">فريق نسور هو مجموعة من المؤمنين ينتمون إلى كنائس مختلفة، اجتمعوا برؤية واحدة لخدمة الله من خلال الكرازة والتلمذة داخل جسد المسيح.</p>
                    <p class="mb-4">تأسس الفريق بدافع الإيمان بأن الكنيسة مدعوة لتكون نورًا للعالم، وأن رسالة الإنجيل يجب أن تصل إلى الجميع بمحبة ووضوح.</p>
                    <p class="mb-4">من خلال التدريب، وتنظيم الأحداث الكرازية، ومتابعة النفوس الجديدة، يعمل الفريق على دعم الكنائس وتشجيع أبنائها على النمو الروحي والمشاركة الفعّالة في خدمة الكلمة.</p>
                    <p class="mb-4">نحن لا نعمل بمعزل عن الكنيسة، بل من داخلها ولأجلها، مؤمنين أن كل نفس لها قيمة، وأن كل عضو في جسد المسيح له دور في امتداد ملكوت الله.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About Team End -->


    <!-- Vision Mission Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">رؤيتنا</h6>
                        <h1 class="mb-4">رؤيتنا</h1>
                        <p class="mb-4">أن تفهم الكنيسة دورها في الكرازة ورعاية الأفراد بعد الأحداث الكرازية، وأن تعمل على تدريب أبنائها ليكونوا خدامًا فاعلين في التلمذة والبشارة.</p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light p-5 h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">رسالتنا</h6>
                        <h1 class="mb-4">رسالتنا</h1>
                        <p class="mb-4">أن ندرّب الأفراد داخل الكنائس على الكرازة والعمل الفردي، وأن نساعد الكنائس في إقامة الأحداث الكرازية وتنظيمها، ثم نرافق النفوس الجديدة في مجموعات تلمذة داخل الكنائس المحلية، حتى تنمو، وتثبت، وتثمر.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vision Mission End -->


    <!-- Values Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">قيمنا</h6>
                <h1 class="mb-5">قيمنا الأساسية</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-heart text-primary mb-4"></i>
                            <h5 class="mb-3">المحبة</h5>
                            <p>هي الدافع والأساس في كل ما نعمله.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-users text-primary mb-4"></i>
                            <h5 class="mb-3">الشركة</h5>
                            <p>نعمل بروح الفريق الواحد، مؤمنين أن كل عضو له دوره في الجسد.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-shield-alt text-primary mb-4"></i>
                            <h5 class="mb-3">الأمانة</h5>
                            <p>نلتزم بخدمة الله بضمير نقي ومخافة مقدسة.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-sync-alt text-primary mb-4"></i>
                            <h5 class="mb-3">الاستمرارية</h5>
                            <p>لا نكتفي بالبداية، بل نتابع كل نفس حتى الثبات.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-church text-primary mb-4"></i>
                            <h5 class="mb-3">الكنيسة المحلية</h5>
                            <p>نؤمن أن الكنيسة هي بيت الله ونقطة الانطلاق لكل خدمة حقيقية.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Values End -->


    <!-- Principles Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">مبادئ إيماننا</h6>
                    <h1 class="mb-4">مبادئ إيماننا</h1>
                    <p class="mb-4">كل فرد في الفريق ينتمي إلى كنيسة محلية وملتزم بها ويساعد فيها بشكل فعّال. ومن هذا الانتماء تنطلق خدمتنا لمساعدة الكنائس الأخرى في الكرازة ونشر رسالة الإنجيل.</p>
                    <p class="mb-4">نؤمن أن نمو الكنيسة يأتي من خلال ولادة أعضاء جدد فيها، وأن ثبات المؤمنين الجدد وتلمذتهم هو الطريق لنمو الجسد الواحد.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Principles End -->


    <!-- Services Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">الخدمات</h6>
                <h1 class="mb-5">خدمات فريق نسور</h1>
            </div>
            <div class="row g-4">
                <!-- Training Service -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light h-100">
                        <div class="text-center p-4 pb-0">
                            <i class="fa fa-4x fa-chalkboard-teacher text-primary mb-4"></i>
                            <h5 class="mb-4">أولاً: التدريب</h5>
                            <p class="mb-4">نؤمن أن كل مؤمن يمكن أن يكون شاهدًا للمسيح إن أُعِدَّ إعدادًا صحيحًا. لذلك، نقدّم برامج تدريبية متخصصة تساعد الأفراد داخل الكنائس على فهم رسالة الإنجيل وكيفية مشاركتها بوضوح ومحبة.</p>
                            <p class="mb-4">يشمل التدريب موضوعات عن الكرازة الفردية، والتواصل الفعّال، وإعداد الأحداث الكرازية، ومتابعة النفوس الجديدة. هدفنا أن نُعد كل شخص ليخدم بثقة ويكون سبب بركة في كنيسته ومجتمعه.</p>
                            <div class="bg-primary text-white p-3 rounded mb-4">
                                <h6 class="mb-2">دعوة للعمل:</h6>
                                <p class="mb-0 small">هل ترغب في تدريب كنيستك على الكرازة؟ تواصل معنا لمعرفة مواعيد الدورات القادمة.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Evangelism Service -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light h-100">
                        <div class="text-center p-4 pb-0">
                            <i class="fa fa-4x fa-bullhorn text-primary mb-4"></i>
                            <h5 class="mb-4">ثانياً: الكرازة</h5>
                            <p class="mb-4">نرافق الكنائس في تنظيم الأحداث الكرازية، بداية من الفكرة وحتى التنفيذ. نساعد الفرق المحلية على إعداد البرامج، والتخطيط للمحتوى، وتنظيم الخدمة الميدانية، ليكون الحدث شهادة حيّة عن محبة المسيح.</p>
                            <p class="mb-4">نؤمن أن الكرازة ليست مجرد نشاط، بل هي امتداد طبيعي لحياة الكنيسة التي تحيا بالإنجيل وتقدّمه للعالم.</p>
                            <div class="bg-primary text-white p-3 rounded mb-4">
                                <h6 class="mb-2">دعوة للعمل:</h6>
                                <p class="mb-0 small">إذا كانت كنيستك تستعد لحدث كرازي، يمكننا مساعدتكم في الإعداد والخدمة.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Discipleship Service -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light h-100">
                        <div class="text-center p-4 pb-0">
                            <i class="fa fa-4x fa-hands-helping text-primary mb-4"></i>
                            <h5 class="mb-4">ثالثاً: التلمذة</h5>
                            <p class="mb-4">نرى أن التلمذة هي الخطوة التالية للكرازة، وهي الضمان الحقيقي لنمو النفوس الجديدة وثباتها في الإيمان.</p>
                            <p class="mb-4">نعمل مع الكنائس على تأسيس مجموعات تلمذة داخلية، تتابع الذين قبلوا رسالة الإنجيل، وتساعدهم على النمو الروحي والمعرفي، ليصبحوا بدورهم خدامًا آخرين. نهدف إلى بناء تلاميذ أمناء يعيشون الكلمة ويشاركونها.</p>
                            <div class="bg-primary text-white p-3 rounded mb-4">
                                <h6 class="mb-2">دعوة للعمل:</h6>
                                <p class="mb-0 small">هل لديك أشخاص يحتاجون إلى متابعة بعد الحدث الكرازي؟ دعنا نساعدك في تأسيس مجموعة تلمذة داخل كنيستك.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection

