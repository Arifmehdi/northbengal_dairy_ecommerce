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
            <a class="floating-cart-icon" href="{{ route('new.checkout') }}">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.6667 21H2.33333C1.59733 21 1 20.4027 1 19.6667V2.33333C1 1.59733 1.59733 1 2.33333 1H19.6667C20.4027 1 21 1.59733 21 2.33333V19.6667C21 20.4027 20.4027 21 19.6667 21Z" stroke="#0A52A3" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M15.6666 6.33334C15.6666 8.91068 13.5773 11 11 11C8.42265 11 6.33331 8.91068 6.33331 6.33334" stroke="#0A52A3" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="floating-cart-count">
                    <span class="cartItemsCount">{{ $count_data }}</span>
                </span>
            </a>
            
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

    <script>
		// Add to Cart
		$(document).on("click", ".addToCart", function () {
			let btn = $(this);
			let url = btn.data("url");
			let product_id = btn.data("product");
			let qty = parseInt(btn.closest(".productCartItem").find(".product_qty").val()) || 1;

			$.post(url, { product: product_id, qty: qty }, function (res) {
				if (res.status) {
					btn.closest(".productCartItem").html(res.productCartItem);
					$(".cartCount").text(res.cartCount);
					$(".cartItemsCount").text(res.cartItemsCount);
					$(".cartTotalPrice").text(res.cartTotal.toFixed(2) + " tk");
					$(".mobileCartTotalPrice").text("৳" + res.cartTotal.toFixed(2));

					Swal.fire({
						toast: true, icon: "success", title: res.message,
						position: "top", timer: 2000, showConfirmButton: false
					});
				}
			}).fail(() => {
				Swal.fire("Error", "Could not add to cart.", "error");
			});
		});

		// Update Cart Item
		$(document).on('click', '.updateCartItem', function (e) {
			e.preventDefault();

			let $btn = $(this);
			let cartId = $btn.data('cart');
			let url = $btn.data('url');
			let $wrapper = $btn.closest('.cart-action-wrapper');
			let qty = parseInt($wrapper.find('.cartQtyDisplay').text()) || 0;

			if ($btn.hasClass('plus')) { qty++; }
			else if ($btn.hasClass('minus')) { qty--; if (qty < 0) qty = 0; }

			$btn.prop('disabled', true);

			$.ajax({
				url: url,
				method: 'POST',
				data: { cart: cartId, new_qty: qty, _token: $('meta[name="csrf-token"]').attr('content') },
				success: function (res) {
					if (res.status) {
						if (qty === 0) {
							$wrapper.html(`
								<input type="hidden" name="product_qty" value="1" class="product_qty">
								<button class="btn btn-outline-primary w-100 btn-sm addToCart"
									data-url="${res.add_to_cart_url}" data-product="${res.product_id}">
									ADD TO CART
								</button>
							`);
							if ($(".cart-item").length === 0) { window.location.href = "/"; }
						} else {
							$wrapper.find('.cartQtyDisplay').text(qty);
							$wrapper.find('.plus').data('qty', qty);
							$wrapper.find('.minus').data('qty', qty);
							let $row = $btn.closest('.cart-item');
							let $priceBox = $row.find('.itemTotalPrice');
							if ($priceBox.length) {
								let unitPrice = parseFloat($priceBox.data('unit-price'));
								$priceBox.text("Tk. " + (unitPrice * qty).toFixed(2));
							}
							updateProductDetailsPrice(qty);
						}
						$('.cartCount').text(res.cartCount);
						$('.cartItemsCount').text(res.cartItemsCount);
						$(".subtotal").text("Tk. " + res.cartTotal.toFixed(2));
						$(".discount").text("-Tk. " + res.discount.toFixed(2));
						$(".payable").text("Tk. " + res.payable.toFixed(2));
						$(".mobileCartTotalPrice").text('৳' + res.payable.toFixed(2));
					}
				},
				error: function () { alert('Something went wrong! Please try again.'); },
				complete: function () { $btn.prop('disabled', false); }
			});
		});

		// Delete Cart Item
		$(document).on("click", ".deleteCartItem", function () {
			let btn = $(this);
			$.post(btn.data("url"), {}, function (res) {
				if (res.status) {
					$('.cart-item[data-cart="' + res.cart_id + '"]').remove();
					if ($(".cart-item").length === 0) { window.location.href = "/"; }
					$(".cartCount").text(res.cartCount);
					$(".cartItemsCount").text(res.cartItemsCount);
					$(".cartTotalPrice").text(res.cartTotal.toFixed(2) + " tk");
					$(".subtotal").text("Tk. " + res.cartTotal.toFixed(2)).attr('data-value', res.cartTotal);
					$(".discount").text("-Tk. " + res.discount.toFixed(2)).attr('data-value', res.discount);
					$(".payable").text("Tk. " + res.payable.toFixed(2));
					$(".mobileCartTotalPrice").text('৳' + res.payable.toFixed(2));
					Swal.fire({ toast: true, icon: "success", title: res.message, position: "top-end", timer: 2000, showConfirmButton: false });
				}
			}).fail(() => { Swal.fire("Error", "Cart item could not be removed.", "error"); });
		});

		// Update product details page price dynamically
		function updateProductDetailsPrice(qty) {
			let unitPriceBox = $('.unitPriceBox');
			let finalPriceBox = $('.finalPriceBox');
			if (finalPriceBox.length) {
				let unitFinal = parseFloat(finalPriceBox.data('unit-price'));
				finalPriceBox.text((unitFinal * qty).toFixed(2) + " ৳");
			}
			if (unitPriceBox.length) {
				let unitStrike = parseFloat(unitPriceBox.data('unit-price'));
				unitPriceBox.text((unitStrike * qty).toFixed(2) + " ৳");
			}
		}

		// Buy Now (not in cart) - adds to cart, shows qty +/- and Add to Cart on same row
		$(document).on("click", ".buyNow", function () {
			let btn = $(this);
			let url = btn.data("url");
			let product_id = btn.data("product");
			let qty = 1;

			$.post(url, { product: product_id, qty: qty }, function (res) {
				if (res.status) {
					btn.closest(".cart-action-wrapper").html(res.productCartItem);
					$(".cartCount").text(res.cartCount);
					$(".cartItemsCount").text(res.cartItemsCount);
					$(".cartTotalPrice").text(res.cartTotal.toFixed(2) + " tk");
					$(".mobileCartTotalPrice").text("৳" + res.cartTotal.toFixed(2));

					Swal.fire({
						toast: true, icon: "success", title: res.message,
						position: "top", timer: 2000, showConfirmButton: false
					});
				}
			}).fail(() => {
				Swal.fire("Error", "Could not add to cart.", "error");
			});
		});

		// Add to Cart (when in cart, same row)
		$(document).on("click", ".addToCartSameRow", function () {
			let btn = $(this);
			let url = btn.data("url");
			let product_id = btn.data("product");
			let qty = parseInt(btn.closest(".cart-action-wrapper").find(".product_qty").val()) || 1;

			$.post(url, { product: product_id, qty: qty }, function (res) {
				if (res.status) {
					btn.closest(".cart-action-wrapper").html(res.productCartItem);
					$(".cartCount").text(res.cartCount);
					$(".cartItemsCount").text(res.cartItemsCount);
					$(".cartTotalPrice").text(res.cartTotal.toFixed(2) + " tk");
					$(".mobileCartTotalPrice").text("৳" + res.cartTotal.toFixed(2));

					Swal.fire({
						toast: true, icon: "success", title: res.message,
						position: "top", timer: 2000, showConfirmButton: false
					});
				}
			}).fail(() => {
				Swal.fire("Error", "Could not add to cart.", "error");
			});
		});
    </script>

    @include('frontend.layouts.live_chat')
</body>
</html>