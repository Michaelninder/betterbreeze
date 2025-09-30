<div x-data="{
        theme: localStorage.getItem('theme') || 'system',
        init() {
            this.setTheme(this.theme);
            this.$watch('theme', value => this.setTheme(value));
        },
        setTheme(theme) {
            if (theme === 'system') {
                if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            } else if (theme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
            localStorage.setItem('theme', theme);
        },
        toggleTheme() {
            const themes = ['system', 'light', 'dark'];
            const currentIndex = themes.indexOf(this.theme);
            this.theme = themes[(currentIndex + 1) % themes.length];
        }
    }"
    class="relative inline-flex items-center justify-center p-2 rounded-full cursor-pointer ms-4"
>
    <button @click="toggleTheme()" class="w-8 h-8 flex items-center justify-center text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition duration-150 ease-in-out">
        <template x-if="theme === 'system'">
            <!-- System Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0h-3.375m0 0ve7.5m-3.375 3.75h.008v.008h-.008v-.008zm-9.375 0h.008v.008h-.008v-.008zM9 17.25V7.5a2.25 2.25 0 012.25-2.25h2.5A2.25 2.25 0 0115 7.5v9.75m-9-6h2.25m-2.25 0h-1.5" />
            </svg>
        </template>
        <template x-if="theme === 'dark'">
            <!-- Dark Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.61.748-3.752A9.758 9.758 0 0112 3c5.385 0 9.75 4.365 9.75 9.75 0 1.33-.266 2.61-.748 3.752z" />
            </svg>
        </template>
        <template x-if="theme === 'light'">
            <!-- Light Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 21v-2.25m-6.364-.386l1.591-1.591M3 12h2.25m-.386-6.364l1.591 1.591M12 18a6 6 0 100-12 6 6 0 000 12z" />
            </svg>
        </template>
    </button>
</div>