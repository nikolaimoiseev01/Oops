@extends('layouts.portal')

@section('title')Главная@endsection

@section('content')
    <x-home-page.welcome-slider/>
    <x-home-page.why-us/>
    <x-home-page.choose-category/>
    <x-home-page.where-to-buy/>
    <x-posts  title="Полезные лайфхаки и статьи"/>
    <livewire:consultation-form/>
@endsection
