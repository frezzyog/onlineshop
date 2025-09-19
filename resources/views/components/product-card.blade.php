<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <a href="{{ route('products.show', $product->id) }}">
        <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}">
    </a>
    <div class="p-4">
        <h3 class="text-xl font-semibold mb-2">{{ $product->name }}</h3>
        <p class="text-gray-700 mb-2">{{ $product->description }}</p>
        <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-gray-900">${{ number_format($product->price, 2) }}</span>
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>