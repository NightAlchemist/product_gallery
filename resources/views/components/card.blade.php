@props(['product'])
<div class="max-w-2xl mx-auto">
    <div class="bg-white shadow-md rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
        <a href="{{ route('products.show', $product) }}">
            <img class="rounded-t-lg p-8" src="{{ $product->image_path }}" alt="product image">
        </a>
        <div class="px-5 pb-5">
            <a href="{{ route('products.show', $product) }}">
                <h3 class="text-gray-900 font-semibold text-xl tracking-tight dark:text-white">{{ $product->title }}</h3>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
            </div>
            <div class="flex items-center justify-between">
                <span class="text-3xl font-bold text-gray-900 dark:text-white">${{ $product->price }}</span>
                <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        </div>
    </div>
</div>
