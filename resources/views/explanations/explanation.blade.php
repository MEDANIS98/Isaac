@extends('layouts.app')

@section('title', __(str_plural('explanation')))

@section('content')
<nav aria-label="breadcrumb" role="navigation">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/">الصفحة الرئيسية</a></li>
		<li class="breadcrumb-item"><a href="https://khaledalsabt.com/explanations">شروح الكتب</a></li>
		<li class="breadcrumb-item"><a
				href="https://khaledalsabt.com/explanations/book/222/معاني-الاذكار---حصن-المسلم">معاني الأذكار - حصن
				المسلم</a></li>
		<li class="breadcrumb-item active" aria-current="page">
			(77) ألفاظ الحديث: &quot;اللهم اجعل في قلبي نورًا
			...&quot;، والزِّيادات الصَّحيحة على الرِّواية</li>
	</ol>
</nav>
<div class="hidden" id="stats-add-view" data-url="https://khaledalsabt.com/api/stats/view/142176/books_explanation">
</div>
<div class="hidden" id="history-add" data-type="post" data-id="142176"></div>
<div class="card content-card">
	<div class="card__content explanations card__content--no-padding">
		<div class="card__content__header card__content__header--flex">
			<div class="card__content__header__arrow" data-intro="للإنتقال للمقالة السابقة" data-step="4">
				<a href="https://khaledalsabt.com/explanations/3099" title="السابق" class="next-prev-button d-flex"><i
						class="fa fa-step-forward"></i>
				</a>
			</div>
			<div class="card__content__header__title card__content__header__title--center">
				(77) ألفاظ الحديث: &quot;اللهم اجعل في قلبي نورًا ...&quot;، والزِّيادات الصَّحيحة على الرِّواية
			</div>
			<div class="card__content__header__arrow" data-intro="للإنتقال للمقالة التالية" data-position="left">
				<a href="https://khaledalsabt.com/explanations/3101" title="التالي" class="next-prev-button d-flex"><i
						class="fa fa-step-backward"></i>
				</a>
			</div>
		</div>
		<div class="content-card__meta">
			<div class="row">
				<div class="col-auto utility__text-right d-flex">
					<div class="drop-down utility__font-small">
						<button class="btn btn--outlined btn--padding-small btn--with-icon drop-down__button"
							style="border-radius: 25px;">
							<span>تحميل</span>
							<i class="fa fa-angle-down"></i>
						</button>
						<ul class="drop-down__content">
							<li>
								<a href="https://files.zadapps.info/khaledalsabt.com/migrated/03_slasel/Athkar/Athkar_077.mp3"
									class=" stats-add-on-click stats-add-download"
									data-url="https://khaledalsabt.com/api/stats/download/142176/books_explanation" rel="noopener"
									download>
									<i class="fa fa-file-audio-o"></i>
									تحميل ملف mp3
								</a>
							</li>
							<li>
								<a href="https://files.zadapps.info/khaledalsabt.com/migrated/03_slasel/Athkar/Athkar_077.pdf"
									class=" stats-add-on-click stats-add-download"
									data-url="https://khaledalsabt.com/api/stats/download/142176/books_explanation" rel="noopener"
									download>
									<i class="fa fa-file-pdf-o"></i>
									تحميل ملف pdf
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col utility__text-right d-flex utility__flex-centered">
					<a href="#" data-add-to-list="142176" class="mr-auto" data-intro="إضافة إلى قائمة المدارسة"
						data-position="right">أضف المادة لقائمة المدارسة</a>
				</div>
				<div class="col-md-6 col-sm-12 utility__text-left mt-4 mt-md-0">
					<div class="row">
						<div class="col utility__padding__top--5 text-center">
							<span class="favorites-count">0</span>
							<a href="#" data-favorite-id="142176" data-intro="إضافة إلى قائمة المفضلة" data-position="left"
								data-favorite-type="posts" data-is-favorited="false">
								<i class="fa fa-heart-o utility__padding__right--8 hvr-pulse"></i>
							</a>
						</div>
						<div class="col utility__padding__top--5">
							<div class="share-buttons">
								<a class="share-buttons__button share-buttons__button--facebook" href="https://www.facebook.com/sharer/sharer.php?
                          target=" _blank" title="شارك على فيسبوك"><i class="fa fa-facebook fa-fw"
										aria-hidden="true"></i><span class="sr-only">شارك على فيسبوك</span></a>
								<a class="share-buttons__button share-buttons__button--twitter" href="https://twitter.com/intent/tweet?source=https%3A%2F%2Fkhaledalsabt.
                          target=" _blank" title="انشر تغريدة"><i class="fa fa-twitter fa-fw"
										aria-hidden="true"></i><span class="sr-only">انشر تغريدة</span></a>
								<a class="share-buttons__button share-buttons__button--google" target="_blank"
									title="شارك على غوغل بلس"><i class="fa fa-google-plus fa-fw" aria-hidden="true"></i><span
										class="sr-only">شارك على غوغل بلس</span></a>
								<a class="share-buttons__button share-buttons__button--email" href="https://khaledalsabt.com/cdn-cgi/l/
                          target=" _blank" title="أرسل بريدًا"><i class="fa fa-envelope fa-fw"
										aria-hidden="true"></i><span class="sr-only">أرسل بريدًا</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-card__content">
			<div class="row my-md-4">
				<div class="col-12">
					<div class="jp-player">
						<div class="row">
							<div class=" col-sm-12 ">
								<div id="jp_container_186558" class="jp-audio" role="application" aria-label="media player">
									<div class="jp-interface">
										<div class="jp-button jp-playpause-button">
											<button class="jp-play" role="button" tabindex="0">play</button>
										</div>
										<div class="jp-time-holder">
											<div class="jp-current-time" role="timer" aria-label="time"></div>
										</div>
										<div class="jp-time-rail">
											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div class="jp-play-bar"></div>
												</div>
											</div>
										</div>
										<div class="jp-time-holder">
											<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
										</div>
										<div class="jp-button jp-volume-button">
											<button class="jp-mute" role="button" tabindex="0">max volume</button>
										</div>
									</div>
									<div class="jp-playlist">
										<ul>
											<li>&nbsp;</li>
										</ul>
									</div>
									<noscript>
										<div class="jp-no-solution">
											<audio src="https://files.zadapps.info/khaledalsabt.com/migrated/03_slasel/Athkar/Athkar_077.mp3"
												controls></audio>
										</div>
									</noscript>
								</div>
								<div id="jquery_jplayer_186558" class="jp-jplayer" data-is-video="false" data-auto-play="true"
									data-files="[{&quot;id&quot;:186558,&quot;attachable_id&quot;:142153,&quot;attachable_type&quot;:&quot;ZadGroup\\Cms\\Models\\PostContent&quot;,&quot;disk_name&quot;:&quot;Athkar_077.mp3&quot;,&quot;file_name&quot;:&quot;Athkar_077.mp3&quot;,&quot;link&quot;:&quot;https:\/\/files.zadapps.info\/khaledalsabt.com\/migrated\/03_slasel\/Athkar\/Athkar_077.mp3&quot;,&quot;path&quot;:&quot;migrated\/03_slasel\/Athkar\/Athkar_077.mp3&quot;,&quot;file_size&quot;:7182506,&quot;mime&quot;:&quot;audio\/mpeg&quot;,&quot;type&quot;:&quot;audio&quot;,&quot;title&quot;:null,&quot;description&quot;:null,&quot;sort&quot;:null,&quot;created_at&quot;:&quot;2020-04-15 11:00:14&quot;,&quot;updated_at&quot;:&quot;2020-04-15 11:00:14&quot;}]">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-muted">
				<div class="col">
				</div>
				<div class="col utility__text-center">
					<div class="row flex-row-reverse">
						<div class="col-auto d-flex justify-content-end">
							<div class="d-flex">
								<a href="https://files.zadapps.info/khaledalsabt.com/migrated/03_slasel/Athkar/Athkar_077.mp3"
									class="stats-add-on-click stats-add-download hvr-pulse"
									data-url="https://khaledalsabt.com/api/stats/download/142176/books_explanation" download>
									<i class="fa fa-download utility__padding__left--8"></i>
								</a>
								التحميل: 0
							</div>
						</div>
						<div class="col-auto d-flex justify-content-end">
							<div class="d-flex align-items-center">
								<i class="fa fa-headphones utility__padding__left--8"></i> مرات
								الإستماع: 0
							</div>
						</div>
					</div>
				</div>
			</div>
			<img src="#" class="post-thumbnail">
			<div id="content-body">
				<p></p>
				<ul>
				</ul>
			</div>
		</div>
	</div>
</div>
@include('partials.related_articles')
<div class="col-lg-3 d-lg-block d-none"></div>
@stop
