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
            <h1 class="text-light font-weight-bold text-8">{{__('Video')}} &nbsp;{{  __('Gallery')}}</h1>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="container">
        <ul class="breadcrumb breadcrumb-dark breadcrumb-sm px-0 py-2">
            <li><a href="{{ route('nb.home') }}">{{ __('Home') }}</a></li>
            <li class="active">{{__('Video')}} &nbsp;{{ __('Gallery') }}</li>
        </ul>
    </div>

    <!-- Gallery Section -->
    <div class="container py-4">


        {{-- Videos Section --}}
        @if($videos->count() > 0)
        <h2 class="font-weight-bold mt-5 mb-3">
            @if($locale === 'bn') ভিডিও গ্যালারি @else Video Gallery @endif
        </h2>
        <div class="row mb-3">
            @foreach ($videos as $video)
            <div class="col-md-4 mb-4 position-relative">
                @php
                $videoExtension = pathinfo($video->featured_image, PATHINFO_EXTENSION);
                $videoMimeType = 'video/' . $videoExtension;
                @endphp

                {{-- Thumbnail with Play Icon --}}
                <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal{{ $video->id }}"
                    class="d-block position-relative">
                    <img src="{{ $video->thumbnail_image ? asset('storage/galleries/' . $video->thumbnail_image) : asset('frontend/assets/img/default-video.png') }}"
                        class="img-fluid img-thumbnail rounded-3 shadow-sm" alt="{{ $video->title }}">
                    <span class="play-icon">&#9658;</span> {{-- CSS will center it --}}
                </a>

                {{-- Video Modal --}}
                <div class="modal fade" id="videoModal{{ $video->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <video controls class="w-100 rounded">
                                    <source src="{{ asset('storage/galleries/' . $video->featured_image) }}"
                                        type="{{ $videoMimeType }}">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
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

video {
    border: 3px solid #f1f1f1;
    border-radius: 10px;
}

.video-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 0.8em;
    z-index: 10;
}

/* Play icon CSS */
.play-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 3rem;
    color: rgba(255, 255, 255, 0.8);
    pointer-events: none;
    z-index: 10;
}
</style>

@endpush