@extends('layouts.portal')

@section('title'){{$good['title']}}@endsection

@section('content')

    <div class="good_page_wrap">
        <div class="content bread_wrap">
            <a href="{{route('home')}}">
                Главная
            </a>
            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2" fill="#212121"/>
            </svg>
            <a href="{{route('goods_page')}}">Каталог</a>
            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2" fill="#212121"/>
            </svg>
            <p>{{$good['title']}}</p>
        </div>

        <div class="content welcome_wrap">
            <h2 class="mobile_title">{{$good['title']}}</h2>
            <div class="examples_wrap">
                <div class="main_example_block_wrap">
                    <div class="navigation_wrap">
                        <a class="prev_slider">
                            <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.5 11L1.5 6L6.5 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a class="next_slider">
                            <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 11L6.5 6L1.5 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>

                    <div class="main_example_wrap">
                        @foreach($good->getMedia('good_examples') as $key=>$good_example)
                            <div class="example_wrap">
                                {{$good_example}}
                            </div>
                        @endforeach
                    </div>


                    @push('scripts')
                        <script>
                            $('.main_example_wrap img').on('click', function(e) {
                                url = $(this).attr('src')

                                $('#img_full').attr('src', url)
                                $('#img_full_modal').fadeToggle(200);
                                $('body').css('overflow-y', 'hidden')
                                setTimeout(function () {
                                    modal_on = 1
                                }, 500)
                            })

                            $(document).on("click", function (event) {
                                if (!$(event.target).closest(".modal_content").length) {
                                    if (modal_on === 1) {
                                        $('.modal').fadeOut(200);
                                        $('body').css('overflow-y', 'auto')
                                        modal_on = 0
                                    }
                                }
                            });
                        </script>
                    @endpush

                </div>
                <div class="other_examples_wrap">
                    @foreach($good->getMedia('good_examples') as $key=>$good_example)
                        <div class="example_wrap">
                            {{$good_example}}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="info_wrap">
                <h2>{{$good['title']}}</h2>
                <div class="capacity_wrap">
                    <p>Объем: </p>
                    <a href="" class="link-bg orange">
                        {{$good['capacity']}} {{$good['capacity_type']}}
                    </a>
                </div>
                @if(count($good['advantages']) > 0)
                    <ul class="advantages_wrap">
                        @foreach($good['advantages'] as $advantage)
                            <li>{{$advantage}}</li>
                        @endforeach
                    </ul>
                @endif
                <p class="desc">{{$good['desc']}}</p>
                <div class="buttons_wrap">
                    <div @click.outside="open = false" x-data="{ open: false }" class="links_block_wrap">
                        <a @click="open = !open" class="link-bg orange">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path
                                    d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path
                                    d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            Купить онлайн
                        </a>
                        <div x-show="open" x-transition class="links_wrap">
                            @foreach($good['links'] as $key=>$link)
                                <div class="link_wrap">
                                    <a target="_blank" class="link orange" href="{{$link}}"><b>{{$key}}</b></a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <a href="{{route('where2buy_page')}}" class="link-bg grey">Найти магазин</a>
                </div>
                <div class="tabs_wrap">
                    <div class="header_links_wrap">
                        <a data-id="compound" class="cont_nav_item current active link coal">Состав</a>
                        <a data-id="instruction" class="cont_nav_item link coal">Инструкция по применению</a>
                    </div>
                    <div style="transition: .3s ease-in-out" class="list-wrap">
                        <div class="nav_block" id="compound">
                            <p class="desc">{{$good['compound']}}</p>
                        </div>
                        <div class="nav_block" id="instruction" style="display: none;">
                            <p class="desc">{{$good['instruction']}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @livewire('good-reviews', ['good_id' => $good->id])

        <livewire:consultation-form/>
    </div>



    @push('scripts')
        <script>
            $('.main_example_wrap').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                nextArrow: '#next_slide_0',
                prevArrow: '#prev_slide_0',
                asNavFor: '.other_examples_wrap'
            });
            $('.other_examples_wrap').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.main_example_wrap',
                dots: false,
                centerMode: false,
                focusOnSelect: true,
                arrows: false,

            });

            $('#next_slide_0').on('click', function () {
                $('.main_example_wrap').slick("slickNext");
            })
            $('#prev_slide_0').on('click', function () {
                $('.main_example_wrap').slick("slickPrev");
            })
        </script>

        <script>
            $('.cont_nav_item').on('click', function () {
                id = $(this).attr('data-id');
                $('.cont_nav_item').each(function () {
                    $(this).removeClass('active')
                })
                $('.nav_block').hide()
                $(this).addClass('active')
                $('#' + id).show();
            })
        </script>
    @endpush
@endsection
