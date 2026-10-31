<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $post->title }} | الأندلس لنقل العفش والمكيفات بالرياض</title>
    <meta name="description" content="{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 160) }}" />
    <meta name="robots" content="index, follow" />
    <meta property="og:title" content="{{ $post->title }} | الأندلس" />
    <meta property="og:description" content="{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 160) }}" />
    <meta property="og:image" content="{{ $post->image ? asset('storage/' . $post->image) : asset('css/1.jpg') }}" />
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="ar_SA" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800;900&family=Tajawal:wght@300;400;500;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Bootstrap RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <style>
        :root {
            --teal-900: #073b4c;
            --teal-800: #0a4f63;
            --teal-700: #08798c;
            --teal-500: #12b5cb;
            --mist: #f2fafb;
            --sun: #ffb627;
            --coral: #ff6f59;
            --ink: #0f3340;
        }

        body {
            font-family: 'Cairo', 'Tajawal', sans-serif;
            background-color: var(--mist);
            color: var(--ink);
            overflow-x: hidden;
        }

        /* Post Hero */
        .single-post-hero {
            position: relative;
            padding: 130px 0 70px;
            background: linear-gradient(135deg, var(--teal-900) 0%, var(--teal-700) 100%);
            color: #ffffff;
            overflow: hidden;
        }

        .single-post-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle at 10% 20%, rgba(255, 182, 39, 0.12) 0%, transparent 40%),
                              radial-gradient(circle at 90% 80%, rgba(18, 181, 203, 0.12) 0%, transparent 40%);
            pointer-events: none;
        }

        .single-post-hero .container {
            position: relative;
            z-index: 2;
            max-width: 950px;
        }

        .post-breadcrumb-nav {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 6px 16px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            margin-bottom: 20px;
        }

        .post-breadcrumb-nav a {
            color: #ffffff;
            text-decoration: none;
            transition: color 0.2s;
        }

        .post-breadcrumb-nav a:hover {
            color: var(--sun);
        }

        .post-breadcrumb-nav span {
            color: var(--sun);
        }

        .post-main-title {
            font-weight: 900;
            font-size: clamp(1.8rem, 3.5vw, 2.8rem);
            line-height: 1.4;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .post-meta-strip {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            color: rgba(255, 255, 255, 0.85);
            font-size: 0.95rem;
        }

        .post-meta-item {
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .post-meta-item i {
            color: var(--sun);
        }

        /* Post Content Area */
        .post-body-container {
            padding: 60px 0 90px;
        }

        .article-card {
            background: #ffffff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(7, 59, 76, 0.08);
            border: 1px solid rgba(7, 59, 76, 0.06);
            padding: 35px;
            margin-bottom: 30px;
        }

        .article-featured-img-wrap {
            margin: -35px -35px 30px;
            overflow: hidden;
            background: #e9ecef;
            max-height: 500px;
        }

        .article-featured-img {
            width: 100%;
            height: 100%;
            max-height: 500px;
            object-fit: cover;
            display: block;
        }

        .article-content {
            font-size: 1.15rem;
            line-height: 2.1;
            color: #1e3a47;
        }

        .article-content p {
            margin-bottom: 22px;
        }

        .article-content h2,
        .article-content h3,
        .article-content h4 {
            color: var(--teal-900);
            font-weight: 800;
            margin-top: 35px;
            margin-bottom: 16px;
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 16px;
            margin: 20px 0;
        }

        .article-content ul,
        .article-content ol {
            padding-right: 25px;
            margin-bottom: 22px;
        }

        .article-content li {
            margin-bottom: 10px;
        }

        /* Social Share Bar */
        .social-share-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
            padding: 20px 0;
            border-top: 2px solid #eef3f6;
            border-bottom: 2px solid #eef3f6;
            margin: 40px 0 30px;
        }

        .social-share-title {
            font-weight: 800;
            color: var(--teal-900);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .share-buttons-group {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .share-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 0.9rem;
            text-decoration: none;
            color: #ffffff;
            transition: transform 0.25s, opacity 0.25s;
        }

        .share-btn:hover {
            transform: translateY(-2px);
            opacity: 0.9;
            color: #ffffff;
        }

        .share-btn-wa { background: #25d366; }
        .share-btn-x { background: #000000; }
        .share-btn-fb { background: #1877f2; }
        .share-btn-copy { background: var(--teal-700); cursor: pointer; border: none; }

        /* Help Box */
        .article-help-box {
            background: linear-gradient(135deg, var(--teal-900) 0%, var(--teal-800) 100%);
            color: #ffffff;
            border-radius: 20px;
            padding: 30px;
            margin-top: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .article-help-box h4 {
            font-weight: 800;
            margin-bottom: 6px;
            color: #ffffff;
        }

        .article-help-box p {
            margin: 0;
            color: rgba(255, 255, 255, 0.85);
            font-size: 0.98rem;
        }

        .article-help-btns {
            display: inline-flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn-help-gold {
            background: var(--sun);
            color: var(--teal-900);
            font-weight: 800;
            padding: 10px 22px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.25s;
        }

        .btn-help-gold:hover {
            background: #ffa800;
            transform: translateY(-2px);
            color: var(--teal-900);
        }

        .btn-help-wa {
            background: #25d366;
            color: #ffffff;
            font-weight: 800;
            padding: 10px 22px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.25s;
        }

        .btn-help-wa:hover {
            background: #20ba5a;
            transform: translateY(-2px);
            color: #ffffff;
        }

        /* Sidebar */
        .sidebar-widget {
            background: #ffffff;
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 8px 24px rgba(7, 59, 76, 0.08);
            border: 1px solid rgba(7, 59, 76, 0.06);
            margin-bottom: 30px;
        }

        .widget-title {
            font-weight: 800;
            font-size: 1.2rem;
            color: var(--teal-900);
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 2px solid #eef3f6;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .widget-title i {
            color: var(--sun);
        }

        .related-post-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 12px 0;
            border-bottom: 1px dashed #eef3f6;
            text-decoration: none;
            transition: transform 0.2s;
        }

        .related-post-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .related-post-item:hover {
            transform: translateX(-4px);
        }

        .related-post-thumb {
            width: 72px;
            height: 72px;
            border-radius: 12px;
            object-fit: cover;
            flex-shrink: 0;
            background: #e9ecef;
        }

        .related-post-info h5 {
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--teal-900);
            margin-bottom: 4px;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .related-post-item:hover .related-post-info h5 {
            color: var(--teal-700);
        }

        .related-post-date {
            font-size: 0.8rem;
            color: #7b939c;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .contact-widget-cta {
            background: linear-gradient(135deg, var(--teal-900) 0%, var(--teal-700) 100%);
            color: #ffffff;
            border-radius: 20px;
            padding: 30px 24px;
            text-align: center;
        }

        .contact-widget-cta h4 {
            font-weight: 800;
            color: var(--sun);
            margin-bottom: 10px;
        }

        .contact-widget-cta p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.95rem;
            margin-bottom: 22px;
        }
    </style>
</head>

<body>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar navbar-expand-xl fixed-top" id="mainNav" role="navigation" aria-label="القائمة الرئيسية">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}" aria-label="الأندلس - الصفحة الرئيسية">
                <div class="brand-logo">
                    <i class="fas fa-truck-moving brand-icon"></i>
                    <div class="brand-text">
                        <span class="brand-ar">الأندلس</span>
                        <span class="brand-en">Al-Andalus</span>
                    </div>
                </div>
            </a>

            <div class="lang-toggle nav-lang-mobile">
                <a href="tel:0577806346" class="btn btn-lang" aria-label="اتصال">
                    <i class="fas fa-phone-alt"></i>
                </a>
            </div>

            <button class="navbar-toggler hamburger-btn" id="hamburgerBtn" type="button" aria-label="القائمة" aria-expanded="false">
                <span class="ham-line"></span>
                <span class="ham-line"></span>
                <span class="ham-line"></span>
            </button>

            <div class="navbar-collapse collapse d-none d-xl-flex" id="navbarMenu">
                <ul class="navbar-nav nav-main" id="navLinks">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#hero">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#about">من نحن</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#services">خدماتنا</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#ac-service">المكيفات</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#kitchen-service">المطابخ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#wrapping-service">التغليف</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#portfolio">أعمالنا</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('blog.index') }}">المقالات</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#contact">تواصل معنا</a></li>
                </ul>
                <div class="nav-actions">
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-light me-2" style="border-radius: 30px; font-weight: 700; padding: 7px 18px;">
                            <i class="fas fa-tachometer-alt me-1"></i> لوحة التحكم
                        </a>
                    @endauth
                    <a href="tel:0577806346" class="btn btn-call-nav">
                        <i class="fas fa-phone-alt"></i>
                        <span>0577806346</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay" id="mobileMenuOverlay">
        <div class="mobile-menu-content">
            <button class="mobile-close-btn" id="mobileCloseBtn" aria-label="إغلاق القائمة">
                <i class="fas fa-times"></i>
            </button>
            <div class="mobile-brand">
                <i class="fas fa-truck-moving"></i>
                <span>الأندلس</span>
            </div>
            <ul class="mobile-nav-list">
                <li><a href="{{ url('/') }}#hero" class="mobile-nav-link"><i class="fas fa-home"></i><span>الرئيسية</span></a></li>
                <li><a href="{{ url('/') }}#about" class="mobile-nav-link"><i class="fas fa-info-circle"></i><span>من نحن</span></a></li>
                <li><a href="{{ url('/') }}#services" class="mobile-nav-link"><i class="fas fa-concierge-bell"></i><span>خدماتنا</span></a></li>
                <li><a href="{{ url('/') }}#ac-service" class="mobile-nav-link"><i class="fas fa-snowflake"></i><span>المكيفات</span></a></li>
                <li><a href="{{ url('/') }}#kitchen-service" class="mobile-nav-link"><i class="fas fa-utensils"></i><span>المطابخ</span></a></li>
                <li><a href="{{ url('/') }}#wrapping-service" class="mobile-nav-link"><i class="fas fa-box"></i><span>التغليف</span></a></li>
                <li><a href="{{ url('/') }}#portfolio" class="mobile-nav-link"><i class="fas fa-images"></i><span>أعمالنا</span></a></li>
                <li><a href="{{ route('blog.index') }}" class="mobile-nav-link active"><i class="fas fa-newspaper"></i><span>المقالات</span></a></li>
                <li><a href="{{ url('/') }}#contact" class="mobile-nav-link"><i class="fas fa-envelope"></i><span>تواصل معنا</span></a></li>
            </ul>
            <div class="mobile-menu-actions">
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-light w-100 mb-2">
                        <i class="fas fa-tachometer-alt me-1"></i> لوحة التحكم
                    </a>
                @endauth
                <a href="tel:0577806346" class="btn btn-primary-gold w-100 mb-3">
                    <i class="fas fa-phone-alt"></i>
                    <span>اتصل بنا 0577806346</span>
                </a>
                <a href="https://wa.me/966577806346" target="_blank" class="btn btn-whatsapp w-100">
                    <i class="fab fa-whatsapp"></i>
                    <span>واتساب</span>
                </a>
            </div>
        </div>
    </div>

    <!-- ===== ARTICLE HERO HEADER ===== -->
    <header class="single-post-hero">
        <div class="container" data-aos="fade-up">
            <nav class="post-breadcrumb-nav" aria-label="مسار التنقل">
                <a href="{{ url('/') }}"><i class="fas fa-home"></i> الرئيسية</a>
                <i class="fas fa-chevron-left" style="font-size: 0.75rem; opacity: 0.6;"></i>
                <a href="{{ route('blog.index') }}">المدونة</a>
                <i class="fas fa-chevron-left" style="font-size: 0.75rem; opacity: 0.6;"></i>
                <span>تفاصيل المقال</span>
            </nav>

            <h1 class="post-main-title">{{ $post->title }}</h1>

            <div class="post-meta-strip">
                <div class="post-meta-item">
                    <i class="far fa-calendar-alt"></i>
                    <span>{{ $post->created_at ? $post->created_at->locale('ar')->translatedFormat('d F Y') : 'نُشر حديثاً' }}</span>
                </div>
                <div class="post-meta-item">
                    <i class="far fa-user"></i>
                    <span>فريق الأندلس</span>
                </div>
                <div class="post-meta-item">
                    <i class="far fa-clock"></i>
                    <span>قراءة 3 دقائق</span>
                </div>
                @auth
                    <div class="post-meta-item">
                        <a href="{{ route('admin.blog.edit', $post->id) }}" class="badge bg-warning text-dark px-3 py-2 text-decoration-none">
                            <i class="fas fa-edit mr-1"></i> تعديل المقال (لوحة التحكم)
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </header>

    <!-- ===== POST BODY & SIDEBAR ===== -->
    <main class="post-body-container">
        <div class="container">
            <div class="row g-4">
                {{-- المحتوى الرئيسي --}}
                <div class="col-lg-8" data-aos="fade-up">
                    <article class="article-card">
                        @if ($post->image)
                            <div class="article-featured-img-wrap">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="article-featured-img" />
                            </div>
                        @endif

                        <div class="article-content">
                            {!! $post->content !!}
                        </div>

                        {{-- أزرار المشاركة الاجتماعية --}}
                        <div class="social-share-box">
                            <span class="social-share-title">
                                <i class="fas fa-share-alt"></i> شارك المقال مع أصدقائك:
                            </span>
                            <div class="share-buttons-group">
                                <a href="https://wa.me/?text={{ urlencode($post->title . ' - ' . url()->current()) }}" target="_blank" class="share-btn share-btn-wa">
                                    <i class="fab fa-whatsapp"></i> واتساب
                                </a>
                                <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(url()->current()) }}" target="_blank" class="share-btn share-btn-x">
                                    <i class="fab fa-x-twitter"></i> تويتر (X)
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="share-btn share-btn-fb">
                                    <i class="fab fa-facebook-f"></i> فيسبوك
                                </a>
                                <button type="button" class="share-btn share-btn-copy" onclick="copyPostLink()" id="copyBtn">
                                    <i class="fas fa-link"></i> نسخ الرابط
                                </button>
                            </div>
                        </div>

                        {{-- بطاقة المساعدة والتواصل السريع داخل المقال --}}
                        <div class="article-help-box">
                            <div>
                                <h4>هل تحتاج إلى استشارة أو خدمة نقل بالرياض؟</h4>
                                <p>خبراء شركة الأندلس جاهزون للإجابة على استفساراتك وتقديم أفضل عروض الأسعار.</p>
                            </div>
                            <div class="article-help-btns">
                                <a href="tel:0577806346" class="btn-help-gold">
                                    <i class="fas fa-phone-alt"></i> 0577806346
                                </a>
                                <a href="https://wa.me/966577806346" target="_blank" class="btn-help-wa">
                                    <i class="fab fa-whatsapp"></i> واتساب
                                </a>
                            </div>
                        </div>

                        {{-- زر العودة للمدونة --}}
                        <div class="mt-4 pt-3 text-center">
                            <a href="{{ route('blog.index') }}" class="btn btn-outline-primary px-4 py-2" style="border-radius: 30px; font-weight: 700;">
                                <i class="fas fa-arrow-right mr-2"></i> العودة لجميع مقالات المدونة
                            </a>
                        </div>
                    </article>
                </div>

                {{-- الشريط الجانبي (Sidebar) --}}
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
                    {{-- بطاقة تواصل سريعة --}}
                    <div class="contact-widget-cta mb-4">
                        <i class="fas fa-truck-moving fa-3x mb-3 text-warning"></i>
                        <h4>شركة الأندلس لنقل العفش</h4>
                        <p>خدمات نقل الأثاث، فك وتركيب المكيفات، صيانة وتفصيل المطابخ والتخزين الآمن بالرياض بأعلى دقة واحترافية.</p>
                        <a href="tel:0577806346" class="btn btn-warning w-100 mb-2 font-weight-bold" style="border-radius: 30px; font-weight: 800; padding: 10px;">
                            <i class="fas fa-phone-alt mr-1"></i> اتصل بنا: 0577806346
                        </a>
                        <a href="https://wa.me/966577806346" target="_blank" class="btn btn-success w-100" style="border-radius: 30px; font-weight: 800; padding: 10px;">
                            <i class="fab fa-whatsapp mr-1"></i> تواصل عبر واتساب
                        </a>
                    </div>

                    {{-- مقالات ذات صلة --}}
                    @if (isset($related) && $related->count())
                        <div class="sidebar-widget">
                            <h3 class="widget-title">
                                <i class="fas fa-newspaper"></i> مقالات أخرى قد تهمك
                            </h3>
                            <div>
                                @foreach ($related as $rel)
                                    <a href="{{ route('blog.show', $rel->id) }}" class="related-post-item">
                                        <img src="{{ $rel->image ? asset('storage/' . $rel->image) : asset('css/1.jpg') }}"
                                             alt="{{ $rel->title }}"
                                             class="related-post-thumb"
                                             loading="lazy" />
                                        <div class="related-post-info">
                                            <h5>{{ $rel->title }}</h5>
                                            <span class="related-post-date">
                                                <i class="far fa-calendar-alt"></i>
                                                {{ $rel->created_at ? $rel->created_at->locale('ar')->translatedFormat('d F Y') : '' }}
                                            </span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- خدماتنا السريعة --}}
                    <div class="sidebar-widget">
                        <h3 class="widget-title">
                            <i class="fas fa-concierge-bell"></i> خدماتنا بالرياض
                        </h3>
                        <ul class="list-unstyled mb-0" style="font-weight: 700; line-height: 2.2;">
                            <li><a href="{{ url('/') }}#ac-service" class="text-decoration-none text-dark"><i class="fas fa-check-circle text-success mr-2"></i> فك وتركيب وصيانة المكيفات</a></li>
                            <li><a href="{{ url('/') }}#moving-service" class="text-decoration-none text-dark"><i class="fas fa-check-circle text-success mr-2"></i> نقل الأثاث والعفش بسيارات مجهزة</a></li>
                            <li><a href="{{ url('/') }}#kitchen-service" class="text-decoration-none text-dark"><i class="fas fa-check-circle text-success mr-2"></i> فك وتركيب وتعديل المطابخ</a></li>
                            <li><a href="{{ url('/') }}#storage-service" class="text-decoration-none text-dark"><i class="fas fa-check-circle text-success mr-2"></i> مستودعات تخزين أثاث مؤمنة</a></li>
                            <li><a href="{{ url('/') }}#wrapping-service" class="text-decoration-none text-dark"><i class="fas fa-check-circle text-success mr-2"></i> تغليف العفش بمواد حماية عالية</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ===== SECTION: FOOTER ===== -->
    <footer class="footer-section" id="footer" aria-label="تذييل الصفحة">
        <div class="footer-top">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-brand">
                            <i class="fas fa-truck-moving"></i>
                            <span>الأندلس</span>
                        </div>
                        <p class="footer-desc">
                            الأندلس لنقل العفش والمكيفات بالرياض — شركتك الأولى لخدمات النقل والتركيب والتخزين. نعمل بأعلى معايير الجودة وأفضل الأسعار داخل وخارج الرياض.
                        </p>
                        <div class="footer-social">
                            <a href="https://wa.me/966577806346" target="_blank" aria-label="واتساب" class="social-link whatsapp-social"><i class="fab fa-whatsapp"></i></a>
                            <a href="tel:0577806346" aria-label="اتصال" class="social-link phone-social"><i class="fas fa-phone-alt"></i></a>
                            <a href="https://www.snapchat.com/add/lnhrldhhby80?share_id=jn9fuuvSFxA&locale=ar-DZ" target="_blank" rel="noopener" aria-label="سناب شات" class="social-link"><i class="fab fa-snapchat-ghost"></i></a>
                            <a href="https://www.instagram.com/ma33112244?srtk=N3RmdW5pOXQyZzF1" target="_blank" rel="noopener" aria-label="انستجرام" class="social-link"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.facebook.com/RiyadhExpress45" target="_blank" rel="noopener" aria-label="فيسبوك" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h4 class="footer-title">روابط سريعة</h4>
                        <ul class="footer-links">
                            <li><a href="{{ url('/') }}#hero">الرئيسية</a></li>
                            <li><a href="{{ url('/') }}#about">من نحن</a></li>
                            <li><a href="{{ url('/') }}#services">خدماتنا</a></li>
                            <li><a href="{{ url('/') }}#portfolio">أعمالنا</a></li>
                            <li><a href="{{ route('blog.index') }}">المقالات</a></li>
                            <li><a href="{{ url('/') }}#contact">تواصل معنا</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="footer-title">خدماتنا</h4>
                        <ul class="footer-links">
                            <li><a href="{{ url('/') }}#ac-service">فك وتركيب المكيفات</a></li>
                            <li><a href="{{ url('/') }}#moving-service">نقل العفش بالرياض</a></li>
                            <li><a href="{{ url('/') }}#kitchen-service">تركيب وصيانة المطابخ</a></li>
                            <li><a href="{{ url('/') }}#storage-service">تخزين الأثاث</a></li>
                            <li><a href="{{ url('/') }}#wrapping-service">تغليف العفش الاحترافي</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="footer-title">تواصل معنا</h4>
                        <ul class="footer-contact">
                            <li><i class="fas fa-phone-alt"></i> <a href="tel:0577806346">0577806346</a></li>
                            <li><i class="fab fa-whatsapp"></i> <a href="https://wa.me/966577806346" target="_blank">0577806346</a></li>
                            <li><i class="fas fa-map-marker-alt"></i> <span>الرياض، المملكة العربية السعودية</span></li>
                            <li><i class="fas fa-clock"></i> <span>متاحون 24 ساعة / 7 أيام</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-inner">
                    <p>© {{ date('Y') }} الأندلس لنقل العفش والمكيفات. جميع الحقوق محفوظة.</p>
                    <p class="designed-by">
                        <span>تم التصميم بواسطة</span>
                        <a href="https://wa.me/201228602122" target="_blank" class="comma-tech-link" aria-label="Comma-Tech على واتساب">Comma-Tech</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- ===== FLOATING ACTION BUTTONS ===== -->
    <div class="floating-actions" role="complementary" aria-label="أزرار التواصل السريع">
        <a href="https://wa.me/966577806346" target="_blank" class="fab-btn fab-whatsapp" aria-label="تواصل عبر واتساب" id="fabWhatsapp">
            <i class="fab fa-whatsapp"></i>
            <span class="fab-tooltip">واتساب</span>
        </a>
        <a href="tel:0577806346" class="fab-btn fab-phone" aria-label="اتصال مباشر" id="fabPhone">
            <i class="fas fa-phone-alt"></i>
            <span class="fab-tooltip">اتصال</span>
        </a>
    </div>

    <!-- ===== SCROLL TO TOP ===== -->
    <button class="scroll-top-btn" id="scrollTopBtn" aria-label="العودة لأعلى" onclick="window.scrollTo({top:0,behavior:'smooth'})">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof AOS !== 'undefined') {
                AOS.init({ duration: 800, once: true });
            }

            // Hamburger menu
            const hamburgerBtn = document.getElementById('hamburgerBtn');
            const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
            const mobileCloseBtn = document.getElementById('mobileCloseBtn');

            if (hamburgerBtn && mobileMenuOverlay) {
                hamburgerBtn.addEventListener('click', function () {
                    mobileMenuOverlay.classList.add('active');
                    document.body.style.overflow = 'hidden';
                });
            }

            if (mobileCloseBtn && mobileMenuOverlay) {
                mobileCloseBtn.addEventListener('click', function () {
                    mobileMenuOverlay.classList.remove('active');
                    document.body.style.overflow = '';
                });
            }

            // Scroll Top Button
            const scrollTopBtn = document.getElementById('scrollTopBtn');
            window.addEventListener('scroll', function () {
                if (window.scrollY > 300) {
                    if (scrollTopBtn) scrollTopBtn.classList.add('show');
                } else {
                    if (scrollTopBtn) scrollTopBtn.classList.remove('show');
                }
            });
        });

        function copyPostLink() {
            navigator.clipboard.writeText(window.location.href).then(function() {
                const btn = document.getElementById('copyBtn');
                const orig = btn.innerHTML;
                btn.innerHTML = '<i class="fas fa-check"></i> تم النسخ!';
                setTimeout(() => { btn.innerHTML = orig; }, 2500);
            }).catch(function(err) {
                alert('تم نسخ الرابط: ' + window.location.href);
            });
        }
    </script>
</body>

</html>
