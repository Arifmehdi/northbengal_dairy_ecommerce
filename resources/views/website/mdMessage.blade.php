@extends('frontend.layouts.master')

@section('title', 'MD. Message - North Bengal')

@section('meta')
<meta name="description"
    content="Learn more about North Bengal — our mission, our values, and how we deliver fresh, quality products with reliable home delivery service.">
<meta name="keywords" content="North Bengal, about us, dairy products, home delivery, quality food, Bangladesh">
<meta property="og:title" content="About North Bengal - Fresh Quality Delivered">
<meta property="og:description"
    content="North Bengal is dedicated to delivering fresh, high-quality products across Bangladesh. Discover who we are and what drives us.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/about_img_02.png') }}">
<meta property="og:type" content="website">
@endsection

@section('content')
<div role="main" class="main mt-5" itemscope itemtype="https://schema.org/AboutPage">
    @php
        $locale = app()->getLocale() ?? 'en';
    @endphp

    <!-- Page Header -->
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container text-center">
            <h1 class="text-light font-weight-bold text-8" itemprop="headline">
                @if($locale === 'bn')
                    <span style="word-spacing: 10px">প্রধান নির্বাহী'র বার্তা</span>
                @else
                    <span style="word-spacing: 10px">Message From Managing Director</span>
                @endif
            </h1>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="container">
        <ul class="breadcrumb breadcrumb-dark breadcrumb-sm px-0 py-2">
            <li><a href="{{ route('nb.home') }}">{{ __('Home') }}</a></li>
            <li class="active">{{ __('MD Message') }}</li>
        </ul>
    </div>

    <!-- About Section -->
    <div class="container py-4">
        <div class="row align-items-start">

            <!-- Image (Top Right on Desktop, Top Center on Mobile) -->
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 d-flex justify-content-lg-end justify-content-center order-lg-2 order-1">
                @php
                    $imagePath = $wp->about_img
                        ? asset('storage/wp/' . $wp->about_img)
                        : asset('frontend/assets/img/northbengal/about_img_02.png');
                @endphp
                <img src="{{ $imagePath }}" 
                     alt="Managing Director - North Bengal" 
                     class="shadow-sm img-fluid"
                     style="width:250px; height:250px; object-fit:cover; border-radius:50%; border:5px solid #fff;">
            </div>

            <!-- Message -->
            <div class="col-lg-8 col-md-12 order-lg-1 order-2" itemprop="mainEntity" itemscope itemtype="https://schema.org/Organization">
                <h2 class="font-weight-bold text-8" itemprop="name">
                    @if($locale === 'bn')
                        <span style="word-spacing: 10px">প্রধান নির্বাহী'র বার্তা</span>
                    @else
                        <span style="word-spacing: 10px">Managing Director's Message</span>
                    @endif
                </h2>

                <p itemprop="description" class="mt-3">
                    @if($locale === 'bn')
                        {!! $wp->about_bn ?? ' ' !!}
                    @else
                        {!! $wp->about_en ?? ' ' !!}
                    @endif
                </p>
            </div>

        </div>
    </div>
</div>
@endsection
