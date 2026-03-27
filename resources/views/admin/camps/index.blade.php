@extends('admin.layouts.app')

@section('title', 'الكامبات - لوحة التحكم')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-campground me-2"></i>الكامبات</h2>
    <a href="{{ route('admin.camps.create') }}" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>إضافة كامب جديد
    </a>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>العنوان</th>
                        <th>المقدم</th>
                        <th>التاريخ</th>
                        <th>الوقت</th>
                        <th>الحالة</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($camps as $camp)
                        <tr>
                            <td>{{ $camp->id }}</td>
                            <td>{{ $camp->title }}</td>
                            <td>{{ $camp->presenter ?? '-' }}</td>
                            <td>{{ $camp->date ? $camp->date->format('Y-m-d') : '-' }}</td>
                            <td>{{ $camp->time ?? '-' }}</td>
                            <td>
                                @if($camp->status == 'active')
                                    <span class="badge bg-success">نشط</span>
                                @else
                                    <span class="badge bg-secondary">مسودة</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.camps.show', $camp->id) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i> عرض
                                </a>
                                <a href="{{ route('admin.camps.edit', $camp->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> تعديل
                                </a>
                                <form action="{{ route('admin.camps.destroy', $camp->id) }}" method="POST" class="d-inline" onsubmit="return confirm('هل أنت متأكد من حذف هذا الكامب؟');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> حذف
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">لا توجد كامبات</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-3">
            {{ $camps->links() }}
        </div>
    </div>
</div>
@endsection

