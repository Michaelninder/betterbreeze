<div class="bg-gray-50 dark:bg-gray-800 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-brand-600 dark:text-brand-400">API</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                {{ __('lander.api_showcase.title') }}
            </p>
            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300">
                {{ __('lander.api_showcase.subtitle') }}
            </p>
        </div>
        <div class="mx-auto max-w-5xl mt-16 sm:mt-20">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                {{ __('lander.api_showcase.example_code_title') }}
            </h3>
            <div class="bg-gray-900 rounded-lg p-6 font-mono text-sm text-gray-300 overflow-x-auto shadow-xl">
                <pre><code>
<span class="text-pink-400">import</span> axios <span class="text-pink-400">from</span> <span class="text-green-400">'axios'</span>;

<span class="text-blue-400">const</span> API_BASE_URL = <span class="text-green-400">'https://api.yourapp.com'</span>;
<span class="text-blue-400">const</span> API_KEY = <span class="text-green-400">'YOUR_API_KEY'</span>;

<span class="text-purple-400">async function</span> getProjects() {
  <span class="text-pink-400">try</span> {
    <span class="text-blue-400">const</span> response = <span class="text-pink-400">await</span> axios.get(`${API_BASE_URL}/projects`, {
      headers: {
        <span class="text-green-400">'Authorization'</span>: `Bearer ${API_KEY}`,
        <span class="text-green-400">'Content-Type'</span>: <span class="text-green-400">'application/json'</span>,
      },
    });
    <span class="text-yellow-400">console</span>.log(<span class="text-green-400">'Projects:'</span>, response.data);
    <span class="text-pink-400">return</span> response.data;
  } <span class="text-pink-400">catch</span> (error) {
    <span class="text-yellow-400">console</span>.error(<span class="text-green-400">'Error fetching projects:'</span>, error);
    <span class="text-pink-400">throw</span> error;
  }
}

getProjects();
                </code></pre>
            </div>
            <div class="mt-8 text-center">
                <a href="#" class="text-base font-semibold leading-7 text-brand-600 hover:text-brand-500 dark:text-brand-400 dark:hover:text-brand-300">
                    {{ __('lander.api_showcase.more_api_docs') }} <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
</div>