@extends('_layouts.main')

@php
    // $firstPost = $posts->first();
    
    // //get all posts except the first one
    // $postsWithoutTheFirst = $posts->slice(1);
@endphp

@section('body')
    <header>
        @include('_partials.nav')
        @include('_partials.hero', [
            'title' => 'Ideas so good, we had to write \'em down',
            'subtitle' =>
                'Take a peek at our latest thoughts on how we approach design, development, technology, work, & more.',
        ])

    </header>

    <main class="bg-neutral-800 bg-tile bg-repeat px-7 lg:px-0 pt-10 pb-20 flex flex-col items-center">
        <section class="w-full max-w-[1000px] grid grid-cols-2 gap-10">
            @foreach ($posts as $post)
                @if ($loop->first)
                    @include('_partials.image-card-large', [
                        'src' => $post->header_url,
                        'alt' => $post->header_alt,
                        'title' => $post->title,
                        'subtitle' => $post->description,
                        'href' => $post->getUrl(),
                    ])
                @else
                    @include('_partials.image-card-small', [
                        'src' => $post->header_url,
                        'alt' => $post->header_alt,
                        'title' => $post->title,
                        'subtitle' => $post->description,
                        'href' => $post->getUrl(),
                    ])
                @endif
            @endforeach
        </section>
    </main>
    @include('_partials.newsletter')


    @include('_partials.footer')
@endsection
