@extends('layouts.settings')

@section('settings-content')
    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <div class="max-w-xl">
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Avatar Settings') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Update your account\'s avatar.') }}
            </p>

            <div x-data="{ preview: '{{ auth()->user()->avatar() }}' }" class="mt-6 space-y-6">
                <div class="flex items-center space-x-6">
                    <div class="shrink-0">
                        <img class="h-20 w-20 rounded-full object-cover" :src="preview" alt="Current avatar">
                    </div>
                    <form method="post" action="{{ route('settings.avatar.update') }}" enctype="multipart/form-data" class="flex items-center space-x-6">
                        @csrf
                        @method('patch')
                        <div>
                            <x-input-label for="avatar" :value="__('New Avatar')" />
                            <x-file-input id="avatar" name="avatar" class="mt-1 block w-full" @change="preview = URL.createObjectURL($event.target.files[0])" />
                            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>

                @if (auth()->user()->avatar_path)
                    <form method="post" action="{{ route('settings.avatar.destroy') }}">
                        @csrf
                        @method('delete')
                        <x-danger-button>{{ __('Remove Avatar') }}</x-danger-button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
