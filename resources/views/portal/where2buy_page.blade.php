@extends('layouts.portal')

@section('title')Где купить@endsection

@section('content')
    <div class="where2buy_page_wrap">
        <div class="content bread_wrap">
            <a href="{{route('home')}}">
                Главная
            </a>
            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2" fill="#212121"/>
            </svg>
            <p>О бренде</p>
        </div>

        <x-home-page.where-to-buy/>

        <x-where2-buy-map/>

        <livewire:consultation-form/>
    </div>

@endsection
