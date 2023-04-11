<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="scroll-smooth">

<head>
    <!-- /* The essentials */ -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    @if ($page->getFilename() === 'index')
        @include('_partials.seo', [
            'title' => 'Markham Square',
            'description' => $page->description,
            'image' => $page->baseUrl . '/assets/images/seo-img.jpg',
            'image_alt' => 'The Markham Square logo on top of interlocking orange chevrons.',
        ])
    @elseif($page->getFilename() === 'essays')
        @include('_partials.seo', [
            'title' => 'Essays | Markham Square',
            'description' => 'Our latest thoughts on all things product.',
            'image' => $page->baseUrl . '/assets/images/seo-img.jpg',
            'image_alt' => 'The Markham Square logo on top of interlocking orange chevrons.',
        ])
    @else
        @include('_partials.seo', [
            'title' => $page->title . ' | Markham Square' ?? 'Markham Square',
            'description' => $page->seo_description ?? $page->description,
            'image' => $page->baseUrl . $page->header_url ?? $page->baseUrl . '/assets/images/seo-img.jpg',
            'image_alt' => $page->header_alt ?? 'The Markham Square logo on top of interlocking orange chevrons.',
        ])
    @endif

    <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#FF5200">
    <meta name="msapplication-TileImage" content="/assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/thin.min.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/light.min.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/fontawesome.min.js', 'assets/build') }}"></script>
</head>

