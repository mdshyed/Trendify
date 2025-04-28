@php
    $currency = 'INR';
    $symbol = '₹';
    $position = 'before';
    $decimal_separator = '.';
    $thousands_separator = ',';
    $decimal_places = 2;
    $conversion_rate = 75; // 1 USD = 75 INR
@endphp

@if(isset($price))
    @php
        // Convert price to INR
        $priceInRupees = $price * $conversion_rate;
        
        // Format the price
        $formatted = number_format(
            $priceInRupees,
            $decimal_places,
            $decimal_separator,
            $thousands_separator
        );
    @endphp
    <span class="price">
        @if($position === 'before')
            {{ $symbol }}{{ $formatted }}
        @else
            {{ $formatted }}{{ $symbol }}
        @endif
    </span>
@endif 