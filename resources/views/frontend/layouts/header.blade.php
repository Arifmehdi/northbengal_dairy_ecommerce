<style>
/* ===============================
   HEADER FIX STYLES
================================*/
#header {
    position: relative;
    overflow: visible !important;
}
.header-body {
    position: relative;
}
.header-body::after {
    content: "";
    position: absolute;
    bottom: -54px;
    left: 0;
    right: 0;
    height: 100px;
    background-image: url('{{ asset('frontend/assets/img/header.webp') }}');
    background-repeat: repeat-x;
    background-size: 400px 100%;
    background-position: bottom;
    pointer-events: none;
    z-index: -1;
}

/* ---- Logo ---- */
.logo-img {
    height: 100px;
    width: auto;
    transition: all 0.3s ease;
}
.logo-text {
    font-size: clamp(16px, 1.2vw, 24px);
    font-weight: bold;
    color: #0A53A3;
    margin-left: 10px;
    white-space: nowrap;
}

/* ---- Header layout ---- */
.header-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: nowrap;
}

/* ---- Navigation ---- */
.header-nav-main nav ul {
    display: flex;
    align-items: center;
    flex-wrap: nowrap;
    gap: 10px;
    transition: all 0.3s ease;
}
.nav-link {
    font-size: clamp(14px, 1vw, 18px);
    font-weight: 500;
    color: #333;
    white-space: nowrap;
    padding: 8px 12px !important;
}
.nav-link:hover,
.nav-link.active {
    color: #007bff;
}

/* ---- Responsive adjustments ---- */
@media (max-width: 1320px) {
    .logo-img {
        height: 85px;
    }
    .logo-text {
        font-size: 18px;
    }
    .nav-link {
        font-size: 15px;
        padding: 8px 10px !important;
    }
    .header-nav-main nav ul {
        gap: 8px;
    }
}

/* Special fix for 992px-1008px range */
@media (max-width: 1272px) and (min-width: 993px) {
    .logo-img {
        height: 80px;
    }
    .logo-text {
        font-size: 18px;
    }
    .nav-link {
        font-size: 13px;
        padding: 6px 8px !important;
    }
    .header-nav-main nav ul {
        gap: 5px;
    }
    .header-container {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }
}

/* ===============================
   MOBILE MENU FIXES
================================*/
@media (max-width: 992px) {
    .header-nav-main nav {
        width: 100%;
    }
    .logo-img {
        height: 60px;
    }
    .logo-text {
        font-size: 15px;
    }
    .header-row {
        flex-wrap: wrap;
    }
    .header-btn-collapse-nav {
        display: block;
    }
    
    /* Mobile menu alignment fix */
    .header-nav-main nav ul {
        text-align: left !important;
        justify-content: flex-start !important;
        align-items: flex-start !important;
        padding-left: 0;
        flex-direction: column;
        gap: 0;
    }
    
    .header-nav-main nav ul li {
        width: 100%;
        text-align: left;
        border-bottom: 1px solid rgba(0,0,0,0.1);
    }
    
    .header-nav-main nav ul li a {
        justify-content: flex-start !important;
        padding-left: 0 !important;
        padding: 12px 15px !important;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    /* Mobile dropdown specific styles */
    .header-nav-main .dropdown {
        position: relative;
    }
    
    .header-nav-main .dropdown-menu {
        position: static !important;
        width: 100% !important;
        transform: none !important;
        margin-top: 0 !important;
        border: none !important;
        box-shadow: none !important;
        background-color: #f8f9fa;
        padding: 0 !important;
        transition: all 0.3s ease-in-out;
        display: block !important;
        opacity: 0;
        visibility: hidden;
        height: 0;
        overflow: hidden;
    }
    
    .header-nav-main .dropdown.show .dropdown-menu {
        opacity: 1;
        visibility: visible;
        height: auto;
        padding: 0.5rem 0 !important;
        border-top: 1px solid rgba(0,0,0,0.1) !important;
    }
    
    .header-nav-main .dropdown-item {
        padding: 10px 30px !important;
        width: 100%;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    
    .header-nav-main .dropdown-item:last-child {
        border-bottom: none;
    }
    
    /* Mobile dropdown toggle arrow */
    .header-nav-main .dropdown-toggle::after {
        float: right;
        margin-top: 5px;
        transition: transform 0.3s ease;
    }
    
    .header-nav-main .dropdown.show .dropdown-toggle::after {
        transform: rotate(180deg);
    }
    
    /* Language dropdown specific fixes */
    .header-nav-main .dropdown .dropdown-menu.dropdown-menu-end {
        left: 0 !important;
        right: auto !important;
    }
}

/* ===============================
   DROPDOWN SMOOTH ANIMATION FOR ALL SCREENS
================================*/
.header-nav-main .dropdown-menu {
    transition: all 0.3s ease-in-out;
}

/* Prevent Bootstrap's default toggle */
.header-nav-main .collapse:not(.show) {
    display: none;
}

.header-nav-main .collapsing {
    transition: height 0.35s ease;
}
</style>
<style>
    /* ===============================
   HEADER SEARCH MODAL
================================*/
.header-search-modal {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.6);
    z-index: 9999;
    display: none;
    align-items: center;
    justify-content: center;
}

.header-search-modal.show {
    display: flex;
}

.header-search-modal .search-box {
    background: #fff;
    padding: 25px;
    border-radius: 10px;
    width: 90%;
    max-width: 400px;
    position: relative;
}

.header-search-modal .search-box input {
    height: 50px;
    font-size: 16px;
}

.header-search-modal .close-search {
    position: absolute;
    top: 8px;
    right: 12px;
    border: none;
    background: none;
    font-size: 28px;
    cursor: pointer;
}

</style>
<style>
    /* ===============================
   STICKY TOP BAR
================================*/
.topbar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 10000; /* must be higher than header */
    background: #09519F;
    color: #fff;
    font-size: 13px;
}

