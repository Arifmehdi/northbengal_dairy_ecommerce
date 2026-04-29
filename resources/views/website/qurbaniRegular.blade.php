@extends('frontend.layouts.ecommercemaster')

@section('title', 'Contact Us - North Bengal')

@section('meta')
<meta name="description"
    content="Contact North Bengal for inquiries, product details, or business queries. Get in touch via phone, email, or visit our office.">
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
            <h1 class="text-light font-weight-bold text-8" itemprop="headline">Regular Qurbani</h1>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="container">
        <ul class="breadcrumb breadcrumb-dark breadcrumb-sm px-0 py-2">
            <li><a href="{{ route('nb.home') }}">Home</a></li>
            <li class="active">Regular Qurbani</li>
        </ul>
    </div>

    <!-- Contact Form Section -->
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('frontend/assets/img/northbengal/red_cow.jpg') }}" class="img-fluid" alt="Qurbani">
                <img src="{{ asset('frontend/assets/img/northbengal/seven_sahred_meat.webp') }}" class="img-fluid mt-2"
                    alt="Qurbani">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">নর্থ বেঙ্গল ডেইরীর বিশেষ উদ্যোগ : 
                            <br>দেশি লাল ষাড় গরু লাইভ ওয়েটে বিক্রয়</h4>
                        <p class="card-text"><strong>৭ ভাগে কোরবানীর বিশেষ সুযোগ:</strong></p>
                        <p class="card-text">
                            সামর্থ্যবান কিংবা অসামর্থ্যবান সকলের জন্য ভাগে কোরবানী দেওয়া শরীয়া সম্মত।
                            সামর্থ্যবান ব্যক্তির পক্ষে একা কোরবানী করা বিভিন্ন কারণে উচিৎ হতে পারে, তবে শরিক/ভাগে
                            কোরবানীর বিধান উম্মতের অংশগ্রহণকে আল্লাহ ও রাসূল সুন্নাহতে স্পষ্টভাবে উল্লেখ করেছেন।
                        </p>
                        <p class="card-text">
                            -- হযরত জাবের বিন আবদুল্লাহ হতে বর্ণিত:
                            <br>
                            "আমরা হুদায়বিয়ারে উট সাতজনের পক্ষ থেকে এবং গরুও সাতজনের পক্ষ থেকে কোরবানী করেছিলাম।"
                        </p>
                        <p class="card-text">
                            নর্থ বেঙ্গল ডেইরীর উদ্যোগে পবিত্র ঈদউল আজহায় আপনিও ভাগে/শরিকানায় পশু কোরবানীতে অংশগ্রহণ করতে
                            পারেন।
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection