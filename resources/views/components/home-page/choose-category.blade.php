<div class="choose_cat_wrap">
    <div class="content">
        <p class="title_label">Каталог</p>
        <h2 class="title_block">Выберите средство, которое подходит именно Вам</h2>
        <div class="preview_cards_wrap">
            @foreach($GoodCategories as $GoodCategory)
                <div style="background-image: url('{{$GoodCategory->getFirstMediaUrl('good_cat_pics')}}')"
                     class="preview_card">
                    <h3 class="title">{{$GoodCategory['title']}}</h3>
                    <p class="goods_amount">Наименований: {{\App\Models\Good::where('good_category_id', $GoodCategory['id'])->count() ?? 0}}</p>
                    <a href="{{route('goods_page')}}?good_category_chosen[0]={{$GoodCategory['id']}}" class="link-bg black">
                        В каталог
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 13L7 7L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            @endforeach
        </div>
        <a href="{{route('goods_page')}}" class="link-bg orange mobile_choose_cat">Подобрать</a>
    </div>
</div>
