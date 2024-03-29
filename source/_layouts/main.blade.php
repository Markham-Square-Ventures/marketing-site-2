<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="scroll-smooth">

<head>
    <!-- /* The essentials */ -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    @if ($page->getFilename() === 'index')
        @include('_partials.seo', [
            'title' => 'Markham Square',
            'description' => $page->description,
            'image' => $page->baseUrl . '/assets/images/seo-img.jpg',
            'image_alt' => 'The Markham Square logo on top of interlocking orange chevrons.',
            'site_name' => 'Markham Square',
        ])
    @elseif($page->getFilename() === 'about')
        @include('_partials.seo', [
            'title' => 'About | Markham Square',
            'description' =>
                'We are digital artisans obsessed with crafting digital experiences that generate exceptional results for our clients.',
            'image' => $page->baseUrl . '/assets/images/seo-img.jpg',
            'image_alt' => 'The Markham Square logo on top of interlocking orange chevrons.',
            'site_name' => 'Markham Square',
        ])
    @elseif($page->getFilename() === 'blog')
        @include('_partials.seo', [
            'title' => 'Blog | Markham Square',
            'description' =>
                'Our latest thoughts on how we approach design, development, technology, work, & more.',
            'image' => $page->baseUrl . '/assets/images/seo-img.jpg',
            'image_alt' => 'The Markham Square logo on top of interlocking orange chevrons.',
            'site_name' => 'Markham Square',
        ])
    @else
        @include('_partials.seo', [
            'title' => $page->title . ' | Markham Square' ?? 'Markham Square',
            'description' => $page->seo_description ?? $page->description,
            'image' => $page->baseUrl . $page->header_url ?? $page->baseUrl . '/assets/images/seo-img.jpg',
            'image_alt' => $page->header_alt ?? 'The Markham Square logo on top of interlocking orange chevrons.',
            'site_name' => 'Markham Square',
        ])

        @include('_partials.structured-data.article', [
            'headline' => $page->title ?? 'Markham Square',
            'image' => $page->baseUrl . $page->header_url ?? $page->baseUrl . '/assets/images/seo-img.jpg',
            'author' => $page->author ?? 'Markham Square',
            'author_url' => $page->author_url ?? $page->baseUrl,
            'published_at' => $page->date ? \Carbon\Carbon::parse($page->date)->toIso8601String() : null,
            'updated_at' => $page->date ? \Carbon\Carbon::parse($page->date)->toIso8601String() : null,
        ])
    @endif

    @include('_partials.structured-data.organization')

    <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#FF5200">
    <meta name="msapplication-TileImage" content="/assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @if ($page->production)
        <!-- Fathom - beautiful, simple website analytics -->
        <script src="https://cdn.usefathom.com/script.js" data-site="ZOIXFFJA" defer></script>
        <!-- / Fathom -->
    @endif
</head>

<body class="font-primary antialiased selection:bg-orange-400 selection:text-white relative pb-4">
    @yield('body')

    <script>
        document.querySelectorAll(".js-book-call").forEach((item) => {
            item.addEventListener("click", (event) => {
                fathom.trackGoal("TTUEAIZW", 0);
            });
        });

        document.querySelectorAll(".js-book-audit").forEach((item) => {
            item.addEventListener("click", (event) => {
                fathom.trackGoal("OPDDA4SG", 0);
            });
        });
    </script>
</body>

</html>
