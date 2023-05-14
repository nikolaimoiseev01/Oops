<div class="where2buy_block_wrap">
    <div class="content">


        <h2>Найти оффлайн магазин на карте</h2>
        <div class="map_wrap">
            <div id="map">
                <a class="link-bg orange show_shops">Магазины</a>
                <div class="shops_wrap">
                    @foreach($shops as $shop)
                        <div data-search="{{$shop['title']}} {{$shop['address']}}" class="shop_wrap">
                            <h2>{{$shop['title']}}</h2>
                            <p class="address">{{$shop['address']}}</p>
                            <p class="hours">{{$shop['hours']}}</p>
                            <div class="mobile_wrap">
                                <svg id="phone" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.89 21.93">
                                    <defs>
                                        <style>.cls-99 {
                                                fill: none;
                                                stroke: #000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 2px;
                                            }</style>
                                    </defs>
                                    <path class="cls-99"
                                          d="M20.89,15.92v3a2,2,0,0,1-2,2h-.19a19.79,19.79,0,0,1-8.63-3.07,19.41,19.41,0,0,1-6-6A19.82,19.82,0,0,1,1,3.18,2,2,0,0,1,2.82,1H6A2,2,0,0,1,8,2.72a13,13,0,0,0,.7,2.81,2,2,0,0,1-.45,2.11L7,8.91a15.93,15.93,0,0,0,6,6l1.27-1.27a2,2,0,0,1,2.11-.45,13,13,0,0,0,2.81.7A2,2,0,0,1,20.89,15.92Z"/>
                                </svg>
                                <p class="mobile">{{$shop['mobile']}}</p>
                            </div>

                            <p class="site">{{$shop['site']}}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            @push('scripts')
                <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=83b97a87-f3c0-4d59-a442-06dc9ce115f8"
                        type="text/javascript"></script>
                <script>
                    function init() {
                        var myMap = new ymaps.Map('map', {
                            center: [56.010566, 92.852571],
                            zoom: 12,
                            controls: []
                        })

                        // Создадим экземпляр элемента управления «поиск по карте»
                        // с установленной опцией провайдера данных для поиска по организациям.
                        var searchControl = new ymaps.control.SearchControl({
                            options: {
                                provider: 'yandex#search'
                            }
                        });

                        // Результаты поиска будем помещать в коллекцию.
                        var mySearchResults = new ymaps.GeoObjectCollection(null, {
                            hintContentLayout: ymaps.templateLayoutFactory.createClass('$[properties.name]')
                        });

                        myMap.controls.add(searchControl);

                        // Программно выполним поиск определённых кафе в текущей
                        // прямоугольной области карты.

                        $('.shop_wrap').on('click', function () {
                            if (window.outerWidth < 800) {
                                $('.shops_wrap').hide();
                            }
                            searchControl.search($(this).attr('data-search'))
                        })

                    }

                    ymaps.ready(init);

                </script>

                <script>
                    $('.show_shops').on('click', function () {
                        if (window.outerWidth < 800) {
                            $('.ymaps-2-1-79-balloon__close-button').trigger('click')
                        }

                        $('.shops_wrap').toggle();
                    })
                </script>
            @endpush


        </div>
    </div>
</div>
