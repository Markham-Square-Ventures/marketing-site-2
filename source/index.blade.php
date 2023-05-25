@extends('_layouts.main')

@section('body')
    <header>
        @include('_partials.nav')
        @include('_partials.hero', [
            'title' => 'We help teams succeed on the web',
            'subtitle' => 'Markham Square is a digital agency specialized in designing & building digital experiences for startups &
                    established organizations.',
        ])
    </header>
@endsection
