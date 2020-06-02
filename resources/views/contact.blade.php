@extends('layouts.app')

@section('title', __('Contact'))

@section('content')

<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">الصفحة الرئيسية</a></li>
    <li class="breadcrumb-item active" aria-current="page">تواصل معنا</li>
  </ol>
</nav>
<div class="card content-card">
  <div class="card__content">
    <div class="card__content__header">
      <h2 class="card__title card__title--no-border">تواصل معنا</h2>
    </div>
  </div>
  <div class="content-card__content">
    <p>نسعد بتواصلك معنا وإرسال ملاحظاتك عبر النموذج التالي</p>
    <br>
    <br>
    <br>
    <form method="POST" action="/contact" accept-charset="UTF-8" id="contact-form">
      <input name="_token" type="hidden" value="tu9QUyxDGnGbs3q3fBHmv86Ib71O4KJqHZPpSQxH">
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">الاسم الكامل</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" id="name" placeholder="مثل: محمد أحمد.." required>
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">البريد الإلكتروني</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email" id="email" placeholder="test@example.com" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="message" class="col-sm-2 col-form-label">الرسالة</label>
        <div class="col-sm-10">
          <textarea type="message" class="form-control" name="message" id="message" rows="3" required
            placeholder="نص الرسالة"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="issue_type" class="col-sm-2 col-form-label">نوع الرسالة</label>
        <div class="col-sm-10">
          <select id="issue_type" class="form-control" name="issue_type">
            <option value="19072">ملاحظة</option>
            <option value="19073">اقتراح</option>
            <option value="19074">طلب حذف حسابي</option>
            <option value="19075">أخرى</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <div class="g-recaptcha" data-sitekey="6Lfkbj4UAAAAAPziZeUVAsnsgajYi3unRByng5KO" data-badge="inline"
            data-hl="ar" data-size="invisible" data-callback="onSubmit"></div>
          <button style="margin-top: 15px;" class="btn btn--light btn--outlined btn--outlined--light">
            إرسال
            <i class="btn--light__icon fa fa-envelope-open-o"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="col-lg-3 d-lg-block d-none">
</div>
@stop
