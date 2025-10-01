@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="text-center">
            <h1 class="text-6xl font-bold text-gray-800 dark:text-gray-200">{{ $errorCode }}</h1>
            <p class="mt-4 text-2xl text-gray-600 dark:text-gray-400">{{ $errorMessage }}</p>
            <p class="mt-2 text-lg text-gray-500 dark:text-gray-300">{{ $errorDescription }}</p>
            <a href="{{ url('/') }}" class="mt-6 inline-block px-6 py-3 text-lg font-semibold text-white bg-primary rounded-md hover:bg-primary-dark">
                Go to Homepage
            </a>
        </div>
    </div>
@endsection