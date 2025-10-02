@extends('layouts.settings')

@section('settings-content')
    <div class="p-6 sm:p-8 bg-white dark:bg-gray-800 shadow-sm sm:rounded-xl border border-gray-200 dark:border-gray-700">
        <div class="max-w-2xl">
            <header class="mb-8">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                    {{ __('Avatar Settings') }}
                </h2>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Update your account\'s avatar. Recommended size: 400x400 pixels.') }}
                </p>
            </header>

            <div x-data="{ preview: '{{ auth()->user()->avatar() }}' }" class="space-y-8">
                <form method="post" action="{{ route('settings.avatar.update') }}" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('patch')

                    <div class="flex flex-col sm:flex-row sm:items-start gap-6">
                        <!-- Avatar Preview -->
                        <div class="shrink-0">
                            <div class="relative group">
                                <img class="h-24 w-24 sm:h-28 sm:w-28 rounded-full object-cover ring-4 ring-gray-100 dark:ring-gray-700 transition-all duration-200" 
                                     :src="preview" 
                                     alt="Current avatar">
                                <div class="absolute inset-0 rounded-full bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-200"></div>
                            </div>
                        </div>

                        <!-- File Input Section -->
                        <div class="flex-1 space-y-4">
                            <div>
                                <x-input-label for="avatar" :value="__('Choose New Avatar')" class="mb-2" />
                                <x-wide-file-input 
                                    id="avatar" 
                                    name="avatar" 
                                    accept="image/*"
                                    @change="preview = URL.createObjectURL($event.target.files[0])" 
                                />
                                <p class="mt-2 text-xs text-gray-500 dark:text-gray-400">
                                    {{ __('PNG, JPG, GIF up to 2MB') }}
                                </p>
                                <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
                            </div>

                            <div class="flex items-center gap-3 pt-2">
                                <x-primary-button class="px-6">
                                    {{ __('Upload Avatar') }}
                                </x-primary-button>
                                
                                @if (session('status') === 'avatar-updated')
                                    <p x-data="{ show: true }" 
                                       x-show="show" 
                                       x-transition 
                                       x-init="setTimeout(() => show = false, 3000)"
                                       class="text-sm text-green-600 dark:text-green-400">
                                        {{ __('Saved successfully.') }}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>

                @if (auth()->user()->avatar_path)
                    <div class="pt-6 border-t border-gray-200 dark:border-gray-700">
                        <form method="post" action="{{ route('settings.avatar.destroy') }}">
                            @csrf
                            @method('delete')
                            
                            <div class="flex items-start gap-4">
                                <div class="flex-1">
                                    <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                        {{ __('Remove Custom Avatar') }}
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                        {{ __('Your avatar will revert to the default placeholder.') }}
                                    </p>
                                </div>
                                <x-danger-button class="shrink-0">
                                    {{ __('Remove Avatar') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection