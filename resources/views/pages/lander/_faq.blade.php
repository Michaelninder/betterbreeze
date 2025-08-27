<div class="bg-white dark:bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-4xl divide-y divide-gray-900/10 dark:divide-gray-100/10">
            <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900 dark:text-white">{{ __('lander.faq.title') }}</h2>
            <p class="mt-4 text-base leading-7 text-gray-600 dark:text-gray-300">{{ __('lander.faq.subtitle') }}</p>
            <dl class="mt-10 space-y-6 divide-y divide-gray-900/10 dark:divide-gray-100/10">
                @foreach (__('lander.faq.questions') as $faq)
                    <div x-data="{ open: false }" class="pt-6">
                        <dt>
                            <button type="button" @click="open = ! open" class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white" aria-controls="faq-{{ $loop->index }}" aria-expanded="false">
                                <span class="text-base font-semibold leading-7">{{ $faq['question'] }}</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg class="h-6 w-6 transform rotate-0" :class="{ 'rotate-180': open, 'rotate-0': ! open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12" id="faq-{{ $loop->index }}" x-show="open" x-collapse.duration.300ms>
                            <p class="text-base leading-7 text-gray-600 dark:text-gray-300">{{ $faq['answer'] }}</p>
                        </dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>