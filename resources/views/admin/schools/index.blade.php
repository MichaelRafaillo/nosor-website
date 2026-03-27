@extends('admin.layouts.app')

@section('title', 'المدارس - لوحة التحكم')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="fas fa-school me-2"></i>المدارس</h2>
    <a href="{{ route('admin.schools.create') }}" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>إضافة مدرسة جديدة
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
                    @forelse($schools as $school)
                        <tr>
                            <td>{{ $school->id }}</td>
                            <td>{{ $school->title }}</td>
                            <td>{{ $school->presenter ?? '-' }}</td>
                            <td>{{ $school->date ? $school->date->format('Y-m-d') : '-' }}</td>
                            <td>{{ $school->time ?? '-' }}</td>
                            <td>
                                @if($school->status == 'active')
                                    <span class="badge bg-success">نشط</span>
                                @else
                                    <span class="badge bg-secondary">مسودة</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.schools.show', $school->id) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i> عرض
                                </a>
                                <a href="{{ route('admin.schools.edit', $school->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> تعديل
                                </a>
                                <form action="{{ route('admin.schools.destroy', $school->id) }}" method="POST" class="d-inline" onsubmit="return confirm('هل أنت متأكد من حذف هذه المدرسة؟');">
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
                            <td colspan="7" class="text-center">لا توجد مدارس</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-3">
            {{ $schools->links() }}
        </div>
    </div>
</div>
@endsection

