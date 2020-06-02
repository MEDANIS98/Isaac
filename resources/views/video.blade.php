@extends('layouts.app')
@section('title', __('Videos'))
@section('content')


<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">الصفحة الرئيسية</a></li>
    <li class="breadcrumb-item active" aria-current="page">مقاطع مرئية مميزة</li>
  </ol>
</nav>
<div class="card content-card videos">
  <div class="list-item-container">
    <div class="row videos__item">
      <div class="col-md-6 col-sm-12">
        <div class="card text-center">
          <div class="card-header">
            <iframe src="#"
              data-src="https://www.youtube.com/embed/BugQO39FGOg?rel=0&amp;;controls=1&amp;showinfo=0?rel=0"
              height="220" width="100%" style="border: 0"></iframe>
          </div>
          <div class="card-body">
            <a
              href="videos/387/%d8%a7%d8%ad%d9%81%d8%b8-%d8%b5%d9%88%d9%85%d9%83-%d8%a8%d8%a7%d9%84%d8%aa%d9%82%d9%88%d9%89.html">
              <p class="card__title card__title--no-border">احفظ صومك بالتقوى</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="utility__text-center">
  {{-- pagination  --}}
</div>
<div class="col-lg-3 d-lg-block d-none">
</div>
@stop
