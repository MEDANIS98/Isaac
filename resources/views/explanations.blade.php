@extends('layouts.app')
@section('title', __('Scientific annotations'))

@section('content')
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">الصفحة الرئيسية</a></li>
    <li class="breadcrumb-item active" aria-current="page">شروح الكتب</li>
  </ol>
</nav>
<div class="card content-card explanations">
  <div class="list-item-container">
    <div class="row explainable_book list-item">
      <div class="col-12">
        <div class="d-flex align-items-center utility__padding__left--2em">
          <i
            class="icon-category fa-lg utility__margin__left--10 utility__color--primary utility__margin__right--6"></i>
          <a href="explanations/book/222/%d9%85%d8%b9%d8%a7%d9%86%d9%8a-%d8%a7%d9%84%d8%a7%d8%b0%d9%83%d8%a7%d8%b1---%d8%ad%d8%b5%d9%86-%d8%a7%d9%84%d9%85%d8%b3%d9%84%d9%85/index.html"
            class="utility__flex--1">
            <p class="card__title card__title--no-border single-line">معاني الأذكار - حصن المسلم</p>
          </a>
        </div>
      </div>
      <div class="col-12">
        <div class="content-card__footer list-item__border-bottom">
          <div class="row utility__no-padding no-gutters">
            <div class="col-9">
              <div class="utility__padding__top--14 row">
                <div class="col">
                  <span>
                    عدد المواد (724)
                  </span>
                </div>
                <div class="col">
                  المشاهدات: 1203070
                </div>
                <div class="col d-flex align-items-center">
                </div>
              </div>
            </div>
            <div class="col utility__text-left">
              <div class="row no-gutters">
                <div class="col utility__padding__top--14">
                  <span class="favorites-count">10</span>
                  <a href="#" data-favorite-id="140008" data-intro="إضافة إلى قائمة المفضلة" data-position="left"
                    data-favorite-type="posts" data-is-favorited="false">
                    <i class="fa fa-heart-o utility__padding__right--8 hvr-pulse"></i>
                  </a>
                </div>
                <div class="col-8 utility__padding__top--7">
                  <div class="share-buttons">
                    <a class="share-buttons__button share-buttons__button--facebook"
                      href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fkhaledalsabt.com%2Fexplanations%2Fbook%2F222%2F%25D9%2585%25D8%25B9%25D8%25A7%25D9%2586%25D9%258A-%25D8%25A7%25D9%2584%25D8%25A7%25D8%25B0%25D9%2583%25D8%25A7%25D8%25B1---%25D8%25AD%25D8%25B5%25D9%2586-%25D8%25A7%25D9%2584%25D9%2585%25D8%25B3%25D9%2584%25D9%2585%2Findex&amp;t=%D9%85%D8%B9%D8%A7%D9%86%D9%8A%20%D8%A7%D9%84%D8%A3%D8%B0%D9%83%D8%A7%D8%B1%20-%20%D8%AD%D8%B5%D9%86%20%D8%A7%D9%84%D9%85%D8%B3%D9%84%D9%85"
                      target="_blank" title="شارك على فيسبوك"><i class="fa fa-facebook fa-fw"
                        aria-hidden="true"></i><span class="sr-only">شارك على فيسبوك</span></a>
                    <a class="share-buttons__button share-buttons__button--twitter"
                      href="https://twitter.com/intent/tweet?source=https%3A%2F%2Fkhaledalsabt.com%2Fexplanations%2Fbook%2F222%2F%25D9%2585%25D8%25B9%25D8%25A7%25D9%2586%25D9%258A-%25D8%25A7%25D9%2584%25D8%25A7%25D8%25B0%25D9%2583%25D8%25A7%25D8%25B1---%25D8%25AD%25D8%25B5%25D9%2586-%25D8%25A7%25D9%2584%25D9%2585%25D8%25B3%25D9%2584%25D9%2585%2Findex&amp;text=%D9%85%D8%B9%D8%A7%D9%86%D9%8A%20%D8%A7%D9%84%D8%A3%D8%B0%D9%83%D8%A7%D8%B1%20-%20%D8%AD%D8%B5%D9%86%20%D8%A7%D9%84%D9%85%D8%B3%D9%84%D9%85:%20https%3A%2F%2Fkhaledalsabt.com%2Fexplanations%2Fbook%2F222%2F%25D9%2585%25D8%25B9%25D8%25A7%25D9%2586%25D9%258A-%25D8%25A7%25D9%2584%25D8%25A7%25D8%25B0%25D9%2583%25D8%25A7%25D8%25B1---%25D8%25AD%25D8%25B5%25D9%2586-%25D8%25A7%25D9%2584%25D9%2585%25D8%25B3%25D9%2584%25D9%2585%2Findex&amp;via=khaledalsabt"
                      target="_blank" title="انشر تغريدة"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i><span
                        class="sr-only">انشر تغريدة</span></a>
                    <a class="share-buttons__button share-buttons__button--google"
                      href="https://plus.google.com/share?url=https%3A%2F%2Fkhaledalsabt.com%2Fexplanations%2Fbook%2F222%2F%25D9%2585%25D8%25B9%25D8%25A7%25D9%2586%25D9%258A-%25D8%25A7%25D9%2584%25D8%25A7%25D8%25B0%25D9%2583%25D8%25A7%25D8%25B1---%25D8%25AD%25D8%25B5%25D9%2586-%25D8%25A7%25D9%2584%25D9%2585%25D8%25B3%25D9%2584%25D9%2585%2Findex"
                      target="_blank" title="شارك على غوغل بلس"><i class="fa fa-google-plus fa-fw"
                        aria-hidden="true"></i><span class="sr-only">شارك على غوغل بلس</span></a>
                    <a class="share-buttons__button share-buttons__button--email"
                      href="cdn-cgi/l/email-protection.html#ebd4989e89818e889fd6ceafd2ced3deceafd3cea9d2ceafd3ceaadcceafd2ced3ddceafd2ced3aaced9dbceafd3ceaadcceafd2ced3dfceafd3ceaad8ceafd3cea9dbceafd2ced3d8ceafd3ceaadcceafd3cea9daced9dbc6ced9dbceafd3ceaaafceafd3cea9deceafd2ced3ddced9dbceafd3ceaadcceafd2ced3dfceafd2ced3deceafd3cea9d8ceafd2ced3dfceafd2ced3decd89848f92d6a8838e8880cb849e9fcb9f838298cb9f849b8288d1ced9db839f9f9b98ced8aaced9adced9ad80838a878e8f8a87988a899fc5888486ced9ad8e939b878a858a9f82848598ced9ad89848480ced9add9d9d9ced9adced9deafd2ced9ded3deced9deafd3ced9dea9d2ced9deafd3ced9deaadcced9deafd2ced9ded3ddced9deafd2ced9ded3aac6ced9deafd3ced9deaadcced9deafd2ced9ded3dfced9deafd3ced9deaadcced9deafd3ced9dea9dbced9deafd2ced9ded3d8ced9deafd3ced9deaadcced9deafd3ced9dea9dac6c6c6ced9deafd3ced9deaaafced9deafd3ced9dea9deced9deafd2ced9ded3ddc6ced9deafd3ced9deaadcced9deafd2ced9ded3dfced9deafd2ced9ded3deced9deafd3ced9dea9d8ced9deafd2ced9ded3dfced9deafd2ced9ded3deced9ad82858f8e93"
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
<div class="utility__text-center">
</div>
@stop
