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
                ])
                @include('_partials.image-card-small', [
                    'src' => '/assets/images/lynden-lane.jpg',
                    'alt' => 'A screenshot of the Lynden Lane website, it\'s trés chic.',
                    'title' => 'Lynden Lane',
                    'subtitle' => 'A new home for transformational events & interiors',
                ])
                @include('_partials.image-card-small', [
                    'src' => '/assets/images/soldev.jpg',
                    'alt' => 'A screenshot of the SolDev website, mamma mia.',
                    'title' => 'SolDev',
                    'subtitle' => 'Bringing structure & style to the best Solana content',
                ])
            </div>
            <section>
    </header>
@endsection
