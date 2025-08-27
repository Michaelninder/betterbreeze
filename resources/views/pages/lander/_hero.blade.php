<div class="relative isolate overflow-hidden bg-white dark:bg-gray-900">
    <svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 dark:stroke-gray-700 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
        <defs>
            <pattern id="0787a7c5-978c-4f66-83c5-861ef6da4bcbc" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                <path d="M.5 200V.5H200" fill="none" />
            </pattern>
        </defs>
        <rect width="100%" height="100%" stroke-width="0" fill="url(#0787a7c5-978c-4f66-83c5-861ef6da4bcbc)" />
    </svg>
    <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8">
            <img class="h-11" src="{{ asset('img/logo-text.svg') }}" alt="Your Company">
            <h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-6xl">Deploy your dreams with our powerful platform.</h1>
            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
            <div class="mt-10 flex items-center gap-x-6">
                @guest
                    <a href="{{ route('register') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                @endguest
                @auth
                    <a href="{{ route('dashboard') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go to Dashboard</a>
                @endauth
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">Learn more <span aria-hidden="true">→</span></a>
            </div>
        </div>
        <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
            <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                <div class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
                    <img src="https://picsum.photos/seed/app/2432/1442" alt="App screenshot" width="2432" height="1442" class="w-[76rem] rounded-md shadow-2xl ring-1 ring-gray-900/10">
                </div>
            </div>
        </div>
    </div>
</div>