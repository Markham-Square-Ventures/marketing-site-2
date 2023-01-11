<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="scroll-smooth">

<head>
    <!-- /* The essentials */ -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title . ' | Markham Square' ?? 'Markham Square' }}</title>
    <!-- /* Open Graph tags for FB & Twitter */ --->
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $page->getUrl() }}">
    <meta property="og:title" content="{{ $page->title }}">
    <meta property="og:description" content="{{ $page->description }}">
    <meta property="og:image" content="{{ $page->cover_image ?? '/assets/images/seo-image.jpg' }}">
    <meta property="og:image:alt" content="The Markham Square logo on top of interlocking orange chevrons.">
    <!-- /* Twitter Large Image Summary Card */ -->
    <meta name="twitter:card" content="{{ $page->cover_image ?? '/assets/images/seo-image.jpg' }}">
    <meta name="twitter:site" content="@team_markhamsq">
    <meta name="twitter:creator" content="@team_markhamsq">
    <!-- /* Optional */ -->
    <meta name="twitter:title" content="{{ $page->title }}">
    <meta name="twitter:description" content="{{ $page->description }}">

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body class="text-gray-900 font-sans antialiased">
    @yield('body')
</body>

</html>
