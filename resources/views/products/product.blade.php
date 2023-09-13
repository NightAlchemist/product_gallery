@extends('layouts.layout')

@section('title', "{$product}")

@section('header')
<li>
    <div class="flex items-center">
    <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
    </svg>
    <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{ucwords($product)}}</a>
    </div>
</li>
<li>
@endsection

@section('content')
    <x-product />
@endsection