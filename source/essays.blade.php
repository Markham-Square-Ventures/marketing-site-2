@extends('_layouts.main')

@section('body')
    <div class="bg-gradient-to-b from-orange-100 to-white overflow-hidden relative pb-48">
        <header class="pt-6 lg:pt-10 px-6 lg:px-14 z-10 relative">
            @include('_partials.nav')
            <div class="lg:max-w-5xl lg:mx-auto mt-24 lg:mt-32">
                <h1 class="text-16 lg:text-24 font-primary font-black text-center relative leading-[100%] text-gray-900">
                    Essays
                    <span
                        class="bg-orange-500 h-4 w-4 lg:h-5 lg:w-5 inline-block translate-y-[2.5rem] lg:translate-y-[4rem] -translate-x-2 lg:-translate-x-4">&nbsp;</span>
                </h1>
                <p class="font-secondary text-gray-700 text-6 lg:text-10 text-center mt-10 max-w-xl lg:max-w-4xl mx-auto">
                    Our latest thoughts on all things product.
                </p>
            </div>
        </header>
    </div>
    <section class="px-6 2xl:px-0 pb-24">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 lg:gap-6 lg:max-w-screen-2xl lg:mx-auto">
            @foreach ($posts as $post)
                <a href="{{ $post->getUrl() }}" class="group">
                    <img src="{{ $post->header_url }}" alt="{{ $post->header_alt }}"
                        class="aspect-square object-cover group-hover:scale-[1.025] transition-slow">
                    <h3 class="font-primary text-gray-900 text-7 xl:text-8 mt-6 leading-snug">{{ $post->title }}</h3>
                    <p
                        class="font-secondary font-semibold text-gray-700 mt-4 text-5 group-hover:text-orange-400 transition-slow">
                        Read essay</p>
                </a>
            @endforeach
        </div>
    </section>

    @include('_partials.footer')
@endsection
