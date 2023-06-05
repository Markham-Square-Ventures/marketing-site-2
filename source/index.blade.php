@extends('_layouts.main')

@section('body')
    <header>
        @include('_partials.nav')
        @include('_partials.hero', [
            'title' => 'We help teams succeed on the web',
            'subtitle' =>
                'Markham Square is a digital agency specialized in designing & building digital experiences for startups & established organizations.',
        ])

        <section class="bg-neutral-800 bg-tile bg-repeat px-7 lg:px-0 pt-10 pb-20 flex justify-center ">
            <div class="w-full max-w-[1000px] grid grid-cols-2 gap-10">
                @include('_partials.image-card-large', [
                    'src' => '/assets/images/case-studies/fanxp/base.jpg',
                    'alt' => 'A screenshot of the FanXP dashboard, it\'s quite good.',
                    'title' => 'FanXP',
                    'subtitle' => 'Building a platform where fandom is rewarded',
                    'href' => '/case-study/fanxp',
                ])
                @include('_partials.image-card-small', [
                    'src' => '/assets/images/case-studies/lynden-lane/base.jpg',
                    'alt' => 'A screenshot of the Lynden Lane website, it\'s trés chic.',
                    'title' => 'Lynden Lane',
                    'subtitle' => 'A new home for transformational events & interiors',
                    'href' => '/case-study/lynden-lane',
                ])
                @include('_partials.image-card-small', [
                    'src' => '/assets/images/case-studies/soldev/base.jpg',
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
                <h2
                    class="text-8 sm:text-12 md:text-18 -tracking-[2px] md:-tracking-[4px] leading-[40px] sm:leading-[52px] md:leading-[72px] text-neutral-800 max-w-[480px] md:max-w-[690px] font-medium">
                    Our expertise
                </h2>
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

        <section x-data="{
            currentPlan: 'design-code',
            planDetails: {
                'design-code': {
                    partnerTitle: 'Embedded Product Team',
                    websitePrice: '$10K+',
                    webAppPrice: '$20K+',
                    webPackageFeature: '- Design & development',
                    embeddedPackageFeatureOne: '- A full-service product team, on tap',
                    embeddedPackageFeatureTwo: '- Design, development, & more',
                },
                code: {
                    partnerTitle: 'Embedded Engineering Team',
                    websitePrice: '$7.5K+',
                    webAppPrice: '$15K+',
                    webPackageFeature: '- Development',
                    embeddedPackageFeatureOne: '- A full-service engineering team, on tap',
                    embeddedPackageFeatureTwo: '- Development & more',
                },
                design: {
                    partnerTitle: 'Embedded Design Team',
                    websitePrice: '$7.5K+',
                    webAppPrice: '$15K+',
                    webPackageFeature: '- Design',
                    embeddedPackageFeatureOne: '- A full-service design team, on tap',
                    embeddedPackageFeatureTwo: '- Design & more',
                }
            }
        }" x-cloak
            class="bg-neutral-800 bg-tile bg-repeat px-7 xl:px-0 py-20 flex justify-center">
            <div class="w-full max-w-[1200px] flex flex-col items-center">
                <h2
                    class="text-8 sm:text-12 md:text-18 -tracking-[2px] md:-tracking-[4px] leading-[40px] sm:leading-[52px] md:leading-[72px] text-white text-center font-medium">
                    Ready to get started?
                </h2>
                <div class="mt-8 p-1.5 border-[0.5px] border-white flex justify-between gap-2">
                    <button x-on:click="currentPlan = 'design-code'"
                        x-bind:class="{
                            'text-neutral-950 border-white bg-white': currentPlan === 'design-code',
                            'text-white border-transparent hover:bg-white hover:text-neutral-800 hover:border-white': currentPlan !=
                                'design-code'
                        }"
                        class="text-4 px-4 py-3.5 border-[0.5px] transition-slow">
                        Design & Code
                    </button>
                    <button x-on:click="currentPlan = 'code'"
                        x-bind:class="{
                            'text-neutral-950 border-white bg-white': currentPlan === 'code',
                            'text-white border-transparent hover:bg-white hover:text-neutral-800 hover:border-white': currentPlan !=
                                'code'
                        }"
                        class="text-4 px-4 py-3.5 border-[0.5px] transition-slow">
                        Just Code
                    </button>
                    <button x-on:click="currentPlan = 'design'"
                        x-bind:class="{
                            'text-neutral-950 border-white bg-white': currentPlan === 'design',
                            'text-white border-transparent hover:bg-white hover:text-neutral-800 hover:border-white': currentPlan !=
                                'design'
                        }"
                        class="text-4 px-4 py-3.5 border-[0.5px] transition-slow">
                        Just Design
                    </button>
                </div>
                <div class="mt-8 grid grid-cols-4 xl:grid-cols-3 gap-10 w-full">
                    <div class="p-5 border-[0.5px] border-white col-span-4 md:col-span-2 xl:col-span-1">
                        <h2 class="font-light text-white text-5 -tracking-[1px] leading-[32px]">Website</h2>
                        <h3 class="mt-2 font-light text-white text-14 -tracking-[1px]"
                            x-text="planDetails[currentPlan].websitePrice"></h3>
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
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]"
                                x-text="planDetails[currentPlan].webPackageFeature">
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Dedicated Slack channel
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Team onboarding & training
                            </li>
                        </ul>
                        <a href="https://calendly.com/nick-1330/markham-square-inquiry" target="_blank"
                            class="js-book-call mt-8 inline-block w-full text-center text-4 text-neutral-950 px-4 py-3.5 border-[0.5px] border-white bg-white hover:bg-neutral-200 hover:border-neutral-200 transition-slow">
                            Book Call
                        </a>
                    </div>
                    <div class="p-5 border-[0.5px] border-white col-span-4 md:col-span-2 xl:col-span-1">
                        <h2 class="font-light text-white text-5 -tracking-[1px] leading-[32px]">Web App</h2>
                        <h3 class="mt-2 font-light text-white text-14 -tracking-[1px]"
                            x-text="planDetails[currentPlan].webAppPrice"></h3>
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
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]"
                                x-text="planDetails[currentPlan].webPackageFeature">
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Dedicated Slack channel
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Team onboarding & training
                            </li>
                        </ul>
                        <a href="https://calendly.com/nick-1330/markham-square-inquiry" target="_blank"
                            class="js-book-call mt-8 inline-block w-full text-center text-4 text-neutral-950 px-4 py-3.5 border-[0.5px] border-white bg-white hover:bg-neutral-200 hover:border-neutral-200 transition-slow">
                            Book Call
                        </a>
                    </div>
                    <div class="p-5 border-[0.5px] border-white col-span-4 md:col-span-2 xl:col-span-1">
                        <h2 class="font-light text-white text-5 -tracking-[1px] leading-[32px]"
                            x-text="planDetails[currentPlan].partnerTitle">
                        </h2>
                        <h3 class="mt-2 font-light text-white text-14 -tracking-[1px]">Let's talk</h3>
                        <p class="mt-4 font-light text-white text-5 -tracking-[1px] leading-[32px]">For teams who need a
                            long-term partner to drive design & development results with them.</p>
                        <p
                            class="mt-8 font-light text-white text-5 -tracking-[1px] leading-[32px] pb-4 border-b-[0.5px] border-neutral-500">
                            Included in this package
                        </p>
                        <ul class="mt-4 flex flex-col gap-1">
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]"
                                x-text="planDetails[currentPlan].embeddedPackageFeatureOne">
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]"
                                x-text="planDetails[currentPlan].embeddedPackageFeatureTwo">
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Priority support in Slack
                            </li>
                            <li class="font-light text-white text-4.5 -tracking-[1px] leading-[32px]">
                                - Team coaching & training
                            </li>
                        </ul>
                        <a href="https://calendly.com/nick-1330/markham-square-inquiry" target="_blank"
                            class="js-book-call mt-8 inline-block w-full text-center text-4 text-neutral-950 px-4 py-3.5 border-[0.5px] border-white bg-white hover:bg-neutral-200 hover:border-neutral-200 transition-slow">
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
                        <a href="https://forms.reform.app/1e147r/digital-audit/z3qeml" target="_blank"
                            class="js-book-audit mt-8 inline-block w-full text-center text-4 text-white px-4 py-3.5 border-[0.5px] border-neutral-800 bg-neutral-800 hover:bg-neutral-700 hover:border-neutral-700 transition-slow">
                            Book Call
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('_partials.footer')
    @include('_partials.banner')
@endsection
