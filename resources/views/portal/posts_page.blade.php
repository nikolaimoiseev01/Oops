@extends('layouts.portal')

@section('title')Лаборатория@endsection

@section('content')
    <div class="posts_page_wrap">
        <div class="content bread_wrap">
            <a href="{{route('home')}}">
                Главная
            </a>
            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2" fill="#212121"/>
            </svg>
            <p>Лаборатория</p>
        </div>

        <x-posts  title="Полезные лайфхаки и статьи"/>
        <livewire:consultation-form/>
    </div>

@endsection
