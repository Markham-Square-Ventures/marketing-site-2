@extends('_layouts.main')

@section('body')
    <div class="bg-hero-gradient overflow-hidden relative min-h-screen">
        <header class="pt-6 lg:pt-10 px-6 lg:px-14 z-10 relative">
            @include('_partials.nav')
            <div class="lg:max-w-5xl lg:mx-auto mt-24 lg:mt-32">
                <h1 class="text-16 lg:text-24 font-primary font-black text-center relative leading-[100%] text-gray-900">
                    Thank you
                    <span
                        class="bg-orange-500 h-4 w-4 lg:h-5 lg:w-5 inline-block translate-y-[2.5rem] lg:translate-y-[4rem] -translate-x-2 lg:-translate-x-4">&nbsp;</span>
                </h1>
                <p class="font-secondary text-gray-700 text-6 lg:text-10 text-center mt-10 max-w-xl lg:max-w-4xl mx-auto">
                    We will be in touch shortly!
                </p>
                <a href="/"
                    class="text-gray-700 text-5 lg:text-6 hover:text-gray-900 transition-fast block mx-auto text-center underline mt-16">Take
                    me
                    home</a>
            </div>
        </header>
        <img src="/assets/images/lines.png" alt="Background lines"
            class="hidden lg:block absolute z-0 -right-4 top-96 w-80 h-auto">
    </div>
@endsection
