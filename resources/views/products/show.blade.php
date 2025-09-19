<x-app-layout>
    <div class="container mx-auto py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="product-image">
                <img class="w-full rounded-lg shadow-lg" src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}">
            </div>
            <div class="product-details">
                <h1 class="text-3xl font-bold mb-4">{{ $product->name }}</h1>
                <p class="text-2xl font-semibold text-gray-900 mb-4">${{ number_format($product->price, 2) }}</p>
                <p class="text-gray-700 mb-6">{{ $product->description }}</p>

                <form action="{{ route('cart.add', $product->id) }}" method="POST" class="flex items-center space-x-4">
                    @csrf
                    <div class="flex items-center border border-gray-300 rounded-md">
                        <input type="number" name="quantity" value="1" min="1" class="w-16 text-center border-none focus:outline-none" />
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-md">
                        Add to Cart
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>