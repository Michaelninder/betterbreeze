<div class="bg-white dark:bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-indigo-600 dark:text-indigo-400">Workflow</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                {{ __('lander.how_it_works.title') }}
            </p>
            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300">
                {{ __('lander.how_it_works.subtitle') }}
            </p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-3">
                @foreach (__('lander.how_it_works.steps') as $step)
                    <div>
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-600 text-white text-xl font-bold mb-4">
                            {{ $step['step_number'] }}
                        </div>
                        <h3 class="text-lg font-semibold leading-7 text-gray-900 dark:text-white">{{ $step['title'] }}</h3>
                        <p class="mt-2 text-base leading-7 text-gray-600 dark:text-gray-300">{{ $step['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>