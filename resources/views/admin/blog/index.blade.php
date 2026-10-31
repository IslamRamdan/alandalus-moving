@extends('adminlte::page')

@section('title', 'عرض المقالات | لوحة التحكم')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-bold text-dark"><i class="fas fa-newspaper text-primary mr-2"></i> عرض جميع المقالات</h1>
        <div>
            <a href="{{ route('blog.index') }}" target="_blank" class="btn btn-outline-info shadow-sm mr-2">
                <i class="fas fa-external-link-alt"></i> زيارة المدونة العامة
            </a>
            <a href="{{ route('admin.blog.create') }}" class="btn btn-primary shadow-sm">
                <i class="fas fa-plus-circle"></i> إضافة مقال جديد
            </a>
        </div>
    </div>
@stop

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="icon fas fa-check-circle"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3">
            <h3 class="card-title text-muted font-weight-bold">
                <i class="fas fa-list mr-1"></i> قائمة المقالات المسجلة ({{ $blogs->count() }})
            </h3>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th style="width: 50px" class="text-center">#</th>
                            <th style="width: 100px" class="text-center">الصورة</th>
                            <th>العنوان</th>
                            <th class="d-none d-md-table-cell">المحتوى</th>
                            <th style="width: 130px" class="text-center">تاريخ النشر</th>
                            <th class="text-center" style="width: 160px">الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($blogs as $blog)
                            <tr>
                                <td class="text-center align-middle font-weight-bold">{{ $loop->iteration }}</td>

                                <td class="align-middle text-center">
                                    @if ($blog->image)
                                        <img src="{{ asset('storage/' . $blog->image) }}" class="rounded shadow-sm border"
                                            style="width: 60px; height: 60px; object-fit: cover;" alt="{{ $blog->title }}">
                                    @else
                                        <div class="bg-secondary text-white d-flex align-items-center justify-content-center rounded mx-auto"
                                            style="width: 60px; height: 60px; font-size: 11px;">
                                            بدون صورة
                                        </div>
                                    @endif
                                </td>

                                <td class="align-middle text-bold text-dark">
                                    {{ $blog->title }}
                                </td>

                                <td class="align-middle d-none d-md-table-cell">
                                    <small class="text-muted">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 90) }}
                                    </small>
                                </td>

                                <td class="align-middle text-center text-muted" style="font-size: 13px;">
                                    {{ $blog->created_at ? $blog->created_at->format('Y-m-d') : '—' }}
                                </td>

                                <td class="text-center align-middle">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('blog.show', $blog->id) }}" target="_blank"
                                            class="btn btn-sm btn-outline-primary" title="معاينة في الموقع">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <a href="{{ route('admin.blog.edit', $blog->id) }}"
                                            class="btn btn-sm btn-outline-info" title="تعديل">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST"
                                            onsubmit="return confirm('هل أنت متأكد من حذف هذا المقال نهائياً؟');"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" title="حذف">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5 text-muted">
                                    <i class="fas fa-inbox fa-3x mb-3 text-secondary d-block"></i>
                                    <h5>لا توجد مقالات مضافة حتى الآن</h5>
                                    <p class="mb-3">ابدأ بإضافة مقالك الأول في المدونة الآن.</p>
                                    <a href="{{ route('admin.blog.create') }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-plus-circle"></i> إضافة مقال جديد
                                    </a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop

@section('css')
    <style>
        .table td,
        .table th {
            vertical-align: middle;
        }

        .btn-group .btn {
            margin: 0 2px;
            border-radius: 4px !important;
        }

        .card {
            border-radius: 12px;
            overflow: hidden;
        }
    </style>
@stop
