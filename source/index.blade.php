@extends('_layouts.main')

@section('body')
    <div class="bg-hero-gradient overflow-hidden relative">
        <header class="pt-6 lg:pt-10 px-6 lg:px-14 z-10 relative">
            <nav class="flex flex-col lg:flex-row justify-between items-center">
                <a href="/">
                    <img src="/assets/images/mksq-logo.svg" alt="The Markham Square logo" class="h-12 lg:h-20">
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
                        class="bg-orange-500 h-4 w-4 lg:h-6 lg:w-6 inline-block translate-y-[2.5rem] lg:translate-y-[5.25rem] -translate-x-2 lg:-translate-x-4">&nbsp;</span>
                </h1>
                <p class="font-secondary text-gray-700 text-8 lg:text-12 text-center mt-12 max-w-5xl mx-auto">
                    Supercharge your digital product development with a flexible, full-service product team.
                </p>
            </div>
        </header>
        <img src="/assets/images/lines.png" alt="Background lines"
            class="hidden lg:block absolute z-0 -right-4 top-96 w-80 h-auto">
        <section
            class="pb-20 px-6 lg:px-0 flex lg:grid grid-cols-3 gap-4 lg:gap-8 lg:max-w-screen-2xl lg:mx-auto mt-20 overflow-y-scroll z-10 relative">
            <img src="/assets/images/fanxp-case-study.jpg" class="min-w-[320px] min-h-[320px]"
                alt="Higlighted assets created for FanXP by Markham Square.">
            <img src="/assets/images/lynden-case-study.jpg" class="min-w-[320px] min-h-[320px]"
                alt="Higlighted assets created for Lynden Lane by Markham Square.">
            <img src="/assets/images/ewc-case-study.jpg" class="min-w-[320px] min-h-[320px]"
                alt="Higlighted assets created for European Watch Company by Markham Square.">
        </section>
    </div>
    <main>
        <section
            class="py-6 px-6 lg:px-14 bg-orange-400 flex items-center lg:justify-center gap-8 lg:gap-12 overflow-y-scroll">
            <img src="/assets/images/abaxx-logo.svg" alt="Abaxx's logo" class="h-8">
            <img src="/assets/images/lynden-logo.svg" alt="Abaxx's logo" class="h-16">
            <img src="/assets/images/ewc-logo.svg" alt="Abaxx's logo" class="h-8">
            <img src="/assets/images/fanxp-logo.svg" alt="Abaxx's logo" class="h-10">
            <img src="/assets/images/web-team-logo.svg" alt="Abaxx's logo" class="h-8">
        </section>
        <section class="py-32">
            <div class="px-6 lg:px-14 lg:max-w-7xl lg:mx-auto">
                <h2 class="text-12 lg:text-24 font-primary font-black text-center relative leading-[100%] text-gray-900">
                    What we do
                    <span
                        class="bg-orange-500 h-3 w-3 lg:h-5 lg:w-5 inline-block translate-y-[2rem] lg:translate-y-[4.125rem] -translate-x-1 lg:-translate-x-3">&nbsp;</span>
                </h2>
                <p class="font-secondary text-gray-700 text-8 lg:text-12 text-center mt-12 max-w-6xl mx-auto">
                    Our cross-functional product team works <span class="text-orange-500">directly</span> with you to <span
                        class="text-orange-500">build</span> and <span class="text-orange-500">optimize</span> your digital
                    products.
                </p>
            </div>
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 lg:max-w-screen-2xl lg:mx-auto mt-24 border-2 border-orange-200">
                <div class="p-6 bg-orange-50 border-orange-200 md:border-r-2">
                    <h3 class="font-primary text-gray-900 font-bold text-8">Websites</h3>
                    <ul class="list-disc pl-6 mt-4">
                        <li class="text-5 font-secondary text-gray-700 mb-2">Content strategy</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Web design</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Low code & custom development</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Conversion rate optimization</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">A/B testing & experimentation</li>
                        <li class="text-5 font-secondary text-gray-700">CMS integrations & development</li>
                    </ul>
                </div>
                <div class="p-6 bg-orange-50 border-orange-200 lg:border-r-2 border-t-2 md:border-t-0">
                    <h3 class="font-primary text-gray-900 font-bold text-8">MVPs</h3>
                    <ul class="list-disc pl-6 mt-4">
                        <li class="text-5 font-secondary text-gray-700 mb-2">User & market research</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Customer demand validation</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Product & service strategy</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Roadmap & project management</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Digital product design</li>
                        <li class="text-5 font-secondary text-gray-700">Low code & custom development</li>
                    </ul>
                </div>
                <div class="p-6 bg-orange-50 border-orange-200 md:border-r-2 border-t-2 lg:border-t-0">
                    <h3 class="font-primary text-gray-900 font-bold text-8">Automation</h3>
                    <ul class="list-disc pl-6 mt-4">
                        <li class="text-5 font-secondary text-gray-700 mb-2">Process audits</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">API integrations</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">No/low code tooling</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Workshops & training</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Client portals</li>
                        <li class="text-5 font-secondary text-gray-700">Custom solutions</li>
                    </ul>
                </div>
                <div class="p-6 bg-orange-50 border-orange-200 border-t-2 lg:border-t-0">
                    <h3 class="font-primary text-gray-900 font-bold text-8">More</h3>
                    <ul class="list-disc pl-6 mt-4">
                        <li class="text-5 font-secondary text-gray-700 mb-2">Product analytics & data</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Presentations design</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Design systems</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Executive guidance</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Product team coaching</li>
                        <li class="text-5 font-secondary text-orange-500">Need something else? Let's talk!</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection
