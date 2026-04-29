@extends('frontend.layouts.master')

@section('title', 'Contact Us - North Bengal')

@section('meta')
    <meta name="description" content="Contact North Bengal for inquiries, product details, or business queries. Get in touch via phone, email, or visit our office.">
    <meta name="keywords" content="contact north bengal, contact us, north bengal inquiries, phone, email, office location">
    <meta property="og:title" content="Contact Us - North Bengal">
    <meta property="og:description" content="Reach North Bengal for product inquiries or business partnerships.">
    <meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
    <meta property="og:type" content="website">
@endsection

@section('content')
<div role="main" class="main mt-5" itemscope itemtype="https://schema.org/ContactPage">

    <!-- Page Header -->
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md ">
        <div class="container text-center">
            <h1 class="text-light font-weight-bold text-8" itemprop="headline">{{ __('Contact Us') }}</h1>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="container">
        <ul class="breadcrumb breadcrumb-dark breadcrumb-sm px-0 py-2">
            <li><a href="{{ route('nb.home') }}">{{ __('Home') }}</a></li>
            <li class="active">{{ __('Contact Us') }}</li>
        </ul>
    </div>

    <!-- Contact Form Section -->
    <div class="container py-4">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="overflow-hidden mb-1">
                    <h4 class="pt-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{__('Get in Touch')}}</strong></h4>
                </div>
                <div class="overflow-hidden mb-4 pb-3">
                    <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500" itemprop="description">
                        {{ __('Get in Touch Message') }}
                    </p>
                </div>

                <form class="contact-form appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2">{{__('Full Name')}}</label>
                            <input type="text" name="name" maxlength="100" class="form-control text-3 h-auto py-2" required data-msg-required="Please enter your name." itemprop="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2">{{__('Email')}} </label>
                            <input type="email" name="email" maxlength="100" class="form-control text-3 h-auto py-2" required data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." itemprop="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2">{{__('Subject')}}</label>
                            <input type="text" name="subject" maxlength="255" class="form-control text-3 h-auto py-2" data-msg-required="Please enter the subject." value="{{ old('subject') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2">{{__('Message')}}</label>
                            <textarea name="message" rows="8" maxlength="5000" class="form-control text-3 h-auto py-2" required data-msg-required="Please enter your message." itemprop="description">{{ old('message') }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input type="submit" value="{{__('Send Message')}}" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>

            <!-- Contact Details -->
            <div class="col-lg-6">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                    <h4 class="pt-5 mb-2">{{__('Our')}} <strong>{{__('Office')}}</strong></h4>
                    <ul class="list list-icons list-icons-style-2 mt-2">
                        <li><i class="fas fa-map-marker-alt top-6"></i> 
                            <strong class="text-dark">{{__('Address')}}:</strong> 
                            <span itemprop="streetAddress">{{ $ws->contact_address }}</span>
                        </li>
                        <li><i class="fas fa-phone top-6"></i> 
                            <strong class="text-dark">{{ __('Hotline') }}:</strong>          
                            <a class="text-decoration-none" href="tel:{{$ws->contact_mobile}}" itemprop="telephone">
                                <strong class="font-weight-light">{{$ws->contact_mobile}}</strong>
                            </a>
                        </li>
                        <li><i class="fas fa-envelope top-6"></i> 
                            <strong class="text-dark">{{__('Email')}}:</strong> 
                            <a href="mailto:{{$ws->contact_email}}" itemprop="email">{{$ws->contact_email}}</a>
                        </li>
                    </ul>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">
                    <h4 class="pt-5 mb-2">{{__('Outlet')}}</h4>
                    <ul class="list list-icons list-dark mt-2">
                        <li><i class="fas fa-home top-6"></i> {{__('Outlet')}} {{__('general.num_01')}} : {{__('Outlet 01')}} </br> <strong>{{__('Mobile')}}:</strong> +8801756-868042</li>
                        <li><i class="fas fa-home top-6"></i> {{__('Outlet')}} {{__('general.num_02')}} : {{__('Outlet 02')}} </br> <strong>{{__('Mobile')}}:</strong> +8801334-927999</li>
                    </ul>
                </div>

                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">
                    <h4 class="pt-5 mb-2">{{__('Office Hour')}}</h4>
                    <ul class="list list-icons list-dark mt-2">
                        <li><i class="far fa-clock top-6"></i> {{ __('general.everyday')}} : {{__('Office Time')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
