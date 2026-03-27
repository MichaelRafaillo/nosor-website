@extends('layouts.app')

@section('title', $camp->title . ' - نسور')

@php
    $shareUrl = url()->current();
    $shareTitle = $camp->title;
    $shareDescription = $camp->desc ? Str::limit($camp->desc, 160) : 'كامب من منصة نسور للتعلم الإلكتروني';
    $shareImage = $camp->images->count() > 0 
        ? url('storage/' . $camp->images->first()->image_path) 
        : url('assets/img/nosor-logo.png');
@endphp

@section('description', $shareDescription)
@section('og_type', 'article')
@section('og_url', $shareUrl)
@section('og_title', $shareTitle)
@section('og_description', $shareDescription)
@section('og_image', $shareImage)

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">{{ $camp->title }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('camps.index') }}">الكامبات</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{ Str::limit($camp->title, 30) }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Camp Detail Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Cover Image and Main Content -->
                <div class="col-lg-8">
                    <!-- Cover Image -->
                    @if($camp->images->count() > 0)
                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <a href="{{ asset('storage/' . $camp->images->first()->image_path) }}" 
                               class="glightbox" 
                               data-gallery="camp-gallery">
                                <img class="img-fluid rounded" 
                                     src="{{ asset('storage/' . $camp->images->first()->image_path) }}" 
                                     alt="{{ $camp->title }}" 
                                     style="width: 100%; height: 400px; object-fit: cover; cursor: pointer;">
                            </a>
                        </div>
                    @endif

                    <!-- Title and Meta -->
                    <div class="mb-4 wow fadeInUp" data-wow-delay="0.2s">
                        <h1 class="mb-3">{{ $camp->title }}</h1>
                        <div class="d-flex flex-wrap gap-3 mb-3">
                            @if($camp->date)
                                <span class="text-muted">
                                    <i class="fa fa-calendar text-primary me-2"></i>{{ $camp->date->format('Y-m-d') }}
                                </span>
                            @endif
                            @if($camp->time)
                                <span class="text-muted">
                                    <i class="fa fa-clock text-primary me-2"></i>{{ $camp->time }}
                                </span>
                            @endif
                            @if($camp->presenter)
                                <span class="text-muted">
                                    <i class="fa fa-user-tie text-primary me-2"></i>{{ $camp->presenter }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <!-- Description -->
                    @if($camp->desc)
                        <div class="mb-4 wow fadeInUp" data-wow-delay="0.3s">
                            <p class="lead">{{ $camp->desc }}</p>
                        </div>
                    @endif

                    <!-- Content -->
                    @if($camp->content)
                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="content">
                                {!! $camp->content !!}
                            </div>
                        </div>
                    @endif

                    <!-- YouTube Video -->
                    @if($camp->youtube_url)
                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.5s">
                            <h4 class="mb-3">فيديو توضيحي</h4>
                            <div class="ratio ratio-16x9">
                                @php
                                    // Convert YouTube URL to embed format
                                    $youtubeId = '';
                                    if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $camp->youtube_url, $matches)) {
                                        $youtubeId = $matches[1];
                                    }
                                @endphp
                                @if($youtubeId)
                                    <iframe src="https://www.youtube.com/embed/{{ $youtubeId }}" allowfullscreen></iframe>
                                @else
                                    <a href="{{ $camp->youtube_url }}" target="_blank" class="btn btn-primary">شاهد الفيديو على يوتيوب</a>
                                @endif
                            </div>
                        </div>
                    @endif

                    <!-- Additional Images -->
                    @if($camp->images->count() > 1)
                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.6s">
                            <h4 class="mb-3">معرض الصور</h4>
                            <div class="row g-3">
                                @foreach($camp->images->skip(1) as $index => $image)
                                    <div class="col-md-4">
                                        <a href="{{ asset('storage/' . $image->image_path) }}" 
                                           class="glightbox" 
                                           data-gallery="camp-gallery">
                                            <img class="img-fluid rounded" 
                                                 src="{{ asset('storage/' . $image->image_path) }}" 
                                                 alt="{{ $camp->title }}"
                                                 style="cursor: pointer; transition: transform 0.3s ease;">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="bg-light p-4 rounded mb-4 wow fadeInUp" data-wow-delay="0.3s">
                        <h5 class="mb-3">معلومات الكامب</h5>
                        <ul class="list-unstyled">
                            @if($camp->presenter)
                                <li class="mb-3">
                                    <i class="fa fa-user-tie text-primary me-2"></i>
                                    <strong>المقدم:</strong> {{ $camp->presenter }}
                                </li>
                            @endif
                            @if($camp->date)
                                <li class="mb-3">
                                    <i class="fa fa-calendar text-primary me-2"></i>
                                    <strong>التاريخ:</strong> {{ $camp->date->format('Y-m-d') }}
                                </li>
                            @endif
                            @if($camp->time)
                                <li class="mb-3">
                                    <i class="fa fa-clock text-primary me-2"></i>
                                    <strong>الوقت:</strong> {{ $camp->time }}
                                </li>
                            @endif
                            <li class="mb-3">
                                <i class="fa fa-calendar-check text-primary me-2"></i>
                                <strong>تاريخ النشر:</strong> {{ $camp->created_at->format('Y-m-d') }}
                            </li>
                        </ul>
                    </div>

                    <!-- Share Buttons -->
                    <div class="bg-light p-4 rounded wow fadeInUp" data-wow-delay="0.4s">
                        <h5 class="mb-3">شارك الكامب</h5>
                        <div class="d-flex gap-2 flex-wrap">
                            @php
                                $encodedUrl = urlencode($shareUrl);
                                $encodedTitle = urlencode($shareTitle);
                                $encodedDescription = urlencode($shareDescription);
                                
                                // Facebook Share
                                $facebookUrl = "https://www.facebook.com/sharer/sharer.php?u=" . $encodedUrl;
                                
                                // Twitter Share
                                $twitterText = $encodedTitle;
                                $twitterUrl = "https://twitter.com/intent/tweet?url=" . $encodedUrl . "&text=" . $twitterText . "&lang=ar";
                                
                                // WhatsApp Share
                                $whatsappText = $encodedTitle . " - " . $encodedUrl;
                                $whatsappUrl = "https://wa.me/?text=" . urlencode($whatsappText);
                            @endphp
                            <a href="{{ $facebookUrl }}" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="btn btn-sm btn-primary">
                                <i class="fab fa-facebook-f"></i> فيسبوك
                            </a>
                            <a href="{{ $twitterUrl }}" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="btn btn-sm btn-info text-white">
                                <i class="fab fa-twitter"></i> تويتر
                            </a>
                            <a href="{{ $whatsappUrl }}" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="btn btn-sm btn-success">
                                <i class="fab fa-whatsapp"></i> واتساب
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Camp Detail End -->

    <!-- Add hover effect CSS -->
    <style>
        .glightbox img:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        
        .glightbox {
            display: block;
            position: relative;
        }
        
        .glightbox::after {
            content: '\f00e';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 2rem;
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }
        
        .glightbox:hover::after {
            opacity: 0.8;
        }
        
        .glightbox:hover img {
            filter: brightness(0.7);
        }
    </style>
@endsection
