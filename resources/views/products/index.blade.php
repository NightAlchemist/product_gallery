@csrf

@extends('layouts.layout')

@section('title', 'Productos')

@section('content')


<section class="bg-white dark:bg-gray-900 mt-6">
    <div class="container px-6 py-20 mx-auto">
        
        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-4">
            <div class="lg:flex">
                <x-card />
            </div>

            <div class="lg:flex">
                <x-card />
            </div>

            <div class="lg:flex">
                <x-card />
            </div>

            <div class="lg:flex">
                <x-card />
            </div>
            
            <div class="lg:flex">
                <x-card />
            </div>

            <div class="lg:flex">
                <x-card />
            </div>

            <div class="lg:flex">
                <x-card />
            </div>

            <div class="lg:flex">
                <x-card />
            </div>

        </div>
    </div>
</section>

@endsection