@extends('layouts.app')
@section('title', __('Fatawa'))
@section('content')


<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">الصفحة الرئيسية</a></li>
    <li class="breadcrumb-item active" aria-current="page">كلمات عامة</li>
  </ol>
</nav>
<div class="card content-card words">
  <div class="list-item-container">
    <div class="row general_word list-item">
      <div class="col-12">
        <div class="d-flex align-items-center utility__padding__left--2em">
          <a href="words/80/%d8%a7%d8%a8%d8%b4%d8%b1%d9%88%d8%a7-%d8%a7%d9%8a%d9%87%d8%a7-%d8%a7%d9%84%d9%85%d8%b5%d9%84%d9%88%d9%86.html"
            class="utility__flex--1">
            <p class="card__title card__title--no-border single-line">أبشروا أيها المصلون</p>
          </a>
        </div>
      </div>
      <div class="col-12">
        <div class="content-card__footer list-item__border-bottom">
          <div class="row utility__no-padding no-gutters">
            <div class="col-9">
              <div class="utility__padding__top--14 row">
                <div class="col">
                  المشاهدات: 573
                </div>
                <div class="col d-flex align-items-center">
                  <a href="https://files.zadapps.info/khaledalsabt.com/migrated/05_kalemat/11_KSabt_AbsherwMosllwn.mp3"
                    class="content-card__meta--shrink-font utility__cursor--pointer stats-add-on-click stats-add-download hvr-pulse"
                    data-url="https://khaledalsabt.com/api/stats/download/139732/general_word" download>
                    <i class="fa fa-download utility__padding__left--8"></i>
                  </a>
                  مرات التحميل: 3841
                </div>
                <div class="col">
                  09 / شوّال / 1439
                </div>
              </div>
            </div>
            <div class="col utility__text-left">
              <div class="row no-gutters">
                <div class="col utility__padding__top--14">
                  <span class="favorites-count">6</span>
                  <a href="#" data-favorite-id="139732" data-intro="إضافة إلى قائمة المفضلة" data-position="left"
                    data-favorite-type="posts" data-is-favorited="false">
                    <i class="fa fa-heart-o utility__padding__right--8 hvr-pulse"></i>
                  </a>
                </div>
                <div class="col-8 utility__padding__top--7">
                  <div class="share-buttons">
                    <a class="share-buttons__button share-buttons__button--facebook" target="_blank"
                      title="شارك على فيسبوك"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i><span
                        class="sr-only">شارك على فيسبوك</span></a>
                    <a class="share-buttons__button share-buttons__button--twitter" target="_blank"
                      title="انشر تغريدة"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i><span
                        class="sr-only">انشر تغريدة</span></a>
                    <a class="share-buttons__button share-buttons__button--google" target="_blank"
                      title="شارك على غوغل بلس"><i class="fa fa-google-plus fa-fw" aria-hidden="true"></i><span
                        class="sr-only">شارك على غوغل بلس</span></a>
                    <a class="share-buttons__button share-buttons__button--email" target="_blank" title="أرسل بريدًا"><i
                        class="fa fa-envelope fa-fw" aria-hidden="true"></i><span class="sr-only">أرسل بريدًا</span></a>
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
  {{-- paginations --}}
</div>
<div class="col-lg-3 d-lg-block d-none">
</div>
@stop
