<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($products as $product)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                @if($product->image)
                                    <img src="{{ asset('storage/products/' . $product->image) }}" 
                                         alt="{{ $product->name }}" 
                                         class="w-full h-48 object-cover">
                                @endif
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold mb-2">{{ $product->name }}</h3>
                                    <p class="text-gray-600 text-sm mb-4">{{ $product->description }}</p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xl font-bold text-gray-900">
                                            ₹{{ number_format($product->price, 2) }}
                                        </span>
                                        <span class="text-sm text-gray-500">
                                            Stock: {{ $product->stock }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-6">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 