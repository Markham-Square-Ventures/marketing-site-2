@extends('_layouts.main')

@section('body')
    <div id="top" class="bg-gradient-to-b from-green-100 to-white overflow-hidden relative min-h-screen">
        <header class="pt-6 lg:pt-10 px-6 lg:px-14 z-10 relative">
            <nav class="flex justify-center items-center gap-8 md:gap-16">
                <a href="#about" class="text-gray-700 text-3.5 md:text-4 hover:text-gray-900 transition-fast">about</a>
                <a href="#services" class="text-gray-700 text-3.5 md:text-4 hover:text-gray-900 transition-fast">services</a>
                <a href="{{ $page->getUrl() }}" class="flex-shrink-0">
                    <img src="/assets/images/development-leverage-logo.svg" alt="The Markham Square logo"
                        class="h-8 xl:h-10">
                </a>
                <a href="#pricing" class="text-gray-700 text-3.5 md:text-4 hover:text-gray-900 transition-fast">pricing</a>
                <a href="#faqs" class="text-gray-700 text-3.5 md:text-4 hover:text-gray-900 transition-fast">faqs</a>
            </nav>
            <div class="lg:max-w-3xl lg:mx-auto mt-24 lg:mt-32 flex flex-col">
                <h1
                    class="text-16 md:text-18 font-black text-center relative leading-[100%] text-gray-900 -tracking-[2.5px]">
                    Thank you
                    <span
                        class="bg-green-500 select-none h-4 w-4  inline-block translate-y-[2.55rem] md:translate-y-[3rem] -translate-x-1.5 md:-translate-x-2">&nbsp;</span>
                </h1>
                <p class="text-gray-700 text-5 text-center mt-10 mx-auto -tracking-[0.5px]">
                    You will receive an email shortly with instructions on how to access your request dashboard!
                </p>
                <p class="text-gray-700 text-5 text-center mt-2 mx-auto -tracking-[0.5px]">
                    If you run into any issues, please email us at <a href="mailto:hello@markhamsq.com"
                        class="underline">hello@markhamsq.com</a>
                </p>
            </div>
        </header>
        <svg width="384" height="1407" viewBox="0 0 384 1407" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="hidden lg:block absolute z-0 -right-4 top-96 w-80 h-auto select-none text-green-300">
            <mask id="mask0_88_348" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                width="720" height="1435">
                <rect x="2" y="2" width="396" height="1431" stroke="currentColor" stroke-width="4" />
                <rect x="82" y="82" width="396" height="1351" stroke="currentColor" stroke-width="4" />
                <rect x="162" y="162" width="396" height="1271" stroke="currentColor" stroke-width="4" />
                <rect x="242" y="242" width="396" height="1191" stroke="currentColor" stroke-width="4" />
                <rect x="322" y="322" width="396" height="1111" stroke="currentColor" stroke-width="4" />
            </mask>
            <g mask="url(#mask0_88_348)">
                <rect x="-76" y="-121" width="460" height="1528" fill="currentColor" />
            </g>
        </svg>
    </div>
@endsection
