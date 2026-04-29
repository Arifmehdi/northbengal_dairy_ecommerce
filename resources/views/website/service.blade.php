@extends('frontend.layouts.master')

@section('title', 'Our Services - North Bengal')

@section('meta')
<meta name="description" content="Explore North Bengal's premium services, including dairy production and more. Discover quality, reliability, and excellence.">
<meta name="keywords" content="services, dairy production, North Bengal, milk products, quality services">
<meta property="og:title" content="Our Services - North Bengal">
<meta property="og:description" content="Discover North Bengal's premium dairy services. Quality, reliability, and excellence in every product.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/services-banner.jpg') }}">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
@endsection

@section('content')
<div role="main" class="main" itemscope itemtype="https://schema.org/Service">

    <!-- Page Header -->
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md lazy-bg"
        data-bg="https://via.placeholder.com/1920x400/0088cc/FFFFFF?text=Our+Services"
        style="background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-light font-weight-bold text-8" itemprop="name">Our Services</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="container">
        <ul class="breadcrumb breadcrumb-dark breadcrumb-sm px-0 py-2">
            <li><a href="{{ route('nb.home') }}">Home</a></li>
            <li class="active">Our Services</li>
        </ul>
    </div>

    <!-- Services List -->
    <div class="container py-4">
        <div class="row">
            @foreach($services as $service)
                <div class="col-md-6 col-lg-4 mb-4" itemscope itemtype="https://schema.org/Service">
                    <div class="card border-0 shadow-sm h-100">
                        <img 
                            src="{{ asset('uslive/cpmd/'. $service->image) }}" 
                            class="card-img-top" 
                            alt="{{ $service->name_en }} - North Bengal Services" 
                            loading="lazy"
                            itemprop="image"
                        >
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold" itemprop="name">{{ $service->name_en }}</h4>
                            <p class="card-text" itemprop="description">{{ $service->excerpt_en }}</p>
                            <a href="#" class="btn btn-primary" itemprop="url">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>

<!-- Lazy Background Loader -->
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
@endsection
