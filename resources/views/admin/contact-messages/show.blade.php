@extends('admin.layouts.app')

@section('title', 'عرض رسالة - لوحة التحكم')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-envelope-open-text me-2"></i>تفاصيل الرسالة</h2>
    <a href="{{ route('admin.contact-messages.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-right me-2"></i>رجوع
    </a>
</div>

<div class="card">
    <div class="card-body">
        <dl class="row mb-0">
            <dt class="col-sm-3">الاسم</dt>
            <dd class="col-sm-9">{{ $message->name }}</dd>

            <dt class="col-sm-3">الهاتف</dt>
            <dd class="col-sm-9"><span dir="ltr">{{ $message->phone }}</span></dd>

            <dt class="col-sm-3">تاريخ الإرسال</dt>
            <dd class="col-sm-9">{{ $message->created_at?->format('Y-m-d H:i') }}</dd>

            <dt class="col-sm-3">الرسالة</dt>
            <dd class="col-sm-9">{{ $message->message ?: '-' }}</dd>
        </dl>

        <div class="mt-4">
            <form action="{{ route('admin.contact-messages.destroy', $message->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من حذف هذه الرسالة؟');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash me-2"></i>حذف الرسالة
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

