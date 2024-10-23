@extends('layout')
@section('title')
    <title>{{ $seo_setting->seo_title }}</title>
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{{ $seo_setting->seo_description }}">
@endsection
@section('frontend-content')

    @include('home1.intro-banner')

    @include('home1.category')

    @include('home1.product')

    @include('home1.trending-products')

    @include('home1.counter')

    @include('home1.featured')

    @include('home1.template-section')

    @include('home1.mobile-download-banner')

    @include('home1.partner')

    @include('home1.blogs')

@endsection
