<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-full rounded-lg shadow-lg">
            </div>
            <div>
                <h1 class="text-4xl font-bold mb-4">{{ $product->name }}</h1>
                <p class="text-2xl font-semibold text-gray-800 mb-4">${{ number_format($product->price, 2) }}</p>
                <div class="prose max-w-full mb-6">
                    {!! $product->description !!} <!-- Use {!! !!} if description contains HTML -->
                </div>

                <!-- Add to Cart Form -->
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full bg-gray-800 text-white py-3 px-6 rounded-md hover:bg-gray-700 transition-colors duration-300">
                        Add to Cart
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>