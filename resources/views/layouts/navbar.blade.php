<nav class="main-nav">
    <div class="container menu-container">
        @include('partials.searchbox')
        <a href="#menu" class="menu-toggle"><span></span></a>
        <a href="/" class="menu-logo d-flex d-lg-none">
            <img src="img/site-logo-white.png" alt="موقع الشيخ خالد السبت">
        </a>
        <ul>
            <li>
                <a href="/">
                    <i class="fa fa-home" aria-hidden="true" style="font-size: 49px;"></i>
                </a>
            </li>
            <li>
                <a href="/interpretation">
                    <i class="icon icon-tafseer"></i> @lang('Interpretation')
                </a>
            </li>
            <li>
                <a href="/explanations">
                    <i class="icon icon-explanation"></i> @lang('Explanations')
                </a>
            </li>
            <li>
                <a href="/lectures">
                    <i class="icon icon-lecture"></i> @lang('Lectures')
                </a>
            </li>
            <li>
                <a href="#" class="drop-down__button ">
                    <i class="icon icon-video"></i> @lang('Featured Clips')
                </a>
                <ul class="drop-down__content utility__text-right utility__display-block"
                    style="width: 100px; display: none;">
                    <li><a href="/audio">@lang('Audio Clips')</a></li>
                    <li><a href="/video">@lang('Video Clips')</a></li>
                </ul>
            </li>
            <li>
                <a href="/library">
                    <i class="icon icon-books"></i> @lang('Library')
                </a>
            </li>
            <li>
                <a href="/fatawa">
                    <i class="icon icon-words"></i> @lang('Fatawa')
                </a>
            </li>
            <li>
                <a href="/contact">
                    <i class="fa fa-envelope" aria-hidden="true" style="font-size: 31px;"></i> <br>
                    @lang('Contact')
                </a>
            </li>
        </ul>
    </div>
</nav>
