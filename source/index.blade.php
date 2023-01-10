@extends('_layouts.main')

@section('body')
    <div class="bg-hero-gradient overflow-hidden relative">
        <header class="pt-6 lg:pt-10 px-6 lg:px-14 z-10 relative">
            <nav class="flex flex-col lg:flex-row justify-between items-center">
                <a href="/">
                    <img src="/assets/images/logo.svg" alt="The Markham Square logo" class="h-12 lg:h-20">
                </a>
                <ul class="font-secondary flex justify-between lg:justify-end w-full mt-6 lg:mt-0">
                    <li>
                        <a href="#about" class="text-gray-700 text-5 lg:text-6 hover:text-gray-900 transition-fast">About</a>
                    </li>
                    <li>
                        <a href="#process"
                            class="text-gray-700 text-5 lg:text-6 hover:text-gray-900 transition-fast lg:ml-20">Process</a>
                    </li>
                    <li>
                        <a href="/blog"
                            class="text-gray-700 text-5 lg:text-6 hover:text-gray-900 transition-fast lg:ml-20">Blog</a>
                    </li>
                    <li>
                        <a href="#contact"
                            class="text-orange-500 text-5 lg:text-6 hover:text-orange-600 transition-fast lg:ml-20">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="lg:max-w-7xl lg:mx-auto mt-24 lg:mt-32">
                <h1 class="text-16 lg:text-30 font-primary font-black text-center relative leading-[100%] text-gray-900">
                    Your digital product team, on tap
                    <span
                        class="bg-orange-500 h-4 w-4 lg:h-6 lg:w-6 inline-block translate-y-[2.5rem] lg:translate-y-[5.25rem] -translate-x-1 lg:-translate-x-2">&nbsp;</span>
                </h1>
                <p class="font-secondary text-gray-700 text-8 lg:text-12 text-center mt-12 max-w-5xl mx-auto">
                    Supercharge your digital product development with a flexible, full-service product team.
                </p>
            </div>
        </header>
        <img src="/assets/images/lines.png" alt="" class="hidden lg:block absolute z-0 -right-4 top-96 w-80 h-auto">
        <section
            class="pb-20 px-6 lg:px-14 flex lg:grid grid-cols-3 gap-4 lg:gap-8 lg:max-w-screen-2xl lg:mx-auto mt-20 overflow-y-scroll z-10 relative">
            <img src="/assets/images/fan-xp.jpg" class="min-w-[320px] min-h-[320px]" alt="">
            <img src="/assets/images/lynden-lane.jpg" class="min-w-[320px] min-h-[320px]" alt="">
            <img src="/assets/images/ewc.jpg" class="min-w-[320px] min-h-[320px]" alt="">
        </section>
    </div>
@endsection
