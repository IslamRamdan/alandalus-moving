@extends('adminlte::page')

@section('title', 'لوحة التحكم | الأندلس لنقل العفش والمكيفات')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h1 class="m-0 text-dark font-weight-bold">
                <i class="fas fa-tachometer-alt text-primary mr-2"></i> لوحة التحكم
            </h1>
            <small class="text-muted">نظام إدارة محتوى موقع الأندلس لنقل العفش والمكيفات بالرياض</small>
        </div>
        <div class="mt-2 mt-sm-0">
            <a href="{{ route('admin.blog.create') }}" class="btn btn-primary shadow-sm mr-2">
                <i class="fas fa-plus-circle mr-1"></i> إضافة مقال جديد
            </a>
            <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary shadow-sm">
                <i class="fas fa-globe mr-1"></i> زيارة الموقع
            </a>
        </div>
    </div>
@stop

@section('content')

    {{-- رسالة الترحيب --}}
    <div class="card bg-gradient-primary text-white shadow-sm border-0 mb-4 welcome-card">
        <div class="card-body p-4 d-flex justify-content-between align-items-center flex-wrap">
            <div>
                <h3 class="font-weight-bold mb-2">
                    أهلاً بك، {{ Auth::user()->name }}! 👋
                </h3>
                <p class="mb-0 text-light" style="font-size: 1.05rem;">
                    مرحباً بك في لوحة تحكم موقع <strong>الأندلس لنقل العفش والمكيفات بالرياض</strong>. يمكنك من هنا إدارة المقالات والمدونة ومتابعة محتوى الموقع بسهولة.
                </p>
            </div>
            <div class="mt-3 mt-md-0 text-left text-md-right">
                <span class="badge badge-light px-3 py-2 text-primary font-weight-bold" style="font-size: 0.95rem;">
                    <i class="far fa-calendar-alt mr-1"></i> {{ now()->locale('ar')->translatedFormat('l، d F Y') }}
                </span>
            </div>
        </div>
    </div>

    {{-- بطاقات الإحصائيات (Stat Boxes) --}}
    <div class="row">
        {{-- إجمالي المقالات --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info shadow-sm">
                <div class="inner">
                    <h3>{{ $blogsCount }}</h3>
                    <p class="font-weight-bold">إجمالي المقالات</p>
                </div>
                <div class="icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <a href="{{ route('admin.blog.index') }}" class="small-box-footer">
                    عرض جميع المقالات <i class="fas fa-arrow-circle-left"></i>
                </a>
            </div>
        </div>

        {{-- إضافة مقال جديد --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success shadow-sm">
                <div class="inner">
                    <h3>+</h3>
                    <p class="font-weight-bold">مقال جديد</p>
                </div>
                <div class="icon">
                    <i class="fas fa-pen-fancy"></i>
                </div>
                <a href="{{ route('admin.blog.create') }}" class="small-box-footer">
                    إنشاء مقال الآن <i class="fas fa-arrow-circle-left"></i>
                </a>
            </div>
        </div>

        {{-- المشرفين --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning shadow-sm">
                <div class="inner">
                    <h3>{{ $usersCount }}</h3>
                    <p class="font-weight-bold">المشرفين المسجلين</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <a href="{{ route('profile.edit') }}" class="small-box-footer">
                    إدارة الملف الشخصي <i class="fas fa-arrow-circle-left"></i>
                </a>
            </div>
        </div>

        {{-- صفحة المدونة العامة --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger shadow-sm">
                <div class="inner">
                    <h3><i class="fas fa-external-link-alt"></i></h3>
                    <p class="font-weight-bold">المدونة في الموقع</p>
                </div>
                <div class="icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <a href="{{ route('blog.index') }}" target="_blank" class="small-box-footer">
                    معاينة صفحة المدونة <i class="fas fa-arrow-circle-left"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- جدول أحدث المقالات --}}
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                    <h3 class="card-title text-dark font-weight-bold m-0">
                        <i class="fas fa-clock text-primary mr-2"></i> أحدث المقالات المنشورة
                    </h3>
                    <a href="{{ route('admin.blog.index') }}" class="btn btn-sm btn-outline-primary">
                        عرض الكل ({{ $blogsCount }})
                    </a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th style="width: 50px" class="text-center">#</th>
                                    <th style="width: 80px" class="text-center">الصورة</th>
                                    <th>العنوان</th>
                                    <th style="width: 130px" class="text-center">تاريخ النشر</th>
                                    <th style="width: 140px" class="text-center">الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($latestBlogs as $blog)
                                    <tr>
                                        <td class="text-center align-middle font-weight-bold">{{ $loop->iteration }}</td>
                                        <td class="align-middle text-center">
                                            @if ($blog->image)
                                                <img src="{{ asset('storage/' . $blog->image) }}"
                                                    class="rounded border" style="width: 48px; height: 48px; object-fit: cover;"
                                                    alt="{{ $blog->title }}">
                                            @else
                                                <div class="bg-secondary text-white d-flex align-items-center justify-content-center rounded mx-auto"
                                                    style="width: 48px; height: 48px; font-size: 10px;">
                                                    بدون صورة
                                                </div>
                                            @endif
                                        </td>
                                        <td class="align-middle font-weight-bold text-dark">
                                            <a href="{{ route('admin.blog.edit', $blog->id) }}" class="text-dark">
                                                {{ $blog->title }}
                                            </a>
                                            <div class="d-block text-muted small mt-1">
                                                {{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 70) }}
                                            </div>
                                        </td>
                                        <td class="text-center align-middle text-muted small">
                                            {{ $blog->created_at ? $blog->created_at->format('Y-m-d') : '—' }}
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('blog.show', $blog->id) }}" target="_blank"
                                                    class="btn btn-xs btn-outline-primary" title="معاينة">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.blog.edit', $blog->id) }}"
                                                    class="btn btn-xs btn-outline-info" title="تعديل">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST"
                                                    onsubmit="return confirm('هل أنت متأكد من حذف هذا المقال؟');"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-xs btn-outline-danger" title="حذف">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-muted">
                                            <i class="fas fa-inbox fa-2x mb-2 text-secondary d-block"></i>
                                            لا توجد مقالات منشورة حتى الآن.
                                            <div class="mt-2">
                                                <a href="{{ route('admin.blog.create') }}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-plus"></i> إضافة مقال جديد
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- العمود الجانبي: روابط سريعة ومعلومات الموقع --}}
        <div class="col-lg-4">
            {{-- بطاقة الإجراءات السريعة --}}
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-white py-3">
                    <h3 class="card-title text-dark font-weight-bold m-0">
                        <i class="fas fa-bolt text-warning mr-2"></i> إجراءات سريعة
                    </h3>
                </div>
                <div class="card-body p-3">
                    <a href="{{ route('admin.blog.create') }}" class="btn btn-outline-primary btn-block text-right mb-2 p-2">
                        <i class="fas fa-plus-circle text-primary ml-2"></i>
                        <strong>إضافة مقال جديد للمدونة</strong>
                    </a>
                    <a href="{{ route('admin.blog.index') }}" class="btn btn-outline-info btn-block text-right mb-2 p-2">
                        <i class="fas fa-list text-info ml-2"></i>
                        <strong>إدارة وتعديل المقالات</strong>
                    </a>
                    <a href="{{ route('blog.index') }}" target="_blank" class="btn btn-outline-success btn-block text-right mb-2 p-2">
                        <i class="fas fa-book-open text-success ml-2"></i>
                        <strong>فتح صفحة المدونات العامة</strong>
                    </a>
                    <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary btn-block text-right p-2">
                        <i class="fas fa-external-link-alt text-secondary ml-2"></i>
                        <strong>فتح الموقع الرئيسي</strong>
                    </a>
                </div>
            </div>

            {{-- بطاقة بيانات الموقع --}}
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h3 class="card-title text-dark font-weight-bold m-0">
                        <i class="fas fa-info-circle text-info mr-2"></i> معلومات الموقع
                    </h3>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group list-group-flush" style="font-size: 0.95rem;">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <span class="text-muted"><i class="fas fa-building mr-1"></i> اسم الشركة:</span>
                            <strong class="text-dark">الأندلس لنقل العفش والمكيفات</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <span class="text-muted"><i class="fas fa-phone mr-1"></i> رقم الهاتف:</span>
                            <strong class="text-primary" dir="ltr">0577806346</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <span class="text-muted"><i class="fab fa-whatsapp mr-1 text-success"></i> واتساب:</span>
                            <strong class="text-success" dir="ltr">966577806346</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <span class="text-muted"><i class="fas fa-map-marker-alt mr-1 text-danger"></i> المدينة:</span>
                            <strong class="text-dark">الرياض، المملكة العربية السعودية</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <span class="text-muted"><i class="fas fa-check-circle mr-1 text-success"></i> حالة النظام:</span>
                            <span class="badge badge-success px-2 py-1">نشط ومحدث</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <style>
        .welcome-card {
            background: linear-gradient(135deg, #073b4c 0%, #08798c 100%) !important;
            border-radius: 12px;
        }

        .small-box {
            border-radius: 12px;
            overflow: hidden;
        }

        .card {
            border-radius: 12px;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .btn-group .btn {
            margin: 0 1px;
            border-radius: 4px !important;
        }
    </style>
@stop
