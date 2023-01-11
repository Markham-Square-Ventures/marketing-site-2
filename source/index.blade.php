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
            <div class="lg:max-w-5xl lg:mx-auto mt-24 lg:mt-32">
                <h1 class="text-16 lg:text-24 font-primary font-black text-center relative leading-[100%] text-gray-900">
                    Your digital product team, on tap
                    <span
                        class="bg-orange-500 h-4 w-4 lg:h-5 lg:w-5 inline-block translate-y-[2.5rem] lg:translate-y-[4rem] -translate-x-2 lg:-translate-x-4">&nbsp;</span>
                </h1>
                <p class="font-secondary text-gray-700 text-6 lg:text-10 text-center mt-10 max-w-xl lg:max-w-4xl mx-auto">
                    Supercharge your digital product development with a flexible, full-service product team.
                </p>
            </div>
        </header>
        <img src="/assets/images/lines.png" alt="Background lines"
            class="hidden lg:block absolute z-0 -right-4 top-96 w-80 h-auto">
        <section
            class="pb-20 px-6 2xl:px-0 flex md:grid grid-cols-3 gap-4 lg:gap-6 lg:max-w-screen-2xl lg:mx-auto mt-20 overflow-y-scroll z-10 relative">
            <div class="w-[320px] h-[320px] lg:h-full lg:w-full">
                <img src="/assets/images/fanxp-case-study.jpg" class="object-cover"
                    alt="Higlighted assets created for FanXP by Markham Square.">
            </div>
            <div class="w-[320px] h-[320px] lg:h-full lg:w-full">
                <img src="/assets/images/lynden-case-study.jpg" class="object-cover"
                    alt="Higlighted assets created for Lynden Lane by Markham Square.">
            </div>
            <div class="w-[320px] h-[320px] lg:h-full lg:w-full">
                <img src="/assets/images/ewc-case-study.jpg" class="object-cover"
                    alt="Higlighted assets created for European Watch Company by Markham Square.">
            </div>
        </section>
    </div>
    <main class="overflow-hidden">
        <section
            class="py-6 px-6 lg:px-14 bg-orange-400 flex items-center lg:justify-center gap-8 lg:gap-12 overflow-y-scroll">
            <img src="/assets/images/abaxx-logo.svg" alt="Abaxx's logo" class="h-8">
            <img src="/assets/images/lynden-logo.svg" alt="The Lynden Lane Co's logo" class="h-16">
            <img src="/assets/images/web-team-logo.svg" alt="The Web Team's logo" class="h-8">
            <img src="/assets/images/ewc-logo.svg" alt="European Watch Company's logo" class="h-8">
            <img src="/assets/images/fanxp-logo.svg" alt="FanXP's logo" class="h-10">
        </section>
        <section class="pt-32 pb-16">
            <div class="px-6 lg:px-14 lg:max-w-7xl lg:mx-auto">
                <h2 class="text-12 lg:text-20 font-primary font-black text-center relative leading-[100%] text-gray-900">
                    What we do
                    <span
                        class="bg-orange-500 h-3 w-3 lg:h-5 lg:w-5 inline-block translate-y-[2rem] lg:translate-y-[3.25rem] -translate-x-1 lg:-translate-x-3">&nbsp;</span>
                </h2>
                <p class="font-secondary text-gray-700 text-6 lg:text-10 text-center mt-8 max-w-5xl mx-auto">
                    Our cross-functional product team works <span class="text-orange-500">directly</span> with you to <span
                        class="text-orange-500">build</span> and <span class="text-orange-500">optimize</span> your digital
                    products.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-20 border-2 border-orange-200">
                <div class="p-6 2xl:p-10 bg-orange-50 border-orange-200 md:border-r-2">
                    <h3 class="font-primary text-gray-900 text-8">Websites</h3>
                    <ul class="list-disc pl-6 mt-4">
                        <li class="text-5 font-secondary text-gray-700 mb-2">Content strategy</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Web design</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Low code & custom development</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Conversion rate optimization</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">A/B testing & experimentation</li>
                        <li class="text-5 font-secondary text-gray-700">CMS integrations & development</li>
                    </ul>
                </div>
                <div class="p-6 2xl:p-10 bg-orange-50 border-orange-200 lg:border-r-2 border-t-2 md:border-t-0">
                    <h3 class="font-primary text-gray-900 text-8">MVPs</h3>
                    <ul class="list-disc pl-6 mt-4">
                        <li class="text-5 font-secondary text-gray-700 mb-2">User & market research</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Customer demand validation</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Product & service strategy</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Roadmap & project management</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Digital product design</li>
                        <li class="text-5 font-secondary text-gray-700">Low code & custom development</li>
                    </ul>
                </div>
                <div class="p-6 2xl:p-10 bg-orange-50 border-orange-200 md:border-r-2 border-t-2 lg:border-t-0">
                    <h3 class="font-primary text-gray-900 text-8">Automation</h3>
                    <ul class="list-disc pl-6 mt-4">
                        <li class="text-5 font-secondary text-gray-700 mb-2">Process audits</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">API integrations</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">No/low code tooling</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Workshops & training</li>
                        <li class="text-5 font-secondary text-gray-700 mb-2">Client portals</li>
                        <li class="text-5 font-secondary text-gray-700">Custom solutions</li>
                    </ul>
                </div>
                <div class="p-6 2xl:p-10 bg-orange-50 border-orange-200 border-t-2 lg:border-t-0">
                    <h3 class="font-primary text-gray-900 text-8">More</h3>
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
        <section class="flex justify-center items-center pb-32 px-6 lg:px-14">
            <div class="max-w-6xl">
                <img src="/assets/images/quotes.svg"
                    class="w-28 lg:w-40 -translate-x-12 translate-y-14 lg:translate-y-20 z-0 relative"
                    alt="Stylized quotation marks">
                <p class="font-primary text-gray-900 text-6 lg:text-10 leading-relaxed z-10 relative">
                    <span class="font-black">Nick and Matt are internally referred to by our team as “the
                        magicians”.</span>
                    We came to them with the task of building an aesthetically-driven, design-forward, functional site. They
                    took our ideas, built-upon them, and
                    translated them into a rad digital experience. Nick and Matt anticipated our needs and were incredibly
                    supportive and trustworthy partners through the entirety of the process. They are a one stop shop for
                    impeccable design, logic, and execution.
                </p>
                <div class="flex gap-6 lg:gap-8 items-center mt-8">
                    <img src="/assets/images/jenna.jpg" alt="An photo of Jenna Constantino."
                        class="w-28 lg:w-32 shadow-outline-orange ml-[8px]">
                    <div>
                        <h4 class="font-secondary text-gray-900 font-semibold text-6 lg:text-8">Jenna Constantino</h4>
                        <p class="font-secondary text-gray-700 text-5 lg:text-6">The Lynden Lane Co.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="grid grid-cols-12 items-center 2xl:bg-services-gradient">
            <div
                class="col-span-12 2xl:col-span-5 w-full px-6 md:px-16 2xl:px-6 2xl:pl-48 pt-24 pb-48 2xl:py-32 flex flex-col bg-orange-100 2xl:bg-transparent">
                <div class="max-w-2xl 2xl:max-w-xl w-full">
                    <h2 class="text-12 lg:text-20 font-primary font-black relative leading-[100%] text-gray-900">
                        Product team as a service
                        <span
                            class="bg-orange-500 h-3 w-3 lg:h-5 lg:w-5 inline-block translate-y-[2rem] lg:translate-y-[3.25rem] -translate-x-1 lg:-translate-x-3">&nbsp;</span>
                    </h2>
                </div>
                <hr class="border-orange-300 border-2 w-48 mt-12 mb-4" />
                <div class="max-w-5xl">
                    <img src="/assets/images/quotes.svg"
                        class="w-14 lg:w-20 -translate-x-5 translate-y-14 lg:translate-y-12 z-0 relative"
                        alt="Stylized quotation marks">
                    <p class="font-primary text-gray-900 text-6 lg:text-7 leading-relaxed z-10 relative">
                        <span class="font-black">That turned out 100x better</span>
                        than what I had originally imagined.
                    </p>
                    <div class="flex gap-2 lg:gap-5 items-center mt-6">
                        <img src="/assets/images/jason.jpg" alt="An photo of Jason Chen."
                            class="w-20 lg:w-24 shadow-outline-orange ml-[8px]">
                        <div>
                            <h4 class="font-secondary text-gray-900 font-semibold text-6">Jason Chen</h4>
                            <p class="font-secondary text-gray-700 text-5">The Web Team</p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="col-span-12 2xl:col-span-7 w-full px-6 md:px-16 2xl:px-6 2xl:ml-24 2xl:pr-72 pb-4 2xl:py-32 bg-orange-50 2xl:bg-transparent">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 w-full -translate-y-20 2xl:translate-y-0">
                    <div class="bg-white p-8 border-t-4 border-orange-300">
                        <h3 class="font-primary text-gray-900 text-8">Flat rates</h3>
                        <p class="font-secondary text-gray-700 text-5 mt-2 leading-relaxed">
                            Get exactly what you paid for – no calculations, no hours tracking, no surprises.
                        </p>
                    </div>
                    <div class="bg-white p-8 border-t-4 border-orange-300">
                        <h3 class="font-primary text-gray-900 text-8">Full-service</h3>
                        <p class="font-secondary text-gray-700 text-5 mt-2 leading-relaxed">
                            Get a team that can do it all – design, development, product management, and more.
                        </p>
                    </div>
                    <div class="bg-white p-8 border-t-4 border-orange-300">
                        <h3 class="font-primary text-gray-900 text-8">Flexible by design</h3>
                        <p class="font-secondary text-gray-700 text-5 mt-2 leading-relaxed">
                            Pivot on a dime and change priorities whenever you need to suit your business.
                        </p>
                    </div>
                    <div class="bg-white p-8 border-t-4 border-orange-300">
                        <h3 class="font-primary text-gray-900 text-8">Prepared for handoff</h3>
                        <p class="font-secondary text-gray-700 text-5 mt-2 leading-relaxed">
                            Level up your own product team so you can take over from us when you’re ready.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
