@extends('_layouts.main')

@section('body')
    <div class="bg-gradient-to-b from-orange-100 to-white overflow-hidden relative pb-48">
        <header class="pt-6 lg:pt-10 px-6 lg:px-14 z-10 relative">
            @include('_partials.nav')
            <div class="lg:max-w-5xl lg:mx-auto mt-24 lg:mt-32">
                <h1 class="text-16 lg:text-24 font-primary font-black text-center relative leading-[100%] text-gray-900">
                    {{ $page->title }}
                    <span
                        class="bg-orange-500 h-4 w-4 lg:h-5 lg:w-5 inline-block translate-y-[2.5rem] lg:translate-y-[4rem] -translate-x-2 lg:-translate-x-4">&nbsp;</span>
                </h1>
                <p class="font-secondary text-gray-700 text-6 lg:text-10 text-center mt-10 max-w-xl lg:max-w-4xl mx-auto">
                    {{ $page->author }} • {{ date('F j, Y', $page->date) }}
                </p>
            </div>
        </header>
    </div>
    <article
        class="prose xl:prose-2xl prose-a:text-orange-400 prose-a:hover:text-orange-500 font-secondary prose-headings:font-primary mx-auto text-gray-700 pb-24">
        @yield('content')
    </article>
    @include('_partials.footer')
@endsection