.topbar .topbar-container {
    max-width: 1320px;
    margin: 0 auto;
    padding: 6px 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.topbar-left {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.topbar-left span {
    display: flex;
    align-items: center;
    gap: 6px;
    opacity: 0.95;
}

.topbar-right {
    display: flex;
    align-items: center;
    gap: 12px;
}

.topbar-right a {
    color: #fff;
    font-size: 14px;
    transition: 0.2s;
}

.topbar-right a:hover {
    opacity: 0.8;
}

/* Hide address on small screen */
@media (max-width: 768px) {
    .topbar-left span.address {
        display: none;
    }
}

body {
    padding-top: 25px; /* height of topbar */
}

#header {
    margin-top: 25px;
}



</style>
<!-- top bar  -->
 <!-- ===============================
     TOP BAR
================================= -->
<div class="topbar">
    <div class="topbar-container">
        
        <!-- Left: Address & Phone -->
        <div class="topbar-left">
            <span class="address">
                <i class="fas fa-map-marker-alt"></i>
                {{ $ws->contact_address }}
            </span>
            <span>
                <i class="fas fa-phone-alt"></i>
                <a href="tel:{{ $ws->phone ?? '01700000000' }}" style="color:#fff; text-decoration:none;">
                    {{ $ws->contact_mobile  }}
                </a>
            </span>
        </div>

        <!-- Right: Social Icons -->
        <div class="topbar-right">
            <a href="{{ $ws->fb_url ?? '#' }}" target="_blank" title="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="{{ $ws->youtube_url ?? '#' }}" target="_blank" title="YouTube">
                <i class="fab fa-youtube"></i>
            </a>
        </div>

    </div>
</div>

<!-- top bar  -->
<header id="header" class="header-effect-shrink position-relative"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 120}">

    <div class="header-body border-top-0"
        style="background-color: #ffffff; background-image: url('{{ asset('frontend/assets/img/milk-drop-pattern.webp') }}'); background-repeat: repeat-x; background-size: 400px 100%; background-position: bottom;">

        <div class="header-container container-row px-3 px-md-4 px-lg-5" style="height:175px !important;">
            <div class="header-row align-items-center justify-content-between flex-nowrap">

                <!-- Left: Logo & Text -->
                <div class="header-column flex-grow-1 flex-shrink-1">
                    <div class="header-row">
                        <div class="header-logo d-flex align-items-center flex-nowrap">
                            <a href="{{ route('nb.home') }}" class="d-flex align-items-center text-decoration-none">
                                <img alt="{{ $ws->website_title ?? '' }}"
                                    src="{{ route('imagecache', ['template'=>'original','filename' => $ws->logo_alt()]) }}"
                                    class="logo-img">
                                <span class="logo-text ms-2">{{ __('general.logo_name') }}</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Navigation -->
                <div class="header-column justify-content-end flex-shrink-0">
                    <div class="header-row">
                        <div class="header-nav order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse navbar-collapse">
                                    <ul class="nav nav-pills d-flex align-items-center flex-nowrap mb-0" id="mainNav">
                                        <li><a class="nav-link {{ request()->routeIs('nb.home') ? 'active' : ''}}" href="{{ route('nb.home')}}">{{ __('Home') }}</a></li>
                                        <li><a class="nav-link {{ request()->routeIs('shop.shasthoseba') ? 'active' : ''}}" href="{{ route('shop.shasthoseba') }}">{{ __('Products') }}</a></li>

                                        <!-- About US -->
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ __('About Us') }}</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('mdMessage') }}">{{ __('MD Message') }}</a></li>
                                                <li><a class="dropdown-item" href="{{ route('testimonial') }}">{{ __('Testimonial') }}</a></li>
                                            </ul>
                                        </li>
                                        <!-- Gallery -->
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ __('Gallery') }}</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('image.galleries') }}">{{ __('Photo Gallery') }}</a></li>
                                                <li><a class="dropdown-item" href="{{ route('video.galleries') }}">{{ __('Video Gallery') }}</a></li>
                                            </ul>
                                        </li>

                                        <!-- Qurbani -->
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ __('Qurbani') }}</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('qurbani.occation') }}">{{ __('Personal Qurbani') }}</a></li>
                                                <li><a class="dropdown-item" href="{{ route('qurbani.regular') }}">{{ __('Shared Qurbani') }}</a></li>
                                            </ul>
                                        </li>

                                        <li><a class="nav-link {{ request()->routeIs('contact') ? 'active' : ''}}" href="{{ route('contact') }}">{{ __('Contact') }}</a></li>

                                        <!-- Auth -->
                                        @if(Auth::check())
                                            @php $user = auth()->user(); @endphp
                                            <li class="dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="fa fa-user"></i> {{ $user->name }}</a>
                                                <ul class="dropdown-menu">
                                                    @if ($user->hasRole('admin'))
                                                        <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">{{ __('Admin Dashboard') }}</a></li>
                                                    @endif
                                                    <li><a class="dropdown-item" href="{{ route('user.dashboard') }}">{{ __('Member Dashboard') }}</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('logout') }}">{{ __('Logout') }}</a></li>
                                                </ul>
                                            </li>
                                        @else
                                            <li><a class="nav-link {{ request()->routeIs('login') ? 'active' : ''}}" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                        @endif

                                        <!-- Language -->
                                        <li class="dropdown">
                                            @php $locale = app()->getLocale() ?? 'bn'; @endphp
                                            <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" data-bs-toggle="dropdown">
                                                <i class="fa-solid fa-globe"></i> <span>{{__('Language')}}</span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item d-flex align-items-center gap-2 {{ $locale === 'en' ? 'active' : '' }}" href="{{ route('welcome.changeLanguage', ['lang' => 'en']) }}"><img src="https://flagcdn.com/w20/gb.png" width="20"> English</a></li>
                                                <li><a class="dropdown-item d-flex align-items-center gap-2 {{ $locale === 'bn' ? 'active' : '' }}" href="{{ route('welcome.changeLanguage', ['lang' => 'bn']) }}"><img src="https://flagcdn.com/w20/bd.png" width="20"> বাংলা</a></li>
                                            </ul>
                                        </li>

                                        <!-- Search Icon -->
                                        <li class="nav-item">
                                            <a href="javascript:void(0)" class="nav-link" id="openSearch">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>

                            <!-- Collapse Button -->
                            <button class="btn header-btn-collapse-nav d-lg-none ms-2" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<!-- search icon  modal  -->
 <!-- Search Modal -->
