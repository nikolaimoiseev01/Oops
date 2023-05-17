<div class="welcome_slider_wrap">
    <div class="navigation_wrap">
        <a class="prev_slider">
            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.5 11L1.5 6L6.5 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <a class="next_slider">
            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.5 11L6.5 6L1.5 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
    <div class="slider">

        <div id="slide_3" class="slide_wrap">
            {{--        <img src="/media/media_fixed/welcome_slide_1.png" alt="">--}}
            <div class="content info_wrap">
                <div class="info">
                    <h1>Чистый дом и гармония вместе с OOPS!</h1>
                    <img class="mobile_img" src="/media/media_fixed/welcome_slide_3.png" alt="">
                    <p>Ваш щенок написал на диван? Кот пометил ботинки? Мечтаете удалить пятна от крови или травы?
                        Благодаря био-энзимной формуле cредства Oops! легко устранят неприятный запах и следы
                        загрязнения.</p>
                    <a href="{{route('goods_page')}}" class="link-bg orange">
                        В каталог
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 13L7 7L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <img src="/media/media_fixed/welcome_slide_3.png" alt="">
            </div>
        </div>
        <div id="slide_2" class="slide_wrap">
            <div class="content info_wrap">
                <div class="info">
                    <h1>Эффективное устранение пятен и запахов животных</h1>
                    <img class="mobile_img" src="/media/media_fixed/welcome_slide_2.png" alt="">
                    <p>Научные исследования, высокое качества продукта и эффективность - вот наша основа! </p>
                    <a href="{{route('posts_page')}}" class="link-bg orange">
                        В лабораторию
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 13L7 7L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <img src="/media/media_fixed/welcome_slide_2.png" alt="">
            </div>

        </div>
        <div id="slide_1" style="background-image: url('/media/media_fixed/welcome_slide_1.png')" class="slide_wrap">
            {{--        <img src="/media/media_fixed/welcome_slide_1.png" alt="">--}}
            <div class="content info_wrap">
                <div class="info">
                    <h1>Концентрат OOPS!</h1>
                    <p>Еще Аристотель в своей «Политике» говорил, что музыка, воздействуя на человека, доставляет
                        «своего рода очищение, то есть облегчение</p>
                    <a href="{{route('goods_page')}}" class="link-bg orange">
                        В каталог
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 13L7 7L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@push('scripts')
    <script>
        $('.slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            adaptiveHeight: true,
            nextArrow: '#next_slide_0',
            prevArrow: '#prev_slide_0'
        });
    </script>
@endpush
