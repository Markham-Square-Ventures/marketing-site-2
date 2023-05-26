@extends('_layouts.main')

@php
    $firstPost = $posts->first();
    
    //get all posts except the first one
    $posts = $posts->slice(1);
@endphp

@section('body')
    <header>
        @include('_partials.nav')
        @include('_partials.hero', [
            'title' => isset($firstPost) ? 'Ideas so good, we had to write \'em down' : 'Coming soon!',
            'subtitle' => isset($firstPost)
                ? 'Take a peek at our latest thoughts on how we approach design, development, technology, work, & more.'
                : 'Stay tuned for our latest thoughts on how we approach design, development, technology, work, & more.',
        ])

    </header>
    @isset($firstPost)
        <main class="bg-tile bg-repeat px-7 lg:px-0 pt-10 pb-20 flex justify-center ">
            <div class="w-full max-w-[1000px] grid grid-cols-2 gap-10">
                @include('_partials.image-card-large', [
                    'src' => $firstPost->header_url,
                    'alt' => $firstPost->header_alt,
                    'title' => $firstPost->title,
                    'subtitle' => $firstPost->description,
                    'href' => $firstPost->getUrl(),
                ])
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
        </main>
    @endisset

    @include('_partials.footer')
@endsection
