{{-- resources/views/pages/lander/_pricing.blade.php --}}
<div x-data="{ billingCycle: 'monthly' }" class="bg-white dark:bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                {{ __('lander.pricing.title') }}
            </h2>
            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300">
                {{ __('lander.pricing.subtitle') }}
            </p>
        </div>

        <div class="mt-16 flex justify-center">
            <div class="inline-flex rounded-full p-1 text-xs font-semibold leading-5 bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-300">
                <button type="button" @click="billingCycle = 'monthly'" :class="{ 'bg-indigo-600 text-white': billingCycle === 'monthly' }" class="rounded-full px-4 py-1.5 focus:outline-none transition-colors duration-200">
                    {{ __('lander.pricing.monthly_billing') }}
                </button>
                <button type="button" @click="billingCycle = 'yearly'" :class="{ 'bg-indigo-600 text-white': billingCycle === 'yearly' }" class="ml-2 rounded-full px-4 py-1.5 focus:outline-none transition-colors duration-200">
                    {{ __('lander.pricing.yearly_billing') }} <span class="ml-1 px-1.5 py-0.5 rounded-full bg-indigo-200 text-indigo-700 dark:bg-indigo-800 dark:text-indigo-200">{{ __('lander.pricing.save_yearly') }}</span>
                </button>
            </div>
        </div>

        <div class="isolate mx-auto mt-16 grid max-w-md grid-cols-1 gap-y-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            {{-- Starter Plan --}}
            <div class="flex flex-col justify-between rounded-3xl bg-gray-50 dark:bg-gray-800 p-8 shadow-xl ring-1 ring-gray-900/10 dark:ring-gray-700 sm:p-10">
                <div>
                    <h3 id="tier-starter" class="text-base font-semibold leading-7 text-indigo-600 dark:text-indigo-400">
                        {{ __('lander.pricing.plan_starter_name') }}
                    </h3>
                    <div class="mt-4 flex items-baseline gap-x-2">
                        <span class="text-5xl font-bold tracking-tight text-gray-900 dark:text-white" x-text="billingCycle === 'monthly' ? '{{ __('lander.pricing.plan_starter_price_monthly') }}' : '{{ __('lander.pricing.plan_starter_price_yearly') }}'"></span>
                        <span class="text-base font-semibold leading-7 text-gray-600 dark:text-gray-400">/{{ __('month') }}</span>
                    </div>
                    <p class="mt-6 text-base leading-7 text-gray-600 dark:text-gray-300">
                        {{ __('lander.pricing.plan_starter_description') }}
                    </p>
                    <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600 dark:text-gray-300">
                        @foreach (__('lander.pricing.plan_starter_features') as $feature)
                            <li class="flex gap-x-3">
                                <i class="bi bi-check-circle-fill h-6 w-5 flex-none text-indigo-600 dark:text-indigo-400" aria-hidden="true"></i>
                                {{ $feature }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <a href="#" aria-describedby="tier-starter" class="mt-8 block rounded-md py-2.5 px-3 text-center text-sm font-semibold leading-6 bg-indigo-600 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    {{ __('lander.pricing.choose_plan_btn') }}
                </a>
            </div>

            {{-- Pro Plan --}}
            <div class="flex flex-col justify-between rounded-3xl bg-gray-900 dark:bg-gray-700 p-8 shadow-2xl ring-1 ring-indigo-900/10 dark:ring-indigo-700 sm:p-10 lg:scale-110 lg:rounded-b-none lg:rounded-t-3xl">
                <div>
                    <h3 id="tier-pro" class="text-base font-semibold leading-7 text-indigo-400">
                        {{ __('lander.pricing.plan_pro_name') }}
                    </h3>
                    <div class="mt-4 flex items-baseline gap-x-2">
                        <span class="text-5xl font-bold tracking-tight text-white" x-text="billingCycle === 'monthly' ? '{{ __('lander.pricing.plan_pro_price_monthly') }}' : '{{ __('lander.pricing.plan_pro_price_yearly') }}'"></span>
                        <span class="text-base font-semibold leading-7 text-gray-300">/{{ __('month') }}</span>
                    </div>
                    <p class="mt-6 text-base leading-7 text-gray-300">
                        {{ __('lander.pricing.plan_pro_description') }}
                    </p>
                    <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-300">
                        @foreach (__('lander.pricing.plan_pro_features') as $feature)
                            <li class="flex gap-x-3">
                                <i class="bi bi-check-circle-fill h-6 w-5 flex-none text-indigo-400" aria-hidden="true"></i>
                                {{ $feature }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <a href="#" aria-describedby="tier-pro" class="mt-8 block rounded-md py-2.5 px-3 text-center text-sm font-semibold leading-6 bg-indigo-500 text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    {{ __('lander.pricing.choose_plan_btn') }}
                </a>
            </div>

            {{-- Enterprise Plan --}}
            <div class="flex flex-col justify-between rounded-3xl bg-gray-50 dark:bg-gray-800 p-8 shadow-xl ring-1 ring-gray-900/10 dark:ring-gray-700 sm:p-10">
                <div>
                    <h3 id="tier-enterprise" class="text-base font-semibold leading-7 text-indigo-600 dark:text-indigo-400">
                        {{ __('lander.pricing.plan_enterprise_name') }}
                    </h3>
                    <div class="mt-4 flex items-baseline gap-x-2">
                        <span class="text-5xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ __('lander.pricing.plan_enterprise_price') }}
                        </span>
                        <span class="text-base font-semibold leading-7 text-gray-600 dark:text-gray-400"></span>
                    </div>
                    <p class="mt-6 text-base leading-7 text-gray-600 dark:text-gray-300">
                        {{ __('lander.pricing.plan_enterprise_description') }}
                    </p>
                    <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600 dark:text-gray-300">
                        @foreach (__('lander.pricing.plan_enterprise_features') as $feature)
                            <li class="flex gap-x-3">
                                <i class="bi bi-check-circle-fill h-6 w-5 flex-none text-indigo-600 dark:text-indigo-400" aria-hidden="true"></i>
                                {{ $feature }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <a href="#" aria-describedby="tier-enterprise" class="mt-8 block rounded-md py-2.5 px-3 text-center text-sm font-semibold leading-6 bg-indigo-600 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    {{ __('lander.pricing.contact_sales_btn') }}
                </a>
            </div>
        </div>
    </div>
</div>