@props(['product'])

<div class="group relative border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
    <a href="{{ route('products.show', $product->slug) }}">
        <div class="w-full h-80 bg-gray-200 aspect-w-1 aspect-h-1 overflow-hidden">
            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-full h-full object-center object-cover group-hover:opacity-75 transition-opacity">
        </div>
        <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">
                {{ $product->name }}
            </h3>
            <p class="mt-2 text-xl font-bold text-gray-900">${{ number_format($product->price, 2) }}</p>
        </div>
    </a>
</div>