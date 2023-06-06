@extends('_layouts.main')

@section('body')
    <header>
        @include('_partials.nav')
        @include('_partials.hero', [
            'title' => 'Quality obsessed, results focused',
            'subtitle' =>
                'We are digital artisans obsessed with crafting digital experiences that generate exceptional results for our clients.',
        ])

        <section class="bg-neutral-800 bg-tile bg-repeat px-7 lg:px-0 pt-10 pb-20 flex justify-center ">
            <div class="w-full max-w-[1000px] grid grid-cols-2 gap-10">
                @include('_partials.image-card-small', [
                    'src' => '/assets/images/nick.webp',
                    'alt' => 'A photo of Nick Basile.',
                    'title' => 'Nick Basile',
                    'subtitle' => 'Founder',
                    'href' => 'https://www.linkedin.com/in/nickbasile/',
                    'target' => '_blank',
                ])
                @include('_partials.image-card-small', [
                    'src' => '/assets/images/matt.webp',
                    'alt' => 'A photo of Matt Basile.',
                    'title' => 'Matt Basile',
                    'subtitle' => 'Founder',
                    'href' => 'https://www.linkedin.com/in/matthewbasile2/',
                    'target' => '_blank',
                ])
            </div>
            <section>

    </header>
    <main>
        <section class="bg-white px-7 lg:px-0 py-20 flex justify-center">
            <div class="w-full max-w-[1000px]">
                <h2
                    class="text-8 sm:text-12 md:text-18 -tracking-[2px] md:-tracking-[4px] leading-[40px] sm:leading-[52px] md:leading-[72px] text-neutral-800 max-w-[480px] md:max-w-[690px] font-medium">
                    Our values
                </h2>
                <div class="grid grid-cols-2 gap-10 mt-8">
                    <ul class="col-span-2">
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Exellence in everything
                            <span class="text-neutral-600">
                                – we set a high bar for quality in all things to achieve the best results possible
                            </span>
                        </li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Communication unlocks collaboration
                            <span class="text-neutral-600">
                                – we seek clarity & alignment to unlock effective collaboration
                            </span>
                        </li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Partners, not providers
                            <span class="text-neutral-600">
                                – we push beyond the transactional to drive lasting success
                            </span>
                        </li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Show > tell
                            <span class="text-neutral-600">
                                – we believe that the tangible drives more understanding than the abstract
                            </span>
                        </li>
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            Make things that matter
                            <span class="text-neutral-600">
                                – we focus our energy on work that people care about
                            </span>
                        </li>
                    </ul>

                </div>
            </div>
        </section>


        <section class="bg-neutral-800 bg-tile bg-repeat px-7 xl:px-0 py-20 flex justify-center">
            <div class="w-full max-w-[1000px] flex flex-col">
                <h2
                    class="text-8 sm:text-12 md:text-18 -tracking-[2px] md:-tracking-[4px] leading-[40px] sm:leading-[52px] md:leading-[72px] text-white font-medium">
                    Why us?
                </h2>

                <div class="mt-8 grid grid-cols-4 xl:grid-cols-3 gap-10 w-full">
                    <div class="p-5 border-[0.5px] border-white col-span-4 md:col-span-2 xl:col-span-1">
                        <h2 class="text-white text-7 -tracking-[1px] leading-[100%]">Deep expertise</h2>
                        <p class="mt-3 font-light text-neutral-200 text-4.5 -tracking-[1px] leading-[28px]">
                            With over a decade of product design, development, & management experience, we know how to apply
                            the best techniques at the right times to get you the results you need.
                        </p>
                    </div>
                    <div class="p-5 border-[0.5px] border-white col-span-4 md:col-span-2 xl:col-span-1">
                        <h2 class="text-white text-7 -tracking-[1px] leading-[100%]">Everything included</h2>
                        <p class="mt-3 font-light text-neutral-200 text-4.5 -tracking-[1px] leading-[28px]">
                            From strategy and research to design and engineering, we can handle all of your digital needs in
                            one, seamless partnership.
                        </p>
                    </div>
                    <div class="p-5 border-[0.5px] border-white col-span-4 md:col-span-2 xl:col-span-1">
                        <h2 class="text-white text-7 -tracking-[1px] leading-[100%]">Player-coaches</h2>
                        <p class="mt-3 font-light text-neutral-200 text-4.5 -tracking-[1px] leading-[28px]">
                            We are committed to not only shipping excellent work, but also leveling up your team so that
                            they can take over from us one day.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('_partials.footer')
@endsection
