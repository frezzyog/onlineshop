<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Your Shopping Cart</h1>

        @if(count($cart) > 0)
            <!-- Cart items loop will go here -->
            @foreach($cart as $id => $details)
                <div class="flex items-center justify-between border-b py-4">
                    <div class="flex items-center">
                        <img src="{{ asset('storage/' . $details['image']) }}" alt="{{ $details['name'] }}" class="w-20 h-20 object-cover rounded mr-4">
                        <div>
                            <h2 class="font-semibold">{{ $details['name'] }}</h2>
                            <p class="text-gray-600">${{ $details['price'] }}</p>
                        </div>
                    </div>
                    <div>
                        <span>Quantity: {{ $details['quantity'] }}</span>
                        <!-- Update and Remove buttons will go here -->
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center text-gray-600">Your cart is empty.</p>
        @endif
    </div>
</x-app-layout>