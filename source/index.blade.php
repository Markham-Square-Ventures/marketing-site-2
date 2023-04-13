@extends('_layouts.main')

@section('body')
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
                    Your digital product team, on tap
                    <span
                        class="bg-orange-500 select-none h-3 w-3 md:h-4 md:w-4 inline-block translate-y-[2rem] md:translate-y-[2.55rem] lg:translate-y-[3rem] -translate-x-0.5 md:-translate-x-1.5 lg:-translate-x-2">&nbsp;</span>
                </h1>
                <p class="text-gray-700 text-5 text-center mt-10 mx-auto -tracking-[0.5px]">
                    Subscriptions to supercharge your
                    digital product development.
                </p>
                <a href="#about"
                    class="-tracking-[0.5px] text-5 px-6 py-4 bg-orange-400 text-white inline-flex items-center justify-center gap-4 mt-10 mx-auto hover:bg-orange-500 transition-slow">
                    Learn more
                    <i class="fa-light fa-arrow-right-long h-5 w-5"></i>
                </a>
            </div>
        </header>
        <svg width="384" height="1407" viewBox="0 0 384 1407" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="hidden lg:block absolute z-0 -right-4 top-96 w-80 h-auto select-none text-orange-300">
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
    <main class="overflow-hidden">
        <section
            class="py-6 px-6 lg:px-14 bg-orange-400 flex items-center md:justify-center gap-8 lg:gap-20 overflow-y-scroll">
            <img src="/assets/images/abaxx-logo.svg" alt="Abaxx's logo" class="h-8">
            <img src="/assets/images/lynden-logo.svg" alt="The Lynden Lane Co's logo" class="h-16">
            <img src="/assets/images/web-team-logo.svg" alt="The Web Team's logo" class="h-8">
            <img src="/assets/images/sol-dev-logo.svg" alt="SolDev.app's logo" class="h-8">
            <img src="/assets/images/ewc-logo.svg" alt="European Watch Company's logo" class="h-8">
            <img src="/assets/images/fanxp-logo.svg" alt="FanXP's logo" class="h-10">
        </section>
        <section id="about" class="bg-orange-50 pt-32 pb-72">
            <div class="px-6 md:px-10 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto">
                <p class="text-5 text-center text-orange-500">The big idea</p>
                <h2
                    class="mt-2 text-10 text-center relative -tracking-[2.5px] text-gray-900 max-w-4xl leading-snug mx-auto">
                    We replace wrangling freelancers and agencies with simple, predictable subscriptions, so you can get
                    back to leveling up your business.
                </h2>
            </div>
        </section>
        <section class="-mt-40">
            <div class="bg-noise-orange mx-auto max-w-7xl p-20 flex flex-col items-center justify-center">
                <p class="text-8 text-gray-900 font-regular leading-snug text-center max-w-4xl -tracking-[1px]">
                    "We came to them with the task of building an aesthetically-driven, design-forward, functional site.
                    They
                    took our ideas, built-upon them, and
                    translated them into a rad digital experience. They are a one stop shop for
                    impeccable design, logic, and execution."
                </p>
                <div class="flex gap-6 xl:gap-8 items-center mt-8">
                    <img src="/assets/images/jenna.jpg" alt="An photo of Jenna Constantino."
                        class="w-24 shadow-outline-orange ml-[8px] select-none">
                    <div>
                        <h4 class="text-gray-900 font-semibold text-6">Jenna Constantino</h4>
                        <p class="text-gray-700 text-5">The Lynden Lane Co.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="benefits" class="py-32">
            <div class="px-6 md:px-10 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto">
                <h2
                    class="text-10 md:text-12 font-medium text-center relative -tracking-[2.5px] text-gray-900 max-w-lg leading-none mx-auto">
                    Enjoy more value and less hassle
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 mt-16 gap-8">
                    <div class="bg-white flex flex-col items-center px-8 md:py-2 xl:py-0">
                        <i class="fa-thin text-orange-400 h-16 w-16 md:h-20 md:w-20 fa-money-bill-transfer"></i>
                        <h3
                            class="text-center mt-4 text-5 lg:text-6 text-gray-900 font-medium -tracking-[-0.5px] leading-snug">
                            Predictable rates
                        </h3>
                        <p class="text-center mt-2 text-4 lg:text-5 text-gray-700 -tracking-[-0.5px] leading-snug">
                            Get exactly what you paid for – no calculations, no tracking, no surprises.
                        </p>
                    </div>
                    <div class="bg-white flex flex-col items-center px-8 md:py-2 xl:py-0">
                        <i class="fa-thin text-orange-400 h-16 w-16 md:h-20 md:w-20 fa-play-pause"></i>
                        <h3
                            class="text-center mt-4 text-5 lg:text-6 text-gray-900 font-medium -tracking-[-0.5px] leading-snug">
                            Flexible by design
                        </h3>
                        <p class="text-center mt-2 text-4 lg:text-5 text-gray-700 -tracking-[-0.5px] leading-snug">
                            Go at your own pace – pause and resume your subscription whenever.
                        </p>
                    </div>
                    <div class="bg-white flex flex-col items-center px-8 md:py-2 xl:py-0">
                        <i class="fa-thin text-orange-400 h-16 w-16 md:h-20 md:w-20 fa-gem"></i>
                        <h3
                            class="text-center mt-4 text-5 lg:text-6 text-gray-900 font-medium -tracking-[-0.5px] leading-snug">
                            Quality you'll love
                        </h3>
                        <p class="text-center mt-2 text-4 lg:text-5 text-gray-700 -tracking-[-0.5px] leading-snug">
                            It's not our first rodeo – our years of experience will make your projects shine.
                        </p>
                    </div>
                    <div class="bg-white flex flex-col items-center px-8 md:py-2 xl:py-0">
                        <i class="fa-thin text-orange-400 h-16 w-16 md:h-20 md:w-20 fa-infinity"></i>
                        <h3
                            class="text-center mt-4 text-5 lg:text-6 text-gray-900 font-medium -tracking-[-0.5px] leading-snug">
                            Yours forever
                        </h3>
                        <p class="text-center mt-2 text-4 lg:text-5 text-gray-700 -tracking-[-0.5px] leading-snug">
                            Own what you pay for – all output is unique and yours to keep.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="py-32 bg-noise-orange">
            <div class="px-6 md:px-10 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto grid grid-cols-1 xl:grid-cols-3 gap-8">
                <div>
                    <div class="max-w-sm">
                        <h2
                            class="text-10 xl:text-12 font-medium relative -tracking-[2.5px] text-gray-900 max-w-lg leading-none">
                            What you need, when you need it
                        </h2>
                        <p class="mt-7 text-gray-700 text-5 -tracking-[0.5px]">
                            Need something else? <a class="underline hover:text-gray-900 transition-slow"
                                href="https://calendly.com/nick-1330/leverage-intro" target="_blank">Get in
                                touch</a>. We'll either
                            help out or connect you with the folks who can.
                        </p>
                    </div>
                </div>
                <div class="xl:col-span-2">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <div class="bg-white border-2 border-orange-200 p-10 flex flex-col -m-px">
                            <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                                Design Leverage
                            </h2>
                            <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug">
                                Leverage a design subscription to elevate your digital product.
                            </p>

                            <a href="/design-leverage"
                                class="-tracking-[0.5px] text-5 px-6 py-4 bg-purple-400 text-white inline-flex items-center justify-center gap-4 mt-8 hover:bg-purple-500 transition-slow">
                                Get started
                                <i class="fa-light
                                fa-arrow-right-long h-5 w-5"></i>
                            </a>

                            <a class="mt-3 text-gray-700 text-4 -tracking-[0.5px] text-center hover:text-gray-900 transition-slow underline"
                                target="_blank" href="https://calendly.com/nick-1330/leverage-intro">Book a
                                call</a>
                        </div>
                        <div class="bg-white border-2 border-orange-200 p-10 flex flex-col -m-px">
                            <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                                Development Leverage
                            </h2>
                            <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug">
                                Leverage a development subscription to bring your digital product to life.
                            </p>

                            <a href="/development-leverage"
                                class="-tracking-[0.5px] text-5 px-6 py-4 bg-green-400 text-white inline-flex items-center justify-center gap-4 mt-8 hover:bg-green-500 transition-slow">
                                Get started
                                <i class="fa-light
                                fa-arrow-right-long h-5 w-5"></i>
                            </a>

                            <a class="mt-3 text-gray-700 text-4 -tracking-[0.5px] text-center hover:text-gray-900 transition-slow underline"
                                target="_blank" href="https://calendly.com/nick-1330/leverage-intro">Book a
                                call</a>
                        </div>


                        <div class="bg-white border-2 border-orange-200 p-10 flex flex-col -m-px lg:col-span-2">
                            <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug text-center">
                                Need design & development?
                            </h2>
                            <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug text-center">
                                Get a 10% discount when you sign up for both subscriptions.
                            </p>
                        </div>
                    </div>
                </div>
        </section>

        <section id="work" class="py-32">
            <div class="px-6 md:px-10 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto">
                <h2
                    class="text-10 md:text-12 font-medium text-center relative -tracking-[2.5px] text-gray-900 max-w-lg leading-none mx-auto">
                    Selected work
                </h2>
                <section
                    class="flex md:grid grid-cols-2 gap-4 lg:gap-6 lg:max-w-7xl lg:mx-auto mt-20 overflow-y-scroll z-10 relative">
                    <img src="/assets/images/ewc-case-study.jpg"
                        class="w-[320px] h-[320px] lg:h-full lg:w-full object-cover select-none"
                        alt="Higlighted assets created for FanXP by Markham Square.">
                    <img src="/assets/images/fanxp-case-study.jpg"
                        class="w-[320px] h-[320px] lg:h-full lg:w-full object-cover select-none"
                        alt="Higlighted assets created for FanXP by Markham Square.">
                    <img src="/assets/images/lynden-case-study.jpg"
                        class="w-[320px] h-[320px] lg:h-full lg:w-full object-cover select-none"
                        alt="Higlighted assets created for FanXP by Markham Square.">
                    <img src="/assets/images/sol-dev-case-study.jpg"
                        class="w-[320px] h-[320px] lg:h-full lg:w-full object-cover select-none"
                        alt="Higlighted assets created for FanXP by Markham Square.">
                </section>
            </div>
        </section>

        <section class="md:py-32 bg-orange-50 2xl:px-0">
            <div class="bg-noise-orange flex flex-col items-center justify-center mx-auto max-w-7xl p-8 md:p-20">

                <h2 class="text-10 text-gray-900 font-bold leading-none text-center max-w-2xl -tracking-[1px] z-10">
                    Learn how a Markham Square subscription can unlock your digital product development.
                </h2>
                <a href="https://calendly.com/nick-1330/leverage-intro" target="_blank"
                    class="z-10 -tracking-[0.5px] text-5 px-6 py-4 bg-orange-400 text-white inline-flex items-center justify-center gap-4 mt-8 mx-auto hover:bg-{{ $page->color }}-500 transition-slow">
                    Book a call
                    <i class="fa-light fa-arrow-right-long h-5 w-5"></i>
                </a>
            </div>
        </section>
    </main>
    <footer class="bg-orange-100 py-32">
        <div class="px-6 md:px-10 2xl:px-0 lg:max-w-screen-2xl lg:mx-auto flex flex-col items-center gap-6">
            <a href="#top" class="flex-shrink-0">
                <img src="/assets/images/mksq-logo.svg" alt="The Markham Square logo" class="h-8 xl:h-12">
            </a>
            <nav class="flex justify-center items-center gap-y-2 gap-x-8 md:gap-x-16 flex-wrap">
                <a href="#about" class="text-gray-700 text-4 hover:text-gray-900 transition-fast">about</a>
                <a href="#benefits" class="text-gray-700 text-4 hover:text-gray-900 transition-fast">benefits</a>
                <a href="#services" class="text-gray-700 text-4 hover:text-gray-900 transition-fast">services</a>
                <a href="#work" class="text-gray-700 text-4 hover:text-gray-900 transition-fast">work</a>

            </nav>
            <p class="text-gray-700 text-3 md:text-4">&copy; 2023 Markham Square.
                All Rights Reserved.</p>
        </div>
    </footer>
@endsection
