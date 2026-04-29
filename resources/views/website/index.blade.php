@extends('frontend.layouts.master')

@section('title', 'Home - North Bengal')

@section('meta')
<meta name="description" content="North Bengal offers premium dairy products, latest news, and world-class services. Explore our departments and services with ease.">
<meta name="keywords" content="North Bengal, dairy products, latest news, services, departments, quality dairy">
<meta property="og:title" content="Home - North Bengal">
<meta property="og:description" content="Discover North Bengal’s quality dairy products, latest news, and world-class services.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/home-banner.png') }}">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
@endsection

@section('content')
<div role="main" class="main mt-5" itemscope itemtype="https://schema.org/WebPage">

        <!-- Banner Slider -->
        <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mb-2"
            data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': true, 'dots': true, 'autoplay': true, 'autoplayTimeout': 2000, 'lazyLoad': true}">
            @foreach($sliders as $slider)
                <div>
                    <div class="img-thumbnail border-0 p-0 d-block">
                        <a  href="#">
                            <img 
                                class="img-fluid border-radius-0 owl-lazy" 
                                data-src="{{ asset('uslive/original/' . $slider->featured_image) }}" 
                                alt="{{ $slider->title }}" 
                                loading="lazy"
                            >
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Categories Section -->
        <section class="section my-0" itemprop="mainContentOfPage">
            <div class="container">
                <div class="text-center mb-4">
                    <h2 class="fw-bold display-6 text-primary">{{ __('Categories') }}</h2>
                </div>

                <div class="owl-carousel owl-theme"
                    data-plugin-options='{
                        "items": 5,
                        "margin": 20,
                        "loop": true,
                        "autoplay": true,
                        "autoplayTimeout": 2500,
                        "dots": false,
                        "nav": false,
                        "responsive": {
                            "0": {"items": 2},
                            "576": {"items": 3},
                            "768": {"items": 4},
                            "992": {"items": 5}
                        }
                    }'>

                    @foreach($categories as $category)
                        <div class="item text-center">
                            <a href="{{ route('productCategory', $category->slug) }}" class="text-decoration-none d-block">
                                <img 
                                    alt="{{ session('locale') === 'bn' ? $category->name_bn : $category->name_en }}" 
                                    src="{{ $category->image ? asset('storage/product_categories_images/' . $category->image) : asset('frontend/assets/img/default.png') }}" 
                                    style="
                                        height: 130px; 
                                        width: 130px; 
                                        border-radius: 50%; 
                                        object-fit: contain; 
                                        margin: 0 auto; 
                                        display: block;
                                        background-color: #f8f9fa;
                                        border: 2px solid #eee;
                                        padding: 5px;
                                    "
                                    loading="lazy"
                                />

                                <h5 class="fw-semibold mt-3 mb-0 text-dark">
                                    {{ session('locale') === 'bn' ? $category->name_bn : $category->name_en }}
                                </h5>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>


        <!-- Departments Section -->
        <section class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold display-5 mb-3 text-primary" itemprop="headline">{{ __('our_departments') }}</h2>
                    {{--<p class="text-muted fs-5">{{ __('department_message') }}</p>--}}
                </div>

                <div class="row g-4">
                    @foreach($departments as $department)
                        <div class="col-6 col-md-3">
                            <div class="card h-100 shadow-sm border-0 text-center p-4 appear-animation"
                                data-appear-animation="fadeInUp"
                                data-appear-animation-delay="300"
                                style="transition: all 0.3s ease; border-radius: 12px; background: white;"
                                onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.12)';"
                                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.08)';">
                                
                                <div class="mb-4">
                                    <img 
                                        src="{{ asset('uslive/original/' . $department->image) }}" 
                                        alt="{{ session('locale') === 'bn' ? $department->name_bn : $department->name_en }}" 
                                        class="img-fluid rounded" 
                                        loading="lazy"
                                        style="max-height: 120px; width: auto; object-fit: contain; border: 3px solid #f8f9fa;"
                                    />
                                </div>
                                
                                <h5 class="fw-bold mb-3 text-dark" style="font-size: 1.1rem; line-height: 1.3;">
                                    {{ session('locale') === 'bn' ? $department->name_bn : $department->name_en }}
                                </h5>
                                
                                <p class="text-muted mb-0 lh-base" style="font-size: 0.95rem; line-height: 1.5;">
                                    {{ session('locale') === 'bn' ? $department->excerpt_bn : $department->excerpt_en }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>



    <!-- About Us Section with Lazy Background -->
    <section class="section overlay overlay-show overlay-color-primary custom-overlay-opacity-40 border-0 m-0 lazy-bg"
        data-bg="{{ asset('uslive/pfimd/parallax.jpg') }}"
        style="background-size: cover; background-position: center;">
        <div class="container position-relative z-index-2 pt-5">
            <div class="row">
                <div class="col text-center">
                    {{--<h3 class="font-weight-bold text-color-light text-4-5 ls-0 mb-2">{{ __('product_summary') }}</h3>
                    <h2 class="font-weight-bold text-color-light text-8 line-height-3 line-height-md-1 mb-1" itemprop="headline">{{ __('About Us') }}</h2>--}}
                    
                    <h2 class="fw-bold display-5 mb-3 text-white" itemprop="headline">{{ __('About Us') }}</h2>
                </div>
            </div>

            <div class="row counters counters-sm text-6 pb-5 pt-4 mt-5">
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="50" data-append="+">50%</strong>
                        <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">{{ __('Product') }}</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="14000" data-append="+">14000+</strong>
                        <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">{{ __('customer') }}</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="50" data-append="+">50+</strong>
                        <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">{{ __('people_working') }}</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter">
                        <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="12" data-append="+">12+</strong>
                        <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">{{ __('years_of_experience') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Latest News -->
    {{--<section class="my-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h2 class="fw-bold display-6 text-primary mb-2" itemprop="headline">{{ __('latest_news') }}</h2>
                    <!-- <p class="text-muted">Be the first to read</p> -->
                </div>
            </div>

            <div class="row">
                @foreach($newses as $news)
                    <div class="col-md-4">
                        <a href="#" class="text-decoration-none">
                            <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-side-image-custom-highlight d-block">
                                <span class="thumb-info-side-image-wrapper">
                                    <img 
                                        alt="{{ $news->title }}" 
                                        class="img-fluid"
                                        src="{{ asset('uslive/cpmd/' . $news->feature_image) }}"
                                        loading="lazy"
                                    >
                                </span>
                                <span class="thumb-info-caption px-4 pb-3">
                                    <span class="thumb-info-caption-text p-xl">
                                        <h4 class="font-weight-semibold mb-1">{{ $news->title }}</h4>
                                        <p class="text-3">{{ Str::limit($news->excerpt, 130, '...') }}</p>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="row pb-4">
                <div class="col-lg-12 text-center">
                    <a href="#" class="btn btn-outline btn-quaternary custom-button text-uppercase font-weight-bold">View More</a>
                </div>
            </div>
        </div>
    </section>--}}
    @include('frontend.layouts.video')

</div>

@endsection



@push('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select all Owl Carousel instances on the page
    const carousels = document.querySelectorAll('.owl-carousel');

    carousels.forEach(function(carousel) {
        // Wait until Owl Carousel initializes
        const waitForInit = setInterval(function() {
            if (carousel.classList.contains('owl-loaded')) {
                clearInterval(waitForInit);

                // Add hover pause/resume
                carousel.addEventListener('mouseenter', function() {
                    $(carousel).trigger('stop.owl.autoplay');
                });

                carousel.addEventListener('mouseleave', function() {
                    // Resume with your desired autoplay timeout
                    $(carousel).trigger('play.owl.autoplay', [3000]); // hero slider 2s
                });
            }
        }, 100);
    });
});
</script>

<!-- Lazy Background Loader Script -->
<script>
    
document.addEventListener("DOMContentLoaded", function () {
    const lazyBg = document.querySelectorAll(".lazy-bg");
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bgSection = entry.target;
                const bgUrl = bgSection.getAttribute("data-bg");
                bgSection.style.backgroundImage = `url('${bgUrl}')`;
                observer.unobserve(bgSection);
            }
        });
    });
    lazyBg.forEach(section => observer.observe(section));
});
</script>
@endpush