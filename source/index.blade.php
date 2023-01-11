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
            <img src="/assets/images/fanxp-case-study.jpg" class="w-[320px] h-[320px] lg:h-full lg:w-full object-cover"
                alt="Higlighted assets created for FanXP by Markham Square.">
            <img src="/assets/images/lynden-case-study.jpg" class="w-[320px] h-[320px] lg:h-full lg:w-full object-cover"
                alt="Higlighted assets created for Lynden Lane by Markham Square.">
            <img src="/assets/images/ewc-case-study.jpg" class="w-[320px] h-[320px] lg:h-full lg:w-full object-cover"
                alt="Higlighted assets created for European Watch Company by Markham Square.">
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
                <h2 class="text-12 xl:text-20 font-primary font-black text-center relative leading-[100%] text-gray-900">
                    What we do
                    <span
                        class="bg-orange-500 h-3 w-3 xl:h-4 xl:w-4 inline-block translate-y-[2rem] xl:translate-y-[3.5rem] -translate-x-1 xl:-translate-x-3">&nbsp;</span>
                </h2>
                <p class="font-secondary text-gray-700 text-6 xl:text-10 text-center mt-8 max-w-5xl mx-auto">
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
                    class="w-28 xl:w-40 -translate-x-12 translate-y-14 xl:translate-y-20 z-0 relative"
                    alt="Stylized quotation marks">
                <p class="font-primary text-gray-900 text-6 xl:text-10 leading-relaxed z-10 relative">
                    <span class="font-black">Nick and Matt are internally referred to by our team as “the
                        magicians”.</span>
                    We came to them with the task of building an aesthetically-driven, design-forward, functional site. They
                    took our ideas, built-upon them, and
                    translated them into a rad digital experience. Nick and Matt anticipated our needs and were incredibly
                    supportive and trustworthy partners through the entirety of the process. They are a one stop shop for
                    impeccable design, logic, and execution.
                </p>
                <div class="flex gap-6 xl:gap-8 items-center mt-8">
                    <img src="/assets/images/jenna.jpg" alt="An photo of Jenna Constantino."
                        class="w-28 xl:w-32 shadow-outline-orange ml-[8px]">
                    <div>
                        <h4 class="font-secondary text-gray-900 font-semibold text-6 xl:text-8">Jenna Constantino</h4>
                        <p class="font-secondary text-gray-700 text-5 xl:text-6">The Lynden Lane Co.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="grid grid-cols-12 items-center xl:bg-services-gradient">
            <div
                class="col-span-12 xl:col-span-6 2xl:col-span-5 w-full px-6 md:px-16 2xl:pl-48 pt-24 pb-40 xl:py-32 flex flex-col bg-orange-100 xl:bg-transparent">
                <div class="mx-auto xl:mx-0 max-w-2xl 2xl:max-w-xl w-full">
                    <h2
                        class="text-12 xl:text-20 text-center xl:text-left font-primary font-black relative leading-[100%] text-gray-900">
                        Product team as a service
                        <span
                            class="bg-orange-500 h-3 w-3 xl:h-4 xl:w-4 inline-block translate-y-[2rem] xl:translate-y-[3.5rem] -translate-x-1 xl:-translate-x-3">&nbsp;</span>
                    </h2>
                </div>
                <hr class="border-orange-300 border-2 w-48 mt-12 mb-4 hidden xl:block" />
                <div class="max-w-lg 2xl:max-w-5xl hidden xl:block">
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
                class="col-span-12 xl:col-span-6 2xl:col-span-7 w-full px-6 2xl:ml-24 2xl:pr-72 pb-4 xl:py-32 bg-orange-50 xl:bg-transparent">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 w-full -translate-y-20 xl:translate-y-0">
                    <div class="bg-white p-8 border-t-4 border-orange-300">
                        <h3 class="font-primary text-gray-900 text-8">Flat rates</h3>
                        <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">
                            Get exactly what you paid for – no calculations, no hours tracking, no surprises.
                        </p>
                    </div>
                    <div class="bg-white p-8 border-t-4 border-orange-300">
                        <h3 class="font-primary text-gray-900 text-8">Full-service</h3>
                        <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">
                            Get a team that can do it all – design, development, product management, and more.
                        </p>
                    </div>
                    <div class="bg-white p-8 border-t-4 border-orange-300">
                        <h3 class="font-primary text-gray-900 text-8">Flexible by design</h3>
                        <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">
                            Pivot on a dime – change priorities whenever you need to suit your business.
                        </p>
                    </div>
                    <div class="bg-white p-8 border-t-4 border-orange-300">
                        <h3 class="font-primary text-gray-900 text-8">Quality you'll love</h3>
                        <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">
                            It's not our first rodeo – our expertise will make your project shine.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-orange-50">
            <div class="px-6 lg:px-14 lg:max-w-7xl lg:mx-auto xl:pt-24">
                <h2 class="text-12 xl:text-20 font-primary font-black text-center relative leading-[100%] text-gray-900">
                    How it works
                    <span
                        class="bg-orange-500 h-3 w-3 xl:h-4 xl:w-4 inline-block translate-y-[2rem] xl:translate-y-[3.5rem] -translate-x-1 xl:-translate-x-3">&nbsp;</span>
                </h2>

            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 px-8 mt-12 xl:-mt-48">
                <div class="xl:border-l-2 border-orange-100 py-8 xl:pt-80 xl:pb-24">
                    <h3 class="font-primary text-gray-900 text-8 px-8 border-l-4 border-orange-300 -ml-[2px]">Pilot
                    </h3>
                    <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed px-8">
                        Try before you buy – we start every relationship with a two sprint pilot to ensure we’re all on the
                        same page and getting the value expected.
                    </p>
                </div>
                <div class="xl:border-l-2 border-orange-100 py-8 xl:pt-80 xl:pb-24">
                    <h3 class="font-primary text-gray-900 text-8 px-8 border-l-4 border-orange-300 -ml-[2px]">
                        Roadmap
                    </h3>
                    <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed px-8">
                        Together, we’ll create a prioritized roadmap of sprints and begin executing.
                    </p>
                    <p class="font-secondary text-gray-700 text-5 mt-2 leading-relaxed px-8">
                        We'll review it monthly, but you can always revise your roadmap at any time to add new initiatives
                        or completely change priorities.
                    </p>
                </div>
                <div class="xl:border-l-2 border-orange-100 py-8 xl:pt-80 xl:pb-24">
                    <h3 class="font-primary text-gray-900 text-8 px-8 border-l-4 border-orange-300 -ml-[2px]">
                        Collaborate
                    </h3>
                    <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed px-8">
                        Now for the fun part – we’ll work closely together to to apply the best techniques at the right
                        times to get you the results you need.
                    </p>
                </div>
                <div class="xl:border-l-2 border-orange-100 py-8 xl:pt-80 xl:pb-24">
                    <h3 class="font-primary text-gray-900 text-8 px-8 border-l-4 border-orange-300 -ml-[2px]">
                        Level up
                    </h3>
                    <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed px-8">
                        Our goal is to get you to such a good place that your own product team can take over from us.
                    </p>
                    <p class="font-secondary text-gray-700 text-5 mt-2 leading-relaxed px-8">
                        So, as we continue to collaborate, we’ll also focus on leveling up your team and documenting our
                        work to make our eventual handoff a breeze. </p>
                </div>
            </div>
        </section>
        <section class="grid grid-cols-12 items-center">
            <div
                class="col-span-12 lg:col-span-7 2xl:col-span-8 w-full px-6 md:px-16 2xl:pl-48 pt-24 pb-16 lg:py-32 flex flex-col bg-white">
                <div class="max-w-2xl lg:max-w-xl w-full">
                    <h2 class="text-12 xl:text-20 font-primary font-black relative leading-[100%] text-gray-900">
                        Our process
                        <span
                            class="bg-orange-500 h-3 w-3 xl:h-4 xl:w-4 inline-block translate-y-[2rem] xl:translate-y-[3.5rem] -translate-x-1 xl:-translate-x-3">&nbsp;</span>
                    </h2>
                </div>
                <hr class="border-orange-300 border-2 w-48 mt-12 mb-16" />
                <p class="font-secondary text-gray-700 text-6 xl:text-10 max-w-2xl 2xl:max-w-3xl">
                    We work in two week sprints to discover insights, design solutions, and implement product updates.
                </p>
            </div>
            <div class="col-span-12 lg:col-span-5 2xl:col-span-4 flex flex-col">
                <div class="bg-orange-50 px-6 py-16 2xl:py-20 lg:px-12">
                    <h3 class="font-primary text-gray-900 text-8">Results-driven</h3>
                    <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">
                        At the start of each sprint, we set a clear, achievable goal. This could be implementing a feature,
                        conducting a product experiment, or designing a new idea.
                    </p>
                </div>
                <div class="bg-orange-100 px-6 py-16 2xl:py-20 lg:px-12">
                    <h3 class="font-primary text-gray-900 text-8">Responsive</h3>
                    <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">
                        Two weeks is just the right amount of time to learn if we should double-down on current priorities
                        or pivot to something new.
                    </p>
                </div>
                <div class="bg-orange-200 px-6 py-16 2xl:py-20 lg:px-12">
                    <h3 class="font-primary text-gray-900 text-8">Timeboxed</h3>
                    <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">
                        Each sprint, we deliver tangible results to ensure that your product is consistently improving. This
                        allows us to regularly validate new ideas, leading to better long-run outcomes. </p>
                </div>
            </div>
        </section>
    </main>
    <footer class="px-6 py-24 grid grid-cols-6 bg-orange-50 relative overflow-hidden">
        <img src="/assets/images/lines.png" alt="Background lines"
            class="hidden lg:block absolute z-0 -right-4 top-24 w-80 h-auto">
        <div class="col-span-2 flex flex-col justify-between relative z-10">
            <div>
                <div>
                    <h4 class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">Email</h4>
                    <a href="mailto:hi@markhamsq.com"
                        class="font-primary text-gray-900 text-8 hover:text-orange-500 transition-fast">hi@markhamsq.com</a>
                </div>
                <div>
                    <h4 class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">Socials</h4>
                    <div class="flex gap-4">
                        <a href="https://twitter.com/markhamsq" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10 text-gray-900 hover:text-orange-500 transition-fast" fill="currentColor"
                                viewBox="0 0 256 256">
                                <rect width="256" height="256" fill="none"></rect>
                                <path
                                    d="M128,88c0-22,18.5-40.3,40.5-40a40,40,0,0,1,36.2,24H240l-32.3,32.3A127.9,127.9,0,0,1,80,224c-32,0-40-12-40-12s32-12,48-36c0,0-64-32-48-120,0,0,40,40,88,48Z"
                                    fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="12"></path>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/markhamsq/" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10 text-gray-900 hover:text-orange-500 transition-fast" fill="currentColor"
                                viewBox="0 0 256 256">
                                <rect width="256" height="256" fill="none"></rect>
                                <rect x="36" y="36" width="184" height="184" rx="8"
                                    fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="12"></rect>
                                <line x1="120" y1="112" x2="120" y2="176" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="12"></line>
                                <line x1="88" y1="112" x2="88" y2="176" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="12"></line>
                                <path d="M120,140a28,28,0,0,1,56,0v36" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></path>
                                <circle cx="88" cy="80" r="10"></circle>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/markhamsq/" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10 text-gray-900 hover:text-orange-400 transition-fast" fill="currentColor"
                                viewBox="0 0 256 256">
                                <rect width="256" height="256" fill="none"></rect>
                                <circle cx="128" cy="128" r="40" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="12"></circle>
                                <rect x="36" y="36" width="184" height="184" rx="48"
                                    fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="12"></rect>
                                <circle cx="180" cy="76" r="10"></circle>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <a href="/">
                    <img src="/assets/images/mksq-logo.svg" alt="The Markham Square logo" class="h-12 lg:h-20">
                </a>
                <p class="text-secondary text-gray-700 uppercase text-4 mt-6 font-light tracking-wide">&copy;
                    {{ date('Y') }} Markham
                    Square
                    Ventures, LLC</p>
                <p class="text-secondary text-gray-700 uppercase text-4 mt-1 font-light tracking-wide">All Rights Reserved
                </p>
            </div>
        </div>
        <div class="col-span-4 relative z-10">
            <h2 class="text-12 xl:text-20 font-primary font-black relative leading-[100%] text-gray-900">
                Let's work together
                <span
                    class="bg-orange-500 h-3 w-3 xl:h-4 xl:w-4 inline-block translate-y-[2rem] xl:translate-y-[3.5rem] -translate-x-1 xl:-translate-x-3">&nbsp;</span>
            </h2>
            <form method="POST" action="https://forms.reform.app/headless/1e147r/untitled-form-1/104x26/submissions">
                <fieldset>
                    <legend>How can we help you?</legend>
                    <div>
                        <input type="radio" id="b13bb1bb-17ce-4002-a747-9f1ce2302a8f"
                            name="answers[bbefa74e-f4c8-4bde-86f5-9e16516aa360]" value="Websites" required />
                        <label for="b13bb1bb-17ce-4002-a747-9f1ce2302a8f">Websites</label>
                    </div>
                    <div>
                        <input type="radio" id="0cb4a430-851f-4c68-a49d-00676c5d2b60"
                            name="answers[bbefa74e-f4c8-4bde-86f5-9e16516aa360]" value="MVPs" required />
                        <label for="0cb4a430-851f-4c68-a49d-00676c5d2b60">MVPs</label>
                    </div>
                    <div>
                        <input type="radio" id="80c48ca3-9a66-426c-922c-c95029505790"
                            name="answers[bbefa74e-f4c8-4bde-86f5-9e16516aa360]" value="Automation" required />
                        <label for="80c48ca3-9a66-426c-922c-c95029505790">Automation</label>
                    </div>
                    <div>
                        <input type="radio" id="2b695772-7953-4191-bf97-44efca9b61fe"
                            name="answers[bbefa74e-f4c8-4bde-86f5-9e16516aa360]" value="More" required />
                        <label for="2b695772-7953-4191-bf97-44efca9b61fe">More</label>
                    </div>
                </fieldset>
                <div>
                    <label for="1aeb9ecb-915d-45fd-9246-ee27278f0505">What's your name?</label>
                    <input type="text" id="1aeb9ecb-915d-45fd-9246-ee27278f0505"
                        name="answers[1aeb9ecb-915d-45fd-9246-ee27278f0505]" placeholder="Jane Smith" required />
                </div>
                <div>
                    <label for="83676e2c-14ff-4705-b573-ee6bd2a95a8a">What's your email?</label>
                    <input type="email" id="83676e2c-14ff-4705-b573-ee6bd2a95a8a"
                        name="answers[83676e2c-14ff-4705-b573-ee6bd2a95a8a]" placeholder="jane@example.com" required />
                </div>
                <button type="submit">Get in touch</button>
            </form>
        </div>
    </footer>
@endsection
