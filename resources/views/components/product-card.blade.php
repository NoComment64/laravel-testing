<div 
    @if (($product->productType->type) === 'Book')
    <div class="p-2 m-2 rounded-lg shadow-lg bg-yellow-50 border-2 border-yellow-900 max-w-md">
@elseif (($product->productType->type) === 'CD')
    <div class="p-2 m-2 rounded-lg shadow-lg bg-green-50 border-2 border-green-900 max-w-md">
@elseif (($product->productType->type) === 'Game')
    <div class="p-2 m-2 rounded-lg shadow-lg bg-blue-50 border-2 border-blue-900 max-w-md">
@else
    <div class="p-2 m-2 rounded-lg shadow-lg bg-gray-50 border-2 border-black max-w-md">
@endif
    <h2 class="text-blue-700 text-xl font-bold mb-4">
        {{ $product->name }}
    </h2>

    <h3 class="text-lg font-bold mb-4">
        {{ $product->title }}
    </h3>

    <p class="text-xl">
        £{{ number_format($product->price / 100, 2) }}
    </p>
    {{ $product->productType->type }}
</div>