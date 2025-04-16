@extends('layouts.app')

@section('title', 'Trendfit - Encuentra tu estilo')

@section('content')
<section class="container mx-auto py-10">
    <h2 class="text-3xl font-bold text-center mb-6">Catálogo</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach($products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div>
</section>
@endsection