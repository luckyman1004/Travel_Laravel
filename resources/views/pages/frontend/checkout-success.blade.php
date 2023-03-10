<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('layouts.frontend.partials._styles')

    <title>Checkout Success</title>
</head>

<body>

    @include('layouts.frontend.partials._navbar-checkout')

    <!-- Content -->
    <main>
        <div class="section-success d-flex align-items-center pb-5 mt-2">
            <div class="col text-center">
                <img src="{{ asset('assets/frontend/images/mailbox.jpg') }}" alt="success checkout" class="img-fluid">
                <h1>Yay! Success</h1>
                <p>Thank you for completing the payment success</p>
                <p>we've sent you email for trip instruction <br> please read it as well</p>
                <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">
                    Home Page
                </a>
            </div>
        </div>
    </main>
    <!-- End Content -->

    @include('layouts.frontend.partials._scripts')
</body>

</html>
