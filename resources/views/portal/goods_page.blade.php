@extends('layouts.portal')

@section('title')Где купить@endsection

@section('content')
    <div class="goods_page_wrap">
        <div class="content bread_wrap">
            <a href="{{route('home')}}">
                Главная
            </a>
            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2" fill="#212121"/>
            </svg>
            <p>Каталог</p>
        </div>

        <div class="content cover_wrap">
            <h2>Подберите свое средство OOPS!</h2>
            <p>
                В составе продукции применяются компоненты собственного производства, имеющие всего несколько аналогов в мире (аналогов в России нет). Основное их преимущество – эффективность в отношении любых микроорганизмов и безопасность.
            </p>
        </div>

        <livewire:goods/>
    </div>

@endsection