<body class="text-gray-900 font-primary antialiased selection:bg-orange-400 selection:text-white">
    <div class="bg-hero-gradient overflow-hidden relative">
        <header class="pt-6 lg:pt-10 px-6 lg:px-14 z-10 relative">
            <nav class="flex justify-center items-center gap-8 md:gap-16">
                <a href="#about" class="text-gray-700 text-3 md:text-4 hover:text-gray-900 transition-fast">about</a>
                <a href="#services"
                    class="text-gray-700 text-3 md:text-4 hover:text-gray-900 transition-fast">services</a>
                <a href="{{ $page->getUrl() }}" class="flex-shrink-0">
                    <img src="{{ $page->logo_path }}" alt="The Markham Square logo" class="h-8 xl:h-10">
                </a>
                <a href="#pricing"
                    class="text-gray-700 text-3 md:text-4 hover:text-gray-900 transition-fast">pricing</a>
                <a href="#faqs" class="text-gray-700 text-3 md:text-4 hover:text-gray-900 transition-fast">faqs</a>
            </nav>
            <div class="lg:max-w-3xl lg:mx-auto mt-24 lg:mt-32 flex flex-col">
                <h1
                    class="text-16 md:text-18 font-black text-center relative leading-[100%] text-gray-900 -tracking-[2.5px]">
                    {{ $page->hero_title }}
                    <span
                        class="bg-orange-500 select-none h-4 w-4  inline-block translate-y-[2.55rem] md:translate-y-[3rem] -translate-x-1.5 md:-translate-x-2">&nbsp;</span>
                </h1>
                <p class=" text-gray-700 text-5 text-center mt-10 mx-auto -tracking-[0.5px]">
                    {{ $page->hero_subtitle }}
                </p>
                <a href="/#pricing"
                    class="-tracking-[0.5px] text-5 px-5 py-4 bg-orange-400 text-white inline-flex items-center justify-center gap-4 mt-10 mx-auto hover:bg-orange-500 transition-slow">
                    Work with us
                    <i class="fa-light fa-arrow-right-long h-5 w-5"></i>
                </a>
                <p class="mt-6 -tracking-[0.5px] text-3.5 text-gray-700 text-center">{{ $page->hero_quote }}
                </p>
            </div>
        </header>
        <img src="/assets/images/lines.png" alt="Background lines"
            class="hidden lg:block absolute z-0 -right-4 top-96 w-80 h-auto select-none">
        <section
            class="pb-20 px-6 2xl:px-0 flex md:grid grid-cols-3 gap-4 lg:gap-6 lg:max-w-screen-2xl lg:mx-auto mt-20 overflow-y-scroll z-10 relative">
            @foreach ($page->hero_images as $image)
                <img src="{{ $image[0] }}" class="w-[320px] h-[320px] lg:h-full lg:w-full object-cover select-none"
                    alt="{{ $image[1] }}">
            @endforeach
        </section>
    </div>
    <main class="overflow-hidden">
        <section
            class="py-6 px-6 lg:px-14 bg-orange-400 flex items-center justify-center gap-8 lg:gap-20 overflow-y-scroll">
            <img src="/assets/images/abaxx-logo.svg" alt="Abaxx's logo" class="h-8">
            <img src="/assets/images/lynden-logo.svg" alt="The Lynden Lane Co's logo" class="h-16">
            <img src="/assets/images/web-team-logo.svg" alt="The Web Team's logo" class="h-8">
            <img src="/assets/images/sol-dev-logo.svg" alt="SolDev.app's logo" class="h-8">
            <img src="/assets/images/ewc-logo.svg" alt="European Watch Company's logo" class="h-8">
            <img src="/assets/images/fanxp-logo.svg" alt="FanXP's logo" class="h-10">
        </section>
        <section id="about" class="bg-orange-50 pt-32 pb-72">
            <div class="px-6 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto">
                <h2
                    class="text-10 md:text-12 font-medium text-center relative -tracking-[2.5px] text-gray-900 max-w-lg leading-none mx-auto">
                    {{ $page->process_header }}
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 mt-16">
                    @foreach ($page->steps as $step)
                        <div
                            class="bg-white border-2 border-orange-200 p-8 lg:py-16 lg:px-20 flex flex-col items-center -m-px">
                            <i class="fa-thin text-orange-400 h-16 w-16 md:h-20 md:w-20 {{ $step[0] }}"></i>
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
            <div class="bg-noise flex flex-col items-center justify-center mx-auto max-w-7xl p-20">
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
            <div class="px-6 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto">
                <h2
                    class="text-10 md:text-12 font-medium text-center relative -tracking-[2.5px] text-gray-900 max-w-lg leading-none mx-auto">
                    {{ $page->benefits_header }}
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 mt-16 gap-8">
                    @foreach ($page->benefits as $benefit)
                        <div class="bg-white flex flex-col items-center px-8 md:py-2 xl:py-0">
                            <i class="fa-thin text-orange-400 h-16 w-16 md:h-20 md:w-20 {{ $benefit[0] }}"></i>
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
        <section id="services" class="py-32 bg-noise">
            <div class="px-6 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto grid grid-cols-1 xl:grid-cols-3 gap-8">
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
                <div class="xl:mt-0 flex flex-col gap-3 xl:items-center xl:col-span-2">
                    @foreach ($page->services as $row)
                        <div class="flex gap-3 flex-wrap">
                            @foreach ($row as $item)
                                <p
                                    class="flex-shrink-0 text-center bg-white px-5 py-4 text-4 xl:text-5 text-gray-900 leading-none -tracking-[0.5px]">
                                    {{ $item }}
                                </p>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="pricing" class="bg-orange-50 py-32 ">
            <div class="px-6 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto">
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
                        <div class="bg-white border-2 border-orange-200 p-10 flex flex-col -m-px">
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
                            <a href="{{ $plan[4] }}"
                                class="-tracking-[0.5px] text-5 px-5 py-4 bg-orange-400 text-white inline-flex items-center justify-center gap-4 mt-8 hover:bg-orange-500 transition-slow">
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
                        class="bg-white border-2 border-orange-200 p-10 flex flex-col xl:items-center -m-px bg-noise xl:col-span-2">
                        <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                            {{ $page->add_on_header }}
                        </h2>
                        <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug max-w-sm xl:text-center">
                            {{ $page->add_on_text }}
                        </p>
                        <p
                            class="mt-3 text-gray-700 text-4 -tracking-[0.5px] xl:text-center hover:text-gray-900 transition-slow">
                            <a class="underline" target="_blank" href="{{ $page->add_on_url }}">Learn more</a>
                        </p>
                    </div>
                    <div class="bg-white border-2 border-orange-200 p-10 flex flex-col -m-px">
                        <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                            {{ $page->referral_header }}
                        </h2>
                        <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug">
                            {{ $page->referral_text }}
                        </p>
                        <p class="mt-3 text-gray-700 text-4 -tracking-[0.5px] hover:text-gray-900 transition-slow">
                            <a class="underline" target="_blank" href="{{ $page->referral_url }}">Join today</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="faqs" class="bg-white py-32">
            <div class="px-6 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto">
                <h2
                    class="text-10 md:text-12 font-medium text-center relative -tracking-[2.5px] text-gray-900 leading-none">
                    Frequently asked questions</h2>
                <p class="mt-7 text-gray-700 text-5 -tracking-[0.5px] text-center">Can’t find
                    what you’re looking for? <a
                        class="text-gray-700 -tracking-[0.5px] text-center hover:text-gray-900 transition-slow underline"
                        target="_blank" href="{{ $page->calendly_url }}">Book a
                        call</a></p>
                <div class="mt-20">
                    <dl
                        class="space-y-16 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-16 sm:space-y-0 lg:grid-cols-3 lg:gap-x-10">
                        @foreach ($page->faqs as $faq)
                            <div>
                                <dt class="text-5 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                                    {{ $faq[0] }}</dt>
                                <dd class="mt-2 text-4 text-gray-700 -tracking-[-0.5px] leading-relaxed">
                                    {{ $faq[1] }}</dd>
                            </div>
                        @endforeach
                    </dl>
                </div>
            </div>
        </section>
    </main>
</body>

</html>