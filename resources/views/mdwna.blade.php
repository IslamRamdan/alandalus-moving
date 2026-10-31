<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>مدونة الأندلس | مقالات ونصائح نقل العفش والمكيفات بالرياض | 0577806346</title>
    <meta name="description" content="اقرأ أحدث مقالات ونصائح شركة الأندلس لنقل العفش والمكيفات بالرياض. دليلك الشامل لنقل الأثاث وفك وتركيب وصيانة المكيفات والمطابخ والتغليف والتخزين بأعلى جودة." />
    <meta name="keywords" content="مدونة نقل عفش, نصائح نقل الأثاث, صيانة مكيفات الرياض, تركيب مطابخ الرياض, شركة الأندلس لنقل العفش" />
    <meta name="robots" content="index, follow" />
    <meta property="og:title" content="مدونة الأندلس لنقل العفش والمكيفات بالرياض" />
    <meta property="og:description" content="مقالات ونصائح مفيدة في مجال نقل الأثاث والمكيفات بالرياض." />
    <meta property="og:type" content="website" />
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

        /* Hero */
        .blog-header-hero {
            position: relative;
            padding: 130px 0 80px;
            background: linear-gradient(135deg, var(--teal-900) 0%, var(--teal-700) 100%);
            color: #ffffff;
            overflow: hidden;
            text-align: center;
        }

        .blog-header-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle at 20% 30%, rgba(255, 182, 39, 0.15) 0%, transparent 50%),
                              radial-gradient(circle at 80% 70%, rgba(18, 181, 203, 0.15) 0%, transparent 50%);
            pointer-events: none;
        }

        .blog-header-hero .container {
            position: relative;
            z-index: 2;
        }

        .hero-badge-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 20px;
            border-radius: 30px;
            background: rgba(255, 182, 39, 0.2);
            border: 1px solid rgba(255, 182, 39, 0.4);
            color: var(--sun);
            font-weight: 700;
            font-size: 0.95rem;
            margin-bottom: 16px;
        }

        .blog-header-hero h1 {
            font-weight: 900;
            font-size: clamp(2rem, 4vw, 3.2rem);
            margin-bottom: 16px;
            color: #ffffff;
        }

        .blog-header-hero h1 span {
            color: var(--sun);
        }

        .blog-header-hero p {
            max-width: 650px;
            margin: 0 auto 24px;
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.8;
        }

        .blog-breadcrumb-nav {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 6px 16px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            font-size: 0.95rem;
        }

        .blog-breadcrumb-nav a {
            color: #ffffff;
            text-decoration: none;
            transition: color 0.2s;
        }

        .blog-breadcrumb-nav a:hover {
            color: var(--sun);
        }

        .blog-breadcrumb-nav span {
            color: var(--sun);
        }

        /* Search Bar */
        .blog-search-card {
            background: #ffffff;
            padding: 12px 18px;
            border-radius: 50px;
            box-shadow: 0 10px 30px rgba(7, 59, 76, 0.12);
            max-width: 600px;
            margin: 30px auto 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .blog-search-card input {
            border: none;
            outline: none;
            flex: 1;
            font-size: 1rem;
            font-family: inherit;
            padding: 6px 12px;
            background: transparent;
        }

        .blog-search-card .btn-search {
            border: none;
            background: var(--sun);
            color: var(--teal-900);
            font-weight: 800;
            padding: 10px 24px;
            border-radius: 40px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .blog-search-card .btn-search:hover {
            background: #ffa800;
            transform: translateY(-2px);
        }

        /* Post Grid */
        .blog-section-content {
            padding: 70px 0 90px;
        }

        .blog-card-item {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(7, 59, 76, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(7, 59, 76, 0.06);
        }

        .blog-card-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 40px rgba(7, 59, 76, 0.15);
        }

        .blog-thumb-link {
            position: relative;
            display: block;
            aspect-ratio: 16 / 10;
            overflow: hidden;
            background: #e9ecef;
        }

        .blog-thumb-link img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .blog-card-item:hover .blog-thumb-link img {
            transform: scale(1.08);
        }

        .blog-badge-date {
            position: absolute;
            top: 14px;
            right: 14px;
            background: var(--sun);
            color: var(--teal-900);
            font-weight: 800;
            font-size: 0.8rem;
            padding: 5px 12px;
            border-radius: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .blog-card-details {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .blog-card-title {
            font-size: 1.25rem;
            font-weight: 800;
            line-height: 1.5;
            margin-bottom: 12px;
        }

        .blog-card-title a {
            color: var(--teal-900);
            text-decoration: none;
            transition: color 0.25s;
        }

        .blog-card-title a:hover {
            color: var(--teal-700);
        }

        .blog-card-excerpt {
            color: #4a6671;
            font-size: 0.98rem;
            line-height: 1.7;
            margin-bottom: 20px;
            flex: 1;
        }

        .blog-read-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--teal-700);
            font-weight: 800;
            text-decoration: none;
            transition: gap 0.25s, color 0.25s;
            margin-top: auto;
        }

        .blog-read-btn:hover {
            gap: 14px;
            color: var(--teal-900);
        }

        /* Empty State */
        .empty-blog-box {
            background: #ffffff;
            border-radius: 20px;
            padding: 60px 20px;
            text-align: center;
            box-shadow: 0 8px 24px rgba(7, 59, 76, 0.08);
        }

        .empty-blog-box i {
            font-size: 4rem;
            color: var(--sun);
            margin-bottom: 18px;
        }

        .empty-blog-box h3 {
            font-weight: 800;
            color: var(--teal-900);
            margin-bottom: 8px;
        }

        .empty-blog-box p {
            color: #4a6671;
            margin-bottom: 20px;
        }

        /* Pagination */
        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .pagination-container .pagination {
            gap: 8px;
        }

        .pagination-container .page-item .page-link {
            border: none;
            border-radius: 12px;
            background: #ffffff;
            color: var(--teal-900);
            font-weight: 700;
            min-width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(7, 59, 76, 0.08);
            transition: all 0.25s;
        }

        .pagination-container .page-item.active .page-link {
            background: var(--teal-700);
            color: #ffffff;
        }

        .pagination-container .page-item .page-link:hover {
            background: var(--sun);
            color: var(--teal-900);
        }

        /* CTA Section */
        .blog-cta-band {
            background: linear-gradient(135deg, var(--teal-900) 0%, var(--teal-800) 100%);
            color: #ffffff;
            padding: 60px 0;
            border-radius: 24px;
            margin: 40px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .blog-cta-band .btn-cta-gold {
            background: var(--sun);
            color: var(--teal-900);
            font-weight: 800;
            padding: 12px 30px;
            border-radius: 40px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.25s;
            margin: 8px;
        }

        .blog-cta-band .btn-cta-gold:hover {
            background: #ffa800;
            transform: translateY(-2px);
        }

        .blog-cta-band .btn-cta-whatsapp {
            background: #25d366;
            color: #ffffff;
            font-weight: 800;
            padding: 12px 30px;
            border-radius: 40px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.25s;
            margin: 8px;
        }

        .blog-cta-band .btn-cta-whatsapp:hover {
            background: #20ba5a;
            transform: translateY(-2px);
            color: #ffffff;
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

    <!-- ===== HERO SECTION ===== -->
    <header class="blog-header-hero">
        <div class="container" data-aos="fade-up">
            <div class="hero-badge-tag">
                <i class="fas fa-newspaper"></i> مدونة الأندلس
            </div>
            <h1>مقالات ونصائح <span>نقل العفش</span> والمكيفات</h1>
            <p>
                تعرّف على أهم النصائح الاحترافية لنقل الأثاث بأمان وفك وتركيب المكيفات والمطابخ وتغليف العفش داخل وخارج الرياض بأعلى معايير الجودة.
            </p>
            <nav class="blog-breadcrumb-nav" aria-label="مسار التنقل">
                <a href="{{ url('/') }}"><i class="fas fa-home"></i> الرئيسية</a>
                <i class="fas fa-chevron-left" style="font-size: 0.75rem; opacity: 0.6;"></i>
                <span>المدونة</span>
            </nav>

            {{-- شريط البحث --}}
            <form action="{{ route('blog.index') }}" method="GET" class="blog-search-card">
                <i class="fas fa-search text-muted mr-2"></i>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="ابحث في مقالات المدونة..." />
                @if (request('search'))
                    <a href="{{ route('blog.index') }}" class="text-danger text-decoration-none px-2" title="إلغاء البحث">
                        <i class="fas fa-times"></i>
                    </a>
                @endif
                <button type="submit" class="btn-search">
                    <span>بحث</span>
                </button>
            </form>
        </div>
    </header>

    <!-- ===== BLOG POSTS GRID ===== -->
    <main class="blog-section-content">
        <div class="container">

            @if (request('search'))
                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <h5 class="text-muted m-0">
                        نتائج البحث عن: <strong class="text-dark">"{{ request('search') }}"</strong>
                    </h5>
                    <a href="{{ route('blog.index') }}" class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-undo mr-1"></i> عرض كل المقالات
                    </a>
                </div>
            @endif

            @if ($posts->count())
                <div class="row g-4">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($loop->index % 3) * 100 }}">
                            <article class="blog-card-item">
                                <a href="{{ route('blog.show', $post->id) }}" class="blog-thumb-link">
                                    <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('css/1.jpg') }}"
                                         alt="{{ $post->title }}"
                                         loading="lazy" />
                                    <span class="blog-badge-date">
                                        <i class="far fa-calendar-alt"></i>
                                        {{ $post->created_at ? $post->created_at->locale('ar')->translatedFormat('d F Y') : 'حديثاً' }}
                                    </span>
                                </a>

                                <div class="blog-card-details">
                                    <h2 class="blog-card-title">
                                        <a href="{{ route('blog.show', $post->id) }}">
                                            {{ $post->title }}
                                        </a>
                                    </h2>

                                    <p class="blog-card-excerpt">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($post->content), 125) }}
                                    </p>

                                    <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                                        <a href="{{ route('blog.show', $post->id) }}" class="blog-read-btn">
                                            <span>اقرأ المقال</span>
                                            <i class="fas fa-arrow-left"></i>
                                        </a>
                                        @auth
                                            <a href="{{ route('admin.blog.edit', $post->id) }}" class="text-muted small" title="تعديل المقال">
                                                <i class="fas fa-edit"></i> تعديل
                                            </a>
                                        @endauth
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>

                {{-- الترقيم (Pagination) --}}
                <div class="pagination-container">
                    {{ $posts->links() }}
                </div>
            @else
                <div class="empty-blog-box">
                    <i class="fas fa-folder-open"></i>
                    <h3>لا توجد مقالات متوفرة حالياً</h3>
                    <p>
                        @if (request('search'))
                            لم نجد أي مقال يطابق بحثك عن "{{ request('search') }}". حاول البحث بكلمات أخرى.
                        @else
                            سيتم نشر مقالات ونصائح مفيدة في أقرب وقت. تابعونا دائماً!
                        @endif
                    </p>
                    @if (request('search'))
                        <a href="{{ route('blog.index') }}" class="btn btn-outline-primary px-4 py-2" style="border-radius: 30px;">
                            <i class="fas fa-arrow-right mr-1"></i> العودة لجميع المقالات
                        </a>
                    @else
                        <a href="{{ url('/') }}" class="btn btn-outline-primary px-4 py-2" style="border-radius: 30px;">
                            <i class="fas fa-home mr-1"></i> العودة للصفحة الرئيسية
                        </a>
                    @endif
                </div>
            @endif

            {{-- بانر تواصل سريع (CTA Band) --}}
            <div class="blog-cta-band mt-5" data-aos="fade-up">
                <div class="container px-4">
                    <h3 class="font-weight-bold mb-3">هل تحتاج إلى نقل عفش أو تركيب مكيفات بالرياض؟</h3>
                    <p class="mb-4 text-light" style="max-width: 650px; margin-left: auto; margin-right: auto; font-size: 1.05rem;">
                        فريق شركة الأندلس في خدمتكم بأحدث سيارات النقل المجهزة وفنيين محترفين لفك وتركيب الأثاث والمكيفات بأفضل الأسعار.
                    </p>
                    <div>
                        <a href="tel:0577806346" class="btn-cta-gold">
                            <i class="fas fa-phone-alt"></i>
                            <span>اتصل بنا الآن: 0577806346</span>
                        </a>
                        <a href="https://wa.me/966577806346" target="_blank" class="btn-cta-whatsapp">
                            <i class="fab fa-whatsapp"></i>
                            <span>تواصل عبر واتساب</span>
                        </a>
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
    </script>
</body>

</html>
