<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="scroll-smooth">

<head>
    <!-- /* The essentials */ -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    @include('_partials.seo', [
        'title' => $page->seo_title,
        'description' => $page->seo_description,
        'image' => $page->seo_img,
        'image_alt' => $page->seo_img_alt,
        'site_name' => $page->seo_site_name,
    ])

    <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/favicon-leverage/orange/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/favicon-leverage/orange/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/favicon-leverage/orange/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/favicon-leverage/orange/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/favicon-leverage/orange/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/favicon-leverage/orange/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/favicon-leverage/orange/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/favicon-leverage/orange/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon-leverage/orange/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="/assets/images/favicon-leverage/orange/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="/assets/images/favicon-leverage/orange/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="/assets/images/favicon-leverage/orange/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="/assets/images/favicon-leverage/orange/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/favicon-leverage/orange/manifest.json">
    <meta name="msapplication-TileColor" content="#FF5200">
    <meta name="msapplication-TileImage" content="/assets/images/favicon-leverage/orange/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/thin.min.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/light.min.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/fontawesome.min.js', 'assets/build') }}"></script>

    <script>
        (function(w, r) {
            w._rwq = r;
            w[r] = w[r] || function() {
                (w[r].q = w[r].q || []).push(arguments)
            }
        })(window, 'rewardful');
    </script>
    <script async src='https://r.wdfl.co/rw.js' data-rewardful='10b722'></script>
</head>

