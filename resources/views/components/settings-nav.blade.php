<nav class="flex flex-col space-y-2">
    <a href="{{ route('profile.edit') }}" class="px-4 py-2 rounded-md text-sm font-medium transition-colors duration-150 ease-in-out
        @if(request()->routeIs('profile.edit'))
            bg-primary text-white
        @else
            text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800
        @endif
    ">
        {{ __('Profile') }}
    </a>
    <a href="{{ route('settings.avatar') }}" class="px-4 py-2 rounded-md text-sm font-medium transition-colors duration-150 ease-in-out
        @if(request()->routeIs('settings.avatar'))
            bg-primary text-white
        @else
            text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800
        @endif
    ">
        {{ __('Avatar') }}
    </a>
</nav>
