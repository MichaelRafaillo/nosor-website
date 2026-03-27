@extends('admin.layouts.app')

@section('title', 'تعديل الحدث - لوحة التحكم')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-edit me-2"></i>تعديل الحدث</h2>
    <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-right me-2"></i>العودة
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="title" class="form-label">العنوان <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                           id="title" name="title" value="{{ old('title', $event->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-12 mb-3">
                    <label for="desc" class="form-label">الوصف</label>
                    <textarea class="form-control @error('desc') is-invalid @enderror" 
                              id="desc" name="desc" rows="3">{{ old('desc', $event->desc) }}</textarea>
                    @error('desc')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="presenter" class="form-label">المقدم</label>
                    <input type="text" class="form-control @error('presenter') is-invalid @enderror" 
                           id="presenter" name="presenter" value="{{ old('presenter', $event->presenter) }}">
                    @error('presenter')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="youtube_url" class="form-label">رابط يوتيوب</label>
                    <input type="url" class="form-control @error('youtube_url') is-invalid @enderror" 
                           id="youtube_url" name="youtube_url" value="{{ old('youtube_url', $event->youtube_url) }}">
                    @error('youtube_url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="date" class="form-label">التاريخ</label>
                    <input type="date" class="form-control @error('date') is-invalid @enderror" 
                           id="date" name="date" value="{{ old('date', $event->date ? $event->date->format('Y-m-d') : '') }}">
                    @error('date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="time" class="form-label">الوقت</label>
                    <input type="time" class="form-control @error('time') is-invalid @enderror" 
                           id="time" name="time" value="{{ old('time', $event->time) }}">
                    @error('time')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-12 mb-3">
                    <label for="content" class="form-label">المحتوى</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" 
                              id="content" name="content">{{ old('content', $event->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-12 mb-3">
                    <label for="status" class="form-label">الحالة <span class="text-danger">*</span></label>
                    <select class="form-control @error('status') is-invalid @enderror" 
                            id="status" name="status" required>
                        <option value="draft" {{ old('status', $event->status) == 'draft' ? 'selected' : '' }}>مسودة</option>
                        <option value="active" {{ old('status', $event->status) == 'active' ? 'selected' : '' }}>نشط</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                @if($event->images->count() > 0)
                <div class="col-md-12 mb-3">
                    <label class="form-label">الصور الحالية</label>
                    <div class="row">
                        @foreach($event->images as $image)
                            <div class="col-md-3 mb-2 position-relative">
                                <img src="{{ asset('storage/' . $image->image_path) }}" 
                                     alt="صورة الحدث" 
                                     class="img-fluid rounded border">
                                <div class="form-check position-absolute top-0 start-0 m-2">
                                    <input class="form-check-input" type="checkbox" 
                                           name="delete_images[]" 
                                           value="{{ $image->id }}" 
                                           id="delete_image_{{ $image->id }}">
                                    <label class="form-check-label text-white bg-danger px-2 rounded" 
                                           for="delete_image_{{ $image->id }}">
                                        حذف
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <div class="col-md-12 mb-3">
                    <label for="images" class="form-label">إضافة صور جديدة</label>
                    <input type="file" class="form-control @error('images.*') is-invalid @enderror" 
                           id="images" name="images[]" multiple accept="image/*">
                    @error('images.*')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">يمكنك اختيار أكثر من صورة</small>
                </div>
            </div>
            
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-2"></i>حفظ التعديلات
                </button>
                <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times me-2"></i>إلغاء
                </a>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    ClassicEditor
        .create(document.querySelector('#content'), {
            language: 'ar'
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush
@endsection

