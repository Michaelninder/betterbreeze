<div class="bg-gray-50 dark:bg-gray-800 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                {{ __('pages.lander.tech.title') }}
            </h2>
            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300">
                {{ __('pages.lander.tech.subtitle') }}
            </p>
        </div>
        <div class="mx-auto mt-16 flow-root max-w-lg sm:mt-20 lg:mx-0 lg:max-w-none">
            <div class="-mt-4 flex flex-wrap justify-center gap-0.5 lg:mt-0 lg:flex-nowrap lg:justify-between">
                @foreach (__('pages.lander.tech.technologies') as $tech)
                    <div class="mt-4 flex w-1/2 justify-center lg:w-auto">
                        <img class="h-16 object-contain" src="{{ $tech['logo'] }}" alt="{{ $tech['name'] }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>