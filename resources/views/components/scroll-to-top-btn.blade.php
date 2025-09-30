<button id="scrollToTopBtn" class="fixed bottom-6 right-6 z-50 p-3 rounded-full bg-primary-dark text-white shadow-lg hover:bg-primary focus:outline-none focus:ring-2 focus:ring-primary-light focus:ring-offset-2 dark:bg-primary-dark dark:hover:bg-primary dark:focus:ring-primary-light dark:focus:ring-offset-gray-900 hidden transition-all duration-300">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
    </svg>
</button>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');

        const toggleScrollToTopButton = () => {
            if (window.scrollY > 300) {
                scrollToTopBtn.classList.remove('hidden');
                scrollToTopBtn.classList.add('flex');
            } else {
                scrollToTopBtn.classList.remove('flex');
                scrollToTopBtn.classList.add('hidden');
            }
        };

        window.addEventListener('scroll', toggleScrollToTopButton);
        toggleScrollToTopButton();

        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
</script>