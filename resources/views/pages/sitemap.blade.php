@extends('layouts.app')
@section('title', __('pages.sitemap.meta.title'))
@section('content')
<div class="min-h-screen bg-gradient-to-br from-brand-50 to-brand-100 dark:from-brand-900 dark:to-brand-800 py-12 px-4 sm:px-6 lg:px-8 transition-colors duration-300">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-brand-900 dark:text-brand-50 mb-3">{{ __('pages.sitemap.heading') }}</h1>
            <p class="text-brand-600 dark:text-brand-300 text-lg">{{ __('pages.sitemap.subheading') }}</p>
        </div>

        <!-- Sitemap Container -->
        <div class="bg-white dark:bg-brand-800 rounded-2xl shadow-xl overflow-hidden border border-brand-200 dark:border-brand-700 transition-colors duration-300">
            <!-- Main Pages Section -->
            @if(count($pages) > 0)
            <div class="p-8 border-b border-brand-100 dark:border-brand-700">
                <h2 class="text-2xl font-semibold text-brand-800 dark:text-brand-100 mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-brand-600 dark:text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    {{ __('pages.sitemap.sections.main_pages') }}
                </h2>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    @foreach($pages as $page)
                        <li>
                            <a href="{{ route($page['route']) }}" 
                               class="flex items-center p-4 rounded-lg bg-brand-50 dark:bg-brand-700 hover:bg-brand-100 dark:hover:bg-brand-600 border border-brand-200 dark:border-brand-600 hover:border-brand-400 dark:hover:border-brand-500 transition-all duration-200 group">
                                <span class="w-2 h-2 rounded-full bg-brand-500 dark:bg-brand-400 mr-3 group-hover:bg-brand-700 dark:group-hover:bg-brand-300 transition-colors"></span>
                                <span class="text-brand-700 dark:text-brand-200 group-hover:text-brand-900 dark:group-hover:text-brand-50 font-medium">{{ $page['title'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Legal Section -->
            @if(count($legalSections) > 0)
            <div class="p-8">
                <h2 class="text-2xl font-semibold text-brand-800 dark:text-brand-100 mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-brand-600 dark:text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    {{ __('pages.sitemap.sections.legal_info') }}
                </h2>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    @foreach($legalSections as $section)
                        <li>
                            <a href="{{ route('pages.legal', $section) }}" 
                               class="flex items-center p-4 rounded-lg bg-brand-50 dark:bg-brand-700 hover:bg-brand-100 dark:hover:bg-brand-600 border border-brand-200 dark:border-brand-600 hover:border-brand-400 dark:hover:border-brand-500 transition-all duration-200 group">
                                <span class="w-2 h-2 rounded-full bg-brand-500 dark:bg-brand-400 mr-3 group-hover:bg-brand-700 dark:group-hover:bg-brand-300 transition-colors"></span>
                                <span class="text-brand-700 dark:text-brand-200 group-hover:text-brand-900 dark:group-hover:text-brand-50 font-medium">{{ __('pages.legal.'.$section.'.title') }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection