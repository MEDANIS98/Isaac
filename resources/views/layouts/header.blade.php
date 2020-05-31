<header>
    @include('layouts.topbar')
    <div class="header-bg d-none d-lg-block">
        <div class="container">
            <div class="row utility__flex-centered">
                <div class="col-sm-4">
                    <a href="/">
                        <img src="img/site-logo.png" alt="موقع فضيلة الشيخ خالد بن عثمان السبت"
                            class="logo-img logo-img-hidden-when-fixed">
                        <img src="img/site-logo-sm.png" alt="موقع فضيلة الشيخ خالد بن عثمان السبت"
                            class="logo-img logo-img-shown-when-fixed">
                    </a>
                </div>
                @include('partials.search')
                {{-- Authentication --}}
                <div class="col-sm utility__text-left">
                    {{-- <button type="button"
                        class="btn btn--light btn--with-icon btn--outlined btn--outlined--light drop-down__button utility__display-inline-block "
                        data-intro="يمكنك تسجيل الدخول من هنا للإستفادة من ميزات الموقع مثل قائمة المفضلة و قائمة المدارسة."
                        data-step="2" data-position="right" style="padding: 9px 8px;">
                        الحساب الشخصي
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="drop-down__content utility__text-right" style="top: 38px;left: 15px;">
                        <li><a href="profile/login.html">دخول</a></li>
                        <li><a href="profile/register.html">تسجيل</a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
    @include('layouts.navbar')
</header>
