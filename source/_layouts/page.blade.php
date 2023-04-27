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

    <link rel="apple-touch-icon" sizes="57x57"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="/assets/images/favicon-leverage/{{ $page->color }}/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="/assets/images/favicon-leverage/{{ $page->color }}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="/assets/images/favicon-leverage/{{ $page->color }}/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="/assets/images/favicon-leverage/{{ $page->color }}/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/favicon-leverage/{{ $page->color }}/manifest.json">
    <meta name="msapplication-TileColor" content="#FF5200">
    <meta name="msapplication-TileImage"
        content="/assets/images/favicon-leverage/{{ $page->color }}/ms-icon-144x144.png">
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

<body class="text-gray-900 font-primary antialiased selection:bg-{{ $page->color }}-400 selection:text-white">
    <div id="top" class="bg-gradient-to-b from-{{ $page->color }}-100 to-white overflow-hidden relative">
        <header class="pt-6 lg:pt-10 px-6 lg:px-14 z-10 relative">
            <nav class="flex justify-center items-center gap-8 md:gap-16">
                <a href="#about" class="text-gray-700 text-3.5 md:text-4 hover:text-gray-900 transition-fast">about</a>
                <a href="#services"
                    class="text-gray-700 text-3.5 md:text-4 hover:text-gray-900 transition-fast hidden md:inline">services</a>
                <a href="{{ $page->getUrl() }}" class="flex-shrink-0 order-first md:order-none">
                    <img src="{{ $page->logo_path }}" alt="The Markham Square logo" class="h-8 xl:h-10">
                </a>
                <a href="#pricing"
                    class="text-gray-700 text-3.5 md:text-4 hover:text-gray-900 transition-fast">pricing</a>
                <a href="#faqs" class="text-gray-700 text-3.5 md:text-4 hover:text-gray-900 transition-fast">faqs</a>
            </nav>
            <div class="lg:max-w-3xl lg:mx-auto mt-24 lg:mt-32 flex flex-col">
                <h1
                    class="text-12 md:text-16 lg:text-18 font-black text-center relative leading-[100%] text-gray-900 -tracking-[2.5px]">
                    {{ $page->hero_title }}
                    <span
                        class="bg-{{ $page->color }}-500 select-none h-3 w-3 md:h-4 md:w-4 inline-block translate-y-[2rem] md:translate-y-[2.55rem] lg:translate-y-[3rem] -translate-x-0.5 md:-translate-x-1.5 lg:-translate-x-2">&nbsp;</span>
                </h1>
                <p class="text-gray-700 text-5 text-center mt-10 mx-auto -tracking-[0.5px]">
                    {{ $page->hero_subtitle }}
                </p>
                <a href="#pricing"
                    class="-tracking-[0.5px] text-5 px-6 py-4 bg-{{ $page->color }}-400 text-white inline-flex items-center justify-center gap-4 mt-10 mx-auto hover:bg-{{ $page->color }}-500 transition-slow">
                    Work with us
                    <i class="fa-light fa-arrow-right-long h-5 w-5"></i>
                </a>
                <p class="mt-6 -tracking-[0.5px] text-3.5 text-gray-700 text-center">{{ $page->hero_quote }}
                </p>
            </div>
        </header>
        <svg width="384" height="1407" viewBox="0 0 384 1407" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="hidden lg:block absolute z-0 -right-4 top-96 w-80 h-auto select-none text-{{ $page->color }}-300">
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
        <section
            class="pb-20 px-6 md:px-10 2xl:px-0 flex md:grid grid-cols-3 gap-4 lg:gap-6 lg:max-w-screen-2xl lg:mx-auto mt-20 overflow-y-scroll z-10 relative">
            @foreach ($page->hero_images as $image)
                <img src="{{ $image[0] }}"
                    class="w-[320px] h-[320px] lg:h-full lg:w-full object-cover select-none"
                    alt="{{ $image[1] }}">
            @endforeach
        </section>
    </div>
    <main class="overflow-hidden">
        <section
            class="py-6 px-6 lg:px-14 bg-{{ $page->color }}-400 flex items-center md:justify-center gap-8 lg:gap-20 overflow-y-scroll">
            <img src="/assets/images/abaxx-logo.svg" alt="Abaxx's logo" class="h-8">
            <img src="/assets/images/lynden-logo.svg" alt="The Lynden Lane Co's logo" class="h-16">
            <img src="/assets/images/web-team-logo.svg" alt="The Web Team's logo" class="h-8">
            <img src="/assets/images/sol-dev-logo.svg" alt="SolDev.app's logo" class="h-8">
            <img src="/assets/images/ewc-logo.svg" alt="European Watch Company's logo" class="h-8">
            <img src="/assets/images/fanxp-logo.svg" alt="FanXP's logo" class="h-10">
        </section>
        <section id="about" class="bg-{{ $page->color }}-50 pt-32 pb-72">
            <div class="px-6 md:px-10 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto">
                <h2
                    class="text-10 md:text-12 font-medium text-center relative -tracking-[2.5px] text-gray-900 max-w-lg leading-none mx-auto">
                    {{ $page->process_header }}
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 mt-16">
                    @foreach ($page->steps as $step)
                        <div
                            class="bg-white border-2 border-{{ $page->color }}-200 p-8 lg:py-16 lg:px-20 flex flex-col items-center -m-px">
                            <i
                                class="fa-thin text-{{ $page->color }}-400 h-16 w-16 md:h-20 md:w-20 {{ $step[0] }}"></i>
                            <h3
                                class="text-center mt-4 text-4 lg:text-5 text-gray-900 -tracking-[-0.5px] leading-snug">
                                {{ $step[1] }}
                            </h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="-mt-40">
            <div
                class="bg-noise-{{ $page->color }} flex flex-col items-center justify-center mx-auto max-w-7xl p-20">
                <h2 class="text-10 text-gray-900 font-bold leading-none text-center max-w-4xl -tracking-[1px]">
                    {{ $page->quote }}
                </h2>
                <div>
                    <h3 class="before:content-['–_'] mt-6 -ml-4 text-5 -tracking-[0.5px] text-gray-900">
                        {{ $page->quote_source }}</h3>
                    <h4 class="text-gray-700 mt-1 text-4 -tracking-[0.5px]">{{ $page->quote_credential }}</h4>
                </div>
            </div>
        </section>
        <section class="py-32">
            <div class="px-6 md:px-10 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto">
                <h2
                    class="text-10 md:text-12 font-medium text-center relative -tracking-[2.5px] text-gray-900 max-w-lg leading-none mx-auto">
                    {{ $page->benefits_header }}
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 mt-16 gap-8">
                    @foreach ($page->benefits as $benefit)
                        <div class="bg-white flex flex-col items-center px-8 md:py-2 xl:py-0">
                            <i
                                class="fa-thin text-{{ $page->color }}-400 h-16 w-16 md:h-20 md:w-20 {{ $benefit[0] }}"></i>
                            <h3
                                class="text-center mt-4 text-5 lg:text-6 text-gray-900 font-medium -tracking-[-0.5px] leading-snug">
                                {{ $benefit[1] }}
                            </h3>
                            <p class="text-center mt-2 text-4 lg:text-5 text-gray-700 -tracking-[-0.5px] leading-snug">
                                {{ $benefit[2] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="services" class="py-32 bg-noise-{{ $page->color }}">
            <div class="px-6 md:px-10 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto grid grid-cols-1 xl:grid-cols-3 gap-8">
                <div>
                    <div class="max-w-sm">
                        <h2
                            class="text-10 xl:text-12 font-medium relative -tracking-[2.5px] text-gray-900 max-w-lg leading-none">
                            What you need, when you need it
                        </h2>
                        <p class="mt-7 text-gray-700 text-5 -tracking-[0.5px]">
                            Need something else? <a class="underline hover:text-gray-900 transition-slow"
                                href="{{ $page->calendly_url }}" target="_blank">Get in
                                touch</a>. We'll either
                            help out or connect you with the folks who can.
                        </p>
                    </div>
                </div>
                <div class="xl:col-span-2">
                    <div class="flex flex-wrap max-w-3xl xl:max-w-4xl xl:mx-auto gap-3 xl:justify-center">
                        @foreach ($page->services as $item)
                            <p
                                class="flex-shrink-0 text-center bg-white px-5 py-4 text-4 xl:text-5 text-gray-900 leading-none -tracking-[0.5px]">
                                {{ $item }}
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="pricing" class="bg-{{ $page->color }}-50 py-32 ">
            <div class="px-6 md:px-10 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto">
                <div class="max-w-lg mx-auto">
                    <h2
                        class="text-10 md:text-12 font-medium text-center relative -tracking-[2.5px] text-gray-900 leading-none">
                        Choose a plan that suits your needs
                    </h2>
                    <p class="mt-7 text-gray-700 text-5 -tracking-[0.5px] text-center">
                        Need help deciding? <a class="underline hover:text-gray-900 transition-slow" target="_blank"
                            href="{{ $page->calendly_url }}">Book a call</a>
                    </p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 mt-16">
                    @foreach ($page->plans as $plan)
                        <div class="bg-white border-2 border-{{ $page->color }}-200 p-10 flex flex-col -m-px">
                            <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                                {{ $plan[0] }}
                            </h2>
                            <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug">{{ $plan[1] }}
                            </p>
                            <h3 class="mt-8 text-10 font-medium text-gray-900">
                                ${{ $plan[2] }}<span class="font-normal text-4 text-gray-700">/month</span>
                            </h3>
                            <p class="mt-1 text-3 text-gray-700 -tracking-[-0.5px] leading-snug">{{ $plan[3] }}
                            </p>
                            <a href="{{ $plan[4] }}" target="_blank"
                                class="-tracking-[0.5px] text-5 px-6 py-4 bg-{{ $page->color }}-400 text-white inline-flex items-center justify-center gap-4 mt-8 hover:bg-{{ $page->color }}-500 transition-slow">
                                Get started
                                <i class="fa-light
                                fa-arrow-right-long h-5 w-5"></i>
                            </a>

                            <a class="mt-3 text-gray-700 text-4 -tracking-[0.5px] text-center hover:text-gray-900 transition-slow underline"
                                target="_blank" href="{{ $page->calendly_url }}">Book a
                                call</a>
                        </div>
                    @endforeach
                    <div
                        class="bg-white border-2 border-{{ $page->color }}-200 p-10 flex flex-col lg:items-center -m-px bg-noise-{{ $page->color }} lg:col-span-3">
                        <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                            {{ $page->add_on_header }}
                        </h2>
                        <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug max-w-sm lg:text-center">
                            {{ $page->add_on_text }}
                        </p>
                        <p
                            class="mt-3 text-gray-700 text-4 -tracking-[0.5px] lg:text-center hover:text-gray-900 transition-slow">
                            <a class="underline" target="_blank" href="{{ $page->add_on_url }}">Learn more</a>
                        </p>
                    </div>
                    {{-- <div class="bg-white border-2 border-{{ $page->color }}-200 p-10 flex flex-col -m-px">
                        <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                            {{ $page->referral_header }}
                        </h2>
                        <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug">
                            {{ $page->referral_text }}
                        </p>
                        <p class="mt-3 text-gray-700 text-4 -tracking-[0.5px] hover:text-gray-900 transition-slow">
                            <a class="underline" target="_blank" href="{{ $page->referral_url }}">Join today</a>
                        </p> --}}
                </div>
            </div>
        </section>

        <section id="faqs" class="bg-white py-32">
            <div class="px-6 md:px-10 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto">
                <h2
                    class="text-10 md:text-12 font-medium text-center relative -tracking-[2.5px] text-gray-900 leading-none">
                    Frequently asked questions</h2>
                <p class="mt-7 text-gray-700 text-5 -tracking-[0.5px] text-center">Can’t find
                    what you’re looking for? <a
                        class="text-gray-700 -tracking-[0.5px] text-center hover:text-gray-900 transition-slow underline"
                        target="_blank" href="{{ $page->calendly_url }}">Book a
                        call</a></p>
                <div class="mt-16">
                    <dl
                        class="space-y-8 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-16 sm:space-y-0 lg:grid-cols-3 lg:gap-x-10">
                        @foreach ($page->faqs as $faq)
                            <div>
                                <dt class="text-5 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                                    {{ $faq[0] }}</dt>
                                <dd class="mt-2 text-4 text-gray-700 -tracking-[-0.5px] leading-relaxed">
                                    {!! $faq[1] !!}</dd>
                            </div>
                        @endforeach
                    </dl>
                </div>
            </div>
        </section>
        <section class="md:py-32 bg-{{ $page->color }}-50 2xl:px-0">
            <div
                class="bg-noise-{{ $page->color }} flex flex-col items-center justify-center mx-auto max-w-7xl p-8 md:p-20">

                <h2 class="text-10 text-gray-900 font-bold leading-none text-center max-w-2xl -tracking-[1px] z-10">
                    {{ $page->cta_header }}
                </h2>
                <a href="#pricing"
                    class="z-10 -tracking-[0.5px] text-5 px-6 py-4 bg-{{ $page->color }}-400 text-white inline-flex items-center justify-center gap-4 mt-8 mx-auto hover:bg-{{ $page->color }}-500 transition-slow">
                    Get started
                    <i class="fa-light fa-arrow-right-long h-5 w-5"></i>
                </a>
            </div>
        </section>
    </main>
    <footer class="bg-{{ $page->color }}-100 py-32">
        <div class="px-6 md:px-10 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto flex flex-col items-center gap-6">
            <a href="#top" class="flex-shrink-0">
                <img src="{{ $page->logo_path }}" alt="The Markham Square logo" class="h-8 xl:h-12">
            </a>
            <nav class="flex justify-center items-center gap-y-2 gap-x-8 md:gap-x-16 flex-wrap">
                <a href="#about" class="text-gray-700 text-4 hover:text-gray-900 transition-fast">about</a>
                <a href="#services" class="text-gray-700 text-4 hover:text-gray-900 transition-fast">services</a>
                <a href="#pricing" class="text-gray-700 text-4 hover:text-gray-900 transition-fast">pricing</a>
                <a href="#faqs" class="text-gray-700 text-4 hover:text-gray-900 transition-fast">faqs</a>
                {{-- <a href="#faqs" class="text-gray-700 text-4 hover:text-gray-900 transition-fast">terms of
                    use</a>
                <a href="#faqs" class="text-gray-700 text-4 hover:text-gray-900 transition-fast">privacy
                    policy</a> --}}
            </nav>
            <p class="text-gray-700 text-3 md:text-4">&copy; 2023 Markham Square.
                All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>