<div id="headerSearchModal" class="header-search-modal">
    <div class="search-box">
        <button type="button" class="close-search" id="closeSearch">&times;</button>

        <form action="{{ route('shop.shasthoseba') }}" method="GET">
            <input type="text" name="q" placeholder="{{__('Search products')}}..." class="form-control" autofocus>
            <button type="submit" class="btn btn-primary mt-3 w-100">
                <i class="fas fa-search"></i> {{__('Search')}}
            </button>
        </form>
    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function () {
    // Mobile menu dropdown functionality
    const dropdownToggles = document.querySelectorAll('.header-nav-main .dropdown-toggle');
    const isMobile = window.innerWidth <= 992;
    
    if (isMobile) {
        dropdownToggles.forEach(toggle => {
            // Remove Bootstrap's default behavior on mobile
            toggle.setAttribute('data-bs-toggle', '');
            
            toggle.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                
                const parent = this.closest('.dropdown');
                const menu = parent.querySelector('.dropdown-menu');
                
                // Toggle the dropdown
                parent.classList.toggle('show');
                menu.classList.toggle('show');
                
                // Close other dropdowns
                document.querySelectorAll('.header-nav-main .dropdown.show').forEach(open => {
                    if (open !== parent) {
                        open.classList.remove('show');
                        open.querySelector('.dropdown-menu').classList.remove('show');
                    }
                });
            });
        });
        
        // Close dropdowns when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.header-nav-main .dropdown')) {
                document.querySelectorAll('.header-nav-main .dropdown.show').forEach(open => {
                    open.classList.remove('show');
                    open.querySelector('.dropdown-menu').classList.remove('show');
                });
            }
        });
    }
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const openBtn = document.getElementById('openSearch');
    const closeBtn = document.getElementById('closeSearch');
    const modal = document.getElementById('headerSearchModal');

    if (openBtn) {
        openBtn.addEventListener('click', function () {
            modal.classList.add('show');
        });
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', function () {
            modal.classList.remove('show');
        });
    }

    // Close on outside click
    modal.addEventListener('click', function (e) {
        if (e.target === modal) {
            modal.classList.remove('show');
        }
    });

});
</script>
