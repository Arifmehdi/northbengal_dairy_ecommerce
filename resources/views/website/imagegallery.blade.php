@extends('frontend.layouts.master')

@section('title', 'Gallery - North Bengal Dairy')

@section('meta')
<meta name="description"
    content="Explore our gallery showcasing North Bengal Dairy's fresh products, moments, and videos.">
<meta name="keywords" content="North Bengal, gallery, dairy products, milk, butter, ghee, Bangladesh">
<meta property="og:title" content="Gallery - North Bengal Dairy">
<meta property="og:description"
    content="Take a look at our gallery to see the freshness and quality North Bengal Dairy brings to your home.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/about_img_02.png') }}">
<meta property="og:type" content="website">
@endsection

@section('content')
@php
$locale = app()->getLocale() ?? 'en';
@endphp

<div role="main" class="main mt-5" itemscope itemtype="https://schema.org/ImageGallery">

    <!-- Page Header -->
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container text-center">
            <h1 class="text-light font-weight-bold text-8">{{__('Photo')}} &nbsp;{{  __('Gallery')}}</h1>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="container">
        <ul class="breadcrumb breadcrumb-dark breadcrumb-sm px-0 py-2">
            <li><a href="{{ route('nb.home') }}">{{ __('Home') }}</a></li>
            <li class="active">{{__('Photo')}} &nbsp;{{  __('Gallery')}}</li>
        </ul>
    </div>

    <!-- Gallery Section -->
    <div class="container py-4">
        {{-- Images Section --}}
        @if($images->count() > 0)
        <h2 class="font-weight-bold mb-4">
            @if($locale === 'bn') ছবির গ্যালারি @else Photo Gallery @endif
        </h2>
        <div class="row mb-3">
            @foreach ($images as $image)
            <div class="col-md-4 mb-4">
                <a href="{{ asset('storage/galleries/' . $image->featured_image) }}" data-lightbox="gallery"
                    data-title="{{ $image->title }}">
                    <img src="{{ asset('storage/galleries/' . $image->featured_image) }}"
                        class="img-fluid img-thumbnail rounded-3 shadow-sm" alt="{{ $image->title }}">
                </a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection

@push('css')
<style>
.img-thumbnail {
    transition: transform .2s;
    border: 3px solid #f1f1f1;
}

.img-thumbnail:hover {
    transform: scale(1.05);
}

</style>

@endpush