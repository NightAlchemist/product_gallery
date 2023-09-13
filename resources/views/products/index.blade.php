@csrf
@extends('layouts.layout')
@section('title', 'Productos')
@section('content')
<section class="bg-white dark:bg-gray-900 mt-6">
    <div class="container px-6 py-20 mx-auto">
        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-4">
            @foreach ($products as $product)
                <div class="lg:flex">
                    <x-card :product="$product" />
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
