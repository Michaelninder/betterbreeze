<button
    {{
        $attributes->merge([
            'type' => 'submit',
            'class' =>
                'inline-flex items-center px-4 py-2 bg-brand-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-brand-600 focus:bg-brand-600 active:bg-brand-900 focus:outline-none focus:ring-2 focus:ring-brand-300 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150',
        ])
    }}
>
    {{ $slot }}
</button>