@extends('layouts.app')

@section('title', 'Carrito de Compras')

@section('content')
<main class="flex-grow container mx-auto py-10">
    <h2 class="text-3xl font-semibold text-center mb-6">Carrito de Compras</h2>
    <div class="bg-white p-6 shadow-md rounded-lg">
        <table class="w-full text-left">
            <thead>
                <tr>
                    <th class="py-2 px-4">Imagen</th>
                    <th class="py-2 px-4">Producto</th>
                    <th class="py-2 px-4">Cantidad</th>
                    <th class="py-2 px-4">Precio</th>
                    <th class="py-2 px-4">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                <tr>
                    <td class="py-2 px-4">
                        <img src="{{ asset('storage/'.$item->product->image) }}" 
                             alt="{{ $item->product->name }}" 
                             class="w-16 h-16 object-cover rounded">
                    </td>
                    <td class="py-2 px-4">{{ $item->product->name }}</td>
                    <td class="py-2 px-4">{{ $item->quantity }}</td>
                    <td class="py-2 px-4">{{ number_format($item->total, 2, ',', '.') }}€</td>
                    <td class="py-2 px-4">
                        <form action="{{ route('cart.remove', $item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-200 ease-in-out">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex justify-between mt-6">
            <p class="font-semibold text-lg">Total: {{ number_format($total, 2, ',', '.') }}€</p>
            <a href="{{ route('checkout') }}" 
               class="bg-orange-500 text-white px-6 py-2 rounded hover:bg-orange-600 transition duration-200 ease-in-out">
                Proceder al Pago
            </a>
        </div>
    </div>
</main>
@endsection