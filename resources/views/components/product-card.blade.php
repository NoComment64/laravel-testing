<div class="border-2 border-blue-800 rounded-xl p-4 shadow-lg bg-white">
    <h2 class="text-blue-700 text-xl font-bold mb-4">
        {{ $product->name }}
    </h2>

    <h3 class="text-lg font-bold mb-4">
        {{ $product->title }}
    </h3>

    <p class="text-xl">
        £{{ number_format($product->price / 100, 2) }}
    </p>
</div>