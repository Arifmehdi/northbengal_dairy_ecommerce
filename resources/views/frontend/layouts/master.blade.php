<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>	
    
    <!-- Meta Section -->
    @yield('meta')

    <!-- CSS -->
    @stack('css')

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" type="image/x-icon">
    <link rel="icon" href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" type="image/x-icon">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/theme-shop.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/demos/demo-medical.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/skins/skin-medical.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">

    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    <style>
        /* ================= Floating Icons Container ================= */
        .floating-icons-container {
            position: fixed;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 9999;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* ================= Floating Cart Icon ================= */
        .floating-cart-icon {
            position: relative;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffffff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
            transition: all 0.3s ease;
            border: 2px solid #0A52A3;
            text-decoration: none;
        }

        .floating-cart-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.35);
        }

        .floating-cart-icon i {
            font-size: 28px;
            color: #0A52A3;
        }

        .floating-cart-count {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #0A52A3;
            color: #fff;
            font-size: 12px;
            font-weight: bold;
            border-radius: 50%;
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* ================= Floating WhatsApp Icon ================= */
        .floating-message-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #25D366;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .floating-message-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .floating-message-icon img {
            width: 35px;
            height: 35px;
        }

        /* ================= Mobile Bottom Bar ================= */
        .mobile-bottom-bar {
            display: none;
        }

        @media (max-width: 768px) {
            /* Hide floating icons on mobile */
            /* .floating-icons-container {
                display: none !important;
            } */

            /* Show mobile bottom bar */
            .mobile-bottom-bar {
                display: flex !important;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 60px;
                align-items: center;
                justify-content: space-between;
                background: #ffffff;
                box-shadow: 0 -2px 8px rgba(0,0,0,0.1);
                padding: 0 10px;
                z-index: 9999;
            }

            .checkout-btn {
                background: #0A52A3;
                color: #fff;
                font-weight: bold;
                padding: 6px 36px;
                border-radius: 10px;
                text-decoration: none;
                display: flex;
                align-items: center;
                position: relative;
            }

            .checkout-price {
                position: absolute;
                top: -6px;
                right: -8px;
                background: red;
                color: #fff;
                font-size: 12px;
                padding: 2px 6px;
                border-radius: 50%;
            }

            .other-icons {
                display: flex;
                gap: 15px;
            }

            .other-icons a {
                color: #0A52A3;
                font-size: 24px;
            }
        }

        /* Hide the original floating cart icon */
        .envato-buy-redirect {
            display: none !important;
        }

        /* Form styling */
        .form-control:focus {
            border: 2px solid #1abc9c;
            box-shadow: 0 0 5px rgba(26, 188, 156, 0.5);
        }

        .form-select:focus {
            border: 2px solid #1abc9c;
            box-shadow: 0 0 5px rgba(26, 188, 156, 0.5);
        }

        textarea.form-control:focus {
            border: 2px solid #1abc9c;
            box-shadow: 0 0 5px rgba(26, 188, 156, 0.5);
        }

        /* Carousel navigation */
        .custom-owl-prev,
        .custom-owl-next {
            border-radius: 50%;
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <!-- Analytics -->
    @if(!empty($ws->google_analytics_code)){!! $ws->google_analytics_code !!}@endif
    @if(!empty($ws->google_search_console)){!! $ws->google_search_console !!}@endif
    @if(!empty($ws->facebook_pixel_code)){!! $ws->facebook_pixel_code !!}@endif

</head>

@php 
$count_info = \App\Models\Cart::when(Auth::check(), fn($q) => $q->where('user_id', Auth::id()))
    ->when(!Auth::check(), fn($q) => $q->where('session_id', session('session_id')));
$count_data = $count_info->count();
$totalCartPrice = \App\Models\Cart::totalCartPrice();
@endphp

<body>
    <div class="body">
        <!-- Floating Icons Container -->
        <div class="floating-icons-container">
            <!-- Floating Cart Icon -->
            {{--<a class="floating-cart-icon" href="{{ route('new.checkout') }}">
                <i class="fas fa-shopping-cart"></i>
                <span class="floating-cart-count">
                    <span class="cartItemsCount">{{ $count_data }}</span>
                </span>
            </a>--}}
            
            <!-- Floating WhatsApp Icon -->
            <a class="floating-message-icon" href="https://wa.me/8801334927985?text=Hello%20there!" target="_blank">
                <img src="{{ asset('frontend/assets/img/icons/whatsapp.svg') }}" alt="WhatsApp">
            </a>
        </div>

        <!-- Mobile Bottom Navigation Bar -->
        <div class="mobile-bottom-bar">
            <a href="{{ route('new.checkout') }}" class="checkout-btn">
                Checkout
                <span class="checkout-price">৳{{ $totalCartPrice }}</span>
                <i class="fas fa-shopping-cart ms-2"></i>
            </a>
            <div class="other-icons">
                <a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
                <a href="{{ url('/') }}"><i class="fas fa-th-large"></i></a>
                <a href="#"><i class="fas fa-search"></i></a>
            </div>
        </div>

        @include('frontend.layouts.header')
        
        <div role="main" class="main mt-5">
            @include('sweetalert::alert')
            @yield('content')
        </div>
        
        @include('frontend.layouts.footer')
    </div>

    <!-- Vendor Scripts -->
    <script src="{{ asset('frontend/assets/vendor/plugins/js/plugins.min.js') }}"></script>

    <!-- Theme Scripts -->
    <script src="{{ asset('frontend/assets/js/theme.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/demos/demo-medical.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/theme.init.js') }}"></script>

    <!-- External Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
    $(document).ready(function() {
        // Carousel functionality
        var owl = $('#ambulance-carousel');
        
        $('.custom-owl-next').click(function() {
            owl.trigger('next.owl.carousel');
        });
        
        $('.custom-owl-prev').click(function() {
            owl.trigger('prev.owl.carousel');
        });

        // Doctor selection functionality
        const departmentSelect = document.getElementById('department');
        const doctorSelect = document.getElementById('doctor');
        const doctorFeeInput = document.getElementById('doctor_fee');
        const chamberInput = document.getElementById('chambar_location');

        if (departmentSelect && doctorSelect) {
            // Filter doctors based on department
            departmentSelect.addEventListener('change', function() {
                const selectedDept = this.value;
                doctorSelect.value = '';
                doctorFeeInput.value = '';
                chamberInput.value = '';

                for (let option of doctorSelect.options) {
                    if (!option.value) continue;
                    if (option.dataset.department === selectedDept) {
                        option.style.display = 'block';
                    } else {
                        option.style.display = 'none';
                    }
                }
            });

            // Populate fee and chamber when doctor selected
            doctorSelect.addEventListener('change', function() {
                const selectedOption = this.selectedOptions[0];
                if (doctorFeeInput) doctorFeeInput.value = selectedOption.dataset.fee || '';
                if (chamberInput) chamberInput.value = selectedOption.dataset.chamber || '';
            });

            // Initialize
            departmentSelect.dispatchEvent(new Event('change'));
        }

        // CSRF Token setup for AJAX
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    </script>

    @stack('js')
    @include('frontend.layouts.live_chat')
</body>
</html>