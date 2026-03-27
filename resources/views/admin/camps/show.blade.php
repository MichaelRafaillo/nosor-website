@extends('admin.layouts.app')

@section('title', 'عرض الكامب - لوحة التحكم')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-eye me-2"></i>عرض الكامب</h2>
    <div>
        <a href="{{ route('admin.camps.edit', $camp->id) }}" class="btn btn-warning">
            <i class="fas fa-edit me-2"></i>تعديل
        </a>
        <form action="{{ route('admin.camps.destroy', $camp->id) }}" method="POST" class="d-inline" onsubmit="return confirm('هل أنت متأكد من حذف هذا الكامب؟');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash me-2"></i>حذف
            </button>
        </form>
        <a href="{{ route('admin.camps.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-right me-2"></i>العودة
        </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h4>{{ $camp->title }}</h4>
            </div>
            
            @if($camp->desc)
            <div class="col-md-12 mb-3">
                <strong>الوصف:</strong>
                <p>{{ $camp->desc }}</p>
            </div>
            @endif
            
            <div class="col-md-6 mb-3">
                <strong>المقدم:</strong>
                <p>{{ $camp->presenter ?? '-' }}</p>
            </div>
            
            @if($camp->youtube_url)
            <div class="col-md-6 mb-3">
                <strong>رابط يوتيوب:</strong>
                <p><a href="{{ $camp->youtube_url }}" target="_blank">{{ $camp->youtube_url }}</a></p>
            </div>
            @endif
            
            @if($camp->date)
            <div class="col-md-6 mb-3">
                <strong>التاريخ:</strong>
                <p>{{ $camp->date->format('Y-m-d') }}</p>
            </div>
            @endif
            
            @if($camp->time)
            <div class="col-md-6 mb-3">
                <strong>الوقت:</strong>
                <p>{{ $camp->time }}</p>
            </div>
            @endif
            
            <div class="col-md-6 mb-3">
                <strong>الحالة:</strong>
                <p>
                    @if($camp->status == 'active')
                        <span class="badge bg-success">نشط</span>
                    @else
                        <span class="badge bg-secondary">مسودة</span>
                    @endif
                </p>
            </div>
            
            @if($camp->content)
            <div class="col-md-12 mb-3">
                <strong>المحتوى:</strong>
                <div class="border p-3 rounded">
                    {!! $camp->content !!}
                </div>
            </div>
            @endif
            
            @if($camp->images->count() > 0)
            <div class="col-md-12 mb-3">
                <strong>الصور:</strong>
                <div class="row mt-2">
                    @foreach($camp->images as $image)
                        <div class="col-md-3 mb-3">
                            <img src="{{ asset('storage/' . $image->image_path) }}" 
                                 alt="صورة الكامب" 
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

