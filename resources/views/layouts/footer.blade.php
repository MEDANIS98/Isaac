<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="/">
                    <img src="/img/site-logo.png" alt="@lang(config('app.name'))" class="logo-footer-img">
                </a>
                <div class="d-flex justify-content-center align-items-center utility__margin__v--1">
                </div>
                <hr class="my-4 slim-gray">
                @lang('All rights reserved') -
                {{ $today }} هـ
                / {{ date('Y') }} مـ &copy;
            </div>
        </div>
    </div>
</footer>
