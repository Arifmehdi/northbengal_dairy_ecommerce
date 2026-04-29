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
            <h1 class="text-light font-weight-bold text-8" itemprop="headline">Occational Qurbani</h1>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="container">
        <ul class="breadcrumb breadcrumb-dark breadcrumb-sm px-0 py-2">
            <li><a href="{{ route('nb.home') }}">Home</a></li>
            <li class="active">Occational Qurbani</li>
        </ul>
    </div>

    @php
    $items = [
    (object)['id' => 1, 'name_en' => 'Cow 1', 'fi' =>
    'https://media.istockphoto.com/id/496397741/photo/typical-dutch-red-and-white-milk-cow.jpg?s=612x612&w=0&k=20&c=juTog_zRhJIQa0sOUcwk5WH1AM3PRxhlvsIm4dywzK8=',
    'price' => '50000', 'category_id' => 1],
    (object)['id' => 2, 'name_en' => 'Cow 2', 'fi' =>
    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAp0e9ldXzVipJknS_2nxr5Z_qjROK7fgTz5YtSDgHnsDiGwK0VMVpmrDazuILzLvQm0k&usqp=CAU',
    'price' => '60000', 'category_id' => 2],
    (object)['id' => 3, 'name_en' => 'Cow 3', 'fi' =>
    'https://thumbs.dreamstime.com/b/cute-cow-dreamy-eyes-black-white-blue-sky-curious-gentle-looking-front-302368039.jpg',
    'price' => '70000', 'category_id' => 1],
    (object)['id' => 4, 'name_en' => 'Cow 4', 'fi' =>
    'https://media.istockphoto.com/id/1282514444/photo/cow-udder-large-and-full-and-with-horns-in-the-green-pasture-and-a-blue-sky.jpg?s=612x612&w=0&k=20&c=a2TuO1u4H4wKW7aSizBh7Df8CLA70MEPTcadLfc35bk=',
    'price' => '80000', 'category_id' => 3],
    ];
    $items = false
    @endphp
    @if($items)
    <!-- Contact Form Section -->
    <div class="container py-4">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills sort-source mb-4" data-sort-id="portfolio" data-option-key="filter"
                    data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                    <li class="nav-item active" data-option-value="*"><a class="nav-link active" href="#">Show All</a>
                    </li>
                    <li class="nav-item" data-option-value=".category-1"><a class="nav-link" href="#">Category 1</a>
                    </li>
                    <li class="nav-item" data-option-value=".category-2"><a class="nav-link" href="#">Category 2</a>
                    </li>
                    <li class="nav-item" data-option-value=".category-3"><a class="nav-link" href="#">Category 3</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sort-destination-loader sort-destination-loader-showing">
            <div class="row portfolio-list sort-destination" data-sort-id="portfolio">


                @foreach($items as $item)
                <div class="col-md-6 col-lg-3 mb-4 isotope-item category-{{ $item->category_id }}">
                    <div class="card">
                        {{--<img src="{{ asset('frontend/assets/img/northbengal/' . $item->fi) }}" class="card-img-top"
                        alt="{{ $item->name_en }}">--}}
                        <img src="{{ $item->fi }}" class="card-img-top" alt="{{ $item->name_en }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name_en }}</h5>
                            <p class="card-text">Price: {{ $item->price }}</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @else
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('frontend/assets/img/northbengal/red_cow.jpg') }}" class="img-fluid" alt="Qurbani">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">নর্থ বেঙ্গল ডেইরীর বিশেষ উদ্যোগ : <br>দেশি লাল ষাড় গরু লাইভ ওয়েটে বিক্রয়</h4>
                        <p class="card-text">
                            যদি ডিজিটাল স্কেল মেশিন দিয়ে ওজন করে কোরবানীর পশু কেনাবেচা করা হয় তাহলে ক্রেতা ও বিক্রেতা
                            উভয়ের জন্যই প্রতারনা, লোকসান, বিড়ম্বনা, ইত্যাদি পরিস্থিতি থেকে দূরে থাকা যায়।
                        </p>
                        <p class="card-text"><strong>আমাদের সুবিধাসমূহ:</strong></p>
                        <ul class="list-unstyled">
                            <li>✅ কোরবানীর জন্য আমাদের রয়েছে নিজস্ব কসাই ও কসাইখানা</li>
                            <li>✅ সম্পুর্ন এ্যানটিবায়োটিক, হরমোন, ব্যাথানাশক ইনজেকশন মুক্ত শতভাগ হালাল গরু ও খাসি</li>
                            <li>✅ পশু বুক করার জন্য সম্পুর্ন মূল্যের মাত্র ১০% মূল্য পরিশোধ করার সুযোগ</li>
                            <li>✅ গরু ও খাসি ক্রয়ের ক্ষেত্রে হাসিলের মূল্য পরিশোধের দরকার নেই</li>
                            <li>✅ বুক করে রাখা গরু কোরবানী দেয়ার আগ পর্যন্ত আমাদের খামারেই রেখে লালন-পালনের সুযোগ</li>
                            <li>✅ কুরবানীর আগ পর্যন্ত পশুর খাবার, গোসল, যত্ন, চিকিৎসা ইত্যাদি বিড়ম্বনা থেকে আপনি একদম
                                মুক্ত থাকবেন</li>
                            <li>✅ কোরবানীর দিন পশু কোরবানী বুকিং এর সিরিয়াল অনুযায়ী দেওয়া হবে</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif


</div>
@endsection