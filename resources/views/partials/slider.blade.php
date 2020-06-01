<div class="utility__bg--white utility__border--bottom--double utility__border--color--primary-50">
    <div class="container utility__text-center">
        <div class="slider featured-slider">
            @foreach ($slides as $slide)
            <div>
                <div class="featured-slider__content-container"
                    style="background-image: url('{{ $slide->cover_pic }}')">
                    <div class="featured-slider__content ">
                        <a
                            href="interpretations/category/146/%d8%b4%d8%b1%d8%ad-%d9%83%d8%aa%d8%a7%d8%a8-%d8%a7%d9%84%d8%aa%d8%b3%d9%87%d9%8a%d9%84-%d9%84%d8%a7%d8%a8%d9%86-%d8%ac%d8%b2%d9%8a.html">
                            <h1 class="featured-slider__title">{{ $slide->title }}</h1>
                            <p class="featured-slider__excerpt"></p>
                        </a>
                        <span class="featured-slider__date">
                            <i class="fa fa-clock-o"></i>
                            {{ $slide->created_at->format('d/m/Y') }}
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
