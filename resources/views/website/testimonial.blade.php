@extends('frontend.layouts.master')

@section('title', 'Our Clients Say - North Bengal')

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
                   <span style="word-spacing: 10px">ক্লায়েন্টদের মতামত</span>

                @else
                    <span style="word-spacing: 10px">Our Client's Say </span>
                @endif    
            </h1>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="container">
        <ul class="breadcrumb breadcrumb-dark breadcrumb-sm px-0 py-2">
            <li><a href="{{ route('nb.home') }}"> {{__('Home')}}</a></li>
            <li class="active">{{ __('Testimonial') }}</li>
        </ul>
    </div>

<style>
    .testimonial-card {
        display: flex;
        flex-direction: column; /* stack vertically */
        align-items: center;    /* center horizontally */
        text-align: center;
        padding: 1rem;
    }

    .testimonial-image-container {
        width: 80px;
        height: 80px;
        margin-bottom: 10px;  /* space between image and text */
        flex-shrink: 0;
    }

    .testimonial-image-container img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #007bff;
    }

    .testimonial-text {
        font-style: italic;
        line-height: 1.4;
        margin-bottom: 5px;
    }

    .testimonial-author {
        font-weight: bold;
        margin: 0;
    }
</style>

<section class="section bg-color-light-scale-1 py-4 mt-5" itemscope itemtype="https://schema.org/Review">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="font-weight-bold text-8">
                @if($locale === 'bn')
                    <span style="word-spacing: 10px"> আমাদের ক্লায়েন্টদের মতামত</span>
                @else
                   <span style="word-spacing: 10px"> What Our Client's Say </span>
                @endif
            </h2>
        </div>

<div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mb-2"
     data-plugin-options='{"items": 1, "margin": 10, "loop": true, "nav": true, "dots": true, "autoplay": true, "responsive": {"0": {"items": 1}, "768": {"items": 2}, "992": {"items": 3}}}'>

    @foreach($testimonials as $testimonial)
        <div class="item" itemprop="review" itemscope itemtype="https://schema.org/Review">
            <div class="card border-0 shadow-sm h-100 testimonial-card">

                <!-- Image on top -->
                @php
                    $testimonialImage = $testimonial->image 
                        ? Storage::disk('public')->url($testimonial->image)
                        : asset('frontend/assets/img/northbengal/default_user.png');
                @endphp
                <div class="testimonial-image-container">
                    <img src="{{ $testimonialImage }}" 
                         alt="{{ $locale === 'bn' ? $testimonial->name_bn : $testimonial->name_en }}"
                         class="testimonial-img">
                </div>

                <!-- Text -->
                <p class="testimonial-text" itemprop="reviewBody">
                    "{!! $locale === 'bn' ? $testimonial->text_bn : $testimonial->text_en !!}"
                </p>
                <h5 class="testimonial-author">
                    {{ $locale === 'bn' ? $testimonial->name_bn : $testimonial->name_en }}
                </h5>

            </div>
        </div>
    @endforeach

</div>
    </div>
</section>


</div>

@endsection

@push('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Find all carousels on the page
    const carousels = document.querySelectorAll('.owl-carousel');

    carousels.forEach(function(carousel) {
        // Wait a bit to ensure Owl Carousel has initialized
        setTimeout(() => {
            // Pause autoplay when mouse enters
            carousel.addEventListener('mouseenter', function() {
                // Trigger Owl's stop event
                $(carousel).trigger('stop.owl.autoplay');
            });

            // Resume autoplay when mouse leaves
            carousel.addEventListener('mouseleave', function() {
                // Resume Owl autoplay (3s interval)
                $(carousel).trigger('play.owl.autoplay', [3000]);
            });
        }, 1000);
    });
});
</script>
@endpush


