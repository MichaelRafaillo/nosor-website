<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'لوحة التحكم - نسور')</title>
    <link href="{{ asset('assets/img/nosor-favicon.png') }}" rel="icon" type="image/png">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    
    <style>
        @font-face {
            font-family: 'DGAgnadeen';
            src: url('{{ asset('assets/fonts/alfont_com_DGAgnadeen-Extrabold.ttf') }}') format('truetype');
            font-weight: 800;
            font-style: normal;
            font-display: swap;
        }
        
        * {
            font-family: 'DGAgnadeen', Arial, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'DGAgnadeen', Arial, sans-serif;
        }
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            font-family: 'DGAgnadeen', Arial, sans-serif;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            margin: 5px 0;
            border-radius: 8px;
            font-family: 'DGAgnadeen', Arial, sans-serif;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
        }
        .main-content {
            padding: 30px;
            font-family: 'DGAgnadeen', Arial, sans-serif;
        }
        .card {
            border: none;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'DGAgnadeen', Arial, sans-serif;
        }
        button, .btn {
            font-family: 'DGAgnadeen', Arial, sans-serif;
        }
        input, textarea, select, .form-control {
            font-family: 'DGAgnadeen', Arial, sans-serif;
        }
        table, th, td {
            font-family: 'DGAgnadeen', Arial, sans-serif;
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar p-0">
                <div class="p-4">
                    <div class="text-center mb-4">
                        <img src="{{ asset('assets/img/nosor-logo.png') }}" alt="نسور" style="max-width: 120px; height: auto; filter: brightness(0) invert(1);">
                        <h4 class="mt-3 mb-0">لوحة التحكم</h4>
                    </div>
                    <div class="mb-4 pb-3 border-bottom border-white border-opacity-25">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-circle fa-2x ms-2"></i>
                            <div>
                                <div class="fw-bold">{{ Auth::user()->name }}</div>
                                <small class="text-white-50">{{ Auth::user()->email }}</small>
                            </div>
                        </div>
                    </div>
                    <nav class="nav flex-column">
                        <a class="nav-link {{ request()->routeIs('admin.events.*') ? 'active' : '' }}" href="{{ route('admin.events.index') }}">
                            <i class="fas fa-calendar-alt me-2"></i>
                            الأحداث
                        </a>
                        <a class="nav-link {{ request()->routeIs('admin.schools.*') ? 'active' : '' }}" href="{{ route('admin.schools.index') }}">
                            <i class="fas fa-school me-2"></i>
                            المدارس
                        </a>
                        <a class="nav-link {{ request()->routeIs('admin.camps.*') ? 'active' : '' }}" href="{{ route('admin.camps.index') }}">
                            <i class="fas fa-campground me-2"></i>
                            الكامبات
                        </a>
                        <a class="nav-link {{ request()->routeIs('admin.courses.*') ? 'active' : '' }}" href="{{ route('admin.courses.index') }}">
                            <i class="fas fa-book me-2"></i>
                            الكورسات
                        </a>
                        <a class="nav-link {{ request()->routeIs('admin.contact-messages.*') ? 'active' : '' }}" href="{{ route('admin.contact-messages.index') }}">
                            <i class="fas fa-envelope me-2"></i>
                            رسائل التواصل
                        </a>
                        <a class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                            <i class="fas fa-users me-2"></i>
                            المستخدمون
                        </a>
                        <hr class="text-white">
                        <form method="POST" action="{{ route('logout') }}" class="w-100">
                            @csrf
                            <button type="submit" class="nav-link w-100 text-start border-0 bg-transparent text-white-50 text-end">
                                <i class="fas fa-sign-out-alt me-2"></i>
                                تسجيل الخروج
                            </button>
                        </form>
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="fas fa-home me-2"></i>
                            العودة للموقع
                        </a>
                    </nav>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                
                @yield('content')
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')
</body>
</html>

