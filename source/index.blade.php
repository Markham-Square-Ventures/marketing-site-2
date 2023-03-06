@extends('_layouts.main')

@section('body')
    <div class="bg-hero-gradient overflow-hidden relative">
        <header class="pt-6 lg:pt-10 px-6 lg:px-14 z-10 relative">
            @include('_partials.nav')
            <div class="lg:max-w-5xl lg:mx-auto mt-24 lg:mt-32">
                <h1 class="text-16 lg:text-24 font-primary font-black text-center relative leading-[100%] text-gray-900">
                    Your digital product team, on tap
                    <span
                        class="bg-orange-500 select-none h-4 w-4 lg:h-5 lg:w-5 inline-block translate-y-[2.5rem] lg:translate-y-[4rem] -translate-x-2 lg:-translate-x-4">&nbsp;</span>
                </h1>
                <p class="font-secondary text-gray-700 text-6 lg:text-10 text-center mt-10 max-w-xl lg:max-w-4xl mx-auto">
                    Supercharge your digital product development with a flexible, full-service product team.
                </p>
            </div>
        </header>
        <img src="/assets/images/lines.png" alt="Background lines"
            class="hidden lg:block absolute z-0 -right-4 top-96 w-80 h-auto select-none">
        <section
            class="pb-20 px-6 2xl:px-0 flex md:grid grid-cols-3 gap-4 lg:gap-6 lg:max-w-screen-2xl lg:mx-auto mt-20 overflow-y-scroll z-10 relative">
            <img src="/assets/images/fanxp-case-study.jpg"
                class="w-[320px] h-[320px] lg:h-full lg:w-full object-cover select-none"
                alt="Higlighted assets created for FanXP by Markham Square.">
            <img src="/assets/images/lynden-case-study.jpg"
                class="w-[320px] h-[320px] lg:h-full lg:w-full object-cover select-none"
                alt="Higlighted assets created for Lynden Lane by Markham Square.">
            <img src="/assets/images/sol-dev-case-study.jpg"
                class="w-[320px] h-[320px] lg:h-full lg:w-full object-cover select-none"
                alt="Higlighted assets created for soldev.app by Markham Square.">
        </section>
    </div>
    <main class="overflow-hidden">
        <section
            class="py-6 px-6 lg:px-14 bg-orange-400 flex items-center lg:justify-center gap-8 lg:gap-12 overflow-y-scroll">
            <img src="/assets/images/abaxx-logo.svg" alt="Abaxx's logo" class="h-8">
            <img src="/assets/images/lynden-logo.svg" alt="The Lynden Lane Co's logo" class="h-16">
            <img src="/assets/images/web-team-logo.svg" alt="The Web Team's logo" class="h-8">
            <img src="/assets/images/sol-dev-logo.svg" alt="SolDev.app's logo" class="h-8">
            <img src="/assets/images/fanxp-logo.svg" alt="FanXP's logo" class="h-10">
        </section>

        <section id="about" class="grid grid-cols-12 items-center xl:bg-services-gradient">
            <div
                class="col-span-12 xl:col-span-6 2xl:col-span-5 w-full px-6 md:px-16 2xl:pl-48 pt-24 pb-40 xl:py-32 flex flex-col bg-orange-100 xl:bg-transparent">
                <div class="mx-auto xl:mx-0 max-w-2xl 2xl:max-w-xl w-full">
                    <h2
                        class="text-12 xl:text-20 text-center xl:text-left font-primary font-black relative leading-[100%] text-gray-900">
                        Product team as a service
                        <span
                            class="bg-orange-500 h-3 w-3 xl:h-4 xl:w-4 inline-block translate-y-[2rem] xl:translate-y-[3.5rem] -translate-x-1 xl:-translate-x-3 select-none">&nbsp;</span>
                    </h2>
                </div>
                <hr class="border-orange-300 border-2 w-48 mt-12 mb-4 hidden xl:block" />
                <div class="max-w-lg 2xl:max-w-5xl hidden xl:block">
                    <img src="/assets/images/quotes.svg"
                        class="w-14 lg:w-20 -translate-x-5 translate-y-14 lg:translate-y-12 z-0 relative select-none"
                        alt="Stylized quotation marks">
                    <p class="font-primary text-gray-900 text-6 lg:text-7 leading-relaxed z-10 relative">
                        <span class="font-black">That turned out 100x better</span>
                        than what I had originally imagined.
                    </p>
                    <div class="flex gap-2 lg:gap-5 items-center mt-6">
                        <img src="/assets/images/jason.jpg" alt="An photo of Jason Chen."
                            class="w-20 lg:w-24 shadow-outline-orange ml-[8px] select-none">
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
                        <h3 class="font-primary text-gray-900 text-7 xl:text-8">Flat rates</h3>
                        <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">
                            Get exactly what you paid for – no calculations, no hours tracking, no surprises.
                        </p>
                    </div>
                    <div class="bg-white p-8 border-t-4 border-orange-300">
                        <h3 class="font-primary text-gray-900 text-7 xl:text-8">Full-service</h3>
                        <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">
                            Get a team that can do it all – design, development, product management, and more.
                        </p>
                    </div>
                    <div class="bg-white p-8 border-t-4 border-orange-300">
                        <h3 class="font-primary text-gray-900 text-7 xl:text-8">Flexible by design</h3>
                        <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">
                            Pivot on a dime – change priorities whenever you need to suit your business.
                        </p>
                    </div>
                    <div class="bg-white p-8 border-t-4 border-orange-300">
                        <h3 class="font-primary text-gray-900 text-7 xl:text-8">Quality you'll love</h3>
                        <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">
                            It's not our first rodeo – our expertise will make your project shine.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-orange-50 pb-16 xl:pb-0 xl:pt-24">
            <div class="px-6 lg:px-14 lg:max-w-7xl lg:mx-auto">
                <h2 class="text-12 xl:text-20 font-primary font-black text-center relative leading-[100%] text-gray-900">
                    How it works
                    <span
                        class="bg-orange-500 h-3 w-3 xl:h-4 xl:w-4 inline-block translate-y-[2rem] xl:translate-y-[3.5rem] -translate-x-1 xl:-translate-x-3 select-none">&nbsp;</span>
                </h2>

            </div>
            <div
                class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 px-8 mt-12 xl:-mt-44 lg:max-w-screen-2xl lg:mx-auto 2xl:px-0">
                <div class="xl:border-l-2 border-orange-100 py-8 xl:pt-80 xl:pb-24">
                    <h3 class="font-primary text-gray-900 text-7 xl:text-8 px-8 border-l-4 border-orange-300 -ml-[2px]">
                        Pilot
                    </h3>
                    <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed px-8">
                        Try before you buy – we start every relationship with a two sprint pilot to ensure we’re all on the
                        same page and getting the value expected.
                    </p>
                </div>
                <div class="xl:border-l-2 border-orange-100 py-8 xl:pt-80 xl:pb-24">
                    <h3 class="font-primary text-gray-900 text-7 xl:text-8 px-8 border-l-4 border-orange-300 -ml-[2px]">
                        Roadmap
                    </h3>
                    <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed px-8">
                        Together, we’ll create a prioritized roadmap of sprints and begin executing. You can always revise
                        your roadmap at any time to add new initiatives
                        or completely change priorities.
                    </p>
                </div>
                <div class="xl:border-l-2 border-orange-100 py-8 xl:pt-80 xl:pb-24">
                    <h3 class="font-primary text-gray-900 text-7 xl:text-8 px-8 border-l-4 border-orange-300 -ml-[2px]">
                        Collaborate
                    </h3>
                    <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed px-8">
                        Now for the fun part – we’ll work closely together to apply the best techniques at the right
                        times to rapidly deliver the results you need.
                    </p>
                </div>
                <div class="xl:border-l-2 border-orange-100 py-8 xl:pt-80 xl:pb-24">
                    <h3 class="font-primary text-gray-900 text-7 xl:text-8 px-8 border-l-4 border-orange-300 -ml-[2px]">
                        Level up
                    </h3>
                    <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed px-8">
                        Our goal is to get you to such a good place that your own product team can take over. So,
                        we’ll also focus on leveling up your team and documenting our
                        work to make our eventual handoff a breeze.
                    </p>
                </div>
            </div>
        </section>

        <section class="flex justify-center items-center pb-32 px-6 lg:px-14 bg-orange-100">
            <div class="max-w-6xl">
                <img src="/assets/images/quotes.svg"
                    class="w-28 xl:w-40 -translate-x-12 translate-y-14 xl:translate-y-20 z-0 relative select-none"
                    alt="Stylized quotation marks">
                <p class="font-primary text-gray-900 text-6 xl:text-10 leading-relaxed z-10 relative">
                    <span class="font-black">Nick and Matt are internally referred to by our team as “the
                        magicians”.</span>
                    We came to them with the task of building an aesthetically-driven, design-forward, functional site. They
                    took our ideas, built-upon them, and
                    translated them into a rad digital experience. They are a one stop shop for
                    impeccable design, logic, and execution.
                </p>
                <div class="flex gap-6 xl:gap-8 items-center mt-8">
                    <img src="/assets/images/jenna.jpg" alt="An photo of Jenna Constantino."
                        class="w-28 xl:w-32 shadow-outline-orange ml-[8px] select-none">
                    <div>
                        <h4 class="font-secondary text-gray-900 font-semibold text-6 xl:text-8">Jenna Constantino</h4>
                        <p class="font-secondary text-gray-700 text-5 xl:text-6">The Lynden Lane Co.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="process" class="grid grid-cols-12 items-center">
            <div
                class="col-span-12 lg:col-span-7 2xl:col-span-8 w-full px-6 md:px-16 2xl:pl-48 pt-24 pb-16 lg:py-32 flex flex-col bg-white">
                <div class="max-w-2xl lg:max-w-xl w-full">
                    <h2 class="text-12 xl:text-20 font-primary font-black relative leading-[100%] text-gray-900">
                        Our process
                        <span
                            class="bg-orange-500 h-3 w-3 xl:h-4 xl:w-4 inline-block translate-y-[2rem] xl:translate-y-[3.5rem] -translate-x-1 xl:-translate-x-3 select-none">&nbsp;</span>
                    </h2>
                </div>
                <hr class="border-orange-300 border-2 w-48 mt-12 mb-16" />
                <p class="font-secondary text-gray-700 text-6 xl:text-10 max-w-2xl 2xl:max-w-3xl">
                    We work in two week sprints to discover insights, design solutions, and implement product updates.
                </p>
            </div>
            <div class="col-span-12 lg:col-span-5 2xl:col-span-4 flex flex-col">
                <div class="bg-orange-50 px-6 py-16 lg:px-12">
                    <h3 class="font-primary text-gray-900 text-7 xl:text-8">Results-driven</h3>
                    <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">
                        At the start of each sprint, we set a clear, achievable goal. This could be implementing a feature,
                        conducting a product experiment, or designing a new idea.
                    </p>
                </div>
                <div class="bg-orange-100 px-6 py-16 lg:px-12">
                    <h3 class="font-primary text-gray-900 text-7 xl:text-8">Responsive</h3>
                    <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">
                        Two weeks is just the right amount of time to learn if we should double-down on current priorities
                        or pivot to something new.
                    </p>
                </div>
                <div class="bg-orange-200 px-6 py-16 lg:px-12">
                    <h3 class="font-primary text-gray-900 text-7 xl:text-8">Timeboxed</h3>
                    <p class="font-secondary text-gray-700 text-5 mt-4 leading-relaxed">
                        Each sprint, we deliver tangible results to ensure that your product is consistently improving. This
                        allows us to regularly validate new ideas, leading to better long-run outcomes. </p>
                </div>
            </div>
        </section>

        <section class="pt-32 pb-16 bg-orange-100">
            <div class="px-6 lg:px-14 lg:max-w-7xl lg:mx-auto">
                <h2 class="text-12 xl:text-20 font-primary font-black text-center relative leading-[100%] text-gray-900">
                    What we do
                    <span
                        class="bg-orange-500 h-3 w-3 xl:h-4 xl:w-4 inline-block translate-y-[2rem] xl:translate-y-[3.5rem] -translate-x-1 xl:-translate-x-3 select-none">&nbsp;</span>
                </h2>
                <p class="font-secondary text-gray-700 text-6 xl:text-10 text-center mt-8 max-w-5xl mx-auto">
                    Our cross-functional product team works <span class="text-orange-500">directly</span> with you to <span
                        class="text-orange-500">build</span> and <span class="text-orange-500">optimize</span> your
                    digital
                    products.
                </p>
            </div>
            <div
                class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 mt-20 border-2 border-orange-300 lg:max-w-screen-2xl lg:mx-auto">
                <div class="p-6 2xl:p-8 bg-white border-orange-300 md:border-r-2">
                    <h3 class="font-primary text-gray-900 text-7 xl:text-8">Websites</h3>
                    <p class="text-5 font-secondary text-gray-900 mt-2">
                        Build a conversion engine that drives results for your business.
                    </p>
                    <ul class="mt-6">
                        <li class="text-4 font-secondary text-gray-700 mb-3 flex items-start leading-tight">
                            <img src="/assets/images/check-circle-light.svg" alt="A checkmark in a circle"
                                class="h-5 w-5 mr-3">
                            Make a statement in your crowded market
                        </li>
                        <li class="text-4 font-secondary text-gray-700 mb-3 flex items-start leading-tight">
                            <img src="/assets/images/check-circle-light.svg" alt="A checkmark in a circle"
                                class="h-5 w-5 mr-3">
                            Optimized for growth & conversions
                        </li>
                        <li class="text-4 font-secondary text-gray-700 flex items-start leading-tight">
                            <img src="/assets/images/check-circle-light.svg" alt="A checkmark in a circle"
                                class="h-5 w-5 mr-3">
                            Easy for you to manage and build on
                        </li>
                    </ul>
                </div>
                <div class="p-6 2xl:px-8 bg-white border-orange-300 xl:border-r-2 border-t-2 md:border-t-0">
                    <h3 class="font-primary text-gray-900 text-7 xl:text-8">MVPs</h3>
                    <p class="text-5 font-secondary text-gray-900 mt-2">
                        Quickly get to market and chart your path to happy customers.
                    </p>
                    <ul class="mt-6">
                        <li class="text-4 font-secondary text-gray-700 mb-3 flex items-start leading-tight">
                            <img src="/assets/images/check-circle-light.svg" alt="A checkmark in a circle"
                                class="h-5 w-5 mr-3">
                            Strategic guidance from professional builders
                        </li>
                        <li class="text-4 font-secondary text-gray-700 mb-3 flex items-start leading-tight">
                            <img src="/assets/images/check-circle-light.svg" alt="A checkmark in a circle"
                                class="h-5 w-5 mr-3">
                            Unlimited iterations as you learn from customers
                        </li>
                        <li class="text-4 font-secondary text-gray-700 mb-3 flex items-start leading-tight">
                            <img src="/assets/images/check-circle-light.svg" alt="A checkmark in a circle"
                                class="h-5 w-5 mr-3">
                            Designed for your team to build on
                        </li>
                    </ul>
                </div>
                <div class="p-6 2xl:p-8 bg-white border-orange-300 md:border-r-2 border-t-2 xl:border-t-0">
                    <h3 class="font-primary text-gray-900 text-7 xl:text-8">Automation</h3>
                    <p class="text-5 font-secondary text-gray-900 mt-2">
                        Automate the tedious, so you can focus on what matters.
                    </p>
                    <ul class="mt-6">
                        <li class="text-4 font-secondary text-gray-700 mb-3 flex items-start leading-tight">
                            <img src="/assets/images/check-circle-light.svg" alt="A checkmark in a circle"
                                class="h-5 w-5 mr-3">
                            Identify where automation will make an impact
                        </li>
                        <li class="text-4 font-secondary text-gray-700 mb-3 flex items-start leading-tight">
                            <img src="/assets/images/check-circle-light.svg" alt="A checkmark in a circle"
                                class="h-5 w-5 mr-3">
                            Streamline your existing workflows
                        </li>
                        <li class="text-4 font-secondary text-gray-700 mb-3 flex items-start leading-tight">
                            <img src="/assets/images/check-circle-light.svg" alt="A checkmark in a circle"
                                class="h-5 w-5 mr-3">
                            Keep your team focused on high-value activities
                        </li>
                    </ul>
                </div>
                <div class="p-6 2xl:p-8 bg-white border-orange-300 border-t-2 xl:border-t-0">
                    <h3 class="font-primary text-gray-900 text-7 xl:text-8">More...</h3>
                    <p class="text-5 font-secondary text-gray-900 mt-2">
                        Tap into our full-service product team to solve your unique needs.
                    </p>
                    <ul class="mt-6">
                        <li class="text-4 font-secondary text-gray-700 mb-3 flex items-start leading-tight">
                            <img src="/assets/images/check-circle-light.svg" alt="A checkmark in a circle"
                                class="h-5 w-5 mr-3">
                            Gain confidence in your next step
                        </li>
                        <li class="text-4 font-secondary text-gray-700 mb-3 flex items-start leading-tight">
                            <img src="/assets/images/check-circle-light.svg" alt="A checkmark in a circle"
                                class="h-5 w-5 mr-3">
                            Understand what’s possible
                        </li>
                        <li class="text-4 font-secondary text-gray-700 mb-3 flex items-start leading-tight">
                            <img src="/assets/images/check-circle-light.svg" alt="A checkmark in a circle"
                                class="h-5 w-5 mr-3">
                            Bring your ideas to life
                        </li>
                        <li class="text-4 font-secondary text-gray-700 mb-3 flex items-start leading-tight">
                            <img src="/assets/images/check-circle-light.svg" alt="A checkmark in a circle"
                                class="h-5 w-5 mr-3">
                            Optimize your team for success
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    @include('_partials.footer')
@endsection
