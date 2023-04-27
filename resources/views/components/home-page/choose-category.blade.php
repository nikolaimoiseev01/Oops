<div class="choose_cat_wrap">
    <p class="title_label">Каталог</p>
    <h2 class="title">Выберите средство, которое подходит именно Вам</h2>

    <div class="good_cats_wrap">
        @foreach($GoodCategories as $GoodCategory)
            <div style="background-image: {{$GoodCategory->getFirstMediaUrl('good_cat_pic')}}" class="good_cat_wrap">
                <p class="title">{{$GoodCategory['title']}}</p>
                <p class="goods_amount">4 наименования</p>
                <a href="" class="link-bg">В каталог</a>
            </div>
        @endforeach
    </div>
</div>
