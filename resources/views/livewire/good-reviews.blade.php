<div>
    @if(count($good_reviews) > 0)
        <div class="good_reviews_block_wrap">

            <div class="content">
                <h2>Отзывы</h2>
                <div class="reviews_wrap">
                    @foreach($good_reviews as $review)
                        <div class="review_wrap">
                            <div class="header_wrap">
                                <div>
                                    <p class="user_name">{{$review['user_name']}}</p>
                                    <p class="date">{{$review['date']}}</p>
                                </div>
                                <img src="/media/media_fixed/logo_{{$review['shop']}}.png" class="shop" alt="">
                            </div>
                            <div class="stars_wrap">
                                <svg class="@if($review['rating'] < 1) disabled @endif" width="18" height="17"
                                     viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z"
                                        fill="#E15A34"/>
                                </svg>
                                <svg class="@if($review['rating'] < 2) disabled @endif" width="18" height="17"
                                     viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z"
                                        fill="#E15A34"/>
                                </svg>
                                <svg class="@if($review['rating'] < 3) disabled @endif" width="18" height="17"
                                     viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z"
                                        fill="#E15A34"/>
                                </svg>
                                <svg class="@if($review['rating'] < 4) disabled @endif" width="18" height="17"
                                     viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z"
                                        fill="#E15A34"/>
                                </svg>
                                <svg class="@if($review['rating'] < 5) disabled @endif" width="18" height="17"
                                     viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z"
                                        fill="#E15A34"/>
                                </svg>

                            </div>
                            <p class="text">{{$review['text']}}</p>
                        </div>
                    @endforeach

                    @if ($load_more_check)
                        <a wire:click="load_more" class="link-bg orange">Смотреть еще</a>
                    @else
                        @if(count($good_reviews) > 0)
                            <p class="all_loaded">Загружены все отзывы ({{count($good_reviews)}})</p>
                        @endif
                    @endif


                </div>
            </div>
            @endif
        </div>
</div>
