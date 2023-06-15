@extends('_layouts.main')

@php
    //get two random posts, excluding the current one
    if ($posts->count() > 3) {
        $posts = $posts
            ->reject(function ($post) use ($page) {
                return $post->title === $page->title;
            })
            ->random(2);
    }
@endphp

@section('body')
    <header>
        @include('_partials.nav')
        @include('_partials.hero', [
            'title' => $page->title,
            'subtitle' => $page->author . ' • ' . date('F j, Y', $page->date),
        ])
        <section class="bg-neutral-800 bg-tile bg-repeat px-7 lg:px-0 pt-10 pb-20 flex justify-center ">
            <div class="w-full max-w-[1000px] grid grid-cols-2 gap-10">
                @include('_partials.image-card-large', [
                    'src' => $page->header_url,
                    'alt' => $page->header_alt,
                ])
            </div>
        </section>
    </header>

    <main>
        <section class="bg-white px-7 lg:px-0 py-20 flex justify-center">
            <article class="prose prose-xl lg:prose-2xl !leading-[42px] lg:!leading-[48px] font-primary text-neutral-950">
                @yield('content')
            </article>
        </section>
        @if ($posts->count() >= 3)
            <section class="bg-neutral-800 bg-tile bg-repeat px-7 xl:px-0 py-20 flex justify-center">
                <div class="w-full max-w-[1000px] flex flex-col">
                    <h2
                        class="text-8 sm:text-12 md:text-18 -tracking-[2px] md:-tracking-[4px] leading-[40px] sm:leading-[52px] md:leading-[72px] text-white font-medium">
                        More posts
                    </h2>

                    <div class="mt-8 grid grid-cols-2 gap-10 w-full">
                        @foreach ($posts as $post)
                            @include('_partials.image-card-small', [
                                'src' => $post->header_url,
                                'alt' => $post->header_alt,
                                'title' => $post->title,
                                'subtitle' => $post->description,
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
