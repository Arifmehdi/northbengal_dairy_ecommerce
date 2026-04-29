@extends('frontend.layouts.master')
@section('content')
<div role="main" class="main mt-5">
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-light font-weight-bold text-8">Login</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <ul class="breadcrumb breadcrumb-dark breadcrumb-sm px-0 py-2">
            <li><a href="{{ route('nb.home') }}">Home</a></li>
            <li class="active">Login</li>
        </ul>
    </div>

    <div class="container py-4">

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h4 class="font-weight-bold text-4 mb-3">Login to Your Account</h4>
                            <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                                    @csrf

                                <!-- Email -->
                                <div class="form-group mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control form-control-lg" reid="email" name="email" placeholder="Enter Email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="form-group mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter password">
                                    @error('password')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Remember Me -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                            <label class="form-check-label" for="rememberMe">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 text-end">
                                        <a href="#" class="text-decoration-none">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-modern w-100 text-uppercase rounded-0">Login</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
