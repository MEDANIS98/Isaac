<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="rtl">

<head>
    <meta charset="UTF-8">
    <link rel="manifest" href="manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}">
    <meta name="theme-color" content="#3F3630">
    <meta name="msapplication-navbutton-color" content="#3F3630">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="الموقع الرسمي لفضيلة الشيخ أ. د. عمر حمرون">
    <meta name="keywords"
        content="تفسير, تفسير صوتي, كتب, سلاسل علمية, محاضرات, محاضرة, قرآن, آية, آيات, قرآن كريم, إسلام">
    <link rel="canonical" href="index.html" />
    <meta property="og:title" content="الموقع الرسمي للشيخ أ. د. عمر حمرون" />
    <meta property="og:description" content="الموقع الرسمي لفضيلة الشيخ أ. د. عمر حمرون" />
    <meta property="og:url" content="index.html" />
    <meta property="og:type" content="articles" />
    <meta property="og:image" content="img/social-cover.jpg" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@drkhaledalsabt" />
    <link rel="preload" href="css/app57e7.css?id=3ea8d7c3d64f0ccce1c5" as="style" />
    <link rel="preload" href="https://fonts.gstatic.com/ea/notonaskharabic/v4/NotoNaskhArabic-Regular.woff2" as="font"
        type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="https://fonts.gstatic.com/ea/notonaskharabic/v4/NotoNaskhArabic-Bold.woff2" as="font"
        type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="https://fonts.gstatic.com/ea/notokufiarabic/v2/NotoKufiArabic-Regular.woff2" as="font"
        type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="https://fonts.gstatic.com/ea/notokufiarabic/v2/NotoKufiArabic-Bold.woff2" as="font"
        type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        as="style" />
    <link rel="preload"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2?v=4.7.0"
        as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/app57e7.css?id=3ea8d7c3d64f0ccce1c5">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJFLMDM" height="0" width="0"
            style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    @include('layouts.header')
    @yield('slider')
    <div class="container utility__margin__top--25">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                @yield('content')
            </div>
            @include('layouts.sidebar')
        </div>
    </div>
    @include('layouts.footer')
    <noscript id="deferred-styles">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/fontsa2f1.css?id=0d1bc9f23952186e27b5">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick-theme.min.css">
    </noscript>
    <script src="/js/styles-loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/jplayer/jquery.jplayer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/add-on/jplayer.playlist.min.js"></script>
    <script src="/js/worker.js"></script>
    <script src="/js/appbbcc.js?id=d1ab7a729afc99b76b96"></script>
    <script src="/vendor/search/js/bundle.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.js"></script>
    <script src="/js/slider.js"></script>
    <script src="/js/ga.js"></script>
</body>

</html>
