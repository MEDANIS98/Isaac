<nav class="main-nav">
    <div class="container menu-container">
        <a href="#menu" class="menu-toggle"><span></span></a>
        <a href="#search-box" class="search-toggle" data-toggle=".menu-container__search-box"><i
                class="fa fa-search"></i></a>
        <a href="index.html" class="menu-logo d-flex d-lg-none">
            <img src="img/site-logo-white.png" alt="موقع الشيخ خالد السبت">
        </a>
        <ul>
            <li class="">
                <a href="interpretations.html">
                    <i class="icon icon-tafseer"></i> التفسير والتدبر
                </a>
            </li>
            <li class="">
                <a href="explanations.html">
                    <i class="icon icon-explanation"></i> شروح الكتب
                </a>
            </li>
            <li class="">
                <a href="series.html">
                    <i class="icon icon-series"></i> سلاسل علمية
                </a>
            </li>
            <li class="">
                <a href="lectures.html">
                    <i class="icon icon-lecture"></i> المحاضرات
                </a>
            </li>
            <li class="">
                <a href="words.html">
                    <i class="icon icon-words"></i> كلمات عامة
                </a>
            </li>
            <li class="">
                <a href="#" class="drop-down__button ">
                    <i class="icon icon-video"></i> مقاطع مميزة
                </a>
                <ul class="drop-down__content utility__text-right utility__display-block"
                    style="width: 100px; display: none;">
                    <li><a href="specials.html">المقاطع الصوتية</a></li>
                    <li><a href="videos.html">المقاطع المرئية</a></li>
                </ul>
            </li>
            <li class="">
                <a href="books.html">
                    <i class="icon icon-books"></i> مؤلفات وكتب
                </a>
            </li>
            <li class=" colored-text-in-introjs" data-intro="لتصفح ميزة التفسير الصوتي من خلال هذه القائمة."
                data-position="right" data-step="3">
                <a href="audio-tafseer/1/1.html">
                    <i class="icon icon-audio-tafseer"></i> التفسير الصوتي
                </a>
            </li>
        </ul>
        <div class="menu-container__search-box">
            <form id="search" method="GET" action="https://khaledalsabt.com/search?">
                <input type="hidden" name="type" value="tafseer" id="search-type" />
                <div class="input-group input-group--header utility__bg--white">
                    <div class="drop-down utility__font-small">
                        <button type="button"
                            class="btn btn--primary btn--padding-small btn--no-radius btn--with-icon drop-down__button">
                            <span>الكل</span>
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="drop-down__content">
                            <li>
                                <a href="#tafseer" data-selected="">التفسير والتدبر</a>
                            </li>
                            <li>
                                <a href="#books_explanation" data-selected="">شروح الكتب</a>
                            </li>
                            <li>
                                <a href="#scientific_series" data-selected="">سلاسل علمية</a>
                            </li>
                            <li>
                                <a href="#lecture" data-selected="">محاضرات</a>
                            </li>
                            <li>
                                <a href="#general_word" data-selected="">كلمات عامة</a>
                            </li>
                            <li>
                                <a href="#special" data-selected="">مقاطع مميزة</a>
                            </li>
                            <li>
                                <a href="#book" data-selected="">كتب</a>
                            </li>
                            <li>
                                <a href="#audio_tafseer" data-selected="">التفسير الصوتي</a>
                            </li>
                        </ul>
                    </div>
                    <SearchBox
                        data-input-props='{"name": "q","className": "input-group__input utility__input-no-shadow search-box__input","placeholder": "كلمة البحث.."}'
                        data-value='' data-item-class='autocomplete-item'
                        data-highlight-class='autocomplete-item-highlighted' data-menu-class='autocomplete-menu'
                        data-wrapper-props='{"className": "searchBox-wrapper"}' data-on-select="(function () {
                    setTimeout(
                        function () {
                            document.getElementById('search').submit();
                        }
                    )
                })" style="flex: 1; display: flex;">
                    </SearchBox>
                    <button class="btn input-group__appended">
                        <i class="fa fa-search utility__font-1rem"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</nav>
