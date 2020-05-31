@extends('layouts.app')

@section('title', 'الموقع الرسمي للشيخ عمر حمرون')

@section('slider')
@include('partials.slider')
@stop

@section('content')
{{-- <section class="section">
    <div class="row">
        <div class="col-lg-6 d-flex flex-column mb-4 mb-lg-0">
            <div class="heading">
                <h2 class="heading__title">
                    خصائص أهل السنة والجماعة
                </h2>
                <div class="heading__extra">
                </div>
            </div>
            <div class="card card--cover">
                <div class="cover"
                    style="background-image: url('https://files.zadapps.info/khaledalsabt.com/ahl-alsonnah.png')">
                    <span class="card__gradients"></span>
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <a href="series/78/%d8%ae%d8%b5%d8%a7%d9%89%d8%b5-%d8%a7%d9%87%d9%84-%d8%a7%d9%84%d8%b3%d9%86%d8%a9-2-%d8%a7%d9%88%d8%b5%d8%a7%d9%81-%d8%a7%d9%87%d9%84-%d8%a7%d9%84%d8%b3%d9%86%d8%a9-1.html"
                            title="خصائص أهل السنة (2) أوصاف أهل السنة (1)">
                            <strong>خصائص أهل السنة (2) أوصاف أهل ...</strong>
                        </a>
                    </div>
                    <div class="card-meta">
                        <i class="icon-clock fa-lg ml-2"></i>
                        17 / محرّم / 1433
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex flex-column mb-4 mb-lg-0">
            <div class="heading">
                <h2 class="heading__title">
                    مقطع مميز
                </h2>
                <div class="heading__extra">
                </div>
            </div>
            <div class="card card--cover">
                <div class="cover"
                    style="background-image: url('https://files.zadapps.info/khaledalsabt.com/Banners/11_KSabt_Mdaawmah.jpg')">
                    <span class="card__gradients"></span>
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <a href="specials/566/%d8%a7%d9%84%d9%85%d8%af%d8%a7%d9%88%d9%85%d8%a9-%d8%b9%d9%84%d9%89-%d8%a7%d9%84%d8%b9%d9%85%d9%84-%d8%a8%d8%b9%d8%af-%d8%b1%d9%85%d8%b6%d8%a7%d9%86.html"
                            title="المداومة على العمل بعد رمضان">
                            <strong>المداومة على العمل بعد رمضان</strong>
                        </a>
                    </div>
                    <div class="card-meta">
                        <i class="icon-clock fa-lg ml-2"></i>
                        28 / رمضان / 1439
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="tabs">
        <div class="heading">
            <h2 class="heading__title">مواد مختارة</h2>
            <div class="heading__extra">
                <div class="tabs__toggle tabs__toggle--compact">
                    <span class="tabs__toggle--element tabs__toggle--element--compact utility__margin__left--10 active"
                        data-tab-id="featured-first">
                        التفسير والتدبر
                    </span>
                    <span class="tabs__toggle--element tabs__toggle--element--compact utility__margin__left--10"
                        data-tab-id="featured-second">
                        شروح الكتب
                    </span>
                    <span class="tabs__toggle--element tabs__toggle--element--compact" data-tab-id="featured-third">
                        سلاسل علمية
                    </span>
                </div>
            </div>
        </div>
        <div id="featured-first" class="tabs__content tabs__content--no-scroll utility__overflow--visible">
            <div class="card">
                <div class="card__content tabs__content--featured-height">
                    <ul class="card__list">
                        <li class="card__list__item">
                            <a href="interpretations/2845/%d8%a7%d9%84%d9%85%d8%ab%d9%84-%d9%81%d9%8a-%d9%82%d9%88%d9%84-%d8%a7%d9%84%d9%84%d9%87-%d8%aa%d8%b9%d8%a7%d9%84%d9%89-%d8%a7%d9%8a%d9%88%d8%af-%d8%a7%d8%ad%d8%af%d9%83%d9%85-%d8%a7%d9%86-%d8%aa%d9%83%d9%88%d9%86-%d9%84%d9%87-%d8%ac%d9%86%d8%a9-%d9%85%d9%86-%d9%86%d8%ae%d9%8a%d9%84-%d9%88%d8%a7%d8%b9%d9%86%d8%a7%d8%a8-%d8%a7%d9%84%d8%a7%d9%8a%d8%a9.html"
                                class="utility__truncate-oneline"
                                title="المثل في قول الله تعالى {أيود أحدكم أن تكون له جنة من نخيل وأعناب} الآية">
                                <i class="fa fa-caret-left icon"></i>
                                المثل في قول الله تعالى {أيود أحدكم أن تكون له جنة من نخيل وأعناب} الآية
                            </a>
                            <div class="row card__list__item-meta">
                                <div class="col">
                                    <div class="card__list__item__date">
                                        ١٤ / رمضان / ١٤٣٠
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-2 utility__text-left utility__hidden__xs">
                                    الزيارات: 2953
                                </div>
                            </div>
                        </li>
                        <li class="card__list__item">
                            <a href="interpretations/3624/12-%d8%af%d9%84%d8%a7%d9%84%d8%a9-%d8%a7%d9%84%d9%81%d8%a7%d8%aa%d8%ad%d8%a9-%d8%b9%d9%84%d9%89-%d8%a7%d8%b5%d9%88%d9%84-%d8%a7%d9%84%d8%af%d9%8a%d9%86.html"
                                class="utility__truncate-oneline" title="[12] دلالة الفاتحة على أصول الدين">
                                <i class="fa fa-caret-left icon"></i>
                                [12] دلالة الفاتحة على أصول الدين
                            </a>
                            <div class="row card__list__item-meta">
                                <div class="col">
                                    <div class="card__list__item__date">
                                        ٠٧ / رجب / ١٤٣٦
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-2 utility__text-left utility__hidden__xs">
                                    الزيارات: 2190
                                </div>
                            </div>
                        </li>
                        <li class="card__list__item">
                            <a href="interpretations/2174/%d8%b3%d9%88%d8%b1%d8%a9-%d8%a7%d9%84%d8%a7%d8%ae%d9%84%d8%a7%d8%b5-%d9%83%d8%a7%d9%85%d9%84%d8%a9.html"
                                class="utility__truncate-oneline" title="سورة الإخلاص كاملة">
                                <i class="fa fa-caret-left icon"></i>
                                سورة الإخلاص كاملة
                            </a>
                            <div class="row card__list__item-meta">
                                <div class="col">
                                    <div class="card__list__item__date">
                                        ١٨ / محرّم / ١٤٣٥
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-2 utility__text-left utility__hidden__xs">
                                    الزيارات: 12156
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="featured-second" class="tabs__content tabs__content--no-scroll ">
            <div class="card">
                <div class="card__content tabs__content--featured-height">
                    <ul class="card__list">
                        <li class="card__list__item">
                            <a href="explanations/2327/16-%d8%aa%d9%81%d8%b3%d9%8a%d8%b1-%d8%a7%d9%84%d9%82%d8%b1%d8%a7%d9%86-%d8%a8%d8%a7%d9%82%d9%88%d8%a7%d9%84-%d8%a7%d9%84%d8%b5%d8%ad%d8%a7%d8%a8%d8%a9.html"
                                class="utility__truncate-oneline" title="(16) تفسير القرآن بأقوال الصحابة">
                                <i class="fa fa-caret-left icon"></i>
                                (16) تفسير القرآن بأقوال الصحابة
                            </a>
                            <div class="row card__list__item-meta">
                                <div class="col">
                                    <div class="card__list__item__date">
                                        ٠٩ / شعبان / ١٤٢٢
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-2 utility__text-left utility__hidden__xs">
                                    الزيارات: 1847
                                </div>
                            </div>
                        </li>
                        <li class="card__list__item">
                            <a href="explanations/3183/162-%d8%a7%d8%b0%d9%83%d8%a7%d8%b1-%d8%a7%d9%84%d8%b5%d8%a8%d8%a7%d8%ad-%d9%88%d8%a7%d9%84%d9%85%d8%b3%d8%a7%d8%a1-%d9%88%d9%82%d9%81%d8%a7%d8%aa-%d9%85%d8%b9-%d8%a7%d9%8a%d8%a9-%d8%a7%d9%84%d9%83%d8%b1%d8%b3%d9%8a-%d9%88%d8%a7%d8%ab%d8%a7%d8%b1%d9%87%d8%a7-1.html"
                                class="utility__truncate-oneline"
                                title="(162) أذكار الصَّباح والمساء: وقفات مع آية الكرسي وآثارها [1]‏">
                                <i class="fa fa-caret-left icon"></i>
                                (162) أذكار الصَّباح والمساء: وقفات مع آية الكرسي وآثارها [1]‏
                            </a>
                            <div class="row card__list__item-meta">
                                <div class="col">
                                    <div class="card__list__item__date">
                                        ١١ / رمضان / ١٤٤١
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-2 utility__text-left utility__hidden__xs">
                                    الزيارات: 0
                                </div>
                            </div>
                        </li>
                        <li class="card__list__item">
                            <a href="explanations/1339/%d8%ad%d8%af%d9%8a%d8%ab-%d8%a7%d8%b0%d8%a7-%d9%85%d8%b1%d8%b6-%d8%a7%d9%84%d8%b9%d8%a8%d8%af-%d8%a7%d9%88-%d8%b3%d8%a7%d9%81%d8%b1-%d9%83%d9%84-%d9%85%d8%b9%d8%b1%d9%88%d9%81-%d8%b5%d8%af%d9%82%d8%a9.html"
                                class="utility__truncate-oneline"
                                title="حديث «إذا مرض العبد أو سافر..» ، «كل معروف صدقة»">
                                <i class="fa fa-caret-left icon"></i>
                                حديث «إذا مرض العبد أو سافر..» ، «كل معروف صدقة»
                            </a>
                            <div class="row card__list__item-meta">
                                <div class="col">
                                    <div class="card__list__item__date">
                                        ٢٦ / شوّال / ١٤٢٦
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-2 utility__text-left utility__hidden__xs">
                                    الزيارات: 14377
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="featured-third" class="tabs__content tabs__content--no-scroll ">
            <div class="card">
                <div class="card__content tabs__content--featured-height">
                    <ul class="card__list">
                        <li class="card__list__item">
                            <a href="series/13/%d8%a7%d9%84%d8%a7%d8%b9%d8%ac%d8%a7%d8%b2-%d8%a7%d9%84%d8%b9%d8%af%d8%af%d9%8a.html"
                                class="utility__truncate-oneline" title="الإعجاز العددي">
                                <i class="fa fa-caret-left icon"></i>
                                الإعجاز العددي
                            </a>
                            <div class="row card__list__item-meta">
                                <div class="col">
                                    <div class="card__list__item__date">
                                        ١٠ / محرّم / ١٤٢٩
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-2 utility__text-left utility__hidden__xs">
                                    الزيارات: 37788
                                </div>
                            </div>
                        </li>
                        <li class="card__list__item">
                            <a href="series/126/%d8%a7%d9%84%d8%b4%d9%83%d8%b1.html" class="utility__truncate-oneline"
                                title="الشكر">
                                <i class="fa fa-caret-left icon"></i>
                                الشكر
                            </a>
                            <div class="row card__list__item-meta">
                                <div class="col">
                                    <div class="card__list__item__date">
                                        ٢٣ / ذو الحجة / ١٤٢٧
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-2 utility__text-left utility__hidden__xs">
                                    الزيارات: 5532
                                </div>
                            </div>
                        </li>
                        <li class="card__list__item">
                            <a href="series/748/013-%d9%85%d9%86-%d8%a7%d8%ae%d8%a8%d8%a7%d8%b1-%d8%a7%d9%84%d9%85%d9%86%d8%aa%d9%83%d8%b3%d9%8a%d9%86.html"
                                class="utility__truncate-oneline" title="(013) من أخبار المنتكسين">
                                <i class="fa fa-caret-left icon"></i>
                                (013) من أخبار المنتكسين
                            </a>
                            <div class="row card__list__item-meta">
                                <div class="col">
                                    <div class="card__list__item__date">
                                        ١٤ / جمادى الأولى / ١٤٣٧
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-2 utility__text-left utility__hidden__xs">
                                    الزيارات: 4261
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="heading">
        <h2 class="heading__title">
            مقاطع مرئية
        </h2>
        <div class="heading__extra">
            <a href="videos.html">المزيد</a>
        </div>
    </div>
    <div class="card card--no-cover card--no-border card--no-padding">
        <div class="card__content card__content--no-padding">
            <iframe src="#"
                data-src="https://www.youtube.com/embed/6xKlLGPV9XQ?rel=0&amp;;controls=1&amp;showinfo=0?rel=0"
                height="420" style="border: 0"></iframe>
        </div>
    </div>
</section>
<section class="section">
    <div class="heading">
        <h2 class="heading__title">
            المؤلفات والكتب
        </h2>
        <div class="heading__extra">
            <a href="books.html">المزيد</a>
        </div>
    </div>
    <div class="books-slider">
        <div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 books__item__thumbnail text-center">
                            <img src="https://files.zadapps.info/khaledalsabt.com/al3azb-al-namir-cover.png"
                                alt="العذب النمير من مجالس الشنقيطي في التفسير" style="margin: auto" />
                        </div>
                        <div class="col books__item__content">
                            <table class="table">
                                <caption class="text-right">
                                    <a
                                        href="books/28/%d8%a7%d9%84%d8%b9%d8%b0%d8%a8-%d8%a7%d9%84%d9%86%d9%85%d9%8a%d8%b1-%d9%85%d9%86-%d9%85%d8%ac%d8%a7%d9%84%d8%b3-%d8%a7%d9%84%d8%b4%d9%86%d9%82%d9%8a%d8%b7%d9%8a-%d9%81%d9%8a-%d8%a7%d9%84%d8%aa%d9%81%d8%b3%d9%8a%d8%b1.html">
                                        <h3>
                                            <p class="card__title card__title--no-border">العذب النمير
                                                من مجالس الشنقيطي في التفسير</p>
                                        </h3>
                                    </a>
                                </caption>
                                <tr>
                                    <th width="100">الكتاب</th>
                                    <td>العذب النمير من مجالس الشنقيطي في التفسير</td>
                                </tr>
                                <tr>
                                    <th>الفنّ</th>
                                    <td>
                                        القرآن الكريم وعلومه
                                    </td>
                                </tr>
                                <tr>
                                    <th>عدد المجلدات</th>
                                    <td>5</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 books__item__thumbnail text-center">
                            <img src="https://files.zadapps.info/khaledalsabt.com/mokhtsar-almokhalef-cover.png"
                                alt="مختصر فقه الرد على المخالف" style="margin: auto" />
                        </div>
                        <div class="col books__item__content">
                            <table class="table">
                                <caption class="text-right">
                                    <a
                                        href="books/22/%d9%85%d8%ae%d8%aa%d8%b5%d8%b1-%d9%81%d9%82%d9%87-%d8%a7%d9%84%d8%b1%d8%af-%d8%b9%d9%84%d9%89-%d8%a7%d9%84%d9%85%d8%ae%d8%a7%d9%84%d9%81.html">
                                        <h3>
                                            <p class="card__title card__title--no-border">مختصر فقه الرد
                                                على المخالف</p>
                                        </h3>
                                    </a>
                                </caption>
                                <tr>
                                    <th width="100">الكتاب</th>
                                    <td>مختصر فقه الرد على المخالف</td>
                                </tr>
                                <tr>
                                    <th>الفنّ</th>
                                    <td>
                                        العقيدة
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@stop
