@extends('layouts.app')

@section('title', 'اتصل بنا - نسور')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">اتصل بنا</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">اتصل بنا</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">اتصل بنا</h6>
                <h1 class="mb-5">يسعدنا تواصلك</h1>
            </div>

            <div class="row g-4">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="mb-3">بيانات التواصل</h5>
                    <p class="mb-4 text-muted">اترك لنا رسالتك وسنقوم بالرد عليك في أقرب وقت ممكن.</p>

                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="me-3">
                            <h5 class="text-primary mb-1">المكتب</h5>
                            <p class="mb-0">cairo , egypt</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="me-3">
                            <h5 class="text-primary mb-1">الهاتف</h5>
                            <p class="mb-0">+20 121 117 7391</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="me-3">
                            <h5 class="text-primary mb-1">البريد الإلكتروني</h5>
                            <p class="mb-0">info@nosor.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        id="name"
                                        name="name"
                                        placeholder="الاسم"
                                        value="{{ old('name') }}"
                                        required
                                    >
                                    <label for="name">الاسم *</label>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        id="phone"
                                        name="phone"
                                        placeholder="رقم الهاتف"
                                        value="{{ old('phone') }}"
                                        required
                                    >
                                    <label for="phone">رقم الهاتف *</label>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea
                                        class="form-control @error('message') is-invalid @enderror"
                                        placeholder="اكتب رسالتك هنا"
                                        id="message"
                                        name="message"
                                        style="height: 150px"
                                    >{{ old('message') }}</textarea>
                                    <label for="message">الرسالة (اختياري)</label>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">إرسال</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

