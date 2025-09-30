@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <img class="h-20 w-20 rounded-full object-cover" src="{{ Auth::user()->avatar() }}" alt="User Avatar">
                    </div>
                    <div>
                        <div class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                            {{ Auth::user()->getGreetName() }}
                        </div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">
                            Username: {{ Auth::user()->username }}
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400">
                            ID: {{ Auth::user()->id }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
@endsection