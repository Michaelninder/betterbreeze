<footer
    class="border-t border-gray-200 bg-gray-100 py-12 dark:border-gray-700 dark:bg-gray-800"
>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
            <div class="text-center md:text-left">
                <a
                    href="{{ route('dashboard') }}"
                    class="flex items-center justify-center md:justify-start"
                >
                    <x-application-logo
                        class="block h-10 w-auto fill-current text-gray-800 dark:text-gray-200"
                    />
                    <span class="sr-only">{{ config('app.name', 'Laravel') }}</span>
                </a>
                <p class="mt-4 text-sm text-gray-500 dark:text-gray-400">
                    &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}.
                    All rights reserved.
                </p>
            </div>

            <div>
                <h3
                    class="mb-1 font-semibold text-gray-900 dark:text-gray-100"
                >
                    Legal
                </h3>
                <ul class="space-y-0">
                    @foreach (config('app.legal_sections') as $legalSection)
                        <li>
                            <a
                                href="{{ route('pages.legal', ['section' => $legalSection]) }}"
                                class="text-gray-600 transition-colors hover:text-brand-600 dark:text-gray-400 dark:hover:text-brand-400"
                            >
                                {{ __('pages.legal.' . $legalSection . '.title') }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3
                    class="text-sm font-semibold uppercase tracking-wider text-gray-900 dark:text-gray-100"
                >
                    Section 2
                </h3>
                <ul class="mt-4 space-y-2">
                    <li>
                        <a
                            href="#"
                            class="text-base text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100"
                        >
                            Link A
                        </a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="text-base text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100"
                        >
                            Link B
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h3
                    class="text-sm font-semibold uppercase tracking-wider text-gray-900 dark:text-gray-100"
                >
                    Section 3
                </h3>
                <ul class="mt-4 space-y-2">
                    <li>
                        <a
                            href="#"
                            class="text-base text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100"
                        >
                            Project X
                        </a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="text-base text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100"
                        >
                            Project Y
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="mt-8 border-t border-gray-200 pt-6 text-center text-sm text-gray-500 dark:border-gray-700 dark:text-gray-400"
        >
            Built with ❤️ by You
        </div>
    </div>
</footer>