<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        ...
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        ...
        <!-- Scripts and Styles -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-light">
            @include('layouts.navigation') {{-- Assuming you have a nav --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>

@extends('layouts.app')

@section('content')
<div class="container py-5">

    {{-- Hero Section --}}
    <div class="row align-items-center bg-primary bg-gradient text-white rounded-4 shadow-lg mb-5 p-4 p-md-5">
        <div class="col-md-8">
            <h1 class="display-4 fw-bold mb-2">Welcome to Dalin's Store</h1>
            <p class="lead mb-3">Shop the latest trends and exclusive deals. Fast delivery &amp; secure checkout!</p>
            <a href="#products" class="btn btn-light btn-lg fw-semibold shadow-sm px-4">Shop Now</a>
        </div>
        <div class="col-md-4 text-center d-none d-md-block">
            <img src="/images/shopping-hero.png" alt="Shopping" class="img-fluid" style="max-height:180px;">
        </div>
    </div>

    {{-- Section Title --}}
    <h2 id="products" class="text-center fw-bold mb-4 text-primary-emphasis display-6">
        Our Collection
    </h2>

    {{-- Search and Sort --}}
    <div class="row mb-4 justify-content-between">
        <div class="col-md-6 mb-2 mb-md-0">
            <form method="GET" action="{{ route('products.index') }}" class="d-flex">
                <input type="text" name="search" value="{{ request('search') }}" class="form-control me-2" placeholder="Search products...">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
        <div class="col-md-3">
            <select name="sort" class="form-select">
                <option value="">Sort by</option>
                <option value="latest">Latest</option>
                <option value="price_low_high">Price: Low to High</option>
                <option value="price_high_low">Price: High to Low</option>
            </select>
        </div>
    </div>

    {{-- Product Grid --}}
    @if($products->isNotEmpty())
        <div class="row g-4">
            @foreach ($products as $product)
                <div class="col-12 col-sm-6 col-lg-3">
                    @include('products.partials.card', ['product' => $product])
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-5 d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    @else
        <p class="text-center text-secondary fs-4">
            Sorry, no products were found in this collection.
        </p>
    @endif

    {{-- Call to Action --}}
    <div class="mt-5 text-center">
        <h3 class="fw-bold mb-2 text-primary">Need Help?</h3>
        <p class="text-secondary mb-3">Contact our support team for order assistance or product questions.</p>
        <a href="/contact" class="btn btn-primary btn-lg px-4">Contact Us</a>
    </div>
</div>
@endsection