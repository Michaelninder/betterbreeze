<div class="bg-gray-50 dark:bg-gray-800 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-indigo-600 dark:text-indigo-400">Capabilities</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">{{ __('lander.features.title') }}</p>
            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300">{{ __('lander.features.subtitle') }}</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                @foreach (__('lander.features.items') as $feature)
                    <div class="relative">
                        <dt class="flex items-center text-base font-semibold leading-7 text-gray-900 dark:text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <i class="{{ $feature['icon'] }} text-white text-2xl"></i>
                            </div>
                            <span class="ml-16">{{ $feature['title'] }}</span>
                        </dt>
                        <dd class="mt-2 ml-16 text-base leading-7 text-gray-600 dark:text-gray-300">{{ $feature['description'] }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>