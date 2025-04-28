<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Order Information -->
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Order Information</h3>
                            <div class="space-y-2">
                                <p><span class="font-semibold">Order Number:</span> {{ $order->order_number }}</p>
                                <p><span class="font-semibold">Order Date:</span> {{ $order->created_at->format('Y-m-d H:i:s') }}</p>
                                <p><span class="font-semibold">Status:</span> 
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                        {{ $order->status === 'completed' ? 'bg-green-100 text-green-800' : 
                                           ($order->status === 'cancelled' ? 'bg-red-100 text-red-800' : 
                                            'bg-yellow-100 text-yellow-800') }}">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                </p>
                                <p><span class="font-semibold">Payment Status:</span> {{ ucfirst($order->payment_status) }}</p>
                            </div>
                        </div>

                        <!-- Shipping Information -->
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Shipping Information</h3>
                            <div class="space-y-2">
                                <p><span class="font-semibold">Shipping Address:</span> {{ $order->shipping_address }}</p>
                                <p><span class="font-semibold">Billing Address:</span> {{ $order->billing_address }}</p>
                                <p><span class="font-semibold">Phone Number:</span> {{ $order->phone_number }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Order Items -->
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold mb-4">Order Items</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Product
                                        </th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Price
                                        </th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Quantity
                                        </th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Total
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->items as $item)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                                                {{ $item->product->name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                                                ₹{{ number_format($item->price, 2) }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                                                {{ $item->quantity }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                                                ₹{{ number_format($item->total, 2) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" class="px-6 py-4 text-right font-semibold">
                                            Total Amount:
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300 font-semibold">
                                            ₹{{ number_format($order->total_amount, 2) }}
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    @if($order->notes)
                        <div class="mt-8">
                            <h3 class="text-lg font-semibold mb-4">Order Notes</h3>
                            <p class="text-gray-600">{{ $order->notes }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 