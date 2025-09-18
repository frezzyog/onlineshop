{{--
  File: resources/views/products/index.blade.php
  Description: A professional product listing page using Bootstrap 5.
--}}

<div class="container my-5">

    {{-- Section Header --}}
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bolder">Our Collection</h1>
        <p class="lead text-muted">Discover the best products selected just for you.</p>
    </div>

    {{-- Check if there are any products to display --}}
    @if($products->isNotEmpty())

        {{-- Product Grid --}}
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            
            {{-- Loop through each product --}}
            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        {{-- Product Image --}}
                        {{-- Replace with: <img src="{{ asset('storage/' . $product->image) }}" ... > --}}
                        <img src="https://via.placeholder.com/400x300.png?text=Product+Image" class="card-img-top" alt="{{ $product->name }}">

                        <div class="card-body d-flex flex-column">
                            {{-- Product Name --}}
                            <h5 class="card-title">
                                {{-- Link to the product's detail page --}}
                                <a href="#" class="text-dark text-decoration-none">{{ $product->name }}</a>
                            </h5>
                            
                            {{-- Product Description (optional) --}}
                            <p class="card-text text-muted small">
                                {{-- Using a placeholder text --}}
                                {{ Str::limit($product->description, 80) }}
                            </p>

                            {{-- Price and Add to Cart Button --}}
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <p class="card-text fw-bold fs-5 mb-0">${{ number_format($product->price, 2) }}</p>
                                <a href="#" class="btn btn-primary">
                                    <i class="bi bi-cart-plus"></i> Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>

        {{-- Pagination Links --}}
        <div class="d-flex justify-content-center mt-5">
            {{-- Laravel's links() method will automatically generate Bootstrap-compatible HTML
                 if you've configured it in your AppServiceProvider --}}
            {{ $products->links() }}
        </div>

    @else
        {{-- Message to show when no products are available --}}
        <div class="alert alert-info text-center" role="alert">
            <h4 class="alert-heading">No Products Found!</h4>
            <p>We're sorry, but there are currently no products available in this category. Please check back later.</p>
        </div>
    @endif

</div>