<body class="text-gray-900 font-primary antialiased selection:bg-orange-400 selection:text-white">
    <div id="top" class="bg-gradient-to-b from-orange-100 to-white overflow-hidden relative">
        <header class="pt-6 lg:pt-10 px-6 lg:px-14 z-10 relative">
            <nav class="flex justify-center items-center gap-8 md:gap-16">
                <a href="#about" class="text-gray-700 text-3.5 md:text-4 hover:text-gray-900 transition-fast">about</a>
                <a href="#benefits"
                    class="text-gray-700 text-3.5 md:text-4 hover:text-gray-900 transition-fast hidden md:inline">benefits</a>
                <a href="{{ $page->getUrl() }}" class="flex-shrink-0 order-first md:order-none">
                    <img src="/assets/images/mksq-logo.svg" alt="The Markham Square logo" class="h-8 xl:h-10">
                </a>
                <a href="#services"
                    class="text-gray-700 text-3.5 md:text-4 hover:text-gray-900 transition-fast">services</a>
                <a href="#work" class="text-gray-700 text-3.5 md:text-4 hover:text-gray-900 transition-fast">work</a>
            </nav>
            <div class="lg:max-w-3xl lg:mx-auto my-24 lg:my-48 flex flex-col">
                <h1
                    class="text-12 md:text-16 lg:text-18 font-black text-center relative leading-[100%] text-gray-900 -tracking-[2.5px]">
                    Choose a plan that suits your needs
                    <span
                        class="bg-orange-500 select-none h-3 w-3 md:h-4 md:w-4 inline-block translate-y-[2rem] md:translate-y-[2.55rem] lg:translate-y-[3rem] -translate-x-0.5 md:-translate-x-1.5 lg:-translate-x-2">&nbsp;</span>
                </h1>
                <p class="text-gray-700 text-5 text-center mt-10 mx-auto -tracking-[0.5px]">
                    Subscriptions to supercharge your
                    digital product development.
                </p>
                <a href="#plans"
                    class="-tracking-[0.5px] text-5 px-6 py-4 bg-orange-400 text-white inline-flex items-center justify-center gap-4 mt-10 mx-auto hover:bg-orange-500 transition-slow">
                    View plans
                    <i class="fa-light fa-arrow-right-long h-5 w-5"></i>
                </a>
            </div>
        </header>
        <svg width="384" height="1407" viewBox="0 0 384 1407" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="hidden lg:block absolute z-0 -right-4 top-96 w-80 h-auto select-none text-orange-300">
            <mask id="mask0_88_348" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                width="720" height="1435">
                <rect x="2" y="2" width="396" height="1431" stroke="currentColor"
                    stroke-width="4" />
                <rect x="82" y="82" width="396" height="1351" stroke="currentColor"
                    stroke-width="4" />
                <rect x="162" y="162" width="396" height="1271" stroke="currentColor"
                    stroke-width="4" />
                <rect x="242" y="242" width="396" height="1191" stroke="currentColor"
                    stroke-width="4" />
                <rect x="322" y="322" width="396" height="1111" stroke="currentColor"
                    stroke-width="4" />
            </mask>
            <g mask="url(#mask0_88_348)">
                <rect x="-76" y="-121" width="460" height="1528" fill="currentColor" />
            </g>
        </svg>
    </div>
    <section id="plans" class="bg-orange-50 min-h-screen flex justify-center items-center">
        <div class="px-6 md:px-10 2xl:px-0 w-full lg:max-w-screen-2xl lg:mx-auto py-12">
            <div class="max-w-lg mx-auto flex flex-col items-center">
                <h2
                    class="text-10 md:text-12 font-medium text-center relative -tracking-[2.5px] text-gray-900 leading-none">
                    Design Leverage
                </h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 mt-10">
                <div class="bg-white border-2 border-green-200 p-10 flex flex-col -m-px">
                    <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                        Monthly
                    </h2>
                    <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug">Pause or cancel anytime.
                    </p>
                    <h3 class="mt-8 text-10 font-medium text-gray-900">
                        $5,995<span class="font-normal text-4 text-gray-700">/month</span>
                    </h3>
                    <p class="mt-1 text-3 text-gray-700 -tracking-[-0.5px] leading-snug">Paid monthly.
                    </p>
                    <button data-plan="design-monthly" target="_blank"
                        class="js-stripe-button -tracking-[0.5px] text-5 px-6 py-4 bg-green-400 text-white inline-flex items-center justify-center gap-4 mt-8 hover:bg-green-500 transition-slow">
                        Sign up
                        <i class="fa-light
                            fa-arrow-right-long h-5 w-5"></i>
                    </button>
                </div>
                <div class="bg-white border-2 border-green-200 p-10 flex flex-col -m-px">
                    <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                        Quarterly
                    </h2>
                    <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug">Save $500 every month.
                    </p>
                    <h3 class="mt-8 text-10 font-medium text-gray-900">
                        $5,495<span class="font-normal text-4 text-gray-700">/month</span>
                    </h3>
                    <p class="mt-1 text-3 text-gray-700 -tracking-[-0.5px] leading-snug">Paid quarterly.
                    </p>
                    <button data-plan="design-quarterly" target="_blank"
                        class="js-stripe-button -tracking-[0.5px] text-5 px-6 py-4 bg-green-400 text-white inline-flex items-center justify-center gap-4 mt-8 hover:bg-green-500 transition-slow">
                        Sign up
                        <i class="fa-light
                            fa-arrow-right-long h-5 w-5"></i>
                    </button>
                </div>
                <div class="bg-white border-2 border-green-200 p-10 flex flex-col -m-px">
                    <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                        Yearly
                    </h2>
                    <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug">Save $1000 every month.
                    </p>
                    <h3 class="mt-8 text-10 font-medium text-gray-900">
                        $4,995<span class="font-normal text-4 text-gray-700">/month</span>
                    </h3>
                    <p class="mt-1 text-3 text-gray-700 -tracking-[-0.5px] leading-snug">Paid annually.
                    </p>
                    <button data-plan="design-yearly" target="_blank"
                        class="js-stripe-button -tracking-[0.5px] text-5 px-6 py-4 bg-green-400 text-white inline-flex items-center justify-center gap-4 mt-8 hover:bg-green-500 transition-slow">
                        Sign up
                        <i class="fa-light
                            fa-arrow-right-long h-5 w-5"></i>
                    </button>
                </div>
            </div>

            <div class="max-w-lg mx-auto flex flex-col items-center mt-20">
                <h2
                    class="text-10 md:text-12 font-medium text-center relative -tracking-[2.5px] text-gray-900 leading-none">
                    Development Leverage
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 mt-10">
                <div class="bg-white border-2 border-purple-200 p-10 flex flex-col -m-px">
                    <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                        Monthly
                    </h2>
                    <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug">Pause or cancel anytime.
                    </p>
                    <h3 class="mt-8 text-10 font-medium text-gray-900">
                        $9,995<span class="font-normal text-4 text-gray-700">/month</span>
                    </h3>
                    <p class="mt-1 text-3 text-gray-700 -tracking-[-0.5px] leading-snug">Paid monthly.
                    </p>
                    <button data-plan="dev-monthly" target="_blank"
                        class="js-stripe-button -tracking-[0.5px] text-5 px-6 py-4 bg-purple-400 text-white inline-flex items-center justify-center gap-4 mt-8 hover:bg-purple-500 transition-slow">
                        Sign up
                        <i class="fa-light
                            fa-arrow-right-long h-5 w-5"></i>
                    </button>
                </div>
                <div class="bg-white border-2 border-purple-200 p-10 flex flex-col -m-px">
                    <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                        Quarterly
                    </h2>
                    <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug">Save $500 every month.
                    </p>
                    <h3 class="mt-8 text-10 font-medium text-gray-900">
                        $9,495<span class="font-normal text-4 text-gray-700">/month</span>
                    </h3>
                    <p class="mt-1 text-3 text-gray-700 -tracking-[-0.5px] leading-snug">Paid quarterly.
                    </p>
                    <button data-plan="dev-quarterly" target="_blank"
                        class="js-stripe-button -tracking-[0.5px] text-5 px-6 py-4 bg-purple-400 text-white inline-flex items-center justify-center gap-4 mt-8 hover:bg-purple-500 transition-slow">
                        Sign up
                        <i class="fa-light
                            fa-arrow-right-long h-5 w-5"></i>
                    </button>
                </div>
                <div class="bg-white border-2 border-purple-200 p-10 flex flex-col -m-px">
                    <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                        Yearly
                    </h2>
                    <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug">Save $1000 every month.
                    </p>
                    <h3 class="mt-8 text-10 font-medium text-gray-900">
                        $8,995<span class="font-normal text-4 text-gray-700">/month</span>
                    </h3>
                    <p class="mt-1 text-3 text-gray-700 -tracking-[-0.5px] leading-snug">Paid annually.
                    </p>
                    <button data-plan="dev-yearly" target="_blank"
                        class="js-stripe-button -tracking-[0.5px] text-5 px-6 py-4 bg-purple-400 text-white inline-flex items-center justify-center gap-4 mt-8 hover:bg-green-500 transition-slow">
                        Sign up
                        <i class="fa-light
                            fa-arrow-right-long h-5 w-5"></i>
                    </button>
                </div>
            </div>

            <div class="max-w-lg mx-auto flex flex-col items-center mt-20">
                <h2
                    class="text-10 md:text-12 font-medium text-center relative -tracking-[2.5px] text-gray-900 leading-none">
                    Design + Development Leverage
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 mt-10">
                <div class="bg-white border-2 border-orange-200 p-10 flex flex-col -m-px">
                    <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                        Monthly
                    </h2>
                    <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug">Pause or cancel anytime.
                    </p>
                    <h3 class="mt-8 text-10 font-medium text-gray-900">
                        $14,391<span class="font-normal text-4 text-gray-700">/month</span>
                    </h3>
                    <p class="mt-1 text-3 text-gray-700 -tracking-[-0.5px] leading-snug">Paid monthly.
                    </p>
                    <button data-plan="design-dev-monthly" target="_blank"
                        class="js-stripe-button -tracking-[0.5px] text-5 px-6 py-4 bg-orange-400 text-white inline-flex items-center justify-center gap-4 mt-8 hover:bg-orange-500 transition-slow">
                        Sign up
                        <i class="fa-light
                            fa-arrow-right-long h-5 w-5"></i>
                    </button>
                </div>
                <div class="bg-white border-2 border-orange-200 p-10 flex flex-col -m-px">
                    <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                        Quarterly
                    </h2>
                    <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug">Save $500 every month.
                    </p>
                    <h3 class="mt-8 text-10 font-medium text-gray-900">
                        $13,891<span class="font-normal text-4 text-gray-700">/month</span>
                    </h3>
                    <p class="mt-1 text-3 text-gray-700 -tracking-[-0.5px] leading-snug">Paid quarterly.
                    </p>
                    <button data-plan="design-dev-quarterly" target="_blank"
                        class="js-stripe-button -tracking-[0.5px] text-5 px-6 py-4 bg-orange-400 text-white inline-flex items-center justify-center gap-4 mt-8 hover:bg-orange-500 transition-slow">
                        Sign up
                        <i class="fa-light
                            fa-arrow-right-long h-5 w-5"></i>
                    </button>
                </div>
                <div class="bg-white border-2 border-orange-200 p-10 flex flex-col -m-px">
                    <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                        Yearly
                    </h2>
                    <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug">Save $1000 every month.
                    </p>
                    <h3 class="mt-8 text-10 font-medium text-gray-900">
                        $13,391<span class="font-normal text-4 text-gray-700">/month</span>
                    </h3>
                    <p class="mt-1 text-3 text-gray-700 -tracking-[-0.5px] leading-snug">Paid annually.
                    </p>
                    <button data-plan="design-dev-yearly" target="_blank"
                        class="js-stripe-button -tracking-[0.5px] text-5 px-6 py-4 bg-orange-400 text-white inline-flex items-center justify-center gap-4 mt-8 hover:bg-green-500 transition-slow">
                        Sign up
                        <i class="fa-light
                            fa-arrow-right-long h-5 w-5"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
