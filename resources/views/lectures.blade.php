@extends('layouts.app')

@section('title', __('Lectures'))

@section('content')

<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">الصفحة الرئيسية</a></li>
    <li class="breadcrumb-item active" aria-current="page">المحاضرات</li>
  </ol>
</nav>
<div class="card content-card lectures">
  <div style="margin-bottom: 15px; text-align: left;">
    <a href="lectures/ayat.html" class="btn btn--light btn--outlined btn--outlined--light">
      <i class="btn--light__icon icon icon-lecture"></i> وقفات مع آيات
    </a>
  </div>
  <div class="list-item-container">
    <div class="row lecture list-item">
      <div class="col-12">
        <div class="d-flex align-items-center utility__padding__left--2em">
          <a href="lectures/80/%d9%88%d9%82%d9%81%d8%a7%d8%aa-%d8%aa%d8%b1%d8%a8%d9%88%d9%8a%d8%a9-%d9%85%d8%b9-%d8%a7%d9%8a%d8%a7%d8%aa-%d8%a7%d9%84%d8%b5%d9%8a%d8%a7%d9%85---%d9%a1%d9%a4%d9%a3%d9%a9%d9%87%d9%80.html"
            class="utility__flex--1">
            <p class="card__title card__title--no-border single-line">وقفات تربوية مع آيات الصيام - ١٤٣٩هـ</p>
          </a>
        </div>
      </div>
      <div class="col-12">
        <div class="content-card__footer list-item__border-bottom">
          <div class="row utility__no-padding no-gutters">
            <div class="col-9">
              <div class="utility__padding__top--14 row">
                <div class="col">
                  المشاهدات: 754
                </div>
                <div class="col d-flex align-items-center">
                  <a href="https://files.zadapps.info/khaledalsabt.com/migrated/06_selections/11_KSabt_WqfaatSiaam.mp3"
                    class="content-card__meta--shrink-font utility__cursor--pointer stats-add-on-click stats-add-download hvr-pulse"
                    data-url="https://khaledalsabt.com/api/stats/download/139698/lecture" download>
                    <i class="fa fa-download utility__padding__left--8"></i>
                  </a>
                  مرات التحميل: 3572
                </div>
                <div class="col">
                  30 / رجب / 1439
                </div>
              </div>
            </div>
            <div class="col utility__text-left">
              <div class="row no-gutters">
                <div class="col utility__padding__top--14">
                  <span class="favorites-count">2</span>
                  <a href="#" data-favorite-id="139698" data-intro="إضافة إلى قائمة المفضلة" data-position="left"
                    data-favorite-type="posts" data-is-favorited="false">
                    <i class="fa fa-heart-o utility__padding__right--8 hvr-pulse"></i>
                  </a>
                </div>
                <div class="col-8 utility__padding__top--7">
                  <div class="share-buttons">
                    <a class="share-buttons__button share-buttons__button--facebook"
                      href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fkhaledalsabt.com%2Flectures%2F80%2F%25D9%2588%25D9%2582%25D9%2581%25D8%25A7%25D8%25AA-%25D8%25AA%25D8%25B1%25D8%25A8%25D9%2588%25D9%258A%25D8%25A9-%25D9%2585%25D8%25B9-%25D8%25A7%25D9%258A%25D8%25A7%25D8%25AA-%25D8%25A7%25D9%2584%25D8%25B5%25D9%258A%25D8%25A7%25D9%2585---%25D9%25A1%25D9%25A4%25D9%25A3%25D9%25A9%25D9%2587%25D9%2580&amp;t=%D9%88%D9%82%D9%81%D8%A7%D8%AA%20%D8%AA%D8%B1%D8%A8%D9%88%D9%8A%D8%A9%20%D9%85%D8%B9%20%D8%A2%D9%8A%D8%A7%D8%AA%20%D8%A7%D9%84%D8%B5%D9%8A%D8%A7%D9%85%20-%20%D9%A1%D9%A4%D9%A3%D9%A9%D9%87%D9%80"
                      target="_blank" title="شارك على فيسبوك"><i class="fa fa-facebook fa-fw"
                        aria-hidden="true"></i><span class="sr-only">شارك على فيسبوك</span></a>
                    <a class="share-buttons__button share-buttons__button--twitter"
                      href="https://twitter.com/intent/tweet?source=https%3A%2F%2Fkhaledalsabt.com%2Flectures%2F80%2F%25D9%2588%25D9%2582%25D9%2581%25D8%25A7%25D8%25AA-%25D8%25AA%25D8%25B1%25D8%25A8%25D9%2588%25D9%258A%25D8%25A9-%25D9%2585%25D8%25B9-%25D8%25A7%25D9%258A%25D8%25A7%25D8%25AA-%25D8%25A7%25D9%2584%25D8%25B5%25D9%258A%25D8%25A7%25D9%2585---%25D9%25A1%25D9%25A4%25D9%25A3%25D9%25A9%25D9%2587%25D9%2580&amp;text=%D9%88%D9%82%D9%81%D8%A7%D8%AA%20%D8%AA%D8%B1%D8%A8%D9%88%D9%8A%D8%A9%20%D9%85%D8%B9%20%D8%A2%D9%8A%D8%A7%D8%AA%20%D8%A7%D9%84%D8%B5%D9%8A%D8%A7%D9%85%20-%20%D9%A1%D9%A4%D9%A3%D9%A9%D9%87%D9%80:%20https%3A%2F%2Fkhaledalsabt.com%2Flectures%2F80%2F%25D9%2588%25D9%2582%25D9%2581%25D8%25A7%25D8%25AA-%25D8%25AA%25D8%25B1%25D8%25A8%25D9%2588%25D9%258A%25D8%25A9-%25D9%2585%25D8%25B9-%25D8%25A7%25D9%258A%25D8%25A7%25D8%25AA-%25D8%25A7%25D9%2584%25D8%25B5%25D9%258A%25D8%25A7%25D9%2585---%25D9%25A1%25D9%25A4%25D9%25A3%25D9%25A9%25D9%2587%25D9%2580&amp;via=khaledalsabt"
                      target="_blank" title="انشر تغريدة"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i><span
                        class="sr-only">انشر تغريدة</span></a>
                    <a class="share-buttons__button share-buttons__button--google"
                      href="https://plus.google.com/share?url=https%3A%2F%2Fkhaledalsabt.com%2Flectures%2F80%2F%25D9%2588%25D9%2582%25D9%2581%25D8%25A7%25D8%25AA-%25D8%25AA%25D8%25B1%25D8%25A8%25D9%2588%25D9%258A%25D8%25A9-%25D9%2585%25D8%25B9-%25D8%25A7%25D9%258A%25D8%25A7%25D8%25AA-%25D8%25A7%25D9%2584%25D8%25B5%25D9%258A%25D8%25A7%25D9%2585---%25D9%25A1%25D9%25A4%25D9%25A3%25D9%25A9%25D9%2587%25D9%2580"
                      target="_blank" title="شارك على غوغل بلس"><i class="fa fa-google-plus fa-fw"
                        aria-hidden="true"></i><span class="sr-only">شارك على غوغل بلس</span></a>
                    <a class="share-buttons__button share-buttons__button--email"
                      href="cdn-cgi/l/email-protection.html#c0ffb3b5a2aaa5a3b4fde584f9e5f8f8e584f9e5f8f2e584f9e5f8f1e584f8e581f7e584f8e58181e5f2f0e584f8e58181e584f8e582f1e584f8e581f8e584f9e5f8f8e584f9e5f881e584f8e581f9e5f2f0e584f9e5f8f5e584f8e582f9e5f2f0e584f8e581f2e584f9e5f881e584f8e581f7e584f8e58181e5f2f0e584f8e581f7e584f9e5f8f4e584f8e582f5e584f9e5f881e584f8e581f7e584f9e5f8f5e5f2f0ede5f2f0e584f9e581f1e584f9e581f4e584f9e581f3e584f9e581f9e584f9e5f8f7e584f9e5f8f0e6a2afa4b9fd83a8a5a3abe0afb5b4e0b4a8a9b3e0b4afb0a9a3fae5f2f0a8b4b4b0b3e5f381e5f286e5f286aba8a1aca5a4a1acb3a1a2b4eea3afade5f286aca5a3b4b5b2a5b3e5f286f8f0e5f286e5f2f584f9e5f2f5f8f8e5f2f584f9e5f2f5f8f2e5f2f584f9e5f2f5f8f1e5f2f584f8e5f2f581f7e5f2f584f8e5f2f58181ede5f2f584f8e5f2f58181e5f2f584f8e5f2f582f1e5f2f584f8e5f2f581f8e5f2f584f9e5f2f5f8f8e5f2f584f9e5f2f5f881e5f2f584f8e5f2f581f9ede5f2f584f9e5f2f5f8f5e5f2f584f8e5f2f582f9ede5f2f584f8e5f2f581f7e5f2f584f9e5f2f5f881e5f2f584f8e5f2f581f7e5f2f584f8e5f2f58181ede5f2f584f8e5f2f581f7e5f2f584f9e5f2f5f8f4e5f2f584f8e5f2f582f5e5f2f584f9e5f2f5f881e5f2f584f8e5f2f581f7e5f2f584f9e5f2f5f8f5ededede5f2f584f9e5f2f581f1e5f2f584f9e5f2f581f4e5f2f584f9e5f2f581f3e5f2f584f9e5f2f581f9e5f2f584f9e5f2f5f8f7e5f2f584f9e5f2f5f8f0"
                      target="_blank" title="أرسل بريدًا"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i><span
                        class="sr-only">أرسل بريدًا</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="col-lg-3 d-lg-block d-none">
</div>
@stop
