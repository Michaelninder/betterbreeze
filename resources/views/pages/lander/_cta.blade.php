<div class="bg-gray-50 dark:bg-gray-800 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">{{ __('pages.lander.cta.title') }}</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300">{{ __('pages.lander.cta.subtitle') }}</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{ route('register') }}" class="rounded-md bg-brand-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-brand-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-600">{{ __('pages.lander.cta.main_btn') }}</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">{{ __('pages.lander.cta.secondary_btn') }} <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </div>
</div>