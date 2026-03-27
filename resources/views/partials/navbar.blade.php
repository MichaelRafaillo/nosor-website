<!-- Navbar Start -->
<style>
    .navbar .nav-link.dropdown-toggle::after {
        margin-inline-start: 0.6rem;
    }
</style>
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="{{ asset('assets/img/nosor-logo.png') }}" alt="نسور" style="height: 48px; width: auto;">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">الرئيسية</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">من نحن</a>
            <a href="{{ route('calendar.index') }}" class="nav-item nav-link {{ request()->routeIs('calendar.*') ? 'active' : '' }}">التقويم</a>
            <a href="#" class="nav-item nav-link">الدورات</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">الأركان الأربعة</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route('schools.index') }}" class="dropdown-item">المدارس</a>
                    <a href="{{ route('events.index') }}" class="dropdown-item">الأحداث</a>
                    <a href="{{ route('camps.index') }}" class="dropdown-item">الكامبات</a>
                    <a href="{{ route('courses.index') }}" class="dropdown-item">الكورسات</a>
                </div>
            </div>
            <a href="#" class="nav-item nav-link">اتصل بنا</a>
        </div>
        <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">انضم الآن<i class="fa fa-arrow-left ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->

