@extends('layouts.app')

@section('title', __('Library'))

@section('content')

<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">الصفحة الرئيسية</a></li>
    <li class="breadcrumb-item active" aria-current="page">مؤلفات وكتب</li>
  </ol>
</nav>
<div class="card content-card books">
  <div class="list-item-container">
    <div class="list-item">
      <div class="row books__item">
        <div class="col-md-3 col-sm-12 books__item__thumbnail text-center">
          <a
            href="books/28/%d8%a7%d9%84%d8%b9%d8%b0%d8%a8-%d8%a7%d9%84%d9%86%d9%85%d9%8a%d8%b1-%d9%85%d9%86-%d9%85%d8%ac%d8%a7%d9%84%d8%b3-%d8%a7%d9%84%d8%b4%d9%86%d9%82%d9%8a%d8%b7%d9%8a-%d9%81%d9%8a-%d8%a7%d9%84%d8%aa%d9%81%d8%b3%d9%8a%d8%b1.html">
            <img src="https://files.zadapps.info/khaledalsabt.com/al3azb-al-namir-cover.png"
              alt="العذب النمير من مجالس الشنقيطي في التفسير" />
          </a>
        </div>
        <div class="col books__item__content">
          <div class="row">
            <div class="col-12">
              <a
                href="books/28/%d8%a7%d9%84%d8%b9%d8%b0%d8%a8-%d8%a7%d9%84%d9%86%d9%85%d9%8a%d8%b1-%d9%85%d9%86-%d9%85%d8%ac%d8%a7%d9%84%d8%b3-%d8%a7%d9%84%d8%b4%d9%86%d9%82%d9%8a%d8%b7%d9%8a-%d9%81%d9%8a-%d8%a7%d9%84%d8%aa%d9%81%d8%b3%d9%8a%d8%b1.html">
                <h2 class="card__title card__title--no-border text-center text-md-right">العذب النمير من مجالس
                  الشنقيطي في التفسير</h2>
              </a>
            </div>
            <div class="col-12">
              <table class="table">
                <caption class="text-right">
                  <h3> بطاقة الكتاب</h3>
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
      <div class="content-card__footer list-item__border-bottom">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <p class="books__item__meta">
              <i class="fa fa-download utility__padding__left--8"></i>
              التحميل: 0
              <span class="utility__margin__0-10">|</span>
              <i class="fa fa-eye utility__padding__left--8"></i>
              المشاهدات: 0
            </p>
          </div>
          <div class="col utility__text-left">
            <div class="row">
              <div class="col-4 utility__padding__top--14">
                <span class="favorites-count">0</span>
                <a href="#" data-favorite-id="140096" data-intro="إضافة إلى قائمة المفضلة" data-position="left"
                  data-favorite-type="posts" data-is-favorited="false">
                  <i class="fa fa-heart-o utility__padding__right--8 hvr-pulse"></i>
                </a>
              </div>
              <div class="col utility__padding__top--7">
                <div class="share-buttons">
                  <a class="share-buttons__button share-buttons__button--facebook" target="_blank"
                    title="شارك على فيسبوك"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i><span
                      class="sr-only">شارك على فيسبوك</span></a>
                  <a class="share-buttons__button share-buttons__button--twitter" target="_blank" title="انشر تغريدة"><i
                      class="fa fa-twitter fa-fw" aria-hidden="true"></i><span class="sr-only">انشر تغريدة</span></a>
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
<div class="utility__text-center">
</div>

<div class="col-lg-3 d-lg-block d-none">
</div>

@stop
