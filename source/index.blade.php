@extends('_layouts.main')

@section('body')
    <header>
        @include('_partials.nav')
        @include('_partials.hero', [
            'title' => 'We help teams succeed on the web',
            'subtitle' =>
                'Markham Square is a digital agency specialized in designing & building digital experiences for startups & established organizations.',
        ])

        <section class="bg-tile bg-repeat px-7 lg:px-0 pt-10 pb-20 flex justify-center ">
            <div class="w-full max-w-[1000px] grid grid-cols-2 gap-10">
                @include('_partials.image-card-large', [
                    'src' => '/assets/images/fanxp.jpg',
                    'alt' => 'A screenshot of the FanXP dashboard, it\'s quite good.',
                    'title' => 'FanXP',
                    'subtitle' => 'Building a platform where fandom is rewarded',
                    'href' => '/case-study/fanxp',
                ])
                @include('_partials.image-card-small', [
                    'src' => '/assets/images/lynden-lane.jpg',
                    'alt' => 'A screenshot of the Lynden Lane website, it\'s trés chic.',
                    'title' => 'Lynden Lane',
                    'subtitle' => 'A new home for transformational events & interiors',
                    'href' => '/case-study/lynden-lane',
                ])
                @include('_partials.image-card-small', [
                    'src' => '/assets/images/soldev.jpg',
                    'alt' => 'A screenshot of the SolDev website, mamma mia.',
                    'title' => 'SolDev',
                    'subtitle' => 'Bringing structure & style to the best Solana content',
                    'href' => '/case-study/soldev',
                ])
            </div>
            <section>

    </header>
    <main>
        <section class="bg-white px-7 lg:px-0 pt-20 flex justify-center">
            <div class="w-full max-w-[1000px]">
                <h1
                    class="text-12 md:text-18 -tracking-[2px] md:-tracking-[4px] leading-[52px] md:leading-[72px] text-neutral-800 max-w-[480px] md:max-w-[690px] font-medium">
                    Our expertise
                </h1>
                <div class="grid grid-cols-2 gap-10 mt-8">
                    <ul class="col-span-2 md:col-span-1">
                        <li
                            class="text-neutral-500 font-light -tracking-[1px] leading-[32px] text-5 pb-4 border-b-[0.5px] border-neutral-300">
                            Services</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Landing Pages</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Marketing Websites</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Web Apps</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Mobile Apps</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Digital Products</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Design Systems</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Figma to Code</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            API Integration & Development</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Digital & AI Automation</li>
                    </ul>
                    <ul class="col-span-2 md:col-span-1">
                        <li
                            class="text-neutral-500 font-light -tracking-[1px] leading-[32px] text-5 pb-4 border-b-[0.5px] border-neutral-300">
                            Industries</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Climate</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            E-commerce</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Fintech</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Education</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Blockchain</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Brick & Mortar Businesses</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Entertainment</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            B2B</li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            SaaS</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="bg-white px-7 lg:px-0 py-20 flex justify-center ">
            <div class="w-full max-w-[1000px] bg-tile bg-repeat p-8 md:p-20">
                <h3 class="text-white font-light -tracking-[1px] leading-[44px] text-7">"We came to them with the task of
                    building an aesthetically-driven, design-forward, functional site.
                    They took our ideas, built-upon them, and translated them into a rad digital experience. They are a one
                    stop shop for impeccable design, logic, and execution."</h2>
                    <div class="flex items-center gap-5 mt-6">
                        <img src="/assets/images/jenna.jpg" alt="A photo of Jenna Constantino" class="w-16 h-16">
                        <div>
                            <h4 class="text-white leading-[100%] -tracking-[1px] text-5">Jenna Constantino</h4>
                            <h5 class="mt-1 font-light text-white leading-[100%] -tracking-[1px] text-4.5">Lynden Lane</h5>
                        </div>
                    </div>
            </div>
        </section>

        <section class="bg-tile bg-repeat px-7 xl:px-0 py-20 flex justify-center">
            <div class="w-full max-w-[1200px] flex flex-col items-center">
                <h1
                    class="text-12 md:text-18 -tracking-[2px] md:-tracking-[4px] leading-[52px] md:leading-[72px] text-white text-center font-medium">
                    Ready to get started?
                </h1>
                <div class="mt-8 p-1.5 border-[0.5px] border-white flex justify-between gap-2">
                    <button
                        class="text-4 text-neutral-950 px-4 py-3.5 border-[0.5px] border-white bg-white transition-slow">
                        Design & Code
                    </button>
                    <button
                        class="text-4 text-white px-4 py-3.5 border-[0.5px] border-transparent hover:bg-white hover:text-neutral-800 hover:border-white transition-slow">
                        Just Code
                    </button>
                    <button
                        class="text-4 text-white px-4 py-3.5 border-[0.5px] border-transparent hover:bg-white hover:text-neutral-800 hover:border-white transition-slow">
                        Just Design
                    </button>
                </div>
                <div class="mt-8 grid grid-cols-4 xl:grid-cols-3 gap-10 w-full">
                    <div class="p-5 border-[0.5px] border-white col-span-4 md:col-span-2 xl:col-span-1">
                        <h2 class="font-light text-white text-5 -tracking-[1px] leading-[32px]">Website</h2>
                        <h3 class="mt-2 font-light text-white text-14 -tracking-[1px]">$10K+</h3>
                        <p class="mt-4 font-light text-white text-5 -tracking-[1px] leading-[32px]">Full-scale website & CMS
                            optimized for speed & SEO that'll supercharge your growth engine.</p>
                        <p
                            class="mt-8 font-light text-white text-5 -tracking-[1px] leading-[32px] pb-4 border-b-[0.5px] border-neutral-500">
                            Included in this package
                        </p>
                        <ul class="mt-4 flex flex-col gap-1">
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Built with Framer
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Design & development
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Dedicated Slack channel
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Team onboarding & training
                            </li>
                        </ul>
                        <a href=""
                            class="mt-8 inline-block w-full text-center text-4 text-neutral-950 px-4 py-3.5 border-[0.5px] border-white bg-white hover:bg-neutral-200 hover:border-neutral-200 transition-slow">
                            Book Call
                        </a>
                    </div>
                    <div class="p-5 border-[0.5px] border-white col-span-4 md:col-span-2 xl:col-span-1">
                        <h2 class="font-light text-white text-5 -tracking-[1px] leading-[32px]">Web App</h2>
                        <h3 class="mt-2 font-light text-white text-14 -tracking-[1px]">$20K+</h3>
                        <p class="mt-4 font-light text-white text-5 -tracking-[1px] leading-[32px]">Complex, interactive
                            experiences that require logic, accounts, payments, data processing, e-commerce, etc.</p>
                        <p
                            class="mt-8 font-light text-white text-5 -tracking-[1px] leading-[32px] pb-4 border-b-[0.5px] border-neutral-500">
                            Included in this package
                        </p>
                        <ul class="mt-4 flex flex-col gap-1">
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Custom solution
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Design & development
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Dedicated Slack channel
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Team onboarding & training
                            </li>
                        </ul>
                        <a href=""
                            class="mt-8 inline-block w-full text-center text-4 text-neutral-950 px-4 py-3.5 border-[0.5px] border-white bg-white hover:bg-neutral-200 hover:border-neutral-200 transition-slow">
                            Book Call
                        </a>
                    </div>
                    <div class="p-5 border-[0.5px] border-white col-span-4 md:col-span-2 xl:col-span-1">
                        <h2 class="font-light text-white text-5 -tracking-[1px] leading-[32px]">Embedded Product Team
                        </h2>
                        <h3 class="mt-2 font-light text-white text-14 -tracking-[1px]">Let's talk</h3>
                        <p class="mt-4 font-light text-white text-5 -tracking-[1px] leading-[32px]">For teams who need a
                            long-term partner to drive design & development results with them.</p>
                        <p
                            class="mt-8 font-light text-white text-5 -tracking-[1px] leading-[32px] pb-4 border-b-[0.5px] border-neutral-500">
                            Included in this package
                        </p>
                        <ul class="mt-4 flex flex-col gap-1">
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - A full-service product team, on tap
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Design, development, & more
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Priority support in Slack
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Team coaching & training
                            </li>
                        </ul>
                        <a href=""
                            class="mt-8 inline-block w-full text-center text-4 text-neutral-950 px-4 py-3.5 border-[0.5px] border-white bg-white hover:bg-neutral-200 hover:border-neutral-200 transition-slow">
                            Book Call
                        </a>
                    </div>
                    <div class="p-5 border-[0.5px] border-white bg-white col-span-4 md:col-span-2 xl:col-span-3">
                        <h2 class="font-light text-neutral-800 text-5 -tracking-[1px] leading-[32px]">Digital Audit
                        </h2>
                        <h3 class="mt-2 font-light text-neutral-800 text-14 -tracking-[1px]">Free</h3>
                        <p class="mt-4 font-light text-neutral-800 text-5 -tracking-[1px] leading-[32px]">
                            Not sure where to get started?
                        </p>
                        <p class="mt-2 font-light text-neutral-800 text-5 -tracking-[1px] leading-[32px]">
                            We'll audit your current digital presence & create an action plan for how to improve it.
                        </p>
                        <p
                            class="mt-8 font-light text-neutral-800 text-5 -tracking-[1px] leading-[32px] pb-4 border-b-[0.5px] border-neutral-500">
                            Included in this package
                        </p>
                        <ul class="mt-4 flex flex-col gap-1">
                            <li class="font-light text-neutral-800 text-4.5 -tracking-[1px] leading-[32px]">
                                - No commitment, no obligation
                            </li>
                            <li class="font-light text-neutral-800 text-4.5 -tracking-[1px] leading-[32px]">
                                - 30 minute conversation
                            </li>
                            <li class="font-light text-neutral-800 text-4.5 -tracking-[1px] leading-[32px]">
                                - One page action plan
                            </li>
                        </ul>
                        <a href=""
                            class="mt-8 inline-block w-full text-center text-4 text-white px-4 py-3.5 border-[0.5px] border-neutral-800 bg-neutral-800 hover:bg-neutral-700 hover:border-neutral-700 transition-slow">
                            Book Call
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
