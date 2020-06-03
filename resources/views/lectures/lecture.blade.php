@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="https://khaledalsabt.com">الصفحة الرئيسية</a></li>
        <li class="breadcrumb-item"><a href="https://khaledalsabt.com/lectures">المحاضرات</a></li>
        <li class="breadcrumb-item active" aria-current="page">وقفات مع قوله تعالى: (ولا يبدين زينتهن
            إلا ما ظهر منها)</li>
    </ol>
</nav>
<div class="hidden" id="stats-add-view" data-url="https://khaledalsabt.com/api/stats/view/137121/lecture"></div>
<div class="hidden" id="history-add" data-type="post" data-id="137121"></div>
<div class="card content-card">
    <div class="card__content book_explanation card__content--no-padding">
        <div class="card__content__header card__content__header--flex">
            <div class="card__content__header__title card__content__header__title--center">
                وقفات مع قوله تعالى: (ولا يبدين زينتهن إلا ما ظهر منها)
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
                                <a href="https://files.zadapps.info/khaledalsabt.com/migrated/01_lectures/KSabt_Zinatahn.mp3"
                                    class=" stats-add-on-click stats-add-download"
                                    data-url="https://khaledalsabt.com/api/stats/download/137121/lecture" rel="noopener"
                                    download>
                                    <i class="fa fa-file-audio-o"></i>
                                    تحميل ملف mp3
                                </a>
                            </li>
                            <li>
                                <a href="https://files.zadapps.info/khaledalsabt.com/migrated/01_lectures/KSabt_Zinatahn.docx"
                                    class=" stats-add-on-click stats-add-download"
                                    data-url="https://khaledalsabt.com/api/stats/download/137121/lecture" rel="noopener"
                                    download>
                                    <i class="fa fa-file-word-o"></i>
                                    تحميل ملف word
                                </a>
                            </li>
                            <li>
                                <a href="https://files.zadapps.info/khaledalsabt.com/migrated/01_lectures/KSabt_Zinatahn.pdf"
                                    class=" stats-add-on-click stats-add-download"
                                    data-url="https://khaledalsabt.com/api/stats/download/137121/lecture" rel="noopener"
                                    download>
                                    <i class="fa fa-file-pdf-o"></i>
                                    تحميل ملف pdf
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col utility__text-right d-flex utility__flex-centered">
                    <a href="#" data-add-to-list="137121" class="mr-auto" data-intro="إضافة إلى قائمة المدارسة"
                        data-position="right">أضف المادة لقائمة
                        المدارسة</a>
                </div>
                <div class="col-md-6 col-sm-12 utility__text-left mt-4 mt-md-0">
                    <div class="row">
                        <div class="col utility__padding__top--5 text-center">
                            <span class="favorites-count">0</span>
                            <a href="#" data-favorite-id="137121" data-intro="إضافة إلى قائمة المفضلة"
                                data-position="left" data-favorite-type="posts" data-is-favorited="false">
                                <i class="fa fa-heart-o utility__padding__right--8 hvr-pulse"></i>
                            </a>
                        </div>
                        <div class="col utility__padding__top--5">
                            <div class="share-buttons">
                                <a class="share-buttons__button share-buttons__button--facebook"
                                    href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fkhaledalsabt.com%2Flectures%2F43%2F%25D9%2588%25D9%2582%25D9%2581%25D8%25A7%25D8%25AA-%25D9%2585%25D8%25B9-%25D9%2582%25D9%2588%25D9%2584%25D9%2587-%25D8%25AA%25D8%25B9%25D8%25A7%25D9%2584%25D9%2589-%25D9%2588%25D9%2584%25D8%25A7-%25D9%258A%25D8%25A8%25D8%25AF%25D9%258A%25D9%2586-%25D8%25B2%25D9%258A%25D9%2586%25D8%25AA%25D9%2587%25D9%2586-%25D8%25A7%25D9%2584%25D8%25A7-%25D9%2585%25D8%25A7-%25D8%25B8%25D9%2587%25D8%25B1-%25D9%2585%25D9%2586%25D9%2587%25D8%25A7&t=%D9%88%D9%82%D9%81%D8%A7%D8%AA%20%D9%85%D8%B9%20%D9%82%D9%88%D9%84%D9%87%20%D8%AA%D8%B9%D8%A7%D9%84%D9%89%3A%20%28%D9%88%D9%84%D8%A7%20%D9%8A%D8%A8%D8%AF%D9%8A%D9%86%20%D8%B2%D9%8A%D9%86%D8%AA%D9%87%D9%86%20%D8%A5%D9%84%D8%A7%20%D9%85%D8%A7%20%D8%B8%D9%87%D8%B1%20%D9%85%D9%86%D9%87%D8%A7%29"
                                    target="_blank" title="شارك على فيسبوك"><i class="fa fa-facebook fa-fw"
                                        aria-hidden="true"></i><span class="sr-only">شارك على فيسبوك</span></a>
                                <a class="share-buttons__button share-buttons__button--twitter"
                                    href="https://twitter.com/intent/tweet?source=https%3A%2F%2Fkhaledalsabt.com%2Flectures%2F43%2F%25D9%2588%25D9%2582%25D9%2581%25D8%25A7%25D8%25AA-%25D9%2585%25D8%25B9-%25D9%2582%25D9%2588%25D9%2584%25D9%2587-%25D8%25AA%25D8%25B9%25D8%25A7%25D9%2584%25D9%2589-%25D9%2588%25D9%2584%25D8%25A7-%25D9%258A%25D8%25A8%25D8%25AF%25D9%258A%25D9%2586-%25D8%25B2%25D9%258A%25D9%2586%25D8%25AA%25D9%2587%25D9%2586-%25D8%25A7%25D9%2584%25D8%25A7-%25D9%2585%25D8%25A7-%25D8%25B8%25D9%2587%25D8%25B1-%25D9%2585%25D9%2586%25D9%2587%25D8%25A7&text=%D9%88%D9%82%D9%81%D8%A7%D8%AA%20%D9%85%D8%B9%20%D9%82%D9%88%D9%84%D9%87%20%D8%AA%D8%B9%D8%A7%D9%84%D9%89%3A%20%28%D9%88%D9%84%D8%A7%20%D9%8A%D8%A8%D8%AF%D9%8A%D9%86%20%D8%B2%D9%8A%D9%86%D8%AA%D9%87%D9%86%20%D8%A5%D9%84%D8%A7%20%D9%85%D8%A7%20%D8%B8%D9%87%D8%B1%20%D9%85%D9%86%D9%87%D8%A7%29:%20https%3A%2F%2Fkhaledalsabt.com%2Flectures%2F43%2F%25D9%2588%25D9%2582%25D9%2581%25D8%25A7%25D8%25AA-%25D9%2585%25D8%25B9-%25D9%2582%25D9%2588%25D9%2584%25D9%2587-%25D8%25AA%25D8%25B9%25D8%25A7%25D9%2584%25D9%2589-%25D9%2588%25D9%2584%25D8%25A7-%25D9%258A%25D8%25A8%25D8%25AF%25D9%258A%25D9%2586-%25D8%25B2%25D9%258A%25D9%2586%25D8%25AA%25D9%2587%25D9%2586-%25D8%25A7%25D9%2584%25D8%25A7-%25D9%2585%25D8%25A7-%25D8%25B8%25D9%2587%25D8%25B1-%25D9%2585%25D9%2586%25D9%2587%25D8%25A7&via=khaledalsabt"
                                    target="_blank" title="انشر تغريدة"><i class="fa fa-twitter fa-fw"
                                        aria-hidden="true"></i><span class="sr-only">انشر
                                        تغريدة</span></a>
                                <a class="share-buttons__button share-buttons__button--google"
                                    href="https://plus.google.com/share?url=https%3A%2F%2Fkhaledalsabt.com%2Flectures%2F43%2F%25D9%2588%25D9%2582%25D9%2581%25D8%25A7%25D8%25AA-%25D9%2585%25D8%25B9-%25D9%2582%25D9%2588%25D9%2584%25D9%2587-%25D8%25AA%25D8%25B9%25D8%25A7%25D9%2584%25D9%2589-%25D9%2588%25D9%2584%25D8%25A7-%25D9%258A%25D8%25A8%25D8%25AF%25D9%258A%25D9%2586-%25D8%25B2%25D9%258A%25D9%2586%25D8%25AA%25D9%2587%25D9%2586-%25D8%25A7%25D9%2584%25D8%25A7-%25D9%2585%25D8%25A7-%25D8%25B8%25D9%2587%25D8%25B1-%25D9%2585%25D9%2586%25D9%2587%25D8%25A7"
                                    target="_blank" title="شارك على غوغل بلس"><i class="fa fa-google-plus fa-fw"
                                        aria-hidden="true"></i><span class="sr-only">شارك على غوغل بلس</span></a>
                                <a class="share-buttons__button share-buttons__button--email"
                                    href="/cdn-cgi/l/email-protection#605f1315020a0503145d45245945585845245945585245245945585145245845215745245845212145525045245945585545245845225945525045245945585245245945585845245945585445245945585745525045245845212145245845225945245845215745245945585445245945585945532145525045525845245945585845245945585445245845215745525045245945582145245845215845245845212645245945582145245945585645525045245845225245245945582145245945585645245845212145245945585745245945585645525045245845215545245945585445245845215745525045245945585545245845215745525045245845225845245945585745245845225145525045245945585545245945585645245945585745245845215745525946020f04195d230805030b400f1514401408091340140f1009035a45525008141410134553214552264552260b08010c0504010c130102144e030f0d4552260c05031415120513455226545345522645525524594552555858455255245945525558524552552459455255585145525524584552552157455255245845525521214d45525524594552555855455255245845525522594d455255245945525558524552552459455255585845525524594552555854455255245945525558574d45525524584552552121455255245845525522594552552458455255215745525524594552555854455255245945525558594d4552552459455255585845525524594552555854455255245845525521574d45525524594552555821455255245845525521584552552458455255212645525524594552555821455255245945525558564d4552552458455255225245525524594552555821455255245945525558564552552458455255212145525524594552555857455255245945525558564d4552552458455255215745525524594552555854455255245845525521574d45525524594552555855455255245845525521574d4552552458455255225845525524594552555857455255245845525522514d45525524594552555855455255245945525558564552552459455255585745525524584552552157"
                                    target="_blank" title="أرسل بريدًا"><i class="fa fa-envelope fa-fw"
                                        aria-hidden="true"></i><span class="sr-only">أرسل
                                        بريدًا</span></a>
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
                                <div id="jp_container_181414" class="jp-audio" role="application"
                                    aria-label="media player">
                                    <div class="jp-interface">
                                        <div class="jp-button jp-playpause-button">
                                            <button class="jp-play" role="button" tabindex="0">play</button>
                                        </div>
                                        <div class="jp-time-holder">
                                            <div class="jp-current-time" role="timer" aria-label="time">
                                            </div>
                                        </div>
                                        <div class="jp-time-rail">
                                            <div class="jp-progress">
                                                <div class="jp-seek-bar">
                                                    <div class="jp-play-bar"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-time-holder">
                                            <div class="jp-duration" role="timer" aria-label="duration">
                                                &nbsp;</div>
                                        </div>
                                        <div class="jp-button jp-volume-button">
                                            <button class="jp-mute" role="button" tabindex="0">max
                                                volume</button>
                                        </div>
                                    </div>
                                    <div class="jp-playlist">
                                        <ul>
                                            <li>&nbsp;</li>
                                        </ul>
                                    </div>
                                    <noscript>
                                        <div class="jp-no-solution">
                                            <audio
                                                src="https://files.zadapps.info/khaledalsabt.com/migrated/01_lectures/KSabt_Zinatahn.mp3"
                                                controls></audio>
                                        </div>
                                    </noscript>
                                </div>
                                <div id="jquery_jplayer_181414" class="jp-jplayer" data-is-video="false"
                                    data-auto-play="true"
                                    data-files="[{&quot;id&quot;:181414,&quot;attachable_id&quot;:137099,&quot;attachable_type&quot;:&quot;ZadGroup\\Cms\\Models\\PostContent&quot;,&quot;disk_name&quot;:&quot;KSabt_Zinatahn.mp3&quot;,&quot;file_name&quot;:&quot;KSabt_Zinatahn.mp3&quot;,&quot;link&quot;:&quot;https:\/\/files.zadapps.info\/khaledalsabt.com\/migrated\/01_lectures\/KSabt_Zinatahn.mp3&quot;,&quot;path&quot;:&quot;migrated\/01_lectures\/KSabt_Zinatahn.mp3&quot;,&quot;file_size&quot;:38231043,&quot;mime&quot;:&quot;audio\/mpeg&quot;,&quot;type&quot;:&quot;audio&quot;,&quot;title&quot;:null,&quot;description&quot;:null,&quot;sort&quot;:null,&quot;created_at&quot;:&quot;2018-09-17 12:30:04&quot;,&quot;updated_at&quot;:&quot;2019-08-04 13:11:42&quot;}]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-muted">
                <div class="col">
                    تاريخ النشر: ٠٨ / جمادى الآخرة / ١٤٣٣ </div>
                <div class="col utility__text-center">
                    <div class="row flex-row-reverse">
                        <div class="col-auto d-flex justify-content-end">
                            <div class="d-flex">
                                <a href="https://files.zadapps.info/khaledalsabt.com/migrated/01_lectures/KSabt_Zinatahn.mp3"
                                    class="stats-add-on-click stats-add-download hvr-pulse"
                                    data-url="https://khaledalsabt.com/api/stats/download/137121/lecture" download>
                                    <i class="fa fa-download utility__padding__left--8"></i>
                                </a>
                                التحميل: 23316
                            </div>
                        </div>
                        <div class="col-auto d-flex justify-content-end">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-headphones utility__padding__left--8"></i> مرات
                                الإستماع: 9351
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="" class="post-thumbnail">
            <div id="content-body">
                <p></p>
                <ul>
                    <li><a href="#1" class="smooth-scroll player-seek" data-seek-to="00:03:11">وَقُلْ
                            لِلْمُؤْمِنَاتِ يَغْضُضْنَ مِنْ أَبْصَارِهِنَّ</a></li>
                    <li><a href="#2" class="smooth-scroll player-seek" data-seek-to="00:11:31">وَلَا
                            يُبْدِينَ زِينَتَهُنَّ</a></li>
                    <li><a href="#3" class="smooth-scroll player-seek" data-seek-to="00:28:11">وَلْيَضْرِبْنَ
                            بِخُمُرِهِنَّ</a></li>
                    <li><a href="#4" class="smooth-scroll player-seek" data-seek-to="00:36:06">إِلَّا
                            لِبُعُولَتِهِنَّ</a></li>
                    <li><a href="#5" class="smooth-scroll player-seek" data-seek-to="00:38:22">أَوْ
                            آبَائِهِنَّ</a></li>
                    <li><a href="#6" class="smooth-scroll player-seek" data-seek-to="00:39:00">أَوْ
                            أَبْنَائِهِنَّ</a></li>
                    <li><a href="#7" class="smooth-scroll player-seek" data-seek-to="00:40:44">ليس بين
                            الزوجين عورة</a></li>
                    <li><a href="#8" class="smooth-scroll player-seek" data-seek-to="00:41:30">هل تحتجب
                            المرأة من العم والخال؟</a></li>
                    <li><a href="#9" class="smooth-scroll player-seek" data-seek-to="00:44:20">أَوْ
                            نِسَائِهِنَّ</a></li>
                    <li><a href="#10" class="smooth-scroll player-seek" data-seek-to="00:47:47">أَوْ مَا
                            مَلَكَتْ أَيْمَانُهُنَّ</a></li>
                    <li><a href="#11" class="smooth-scroll player-seek" data-seek-to="00:49:50">أَوِ
                            التَّابِعِينَ غَيْرِ أُوْلِي الإِرْبَةِ مِنَ الرِّجَالِ</a></li>
                    <li><a href="#12" class="smooth-scroll player-seek" data-seek-to="00:53:37">أَوِ
                            الطِّفْلِ الَّذِينَ لَمْ يَظْهَرُوا عَلَى عَوْرَاتِ النِّسَاءِ</a></li>
                    <li><a href="#13" class="smooth-scroll player-seek" data-seek-to="00:58:15">وَلا
                            يَضْرِبْنَ بِأَرْجُلِهِنَّ</a></li>
                    <li><a href="#14" class="smooth-scroll player-seek" data-seek-to="01:01:58">المرأة
                            عورة</a></li>
                    <li><a href="#15" class="smooth-scroll player-seek" data-seek-to="01:06:01">المرأة
                            لا تبدي للمرأة إلا ما تبديه لمحارمها</a></li>
                    <li><a href="#16" class="smooth-scroll player-seek" data-seek-to="01:13:58">المرأة
                            محل الحياء</a></li>
                    <li><a href="#17" class="smooth-scroll player-seek" data-seek-to="01:17:07">المرأة
                            في الجاهلية</a></li>
                    <li><a href="#18" class="smooth-scroll player-seek" data-seek-to="01:17:51">الجمال
                            الحقيقي في الستر والعفاف والحشمة</a></li>
                </ul>
                <div id="1">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> وَقُلْ لِلْمُؤْمِنَاتِ يَغْضُضْنَ مِنْ
                        أَبْصَارِهِنَّ
                    </a>
                    <div>
                        <p style="text-align: justify;">إن الحمد لله، نحمده، ونستعينه، ونستغفره، ونعوذ
                            بالله من شرور أنفسنا، وسيئات أعمالنا، من يهده الله فلا مضل له، ومن يضلل فلا
                            هادي له، وأشهد أن لا إله إلا الله، وحده لا شريك له، وأشهد أن محمداً عبده،
                            ورسوله، صلى الله، وسلم، وبارك عليه، وعلى آله، وصحبه أجمعين، أما بعد:</p>
                        <p style="text-align: justify;">فسلام الله عليكم، ورحمته، وبركاته.</p>
                        <p style="text-align: justify;">ففي هذه الليلة سنتحدث عن آية من كتاب الله -
                            تبارك، وتعالى - في هذه السورة الكريمة سورة النور، وهي سورة تدور في مجملها
                            على موضوع الستر، والعفاف، وقد قرر الله - تبارك، وتعالى - في أولها ما يحصل به
                            حفظ الأعراض، وذلك بأصل كبير، وهو إقامة الحد على الجناة عليها، وذلك بمقارفة
                            الفواحش، كما فرض الله - تبارك، وتعالى - الحد على من جنى عليها فأطلق لسانه،
                            وخدش الأعراض.</p>
                        <p style="text-align: justify;">وكذلك ذكر الله - تبارك، وتعالى - فيها ما يحصل به
                            حفظ هذه الأعراض، فأمر بغض الأبصار، ولم يكن الله - تبارك، وتعالى - ليأمر بغض
                            البصر، ويشرع إقامة الحدود، ثم بعد ذلك يترك الفتنة تستعرض أمام أنظار الناس،
                            فيفتنون بما يشاهدون من السفور، والتبرج، والعري، وإظهار المفاتن من قبل
                            النساء، فأمر الله - تبارك، وتعالى - بستر هذه الزينة، وذكر أحكامها، وفصلها،
                            ثم ذكر بعد ذلك آية النور؛ فمن غض بصره فإن الله - تبارك، وتعالى - يعوضه من
                            نور البصيرة، والإيمان في قلبه ما لا يقادر قدره، جزاء&nbsp;وفاقاً؛ فغض البصر
                            عما حرم الله - تبارك، وتعالى - يفتح البصيرة، ويشرق معه القلب، وتشرق النفس،
                            ويجد العبد لذة في الإيمان يعوضه الله <span class="arabisque"></span> فيها
                            عما فاته من تطلب شهوته، ولذته بالنظر المحرم الذي يورثه حرقة، وألماً، وعصرة
                            في قلبه.</p>
                        <p style="text-align: justify;">في هذه الآيات التي نتدارسها، وأسأل الله <span
                                class="arabisque"></span> أن يجعل هذا المجلس بركة علينا؛ فإن النبي ﷺ
                            أخبرنا أنه&nbsp;<span class="hadith">ما اجتمع قوم في بيت من بيوت الله، يتلون
                                كتاب الله، ويتدارسونه بينهم، إلا نزلت عليهم السكينة، وغشيتهم الرحمة،
                                وحفتهم الملائكة، وذكرهم الله فيمن عنده</span><sup data-footnote-id="ajifq"><a
                                    href="#footnote-1" id="footnote-marker-1-1" rel="footnote">[1]</a></sup>&nbsp;فهذا
                            مجلس في التذاكر، والتفكر،
                            والتدبر، والتفسير، والاستنباط من المعين الذي لا ينضب؛ من كتاب الله - تبارك،
                            وتعالى - وأرجو أيها الأحبة ألا تستطيلوا ما يذكر في هذا المجلس، فإن كتاب الله
                            - تبارك، وتعالى - مليء بالعبر، والعظات، والحكم، والأحكام، هذا القرآن هو
                            المصدر الذي نستقي منه الأحكام، والتشريعات، ونستقي منه الآداب، وما يجمل، وما
                            يحسن، وكيف يكون أهل الإيمان على حالة سوية مرضية لائقة تحفظ لهم أعراضهم،
                            وتكمل بها مروءاتهم، ويكونون على حال من الجمال الظاهر، والباطن، بحيث يكون
                            الواحد منهم كما خلقه الله <span class="arabisque"></span> أولاً&nbsp;<span
                                class="aaya">لَقَدْ خَلَقْنَا الإِنسَانَ فِي أَحْسَنِ
                                تَقْوِيمٍ</span>&nbsp;[التين:4].</p>
                        <p style="text-align: justify;">فقوله - تبارك، وتعالى - :&nbsp;<span class="aaya">وَقُلْ
                                لِلْمُؤْمِنَاتِ يَغْضُضْنَ مِنْ أَبْصَارِهِنَّ
                                وَيَحْفَظْنَ فُرُوجَهُنَّ&nbsp;وَلا يُبْدِينَ زِينَتَهُنَّ إِلَّا مَا
                                ظَهَرَ مِنْهَا&nbsp;وَلْيَضْرِبْنَ بِخُمُرِهِنَّ عَلَى
                                جُيُوبِهِنَّ&nbsp;وَلا يُبْدِينَ زِينَتَهُنَّ إِلَّا لِبُعُولَتِهِنَّ
                                أَوْ آبَائِهِنَّ أَوْ آبَاءِ بُعُولَتِهِنَّ أَوْ أَبْنَائِهِنَّ أَوْ
                                أَبْنَاءِ بُعُولَتِهِنَّ أَوْ إِخْوَانِهِنَّ أَوْ بَنِي إِخْوَانِهِنَّ
                                أَوْ بَنِي أَخَوَاتِهِنَّ أَوْ نِسَائِهِنَّ أَوْ مَا مَلَكَتْ
                                أَيْمَانُهُنَّ أَوِ التَّابِعِينَ غَيْرِ أُوْلِي الإِرْبَةِ مِنَ
                                الرِّجَالِ أَوِ الطِّفْلِ الَّذِينَ لَمْ يَظْهَرُوا عَلَى عَوْرَاتِ
                                النِّسَاءِ&nbsp;وَلا يَضْرِبْنَ بِأَرْجُلِهِنَّ لِيُعْلَمَ مَا يُخْفِينَ
                                مِنْ زِينَتِهِنَّ&nbsp;وَتُوبُوا إِلَى اللَّهِ جَمِيعًا أَيُّهَا
                                الْمُؤْمِنُونَ لَعَلَّكُمْ تُفْلِحُونَ</span>&nbsp;[النور:31].</p>
                        <p style="text-align: justify;">الآية عظيمة تضمنت أحكاماً كثيرة، فالكثيرون لربما
                            قد يشغبون، أو يتأثرون، أو يقع لهم نوع اشتباه بسبب ما يثار فيما يتصل بهذه
                            القضايا مما يتعلق بالستر، والحشمة، والحجاب، والعفاف.</p>
                        <p style="text-align: justify;">الله - تبارك، وتعالى - يأمر نبيه ﷺ الذي أرسله
                            إلينا، وأمرنا بطاعته، وجعل ذلك لازماً، واجباً على كل مؤمن،&nbsp;<span
                                class="aaya">فَلا&nbsp;وَرَبِّكَ لا يُؤْمِنُونَ حَتَّى يُحَكِّمُوكَ
                                فِيمَا شَجَرَ بَيْنَهُمْ ثُمَّ لا يَجِدُوا فِي أَنفُسِهِمْ حَرَجًا
                                مِمَّا قَضَيْتَ&nbsp;وَيُسَلِّمُوا تَسْلِيمً</span>&nbsp;[االنساء:65].
                        </p>
                        <p style="text-align: justify;">وقال:&nbsp;<span class="aaya">إِنَّمَا كَانَ
                                قَوْلَ الْمُؤْمِنِينَ إِذَا دُعُوا إِلَى اللَّهِ&nbsp;وَرَسُولِهِ
                                لِيَحْكُمَ بَيْنَهُمْ أَنْ يَقُولُوا
                                سَمِعْنَا&nbsp;وَأَطَعْنَا</span>&nbsp;[النور:51]&nbsp;وقال:&nbsp;<span
                                class="aaya">وَمَا كَانَ لِمُؤْمِنٍ&nbsp;وَلا مُؤْمِنَةٍ إِذَا قَضَى
                                اللَّهُ&nbsp;وَرَسُولُهُ أَمْرًا أَنْ يَكُونَ لَهُمُ الْخِيَرَةُ مِنْ
                                أَمْرِهِمْ</span>&nbsp;[الأحزاب:36]&nbsp;فهنا ربنا - تبارك، وتعالى -
                            يأمر نبيه، يقول الله - تبارك، وتعالى - :&nbsp;<span class="aaya">وَقُلْ
                                لِلْمُؤْمِنَاتِ يَغْضُضْنَ مِنْ أَبْصَارِهِنَّ&nbsp;وَيَحْفَظْنَ
                                فُرُوجَهُنَّ</span>&nbsp;[النور:31]&nbsp;وسيكون حديثنا عن قوله <span
                                class="arabisque"></span>:&nbsp;<span class="aaya">وَلا يُبْدِينَ
                                زِينَتَهُنَّ إِلَّا مَا ظَهَرَ مِنْهَا</span>&nbsp;[النور:31] فما
                            بعده.&nbsp;</p>
                        <div>
                            <div id="ftn49">
                                <section class="footnotes">
                                    <ol>
                                        <li data-footnote-id="ajifq" id="footnote-1"><cite>أخرجه مسلم،
                                                كتاب الذكر، والدعاء، والتوبة، والاستغفار، باب فضل
                                                الاجتماع على تلاوة القرآن، وعلى الذكر، برقم
                                                (2699).</cite></li>
                                    </ol>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="2">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> وَلَا يُبْدِينَ زِينَتَهُنَّ
                    </a>
                    <div>
                        <p style="text-align: justify;"><span class="aaya">وَلَا يُبْدِينَ
                                زِينَتَهُنَّ</span>&nbsp;فهذا نهي من الله - تبارك، وتعالى - عن إبداء
                            الزينة إلا ما ظهر منها، والزينة اسم يقال لما يقع من المحاسن، محاسن الخَلق
                            الأصلية التي خلق الله <span class="arabisque"></span> المرأة عليها، كما
                            يقال ذلك على سائر ما يتزين به الإنسان، وهي الزينة المستعارة، الزينة الزائدة،
                            وذلك منحصر في ثلاثة أشياء:</p>
                        <p style="text-align: justify;">الأول: الأصباغ، كالحمرة، والحناء، وما إلى ذلك.
                        </p>
                        <p style="text-align: justify;">الثاني: الحلي بجميع أنواعه.</p>
                        <p style="text-align: justify;">الثالث: هي زينة الثياب.</p>
                        <p style="text-align: justify;">فالزينة - أعني الزينة المستعارة - ترجع إلى هذه
                            الأمور الثلاثة.</p>
                        <p style="text-align: justify;">بعد ذلك يكون&nbsp;قوله - تبارك، وتعالى -
                            :&nbsp;<span class="aaya">وَلا يُبْدِينَ زِينَتَهُنَّ إِلَّا مَا ظَهَرَ
                                مِنْهَا</span>&nbsp;شاملاً لهذه الأمور جميعاً؛ فلا تكون المرأة متكشفة،
                            تكشف عن شيء، أو عن أجزاء من جسدها، كما أنها لا تظهر زينتها من الحلي، أو من
                            الأصباغ، كما لا تظهر أيضاً زينتها من الثياب إلا ما لابد منه مما لا يمكن
                            إخفاؤه؛ وذلك حجباً لها عن أنظار الرجال، وعن أن يطمع فيها الذي في قلبه مرض.
                        </p>
                        <p style="text-align: justify;">قوله - تبارك، وتعالى - :<span class="aaya">&nbsp;وَلا يُبْدِينَ
                                زِينَتَهُنَّ إِلَّا مَا ظَهَرَ
                                مِنْهَا</span>&nbsp;شاملاً لهذه الأمور جميعاً؛ فلا تكون المرأة متكشفة،
                            تكشف عن شيء، أو عن أجزاء من جسدها، كما أنها لا تظهر زينتها من الحلي، أو من
                            الأصباغ، كما لا تظهر أيضاً زينتها من الثياب إلا ما لابد منه مما لا يمكن
                            إخفاؤه؛ وذلك حجباً لها عن أنظار الرجال، وعن أن يطمع فيها الذي في قلبه
                            مرض.&nbsp;</p>
                        <p style="text-align: justify;">فقوله:&nbsp;<span class="aaya">وَلا يُبْدِينَ
                                زِينَتَهُنَّ إِلَّا مَا ظَهَرَ مِنْهَا</span>&nbsp;أي: لا يظهرن شيئاً من
                            الزينة للأجانب إلا ما لا يمكن إخفاؤه، كما يقول الحافظ ابن كثير - رحمه الله -
                            وفسره ابن مسعود <span class="arabisque"></span> بمثل هذا، وبه قال جماعة من
                            السلف، قالوا: كالرداء، والثياب، يعني على ما كان يتعاطاه نساء العرب من
                            المِقْنعة التي تُجلِّل&nbsp; ثيابها، وما يبدو من أسافل الثياب فلا حرج عليها
                            فيه؛ لأن هذا لا يمكنها إخفاؤه، هذا قال به ابن مسعود، وإبراهيم النخعي، والحسن
                            البصري، وابن سيرين، وأبو الجوزاء، واختاره جمع من المفسرين كالشيخ محمد الأمين
                            الشنقيطي، والشيخ عبد الرحمن السعدي، وهو الذي عليه قول كثير من المحققين،
                            فيكون ذلك بمعنى أنها تستر جميع البدن أمام الرجال الأجانب، فإن المقصود بهذه
                            الزينة&nbsp;<span class="aaya">وَلا يُبْدِينَ زِينَتَهُنَّ</span>&nbsp;في
                            هذا الموضع: الزينة التي تكون أمام الرجال الأجانب، فهناك زينة ظاهرة، وهناك
                            زينة باطنة.</p>
                        <p style="text-align: justify;">فالزينة الظاهرة لا يجوز أن تُظهر شيئاً منها إلا
                            ما لا يمكن ستره كظاهر الثياب - يعنون بذلك: المِقْنعة كالعباءة - فقد جعل الله
                            <span class="arabisque"></span> اللباس في أصله زينة، ولكن ليس معنى ذلك أنها
                            تلبس عباءة مزينة أنيقة مزركشة ذات أكمام، وتطريز، ثم تقول: إلا ما ظهر منها،
                            فإن هذا نوع فتنة، وفيه قلب لمقصود الشارع من الحجاب، الحجاب لا يمكن بحال من
                            الأحوال أن يتحول إلى فتنة في نفسه، فهذا من تلاعب الشيطان بالناس، وتزيينه
                            لهم، وتسويله، وإنما المرأة إذا خرجت فإنها تخرج في أطمارها كما جاء عن عمر
                            <span class="arabisque"></span><sup data-footnote-id="pxvvu"><a href="#footnote-1"
                                    id="footnote-marker-1-1" rel="footnote">[1]</a></sup>&nbsp;بمعنى أنها تخرج في عباءة
                            غير
                            ملفتة، فلا تبدو بها أنيقة، ومن ثمّ فإن سؤالات كثير من النساء تسأل عن عباءة
                            ذات أكمام، وتارة تسأل عن عباءة توضع على الكتف، وتارة تسأل عن عباءة مخصرة،
                            وتارة تسأل عن عباءة من نوع آخر، عباءة فرنسية، أو غير ذلك مما يتعجب منه
                            العاقل، ولا ينقضي عجبه.</p>
                        <p style="text-align: justify;">فأقول: إذن هذه الزينة الظاهرة هي ما لا يمكن
                            إخفاؤه، فظاهر العباءة لا يمكن إخفاؤه، وكذلك ما يظهر من أسافل الثياب؛ فإن ذلك
                            قد&nbsp; يظهر من غير قصد، يظهر أسفل الثوب من دون العباءة، وقد يكون ذلك أيضاً
                            بظهور شيء من حذائها الذي تلبسه من غير قصد، ولا يكون ذلك مزيناً ملفتاً، فهذا
                            كله داخل في قوله - تبارك، وتعالى - :&nbsp;<span class="aaya">إِلَّا مَا
                                ظَهَرَ مِنْهَا</span>&nbsp;هذا هو المراد، والله - تبارك، وتعالى - أعلم،
                            وذلك أبعد عن الريبة، والفتنة.</p>
                        <p style="text-align: justify;">ولا يمكن أن يفسر ما ظهر من الزينة بالوجه،
                            والكفين؛ فإن هذا خلاف الظاهر المتبادر؛ لأن الأصل في الزينة في لغة العرب إذا
                            أطلق ذلك فإنه يتوجه في الأصل إلى ما يكون زائداً عن الخِلقة، وكلام الله <span
                                class="arabisque"></span> يحمل على الظاهر المتبادر، ولا يحمل على معنى
                            سواه إلا لدليل يجب الرجوع إليه.</p>
                        <p style="text-align: justify;">إذن فقوله:&nbsp;<span class="aaya">إِلَّا مَا
                                ظَهَرَ مِنْهَا</span>&nbsp;المراد به ما تتزين به المرأة مما هو خارج عن
                            أصل الخِلقة، وليس المراد به بحال من الأحوال ما يذكره بعضهم من الوجه،
                            والكفين؛ فهذا يحتاج إلى قرينة، كما ذكر ذلك بعض أهل العلم كالشيخ محمد الأمين
                            الشنقيطي - رحمه الله - في كتابه &quot;أضواء البيان&quot; واستدل على ذلك
                            باستقراء الشرع، حيث أمر الله - تبارك، وتعالى - بالتباعد عن أسباب الفتنة،
                            ومعلوم أن الوجه، والكفين إنما هما مجمع الحسن، والفتنة، وإلا فما معنى أن يؤذن
                            للخاطب أن ينظر إلى&nbsp;وجه المرأة، وكفيها، فما الفرق بين الخاطب، وغيره؟</p>
                        <p style="text-align: justify;">وقد ذكر أهل العلم كالنووي، وغيره من الفقهاء أن
                            المرأة إذا نظر الخاطب إلى&nbsp;وجهها، وإلى كفيها عرف جميع أنواع الحسن الذي
                            يطلبه الرجال من النساء<sup data-footnote-id="fpe00"><a href="#footnote-2"
                                    id="footnote-marker-2-1" rel="footnote">[2]</a></sup>&nbsp;من الحسن
                            الظاهر، والحسن الباطن الذي تعرفه الخاطبة، أو الذي لا تعرفه، والذي تعرفه
                            المرأة من نفسها، والذي لا تعرفه المرأة من نفسها، في أخفى الأشياء، وأخص
                            الأشياء يعرف ذلك من&nbsp;وجهها، ومن كفيها، وقد ذكروا تفاصيل ذلك، فبنظرة إلى
                            الوجه، والكفين تعرف أخص الأوصاف التي لا تعرفها المرأة نفسها من نفسها، فكيف
                            يقال: إنها تبدي&nbsp;وجهها، وتبدي كفيها؟ فماذا يبقى بعد ذلك؟!.</p>
                        <p style="text-align: justify;">إن الرجل إذا نظر إلى&nbsp;وجهها، وكفيها فكأنما
                            ينظر إلى جميع جسدها ما ظهر منه، وما بطن، والله - تبارك، وتعالى - عليم حكيم.
                        </p>
                        <p style="text-align: justify;">وقد قال الله - تبارك، وتعالى - في شأن أزواج
                            النبي ﷺ :&nbsp;<span class="aaya">وَإِذَا سَأَلْتُمُوهُنَّ مَتَاعًا
                                فَاسْأَلُوهُنَّ مِنْ&nbsp;وَرَاءِ
                                حِجَابٍ</span>&nbsp;[الأحزاب:53]&nbsp;وعلل ذلك بقوله:&nbsp;<span class="aaya">ذَلِكُمْ
                                أَطْهَرُ
                                لِقُلُوبِكُمْ&nbsp;وَقُلُوبِهِنَّ</span>&nbsp;[الأحزاب:53]&nbsp;فهؤلاء
                            أزواج النبي ﷺ وهن أمهات المؤمنين، ويحرم على الرجال أن يتزوجوهن بعد النبي
                            ﷺ&nbsp;<span class="aaya">وَأَزْوَاجُهُ
                                أُمَّهَاتُهُمْ</span>&nbsp;[الأحزاب:6] وأولئك الجيل هم أفضل جيل عرفته
                            البشرية، وأطهر جيل، وأكمل جيل على الإطلاق، ومع ذلك الله يقول في أمهات
                            المؤمنين مخاطباً لذلك الجيل:&nbsp;<span class="aaya">وَإِذَا
                                سَأَلْتُمُوهُنَّ مَتَاعًا فَاسْأَلُوهُنَّ مِنْ&nbsp;وَرَاءِ حِجَابٍ
                                ذَلِكُمْ أَطْهَرُ
                                لِقُلُوبِكُمْ&nbsp;وَقُلُوبِهِنَّ</span>&nbsp;[الأحزاب:53]&nbsp;فإذا كان
                            ذلك في أولئك النسوة، وأولئك الرجال فماذا عسى أن يقال فيمن بعدهن من النساء،
                            وفيمن بعدهم من الرجال، لا سيما في هذا العصر الذي كثرت فيه الفتن، والشرور،
                            والريب، والآثام؟&nbsp;فإذا خوطب أولئك بهذا، وعلل بقوله:&nbsp;<span class="aaya">ذَلِكُمْ
                                أَطْهَرُ
                                لِقُلُوبِكُمْ&nbsp;وَقُلُوبِهِنَّ</span>&nbsp;[الأحزاب:53] فإن هذه العلة
                            تُطلب من باب أولى في غير أزواج النبي ﷺ وفي غير ذلك الجيل الطاهر، فنحن من باب
                            أولى، ولا يمكن لأحد أن يغالط، وأن يكابر، ويقول: أنا قلبي نظيف، أنا قلبي
                            أبيض، فأجتمع مع زوجات إخوتي، وأجتمع مع قريباتي، وبنات عمي، ولكن بنية سليمة؛
                            هذا كذب أصلع، الذي يقول ذلك يغالط نفسه، ويغالط هذه الحقائق.</p>
                        <p style="text-align: justify;">وهكذا أولئك الذين يريدون أن تخرج المرأة فتخالط
                            الرجال في المكتب، أو أن تكون بائعة، فبدلاً من أن يكون ذلك الاختلاط عارضاً
                            حينما تريد، أو تهم بحاجة من حاجاتها تشتريها، فإنهم يريدون أن تكون ثابتة يدخل
                            عليها كل أحد، ويخالطها زميلها في المتجر، أو في المكتب، وقد زعموا أنهم بذلك
                            يحفظون ماء وجوه النساء حينما يشترين حوائجهن الخاصة؛ لئلا ينخدش حياؤهن،
                            فجعلوا امرأة ثابتة يدخل عليها كل رجل، وتخالط الرجل، وتلازمه في هذا المتجر،
                            فهذا خلاف مقصود الشرع.</p>
                        <p style="text-align: justify;">فإذا كان ذلك يُتخوف على أزواج النبي ﷺ&nbsp;وعلى
                            أصحاب رسول الله - عليه الصلاة، والسلام - فإن ما يُتخوف على من بعدهم أشد،
                            وأكثر.</p>
                        <p style="text-align: justify;">وقد ذكر الشيخ تقي الدين ابن تيمية - رحمه الله -
                            أن ما ظهر من الزينة هو الثياب الظاهرة، فهذا لا جناح عليها في إبدائها إذا لم
                            يكن في ذلك محذور آخر<sup data-footnote-id="i89vx"><a href="#footnote-3"
                                    id="footnote-marker-3-1" rel="footnote">[3]</a></sup>.</p>
                        <p style="text-align: justify;">فهذا أمر لا بد من ظهوره، وهذا هو المشهور عن
                            الإمام أحمد - رحمه الله - ومما يدل على هذا المعنى، ويؤكده، ويقويه ما جاء
                            بعده من قوله - تبارك، وتعالى - :&nbsp;<span class="aaya">وَلْيَضْرِبْنَ
                                بِخُمُرِهِنَّ عَلَى جُيُوبِهِنَّ</span>&nbsp;[النور:31]&nbsp;فما هذا
                            الذي أمر الله - تبارك، وتعالى - بالضرب عليه&nbsp;<span class="aaya">يَضْرِبْنَ بِخُمُرِهِنَّ
                                عَلَى جُيُوبِهِنَّ</span>؟ إنه ستر
                            ما بين ذلك.</p>
                        <p style="text-align: justify;">والمقصود من قوله:&nbsp;<span class="aaya">إِلَّا
                                مَا ظَهَرَ مِنْهَا</span>&nbsp;يعني ما لا يمكن إخفاؤه من أسافل الثياب،
                            أو ظاهر العباءة غير المزينة، لا تكون مزركشة، ولا أنيقة، ولا شفافة، ولا ملفتة
                            لأنظار الرجال، وأما ما يروى عن بعض السلف كابن عباس <span class="arabisque"></span> من أن
                            المقصود من قوله:&nbsp;<span class="aaya">إِلَّا مَا ظَهَرَ مِنْهَا</span>&nbsp;أنه الوجه،
                            والكفان<sup data-footnote-id="h3pzg"><a href="#footnote-4" id="footnote-marker-4-1"
                                    rel="footnote">[4]</a></sup>&nbsp;فهذا فيه
                            نظر، والله - تبارك، وتعالى - أعلم؛ إذ أنه يحتمل أنه قصد بالوجه، والكفين ما
                            ذكره الله <span class="arabisque"></span> من قوله:&nbsp;<span class="aaya">وَلا يُبْدِينَ
                                زِينَتَهُنَّ&nbsp;يعني
                                الوجه&nbsp;والكفين&nbsp;إِلَّا مَا ظَهَرَ مِنْهَا</span>&nbsp;فيكون
                            الاستثناء منقطعاً، لكن&nbsp;<span class="aaya">مَا ظَهَرَ
                                مِنْهَا</span>&nbsp;يعني: كأسافل الثياب، وظاهر الثياب، فيكون قوله: يعني
                            الوجه، والكفين، يعني أن ذلك مما نهيت عن إبدائه&nbsp;<span class="aaya">وَلا
                                يُبْدِينَ زِينَتَهُنَّ</span>&nbsp;وليس ذلك لقوله:&nbsp;إِ<span class="aaya">لَّا مَا
                                ظَهَرَ مِنْهَا</span>&nbsp;ومما يدل على هذا أنه
                            فسر آية الأحزاب، وهي قوله - تبارك، وتعالى - :&nbsp;<span class="aaya">يَا
                                أَيُّهَا النَّبِيُّ قُلْ لِأَزْوَاجِكَ&nbsp;وَبَنَاتِكَ وَنِسَاءِ
                                الْمُؤْمِنِينَ يُدْنِينَ عَلَيْهِنَّ مِنْ
                                جَلابِيبِهِنَّ</span>&nbsp;[الأحزاب:59]&nbsp;فسرها ابن عباس - رضي الله
                            عنهما - بقوله: &quot;أمر الله نساء المؤمنين إذا خرجن من بيوتهن في حاجة أن
                            يغطين&nbsp;وجوههن من فوق رؤوسهن بالجلابيب، ويبدين عيناً واحدة&quot;<sup
                                data-footnote-id="4pfbk"><a href="#footnote-5" id="footnote-marker-5-1"
                                    rel="footnote">[5]</a></sup>&nbsp;هذا قول ترجمان القرآن، ويأتي بعضهم
                            على قناة فضائية، ويقول: تغطية الوجه بدعة، لا أصل لها، اخترعها الناس من
                            بيئاتهم، وعاداتهم، وتقاليدهم، فأضافوا ذلك إلى دين الله زوراً، وبهتاناً؛ هذا
                            قول حبر الأمة ابن عباس <span class="arabisque"></span> أن يغطين وجوههن من
                            فوق رؤوسهن بالجلابيب، ويبدين عيناً&nbsp;واحدة، فقارن بين هذا القول لهذا
                            الإمام من أصحاب رسول الله ﷺ وهذا الجبل في التفسير الذي دعا له النبي ﷺ أن
                            يعلمه الله التأويل، وأن يفقهه في الدين<sup data-footnote-id="8vgz3"><a href="#footnote-6"
                                    id="footnote-marker-6-1" rel="footnote">[6]</a></sup>&nbsp;وبين قول بعض المفتونين
                            حيث جعلوا
                            تغطية الوجه بدعة، والمشكلة أن الكثيرين لا بصر لهم بهذه الأمور، فقد يظنون أن
                            ما يقوله القائلون من هؤلاء المضلين أن له أصلاً يعول عليه، ولهذا أحببت أن
                            أذكر في هذا المجلس هذه التفاصيل؛ ليكون ذلك قطعاً لهذه الشبهات، والأهواء،
                            والضلالات التي يُضلَّل بها فئام من الناس في أيامنا هذه.</p>
                        <p style="text-align: justify;">هذا بالإضافة إلى ما ذكرت من أن الوجه، والكفين
                            هما مجمع الحُسن في المرأة.&nbsp;</p>
                        <div>
                            <div id="ftn49">
                                <section class="footnotes">
                                    <ol>
                                        <li data-footnote-id="pxvvu" id="footnote-1"><cite>&nbsp;روي هذا
                                                عن ابن المبارك كما في سنن الترمذي، أبواب العيدين، باب في
                                                خروج النساء في العيدين، برقم (540).</cite></li>
                                        <li data-footnote-id="fpe00" id="footnote-2"><cite>&nbsp;انظر:
                                                شرح النووي على مسلم (9/210).</cite></li>
                                        <li data-footnote-id="i89vx" id="footnote-3"><cite>&nbsp;مجموع
                                                الفتاوى (15/371).</cite></li>
                                        <li data-footnote-id="h3pzg" id="footnote-4"><cite>&nbsp;انظر:
                                                السنن الصغير للبيهقي، برقم (2357)، ومعرفة السنن والآثار،
                                                برقم (4058).</cite></li>
                                        <li data-footnote-id="4pfbk" id="footnote-5"><cite>&nbsp;انظر:
                                                تفسير الطبري (19/ 181)، وتفسير البغوي (6/ 376).</cite>
                                        </li>
                                        <li data-footnote-id="8vgz3" id="footnote-6"><cite>&nbsp;أخرجه
                                                أحمد في المسند، برقم (3032)، وقال محققوه: &quot;إسناده
                                                قوي على شرط مسلم&quot; وصححه الألباني في السلسلة
                                                الصحيحة، برقم (2589).</cite></li>
                                    </ol>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="3">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> وَلْيَضْرِبْنَ بِخُمُرِهِنَّ
                    </a>
                    <div>
                        <p style="text-align: justify;">وقوله - تبارك، وتعالى - :&nbsp;<span
                                class="aaya">وَلْيَضْرِبْنَ</span>&nbsp;التعبير هنا بالضرب&nbsp;<span
                                class="aaya">وَلْيَضْرِبْنَ</span>&nbsp;ما قال: وليضعن خمرهن على جيوبهن،
                            وإنما قال:&nbsp;<span class="aaya">وَلْيَضْرِبْنَ</span>&nbsp;فالتعبير
                            بالضرب مبالغة في الإلقاء، والستر، يعني أنها تبالغ في ذلك، يعني يدنين، ويرخين
                            الجلابيب؛ لئلا يعرفن، ولا يؤذين، من أجل أن يعرفن فلا يؤذين، واللام لام
                            الأمر&nbsp;<span class="aaya">وَلْيَضْرِبْنَ</span>&nbsp;والأمر للوجوب،
                            وليضربن بماذا؟&nbsp;<span class="aaya">بِخُمُرِهِنَّ</span>&nbsp;والخمار هو
                            ما يُخمَّر به - يعني يغطى به - الرأس، والوجه كما في حديث عائشة - رضي الله
                            تعالى عنها - في قصة الإفك لما ذكرت مجيء صفوان بن المعطل <span class="arabisque"></span>
                            قالت: &quot;فخمّرتُ&nbsp;وجهي&quot; لما جاء،
                            وهي نائمة فسمعت استرجاعه، قالت: &quot;فخمرت&nbsp;وجهي بجلبابي، وكان رآني قبل
                            الحجاب&quot;<sup data-footnote-id="qjm9j"><a href="#footnote-1" id="footnote-marker-1-1"
                                    rel="footnote">[1]</a></sup>&nbsp;خمرت
                            وجهي، فالذي يغطى به الوجه يقال له: خمار.</p>
                        <p style="text-align: justify;"><span class="aaya">وَلْيَضْرِبْنَ بِخُمُرِهِنَّ
                                عَلَى جُيُوبِهِنَّ</span>&nbsp;والجيوب: جمع جيب، وهو الشق الذي يخرج منه
                            الرأس في القميص، وذلك أنها تلقي بخمارها، وتسدله، وترخيه على جيبها لستر
                            العنق، والنحر، والصدر، وهذا يؤكد، وجوب ستر الوجه، وتغطيته، وتخميره؛ لأن
                            الخمار إذا كان على الرأس، وسُدل على الجيب ستر الوجه، فدل على أن الخمار يجب
                            أن يستر الرأس، والجيب، وما بينهما، وهو الوجه، فهذا ظاهر كلام الله - تبارك،
                            وتعالى -.</p>
                        <p style="text-align: justify;"><span class="aaya">وَلْيَضْرِبْنَ
                                بِخُمُرِهِنَّ</span>&nbsp;فهذا لكمال الاستتار كما يقول الشيخ عبد الرحمن
                            السعدي - رحمه الله -<sup data-footnote-id="96u34"><a href="#footnote-2"
                                    id="footnote-marker-2-1" rel="footnote">[2]</a></sup>&nbsp;وقاله
                            غيره، ويدل ذلك على أن الزينة التي يحرم إبداؤها يدخل فيها جميع البدن، لا يظهر
                            منها شيء؛ لأن المرأة عورة كما سيأتي.</p>
                        <p style="text-align: justify;">ويدل لذلك أيضاً حديث عائشة - رضي الله تعالى عنها
                            - قالت: &quot;يرحم الله نساء المهاجرات الأُوَل، لما أنزل الله:&nbsp;<span
                                class="aaya">وَلْيَضْرِبْنَ بِخُمُرِهِنَّ عَلَى
                                جُيُوبِهِنَّ</span>&nbsp;شققن مروطهن فاختمرن بها&quot;<sup data-footnote-id="dved4"><a
                                    href="#footnote-3" id="footnote-marker-3-1" rel="footnote">[3]</a></sup>&nbsp;رواه
                            البخاري.</p>
                        <p style="text-align: justify;">&quot;اختمرن بها&quot; يعني: غطين&nbsp;وجوههن،
                            وفي رواية عنها: &quot;إن لنساء قريش لفضلاً، وإني&nbsp;والله ما رأيت أفضل من
                            نساء الأنصار، وأشد تصديقاً بكتاب الله، ولا إيماناً بالتنزيل، لقد أنزلت سورة
                            النور:&nbsp;<span class="aaya">وَلْيَضْرِبْنَ بِخُمُرِهِنَّ عَلَى
                                جُيُوبِهِنَّ</span>&quot;<sup data-footnote-id="w3spo"><a href="#footnote-4"
                                    id="footnote-marker-4-1" rel="footnote">[4]</a></sup>&nbsp;تقول: &quot;لما أنزلت
                            سورة
                            النور:&nbsp;<span class="aaya">وَلْيَضْرِبْنَ بِخُمُرِهِنَّ عَلَى
                                جُيُوبِهِنَّ</span>&nbsp;انقلب إليهن رجالهن يتلون عليهن ما أنزل إليهم
                            فيها&quot;<sup data-footnote-id="74pxo"><a href="#footnote-5" id="footnote-marker-5-1"
                                    rel="footnote">[5]</a></sup>&nbsp;وانظر
                            التسليم الكامل لأولئك الصحابة، والصحابيات <span class="arabisque"></span>
                            &quot;انقلبوا إلى نسائهم&nbsp;يتلون عليهن ما أنزل إليهم فيها، ويتلو الرجل
                            على امرأته، وابنته، وأخته، وعلى كل ذي قرابة، فما منهن امرأة إلا قامت إلى
                            مرطها المرحل فاعتجرت به تصديقاً، وإيماناً بما أنزل الله من كتابه،
                            فأصبحن&nbsp;وراء رسول الله ﷺ معتجرات كأن على رءوسهن الغربان&quot;.</p>
                        <p style="text-align: justify;">&nbsp;&quot;ما منهن امرأة&quot; ما
                            قالت&nbsp;واحدة: هذه حرية شخصية، هذه المسألة فيها خلاف، ما بين نجد إلى
                            الأندلس أطياف، ومدارس في الفقه، فحيث الصحراء يأمرون بتغطية الوجه، وحيث النيل
                            هناك من يرخص بكشف الوجه، هذا يقال في دورات في البرمجة العصبية، فتظن الواحدة
                            حينما تسمع هذا الإفك أنها على شيء؛ هذا قول عائشة - رضي الله عنها - :
                            &quot;ما من امرأة&quot; ولاحظوا كيف قالت: &quot;كأن على رؤوسهن الغربان&quot;
                            وما لون الغراب؟</p>
                        <p style="text-align: justify;">أسود، فدل ذلك على أن لون الحجاب أسود، واليوم
                            يوجد من يقول: ولماذا الأسود؟ لماذا لا تلبس الأزرق، أو الأحمر، أو الأخضر، أو
                            الأبيض؟.</p>
                        <p style="text-align: justify;">نقول: كأن على رؤوسهن الغربان، إذا أتيتم بغراب
                            أحمر، وآخر أخضر قلنا: إن هذا يصدق على جميع هذه الألوان، والأسود هو أبعد
                            الألوان عن الزينة، وعن الفتنة كما هو معلوم.</p>
                        <p style="text-align: justify;">وجاء عن عبيدة السلماني - من أئمة التابعين - قال:
                            &quot;إن نساء المؤمنين كنّ يدنين عليهن الجلابيب من فوق رءوسهن حتى لا يظهر
                            إلا عيونهن؛ لأجل رؤية الطريق&quot;<sup data-footnote-id="bdaup"><a href="#footnote-6"
                                    id="footnote-marker-6-1" rel="footnote">[6]</a></sup>&nbsp;العيون فقط، وليس ما حول
                            العيون
                            بهذه النقابات الفاتنة التي صارت أشد ضرراً على الرجال من كشف الوجه برمّته،
                            فهذا كلامهم.</p>
                        <p style="text-align: justify;">وقوله - تبارك، وتعالى - ثانية بعد أن ذكر الزينة
                            الظاهرة:&nbsp;<span class="aaya">وَلا يُبْدِينَ زِينَتَهُنَّ إِلَّا
                                لِبُعُولَتِهِنَّ</span>&nbsp;[النور:31] إلى آخر ما ذكر، لما ذكر مطلق
                            الزينة ذكر بعد ذلك ما يتعلق بالزينة الخفية التي ينهاهن عن إبدائها للأجانب؛
                            تلك الزينة أمام الأجانب، وهذه زينة أمام النساء، والمحارم، وبين الله أن هذه
                            الزينة الخفية يجب إخفاؤها عن الكل، ثم استثنى صوراً، أو أنواعاً محددة، استثنى
                            اثنتي عشرة صورة، وكرر النهي&nbsp;<span class="aaya">وَلا يُبْدِينَ
                                زِينَتَهُنَّ</span>&nbsp;كرر النهي عن إبداء الزينة ثانية؛ للتوكيد،
                            ونظراً لتنوع الاستثناء، هناك:&nbsp;<span class="aaya">إِلَّا مَا ظَهَرَ
                                مِنْهَا</span>&nbsp;يعني ما لا يمكن إخفاؤه، وهنا:&nbsp;<span class="aaya">إِلَّا مَا
                                ظَهَرَ مِنْهَا</span>&nbsp;ما يظهر عادة في
                            مهنتها، وفي بيتها كما سيأتي.&nbsp;</p>
                        <div>
                            <div id="ftn49">
                                <section class="footnotes">
                                    <ol>
                                        <li data-footnote-id="qjm9j" id="footnote-1"><cite>&nbsp;أخرجه
                                                البخاري، كتاب المغازي، باب حديث الإفك، برقم (4141)،
                                                ومسلم، كتاب التوبة، باب في حديث الإفك وقبول توبة القاذف،
                                                برقم (2770).</cite></li>
                                        <li data-footnote-id="96u34" id="footnote-2"><cite>&nbsp;انظر:
                                                تفسير السعدي (ص: 566).</cite></li>
                                        <li data-footnote-id="dved4" id="footnote-3"><cite>&nbsp;أخرجه
                                                البخاري، كتاب تفسير القرآن، باب&nbsp;<span class="aaya">وَلْيَضْرِبْنَ
                                                    بِخُمُرِهِنَّ عَلَى
                                                    جُيُوبِهِنَّ</span>&nbsp;[النور:31] برقم
                                                (4758).</cite></li>
                                        <li data-footnote-id="w3spo" id="footnote-4"><cite>&nbsp;أخرجه
                                                ابن أبي حاتم في تفسيره (8/ 2575)، برقم (14406)، وضعفه
                                                الألباني في غاية المرام في تخريج أحاديث الحلال والحرام،
                                                برقم (483).</cite></li>
                                        <li data-footnote-id="74pxo" id="footnote-5"><cite>&nbsp;أخرجه
                                                ابن أبي حاتم في تفسيره (8/ 2575)، برقم (14406) وانظر:
                                                تفسير ابن كثير (6/ 46).</cite></li>
                                        <li data-footnote-id="bdaup" id="footnote-6"><cite>&nbsp;انظر:
                                                مجموع الفتاوى، لابن تيمية (15/ 371).</cite></li>
                                    </ol>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="4">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> إِلَّا لِبُعُولَتِهِنَّ
                    </a>
                    <div>
                        <p style="text-align: justify;">فقوله - تبارك، وتعالى - هنا:&nbsp;<span class="aaya">وَلا
                                يُبْدِينَ زِينَتَهُنَّ إِلَّا لِبُعُولَتِهِنَّ أَوْ
                                آبَائِهِنَّ أَوْ آبَاءِ بُعُولَتِهِنَّ أَوْ أَبْنَائِهِنَّ أَوْ
                                أَبْنَاءِ بُعُولَتِهِنَّ أَوْ إِخْوَانِهِنَّ أَوْ بَنِي إِخْوَانِهِنَّ
                                أَوْ بَنِي أَخَوَاتِهِنَّ</span>&nbsp;[النور:31] إلى آخر ما ذكر الله -
                            تبارك، وتعالى - . فالبعولة&nbsp;<span class="aaya">إِلَّا
                                لِبُعُولَتِهِنَّ</span>&nbsp;هم الأزواج، وليس لذلك حد، فإن الرجل يجوز له
                            أن يرى كل شيء من امرأته، كما أنه يجوز له أن يرى كل شيء من مملوكته مما ملكت
                            يمينه، كما يجوز للمرأة أن تنظر إلى كل شيء من جسد زوجها، فليس لذلك حد محدود،
                            ويدل لذلك حديث عائشة - رضي الله تعالى عنها - : &quot;كنت أغتسل أنا، ورسول
                            الله ﷺ من إناء بيني، وبينه - واحد - تختلف أيدينا فيه فيبادرني حتى أقول: دع
                            لي، دع لي&quot; وهما جُنبان<sup data-footnote-id="sbp8e"><a href="#footnote-1"
                                    id="footnote-marker-1-1" rel="footnote">[1]</a></sup>&nbsp;يعني يغتسلان من الجنابة،
                            وهكذا
                            بالنسبة للسيد فإنه يرى من مملوكته كل شيء، والله يقول:&nbsp;<span class="aaya">وَالَّذِينَ
                                هُمْ لِفُرُوجِهِمْ حَافِظُونَ <span class="aya-separator"> ۝ </span> إِلَّا عَلَى
                                أَزْوَاجِهِمْ أوْ مَا
                                مَلَكَتْ أَيْمَانُهُمْ فَإِنَّهُمْ غَيْرُ
                                مَلُومِينَ</span>&nbsp;[المؤمنون:5 - 6]&nbsp;ذكر أولاً الأزواج؛ لأن
                            الزينة، وإبداء الزينة لا يقف عند حد، فتُبدي كل شيء، ولا حرج عليها في ذلك،
                            ولكن ما تبديه للأزواج ليس مساوياً لما تبديه لغيرهم ممن ذكرهم الله <span
                                class="arabisque"></span> من المحارم كالآباء، والأبناء إلى آخر ما ذُكر،
                            فدل على أن هذه المذكورات، أو هؤلاء الذين ذكر الله - تبارك، وتعالى - أنها
                            تبدي لهم زينتها الخفية أنهم أيضاً ليسوا على حد سواء، وهذا أمر في غاية
                            الأهمية، وسيأتي تفصيله - إن شاء الله تعالى - .</p>
                        <div>
                            <div id="ftn49">
                                <section class="footnotes">
                                    <ol>
                                        <li data-footnote-id="sbp8e" id="footnote-1"><cite>&nbsp;أخرجه
                                                مسلم، كتاب الحيض، باب القدر المستحب من الماء في غسل
                                                الجنابة، وغسل الرجل والمرأة في إناء واحد في حالة واحدة،
                                                وغسل أحدهما بفضل الآخر، برقم (321).</cite></li>
                                    </ol>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="5">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> أَوْ آبَائِهِنَّ
                    </a>
                    <div>
                        <p style="text-align: justify;">قال بعد الأزواج:&nbsp;<span class="aaya">أَوْ
                                آبَائِهِنَّ</span>&nbsp;فهذا يشمل الآباء، والأجداد، وإن علوا من جهة
                            الأب، ومن جهة الأم&nbsp;<span class="aaya">أَوْ آبَاءِ
                                بُعُولَتِهِنَّ</span>&nbsp;أو آباء الأزواج، وإن علوا سواء كانوا من
                            الآباء الأدنيْن، يعني الأب المباشر للزوج، أو كانوا من الأجداد من جهة الآباء،
                            أو من جهة الأمهات، وإن علوا، جده لأمه، وجده لأبيه لا تحتجب عنهم.</p>
                        <div>
                            <div id="ftn49">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div id="6">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> أَوْ أَبْنَائِهِنَّ
                    </a>
                    <div>
                        <p style="text-align: justify;"><span class="aaya">أَوْ
                                أَبْنَائِهِنَّ</span>&nbsp;يشمل الأبناء، وأبناء أولادهن، وإن
                            نزلوا&nbsp;<span class="aaya">أَوْ أَبْنَاءِ بُعُولَتِهِنَّ</span>&nbsp;يشمل
                            أولاد الأزواج، وإن نزلوا&nbsp;<span class="aaya">أَوْ
                                إِخْوَانِهِنَّ</span>&nbsp;سواء كانوا أشقاء، أو لأب، أو لأم&nbsp;<span class="aaya">أَوْ
                                بَنِي إِخْوَانِهِنَّ</span>&nbsp;يعني أبناء الإخوان،
                            وأبناء أولاد الإخوان، وإن نزلوا، سواء كانوا إخوة أشقاء، أو لأب، أو
                            لأم،&nbsp;أَوْ بَنِي أَخَوَاتِهِنَّ&nbsp;وذلك كما قيل في بني إخوانهن.</p>
                        <p style="text-align: justify;">فهؤلاء المذكورون كلهم محارم للمرأة يجوز لها
                            إبداء الزينة، وإظهارها لهم، لكن من غير تكلف، ولا تبذل، وقد قال الحافظ ابن
                            كثير - رحمه الله - وهو من الشافعية: &quot;كل هؤلاء محارم، يجوز أن تظهر عليهم
                            بزينتها، ولكن من غير تبرج&quot;<sup data-footnote-id="3fxec"><a href="#footnote-1"
                                    id="footnote-marker-1-1" rel="footnote">[1]</a></sup>.</p>
                        <p style="text-align: justify;">يعني لا تظهر بملابس شفافة، لا تظهر بملابس لاصقة،
                            لا تظهر بملابس تبدي أجزاء من الجسد يجب عليها أن تخفيه كالبطن، والظهر،
                            والصدر، والجنب، وأن تظهر سيقانها، أو أفخاذها، أو نحو ذلك، هذا لا يجوز، لاحظ
                            عبارة الحافظ ابن كثير الشافعي: &quot;ولكن من غير تبرج&quot; وابن كثير - رحمه
                            الله - كان في بلاد الشام، ما كان في صحراء.</p>
                        <div>
                            <div id="ftn49">
                                <section class="footnotes">
                                    <ol>
                                        <li data-footnote-id="3fxec" id="footnote-1"><cite>&nbsp;تفسير
                                                ابن كثير (6/ 47).</cite></li>
                                    </ol>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="7">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> ليس بين الزوجين عورة
                    </a>
                    <div>
                        <p style="text-align: justify;">الزينة تتفاوت، فكما ذكرنا أن الأزواج تبدي لهم كل
                            شيء، ليس بين الزوجين عورة&nbsp;<span class="aaya">هُنَّ لِبَاسٌ
                                لَكُمْ&nbsp;وَأَنْتُمْ لِبَاسٌ
                                لَهُنَّ</span>&nbsp;[البقرة:187]&nbsp;وأما المحارم فيختلفون في درجة
                            المحرمية، فالأب مثلاً، والابن، والأخ أقوى محرمية من ابن الزوج، وأبيه، وجده،
                            ولهذا قال القرطبي - رحمه الله - المالكي: &quot;وتختلف مراتب ما يُبدَى لهم،
                            فيبدى للأب ما لا يجوز إبداؤه لولد الزوج&quot;<sup data-footnote-id="fr3yp"><a
                                    href="#footnote-1" id="footnote-marker-1-1" rel="footnote">[1]</a></sup>&nbsp;هذا
                            كلام القرطبي.</p>
                        <div>
                            <div id="ftn49">
                                <section class="footnotes">
                                    <ol>
                                        <li data-footnote-id="fr3yp" id="footnote-1"><cite>&nbsp;تفسير
                                                القرطبي (12/ 232).</cite></li>
                                    </ol>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="8">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> هل تحتجب المرأة من العم والخال؟
                    </a>
                    <div>
                        <p style="text-align: justify;">ثم أيضاً نلاحظ في هذه الآية أن الله لم يذكر
                            العم، والخال في جملة المحارم، بعض السلف قال: إنها تحتجب منهم، وإن ذلك بسبب
                            أن الواحد منهم يصفها لولده، وهذا&nbsp;وإن قال به بعض السلف إلا أنه غير صحيح،
                            ولكني ذكرته لأبين أن من السلف من قال أقوالاً شدد فيها في هذا الباب، لربما لم
                            تطرق كثيراً من الأسماع، ثم يوصم من قال أقوالاً في غاية الاعتدال أنه قد تشدد،
                            وضيق ما&nbsp;وسعه الله <span class="arabisque"></span> بعض السلف يقول: لا
                            تبدي ذلك للخال، والعم، فهذا في الواقع غير صحيح؛ فهو قول ضعيف، ولكن ذكرته
                            لهذا المعنى، ولكن يجوز أن تبدي للعم، والخال ما تبديه لمحارمها، ويدل على ذلك
                            حديث عائشة - رضي الله عنها - قالت: &quot;جاء عمي من الرضاعة فاستأذن عليّ
                            فأبيت أن آذن له حتى أسأل رسول الله ﷺ فجاء رسول الله ﷺ فسألته عن ذلك،
                            فقال:&nbsp;<span class="hadith">إنه عمك فأذني له</span>&nbsp;قالت: فقلت: يا
                            رسول الله، وإنما أرضعتني المرأة، ولم يرضعني الرجل، فقال رسول الله ﷺ
                            :&nbsp;<span class="hadith">إنه عمك فليلج عليك</span><sup data-footnote-id="k5f47"><a
                                    href="#footnote-1" id="footnote-marker-1-1" rel="footnote">[1]</a></sup>&nbsp;وهكذا
                            أيضاً يمكن أن يكون عدم ذكر
                            العم، والخال باعتبار أنه ذَكَر المساوي في البعد عن المرأة، وهو ابن الأخ،
                            وابن الأخت، فابن الأخ هي عمته، وابن الأخت هي خالته، فهذا من جهة الأدنى ابن
                            الأخ، وابن الأخت، فمن جهة الأعلى الدرجة في البعد مساوية، فاكتفى بذكر هؤلاء
                            عن أولئك؛ ليدل على الجواز، وهكذا أيضاً فإن العم بمنزلة الأب، وقد قال النبي ﷺ
                            لعمر <span class="arabisque"></span>:&nbsp;<span class="hadith">أما علمت أن
                                عم الرجل صنو أبيه</span><sup data-footnote-id="o1w6m"><a href="#footnote-2"
                                    id="footnote-marker-2-1" rel="footnote">[2]</a></sup>&nbsp;وقد قال الله <span
                                class="arabisque"></span> في القرآن لما ذكر قيل يعقوب ﷺ :&nbsp;<span class="aaya">أَمْ
                                كُنتُمْ شُهَدَاءَ إِذْ حَضَرَ يَعْقُوبَ الْمَوْتُ إِذْ
                                قَالَ لِبَنِيهِ مَا تَعْبُدُونَ مِنْ بَعْدِي قَالُوا نَعْبُدُ
                                إِلَهَكَ&nbsp;وَإِلَهَ آبَائِكَ
                                إِبْرَاهِيمَ&nbsp;وَإِسْمَاعِيلَ&nbsp;وَإِسْحَاقَ
                                إِلَهًا&nbsp;وَاحِدًا&nbsp;وَنَحْنُ لَهُ
                                مُسْلِمُونَ</span>&nbsp;[البقرة:133]&nbsp;إسماعيل عم يعقوب، فسماه أباً،
                            فالعم بمنزلة الأب.&nbsp;</p>
                        <div>
                            <div id="ftn49">
                                <section class="footnotes">
                                    <ol>
                                        <li data-footnote-id="k5f47" id="footnote-1"><cite>&nbsp;أخرجه
                                                البخاري، كتاب النكاح، باب ما يحل من الدخول والنظر إلى
                                                النساء في الرضاع، برقم (5239)، ومسلم، كتاب الرضاع، باب
                                                تحريم الرضاعة من ماء الفحل، برقم (1445).</cite></li>
                                        <li data-footnote-id="o1w6m" id="footnote-2"><cite>&nbsp;أخرجه
                                                مسلم، كتاب الزكاة، باب في تقديم الزكاة ومنعها، برقم
                                                (983).</cite></li>
                                    </ol>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="9">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> أَوْ نِسَائِهِنَّ
                    </a>
                    <div>
                        <p style="text-align: justify;">ثم قال الله - تبارك، وتعالى - :&nbsp;<span class="aaya">أَوْ
                                نِسَائِهِنَّ أَوْ مَا مَلَكَتْ
                                أَيْمَانُهُنَّ&nbsp;الآن النساء&nbsp;أَوْ نِسَائِهِنَّ</span>&nbsp;ما
                            المراد؟</p>
                        <p style="text-align: justify;">بعض أهل العلم فهم من هذه الإضافة مزيد اختصاص،
                            فقالوا: ليس كل النساء تبدي أمامها الزينة التي تبديها أمام المحارم، إذاً من
                            المراد؟ قالوا: المسلمات فقط، وهذا قال به عمر <span class="arabisque"></span> وابن عباس،
                            ومجاهد، ومكحول، وابن جريج، وعبادة
                            بن نسي، واختاره جمع من المفسرين كابن عطية، والقرطبي، وابن كثير، ولهذا قالوا
                            بأن عورة المسلمة أمام الكافرة كالرجل الأجنبي، وهذا نص عليه الحنفية،
                            والمالكية، وهو قول للشافعي، ورواية عند الحنابلة، وسئل الإمام أحمد - رحمه
                            الله - عن المرأة الكافرة هل تبدي المسلمة شعرها عندها؟</p>
                        <p style="text-align: justify;">فقال: لا، وقد صحح ذلك عن الشافعية في مذهبهم:
                            البغوي، والنووي، بل اختار ذلك النووي، ورجحه أنها تكون أمام الأجنبية كما تكون
                            أمام الرجل، والقول الآخر للشافعي، وأبي حنيفة أنها تكون كالمرأة المسلمة،
                            وتوسط شيخ الإسلام ابن تيمية - رحمه الله - في هذا الباب - يعني المرأة المسلمة
                            أمام المرأة الأجنبية - فقال: &quot;تبدي الوجه، والكفين أمام الكافرة، ولا
                            تبدي ما&nbsp;وراء ذلك من الشعر، والنحر، وما إلى ذلك&quot;<sup data-footnote-id="x7t01"><a
                                    href="#footnote-1" id="footnote-marker-1-1" rel="footnote">[1]</a></sup>.</p>
                        <p style="text-align: justify;">والذي يظهر - والله أعلم - أن المرأة المسلمة تكون
                            أمام الكافرات كما تكون أمام المسلمات، وإنما ذكرت هذه الأقوال لهؤلاء الأئمة
                            من أجل أن يعرف الناس كلام أهل العلم في هذه القضايا، وأنهم قد أكدوا، ووثقوا،
                            وشددوا فيها، واحترزوا فيها غاية الاحتراز، واليوم يقال عمن يقول بأنه يجب على
                            المرأة أن تغطي أفخاذها، وسيقانها، وصدرها، وظهرها، وبطنها، وأن لا تلبس الضيق،
                            أو الشفاف، أو تتبذل أمام النساء يقال: هذا تشدد، يقولون: إن عورة المرأة أمام
                            المرأة من السرة إلى الركبة، بمعنى أنها يمكن أن تخرج بسراويل قصيرة من السرة
                            إلى الركبة، أو تنورة من السرة إلى الركبة، وتبدي ما عدا ذلك، ولا أعلم أحداً
                            من أهل العلم قاطبة يقول بأنها يمكن أن تفصل ثياباً بهذه الطريقة، وتخرج أمام
                            النساء، أبداً، ولكنهم يتكلمون عن شيء آخر كما سيأتي إيضاحه.</p>
                        <div>
                            <div id="ftn49">
                                <section class="footnotes">
                                    <ol>
                                        <li data-footnote-id="x7t01" id="footnote-1"><cite>&nbsp;انظر:
                                                مجموع الفتاوى (15/ 415).</cite></li>
                                    </ol>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="10">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> أَوْ مَا مَلَكَتْ أَيْمَانُهُنَّ
                    </a>
                    <div>
                        <p style="text-align: justify;">قال الله تعالى:&nbsp;<span class="aaya">أَوْ مَا
                                مَلَكَتْ أَيْمَانُهُنَّ</span>&nbsp;يعني من الرقيق من الرجال، والنساء،
                            فيجوز لهن إظهار زينتهن أمامهم، كما يظهرنها لمحارمهن، ونسائهن، وعلى هذا دلت
                            السنة كما في حديث أنس <span class="arabisque"></span> أن النبي ﷺ أتى فاطمة
                            بعبد قد&nbsp;وهبه لها، قال: وعلى فاطمةَ - رضي الله عنها - ثوب إذا قنعت به
                            رأسها لم يبلغ رجليها، وإذا غطت به رجليها لم يبلغ رأسها، فلما رأى النبي ﷺ ما
                            تلقى قال:&nbsp;<span class="hadith">إنه ليس عليكِ بأس، إنما هو أبوك،
                                وغلامك</span><sup data-footnote-id="pnph5"><a href="#footnote-1"
                                    id="footnote-marker-1-1" rel="footnote">[1]</a></sup>&nbsp;يعني ليس
                            عليكِ أن تحتجبي منه، وكذلك حديث أم سلمة - رضي الله عنها - أن النبي ﷺ
                            قال:&nbsp;<span class="hadith">إذا كان لإحداكن مُكاتب</span><sup data-footnote-id="oold3"><a
                                    href="#footnote-2" id="footnote-marker-2-1" rel="footnote">[2]</a></sup>&nbsp;وهو
                            العبد الذي حصل العقد معه على
                            أن يدفع قدراً معيناً من المال على أقساط، ثم يكون حرًّا، قال:&nbsp;<span class="hadith">إذا
                                كان لإحداكن مكاتب، وكان له ما يؤدي فلتحتجب
                                منه</span>&nbsp;معنى ذلك أنه إن لم يكن كذلك فإنها لا تحتجب منه، وهذا
                            الذي عليه عامة أهل العلم.</p>
                        <p style="text-align: justify;">وبعضهم قال - أعني القائلين بأنها لا يجوز أن تبدي
                            زينتها أمام النساء الكافرات بل عليها أن تحتجب - : إن قوله:&nbsp;<span class="aaya">أَوْ مَا
                                مَلَكَتْ أَيْمَانُهُنَّ</span>&nbsp;يعني النساء
                            المملوكات لهن من الكافرات، يعني يستثنى من نساء الكافرات ما كان بملك اليمين،
                            ما كان مملوكاً لها من النساء الكافرات، فإنها تكون أمامهن كما تكون أمام
                            المحارم، فيكون المعنى&nbsp;<span class="aaya">أَوْ
                                نِسَائِهِنَّ</span>&nbsp;من الحرائر&nbsp;<span class="aaya">أَوْ مَا
                                مَلَكَتْ أَيْمَانُهُنَّ</span>&nbsp;من الإماء، هذا الذي قاله هؤلاء
                            كالقرطبي - رحمه الله - وغيره، ولكن الراجح - والله تعالى أعلم - أنها تكون
                            أمام الكافرات كما تكون أمام المسلمات، وأن قوله:&nbsp;<span class="aaya">أَوْ
                                مَا مَلَكَتْ أَيْمَانُهُنَّ</span>&nbsp;يعني الرجال المماليك، إذا كانوا
                            ملكاً لها.</p>
                        <div>
                            <div id="ftn49">
                                <section class="footnotes">
                                    <ol>
                                        <li data-footnote-id="pnph5" id="footnote-1"><cite>&nbsp;أخرجه
                                                أبو داود، كتاب اللباس، باب في العبد ينظر إلى شعر مولاته،
                                                برقم (4106)، وصححه الألباني في إرواء الغليل في تخريج
                                                أحاديث منار السبيل، برقم (1799).</cite></li>
                                        <li data-footnote-id="oold3" id="footnote-2"><cite>&nbsp;أخرجه
                                                أبو داود، كتاب العتق، باب في المكاتب يؤدي بعض كتابته
                                                فيعجز أو يموت، برقم (3928)، وابن ماجه، أبواب العتق، باب
                                                المكاتب، برقم (2520)، وأحمد في المسند، برقم (2673)،
                                                وضعفه الألباني في ضعيف الجامع، برقم (650).</cite></li>
                                    </ol>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="11">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> أَوِ التَّابِعِينَ غَيْرِ أُوْلِي الإِرْبَةِ مِنَ
                        الرِّجَالِ
                    </a>
                    <div>
                        <p style="text-align: justify;">قال الله تعالى بعد ذلك:<span class="aaya">&nbsp;أَوِ
                                التَّابِعِينَ غَيْرِ أُوْلِي الإِرْبَةِ مِنَ
                                الرِّجَالِ</span>&nbsp;قيده بقيدين: قال:&nbsp;<span class="aaya">أَوِ
                                التَّابِعِينَ</span>&nbsp;يعني الذي يتبع الناس في بيوتهم من البُله،
                            وخفاف العقول، من التابعين، يتبع الناس يأكل عندهم، إنسان ضعيف، إنسان
                            مسكين&nbsp;<span class="aaya">غَيْرِ أُوْلِي الإِرْبَةِ</span>&nbsp;يعني
                            الذين لا يتفطنون لمحاسن النساء، فهؤلاء يجوز لها أن تظهر أمامهم كما تظهر أمام
                            المحارم.</p>
                        <p style="text-align: justify;">والإربة هي الحاجة، يعني الحاجة إلى النساء، ومنه
                            قول عائشة - رضي الله عنها - : &quot;كان النبي ﷺ يقبّل، ويباشر، وهو صائم،
                            وكان أملككم لإربه&quot;<sup data-footnote-id="se4ly"><a href="#footnote-1"
                                    id="footnote-marker-1-1" rel="footnote">[1]</a></sup>&nbsp;وفي
                            رواية: &quot;فأيكم يملك إربه كما كان النبي ﷺ يملك إربه؟&quot;<sup
                                data-footnote-id="xfmyb"><a href="#footnote-2" id="footnote-marker-2-1"
                                    rel="footnote">[2]</a></sup>.</p>
                        <p style="text-align: justify;"><span class="aaya">غَيْرِ أُوْلِي الإِرْبَةِ
                                مِنَ الرِّجَالِ</span>&nbsp;يعني البالغين، بمعنى أن هذا يكون تابعاً
                            للناس، ويكون لا حاجة له بالنساء، ليس له شهوة، وهناك قيد ثالث يفهم من السنة،
                            ويفهم أيضاً من مقاصد الشريعة في هذا الباب - وهو أن يكون هذا الرجل من غير
                            أولي الإربة - ألا يكون أيضاً ممن يتفطن لمحاسن النساء، ولو لم يكن له شهوة،
                            يدل على ذلك حديث أم سلمة - رضي الله عنها - : &quot;أن النبي ﷺ دخل عليها،
                            وعندها مخنث&quot; يعني أشبه بالمرأة في حركاته، ومشيته، وكلامه، وضعفه،
                            ورخاوته&nbsp;&quot;فكان يقول لعبد الله&quot; يعني لأخي أم سلمة - رضي الله
                            عنها - يقول: &quot;يا عبد الله ابن أبي أمية، إن فتح الله عليكم الطائف غداً
                            فعليك بابنة غيلان، فإنها تقبل بأربع، وتدبر بثمان&quot;<sup data-footnote-id="lsyjp"><a
                                    href="#footnote-3" id="footnote-marker-3-1" rel="footnote">[3]</a></sup>&nbsp;هذا
                            يتفطن لمحاسن النساء، ويتحدث
                            عنها أنها بدينة، وكان ذلك من الأوصاف المطلوبة عند العرب الأولين.</p>
                        <p style="text-align: justify;">&quot;تقبل بأربع، وتدبر بثمان&quot; مسافط في
                            البطن، تظهر إذا كانت مقبلة أربعة مسافط من اليمين، واليسار المجموع أربعة،
                            وإذا أدبرت تظهر ثمان&nbsp;&quot;تقبل بأربع، وتدبر بثمان&quot; عبارة دقيقة
                            بليغة معبرة، فقال النبي ﷺ لأم سلمة:&nbsp;<span class="hadith">لا يدخل عليك
                                هذا</span>&nbsp;وفي بعض رواياته ذكر ﷺ أمراً، وهو أن هذا يتفطن لهذه
                            الأمور، فنهى عن دخوله على نسائه، إذن هذا الذي يكون من غير أولي الإربة يشترط
                            ألا يكون له شهوة، ويشترط ألا يتفطن، فبعض الناس قد تنطفئ شهوته لسبب، أو لآخر،
                            لعملية جراحية، لمرض، لكبر السن، ولكن لا يزال ذهنه، وقلبه حاضرًا لمثل هذه
                            الأمور فيتفطن، ويتمنى، وإن كان لا يستطيع المعاشرة، فمثل هذا يحتجب منه، ولهذا
                            فإن بعض كبار السن قد لا يكون عنده شيء من الهمة، ولكنه يكون حديد النظر في مثل
                            هذه الأمور.&nbsp;</p>
                        <div>
                            <div id="ftn49">
                                <section class="footnotes">
                                    <ol>
                                        <li data-footnote-id="se4ly" id="footnote-1"><cite>&nbsp;أخرجه
                                                البخاري، كتاب الصوم، باب المباشرة للصائم، برقم (1927)،
                                                ومسلم، كتاب الصيام، باب بيان أن القبلة في الصوم ليست
                                                محرمة على من لم تحرك شهوته، برقم (1106).</cite></li>
                                        <li data-footnote-id="xfmyb" id="footnote-2"><cite>&nbsp;أخرجه
                                                البخاري، كتاب الحيض، باب مباشرة الحائض، برقم (302)،
                                                ومسلم، كتاب الحيض، باب مباشرة الحائض فوق الإزار، برقم
                                                (293).</cite></li>
                                        <li data-footnote-id="lsyjp" id="footnote-3"><cite>&nbsp;أخرجه
                                                البخاري، كتاب النكاح، باب ما ينهى من دخول المتشبهين
                                                بالنساء على المرأة، برقم (5235)، ومسلم، كتاب السلام، باب
                                                منع المخنث من الدخول على النساء الأجانب، برقم
                                                (2180).</cite></li>
                                    </ol>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="12">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> أَوِ الطِّفْلِ الَّذِينَ لَمْ يَظْهَرُوا عَلَى
                        عَوْرَاتِ النِّسَاءِ
                    </a>
                    <div>
                        <p style="text-align: justify;">قال الله تعالى بعد ذلك:&nbsp;<span class="aaya">أَوِ الطِّفْلِ
                                الَّذِينَ لَمْ يَظْهَرُوا عَلَى عَوْرَاتِ
                                النِّسَاءِ</span>&nbsp;أَوِ الطِّفْلِ&nbsp;يعني الأطفال&nbsp;<span class="aaya">لَمْ
                                يَظْهَرُوا عَلَى عَوْرَاتِ
                                النِّسَاءِ</span>&nbsp;الظهور يحتمل معنيين: الظهور بمعنى الغلبة، ففسره
                            بعضهم بأنهم لم يطيقوا الجماع لصغرهم&nbsp;<span class="aaya">لَمْ
                                يَظْهَرُوا&nbsp;فَأَيَّدْنَا الَّذِينَ آَمَنُوا عَلَى عَدُوِّهِمْ
                                فَأَصْبَحُوا ظَاهِرِينَ</span>&nbsp;[الصف:14] يعني غالبين، فيكون بمعنى
                            الإطاقة، والغلبة، والقدرة، هذا قاله بعض أهل العلم؛ قالوا: فمتى كان مطيقاً
                            فإنه يحتجب منه.</p>
                        <p style="text-align: justify;">والمعنى الآخر، وهو الأقرب - والله تعالى أعلم - :
                            وذلك بمعنى العلم&nbsp;<span class="aaya">إِنَّهُمْ إِنْ يَظْهَرُوا
                                عَلَيْكُمْ يَرْجُمُوكُمْ أَوْ يُعِيدُوكُمْ فِي
                                مِلَّتِهِمْ</span>&nbsp;[الكهف:20] يظهروا عليكم: يطلعوا، بعضهم قال: لم
                            يطلعوا، لم يكشفوا عن عورات النساء لجماعهن، فسره بالاطلاع، والعلم، وهذا فيه
                            بُعد&nbsp;- والله أعلم - وإنما المعنى الأقرب: &quot;لم يظهروا على عورات
                            النساء&quot; بمعنى أنهم لم يتفطنوا، لا علم لهم، ولا بصر، ولا فطنة لهذه
                            الأمور.</p>
                        <p style="text-align: justify;"><span class="aaya">لَمْ يَظْهَرُوا عَلَى
                                عَوْرَاتِ النِّسَاءِ</span>&nbsp;والعورة في الأصل هي كل ما يُستحيا من
                            إظهاره، ويسوء الإنسان إطلاع الآخرين عليه.</p>
                        <p style="text-align: justify;"><span class="aaya">أَوِ
                                الطِّفْلِ</span>&nbsp;الأطفال غير البالغين، هذا قيد&nbsp;<span class="aaya">الَّذِينَ
                                لَمْ يَظْهَرُوا عَلَى
                                عَوْرَاتِالنِّسَاءِ</span>&nbsp;بعض أهل العلم نظر إلى أن التمييز يميز
                            فيه الطفل العورة، ومن&nbsp;ثم قالوا: إن الطفل المميز لا تبدو المرأة أمامه
                            بزينتها، بل تحتجب منه إن كان أجنبياً، لماذا؟</p>
                        <p style="text-align: justify;">قالوا: لأن التمييز يدرك فيه الصغير العورة من غير
                            العورة فتحتجب منه، وهذا التمييز بعضهم قيده، وربطه بالمظنة، قالوا: مظنة
                            التمييز سن معين هو السابعة، فقالوا: التمييز السابعة، وبعضهم ضبطه بضابط معين،
                            كقول بعضهم: هو الذي يفهم الخطاب، ويرد الجواب، وعلى هذا فقد يكون مميزاً، وله
                            أربع سنين، أو خمس، أو ست، لم يبلغ السابعة بعد؛ فهؤلاء قالوا: إن كان مميزاً
                            فإنها تحتجب منه، والشيخ عبد الرحمن بن سعدي - رحمه الله - يقول: &quot;<span class="aaya">أَوِ
                                الطِّفْلِ</span>&nbsp;يعني الأطفال دون التمييز، يقول:
                            دل على أن المميز يستتر عنه؛ لأنه يظهر على عورات النساء&quot;<sup data-footnote-id="5oxxh"><a
                                    href="#footnote-1" id="footnote-marker-1-1" rel="footnote">[1]</a></sup>.</p>
                        <p style="text-align: justify;">والذي أظنه أقرب - والله تعالى أعلم - أن يقال في
                            الصغير بأن المقصود بذلك العلة المذكورة في الآية&nbsp;<span class="aaya">لَمْ
                                يَظْهَرُوا عَلَى عَوْرَاتِ النِّسَاءِ</span>&nbsp;فمتى كان الصغير يتفطن
                            لمفاتن النساء فإنه يحتجب منه، وإذا كان الطفل لا يلتفت إلى ذلك، ولا يتفطن له
                            فإنه لا يحتجب منه، والمسألة أيضاً ليست مربوطة كما يظن الكثير من العامة
                            بالبلوغ، ويتساهل الكثيرون فيدخل عليها المراهق، وتقول: ما بلغ، يدخلونهم على
                            النساء، ويقولون: ما بلغ، لاسيما في مثل هذه الأيام، وهي كثرة الشر، فصار الطفل
                            لربما في الابتدائي يطلع عن طريق بعض زملائه، وقرناء السوء على شريحة صغيرة يرى
                            فيها أشياء لا يعرفها أبوه، ولا تعرفها أمه، يطلع على كل شيء، فإذا رأى امرأة
                            تراءى له ذلك، مثل هذا يحتجب منه، فالله هنا قيد بهذا القيد:&nbsp;<span class="aaya">أَوِ
                                الطِّفْلِ الَّذِينَ لَمْ يَظْهَرُوا عَلَى عَوْرَاتِ
                                النِّسَاءِ</span>&nbsp;وبهذا فسره الحافظ ابن كثير - رحمه الله: لا
                            يتفطنون لمفاتن النساء لصغرهم<sup data-footnote-id="tfxvk"><a href="#footnote-2"
                                    id="footnote-marker-2-1" rel="footnote">[2]</a></sup>&nbsp;فهم لا يفهمون أحوال
                            النساء،
                            وعوراتهن من كلامهن الرخيم، وتعطفهن في المشية، وحركاتهن، وسكناتهن فلا بأس في
                            مثل هذا أن يدخل على النساء؛ لأنه لا يفرق بين الحسناء، والشوهاء، ولا يفرق في
                            قضايا الفتنة في الجسد، واللباس، وغير ذلك.</p>
                        <div>
                            <div id="ftn49">
                                <section class="footnotes">
                                    <ol>
                                        <li data-footnote-id="5oxxh" id="footnote-1"><cite>&nbsp;تفسير
                                                السعدي (ص: 567).</cite></li>
                                        <li data-footnote-id="tfxvk" id="footnote-2"><cite>انظر: تفسير
                                                ابن كثير (6/ 49).</cite></li>
                                    </ol>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="13">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> وَلا يَضْرِبْنَ بِأَرْجُلِهِنَّ
                    </a>
                    <div>
                        <p style="text-align: justify;">فهذه المرأة الآن استترت، واحتشمت، وظهرت من بيتها
                            بعباءة تستر جميع الجسد، لبست القفازات، ولبست الجوارب، ولم يظهر منها شيء
                            أبداً، ولكنها قد تظهر بعض الزينة الخفية بطريقة أخرى، فقال الله - تبارك،
                            وتعالى - :&nbsp;<span class="aaya">وَلا يَضْرِبْنَ بِأَرْجُلِهِنَّ
                                لِيُعْلَمَ مَا يُخْفِينَ مِنْ زِينَتِهِنَّ</span>&nbsp;هذا الخلخال خفي،
                            لا تراه العين، ولكنها قد تضرب برجلها، وهي تمشي فتتراقص القلوب المريضة مع هذه
                            المشية التي يظهر فيها صوت الخلخال، فنهاها الله <span class="arabisque"></span> عن ذلك، ومن
                            ثمّ فإن النفوس قد تتحرك بالنظر
                            إلى المفاتن، والتبرج، والسفور، والعري، وقد تتحرك النفوس بالصوت الذي تسمعه من
                            الحلي الذي تتعمد المرأة إظهاره، ومن، ثم ندرك حكمة الشارع في هذا الباب، وأنه
                            قصد قطع الطريق، طريق الشر، والفتنة، وسد هذا الباب، فأمر بستر الزينة، ومحاسن
                            الجسد، والثياب، ومن ثمّ فإنه يجب عليها حتى أمام المحارم أن تلبس ثياباً ساترة
                            فلا تخرج بثياب رقيقة، أو شفافة، وغير المحارم لا تخرج أمامهم بعباءة شفافة، أو
                            ضيقة تبين حجم عظامها، ولا تخرج عند المحارم بملابس ضيقة تحدد حجم الأعضاء،
                            تحجم صدرها، أو تحجم خصرها، أو غير ذلك، ولا تلبس بنطالاً؛ لأن ذلك يحجمها، بل
                            إنه ليس من لباس النساء، وإنما هو من لباس الرجال فهي مترجلة، وهكذا لا تبدي في
                            ثياب تفصلها تبدي أعضادها، وذراعيها، وتبدي سيقانها، وما إلى ذلك، ولكن ذلك قد
                            يظهر في مهنتها، أو حينما تتوضأ فتحسر عن ثيابها فهذا لا إشكال فيه، وهكذا فإن
                            بعض النفوس قد تتحرك، وتتشوف للحرام بحال الشم، ولهذا نهيت المرأة إذا خرجت أن
                            تتعطر، فكما أن الضرب بالرجل ليسمع صوت الخلخال يفتن القلوب فكذلك الروائح، وقد
                            جاء في حديث أبي موسى <span class="arabisque"></span> أن النبي ﷺ
                            قال:&nbsp;<span class="hadith">كل عين زانية، والمرأة إذا استعطرت فمرت في
                                المجلس فهي كذا، وكذا</span>&nbsp;يعني زانية<sup data-footnote-id="sxx8z"><a
                                    href="#footnote-1" id="footnote-marker-1-1" rel="footnote">[1]</a></sup>.</p>
                        <p style="text-align: justify;">وفي حديث أبي هريرة <span class="arabisque"></span> أنه لقيته
                            امرأة&nbsp;وجد منها ريح الطيب،
                            ولذيلها إعصار، يعني عليها عباءة طويلة قد أثارت الغبار، فقال: &quot;يا أمة
                            الجبار، جئتِ من المسجد؟ قالت: نعم، قال لها: وله تطيبتِ، قالت: نعم، قال: إني
                            سمعت رسول الله ﷺ يقول:&nbsp;<span class="hadith">لا تقبل صلاة لامرأة تطيبت
                                لهذا المسجد، حتى ترجع فتغتسل غسلها من الجنابة</span><sup data-footnote-id="7hhxp"><a
                                    href="#footnote-2" id="footnote-marker-2-1" rel="footnote">[2]</a></sup>&nbsp;وقد
                            صححه الشيخ ناصر الدين
                            الألباني.</p>
                        <div>
                            <div id="ftn49">
                                <section class="footnotes">
                                    <ol>
                                        <li data-footnote-id="sxx8z" id="footnote-1"><cite>&nbsp;أخرجه
                                                الترمذي، أبواب الأدب عن رسول الله ﷺ باب ما جاء في كراهية
                                                خروج المرأة متعطرة، برقم (2786)، وصححه الألباني في صحيح
                                                الجامع، برقم (4540).</cite></li>
                                        <li data-footnote-id="7hhxp" id="footnote-2"><cite>&nbsp;أخرجه
                                                أبو داود، كتاب الترجل، باب ما جاء في المرأة تتطيب
                                                للخروج، برقم (4174)، وأحمد في المسند، برقم (9938)، وابن
                                                ماجه، أبواب الفتن، باب فتنة النساء، برقم (4002)، والبزار
                                                في مسنده، برقم (8255)، وعبد الرزاق الصنعاني في المصنف،
                                                برقم (8109)، وذكره الشيخ الألباني في الثمر المستطاب في
                                                فقه السنة والكتاب (2/ 734)، وقال: &quot;وهذا سند
                                                ضعيف&quot;.</cite></li>
                                    </ol>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="14">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> المرأة عورة
                    </a>
                    <div>
                        <p style="text-align: justify;">وهكذا جاءت هذه التشريعات صوناً للأعراض، وحفظاً
                            للشرف، والعفاف، والفضيلة، وتحصيناً للمجتمع، فأمر الله <span class="arabisque"></span>
                            بالاحتراز للمرأة؛ لأنها عورة، كما قال النبي ﷺ
                            :&nbsp;<span class="hadith">المرأة عورة، فإذا خرجت استشرفها
                                الشيطان</span><sup data-footnote-id="i7iov"><a href="#footnote-1"
                                    id="footnote-marker-1-1" rel="footnote">[1]</a></sup>&nbsp;والعورة
                            هي كل ما يُستحيا منه إذا ظهر، وفي الحديث:&nbsp;<span class="hadith">المرأة
                                عورة</span>&nbsp;فجعلها في نفسها عورة، فالعورة تطلق على كل مكمن للستر،
                            يعني هذا أمر لا يعيب المرأة، وليس نقيصة في حقها، بل كل أمر يحترز إليه،
                            ويتحفظ له، ويحتاط له فإنه يقال له: عورة.</p>
                        <p style="text-align: justify;">وهذه العورة أنواع، وهذا في غاية الأهمية؛ لأنه
                            يكثر الخلط في هذا الباب، العورة أنواع:</p>
                        <p style="text-align: justify;">هناك عورة في الصلاة، وهي على ثلاثة أنواع أيضاً:
                            عورة مخففة، وعورة مغلظة، وعورة متوسطة، ولكلٍّ أحكام، هذه في الصلاة، وعورة في
                            حكم النظر من قبل الأجنبي، أو المحرم، أو النساء، أو المملوك، أو الطفل، ولكلٍّ
                            حكم.</p>
                        <p style="text-align: justify;">والمقصود بستر العورة في الصلاة أخذ
                            الزينة&nbsp;<span class="aaya">خُذُوا زِينَتَكُمْ عِنْدَ كُلِّ
                                مَسْجِدٍ</span>&nbsp;[الأعراف:31]&nbsp;فالرجل يجب عليه أن يستر ما بين
                            السرة، والركبة، وإذا كان له فضل ثياب فإنه يغطي عاتقيه في الصلاة&nbsp;<span
                                class="aaya">خُذُوا زِينَتَكُمْ عِنْدَ كُلِّ
                                مَسْجِدٍ</span>&nbsp;[الأعراف:31]&nbsp;فهذه العورة في الصلاة.</p>
                        <p style="text-align: justify;">وأما العورة أمام الأجانب فهي لدفع الفتنة، فالعلة
                            من ستر العورة في الصلاة غير العلة من ستر العورة أمام الأجانب، وهكذا فصل أهل
                            العلم أحكام النظر؛ فعندنا النظر إلى الأجنبية، عندنا النظر إلى المخطوبة،
                            عندنا النظر إلى الكبيرة، عندنا النظر إلى بنت تسع سنين التي لم تبلغ، عندنا
                            النظر إلى الصغيرة، عندنا نظر السيد لأمته، نظر الطبيب، نظر المرأة إلى الرجل،
                            نظر المرأة إلى المرأة؛ لكلٍّ حكم، وقد ذكر ابن قدامة - رحمه الله - صاحب
                            المغني أنه ليس له النظر إلى ما يستتر غالباً - يعني المحرم - كالصدر، والظهر،
                            ونحوهما<sup data-footnote-id="q63nz"><a href="#footnote-2" id="footnote-marker-2-1"
                                    rel="footnote">[2]</a></sup>&nbsp;وقد ذكر
                            الشيخ ابن عثيمين - رحمه الله - خلاصة في باب اللباس بأن اللباس شيء، والنظر
                            إلى العورة شيء آخر، فذكر أن &quot;لباس المرأة مع المرأة المشروع فيه أن يستر
                            ما بين كف اليد إلى كعب الرجل، هذا هو المشروع، لكن لو احتاجت المرأة إلى تشمير
                            ثوبها لشغل، أو نحوه فلها أن تشمر إلى الركبة&quot; لكن لا تفصل ثوباً إلى
                            الركبة، تشمر في شغل، تغسل البيت، تتوضأ أمام أهلها، قال: &quot;وكذلك لو
                            احتاجت أن تشمر الذراع إلى العضد فإنها تفعل ذلك بقدر الحاجة فقط&quot;<sup
                                data-footnote-id="kpn6f"><a href="#footnote-3" id="footnote-marker-3-1"
                                    rel="footnote">[3]</a></sup>.</p>
                        <div>
                            <div id="ftn49">
                                <section class="footnotes">
                                    <ol>
                                        <li data-footnote-id="i7iov" id="footnote-1"><cite>&nbsp;أخرجه
                                                الترمذي، أبواب الرضاع عن رسول الله ﷺ برقم (1173)، وابن
                                                خزيمة في صحيحه، برقم (1685)، وصححه الألباني في صحيح
                                                الجامع، برقم (6690).</cite></li>
                                        <li data-footnote-id="q63nz" id="footnote-2"><cite>&nbsp;انظر:
                                                المغني لابن قدامة (7/ 98).</cite></li>
                                        <li data-footnote-id="kpn6f" id="footnote-3"><cite>&nbsp;انظر:
                                                مجموع فتاوى ورسائل العثيمين (12/ 276).</cite></li>
                                    </ol>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="15">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> المرأة لا تبدي للمرأة إلا ما تبديه لمحارمها
                    </a>
                    <div>
                        <p style="text-align: justify;">وفي بيان للجنة الدائمة: &quot;قد دل ظاهر القرآن
                            على أن المرأة لا تبدي للمرأة إلا ما تبديه لمحارمها، مما جرت العادة بكشفه في
                            البيت، وحال المهنة، وقالوا: وإذا كان هذا هو نص القرآن، وهو ما دلت عليه
                            السنة، فإنه هو الذي جرى عليه عمل نساء الرسول ﷺ ونساء الصحابة، قالوا: وما جرت
                            العادة بكشفه للمذكورين في الآية - آية النور هذه - هو ما يظهر من المرأة
                            غالباً في البيت، وحال المهنة، ويشق عليها التحرز منه كانكشاف الرأس، واليدين،
                            والعنق، والقدمين&quot;<sup data-footnote-id="iahdx"><a href="#footnote-1"
                                    id="footnote-marker-1-1" rel="footnote">[1]</a></sup>&nbsp;وقد ذكر
                            شيخ الاسلام ابن تيمية - رحمه الله - أن لباس النساء في بيوتهن في عهد النبي ﷺ
                            ما بين كعب القدم، وكف اليد، قال: وكل هذا - يعني ما بين ذلك - مستور<sup
                                data-footnote-id="vpaon"><a href="#footnote-2" id="footnote-marker-2-1"
                                    rel="footnote">[2]</a></sup>&nbsp;هذا كلام شيخ الإسلام ابن تيمية.
                        </p>
                        <p style="text-align: justify;">فأين هذا من هذه الألبسة العارية، ونحن مقبلون على
                            هذه الإجازة، ويكثر فيها المناسبات، والأفراح، ويكثر فيها التبذل من كثير من
                            النساء، وقد جاء في صحيح مسلم:&nbsp;<span class="hadith">صنفان من أهل النار
                                لم أرهما بعد</span>&nbsp;وذكر فيه:&nbsp;<span class="hadith">نساء كاسيات
                                عاريات مائلات مميلات على رؤوسهن أمثال أسنمة البُخت المائلة، لا يدخلن
                                الجنة، ولا يجدن ريحها</span><sup data-footnote-id="149mh"><a href="#footnote-3"
                                    id="footnote-marker-3-1" rel="footnote">[3]</a></sup>&nbsp;نساء كاسيات عاريات،
                            مائلات مميلات،
                            ما معنى كاسية عارية، قيل: تستر بعضه، وتظهر بعضه، أو تلبس ما يشفّ، أو يصف، كل
                            هذا قال به شيخ الإسلام ابن تيمية، بهذه التفسيرات، يعني أنها تلبس ألبسة لاصقة
                            تبدي الصدر، تبدي جسدها، تحجمه، يلصق ذلك فيه، فهذا لا يجوز أمام النساء، أو أن
                            تكون تكشف، أو أن يكون ذلك يشف، وهذا الحديث لم يحدد فيه أنه أمام الرجال، بل
                            حتى في قول النبي ﷺ :&nbsp;<span class="hadith">المرأة عورة</span>&nbsp;ما
                            قال: أمام الرجال فقط، وأخرج الإمام أحمد، وغيره عن النبي ﷺ:&nbsp;<span class="hadith">سيكون
                                في آخر أمتي رجال يركبون على السروج كأشباه الرحال،
                                ينزلون على أبواب المسجد، نساؤهم كاسيات عاريات على رؤوسهن كأسنمة البخت
                                العجاف، العنوهنّ فإنهن ملعونات</span><sup data-footnote-id="vi7zb"><a href="#footnote-4"
                                    id="footnote-marker-4-1" rel="footnote">[4]</a></sup>&nbsp;هذا صححه الشيخ ناصر الدين
                            الألباني، لاحظ: نساؤهم كاسيات عاريات، وهذا الوصف الذي ذكره النبي
                            ﷺ:&nbsp;<span class="hadith">يركبون على السروج كأشباه
                                الرحال</span>&nbsp;أشبه ما يكون بالسيارات.</p>
                        <p style="text-align: justify;">في حديث أسامة بن زيد <span class="arabisque"></span> قال:
                            &quot;كساني رسول الله ﷺ قبطية كثيفة كانت
                            مما أهداها دحية الكلبي، فكسوتها امرأتي، فقال لي رسول الله ﷺ :&nbsp;<span class="hadith">ما
                                لك لم تلبس القبطية؟</span>&nbsp;قلت: يا رسول الله،
                            كسوتها امرأتي، فقال لي رسول الله ﷺ :&nbsp;<span class="hadith">مرها فلتجعل
                                تحتها غِلالة</span><sup data-footnote-id="ac18t"><a href="#footnote-5"
                                    id="footnote-marker-5-1" rel="footnote">[5]</a></sup>&nbsp;يعني مثل
                            البطانة، أو ثوب آخر يوضع تحت الثوب الظاهر،&nbsp;<span class="hadith">فلتجعل
                                تحتها غِلالة، إني أخاف أن تصف حجم عظامها</span>&nbsp;أخاف أن تصف يعني:
                            تلصق بها، فأين الذين يقولون: المرأة أمام المرأة من السرة إلى
                            الركبة؟!&nbsp;وفي صحيح البخاري من طريق الزهري قال: أخبرتني هند بنت الحارث عن
                            أم سلمة قالت: استيقظ رسول الله ﷺ من الليل، وهو يقول:&nbsp;<span class="hadith">(لا إله إلا
                                الله! ماذا أنزل الليلة من الفتنة؟ ماذا أنزل
                                من الخزائن؟ من يوقظ صواحب الحجرات؟ كم من كاسية في الدنيا عارية يوم
                                القيامة</span>&nbsp;قال الزهري: وكانت هند لها أزرار في كميها بين
                            أصابعها<sup data-footnote-id="0j3dj"><a href="#footnote-6" id="footnote-marker-6-1"
                                    rel="footnote">[6]</a></sup>&nbsp;يعني تلبس
                            ثيابًا لها أكمام، ومبالغة في الستر تضع أزرارًا بين الأصابع؛ لئلا يظهر الذراع
                            فضلاً عن العضد، فأين التي تلبس ربع كم، أو بلا أكمام، أو خيوط، أو
                            بأكمام&nbsp;واسعة إذا رفعت يدها ظهر كل شيء؟!&nbsp;لاحظ: هند هذه تضع أزرارًا
                            بين الأصابع مبالغة في الاحتياط لما سمعت هذا الحديث:&nbsp;<span class="hadith">كم من كاسية في
                                الدنيا عارية يوم القيامة</span>&nbsp;قيل:
                            كاسية في الدنيا عارية في الآخرة، يريد كاسية بالثياب الواصفة لأجسامهن لغير
                            أزواجهن، ومن يحرم عليه النظر إلى ذلك منهن، وهن عاريات في الحقيقة، فربما
                            عوقبت في الآخرة بالتعري الذي كانت إليه مائلة في الدنيا مباهية بحسنها، فعرف
                            النبي ﷺ أن الصلاة تعصم من شر ذلك&nbsp;<span class="hadith">من يوقظ صواحب
                                الحجرات؟</span>&nbsp;يعني: ليصلين.</p>
                        <p style="text-align: justify;">وقد فسره الإمام مالك - رحمه الله - : بأنهن
                            لابسات رقيق الثياب<sup data-footnote-id="6p2bf"><a href="#footnote-7"
                                    id="footnote-marker-7-1" rel="footnote">[7]</a></sup>&nbsp;ثياب
                            رقيقة تلصق، أو تشف.</p>
                        <p style="text-align: justify;">وفي الحديث الآخر:&nbsp;<span class="hadith">خير
                                نسائكم الودود الولود المواتية المواسية إذا اتقين الله، وشر نسائكم
                                المتبرجات المتخيلات، وهن المنافقات، لا يدخل الجنة منهن إلا مثل الغراب
                                الأعصم</span><sup data-footnote-id="wp0sr"><a href="#footnote-8"
                                    id="footnote-marker-8-1" rel="footnote">[8]</a></sup>&nbsp;الغراب
                            الأعصم أحمر المنقار، والرجلين، وهذا نادر في الغربان، هذا الحديث ذكره الشيخ
                            ناصر الدين الألباني في السلسلة الصحيحة.</p>
                        <p style="text-align: justify;">وهذا المنذر بن الزبير لما جاء من العراق أرسل إلى
                            أسماء - رضي الله تعالى عنها - بعدما كف بصرها، امرأة كبيرة في السن عمياء،
                            أرسل بكسوة من ثياب من مرو، فلمستها بيدها، ثم قالت: أف، ردوا عليه كسوته، فشق
                            ذلك عليه، يعني كيف ردت الهدية؟ وقال: يا أمهْ، إنه لا يشفّ، قالت: &quot;إن لم
                            يشفّ فهو يصف&quot;<sup data-footnote-id="6neg5"><a href="#footnote-9"
                                    id="footnote-marker-9-1" rel="footnote">[9]</a></sup>&nbsp;يعني
                            يلصق، امرأة كبيرة عمياء!.</p>
                        <p style="text-align: justify;">ودخل نسوة من بني تميم، لاحظ لباس المرأة أمام
                            المرأة، دخل نسوة من بني تميم على عائشة - رضي الله عنها - عليهن ثياب رقاق،
                            فقالت: &quot;إن كنتن مؤمنات فليس هذا بلباس المؤمنات، وإن كنتن غير مؤمنات
                            فتمتعن به&quot;<sup data-footnote-id="g1mew"><a href="#footnote-10"
                                    id="footnote-marker-10-1" rel="footnote">[10]</a></sup>&nbsp;الآن ما
                            خرجن في الشارع، أمام النساء.</p>
                        <p style="text-align: justify;">وذكر أبو هريرة <span class="arabisque"></span>
                            رقة الثياب للنساء فقال: &quot;الكاسيات العاريات الناعمات الشقيات&quot;<sup
                                data-footnote-id="x5x8m"><a href="#footnote-11" id="footnote-marker-11-1"
                                    rel="footnote">[11]</a></sup>&nbsp;وأُدخلت
                            امرأة عروس في ليلة زفافها على عائشة - رضي الله عنها - وعليها خمار قبطي
                            معصفر، فلما رأتها قالت: &quot;لم تؤمن بسورة النور امرأة تلبس هذا&quot;<sup
                                data-footnote-id="jvjyf"><a href="#footnote-12" id="footnote-marker-12-1"
                                    rel="footnote">[12]</a></sup>&nbsp;ومعلوم
                            أن سورة النور تدور على موضوع الستر، والعفاف.</p>
                        <p style="text-align: justify;">هذا فضلاً عن التشبه ببعض هذه الألبسة بالرجال،
                            وقد&nbsp;ورد في الحديث:&nbsp;<span class="hadith">لعن الله المتشبهين من
                                الرجال بالنساء، والمتشبهات من النساء بالرجال</span><sup data-footnote-id="mfy8b"><a
                                    href="#footnote-13" id="footnote-marker-13-1" rel="footnote">[13]</a></sup>.</p>
                        <p style="text-align: justify;">وفي الحديث الآخر: &quot;أن النبي ﷺ لعن الرجل
                            يلبس لبسة المرأة، والمرأة تلبس لبسة الرجل&quot;<sup data-footnote-id="2bvin"><a
                                    href="#footnote-14" id="footnote-marker-14-1" rel="footnote">[14]</a></sup>.</p>
                        <div>
                            <div id="ftn49">
                                <section class="footnotes">
                                    <ol>
                                        <li data-footnote-id="iahdx" id="footnote-1"><cite>&nbsp;انظر:
                                                فتاوى اللجنة الدائمة (17/ 291-292).</cite></li>
                                        <li data-footnote-id="vpaon" id="footnote-2"><cite>&nbsp;لم أقف
                                                عليه.</cite></li>
                                        <li data-footnote-id="149mh" id="footnote-3"><cite>&nbsp;أخرجه
                                                مسلم، كتاب اللباس والزينة، باب النساء الكاسيات العاريات
                                                المائلات المميلات، برقم (2128).</cite></li>
                                        <li data-footnote-id="vi7zb" id="footnote-4"><cite>&nbsp;أخرجه
                                                أحمد في المسند، برقم (7083)، وقال محققوه: &quot;إسناده
                                                ضعيف&quot; وابن حبان في صحيحه، برقم (5753)، والحاكم في
                                                المستدرك، برقم (8346)، وقال: &quot;هذا حديث صحيح على شرط
                                                الشيخين، ولم يخرجاه&quot; وصححه الألباني في السلسلة
                                                الصحيحة، برقم (2683).</cite></li>
                                        <li data-footnote-id="ac18t" id="footnote-5"><cite>&nbsp;أخرجه
                                                أحمد في المسند، برقم (21786)، وقال محققوه: &quot;حديث
                                                محتمل للتحسين&quot; والبيهقي في السنن الكبرى، برقم
                                                (3262).</cite></li>
                                        <li data-footnote-id="0j3dj" id="footnote-6"><cite>&nbsp;أخرجه
                                                البخاري، كتاب اللباس، باب ما كان النبي ﷺ يتجوز من اللباس
                                                والبسط، برقم (5844).</cite></li>
                                        <li data-footnote-id="6p2bf" id="footnote-7"><cite>&nbsp;انظر:
                                                تفسير القرطبي (3 / 181).</cite></li>
                                        <li data-footnote-id="wp0sr" id="footnote-8"><cite>&nbsp;أخرجه
                                                البيهقي بهذا اللفظ في السنن الكبرى، برقم (13478)، وصححه
                                                الألباني في صحيح الجامع، برقم (3330).</cite></li>
                                        <li data-footnote-id="6neg5" id="footnote-9"><cite>&nbsp;أخرجه
                                                ابن سعد في الطبقات الكبرى (8/ 199).</cite></li>
                                        <li data-footnote-id="g1mew" id="footnote-10"><cite>&nbsp;انظر:
                                                تفسير القرطبي (14/ 244).</cite></li>
                                        <li data-footnote-id="x5x8m" id="footnote-11"><cite>&nbsp;المصدر
                                                السابق.</cite></li>
                                        <li data-footnote-id="jvjyf" id="footnote-12"><cite>&nbsp;المصدر
                                                السابق.</cite></li>
                                        <li data-footnote-id="mfy8b" id="footnote-13"><cite>&nbsp;أخرجه
                                                البخاري، كتاب اللباس، باب المتشبهون بالنساء، والمتشبهات
                                                بالرجال، برقم (5885)، وأحمد في المسند، برقم (3151)، وقال
                                                محققوه: &quot;إسناده صحيح على شرط البخاري&quot;.</cite>
                                        </li>
                                        <li data-footnote-id="2bvin" id="footnote-14"><cite>&nbsp;أخرجه
                                                أبو داود، كتاب اللباس، باب في لباس النساء، برقم (4098)،
                                                والنسائي في السنن الكبرى، برقم (9209)، وأحمد في المسند،
                                                برقم (8309)، وقال محققوه: &quot;إسناده صحيح على شرط
                                                مسلم، رجاله ثقات رجال الشيخين غير سهيل بن أبي صالح، فمن
                                                رجال مسلم&quot; وصححه الألباني في صحيح الجامع، برقم
                                                (5095).</cite></li>
                                    </ol>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="16">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> المرأة محل الحياء
                    </a>
                    <div>
                        <p style="text-align: justify;">ثم أين الحياء؟ المرأة هي محل الحياء، فهذه
                            الألبسة التي تعري، أو تلصق، أو تظهر سيقانها، وأفخاذها، أو إلى ركبتها، أو نحو
                            ذلك، أو يظهر بطنها، فقد جاء في الحديث:&nbsp;<span class="hadith">إن الحياء،
                                والإيمان قُرنا جميعاً، فإذا رفع أحدهما رفع الآخر</span><sup data-footnote-id="ru75w"><a
                                    href="#footnote-1" id="footnote-marker-1-1" rel="footnote">[1]</a></sup>&nbsp;هذه
                            الجالسة&nbsp;واضعةً رجلا على
                            رجل، وقد ظهرت سيقانها، وأفخاذها، أين الحياء؟ أين الحياء من هذه التي جلست في
                            صالة أفراح ينظر إليها مئات النساء، وقد عرت ظهرها، وصدرها؟</p>
                        <p style="text-align: justify;">وفي حديث أبي بكرة:&nbsp;<span class="hadith">الحياء من الإيمان،
                                والإيمان في الجنة، والبذاء من الجفاء،
                                والجفاء في النار</span><sup data-footnote-id="rhzwm"><a href="#footnote-2"
                                    id="footnote-marker-2-1" rel="footnote">[2]</a></sup>&nbsp;وفي الحديث
                            الآخر:&nbsp;<span class="hadith">إن الله حيي ستِّير، يحب الحياء، والستر</span><sup
                                data-footnote-id="am5un"><a href="#footnote-3" id="footnote-marker-3-1"
                                    rel="footnote">[3]</a></sup>&nbsp;وفي الحديث:&nbsp;<span class="hadith">أيما امرأة
                                نزعت ثيابها في غير بيتها خرق الله <span class="arabisque"></span> عنها ستره</span><sup
                                data-footnote-id="hsgy5"><a href="#footnote-4" id="footnote-marker-4-1"
                                    rel="footnote">[4]</a></sup>.</p>
                        <table class="poetry">
                            <tbody>
                                <tr>
                                    <td>لحدِّ الركبتينِ تشمرينا</td>
                                    <td>بربك أي نهرٍ تعبرينا</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="poetry">
                            <tbody>
                                <tr>
                                    <td>كأن الثوبَ ظلٌّ في صباح</td>
                                    <td>يزيد تقلصاً حيناً فحينا</td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="text-align: justify;">مثل: ظل الصباح.</p>
                        <table class="poetry">
                            <tbody>
                                <tr>
                                    <td>تظنين الرجالَ بلا شعور</td>
                                    <td>لأنك ربّما لا تشعرينا</td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="text-align: justify;">هذا فضلاً عن التشبه بالكافرات،&nbsp;بعض هذه
                            الألبسة هي تشبه بالكافرات، هي من ثياب الكفار، هذا بالإضافة إلى سد الذرائع،
                            النساء تتحرك غرائزهن إذا رأين مثل هذه الألبسة، وقد سمعنا من بعض النساء ذلك،
                            فكيف إذا قامت ترقص أمامهن في الفرح؟.</p>
                        <p style="text-align: justify;">فالزينة حلال للمرأة، تلبية لفطرتها، وكل أنثى
                            مولعة بأن تكون جميلة، وأن تبدو جميلة، وهذا أمر لا يُنكر، والله <span
                                class="arabisque"></span>&nbsp;قال:&nbsp;<span class="aaya">أَوَمَنْ
                                يُنَشَّأُ فِي الْحِلْيَةِ&nbsp;وَهُوَ فِي الْخِصَامِ غَيْرُ
                                مُبِينٍ</span> [الزخرف:18]&nbsp;فهذا فطرة في المرأة، طلباً لتحصيل
                            الجمال، والكمال، والإسلام لا يغالب، ولا يرد، ولا يعارض هذه الفطرة، ولكنه
                            ينظمها، ويضبطها، ويوجهها في&nbsp;وجهها الصحيح، يوجهها إلى الاتجاه الصالح،
                            فالمرأة تبدي أحسن الزينة للزوج شريك الحياة، يطلع منها على ما لا يطلع عليه
                            غيره، ويشترك في بعض ذلك المحارم الذين ذكرهم الله <span class="arabisque"></span> على تفاوت.
                        </p>
                        <p style="text-align: justify;">وهكذا المؤمنات يرين من زينتها الباطنة
                            ما&nbsp;وصفنا، وقد تلقّت المؤمنات هذه التشريعات بقبول عن الله - تبارك،
                            وتعالى - وإذعان، وتسليم، تلقّين ذلك بقلوب مطمئنة مشرقة، وقد سمعتم الأحاديث
                            في ذلك، لم يتلكأن في الطاعة مع&nbsp;وجود الرغبة الفطرية في نفوسهن.</p>
                        <div>
                            <div id="ftn49">
                                <section class="footnotes">
                                    <ol>
                                        <li data-footnote-id="ru75w" id="footnote-1"><cite>&nbsp;أخرجه
                                                الحاكم في المستدرك، برقم (58)، وقال: &quot;هذا حديث صحيح
                                                على شرطهما، فقد احتجا برواته ولم يخرجاه بهذا اللفظ&quot;
                                                والبيهقي في شعب الإيمان، برقم (7331)، والبخاري في الأدب
                                                المفرد، برقم (1313)، وصححه الألباني في صحيح الجامع، برقم
                                                (1603).</cite></li>
                                        <li data-footnote-id="rhzwm" id="footnote-2"><cite>&nbsp;أخرجه
                                                الترمذي، أبواب البر والصلة عن رسول الله ﷺ باب ما جاء في
                                                الحياء، برقم (2009)، وابن ماجه، أبواب الزهد، باب الحياء،
                                                برقم (4184)، وأحمد في المسند، برقم (10512)، وقال محققوه:
                                                &quot;حديث صحيح، وهذا إسناد حسن&quot; وصححه الألباني في
                                                صحيح الجامع، برقم (3199).</cite></li>
                                        <li data-footnote-id="am5un" id="footnote-3"><cite>&nbsp;أخرجه
                                                أبو داود، كتاب الحمّام، باب النهي عن التعري، برقم
                                                (4012)، والنسائي، كتاب الغسل والتيمم، باب الاستتار عند
                                                الاغتسال، برقم (406)، وأحمد في المسند، برقم (17970)،
                                                وقال محققوه: &quot;إسناده حسن لأجل أبي بكر بن عياش،
                                                وباقي رجال الإسناد ثقات رجال الصحيح&quot; وصححه الألباني
                                                في صحيح الجامع، برقم (1756).</cite></li>
                                        <li data-footnote-id="hsgy5" id="footnote-4"><cite>&nbsp;أخرجه
                                                أحمد في المسند، برقم (26569)، وقال محققوه: &quot;حديث
                                                حسن لغيره، وهذا إسناد ضعيف لضعف ابن لهيعة&quot; والحاكم
                                                في المستدرك، برقم (7782)، والطبراني في الكبير، برقم
                                                (710)، وصححه الألباني في صحيح الجامع، برقم
                                                (2708).</cite></li>
                                    </ol>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="17">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> المرأة في الجاهلية
                    </a>
                    <div>
                        <p style="text-align: justify;">المرأة في الجاهلية كانت تخرج متبذلة&nbsp;<span class="aaya">وَلا
                                تَبَرَّجْنَ تَبَرُّجَ الْجَاهِلِيَّةِ
                                الأُولَى</span>&nbsp;[الأحزاب:33]&nbsp;هذا التبذل هو خلق جاهلي، المرأة
                            التي تتبذل، وتتكشف فيها من صفات الجاهلية، والله حينما أهبط آدم، وحواء من
                            الجنة ماذا قال الله <span class="arabisque"></span> عن ذلك الأمر
                            الذي&nbsp;وقع؟ الشيطان زين لهم الأكل من الشجرة، قال الله:&nbsp;<span class="aaya">لِيُبْدِيَ
                                لَهُمَا مَا&nbsp;وُورِيَ عَنْهُمَا مِنْ
                                سَوْآتِهِمَ</span>&nbsp;[االأعراف:20]&nbsp;فهذا الإظهار لهذه المفاتن هو
                            مما يدعو إليه الشيطان، هو من أخلاق الجاهلية&nbsp;<span class="aaya">وَلا
                                تَبَرَّجْنَ تَبَرُّجَ الْجَاهِلِيَّةِ الأُولَى</span>&nbsp;[الأحزاب:33].
                        </p>
                        <div>
                            <div id="ftn49">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div id="18">
                    <a href="#content-body" class="smooth-scroll chunk-title">
                        <i class="fa fa-arrow-up"></i> الجمال الحقيقي في الستر والعفاف والحشمة
                    </a>
                    <div>
                        <p style="text-align: justify;">فهذا الستر، والعفاف، والحشمة رقي، وذوق، إنه
                            الجمال الحقيقي، أما ذلك التبذل الحيواني فهذا يتنزه عنه الإنسان الكريم
                            الشريف، ليس الجمال بكشف الجسد، والتعري، والتبذل، فيذهب رونق المرأة، كما
                            تشاهد في المرأة الغربية، المرأة المتبذلة، لا يظهر عليها مسحة الأنوثة،
                            والجمال، والرقة، وكأنها رجل يزهد فيها الرجال من أصحاب الذوق الرفيع، الذوق
                            الجمالي الذي يليق بالإنسان، ويليق بالنظافة، والطهر.</p>
                        <p style="text-align: justify;">فهذه تربية القرآن، وأسأل الله - تبارك، وتعالى -
                            أن تكون سبيلاً لنيل المنافع، والخير، وأن يكون ذلك فتحاً على المسلمين، وأن
                            ينصرهم، وأن يلطف بإخواننا في بلاد الشام، وأن يخلصهم مما هم فيه، وأن ينصرهم
                            نصراً مؤزراً، وأن يخذل عدوه، وعدوهم.</p>
                        <p style="text-align: justify;">اللهم ارحم موتانا، واشفِ مرضانا، وعافِ مبتلانا،
                            واجعل آخرتنا خيراً من دنيانا، والله تعالى أعلم، وصلى الله، وسلم على نبينا
                            محمد، وعلى آله، وصحبه أجمعين.</p>
                        <div>
                            <div id="ftn49">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="heading">
    <h2 class="heading__title">
        مواد ذات صلة
    </h2>
</div>
<div class="cards cards--space-between cards--small">
    <div class="card card--cover">
        <div class="cover" style="background-image: url('https://khaledalsabt.com/img/types/lecture.jpg')">
            <span class="card__gradients"></span>
        </div>
        <div class="card__content interpretation">
            <a
                href="https://khaledalsabt.com/lectures/7/%D9%88%D9%82%D9%81%D8%A7%D8%AA-%D9%85%D8%B9-%D9%82%D9%88%D9%84%D9%87-%D8%AA%D8%B9%D8%A7%D9%84%D9%89-%D9%88%D9%84%D8%A7-%D8%AA%D9%82%D9%81-%D9%85%D8%A7-%D9%84%D9%8A%D8%B3-%D9%84%D9%83-%D8%A8%D9%87-%D8%B9%D9%84%D9%85">
                <p class="card__title card__title--no-border card__title--font-sm">
                    وقفات مع قوله تعالى: (ولا تقف ما ليس لك به علم)
                </p>
            </a>
        </div>
    </div>
    <div class="card card--cover">
        <div class="cover" style="background-image: url('https://khaledalsabt.com/img/types/lecture.jpg')">
            <span class="card__gradients"></span>
        </div>
        <div class="card__content interpretation">
            <a href="https://khaledalsabt.com/lectures/3/%D8%A7%D9%84%D9%85%D8%A8%D8%A7%D9%84%D8%BA%D9%88%D9%86">
                <p class="card__title card__title--no-border card__title--font-sm">
                    المبالغون
                </p>
            </a>
        </div>
    </div>
    <div class="card card--cover">
        <div class="cover" style="background-image: url('https://khaledalsabt.com/img/types/lecture.jpg')">
            <span class="card__gradients"></span>
        </div>
        <div class="card__content interpretation">
            <a
                href="https://khaledalsabt.com/lectures/5/%D8%A7%D8%AD%D9%83%D8%A7%D9%85-%D8%A7%D9%84%D8%AA%D8%B4%D8%A8%D9%87">
                <p class="card__title card__title--no-border card__title--font-sm">
                    أحكام التشبه
                </p>
            </a>
        </div>
    </div>
</div>
@stop
