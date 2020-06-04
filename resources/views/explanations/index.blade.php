@extends('layouts.app')

@section('title', __('Scientific annotations'))

@section('content')
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/">الصفحة الرئيسية</a>
    </li>
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
          <a href="explanations/80
            class=" utility__flex--1">
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
                  المشاهدات: 3070
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
                    <a class="share-buttons__button share-buttons__button--facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fkhaledalsabt.
                      target=" _blank" title="شارك على فيسبوك"><i class="fa fa-facebook fa-fw"
                        aria-hidden="true"></i><span class="sr-only">شارك على فيسبوك</span></a>
                    <a class="share-buttons__button share-buttons__button--twitter" href="https://twitter.com/intent/tweet?source=https%3A%2F%2Fkhaledalsabt.
                      target=" _blank" title="انشر تغريدة"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i><span
                        class="sr-only">انشر تغريدة</span></a>
                    <a class="share-buttons__button share-buttons__button--google" href="https://plus.google.com/share?url=https%3A%2F%2Fkhaledalsabt.
                      target=" _blank" title="شارك على غوغل بلس"><i class="fa fa-google-plus fa-fw"
                        aria-hidden="true"></i><span class="sr-only">شارك على غوغل بلس</span></a>
                    <a class="share-buttons__button share-buttons__button--email" href="cdn-cgi/l/email-protection.
                      target=" _blank" title="أرسل بريدًا"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i><span
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
<div class="utility__text-center"></div>
@stop
