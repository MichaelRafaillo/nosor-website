@extends('admin.layouts.app')

@section('title', 'عرض الحدث - لوحة التحكم')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-eye me-2"></i>عرض الحدث</h2>
    <div>
        <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning">
            <i class="fas fa-edit me-2"></i>تعديل
        </a>
        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" class="d-inline" onsubmit="return confirm('هل أنت متأكد من حذف هذا الحدث؟');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash me-2"></i>حذف
            </button>
        </form>
        <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-right me-2"></i>العودة
        </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h4>{{ $event->title }}</h4>
            </div>
            
            @if($event->desc)
            <div class="col-md-12 mb-3">
                <strong>الوصف:</strong>
                <p>{{ $event->desc }}</p>
            </div>
            @endif
            
            <div class="col-md-6 mb-3">
                <strong>المقدم:</strong>
                <p>{{ $event->presenter ?? '-' }}</p>
            </div>
            
            @if($event->youtube_url)
            <div class="col-md-6 mb-3">
                <strong>رابط يوتيوب:</strong>
                <p><a href="{{ $event->youtube_url }}" target="_blank">{{ $event->youtube_url }}</a></p>
            </div>
            @endif
            
            @if($event->date)
            <div class="col-md-6 mb-3">
                <strong>التاريخ:</strong>
                <p>{{ $event->date->format('Y-m-d') }}</p>
            </div>
            @endif
            
            @if($event->time)
            <div class="col-md-6 mb-3">
                <strong>الوقت:</strong>
                <p>{{ $event->time }}</p>
            </div>
            @endif
            
            <div class="col-md-6 mb-3">
                <strong>الحالة:</strong>
                <p>
                    @if($event->status == 'active')
                        <span class="badge bg-success">نشط</span>
                    @else
                        <span class="badge bg-secondary">مسودة</span>
                    @endif
                </p>
            </div>
            
            @if($event->content)
            <div class="col-md-12 mb-3">
                <strong>المحتوى:</strong>
                <div class="border p-3 rounded">
                    {!! $event->content !!}
                </div>
            </div>
            @endif
            
            @if($event->images->count() > 0)
            <div class="col-md-12 mb-3">
                <strong>الصور:</strong>
                <div class="row mt-2">
                    @foreach($event->images as $image)
                        <div class="col-md-3 mb-3">
                            <img src="{{ asset('storage/' . $image->image_path) }}" 
                                 alt="صورة الحدث" 
                                 class="img-fluid rounded">
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

