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
</head>

<body class="text-gray-900 font-sans antialiased selection:bg-orange-400 selection:text-white">
    <div class="bg-hero-gradient overflow-hidden relative">
        <header class="pt-6 lg:pt-10 px-6 lg:px-14 z-10 relative">
            <nav class="flex justify-center items-center gap-8 md:gap-16">
                <a href="/#about" class="text-gray-700 text-3 md:text-4 hover:text-gray-900 transition-fast">about</a>
                <a href="/#services"
                    class="text-gray-700 text-3 md:text-4 hover:text-gray-900 transition-fast">services</a>
                <a href="/" class="flex-shrink-0">
                    <img src="/assets/images/design-leverage-logo.svg" alt="The Markham Square logo"
                        class="h-8 xl:h-10">
                </a>
                <a href="/#pricing"
                    class="text-gray-700 text-3 md:text-4 hover:text-gray-900 transition-fast">pricing</a>
                <a href="/#faqs" class="text-gray-700 text-3 md:text-4 hover:text-gray-900 transition-fast">faqs</a>

            </nav>
            <div class="lg:max-w-3xl lg:mx-auto mt-24 lg:mt-32 flex flex-col">
                <h1
                    class="text-18 font-primary font-black text-center relative leading-[100%] text-gray-900 -tracking-[2.5px]">
                    {{ $page->hero_title }}
                    <span
                        class="bg-orange-500 select-none h-4 w-4  inline-block translate-y-[3rem] -translate-x-2">&nbsp;</span>
                </h1>
                <p class="font-secondary text-gray-700 text-5 text-center mt-10 mx-auto -tracking-[0.5px]">
                    {{ $page->hero_subtitle }}
                </p>
                <a href="/#pricing"
                    class="-tracking-[0.5px] text-5 px-5 py-4 bg-orange-400 text-white inline-flex items-center justify-center gap-4 mt-10 mx-auto">
                    Work with us
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5">
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path fill="currentColor"
                            d="M500.7 267.3L512 256l-11.3-11.3-144-144L345.4 89.4 322.7 112l11.3 11.3L450.7 240 16 240 0 240l0 32 16 0 434.7 0L334.1 388.7 322.7 400l22.6 22.6 11.3-11.3 144-144z" />
                    </svg>
                </a>
                <p class="mt-6 -tracking-[0.5px] text-3.5 text-gray-700 text-center">“100x better than what I had
                    originally imagined.” – Jason Chen
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
            <img src="/assets/images/fanxp-logo.svg" alt="FanXP's logo" class="h-10">
        </section>
    </main>
</body>

</html>
