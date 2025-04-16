@props(['product'])

<a href="{{ route('products.show', $product) }}" class="bg-white p-4 shadow-md rounded-lg flex flex-col items-center text-center hover:shadow-lg transition-shadow duration-200">
    <div class="w-full h-48 flex items-center justify-center overflow-hidden bg-gray-100">
        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" class="h-full w-auto">
    </div>
    <h3 class="text-xl font-semibold mt-2">{{ $product->name }}</h3>
    <p class="text-gray-600 font-bold">
        {{ number_format($product->price, 2, ',', '.') }}€
        <span class="text-gray-500 text-sm">(IVA incluido)</span>
    </p>
</a>