<div  x-data="{ open: false }">
    <a x-on:click="open = ! open" class="filter-link link-bg orange">
        Фильтровать
    </a>
    <div class="content goods_market_wrap">

        <div :class="open ? 'active' : ''"  class="filters_wrap">
            <div class="filter_wrap">
                <p class="title">Назначение</p>
                <div class="values_wrap">
                    @foreach($good_categories as $good_category)
                        <div class="checkbox_wrap">
                            <input wire:model="good_category_chosen"
                                   id="gc_{{$good_category['id']}}"
                                   value="{{$good_category['id']}}"
                                   type="checkbox">
                            <label for="gc_{{$good_category['id']}}">{{$good_category['title']}}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            @foreach($prop_names as $prop_name)
                <div class="filter_wrap">
                    <p class="title">{{$prop_name['title']}}</p>
                    <div class="values_wrap">
                        @foreach(\App\Models\GoodPropValue::where('good_prop_name_id', $prop_name['id'])->get()
                                    as $prop_value
                        )
                            <div class="checkbox_wrap">
                                <input wire:model="prop_chosen.{{$prop_name['id']}}.{{$prop_value['id']}}"
                                       id="{{$prop_value['title']}}"
                                       type="checkbox">
                                <label for="{{$prop_value['title']}}">{{$prop_value['title']}}</label>
                            </div>

                        @endforeach
                    </div>
                </div>
            @endforeach
            @if($prop_chosen || $good_category_chosen)
                <a wire:click.prevent="clearFilters()" class="clear_filters link">Сбросить фильтры</a>
            @endif
            <svg class="close_menu" x-on:click="open = ! open" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 6L1 1M6 6L11 11M6 6L11 1M6 6L1 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="goods_wrap">

            @if(count($goods) > 0)
                @foreach($goods as $good)
                    <div class="good_wrap">
                        <div class="img_wrap">
                            <img src="{{$good->getFirstMediaUrl('good_examples')}}" alt="">
                        </div>

                        <p class="title">{{$good['title']}}</p>
                        <p class="desc">
                            {{Str::limit($good['desc'], 130, '...')}}
                        </p>
                        <a href="{{route('good_page', $good['id'])}}" class="link-bg orange">Подробнее</a>
                    </div>
                @endforeach
            @else
                <p class="no_goods">К сожалению, по выбранным фильтрам товаров не нашлось.</p>
            @endif
        </div>
    </div>
</div>
