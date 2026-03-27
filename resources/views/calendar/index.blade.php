@extends('layouts.app')

@section('title', 'التقويم - نسور')

@push('styles')
    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.5/main.min.css" rel="stylesheet">
    <style>
        /* RTL Support for FullCalendar */
        .fc {
            direction: rtl;
        }
        .fc-toolbar {
            direction: rtl;
        }
        .fc-toolbar-title {
            font-weight: bold;
        }
        .fc-event {
            cursor: pointer;
            border-radius: 4px;
            padding: 2px 4px;
        }
        .fc-event:hover {
            opacity: 0.8;
        }
        /* Time Grid Views Styling */
        .fc-timeGridDay-view .fc-time,
        .fc-timeGridWeek-view .fc-time {
            text-align: right;
        }
        .fc-timeGridDay-view .fc-col-header-cell,
        .fc-timeGridWeek-view .fc-col-header-cell {
            text-align: center;
        }
        .calendar-legend {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        .legend-item {
            display: inline-block;
            margin-left: 20px;
            margin-bottom: 10px;
        }
        .legend-color {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 4px;
            margin-left: 8px;
            vertical-align: middle;
        }
    </style>
@endpush

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">التقويم</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">التقويم</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Calendar Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">التقويم</h6>
                <h1 class="mb-5">تقويم الأحداث</h1>
            </div>

            <!-- Calendar Legend -->
            <div class="calendar-legend wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="mb-3">مفتاح الألوان:</h5>
                <div class="legend-item">
                    <span class="legend-color" style="background-color: #0d6efd;"></span>
                    <span>أحداث (Events)</span>
                </div>
                <div class="legend-item">
                    <span class="legend-color" style="background-color: #198754;"></span>
                    <span>مدارس (Schools)</span>
                </div>
                <div class="legend-item">
                    <span class="legend-color" style="background-color: #fd7e14;"></span>
                    <span>كامبات (Camps)</span>
                </div>
                <div class="legend-item">
                    <span class="legend-color" style="background-color: #dc3545;"></span>
                    <span>كورسات (Courses)</span>
                </div>
            </div>

            <!-- Calendar Container -->
            <div class="bg-light p-4 rounded mt-4 wow fadeInUp" data-wow-delay="0.3s">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
    <!-- Calendar End -->
@endsection

@push('scripts')
    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.5/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.5/locales/ar.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'ar',
                initialView: 'dayGridMonth',
                headerToolbar: {
                    right: 'prev,next today',
                    center: 'title',
                    left: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                },
                buttonText: {
                    today: 'اليوم',
                    month: 'شهري',
                    week: 'أسبوعي',
                    day: 'يومي',
                    list: 'قائمة'
                },
                events: {
                    url: '{{ route("calendar.events") }}',
                    method: 'GET',
                    failure: function() {
                        alert('حدث خطأ أثناء تحميل الأحداث');
                    }
                },
                eventClick: function(info) {
                    // Open event detail page
                    if (info.event.url) {
                        window.open(info.event.url, '_self');
                        info.jsEvent.preventDefault();
                    }
                },
                eventMouseEnter: function(info) {
                    // Show tooltip on hover
                    if (info.event.extendedProps.description) {
                        info.el.setAttribute('title', info.event.extendedProps.description);
                    }
                },
                dayMaxEvents: true,
                moreLinkClick: 'popover',
                editable: false,
                selectable: false,
                selectMirror: false
            });

            calendar.render();
        });
    </script>
@endpush

