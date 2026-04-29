@php
    $cart = $cart ?? \App\Models\Cart::where('product_id', $product->id)
        ->when(Auth::check(), fn($q) => $q->where('user_id', Auth::id()))
        ->when(!Auth::check(), fn($q) => $q->where('session_id', session('session_id')))
        ->first();
@endphp

<style>
    /* Mobile responsive styles for product cart item */
    @media (max-width: 768px) {
        .cart-action-wrapper .btn-xs {
            font-size: 10px !important;
            padding: 4px 8px !important;
        }
        .cart-action-wrapper .btn-sm {
            font-size: 12px !important;
            padding: 4px 10px !important;
        }
        .cart-action-wrapper .w-100 {
            width: 100% !important;
        }
        .cart-action-wrapper .d-flex.gap-1 {
            gap: 4px !important;
        }
    }
</style>

<div class="cart-action-wrapper"
    data-product="{{ $product->id }}"
    @if($cart) data-cart="{{ $cart->id }}" @endif>

    @if($cart)
        <!-- Quantity Control + Add to Cart (same line, small size) -->
        <div class="d-flex align-items-center gap-1 flex-nowrap">
            <div class="d-flex align-items-center gap-1 border rounded-pill bg-primary-subtle border-primary shadow-sm px-1 py-0">
                <button
                    class="minus btn btn-xs btn-primary rounded-circle updateCartItem"
                    style="width:16px; height:16px; font-size:8px; line-height:1; padding:0; display:flex; align-items:center; justify-content:center;"
                    data-url="{{ route('cartUpdateQty') }}"
                    data-cart="{{ $cart->id }}"
                    data-qty="{{ $cart->quantity }}"
                >−</button>

                <span class="fw-semibold px-1 cartQtyDisplay text-dark" style="font-size:10px;">{{ $cart->quantity }}</span>

                <button
                    class="plus btn btn-xs btn-primary rounded-circle updateCartItem"
                    style="width:16px; height:16px; font-size:8px; line-height:1; padding:0; display:flex; align-items:center; justify-content:center;"
                    data-url="{{ route('cartUpdateQty') }}"
                    data-cart="{{ $cart->id }}"
                    data-qty="{{ $cart->quantity }}"
                >+</button>
            </div>

            <button
                class="btn btn-outline-primary btn-xs addToCartSameRow"
                style="font-size:11px; padding:4px 9px;"
                data-url="{{ route('addToCart') }}"
                data-product="{{ $product->id }}"
            >Add to Cart</button>
        </div>
    @else
        <!-- Initial Buy Now Button (full width) -->
        <button
            class="btn btn-primary btn-sm w-100 buyNow"
            data-url="{{ route('addToCart') }}"
            data-product="{{ $product->id }}"
            data-checkout-url="{{ route('new.checkout') }}"
        >Buy Now</button>
    @endif
</div>
