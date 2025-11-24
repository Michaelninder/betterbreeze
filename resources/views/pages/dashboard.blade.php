@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('pages.dashboard.title') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <img class="h-20 w-20 rounded-full object-cover" src="{{ Auth::user()->avatar() }}"
                            alt="{{ __('pages.dashboard.avatar_alt') }}">
                    </div>
                    <div>
                        <div class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                            {{ Auth::user()->getGreetName() }}
                        </div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">
                            {{ __('pages.dashboard.username') }}: {{ Auth::user()->username }}
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 flex items-center">
                            {{ __('pages.dashboard.id') }}: <span id="user-id">{{ Auth::user()->id }}</span>
                            <button type="button" class="ml-2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200"
                                onclick="copyToClipboard('user-id', '{{ __('pages.dashboard.messages.copied') }}')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('pages.dashboard.you_are_logged_in') }}
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard(elementId, successMessage) {
            const element = document.getElementById(elementId);
            const textToCopy = element.innerText;

            navigator.clipboard.writeText(textToCopy)
                .then(() => {
                    window.showToast('success', successMessage, 1500);
                })
                .catch(err => {
                    console.error('Failed to copy: ', err);
                    window.showToast('error', '{{ __('pages.dashboard.messages.copy_failed') }}');
                });
        }
    </script>
@endsection