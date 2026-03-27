@extends('layouts.app')

@section('title', 'الكامبات - نسور')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">الكامبات</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">الكامبات</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Camps Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">الكامبات</h6>
                <h1 class="mb-5">الكامبات المتاحة</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @forelse($camps as $camp)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                @if($camp->images->count() > 0)
                                    <img class="img-fluid" src="{{ asset('storage/' . $camp->images->first()->image_path) }}" alt="{{ $camp->title }}" style="width: 100%; height: 250px; object-fit: cover;">
                                @else
                                    <img class="img-fluid" src="{{ asset('assets/img/course-1.jpg') }}" alt="{{ $camp->title }}" style="width: 100%; height: 250px; object-fit: cover;">
                                @endif
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="{{ route('camps.show', $camp->id) }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">اقرأ المزيد</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                @if($camp->date)
                                    <small class="text-muted d-block mb-2">
                                        <i class="fa fa-calendar text-primary me-2"></i>{{ $camp->date->format('Y-m-d') }}
                                    </small>
                                @endif
                                <h5 class="mb-4">{{ $camp->title }}</h5>
                                @if($camp->desc)
                                    <p class="text-muted mb-3">{{ Str::limit($camp->desc, 100) }}</p>
                                @endif
                            </div>
                            @if($camp->presenter)
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center py-2">
                                        <i class="fa fa-user-tie text-primary me-2"></i>{{ $camp->presenter }}
                                    </small>
                                </div>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center py-5">
                            <h4 class="text-muted">لا توجد كامبات متاحة حالياً</h4>
                        </div>
                    </div>
                @endforelse
            </div>
            
            <!-- Pagination -->
            @if($camps->hasPages())
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            {{ $camps->links() }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Camps End -->
@endsection

