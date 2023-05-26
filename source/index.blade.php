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
        <section class="bg-white px-7 lg:px-0 pt-20 flex justify-center ">
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
    </main>
@endsection
