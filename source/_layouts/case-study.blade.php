@extends('_layouts.main')

@php
    if ($case_study->count() > 2) {
        $case_study = $case_study
            ->reject(function ($case_study) use ($page) {
                return $case_study === $page;
            })
            ->random(2);
    }
@endphp

@section('body')
    <header>
        @include('_partials.nav')
        @include('_partials.hero', [
            'title' => $page->title,
            'subtitle' => $page->subtitle,
        ])
        <section class="bg-tile bg-repeat px-7 lg:px-0 pt-10 pb-20 flex justify-center ">
            <div class="w-full max-w-[1000px] grid grid-cols-2 gap-10">
                @foreach ($page->images as $image)
                    @include('_partials.image-card-' . $image[0], [
                        'src' => $image[1],
                        'alt' => $image[2],
                        'title' => $image[3],
                    ])
                @endforeach
            </div>
        </section>
    </header>

    <main>
        <section class="bg-white px-7 lg:px-0 py-20 flex justify-center">
            <div class="w-full max-w-[1000px] grid grid-cols-3 gap-10 lg:gap-20 mt-8">
                <ul class="col-span-3 lg:col-span-1 order-last lg:order-first">
                    <li
                        class="text-neutral-500 font-light -tracking-[1px] leading-[32px] text-5 pb-4 border-b-[0.5px] border-neutral-300">
                        What we did</li>
                    @foreach ($page->services as $service)
                        <li
                            class="text-neutral-800 font-light -tracking-[1px] leading-[32px] text-5 py-4 border-b-[0.5px] border-neutral-300">
                            {{ $service }}</li>
                    @endforeach
                </ul>
                <article
                    class="space-y-4 col-span-3 lg:col-span-2 text-7 leading-[44px] -tracking-[1px] font-light font-primary text-neutral-950">
                    @yield('content')
                    <a href="{{ $page->project_link_href }}" target="_blank"
                        class="inline-block text-neutral-500 relative before:content-[''] before:absolute before:block before:w-full before:h-[0.5px] before:bottom-0 before:left-0 before:bg-neutral-500 before:origin-top-left before:scale-x-0 hover:before:scale-x-100 before:transition-slow">{{ $page->project_link_text }}</a>
                </article>
            </div>
        </section>
        @if ($case_study->count() >= 2)
            <section class="bg-tile bg-repeat px-7 xl:px-0 py-20 flex justify-center">
                <div class="w-full max-w-[1000px] flex flex-col">
                    <h1
                        class="text-12 md:text-18 -tracking-[2px] md:-tracking-[4px] leading-[52px] md:leading-[72px] text-white font-medium">
                        More projects
                    </h1>

                    <div class="mt-8 grid grid-cols-2 gap-10 w-full">
                        @foreach ($case_study as $post)
                            @include('_partials.image-card-small', [
                                'src' => $post->header_url,
                                'alt' => $post->header_alt,
                                'title' => $post->title,
                                'subtitle' => $post->subtitle,
                                'href' => $post->getUrl(),
                            ])
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </main>
    @include('_partials.footer')
@endsection
